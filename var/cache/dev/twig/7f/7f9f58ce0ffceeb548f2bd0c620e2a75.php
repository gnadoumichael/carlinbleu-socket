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

/* content/rapportchantier.html.twig */
class __TwigTemplate_fe37e360f587d418aaa6716824ec335f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/rapportchantier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/rapportchantier.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-4\" style=\"margin-top: 20px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            ::. SUIVI DE CHANTIERS
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll\">
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 16
            yield "                                ";
            $context["p"] = 0;
            // line 17
            yield "                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 17)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 17), "count", [], "any", false, false, false, 17) > 0))) {
                // line 18
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 18))) {
                    // line 19
                    yield "                                        <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 21
                        yield "                                                ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 21))) {
                            // line 22
                            yield "                                                    ";
                            if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 22, $this->source); })()) == 0)) {
                                // line 23
                                yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                // line 26
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                                yield "\"
                                                                   class=\"text-white\"
                                                                   title=\"";
                                // line 28
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 28)), "html", null, true);
                                yield "\">
                                                                    -
                                                                    ";
                                // line 30
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 30)), "html", null, true);
                                yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                            }
                            // line 35
                            yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                            // line 37
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chchansuivi", ["id" => CoreExtension::getAttribute($this->env, $this->source,                             // line 40
$context["chantier"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                            // line 42
                            yield "\" class=\"text-pri\"
                                                               title=\"";
                            // line 43
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 43)), "html", null, true);
                            yield "\">
                                                                # ";
                            // line 44
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 44)), "html", null, true);
                            yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                            // line 48
                            $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 48, $this->source); })()) + 1);
                            // line 49
                            yield "                                                ";
                        }
                        // line 50
                        yield "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    yield "                                        </table>
                                        ";
                    // line 52
                    $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 52, $this->source); })()) + 1);
                    // line 53
                    yield "                                    ";
                }
                // line 54
                yield "                                ";
            }
            // line 55
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\" style=\"margin-top: 20px;\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            ";
        // line 63
        if ((($tmp =  !(null === (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 63, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 63, $this->source); })()), "client", [], "any", false, false, false, 63), "nomclient", [], "any", false, false, false, 63), "html", null, true);
            yield " | ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 63, $this->source); })()), "nomchantier", [], "any", false, false, false, 63), "html", null, true);
        }
        // line 64
        yield "                        </h4>
                        <div class=\"table-responsive\" style=\"overflow-x: scroll\">
                            ";
        // line 66
        if ((($tmp =  !(null === (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 66, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                                <div id=\"printchantier\">
                                    <section class=\"content\" style=\"margin-top: 40px !important;\" id=\"sechantier\">
                                        <div class=\"container-fluid\">
                                            <div class=\"block-header\">
                                                <div class=\"row clearfix p-b-5\">
                                                    <div class=\"col-xs-12 col-sm-12\">
                                                        <h4 class=\"text-center colo-pink bolo700\"><a
                                                                    href=\"\">IMPRIMER</a></h4>
                                                        <h2 class=\"text-center\">
                                                            ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 76, $this->source); })()), "etat", [], "any", false, false, false, 76) == "etude")) {
                yield " CHANTIER EN ÉTUDE ";
            }
            // line 77
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 77, $this->source); })()), "etat", [], "any", false, false, false, 77) == "encours")) {
                yield " CHANTIER EN COURS ";
            }
            // line 78
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 78, $this->source); })()), "etat", [], "any", false, false, false, 78) == "archiver")) {
                yield " CHANTIER TERMINÉ ";
            }
            // line 79
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 79, $this->source); })()), "etat", [], "any", false, false, false, 79) == "cloturer")) {
                yield " CHANTIER CLÔTURÉ ";
            }
            // line 80
            yield "                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=\"row clearfix m-t-20 p-b-5\" style=\"margin-top: 40px;\">
                                                    <div class=\"col-sm-12\"
                                                         style=\"margin-top: -40px; margin-bottom: 20px\">
                                                        <div class=\"card card-about-me\">
                                                            <div class=\"profile-header h3 text-white text-center bg-pri\"
                                                                 style=\"padding: 6px\">
                                                                <h4 class=\"font-bold\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 89, $this->source); })()), "nomchantier", [], "any", false, false, false, 89)), "html", null, true);
            yield "</h4>
                                                                <h4>
                                                                    <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 91, $this->source); })()), "getId", [], "method", false, false, false, 91)]), "html", null, true);
            yield "\"
                                                                       class=\"col-yellow bolo700\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 92, $this->source); })()), "nomclient", [], "any", false, false, false, 92)), "html", null, true);
            yield "</a>
                                                                </h4>
                                                                <h4 class=\"col-amber bolo600\">AVANCEMENT DU
                                                                    CHANTIER: ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 95, $this->source); })()), "progression", [], "any", false, false, false, 95), 2, ",", " "), "html", null, true);
            yield "
                                                                    %<br>
                                                                    <span style=\"font-size: 14px;\">(Selon les décomptes validés et factures d'acompte )</span>
                                                                </h4>
                                                            </div>
                                                            <div class=\"body\" style=\"margin-top: -20px\">
                                                                <ul>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">key</i>RÉFÉRENCE
                                                                            CONTRAT
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 108, $this->source); })()), "contrat", [], "any", false, false, false, 108), "html", null, true);
            yield "
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">person</i>SUPERVISEURS
                                                                        </div>
                                                                        <div class=\"content\">
                                                                            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 116, $this->source); })()), "superviseurs", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["super"]) {
                // line 117
                yield "                                                                                <p class=\"col-black\">
                                                                                    # ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["super"], "noms", [], "any", false, false, false, 118), "html", null, true);
                yield "</p>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['super'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">notes</i>DESCRIPTION
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            ";
            // line 127
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127));
            yield "
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">alarm</i>
                                                                            DÉBUT / FIN
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 136, $this->source); })()), "ddebut", [], "any", false, false, false, 136), "d/m/Y H:i"), "html", null, true);
            yield "
                                                                            / ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 137, $this->source); })()), "dfin", [], "any", false, false, false, 137), "d/m/Y H:i"), "html", null, true);
            yield "
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">location_on</i>
                                                                            LOCALISATION
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            <p> ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 146, $this->source); })()), "localisation", [], "any", false, false, false, 146)), "html", null, true);
            yield "</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-sm-12\" style=\"margin-top: -20px\">
                                                        <div class=\"row clearfix\" style=\"padding: 5px !important;\">
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-light-blue hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            COÛT
                                                                            <br>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 161, $this->source); })()), "cout", [], "any", false, false, false, 161), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-pink hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            COMMANDES<br>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 174, $this->source); })()), "depense", [], "any", false, false, false, 174), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-green hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            MARGE
                                                                            PRÉVUE<br>";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 188, $this->source); })()), "cout", [], "any", false, false, false, 188) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 188, $this->source); })()), "depense", [], "any", false, false, false, 188)), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-light-green hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\"font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            RÈGLEMENT<br>";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 201, $this->source); })()), "reglement", [], "any", false, false, false, 201), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-cyan hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            RESTE À
                                                                            PAYER<br>";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 215, $this->source); })()), "cout", [], "any", false, false, false, 215), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 215, $this->source); })()), "reglement", [], "any", false, false, false, 215), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 \">
                                                                <div class=\"info-box bg-deep-orange hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            BALANCE<br>";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 228, $this->source); })()), "reglement", [], "any", false, false, false, 228) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 228, $this->source); })()), "depense", [], "any", false, false, false, 228)), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-pri hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px; color:white\">
                                                                            COÛT DE VENTE
                                                                            <br>";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ventedevis"]) || array_key_exists("ventedevis", $context) ? $context["ventedevis"] : (function () { throw new RuntimeError('Variable "ventedevis" does not exist.', 242, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-purple hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold \"
                                                                             style=\"font-size: 14px;\">
                                                                            DÉPENSES RÉELLES
                                                                            <br>";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["depcaisse"]) || array_key_exists("depcaisse", $context) ? $context["depcaisse"] : (function () { throw new RuntimeError('Variable "depcaisse" does not exist.', 256, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-amber hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold \"
                                                                             style=\"font-size: 14px;\">
                                                                            MARGE ACTUELLE
                                                                            <br>";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 270, $this->source); })()), "cout", [], "any", false, false, false, 270) - (isset($context["depcaisse"]) || array_key_exists("depcaisse", $context) ? $context["depcaisse"] : (function () { throw new RuntimeError('Variable "depcaisse" does not exist.', 270, $this->source); })())), 2, ",", " "), "html", null, true);
            yield "
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row clearfix m-t-30 \">
                                                    <div class=\"col-xs-12 col-sm-12\">
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Relevé du chantier</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; margin-bottom: 10px; font-size: 11px !important;\">
                                                                    <thead>
                                                                    <tr style=\"color: dimgray !important;\">
                                                                        <th>DATE</th>
                                                                        <th>OPÉRATION</th>
                                                                        <th>SORTIE</th>
                                                                        <th>ENTRÉE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 298
            $context["sortie"] = 0;
            // line 299
            yield "                                                                    ";
            $context["entree"] = 0;
            // line 300
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["valider"]) || array_key_exists("valider", $context) ? $context["valider"] : (function () { throw new RuntimeError('Variable "valider" does not exist.', 300, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
                // line 301
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "type", [], "any", false, false, false, 301) != 2)) {
                    // line 302
                    yield "                                                                            ";
                    $context["sortie"] = ((isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 302, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["don"], "debit", [], "any", false, false, false, 302));
                    // line 303
                    yield "                                                                            ";
                    $context["entree"] = ((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 303, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["don"], "credit", [], "any", false, false, false, 303));
                    // line 304
                    yield "                                                                            <tr>
                                                                                <td class=\"nowrape\">";
                    // line 305
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "date", [], "any", false, false, false, 305), "Y.m.d"), "html", null, true);
                    yield "</td>

                                                                                ";
                    // line 307
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "type", [], "any", false, false, false, 307) == 1)) {
                        // line 308
                        yield "
                                                                                    <td title=\"";
                        // line 309
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "operation", [], "any", false, false, false, 309), "html", null, true);
                        yield "\">
                                                                                        <a href=\"";
                        // line 310
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "idlink", [], "any", false, false, false, 310), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 310, $this->source); })()), "id", [], "any", false, false, false, 310)]), "html", null, true);
                        yield "\"
                                                                                           class=\"col-black\">
                                                                                            CAISSE N°:
                                                                                            ";
                        // line 313
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "operation", [], "any", false, false, false, 313), "html", null, true);
                        yield "
                                                                                        </a>
                                                                                    </td>
                                                                                ";
                    }
                    // line 317
                    yield "
                                                                                ";
                    // line 318
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "type", [], "any", false, false, false, 318) == 3)) {
                        // line 319
                        yield "                                                                                    <td title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "operation", [], "any", false, false, false, 319), "html", null, true);
                        yield "\">
                                                                                        <a href=\"";
                        // line 320
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "idlink", [], "any", false, false, false, 320), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 320, $this->source); })()), "id", [], "any", false, false, false, 320)]), "html", null, true);
                        yield "\"
                                                                                           class=\"col-pink\">
                                                                                            ";
                        // line 322
                        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "operation", [], "any", false, false, false, 322)) > 60)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "operation", [], "any", false, false, false, 322), 0, 60)) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                         // line 323
$context["don"], "operation", [], "any", false, false, false, 323)), "html", null, true)));
                        yield "
                                                                                        </a>
                                                                                    </td>
                                                                                ";
                    }
                    // line 327
                    yield "                                                                                <td class=\"text-right\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "debit", [], "any", false, false, false, 327), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"text-right\"> ";
                    // line 328
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "credit", [], "any", false, false, false, 328), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                            </tr>
                                                                        ";
                }
                // line 331
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['don'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\"> ";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 337, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\"> ";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 338, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Devis validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th class=\"nowrape\">N° DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉGLÉ</th>
                                                                        <th>SOLDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 362
            $context["vdth"] = 0;
            // line 363
            yield "                                                                    ";
            $context["vdttc"] = 0;
            // line 364
            yield "                                                                    ";
            $context["regler"] = 0;
            // line 365
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 365, $this->source); })()), "devis", [], "any", false, false, false, 365));
            foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                // line 366
                yield "                                                                        ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 366))) {
                    // line 367
                    yield "                                                                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 367) == "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 367)))) {
                        // line 368
                        yield "                                                                                ";
                        $context["vdth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 368) + (isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 368, $this->source); })()));
                        // line 369
                        yield "                                                                                ";
                        $context["vdttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 369) + (isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 369, $this->source); })()));
                        // line 370
                        yield "                                                                            ";
                    }
                    // line 371
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 371) == "valide")) {
                        // line 372
                        yield "                                                                                ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 372))) {
                            // line 373
                            yield "                                                                                    ";
                            $context["regler"] = 0;
                            // line 374
                            yield "                                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "relevers", [], "any", false, false, false, 374));
                            foreach ($context['_seq'] as $context["_key"] => $context["rele"]) {
                                // line 375
                                yield "                                                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "type", [], "any", false, false, false, 375) == 3)) {
                                    // line 376
                                    yield "                                                                                            ";
                                    $context["regler"] = ((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 376, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 376));
                                    // line 377
                                    yield "                                                                                        ";
                                }
                                // line 378
                                yield "                                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['rele'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 379
                            yield "                                                                                    <tr>
                                                                                        <td class=\"nowrape\">";
                            // line 380
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 380), "Y.m.d"), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape bolo600\">
                                                                                            <a href=\"";
                            // line 382
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 382), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 382), "id", [], "any", false, false, false, 382)]), "html", null, true);
                            yield "\"
                                                                                               style=\"color:dodgerblue\">
                                                                                                ";
                            // line 384
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 384), "html", null, true);
                            yield "
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 387
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 387), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 388
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 388), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 389
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 389, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 390
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 390) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 390, $this->source); })())), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"";
                            // line 392
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 392));
                            yield "\">
                                                                                            ";
                            // line 393
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 393));
                            yield "
                                                                                        </td>
                                                                                    </tr>
                                                                                ";
                        }
                        // line 397
                        yield "                                                                            ";
                    }
                    // line 398
                    yield "
                                                                        ";
                }
                // line 400
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 406, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 407, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 408, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 409, $this->source); })()) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 409, $this->source); })())), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Devis non validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; margin-top: 5px; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th class=\"nowrape\">N° DEVIS</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉGLÉ</th>
                                                                        <th>SOLDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 430
            $context["ndth"] = 0;
            // line 431
            yield "                                                                    ";
            $context["ndttc"] = 0;
            // line 432
            yield "                                                                    ";
            $context["regler"] = 0;
            // line 433
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 433, $this->source); })()), "devis", [], "any", false, false, false, 433));
            foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                // line 434
                yield "                                                                        ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 434))) {
                    // line 435
                    yield "                                                                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 435) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 435)))) {
                        // line 436
                        yield "                                                                                ";
                        $context["ndth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 436) + (isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 436, $this->source); })()));
                        // line 437
                        yield "                                                                                ";
                        $context["ndttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 437) + (isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 437, $this->source); })()));
                        // line 438
                        yield "                                                                            ";
                    }
                    // line 439
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 439) == "save")) {
                        // line 440
                        yield "                                                                                ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 440))) {
                            // line 441
                            yield "                                                                                    ";
                            $context["regler"] = 0;
                            // line 442
                            yield "                                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "relevers", [], "any", false, false, false, 442));
                            foreach ($context['_seq'] as $context["_key"] => $context["rele"]) {
                                // line 443
                                yield "                                                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "type", [], "any", false, false, false, 443) == 3)) {
                                    // line 444
                                    yield "                                                                                            ";
                                    $context["regler"] = ((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 444, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 444));
                                    // line 445
                                    yield "                                                                                        ";
                                }
                                // line 446
                                yield "                                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['rele'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 447
                            yield "                                                                                    <tr>
                                                                                        <td class=\"nowrape\">";
                            // line 448
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 448), "Y.m.d"), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape bolo600\">
                                                                                            <a href=\"";
                            // line 450
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 450), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 450), "id", [], "any", false, false, false, 450)]), "html", null, true);
                            yield "\"
                                                                                               style=\"color:dodgerblue\">
                                                                                                ";
                            // line 452
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 452), "html", null, true);
                            yield "
                                                                                            </a>
                                                                                        </td>
                                                                                        </td>

                                                                                        <td class=\"text-right nowrape\">";
                            // line 457
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 457), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 458
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 458), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 459
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 459, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 460
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 460) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 460, $this->source); })())), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"";
                            // line 462
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 462));
                            yield "\">
                                                                                            ";
                            // line 463
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 463));
                            yield "
                                                                                        </td>
                                                                                    </tr>
                                                                                ";
                        }
                        // line 467
                        yield "                                                                            ";
                    }
                    // line 468
                    yield "
                                                                        ";
                }
                // line 470
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 471
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 476, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 477, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 478, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 479, $this->source); })()) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 479, $this->source); })())), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Bons de suivi de commande
                                                                    validés</h4>
                                                                <table class=\"table-striped table-bordered display nowrape\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>N° BON DE SUIVI</th>
                                                                        <th>N° DE DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 504, $this->source); })()), "bons", [], "any", false, false, false, 504));
            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                // line 505
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 505) == "valide")) {
                    // line 506
                    yield "                                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 506))) {
                        // line 507
                        yield "                                                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 507) == "prepa")) {
                            // line 508
                            yield "                                                                                    <tr>
                                                                                        <td class=\"nowrape\">";
                            // line 509
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 509), "Y-m-d"), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape\"><span
                                                                                                    class=\"badge badge-pill badge-primary text-white\">V</span>
                                                                                            <a href=\"";
                            // line 512
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 512), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 512), "id", [], "any", false, false, false, 512)]), "html", null, true);
                            yield "\">BON
                                                                                                N° ";
                            // line 513
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 513), "html", null, true);
                            yield "</a>
                                                                                        </td>
                                                                                        <td class=\"nowrape\">";
                            // line 515
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 515))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 516
                                yield "                                                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 516), "etat", [], "any", false, false, false, 516) != "valide")) {
                                    // line 517
                                    yield "                                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span> ";
                                } else {
                                    // line 518
                                    yield "                                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>";
                                }
                                // line 519
                                yield "                                                                                                <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 519), "id", [], "any", false, false, false, 519), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 519), "id", [], "any", false, false, false, 519)]), "html", null, true);
                                yield "\"
                                                                                                   style=\"color:dodgerblue\">DEVIS
                                                                                                    N° ";
                                // line 521
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 521), "iddevis", [], "any", false, false, false, 521), "html", null, true);
                                yield "</a>
                                                                                            ";
                            }
                            // line 522
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 523
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 523), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 524
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 524), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"";
                            // line 526
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 526));
                            yield "\">";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 526));
                            yield "</td>
                                                                                    </tr>
                                                                                ";
                        }
                        // line 529
                        yield "                                                                            ";
                    }
                    // line 530
                    yield "                                                                        ";
                }
                // line 531
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            yield "                                                                    </tbody>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:20px\">
                                                                    Bons de suivi de commande non validés</h4>
                                                                <table class=\"table-striped table-bordered display nowrape\"
                                                                       style=\"width: 100%;font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>N° BON DE SUIVI</th>
                                                                        <th>N° DE DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 549
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 549, $this->source); })()), "bons", [], "any", false, false, false, 549));
            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                // line 550
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 550) == "save")) {
                    // line 551
                    yield "                                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 551))) {
                        // line 552
                        yield "                                                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 552) == "prepa")) {
                            // line 553
                            yield "                                                                                    <tr>
                                                                                        <td class=\"nowrape\">";
                            // line 554
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 554), "Y-m-d"), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape\"><span
                                                                                                    class=\"badge badge-pill bg-blue-grey text-white\">V</span>
                                                                                            <a href=\"";
                            // line 557
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 557), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 557), "id", [], "any", false, false, false, 557)]), "html", null, true);
                            yield "\">BON
                                                                                                N° ";
                            // line 558
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 558), "html", null, true);
                            yield "</a>
                                                                                        </td>
                                                                                        <td class=\"nowrape\">";
                            // line 560
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 560))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 561
                                yield "                                                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 561), "etat", [], "any", false, false, false, 561) != "valide")) {
                                    // line 562
                                    yield "                                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span> ";
                                } else {
                                    // line 563
                                    yield "                                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>";
                                }
                                // line 564
                                yield "                                                                                                <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 564), "id", [], "any", false, false, false, 564), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 564), "id", [], "any", false, false, false, 564)]), "html", null, true);
                                yield "\"
                                                                                                   style=\"color:dodgerblue\">DEVIS
                                                                                                    N° ";
                                // line 566
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 566), "iddevis", [], "any", false, false, false, 566), "html", null, true);
                                yield "</a>
                                                                                            ";
                            }
                            // line 567
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 568
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 568), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right nowrape\">";
                            // line 569
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 569), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"";
                            // line 571
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 571));
                            yield "\">";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 571));
                            yield "</td>
                                                                                    </tr>
                                                                                ";
                        }
                        // line 574
                        yield "                                                                            ";
                    }
                    // line 575
                    yield "                                                                        ";
                }
                // line 576
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 577
            yield "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Bons de commande
                                                                    Fournisseur validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>FOURNISSEUR</th>
                                                                        <th>DEVIS</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 600
            $context["bht"] = 0;
            // line 601
            yield "                                                                    ";
            $context["bttc"] = 0;
            // line 602
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 602, $this->source); })()), "bons", [], "any", false, false, false, 602));
            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                // line 603
                yield "                                                                        ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 603))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 604
                    yield "                                                                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 604) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 604), "corbeille", [], "any", false, false, false, 604) == null))) {
                        // line 605
                        yield "                                                                                ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 605))) {
                            // line 606
                            yield "                                                                                    ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 606) == "non") || (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 606) == "oui"))) {
                                // line 607
                                yield "                                                                                        ";
                                $context["bht"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 607) + (isset($context["bht"]) || array_key_exists("bht", $context) ? $context["bht"] : (function () { throw new RuntimeError('Variable "bht" does not exist.', 607, $this->source); })()));
                                // line 608
                                yield "                                                                                        ";
                                $context["bttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 608) + (isset($context["bttc"]) || array_key_exists("bttc", $context) ? $context["bttc"] : (function () { throw new RuntimeError('Variable "bttc" does not exist.', 608, $this->source); })()));
                                // line 609
                                yield "                                                                                        <tr>
                                                                                            <td class=\"nowrape\">";
                                // line 610
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 610), "Y.m.d"), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"nowrape bolo600\">
                                                                                                ";
                                // line 612
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 612) == "non")) {
                                    // line 613
                                    yield "                                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 613), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 613), "id", [], "any", false, false, false, 613)]), "html", null, true);
                                    yield "\"
                                                                                                       class=\"col-pink\">
                                                                                                        ";
                                    // line 615
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 615), "html", null, true);
                                    yield "
                                                                                                    </a>
                                                                                                ";
                                } else {
                                    // line 618
                                    yield "                                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 618), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 618), "id", [], "any", false, false, false, 618)]), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 618), "html", null, true);
                                    yield "</a>
                                                                                                ";
                                }
                                // line 620
                                yield "                                                                                            </td>
                                                                                            <td class=\"nowrape\">";
                                // line 621
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 621), "fournisseur", [], "any", false, false, false, 621), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"nowrape bolo600\"> ";
                                // line 622
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 622))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 623
                                    yield "                                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 623), "id", [], "any", false, false, false, 623), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 623), "id", [], "any", false, false, false, 623)]), "html", null, true);
                                    yield "\"
                                                                                                       style=\"color:dodgerblue\">";
                                    // line 624
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 624), "iddevis", [], "any", false, false, false, 624), "html", null, true);
                                    yield "</a>
                                                                                                ";
                                }
                                // line 626
                                yield "                                                                                            </td>
                                                                                            <td class=\"text-right nowrape\">";
                                // line 627
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 627), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"text-right nowrape\">";
                                // line 628
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 628), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"col-deep-orange\"
                                                                                                title=\"";
                                // line 630
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 630));
                                yield "\">";
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 630));
                                yield "</td>
                                                                                        </tr>
                                                                                    ";
                            }
                            // line 633
                            yield "                                                                                ";
                        }
                        // line 634
                        yield "                                                                            ";
                    }
                    // line 635
                    yield "                                                                        ";
                }
                // line 636
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 637
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 644
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bht"]) || array_key_exists("bht", $context) ? $context["bht"] : (function () { throw new RuntimeError('Variable "bht" does not exist.', 644, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bttc"]) || array_key_exists("bttc", $context) ? $context["bttc"] : (function () { throw new RuntimeError('Variable "bttc" does not exist.', 645, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:20px\">
                                                                    Bons de
                                                                    commande
                                                                    Fournisseur
                                                                    non validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>FOURNISSEUR</th>
                                                                        <th>DEVIS</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 669
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 669, $this->source); })()), "bons", [], "any", false, false, false, 669));
            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                // line 670
                yield "                                                                        ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 670))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 671
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 671) == "save")) {
                        // line 672
                        yield "                                                                                ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 672)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 672), "corbeille", [], "any", false, false, false, 672) == null))) {
                            // line 673
                            yield "                                                                                    ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 673) == "non") || (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 673) == "oui"))) {
                                // line 674
                                yield "                                                                                        <tr>
                                                                                            <td class=\"nowrape\">";
                                // line 675
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 675), "Y.m.d"), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"nowrape bolo600\">
                                                                                                ";
                                // line 677
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 677) == "non")) {
                                    // line 678
                                    yield "                                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 678), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 678), "id", [], "any", false, false, false, 678)]), "html", null, true);
                                    yield "\"
                                                                                                       class=\"col-pink\">";
                                    // line 679
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 679), "html", null, true);
                                    yield "
                                                                                                    </a>
                                                                                                ";
                                } else {
                                    // line 682
                                    yield "                                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 682), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 682), "id", [], "any", false, false, false, 682)]), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 682), "html", null, true);
                                    yield "</a>
                                                                                                ";
                                }
                                // line 684
                                yield "                                                                                            </td>
                                                                                            <td class=\"nowrape\">";
                                // line 685
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 685), "fournisseur", [], "any", false, false, false, 685), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"nowrape bolo600\"> ";
                                // line 686
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 686))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 687
                                    yield "                                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 687), "id", [], "any", false, false, false, 687), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 687), "id", [], "any", false, false, false, 687)]), "html", null, true);
                                    yield "\"
                                                                                                       style=\"color:dodgerblue\">";
                                    // line 688
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 688), "iddevis", [], "any", false, false, false, 688), "html", null, true);
                                    yield "</a>
                                                                                                ";
                                }
                                // line 690
                                yield "                                                                                            </td>
                                                                                            <td class=\"text-right nowrape\">";
                                // line 691
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 691), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"text-right nowrape\">";
                                // line 692
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 692), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"col-deep-orange\"
                                                                                                title=\"";
                                // line 694
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 694));
                                yield "\">
                                                                                                ";
                                // line 695
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 695));
                                yield "
                                                                                            </td>
                                                                                        </tr>
                                                                                    ";
                            }
                            // line 699
                            yield "                                                                                ";
                        }
                        // line 700
                        yield "                                                                            ";
                    }
                    // line 701
                    yield "                                                                        ";
                }
                // line 702
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 703
            yield "                                                                    </tbody>
                                                                </table>
                                                                ";
            // line 705
            $context["vbth"] = 0;
            // line 706
            yield "                                                                ";
            $context["vbttc"] = 0;
            // line 707
            yield "
                                                                ";
            // line 708
            $context["nbth"] = 0;
            // line 709
            yield "                                                                ";
            $context["nbttc"] = 0;
            // line 710
            yield "
                                                                ";
            // line 711
            $context["brht"] = 0;
            // line 712
            yield "                                                                ";
            $context["brttc"] = 0;
            // line 713
            yield "
                                                                ";
            // line 714
            $context["brnht"] = 0;
            // line 715
            yield "                                                                ";
            $context["brnttc"] = 0;
            // line 716
            yield "
                                                                ";
            // line 717
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 717, $this->source); })()), "bons", [], "any", false, false, false, 717));
            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                // line 718
                yield "                                                                    ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 718)) && (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 718), "corbeille", [], "any", false, false, false, 718)))) {
                    // line 719
                    yield "                                                                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 719) != "none") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 719) != "pst"))) {
                        // line 720
                        yield "                                                                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 720) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 720) != "non"))) {
                            // line 721
                            yield "                                                                                ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 721))) {
                                // line 722
                                yield "                                                                                    ";
                                $context["vbth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 722) + (isset($context["vbth"]) || array_key_exists("vbth", $context) ? $context["vbth"] : (function () { throw new RuntimeError('Variable "vbth" does not exist.', 722, $this->source); })()));
                                // line 723
                                yield "                                                                                    ";
                                $context["vbttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 723) + (isset($context["vbttc"]) || array_key_exists("vbttc", $context) ? $context["vbttc"] : (function () { throw new RuntimeError('Variable "vbttc" does not exist.', 723, $this->source); })()));
                                // line 724
                                yield "                                                                                ";
                            }
                            // line 725
                            yield "                                                                            ";
                        }
                        // line 726
                        yield "
                                                                            ";
                        // line 727
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 727) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 727) != "non"))) {
                            // line 728
                            yield "                                                                                ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 728))) {
                                // line 729
                                yield "                                                                                    ";
                                $context["nbth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 729) + (isset($context["nbth"]) || array_key_exists("nbth", $context) ? $context["nbth"] : (function () { throw new RuntimeError('Variable "nbth" does not exist.', 729, $this->source); })()));
                                // line 730
                                yield "                                                                                    ";
                                $context["nbttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 730) + (isset($context["nbttc"]) || array_key_exists("nbttc", $context) ? $context["nbttc"] : (function () { throw new RuntimeError('Variable "nbttc" does not exist.', 730, $this->source); })()));
                                // line 731
                                yield "                                                                                ";
                            }
                            // line 732
                            yield "                                                                            ";
                        }
                        // line 733
                        yield "
                                                                            ";
                        // line 734
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 734) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 734) == "non"))) {
                            // line 735
                            yield "                                                                                ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 735))) {
                                // line 736
                                yield "                                                                                    ";
                                $context["brht"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 736) + (isset($context["brht"]) || array_key_exists("brht", $context) ? $context["brht"] : (function () { throw new RuntimeError('Variable "brht" does not exist.', 736, $this->source); })()));
                                // line 737
                                yield "                                                                                    ";
                                $context["brttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 737) + (isset($context["brttc"]) || array_key_exists("brttc", $context) ? $context["brttc"] : (function () { throw new RuntimeError('Variable "brttc" does not exist.', 737, $this->source); })()));
                                // line 738
                                yield "                                                                                ";
                            }
                            // line 739
                            yield "                                                                            ";
                        }
                        // line 740
                        yield "
                                                                            ";
                        // line 741
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 741) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 741) == "non"))) {
                            // line 742
                            yield "                                                                                ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 742))) {
                                // line 743
                                yield "                                                                                    ";
                                $context["brnht"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 743) + (isset($context["brnht"]) || array_key_exists("brnht", $context) ? $context["brnht"] : (function () { throw new RuntimeError('Variable "brnht" does not exist.', 743, $this->source); })()));
                                // line 744
                                yield "                                                                                    ";
                                $context["brnttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 744) + (isset($context["brnttc"]) || array_key_exists("brnttc", $context) ? $context["brnttc"] : (function () { throw new RuntimeError('Variable "brnttc" does not exist.', 744, $this->source); })()));
                                // line 745
                                yield "                                                                                ";
                            }
                            // line 746
                            yield "                                                                            ";
                        }
                        // line 747
                        yield "                                                                        ";
                    }
                    // line 748
                    yield "                                                                    ";
                }
                // line 749
                yield "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 750
            yield "                                                                <table class=\"table-bordered d reduire\"
                                                                       style=\"float: right; margin-top: 20px; font-size: 11px\">
                                                                    <tr style=\"background-color: slategrey; color: white\">
                                                                        <th class=\"text-center\"></th>
                                                                        <th class=\"text-center\">TOTAL HT</th>
                                                                        <th class=\"text-center\">TOTAL TTC</th>
                                                                    </tr>
                                                                    <tr style=\"background-color: slategrey; color: white\">
                                                                        <td class=\"text-right\">VALIDÉS</td>
                                                                        <td class=\"text-right\">";
            // line 759
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vbth"]) || array_key_exists("vbth", $context) ? $context["vbth"] : (function () { throw new RuntimeError('Variable "vbth" does not exist.', 759, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right\">";
            // line 760
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vbttc"]) || array_key_exists("vbttc", $context) ? $context["vbttc"] : (function () { throw new RuntimeError('Variable "vbttc" does not exist.', 760, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                    </tr>
                                                                    <tr style=\"background-color: slategrey; color: white\">
                                                                        <td class=\"text-right\">BONS DE RETOUR
                                                                            VALIDÉS
                                                                        </td>
                                                                        <td class=\"text-right\">";
            // line 766
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brht"]) || array_key_exists("brht", $context) ? $context["brht"] : (function () { throw new RuntimeError('Variable "brht" does not exist.', 766, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right\">";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brttc"]) || array_key_exists("brttc", $context) ? $context["brttc"] : (function () { throw new RuntimeError('Variable "brttc" does not exist.', 767, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                    </tr>
                                                                    <tr style=\"background-color: indianred; color: white\">
                                                                        <td class=\"text-right\">NON VALIDÉS</td>
                                                                        <td class=\"text-right\">";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["nbth"]) || array_key_exists("nbth", $context) ? $context["nbth"] : (function () { throw new RuntimeError('Variable "nbth" does not exist.', 771, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right\">";
            // line 772
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["nbttc"]) || array_key_exists("nbttc", $context) ? $context["nbttc"] : (function () { throw new RuntimeError('Variable "nbttc" does not exist.', 772, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                    </tr>

                                                                    <tr style=\"background-color: indianred; color: white\">
                                                                        <td class=\"text-right\">BONS DE RETOUR
                                                                            NON VALIDÉS
                                                                        </td>
                                                                        <td class=\"text-right\">";
            // line 779
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brnht"]) || array_key_exists("brnht", $context) ? $context["brnht"] : (function () { throw new RuntimeError('Variable "brnht" does not exist.', 779, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right\">";
            // line 780
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brnttc"]) || array_key_exists("brnttc", $context) ? $context["brnttc"] : (function () { throw new RuntimeError('Variable "brnttc" does not exist.', 780, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                    </tr>
                                                                    <tr class=\"bg-pri text-white\">
                                                                        <td class=\"text-right\">TOTAUX</td>
                                                                        <td class=\"text-right\">";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["vbth"]) || array_key_exists("vbth", $context) ? $context["vbth"] : (function () { throw new RuntimeError('Variable "vbth" does not exist.', 784, $this->source); })()) - (isset($context["brht"]) || array_key_exists("brht", $context) ? $context["brht"] : (function () { throw new RuntimeError('Variable "brht" does not exist.', 784, $this->source); })())) + ((isset($context["nbth"]) || array_key_exists("nbth", $context) ? $context["nbth"] : (function () { throw new RuntimeError('Variable "nbth" does not exist.', 784, $this->source); })()) - (isset($context["brnht"]) || array_key_exists("brnht", $context) ? $context["brnht"] : (function () { throw new RuntimeError('Variable "brnht" does not exist.', 784, $this->source); })()))), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right\">";
            // line 785
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["vbttc"]) || array_key_exists("vbttc", $context) ? $context["vbttc"] : (function () { throw new RuntimeError('Variable "vbttc" does not exist.', 785, $this->source); })()) - (isset($context["brttc"]) || array_key_exists("brttc", $context) ? $context["brttc"] : (function () { throw new RuntimeError('Variable "brttc" does not exist.', 785, $this->source); })())) + ((isset($context["nbttc"]) || array_key_exists("nbttc", $context) ? $context["nbttc"] : (function () { throw new RuntimeError('Variable "nbttc" does not exist.', 785, $this->source); })()) - (isset($context["brnttc"]) || array_key_exists("brnttc", $context) ? $context["brnttc"] : (function () { throw new RuntimeError('Variable "brnttc" does not exist.', 785, $this->source); })()))), 2, ",", " "), "html", null, true);
            yield "</td>

                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Prestataires</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>PRESTATAIRES</th>
                                                                        <th>BONS</th>
                                                                        <th>DEVIS</th>
                                                                        <th>BON TTC</th>
                                                                        <th>PERÇU</th>
                                                                        <th>RESTE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 809
            $context["tobttc"] = 0;
            // line 810
            yield "                                                                    ";
            $context["tofopercu"] = 0;
            // line 811
            yield "                                                                    ";
            $context["toforeste"] = 0;
            // line 812
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 812, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["four"]) {
                // line 813
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["four"], "type", [], "any", false, false, false, 813) == 3)) {
                    // line 814
                    yield "                                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["four"], "corbeille", [], "any", false, false, false, 814))) {
                        // line 815
                        yield "
                                                                                ";
                        // line 816
                        $context["check"] = 0;
                        // line 817
                        yield "                                                                                ";
                        $context["bttc"] = 0;
                        // line 818
                        yield "                                                                                ";
                        $context["fopercu"] = 0;
                        // line 819
                        yield "                                                                                ";
                        $context["foreste"] = 0;
                        // line 820
                        yield "
                                                                                ";
                        // line 821
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 821, $this->source); })()), "bons", [], "any", false, false, false, 821));
                        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                            // line 822
                            yield "                                                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 822) == "valide")) {
                                // line 823
                                yield "                                                                                        ";
                                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 823)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 823) == $context["four"]))) {
                                    // line 824
                                    yield "                                                                                            ";
                                    $context["check"] = ((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 824, $this->source); })()) + 1);
                                    // line 825
                                    yield "                                                                                            ";
                                    $context["bttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 825) + (isset($context["bttc"]) || array_key_exists("bttc", $context) ? $context["bttc"] : (function () { throw new RuntimeError('Variable "bttc" does not exist.', 825, $this->source); })()));
                                    // line 826
                                    yield "                                                                                            ";
                                    $context["fopercu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "recu", [], "any", false, false, false, 826) + (isset($context["fopercu"]) || array_key_exists("fopercu", $context) ? $context["fopercu"] : (function () { throw new RuntimeError('Variable "fopercu" does not exist.', 826, $this->source); })()));
                                    // line 827
                                    yield "                                                                                            ";
                                    $context["foreste"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reste", [], "any", false, false, false, 827) + (isset($context["foreste"]) || array_key_exists("foreste", $context) ? $context["foreste"] : (function () { throw new RuntimeError('Variable "foreste" does not exist.', 827, $this->source); })()));
                                    // line 828
                                    yield "                                                                                        ";
                                }
                                // line 829
                                yield "                                                                                    ";
                            }
                            // line 830
                            yield "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 831
                        yield "
                                                                                ";
                        // line 832
                        if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 832, $this->source); })()) != 0)) {
                            // line 833
                            yield "                                                                                    <tr class=\"bg-light\">
                                                                                        <td class=\"col-blue bolo700 nowrape\"
                                                                                            colspan=\"3\">";
                            // line 835
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["four"], "fournisseur", [], "any", false, false, false, 835)), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape col-pink bolo700\">";
                            // line 836
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bttc"]) || array_key_exists("bttc", $context) ? $context["bttc"] : (function () { throw new RuntimeError('Variable "bttc" does not exist.', 836, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape col-pink bolo700\">";
                            // line 837
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["fopercu"]) || array_key_exists("fopercu", $context) ? $context["fopercu"] : (function () { throw new RuntimeError('Variable "fopercu" does not exist.', 837, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"nowrape col-pink bolo700\">";
                            // line 838
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["foreste"]) || array_key_exists("foreste", $context) ? $context["foreste"] : (function () { throw new RuntimeError('Variable "foreste" does not exist.', 838, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    ";
                            // line 841
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 841, $this->source); })()), "bons", [], "any", false, false, false, 841));
                            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                                // line 842
                                yield "                                                                                        ";
                                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 842)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 842) == $context["four"]))) {
                                    // line 843
                                    yield "                                                                                            ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 843) == "valide")) {
                                        // line 844
                                        yield "                                                                                                <tr>
                                                                                                    <td class=\"text-center\">";
                                        // line 845
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 845), "Y.m.d"), "html", null, true);
                                        yield "</td>
                                                                                                    <td class=\"nowrape bolo600\">
                                                                                                        <a href=\"";
                                        // line 847
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 847), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 847), "id", [], "any", false, false, false, 847)]), "html", null, true);
                                        yield "\">";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 847), "html", null, true);
                                        yield "</a>
                                                                                                    </td>
                                                                                                    <td class=\"nowrape bolo600\">";
                                        // line 849
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 849))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 850
                                            yield "                                                                                                            <a href=\"";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 850), "id", [], "any", false, false, false, 850), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 850), "id", [], "any", false, false, false, 850)]), "html", null, true);
                                            yield "\"
                                                                                                               style=\"color:dodgerblue\">";
                                            // line 851
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 851), "iddevis", [], "any", false, false, false, 851), "html", null, true);
                                            yield "</a>
                                                                                                        ";
                                        }
                                        // line 852
                                        yield "</td>
                                                                                                    <td class=\"text-right nowrape \">";
                                        // line 853
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 853), 2, ",", " "), "html", null, true);
                                        yield "</td>
                                                                                                    <td class=\"text-right nowrape\">";
                                        // line 854
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "recu", [], "any", false, false, false, 854), 2, ",", " "), "html", null, true);
                                        yield "</td>
                                                                                                    <td class=\"text-right nowrape\">";
                                        // line 855
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reste", [], "any", false, false, false, 855), 2, ",", " "), "html", null, true);
                                        yield "</td>
                                                                                                    <td class=\"col-deep-orange\"
                                                                                                        title=\"";
                                        // line 857
                                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 857));
                                        yield "\">
                                                                                                        ";
                                        // line 858
                                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 858));
                                        yield "
                                                                                                    </td>
                                                                                                </tr>
                                                                                            ";
                                    }
                                    // line 862
                                    yield "                                                                                        ";
                                }
                                // line 863
                                yield "                                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 864
                            yield "                                                                                ";
                        }
                        // line 865
                        yield "                                                                                ";
                        $context["tobttc"] = ((isset($context["tobttc"]) || array_key_exists("tobttc", $context) ? $context["tobttc"] : (function () { throw new RuntimeError('Variable "tobttc" does not exist.', 865, $this->source); })()) + (isset($context["bttc"]) || array_key_exists("bttc", $context) ? $context["bttc"] : (function () { throw new RuntimeError('Variable "bttc" does not exist.', 865, $this->source); })()));
                        // line 866
                        yield "                                                                                ";
                        $context["tofopercu"] = ((isset($context["tofopercu"]) || array_key_exists("tofopercu", $context) ? $context["tofopercu"] : (function () { throw new RuntimeError('Variable "tofopercu" does not exist.', 866, $this->source); })()) + (isset($context["fopercu"]) || array_key_exists("fopercu", $context) ? $context["fopercu"] : (function () { throw new RuntimeError('Variable "fopercu" does not exist.', 866, $this->source); })()));
                        // line 867
                        yield "                                                                                ";
                        $context["toforeste"] = ((isset($context["toforeste"]) || array_key_exists("toforeste", $context) ? $context["toforeste"] : (function () { throw new RuntimeError('Variable "toforeste" does not exist.', 867, $this->source); })()) + (isset($context["foreste"]) || array_key_exists("foreste", $context) ? $context["foreste"] : (function () { throw new RuntimeError('Variable "foreste" does not exist.', 867, $this->source); })()));
                        // line 868
                        yield "                                                                            ";
                    }
                    // line 869
                    yield "                                                                        ";
                }
                // line 870
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['four'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 871
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 877
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tobttc"]) || array_key_exists("tobttc", $context) ? $context["tobttc"] : (function () { throw new RuntimeError('Variable "tobttc" does not exist.', 877, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 878
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tofopercu"]) || array_key_exists("tofopercu", $context) ? $context["tofopercu"] : (function () { throw new RuntimeError('Variable "tofopercu" does not exist.', 878, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 879
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["toforeste"]) || array_key_exists("toforeste", $context) ? $context["toforeste"] : (function () { throw new RuntimeError('Variable "toforeste" does not exist.', 879, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Paiement Prestataires
                                                                    validés</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>PRESTATAIRES<br>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>MONTANT</th>
                                                                        <th>DEVIS</th>
                                                                        <th>COMMANDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 904
            $context["topercu"] = 0;
            // line 905
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 905, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["four"]) {
                // line 906
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["four"], "type", [], "any", false, false, false, 906) == 3)) {
                    // line 907
                    yield "                                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["four"], "corbeille", [], "any", false, false, false, 907))) {
                        // line 908
                        yield "                                                                                ";
                        $context["percu"] = 0;
                        // line 909
                        yield "                                                                                ";
                        $context["check"] = 0;
                        // line 910
                        yield "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 910, $this->source); })()), "caisses", [], "any", false, false, false, 910));
                        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                            // line 911
                            yield "                                                                                    ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 911) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "fournisseur", [], "any", false, false, false, 911) == $context["four"]))) {
                                // line 912
                                yield "                                                                                        ";
                                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 912)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 912)))) {
                                    // line 913
                                    yield "                                                                                            ";
                                    $context["check"] = ((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 913, $this->source); })()) + 1);
                                    // line 914
                                    yield "                                                                                            ";
                                    $context["percu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 914) + (isset($context["percu"]) || array_key_exists("percu", $context) ? $context["percu"] : (function () { throw new RuntimeError('Variable "percu" does not exist.', 914, $this->source); })()));
                                    // line 915
                                    yield "                                                                                        ";
                                }
                                // line 916
                                yield "                                                                                    ";
                            }
                            // line 917
                            yield "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 918
                        yield "                                                                                ";
                        if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 918, $this->source); })()) != 0)) {
                            // line 919
                            yield "                                                                                    <tr class=\"bg-light\">
                                                                                        <td class=\"bolo700 nowrape\"
                                                                                            colspan=\"2\">";
                            // line 921
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["four"], "fournisseur", [], "any", false, false, false, 921)), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"bolo700 nowrape text-right\">";
                            // line 922
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percu"]) || array_key_exists("percu", $context) ? $context["percu"] : (function () { throw new RuntimeError('Variable "percu" does not exist.', 922, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"bolo700 nowrape\"
                                                                                            colspan=\"3\"></td>
                                                                                    </tr>
                                                                                    ";
                            // line 926
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 926, $this->source); })()), "caisses", [], "any", false, false, false, 926));
                            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                // line 927
                                yield "                                                                                        ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 927) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "fournisseur", [], "any", false, false, false, 927) == $context["four"]))) {
                                    // line 928
                                    yield "                                                                                            ";
                                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 928)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 928)))) {
                                        // line 929
                                        yield "                                                                                                <tr>
                                                                                                    <td class=\"nowrape\">";
                                        // line 930
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 930), "Y.m.d"), "html", null, true);
                                        yield "</td>
                                                                                                    <td class=\"nowrape bolo600\">
                                                                                                        <a href=\"";
                                        // line 932
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 932), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 932), "id", [], "any", false, false, false, 932)]), "html", null, true);
                                        yield "\">
                                                                                                            ";
                                        // line 933
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 933), "html", null, true);
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 933))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 934
                                            yield "                                                                                                                <span class=\"col-pink\">
                                                                                                                (";
                                            // line 935
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 935), "html", null, true);
                                            yield ")</span>";
                                        }
                                        // line 936
                                        yield "                                                                                                        </a></td>
                                                                                                    <td class=\"text-right col-black bolo600\">";
                                        // line 937
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 937), 2, ",", " "), "html", null, true);
                                        yield "</td>
                                                                                                    <td class=\"nowrape\"> ";
                                        // line 938
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 938))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 938), "devis", [], "any", false, false, false, 938), "iddevis", [], "any", false, false, false, 938), "html", null, true);
                                            yield " ";
                                        }
                                        yield "</td>
                                                                                                    <td class=\"nowrape\"> ";
                                        // line 939
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 939))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 939), "numbon", [], "any", false, false, false, 939), "html", null, true);
                                            yield " ";
                                        }
                                        yield "</td>
                                                                                                    <td class=\"col-deep-orange\"
                                                                                                        title=\"";
                                        // line 941
                                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 941));
                                        yield "\">";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 941)), "html", null, true);
                                        yield "</td>
                                                                                                </tr>
                                                                                            ";
                                    }
                                    // line 944
                                    yield "                                                                                        ";
                                }
                                // line 945
                                yield "                                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 946
                            yield "                                                                                    ";
                            $context["topercu"] = ((isset($context["percu"]) || array_key_exists("percu", $context) ? $context["percu"] : (function () { throw new RuntimeError('Variable "percu" does not exist.', 946, $this->source); })()) + (isset($context["topercu"]) || array_key_exists("topercu", $context) ? $context["topercu"] : (function () { throw new RuntimeError('Variable "topercu" does not exist.', 946, $this->source); })()));
                            // line 947
                            yield "                                                                                ";
                        }
                        // line 948
                        yield "                                                                            ";
                    }
                    // line 949
                    yield "                                                                        ";
                }
                // line 950
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['four'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 951
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 956
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["topercu"]) || array_key_exists("topercu", $context) ? $context["topercu"] : (function () { throw new RuntimeError('Variable "topercu" does not exist.', 956, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:20px\">
                                                                    Bons de
                                                                    commande
                                                                    Prestataire non validés</h4>
                                                                <table class=\"table-striped table-bordered display nowrape\"
                                                                       style=\"width: 100%;font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>N° BON</th>
                                                                        <th>PRESTATAIRE</th>
                                                                        <th>N° DE DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 986
            $context["tht"] = 0;
            // line 987
            yield "                                                                    ";
            $context["ttc"] = 0;
            // line 988
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 988, $this->source); })()), "bons", [], "any", false, false, false, 988));
            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                // line 989
                yield "                                                                        ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 989)) && (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 989), "corbeille", [], "any", false, false, false, 989)))) {
                    // line 990
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 990) == "save")) {
                        // line 991
                        yield "                                                                                ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 991)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 991) == "pst"))) {
                            // line 992
                            yield "                                                                                    ";
                            $context["tht"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 992) + (isset($context["tht"]) || array_key_exists("tht", $context) ? $context["tht"] : (function () { throw new RuntimeError('Variable "tht" does not exist.', 992, $this->source); })()));
                            // line 993
                            yield "                                                                                    ";
                            $context["ttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 993) + (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 993, $this->source); })()));
                            // line 994
                            yield "                                                                                    <tr>
                                                                                        <td>";
                            // line 995
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 995), "Y.m.d"), "html", null, true);
                            yield "</td>
                                                                                        <td>
                                                                                            <a href=\"";
                            // line 997
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 997), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 997), "id", [], "any", false, false, false, 997)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 997), "html", null, true);
                            yield "</a>
                                                                                        </td>
                                                                                        <td class=\"nowrape\">";
                            // line 999
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 999), "fournisseur", [], "any", false, false, false, 999)), "html", null, true);
                            yield "</td>
                                                                                        <td> ";
                            // line 1000
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 1000))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1001
                                yield "                                                                                                <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 1001), "id", [], "any", false, false, false, 1001), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 1001), "id", [], "any", false, false, false, 1001)]), "html", null, true);
                                yield "\"
                                                                                                   style=\"color:dodgerblue\">";
                                // line 1002
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 1002), "iddevis", [], "any", false, false, false, 1002), "html", null, true);
                                yield "</a>
                                                                                            ";
                            }
                            // line 1003
                            yield "</td>
                                                                                        <td class=\"text-right\">";
                            // line 1004
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 1004), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"text-right\">";
                            // line 1005
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 1005), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"";
                            // line 1007
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 1007));
                            yield "\">
                                                                                            ";
                            // line 1008
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 1008));
                            yield "
                                                                                        </td>
                                                                                    </tr>
                                                                                ";
                        }
                        // line 1012
                        yield "                                                                            ";
                    }
                    // line 1013
                    yield "                                                                        ";
                }
                // line 1014
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1015
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 1021
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tht"]) || array_key_exists("tht", $context) ? $context["tht"] : (function () { throw new RuntimeError('Variable "tht" does not exist.', 1021, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 1022
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 1022, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Décomptes validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>FACTURE</th>
                                                                        <th class=\"text-center nowrape\">DEVISTTC</th>
                                                                        <th class=\"text-center\">AVANCEMENT</th>
                                                                        <th class=\"text-center\">THT</th>
                                                                        <th class=\"text-center\">TTC</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 1048
            $context["vdecth"] = 0;
            // line 1049
            yield "                                                                    ";
            $context["vdecttc"] = 0;
            // line 1050
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1050, $this->source); })()), "decomptes", [], "any", false, false, false, 1050));
            foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
                // line 1051
                yield "                                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 1051) == "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 1051)))) {
                    // line 1052
                    yield "                                                                            ";
                    $context["vdecth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 1052) + (isset($context["vdecth"]) || array_key_exists("vdecth", $context) ? $context["vdecth"] : (function () { throw new RuntimeError('Variable "vdecth" does not exist.', 1052, $this->source); })()));
                    // line 1053
                    yield "                                                                            ";
                    $context["vdecttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "ttc", [], "any", false, false, false, 1053) + (isset($context["vdecttc"]) || array_key_exists("vdecttc", $context) ? $context["vdecttc"] : (function () { throw new RuntimeError('Variable "vdecttc" does not exist.', 1053, $this->source); })()));
                    // line 1054
                    yield "                                                                        ";
                }
                // line 1055
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 1055) == "valide")) {
                    // line 1056
                    yield "                                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 1056))) {
                        // line 1057
                        yield "                                                                                <tr>
                                                                                    <td>";
                        // line 1058
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "date", [], "any", false, false, false, 1058), "Y.m.d"), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"";
                        // line 1060
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 1060), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 1060), "id", [], "any", false, false, false, 1060)]), "html", null, true);
                        yield "\"
                                                                                           style=\"color:dodgerblue\">";
                        // line 1061
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "numdecompte", [], "any", false, false, false, 1061), "html", null, true);
                        yield "
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"";
                        // line 1064
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1064), "id", [], "any", false, false, false, 1064), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 1064), "id", [], "any", false, false, false, 1064)]), "html", null, true);
                        yield "\"
                                                                                           style=\"color:dodgerblue\">";
                        // line 1065
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1065), "iddevis", [], "any", false, false, false, 1065), "html", null, true);
                        yield "
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">";
                        // line 1067
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 1067)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1068
                            yield "                                                                                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 1068), "id", [], "any", false, false, false, 1068), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 1068), "id", [], "any", false, false, false, 1068)]), "html", null, true);
                            yield "\"
                                                                                               class=\"col-blue\">";
                            // line 1069
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 1069), "numfacture", [], "any", false, false, false, 1069), "html", null, true);
                            yield "</a>
                                                                                        ";
                        }
                        // line 1071
                        yield "                                                                                    </td>
                                                                                    ";
                        // line 1072
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1072), "ptva", [], "any", false, false, false, 1072) == "non")) {
                            // line 1073
                            yield "                                                                                        <td class=\"text-right nowrape\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 1073), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                    ";
                        } else {
                            // line 1075
                            yield "                                                                                        <td class=\"text-right nowrape\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 1075) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 1075) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1075), "tva", [], "any", false, false, false, 1075)) / 100)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                    ";
                        }
                        // line 1077
                        yield "                                                                                    <td class=\"text-center col-pink bolo700\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "avancement", [], "any", false, false, false, 1077), 2, ",", " "), "html", null, true);
                        yield "
                                                                                        %
                                                                                    </td>
                                                                                    <td class=\"text-right nowrape\">";
                        // line 1080
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 1080), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"text-right nowrape\">";
                        // line 1081
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "ttc", [], "any", false, false, false, 1081), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                                </tr>
                                                                            ";
                    }
                    // line 1084
                    yield "                                                                        ";
                }
                // line 1085
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1086
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1095
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdecth"]) || array_key_exists("vdecth", $context) ? $context["vdecth"] : (function () { throw new RuntimeError('Variable "vdecth" does not exist.', 1095, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1096
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdecttc"]) || array_key_exists("vdecttc", $context) ? $context["vdecttc"] : (function () { throw new RuntimeError('Variable "vdecttc" does not exist.', 1096, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Décomptes non validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>FACTURE</th>
                                                                        <th class=\"text-center nowrape\">DEVIS TTC</th>
                                                                        <th class=\"text-center\">AVANCEMENT</th>
                                                                        <th class=\"text-center\">THT</th>
                                                                        <th class=\"text-center\">TTC</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 1117
            $context["ndecth"] = 0;
            // line 1118
            yield "                                                                    ";
            $context["ndecttc"] = 0;
            // line 1119
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1119, $this->source); })()), "decomptes", [], "any", false, false, false, 1119));
            foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
                // line 1120
                yield "                                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 1120) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 1120)))) {
                    // line 1121
                    yield "                                                                            ";
                    $context["ndecth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 1121) + (isset($context["ndecth"]) || array_key_exists("ndecth", $context) ? $context["ndecth"] : (function () { throw new RuntimeError('Variable "ndecth" does not exist.', 1121, $this->source); })()));
                    // line 1122
                    yield "                                                                            ";
                    $context["ndecttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "ttc", [], "any", false, false, false, 1122) + (isset($context["ndecttc"]) || array_key_exists("ndecttc", $context) ? $context["ndecttc"] : (function () { throw new RuntimeError('Variable "ndecttc" does not exist.', 1122, $this->source); })()));
                    // line 1123
                    yield "                                                                        ";
                }
                // line 1124
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 1124) == "save")) {
                    // line 1125
                    yield "                                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 1125))) {
                        // line 1126
                        yield "                                                                                <tr>
                                                                                    <td>";
                        // line 1127
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "date", [], "any", false, false, false, 1127), "Y.m.d"), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"";
                        // line 1129
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 1129), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 1129), "id", [], "any", false, false, false, 1129)]), "html", null, true);
                        yield "\"
                                                                                           style=\"color:dodgerblue\">";
                        // line 1130
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "numdecompte", [], "any", false, false, false, 1130), "html", null, true);
                        yield "
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"";
                        // line 1133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1133), "id", [], "any", false, false, false, 1133), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 1133), "id", [], "any", false, false, false, 1133)]), "html", null, true);
                        yield "\"
                                                                                           style=\"color:dodgerblue\">";
                        // line 1134
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1134), "iddevis", [], "any", false, false, false, 1134), "html", null, true);
                        yield "
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">";
                        // line 1136
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 1136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1137
                            yield "                                                                                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 1137), "id", [], "any", false, false, false, 1137), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 1137), "id", [], "any", false, false, false, 1137)]), "html", null, true);
                            yield "\"
                                                                                               class=\"col-blue\">";
                            // line 1138
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 1138), "numfacture", [], "any", false, false, false, 1138), "html", null, true);
                            yield "</a>
                                                                                        ";
                        }
                        // line 1140
                        yield "                                                                                    </td>
                                                                                    ";
                        // line 1141
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1141), "ptva", [], "any", false, false, false, 1141) == "non")) {
                            // line 1142
                            yield "                                                                                        <td class=\"text-right nowrape\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 1142), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                    ";
                        } else {
                            // line 1144
                            yield "                                                                                        <td class=\"text-right nowrape\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 1144) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 1144) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 1144), "tva", [], "any", false, false, false, 1144)) / 100)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                                    ";
                        }
                        // line 1146
                        yield "                                                                                    <td class=\"text-center col-pink bolo700\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "avancement", [], "any", false, false, false, 1146), 2, ",", " "), "html", null, true);
                        yield "
                                                                                        %
                                                                                    </td>
                                                                                    <td class=\"text-right nowrape\">";
                        // line 1149
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 1149), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"text-right nowrape\">";
                        // line 1150
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "ttc", [], "any", false, false, false, 1150), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                                </tr>
                                                                            ";
                    }
                    // line 1153
                    yield "                                                                        ";
                }
                // line 1154
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1155
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndecth"]) || array_key_exists("ndecth", $context) ? $context["ndecth"] : (function () { throw new RuntimeError('Variable "ndecth" does not exist.', 1164, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndecttc"]) || array_key_exists("ndecttc", $context) ? $context["ndecttc"] : (function () { throw new RuntimeError('Variable "ndecttc" does not exist.', 1165, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Facture validées</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>FACTURE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 1189
            $context["vfacth"] = 0;
            // line 1190
            yield "                                                                    ";
            $context["vfacttc"] = 0;
            // line 1191
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1191, $this->source); })()), "factures", [], "any", false, false, false, 1191));
            foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                // line 1192
                yield "                                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 1192) == "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 1192)))) {
                    // line 1193
                    yield "                                                                            ";
                    $context["vfacth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 1193) + (isset($context["vfacth"]) || array_key_exists("vfacth", $context) ? $context["vfacth"] : (function () { throw new RuntimeError('Variable "vfacth" does not exist.', 1193, $this->source); })()));
                    // line 1194
                    yield "                                                                            ";
                    $context["vfacttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 1194) + (isset($context["vfacttc"]) || array_key_exists("vfacttc", $context) ? $context["vfacttc"] : (function () { throw new RuntimeError('Variable "vfacttc" does not exist.', 1194, $this->source); })()));
                    // line 1195
                    yield "                                                                        ";
                }
                // line 1196
                yield "                                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 1196) == "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 1196)))) {
                    // line 1197
                    yield "                                                                            <tr>
                                                                                <td>";
                    // line 1198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 1198), "Y.m.d"), "html", null, true);
                    yield "</td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    <a href=\"";
                    // line 1200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 1200), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1200), "id", [], "any", false, false, false, 1200)]), "html", null, true);
                    yield "\">
                                                                                        ";
                    // line 1201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 1201), "html", null, true);
                    yield "
                                                                                    </a>
                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    ";
                    // line 1205
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1205) == "simple")) {
                        // line 1206
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1206), "id", [], "any", false, false, false, 1206), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1206), "id", [], "any", false, false, false, 1206)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1206), "iddevis", [], "any", false, false, false, 1206), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1208
                    yield "                                                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1208) == "devis")) {
                        // line 1209
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1209), "id", [], "any", false, false, false, 1209), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1209), "id", [], "any", false, false, false, 1209)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1209), "iddevis", [], "any", false, false, false, 1209), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1211
                    yield "                                                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1211) == "decompte")) {
                        // line 1212
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1212), "devis", [], "any", false, false, false, 1212), "id", [], "any", false, false, false, 1212), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1212), "id", [], "any", false, false, false, 1212)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1212), "devis", [], "any", false, false, false, 1212), "iddevis", [], "any", false, false, false, 1212), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1214
                    yield "                                                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1214) == "acompte") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1214)))) {
                        // line 1215
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1215), "devis", [], "any", false, false, false, 1215), "id", [], "any", false, false, false, 1215), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1215), "id", [], "any", false, false, false, 1215)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1215), "devis", [], "any", false, false, false, 1215), "iddevis", [], "any", false, false, false, 1215), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1217
                    yield "                                                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1217) == "retenue") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1217)))) {
                        // line 1218
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1218), "devis", [], "any", false, false, false, 1218), "id", [], "any", false, false, false, 1218), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1218), "id", [], "any", false, false, false, 1218)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1218), "devis", [], "any", false, false, false, 1218), "iddevis", [], "any", false, false, false, 1218), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1220
                    yield "                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    ";
                    // line 1222
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1222))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1223
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1223), "id", [], "any", false, false, false, 1223), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1223), "id", [], "any", false, false, false, 1223)]), "html", null, true);
                        yield "\">N° ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1223), "numdecompte", [], "any", false, false, false, 1223), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1225
                    yield "                                                                                </td>
                                                                                <td class=\"text-right nowrape\">";
                    // line 1226
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 1226), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"text-right nowrape\">";
                    // line 1227
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 1227), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"col-deep-orange\"
                                                                                    title=\"";
                    // line 1229
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 1229));
                    yield "\">";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 1229));
                    yield "</td>
                                                                            </tr>
                                                                        ";
                }
                // line 1232
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1233
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vfacth"]) || array_key_exists("vfacth", $context) ? $context["vfacth"] : (function () { throw new RuntimeError('Variable "vfacth" does not exist.', 1240, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vfacttc"]) || array_key_exists("vfacttc", $context) ? $context["vfacttc"] : (function () { throw new RuntimeError('Variable "vfacttc" does not exist.', 1241, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Facture non validées</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>FACTURE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉGLÉ</th>
                                                                        <th>SOLDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 1264
            $context["nfacth"] = 0;
            // line 1265
            yield "                                                                    ";
            $context["nfacttc"] = 0;
            // line 1266
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1266, $this->source); })()), "factures", [], "any", false, false, false, 1266));
            foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                // line 1267
                yield "                                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 1267) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 1267)))) {
                    // line 1268
                    yield "                                                                            ";
                    $context["nfacth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 1268) + (isset($context["vfacth"]) || array_key_exists("vfacth", $context) ? $context["vfacth"] : (function () { throw new RuntimeError('Variable "vfacth" does not exist.', 1268, $this->source); })()));
                    // line 1269
                    yield "                                                                            ";
                    $context["nfacttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 1269) + (isset($context["vfacttc"]) || array_key_exists("vfacttc", $context) ? $context["vfacttc"] : (function () { throw new RuntimeError('Variable "vfacttc" does not exist.', 1269, $this->source); })()));
                    // line 1270
                    yield "                                                                        ";
                }
                // line 1271
                yield "                                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 1271) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 1271)))) {
                    // line 1272
                    yield "                                                                            <tr>
                                                                                <td class=\"nowrape\">";
                    // line 1273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 1273), "Y.m.d"), "html", null, true);
                    yield "</td>
                                                                                <td class=\"nowrape bolo600\"><a
                                                                                            href=\"";
                    // line 1275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 1275), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1275), "id", [], "any", false, false, false, 1275)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 1275), "html", null, true);
                    yield "</a>
                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    ";
                    // line 1278
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1278) == "simple")) {
                        // line 1279
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1279), "id", [], "any", false, false, false, 1279), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1279), "id", [], "any", false, false, false, 1279)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1279), "iddevis", [], "any", false, false, false, 1279), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1281
                    yield "                                                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1281) == "devis")) {
                        // line 1282
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1282), "id", [], "any", false, false, false, 1282), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1282), "id", [], "any", false, false, false, 1282)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 1282), "iddevis", [], "any", false, false, false, 1282), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1284
                    yield "                                                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1284) == "decompte")) {
                        // line 1285
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1285), "devis", [], "any", false, false, false, 1285), "id", [], "any", false, false, false, 1285), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1285), "id", [], "any", false, false, false, 1285)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1285), "devis", [], "any", false, false, false, 1285), "iddevis", [], "any", false, false, false, 1285), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1287
                    yield "                                                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1287) == "acompte") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1287)))) {
                        // line 1288
                        yield "                                                                                        <a href=\" ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1288), "devis", [], "any", false, false, false, 1288))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1288), "devis", [], "any", false, false, false, 1288), "id", [], "any", false, false, false, 1288), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1288), "id", [], "any", false, false, false, 1288)]), "html", null, true);
                        }
                        yield "\">";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1288), "devis", [], "any", false, false, false, 1288))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1288), "devis", [], "any", false, false, false, 1288), "iddevis", [], "any", false, false, false, 1288), "html", null, true);
                        }
                        yield "</a>
                                                                                    ";
                    }
                    // line 1290
                    yield "                                                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 1290) == "retenue") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1290)))) {
                        // line 1291
                        yield "                                                                                        <a href=\" ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1291), "devis", [], "any", false, false, false, 1291))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1291), "devis", [], "any", false, false, false, 1291), "id", [], "any", false, false, false, 1291), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1291), "id", [], "any", false, false, false, 1291)]), "html", null, true);
                        }
                        yield "\">";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1291), "devis", [], "any", false, false, false, 1291))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 1291), "devis", [], "any", false, false, false, 1291), "iddevis", [], "any", false, false, false, 1291), "html", null, true);
                        }
                        yield "</a>
                                                                                    ";
                    }
                    // line 1293
                    yield "                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    ";
                    // line 1295
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1295))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1296
                        yield "                                                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1296), "id", [], "any", false, false, false, 1296), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 1296), "id", [], "any", false, false, false, 1296)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 1296), "numdecompte", [], "any", false, false, false, 1296), "html", null, true);
                        yield "</a>
                                                                                    ";
                    }
                    // line 1298
                    yield "                                                                                </td>
                                                                                <td class=\"text-right nowrape\">";
                    // line 1299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 1299), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"text-right nowrape\">";
                    // line 1300
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 1300), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"text-right nowrape\">";
                    // line 1301
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1301, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"text-right nowrape\">";
                    // line 1302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 1302) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1302, $this->source); })())), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                                <td class=\"col-deep-orange\"
                                                                                    title=\"";
                    // line 1304
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 1304));
                    yield "\">";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 1304));
                    yield "</td>
                                                                            </tr>
                                                                        ";
                }
                // line 1307
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1308
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["nfacth"]) || array_key_exists("nfacth", $context) ? $context["nfacth"] : (function () { throw new RuntimeError('Variable "nfacth" does not exist.', 1315, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["nfacttc"]) || array_key_exists("nfacttc", $context) ? $context["nfacttc"] : (function () { throw new RuntimeError('Variable "nfacttc" does not exist.', 1316, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1317, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">";
            // line 1318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["nfacttc"]) || array_key_exists("nfacttc", $context) ? $context["nfacttc"] : (function () { throw new RuntimeError('Variable "nfacttc" does not exist.', 1318, $this->source); })()) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1318, $this->source); })())), 2, ",", " "), "html", null, true);
            yield "</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Dépenses internes
                                                                    validées</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>DEVIS</th>
                                                                        <th>MONTANT</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 1342
            $context["vcth"] = 0;
            // line 1343
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1343, $this->source); })()), "caisses", [], "any", false, false, false, 1343));
            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                // line 1344
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 1344) == "valide")) {
                    // line 1345
                    yield "                                                                            ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 1345)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 1345) == 3))) {
                        // line 1346
                        yield "                                                                                ";
                        $context["vcth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1346) + (isset($context["vcth"]) || array_key_exists("vcth", $context) ? $context["vcth"] : (function () { throw new RuntimeError('Variable "vcth" does not exist.', 1346, $this->source); })()));
                        // line 1347
                        yield "                                                                                <tr>
                                                                                    <td class=\"nowrape\">";
                        // line 1348
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 1348), "Y.m.d"), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"";
                        // line 1350
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 1350), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 1350), "id", [], "any", false, false, false, 1350)]), "html", null, true);
                        yield "\">
                                                                                            ";
                        // line 1351
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1351), "html", null, true);
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 1351))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1352
                            yield "                                                                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1352), "html", null, true);
                            yield "
                                                                                                <span class=\"col-pink\">
                                                                                                (";
                            // line 1354
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 1354), "html", null, true);
                            yield ")</span>";
                        }
                        // line 1355
                        yield "                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">";
                        // line 1356
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1356))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1357
                            yield "                                                                                        <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1357), "id", [], "any", false, false, false, 1357), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1357), "chantier", [], "any", false, false, false, 1357), "id", [], "any", false, false, false, 1357)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1357), "iddevis", [], "any", false, false, false, 1357), "html", null, true);
                            yield " ";
                        }
                        yield "</a>
                                                                                    </td>
                                                                                    <td class=\"text-right nowrape\">";
                        // line 1359
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1359), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"col-deep-orange\"
                                                                                        title=\"";
                        // line 1361
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 1361));
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 1361)), "html", null, true);
                        yield "</td>
                                                                                </tr>
                                                                            ";
                    }
                    // line 1364
                    yield "                                                                        ";
                }
                // line 1365
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1366
            yield "
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 1373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vcth"]) || array_key_exists("vcth", $context) ? $context["vcth"] : (function () { throw new RuntimeError('Variable "vcth" does not exist.', 1373, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Dépenses internes non validées</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>EVIS</th>
                                                                        <th>MONTANT</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 1392
            $context["ncth"] = 0;
            // line 1393
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1393, $this->source); })()), "caisses", [], "any", false, false, false, 1393));
            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                // line 1394
                yield "                                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 1394) == "save")) {
                    // line 1395
                    yield "                                                                            ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 1395)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 1395) == 3))) {
                        // line 1396
                        yield "                                                                                ";
                        $context["ncth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1396) + (isset($context["ncth"]) || array_key_exists("ncth", $context) ? $context["ncth"] : (function () { throw new RuntimeError('Variable "ncth" does not exist.', 1396, $this->source); })()));
                        // line 1397
                        yield "                                                                                <tr>
                                                                                    <td class=\"nowrape\">";
                        // line 1398
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 1398), "Y.m.d"), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"";
                        // line 1400
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 1400), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 1400), "id", [], "any", false, false, false, 1400)]), "html", null, true);
                        yield "\"
                                                                                                ";
                        // line 1401
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1401), "html", null, true);
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1401), "html", null, true);
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 1401))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1402
                            yield "                                                                                                <span class=\"col-pink\">
                                                                                                (";
                            // line 1403
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 1403), "html", null, true);
                            yield ")</span>";
                        }
                        // line 1404
                        yield "                                                                                        </a>
                                                                                    </td>
                                                                                    <td class=\"nowrape\">";
                        // line 1406
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1406))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1407
                            yield "                                                                                        <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1407), "id", [], "any", false, false, false, 1407), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1407), "chantier", [], "any", false, false, false, 1407), "id", [], "any", false, false, false, 1407)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 1407), "iddevis", [], "any", false, false, false, 1407), "html", null, true);
                            yield " ";
                        }
                        yield "</a>
                                                                                    </td>

                                                                                    <td class=\"text-right nowrape\">";
                        // line 1410
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1410), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                                    <td class=\"col-deep-orange\"
                                                                                        title=\"";
                        // line 1412
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 1412));
                        yield "\">
                                                                                        ";
                        // line 1413
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 1413))), "html", null, true);
                        yield "
                                                                                    </td>
                                                                                </tr>
                                                                            ";
                    }
                    // line 1417
                    yield "                                                                        ";
                }
                // line 1418
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1419
            yield "                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">";
            // line 1425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ncth"]) || array_key_exists("ncth", $context) ? $context["ncth"] : (function () { throw new RuntimeError('Variable "ncth" does not exist.', 1425, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Gestion des stocks</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>ARTICLES</th>
                                                                        <th class=\"text-center\">QTÉ</th>
                                                                        <th>PU</th>
                                                                        <th class=\"text-center\">MHT
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    ";
            // line 1449
            $context["last"] = "a";
            // line 1450
            yield "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invente"]) || array_key_exists("invente", $context) ? $context["invente"] : (function () { throw new RuntimeError('Variable "invente" does not exist.', 1450, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 1451
                yield "                                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1451)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1452
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1452), "etat", [], "any", false, false, false, 1452) == "valide")) {
                        // line 1453
                        yield "                                                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1453), "type", [], "any", false, false, false, 1453) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1453), "type", [], "any", false, false, false, 1453) == "non"))) {
                            // line 1454
                            yield "                                                                                    ";
                            $context["qte"] = 0;
                            // line 1455
                            yield "
                                                                                        ";
                            // line 1456
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invente"]) || array_key_exists("invente", $context) ? $context["invente"] : (function () { throw new RuntimeError('Variable "invente" does not exist.', 1456, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                                // line 1457
                                yield "                                                                                            ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "bon", [], "any", false, false, false, 1457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 1458
                                    yield "                                                                                                ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "bon", [], "any", false, false, false, 1458), "etat", [], "any", false, false, false, 1458) == "valide")) {
                                        // line 1459
                                        yield "                                                                                                    ";
                                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "bon", [], "any", false, false, false, 1459), "type", [], "any", false, false, false, 1459) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "bon", [], "any", false, false, false, 1459), "type", [], "any", false, false, false, 1459) == "non"))) {
                                            // line 1460
                                            yield "                                                                                                        ";
                                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1460) == CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1460))) {
                                                // line 1461
                                                yield "                                                                                                           ";
                                                $context["qte"] = ((isset($context["qte"]) || array_key_exists("qte", $context) ? $context["qte"] : (function () { throw new RuntimeError('Variable "qte" does not exist.', 1461, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1461));
                                                // line 1462
                                                yield "                                                                                                        ";
                                            }
                                            // line 1463
                                            yield "                                                                                                    ";
                                        }
                                        // line 1464
                                        yield "                                                                                                ";
                                    }
                                    // line 1465
                                    yield "                                                                                            ";
                                }
                                // line 1466
                                yield "                                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1467
                            yield "
                                                                                    ";
                            // line 1468
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1468) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 1468, $this->source); })()))) {
                                // line 1469
                                yield "
                                                                                        <tr class=\"bg-light\">
                                                                                            <td class=\"bolo600\"
                                                                                                style=\"padding: 2px !important;\">";
                                // line 1472
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1472))), ["&NBSP;" => ""]), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"bolo600 col-pink\"
                                                                                                style=\"padding: 2px !important; text-align: right\">";
                                // line 1474
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["qte"]) || array_key_exists("qte", $context) ? $context["qte"] : (function () { throw new RuntimeError('Variable "qte" does not exist.', 1474, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td class=\"bolo600\"
                                                                                                style=\"padding: 2px !important; text-align: right\"></td>
                                                                                            <td style=\"padding: 2px !important; text-align: right\"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class=\"bolo600\">
                                                                                                <a href=\"";
                                // line 1481
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1481), "id", [], "any", false, false, false, 1481), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1481), "chantier", [], "any", false, false, false, 1481), "id", [], "any", false, false, false, 1481)]), "html", null, true);
                                yield "\"
                                                                                                   class=\"col-blue\">";
                                // line 1482
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1482), "numbon", [], "any", false, false, false, 1482), "html", null, true);
                                yield "</a>
                                                                                            </td>
                                                                                            ";
                                // line 1484
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1484), "type", [], "any", false, false, false, 1484) == "oui")) {
                                    // line 1485
                                    yield "                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">";
                                    // line 1486
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1486), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                                            ";
                                }
                                // line 1488
                                yield "                                                                                            ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1488), "type", [], "any", false, false, false, 1488) == "non")) {
                                    // line 1489
                                    yield "                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">
                                                                                                    -";
                                    // line 1491
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1491), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                                            ";
                                }
                                // line 1493
                                yield "                                                                                            <td class=\"boo600\"
                                                                                                style=\"padding: 2px !important; text-align: right\">";
                                // line 1494
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1494), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td style=\"padding: 2px !important; text-align: right\">";
                                // line 1495
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1495) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1495)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                        </tr>

                                                                                    ";
                            } else {
                                // line 1499
                                yield "                                                                                        <tr>
                                                                                            <td class=\"bolo600\">
                                                                                                <a href=\"";
                                // line 1501
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1501), "id", [], "any", false, false, false, 1501), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1501), "chantier", [], "any", false, false, false, 1501), "id", [], "any", false, false, false, 1501)]), "html", null, true);
                                yield "\"
                                                                                                   class=\"col-blue\">";
                                // line 1502
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1502), "numbon", [], "any", false, false, false, 1502), "html", null, true);
                                yield "</a>
                                                                                            </td>
                                                                                            ";
                                // line 1504
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1504), "type", [], "any", false, false, false, 1504) == "oui")) {
                                    // line 1505
                                    yield "                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">";
                                    // line 1506
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1506), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                                            ";
                                }
                                // line 1508
                                yield "                                                                                            ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1508), "type", [], "any", false, false, false, 1508) == "non")) {
                                    // line 1509
                                    yield "                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">
                                                                                                    -";
                                    // line 1511
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1511), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                                            ";
                                }
                                // line 1513
                                yield "                                                                                            <td class=\"boo600\"
                                                                                                style=\"padding: 2px !important; text-align: right\">";
                                // line 1514
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1514), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                            <td style=\"padding: 2px !important; text-align: right\">";
                                // line 1515
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1515) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1515)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                                        </tr>
                                                                                    ";
                            }
                            // line 1518
                            yield "                                                                                    ";
                            $context["last"] = CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1518);
                            // line 1519
                            yield "                                                                                ";
                        }
                        // line 1520
                        yield "                                                                            ";
                    }
                    // line 1521
                    yield "                                                                        ";
                }
                // line 1522
                yield "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1523
            yield "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            ";
        }
        // line 1534
        yield "                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'rapportchantier');
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
        return "content/rapportchantier.html.twig";
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
        return array (  3372 => 1534,  3359 => 1523,  3353 => 1522,  3350 => 1521,  3347 => 1520,  3344 => 1519,  3341 => 1518,  3335 => 1515,  3331 => 1514,  3328 => 1513,  3323 => 1511,  3319 => 1509,  3316 => 1508,  3311 => 1506,  3308 => 1505,  3306 => 1504,  3301 => 1502,  3297 => 1501,  3293 => 1499,  3286 => 1495,  3282 => 1494,  3279 => 1493,  3274 => 1491,  3270 => 1489,  3267 => 1488,  3262 => 1486,  3259 => 1485,  3257 => 1484,  3252 => 1482,  3248 => 1481,  3238 => 1474,  3233 => 1472,  3228 => 1469,  3226 => 1468,  3223 => 1467,  3217 => 1466,  3214 => 1465,  3211 => 1464,  3208 => 1463,  3205 => 1462,  3202 => 1461,  3199 => 1460,  3196 => 1459,  3193 => 1458,  3190 => 1457,  3186 => 1456,  3183 => 1455,  3180 => 1454,  3177 => 1453,  3174 => 1452,  3171 => 1451,  3166 => 1450,  3164 => 1449,  3137 => 1425,  3129 => 1419,  3123 => 1418,  3120 => 1417,  3113 => 1413,  3109 => 1412,  3104 => 1410,  3093 => 1407,  3091 => 1406,  3087 => 1404,  3083 => 1403,  3080 => 1402,  3075 => 1401,  3071 => 1400,  3066 => 1398,  3063 => 1397,  3060 => 1396,  3057 => 1395,  3054 => 1394,  3049 => 1393,  3047 => 1392,  3025 => 1373,  3016 => 1366,  3010 => 1365,  3007 => 1364,  2999 => 1361,  2994 => 1359,  2984 => 1357,  2982 => 1356,  2979 => 1355,  2975 => 1354,  2969 => 1352,  2966 => 1351,  2962 => 1350,  2957 => 1348,  2954 => 1347,  2951 => 1346,  2948 => 1345,  2945 => 1344,  2940 => 1343,  2938 => 1342,  2911 => 1318,  2907 => 1317,  2903 => 1316,  2899 => 1315,  2890 => 1308,  2884 => 1307,  2876 => 1304,  2871 => 1302,  2867 => 1301,  2863 => 1300,  2859 => 1299,  2856 => 1298,  2848 => 1296,  2846 => 1295,  2842 => 1293,  2830 => 1291,  2827 => 1290,  2815 => 1288,  2812 => 1287,  2804 => 1285,  2801 => 1284,  2793 => 1282,  2790 => 1281,  2782 => 1279,  2780 => 1278,  2772 => 1275,  2767 => 1273,  2764 => 1272,  2761 => 1271,  2758 => 1270,  2755 => 1269,  2752 => 1268,  2749 => 1267,  2744 => 1266,  2741 => 1265,  2739 => 1264,  2713 => 1241,  2709 => 1240,  2700 => 1233,  2694 => 1232,  2686 => 1229,  2681 => 1227,  2677 => 1226,  2674 => 1225,  2666 => 1223,  2664 => 1222,  2660 => 1220,  2652 => 1218,  2649 => 1217,  2641 => 1215,  2638 => 1214,  2630 => 1212,  2627 => 1211,  2619 => 1209,  2616 => 1208,  2608 => 1206,  2606 => 1205,  2599 => 1201,  2595 => 1200,  2590 => 1198,  2587 => 1197,  2584 => 1196,  2581 => 1195,  2578 => 1194,  2575 => 1193,  2572 => 1192,  2567 => 1191,  2564 => 1190,  2562 => 1189,  2535 => 1165,  2531 => 1164,  2520 => 1155,  2514 => 1154,  2511 => 1153,  2505 => 1150,  2501 => 1149,  2494 => 1146,  2488 => 1144,  2482 => 1142,  2480 => 1141,  2477 => 1140,  2472 => 1138,  2467 => 1137,  2465 => 1136,  2460 => 1134,  2456 => 1133,  2450 => 1130,  2446 => 1129,  2441 => 1127,  2438 => 1126,  2435 => 1125,  2432 => 1124,  2429 => 1123,  2426 => 1122,  2423 => 1121,  2420 => 1120,  2415 => 1119,  2412 => 1118,  2410 => 1117,  2386 => 1096,  2382 => 1095,  2371 => 1086,  2365 => 1085,  2362 => 1084,  2356 => 1081,  2352 => 1080,  2345 => 1077,  2339 => 1075,  2333 => 1073,  2331 => 1072,  2328 => 1071,  2323 => 1069,  2318 => 1068,  2316 => 1067,  2311 => 1065,  2307 => 1064,  2301 => 1061,  2297 => 1060,  2292 => 1058,  2289 => 1057,  2286 => 1056,  2283 => 1055,  2280 => 1054,  2277 => 1053,  2274 => 1052,  2271 => 1051,  2266 => 1050,  2263 => 1049,  2261 => 1048,  2232 => 1022,  2228 => 1021,  2220 => 1015,  2214 => 1014,  2211 => 1013,  2208 => 1012,  2201 => 1008,  2197 => 1007,  2192 => 1005,  2188 => 1004,  2185 => 1003,  2180 => 1002,  2175 => 1001,  2173 => 1000,  2169 => 999,  2162 => 997,  2157 => 995,  2154 => 994,  2151 => 993,  2148 => 992,  2145 => 991,  2142 => 990,  2139 => 989,  2134 => 988,  2131 => 987,  2129 => 986,  2096 => 956,  2089 => 951,  2083 => 950,  2080 => 949,  2077 => 948,  2074 => 947,  2071 => 946,  2065 => 945,  2062 => 944,  2054 => 941,  2046 => 939,  2039 => 938,  2035 => 937,  2032 => 936,  2028 => 935,  2025 => 934,  2022 => 933,  2018 => 932,  2013 => 930,  2010 => 929,  2007 => 928,  2004 => 927,  2000 => 926,  1993 => 922,  1989 => 921,  1985 => 919,  1982 => 918,  1976 => 917,  1973 => 916,  1970 => 915,  1967 => 914,  1964 => 913,  1961 => 912,  1958 => 911,  1953 => 910,  1950 => 909,  1947 => 908,  1944 => 907,  1941 => 906,  1936 => 905,  1934 => 904,  1906 => 879,  1902 => 878,  1898 => 877,  1890 => 871,  1884 => 870,  1881 => 869,  1878 => 868,  1875 => 867,  1872 => 866,  1869 => 865,  1866 => 864,  1860 => 863,  1857 => 862,  1850 => 858,  1846 => 857,  1841 => 855,  1837 => 854,  1833 => 853,  1830 => 852,  1825 => 851,  1820 => 850,  1818 => 849,  1811 => 847,  1806 => 845,  1803 => 844,  1800 => 843,  1797 => 842,  1793 => 841,  1787 => 838,  1783 => 837,  1779 => 836,  1775 => 835,  1771 => 833,  1769 => 832,  1766 => 831,  1760 => 830,  1757 => 829,  1754 => 828,  1751 => 827,  1748 => 826,  1745 => 825,  1742 => 824,  1739 => 823,  1736 => 822,  1732 => 821,  1729 => 820,  1726 => 819,  1723 => 818,  1720 => 817,  1718 => 816,  1715 => 815,  1712 => 814,  1709 => 813,  1704 => 812,  1701 => 811,  1698 => 810,  1696 => 809,  1669 => 785,  1665 => 784,  1658 => 780,  1654 => 779,  1644 => 772,  1640 => 771,  1633 => 767,  1629 => 766,  1620 => 760,  1616 => 759,  1605 => 750,  1599 => 749,  1596 => 748,  1593 => 747,  1590 => 746,  1587 => 745,  1584 => 744,  1581 => 743,  1578 => 742,  1576 => 741,  1573 => 740,  1570 => 739,  1567 => 738,  1564 => 737,  1561 => 736,  1558 => 735,  1556 => 734,  1553 => 733,  1550 => 732,  1547 => 731,  1544 => 730,  1541 => 729,  1538 => 728,  1536 => 727,  1533 => 726,  1530 => 725,  1527 => 724,  1524 => 723,  1521 => 722,  1518 => 721,  1515 => 720,  1512 => 719,  1509 => 718,  1505 => 717,  1502 => 716,  1499 => 715,  1497 => 714,  1494 => 713,  1491 => 712,  1489 => 711,  1486 => 710,  1483 => 709,  1481 => 708,  1478 => 707,  1475 => 706,  1473 => 705,  1469 => 703,  1463 => 702,  1460 => 701,  1457 => 700,  1454 => 699,  1447 => 695,  1443 => 694,  1438 => 692,  1434 => 691,  1431 => 690,  1426 => 688,  1421 => 687,  1419 => 686,  1415 => 685,  1412 => 684,  1404 => 682,  1398 => 679,  1393 => 678,  1391 => 677,  1386 => 675,  1383 => 674,  1380 => 673,  1377 => 672,  1374 => 671,  1371 => 670,  1367 => 669,  1340 => 645,  1336 => 644,  1327 => 637,  1321 => 636,  1318 => 635,  1315 => 634,  1312 => 633,  1304 => 630,  1299 => 628,  1295 => 627,  1292 => 626,  1287 => 624,  1282 => 623,  1280 => 622,  1276 => 621,  1273 => 620,  1265 => 618,  1259 => 615,  1253 => 613,  1251 => 612,  1246 => 610,  1243 => 609,  1240 => 608,  1237 => 607,  1234 => 606,  1231 => 605,  1228 => 604,  1225 => 603,  1220 => 602,  1217 => 601,  1215 => 600,  1190 => 577,  1184 => 576,  1181 => 575,  1178 => 574,  1170 => 571,  1165 => 569,  1161 => 568,  1158 => 567,  1153 => 566,  1147 => 564,  1144 => 563,  1141 => 562,  1138 => 561,  1136 => 560,  1131 => 558,  1127 => 557,  1121 => 554,  1118 => 553,  1115 => 552,  1112 => 551,  1109 => 550,  1105 => 549,  1086 => 532,  1080 => 531,  1077 => 530,  1074 => 529,  1066 => 526,  1061 => 524,  1057 => 523,  1054 => 522,  1049 => 521,  1043 => 519,  1040 => 518,  1037 => 517,  1034 => 516,  1032 => 515,  1027 => 513,  1023 => 512,  1017 => 509,  1014 => 508,  1011 => 507,  1008 => 506,  1005 => 505,  1001 => 504,  973 => 479,  969 => 478,  965 => 477,  961 => 476,  954 => 471,  948 => 470,  944 => 468,  941 => 467,  934 => 463,  930 => 462,  925 => 460,  921 => 459,  917 => 458,  913 => 457,  905 => 452,  900 => 450,  895 => 448,  892 => 447,  886 => 446,  883 => 445,  880 => 444,  877 => 443,  872 => 442,  869 => 441,  866 => 440,  863 => 439,  860 => 438,  857 => 437,  854 => 436,  851 => 435,  848 => 434,  843 => 433,  840 => 432,  837 => 431,  835 => 430,  811 => 409,  807 => 408,  803 => 407,  799 => 406,  792 => 401,  786 => 400,  782 => 398,  779 => 397,  772 => 393,  768 => 392,  763 => 390,  759 => 389,  755 => 388,  751 => 387,  745 => 384,  740 => 382,  735 => 380,  732 => 379,  726 => 378,  723 => 377,  720 => 376,  717 => 375,  712 => 374,  709 => 373,  706 => 372,  703 => 371,  700 => 370,  697 => 369,  694 => 368,  691 => 367,  688 => 366,  683 => 365,  680 => 364,  677 => 363,  675 => 362,  648 => 338,  644 => 337,  637 => 332,  631 => 331,  625 => 328,  620 => 327,  613 => 323,  612 => 322,  607 => 320,  602 => 319,  600 => 318,  597 => 317,  590 => 313,  584 => 310,  580 => 309,  577 => 308,  575 => 307,  570 => 305,  567 => 304,  564 => 303,  561 => 302,  558 => 301,  553 => 300,  550 => 299,  548 => 298,  517 => 270,  500 => 256,  483 => 242,  466 => 228,  450 => 215,  433 => 201,  417 => 188,  400 => 174,  384 => 161,  366 => 146,  354 => 137,  350 => 136,  338 => 127,  329 => 120,  321 => 118,  318 => 117,  314 => 116,  303 => 108,  287 => 95,  281 => 92,  277 => 91,  272 => 89,  261 => 80,  256 => 79,  251 => 78,  246 => 77,  242 => 76,  231 => 67,  229 => 66,  225 => 64,  218 => 63,  210 => 57,  203 => 55,  200 => 54,  197 => 53,  195 => 52,  192 => 51,  186 => 50,  183 => 49,  181 => 48,  174 => 44,  170 => 43,  167 => 42,  165 => 40,  164 => 37,  160 => 35,  152 => 30,  147 => 28,  142 => 26,  137 => 23,  134 => 22,  131 => 21,  127 => 20,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-4\" style=\"margin-top: 20px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            ::. SUIVI DE CHANTIERS
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll\">
                            {% for client in clients %}
                                {% set p = 0 %}
                                {% if client.corbeille is null and client.chantiers.count > 0 %}
                                    {% if client.type is null %}
                                        <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                            {% for chantier in client.chantiers %}
                                                {% if chantier.corbeille is null %}
                                                    {% if p == 0 %}
                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"{{ path('client',{id: client.id}) }}\"
                                                                   class=\"text-white\"
                                                                   title=\"{{ client.nomclient|upper }}\">
                                                                    -
                                                                    {{ client.nomclient|upper }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"{{ path(
                                                                'chchansuivi',
                                                                {
                                                                    id: chantier.id
                                                                }
                                                            ) }}\" class=\"text-pri\"
                                                               title=\"{{ chantier.nomchantier|upper }}\">
                                                                # {{ chantier.nomchantier|upper }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {% set p = p + 1 %}
                                                {% endif %}
                                            {% endfor %}
                                        </table>
                                        {% set q = q + 1 %}
                                    {% endif %}
                                {% endif %}

                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\" style=\"margin-top: 20px;\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            {% if chantier  is not null %} {{ chantier.client.nomclient }} | {{ chantier.nomchantier }}{% endif %}
                        </h4>
                        <div class=\"table-responsive\" style=\"overflow-x: scroll\">
                            {% if chantier  is not null %}
                                <div id=\"printchantier\">
                                    <section class=\"content\" style=\"margin-top: 40px !important;\" id=\"sechantier\">
                                        <div class=\"container-fluid\">
                                            <div class=\"block-header\">
                                                <div class=\"row clearfix p-b-5\">
                                                    <div class=\"col-xs-12 col-sm-12\">
                                                        <h4 class=\"text-center colo-pink bolo700\"><a
                                                                    href=\"\">IMPRIMER</a></h4>
                                                        <h2 class=\"text-center\">
                                                            {% if chantier.etat == \"etude\" %} CHANTIER EN ÉTUDE {% endif %}
                                                            {% if chantier.etat == \"encours\" %} CHANTIER EN COURS {% endif %}
                                                            {% if chantier.etat == \"archiver\" %} CHANTIER TERMINÉ {% endif %}
                                                            {% if chantier.etat == \"cloturer\" %} CHANTIER CLÔTURÉ {% endif %}
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=\"row clearfix m-t-20 p-b-5\" style=\"margin-top: 40px;\">
                                                    <div class=\"col-sm-12\"
                                                         style=\"margin-top: -40px; margin-bottom: 20px\">
                                                        <div class=\"card card-about-me\">
                                                            <div class=\"profile-header h3 text-white text-center bg-pri\"
                                                                 style=\"padding: 6px\">
                                                                <h4 class=\"font-bold\">{{ chantier.nomchantier|upper }}</h4>
                                                                <h4>
                                                                    <a href=\"{{ path('client',{'id':client.getId()} ) }}\"
                                                                       class=\"col-yellow bolo700\">{{ client.nomclient|upper }}</a>
                                                                </h4>
                                                                <h4 class=\"col-amber bolo600\">AVANCEMENT DU
                                                                    CHANTIER: {{ chantier.progression|number_format(2,',',' ') }}
                                                                    %<br>
                                                                    <span style=\"font-size: 14px;\">(Selon les décomptes validés et factures d'acompte )</span>
                                                                </h4>
                                                            </div>
                                                            <div class=\"body\" style=\"margin-top: -20px\">
                                                                <ul>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">key</i>RÉFÉRENCE
                                                                            CONTRAT
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            {{ chantier.contrat }}
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">person</i>SUPERVISEURS
                                                                        </div>
                                                                        <div class=\"content\">
                                                                            {% for super in chantier.superviseurs %}
                                                                                <p class=\"col-black\">
                                                                                    # {{ super.noms }}</p>
                                                                            {% endfor %}
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">notes</i>DESCRIPTION
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            {{ chantier.description|striptags|raw }}
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">alarm</i>
                                                                            DÉBUT / FIN
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            {{ chantier.ddebut|date('d/m/Y H:i') }}
                                                                            / {{ chantier.dfin|date('d/m/Y H:i') }}
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"title pri\">
                                                                            <i class=\"material-icons\">location_on</i>
                                                                            LOCALISATION
                                                                        </div>
                                                                        <div class=\"content col-black\">
                                                                            <p> {{ chantier.localisation|capitalize }}</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-sm-12\" style=\"margin-top: -20px\">
                                                        <div class=\"row clearfix\" style=\"padding: 5px !important;\">
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-light-blue hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            COÛT
                                                                            <br>{{ chantier.cout|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-pink hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            COMMANDES<br>{{ chantier.depense|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-green hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            MARGE
                                                                            PRÉVUE<br>{{ (chantier.cout - chantier.depense)|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-light-green hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\"font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            RÈGLEMENT<br>{{ chantier.reglement|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-cyan hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            RESTE À
                                                                            PAYER<br>{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 \">
                                                                <div class=\"info-box bg-deep-orange hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px\">
                                                                            BALANCE<br>{{ (chantier.reglement - chantier.depense)|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"257\" data-speed=\"1000\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-pri hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold\"
                                                                             style=\"font-size: 14px; color:white\">
                                                                            COÛT DE VENTE
                                                                            <br>{{ ventedevis|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-purple hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold \"
                                                                             style=\"font-size: 14px;\">
                                                                            DÉPENSES RÉELLES
                                                                            <br>{{ depcaisse|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                                <div class=\"info-box bg-amber hover-expand-effect\">
                                                                    <div class=\"content\">
                                                                        <div class=\" font-weight-bold \"
                                                                             style=\"font-size: 14px;\">
                                                                            MARGE ACTUELLE
                                                                            <br>{{ (chantier.cout - depcaisse)|number_format(2,',',' ') }}
                                                                        </div>
                                                                        <div class=\"number count-to\" data-from=\"0\"
                                                                             data-to=\"125\" data-speed=\"15\"
                                                                             data-fresh-interval=\"20\"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row clearfix m-t-30 \">
                                                    <div class=\"col-xs-12 col-sm-12\">
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Relevé du chantier</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; margin-bottom: 10px; font-size: 11px !important;\">
                                                                    <thead>
                                                                    <tr style=\"color: dimgray !important;\">
                                                                        <th>DATE</th>
                                                                        <th>OPÉRATION</th>
                                                                        <th>SORTIE</th>
                                                                        <th>ENTRÉE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set sortie = 0 %}
                                                                    {% set entree = 0 %}
                                                                    {% for don in valider %}
                                                                        {% if don.type !=  2 %}
                                                                            {% set sortie = sortie + don.debit %}
                                                                            {% set entree = entree + don.credit %}
                                                                            <tr>
                                                                                <td class=\"nowrape\">{{ don.date|date('Y.m.d') }}</td>

                                                                                {% if don.type ==  1 %}

                                                                                    <td title=\"{{ don.operation }}\">
                                                                                        <a href=\"{{ path('editcaisse',{'idcaisse':don.idlink, 'idchantier':chantier.id}) }}\"
                                                                                           class=\"col-black\">
                                                                                            CAISSE N°:
                                                                                            {{ don.operation }}
                                                                                        </a>
                                                                                    </td>
                                                                                {% endif %}

                                                                                {% if don.type ==  3 %}
                                                                                    <td title=\"{{ don.operation }}\">
                                                                                        <a href=\"{{ path('editbon', {'id': don.idlink, 'idchantier': chantier.id}) }}\"
                                                                                           class=\"col-pink\">
                                                                                            {{ don.operation|length > 60 ? don.operation|slice(0, 60)|upper ~ '…' :
                                                                                            don.operation|upper }}
                                                                                        </a>
                                                                                    </td>
                                                                                {% endif %}
                                                                                <td class=\"text-right\">{{ don.debit|number_format(2,',',' ') }}</td>
                                                                                <td class=\"text-right\"> {{ don.credit|number_format(2,',',' ') }}</td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\"> {{ sortie|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\"> {{ entree|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Devis validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th class=\"nowrape\">N° DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉGLÉ</th>
                                                                        <th>SOLDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set vdth = 0 %}
                                                                    {% set vdttc = 0 %}
                                                                    {% set regler = 0 %}
                                                                    {% for devis in chantier.devis %}
                                                                        {% if devis.type is null %}
                                                                            {% if devis.etat == 'valide' and devis.corbeille is null %}
                                                                                {% set vdth = devis.totalht + vdth %}
                                                                                {% set vdttc = devis.totalttc + vdttc %}
                                                                            {% endif %}
                                                                            {% if devis.etat == 'valide' %}
                                                                                {% if devis.corbeille is null %}
                                                                                    {% set regler = 0 %}
                                                                                    {% for rele  in devis.relevers %}
                                                                                        {% if rele.type == 3 %}
                                                                                            {% set regler = regler + rele.montant %}
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                    <tr>
                                                                                        <td class=\"nowrape\">{{ devis.date|date('Y.m.d') }}</td>
                                                                                        <td class=\"nowrape bolo600\">
                                                                                            <a href=\"{{ path('editdevis',{'id':devis.id ,'idchantier':devis.chantier.id}) }}\"
                                                                                               style=\"color:dodgerblue\">
                                                                                                {{ devis.iddevis }}
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class=\"text-right nowrape\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ regler|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ (devis.totalttc - regler)|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"{{ devis.devreference|striptags|raw }}\">
                                                                                            {{ devis.devreference|striptags|raw }}
                                                                                        </td>
                                                                                    </tr>
                                                                                {% endif %}
                                                                            {% endif %}

                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ vdth|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ vdttc|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ regler|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ (vdttc - regler)|number_format(2,',',' ') }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Devis non validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; margin-top: 5px; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th class=\"nowrape\">N° DEVIS</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉGLÉ</th>
                                                                        <th>SOLDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set ndth = 0 %}
                                                                    {% set ndttc = 0 %}
                                                                    {% set regler = 0 %}
                                                                    {% for devis in chantier.devis %}
                                                                        {% if devis.type is null %}
                                                                            {% if devis.etat == 'save' and devis.corbeille is null %}
                                                                                {% set ndth = devis.totalht + ndth %}
                                                                                {% set ndttc = devis.totalttc + ndttc %}
                                                                            {% endif %}
                                                                            {% if devis.etat == 'save' %}
                                                                                {% if devis.corbeille is null %}
                                                                                    {% set regler = 0 %}
                                                                                    {% for rele  in devis.relevers %}
                                                                                        {% if rele.type == 3 %}
                                                                                            {% set regler = regler + rele.montant %}
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                    <tr>
                                                                                        <td class=\"nowrape\">{{ devis.date|date('Y.m.d') }}</td>
                                                                                        <td class=\"nowrape bolo600\">
                                                                                            <a href=\"{{ path('editdevis',{'id':devis.id ,'idchantier':devis.chantier.id}) }}\"
                                                                                               style=\"color:dodgerblue\">
                                                                                                {{ devis.iddevis }}
                                                                                            </a>
                                                                                        </td>
                                                                                        </td>

                                                                                        <td class=\"text-right nowrape\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ regler|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ (devis.totalttc - regler)|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"{{ devis.devreference|striptags|raw }}\">
                                                                                            {{ devis.devreference|striptags|raw }}
                                                                                        </td>
                                                                                    </tr>
                                                                                {% endif %}
                                                                            {% endif %}

                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ ndth|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ ndttc|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ regler|number_format(2,',',' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ (ndttc - regler)|number_format(2,',',' ') }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Bons de suivi de commande
                                                                    validés</h4>
                                                                <table class=\"table-striped table-bordered display nowrape\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>N° BON DE SUIVI</th>
                                                                        <th>N° DE DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for bon in chantier.bons %}
                                                                        {% if bon.etat == 'valide' %}
                                                                            {% if bon.corbeille is null %}
                                                                                {% if bon.type == 'prepa' %}
                                                                                    <tr>
                                                                                        <td class=\"nowrape\">{{ bon.date|date('Y-m-d') }}</td>
                                                                                        <td class=\"nowrape\"><span
                                                                                                    class=\"badge badge-pill badge-primary text-white\">V</span>
                                                                                            <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">BON
                                                                                                N° {{ bon.numbon }}</a>
                                                                                        </td>
                                                                                        <td class=\"nowrape\">{% if bon.devis is not null %}
                                                                                                {% if bon.devis.etat != 'valide' %}
                                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span> {% else %}
                                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>{% endif %}
                                                                                                <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                                   style=\"color:dodgerblue\">DEVIS
                                                                                                    N° {{ bon.devis.iddevis }}</a>
                                                                                            {% endif %}</td>
                                                                                        <td class=\"text-right nowrape\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"{{ bon.bonreference|striptags|raw }}\">{{ bon.bonreference|striptags|raw }}</td>
                                                                                    </tr>
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:20px\">
                                                                    Bons de suivi de commande non validés</h4>
                                                                <table class=\"table-striped table-bordered display nowrape\"
                                                                       style=\"width: 100%;font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>N° BON DE SUIVI</th>
                                                                        <th>N° DE DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for bon in chantier.bons %}
                                                                        {% if bon.etat == 'save' %}
                                                                            {% if bon.corbeille is null %}
                                                                                {% if bon.type == 'prepa' %}
                                                                                    <tr>
                                                                                        <td class=\"nowrape\">{{ bon.date|date('Y-m-d') }}</td>
                                                                                        <td class=\"nowrape\"><span
                                                                                                    class=\"badge badge-pill bg-blue-grey text-white\">V</span>
                                                                                            <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">BON
                                                                                                N° {{ bon.numbon }}</a>
                                                                                        </td>
                                                                                        <td class=\"nowrape\">{% if bon.devis is not null %}
                                                                                                {% if bon.devis.etat != 'valide' %}
                                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span> {% else %}
                                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>{% endif %}
                                                                                                <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                                   style=\"color:dodgerblue\">DEVIS
                                                                                                    N° {{ bon.devis.iddevis }}</a>
                                                                                            {% endif %}</td>
                                                                                        <td class=\"text-right nowrape\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"text-right nowrape\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"{{ bon.bonreference|striptags|raw }}\">{{ bon.bonreference|striptags|raw }}</td>
                                                                                    </tr>
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Bons de commande
                                                                    Fournisseur validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>FOURNISSEUR</th>
                                                                        <th>DEVIS</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set bht = 0 %}
                                                                    {% set bttc = 0 %}
                                                                    {% for bon in chantier.bons %}
                                                                        {% if bon.fournisseur is not null %}
                                                                            {% if bon.etat == 'valide' and bon.fournisseur.corbeille == null %}
                                                                                {% if bon.corbeille is null %}
                                                                                    {% if bon.type == 'non' or  bon.type == 'oui' %}
                                                                                        {% set bht = bon.totalht + bht %}
                                                                                        {% set bttc = bon.totalttc + bttc %}
                                                                                        <tr>
                                                                                            <td class=\"nowrape\">{{ bon.date|date('Y.m.d') }}</td>
                                                                                            <td class=\"nowrape bolo600\">
                                                                                                {% if bon.type == \"non\" %}
                                                                                                    <a href=\"{{ path('editbon',{'id':bon.id,  'idchantier': bon.chantier.id}) }}\"
                                                                                                       class=\"col-pink\">
                                                                                                        {{ bon.numbon }}
                                                                                                    </a>
                                                                                                {% else %}
                                                                                                    <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">{{ bon.numbon }}</a>
                                                                                                {% endif %}
                                                                                            </td>
                                                                                            <td class=\"nowrape\">{{ bon.fournisseur.fournisseur }}</td>
                                                                                            <td class=\"nowrape bolo600\"> {% if bon.devis is not null %}
                                                                                                    <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                                       style=\"color:dodgerblue\">{{ bon.devis.iddevis }}</a>
                                                                                                {% endif %}
                                                                                            </td>
                                                                                            <td class=\"text-right nowrape\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                                                            <td class=\"text-right nowrape\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                            <td class=\"col-deep-orange\"
                                                                                                title=\"{{ bon.bonreference|striptags|raw }}\">{{ bon.bonreference|striptags|raw }}</td>
                                                                                        </tr>
                                                                                    {% endif %}
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ bht|number_format(2, ',', ' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ bttc|number_format(2, ',', ' ') }}</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:20px\">
                                                                    Bons de
                                                                    commande
                                                                    Fournisseur
                                                                    non validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>FOURNISSEUR</th>
                                                                        <th>DEVIS</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for bon in chantier.bons %}
                                                                        {% if bon.fournisseur is not null %}
                                                                            {% if bon.etat == 'save' %}
                                                                                {% if bon.corbeille is null and bon.fournisseur.corbeille == null %}
                                                                                    {% if  bon.type == 'non' or bon.type == 'oui' %}
                                                                                        <tr>
                                                                                            <td class=\"nowrape\">{{ bon.date|date('Y.m.d') }}</td>
                                                                                            <td class=\"nowrape bolo600\">
                                                                                                {% if bon.type == \"non\" %}
                                                                                                    <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\"
                                                                                                       class=\"col-pink\">{{ bon.numbon }}
                                                                                                    </a>
                                                                                                {% else %}
                                                                                                    <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">{{ bon.numbon }}</a>
                                                                                                {% endif %}
                                                                                            </td>
                                                                                            <td class=\"nowrape\">{{ bon.fournisseur.fournisseur }}</td>
                                                                                            <td class=\"nowrape bolo600\"> {% if bon.devis is not null %}
                                                                                                    <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                                       style=\"color:dodgerblue\">{{ bon.devis.iddevis }}</a>
                                                                                                {% endif %}
                                                                                            </td>
                                                                                            <td class=\"text-right nowrape\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                                                            <td class=\"text-right nowrape\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                            <td class=\"col-deep-orange\"
                                                                                                title=\"{{ bon.bonreference|striptags|raw }}\">
                                                                                                {{ bon.bonreference|striptags|raw }}
                                                                                            </td>
                                                                                        </tr>
                                                                                    {% endif %}
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                                {% set vbth = 0 %}
                                                                {% set vbttc = 0 %}

                                                                {% set nbth = 0 %}
                                                                {% set nbttc = 0 %}

                                                                {% set brht = 0 %}
                                                                {% set brttc = 0 %}

                                                                {% set brnht = 0 %}
                                                                {% set brnttc = 0 %}

                                                                {% for bon in chantier.bons %}
                                                                    {% if bon.fournisseur is not null and bon.fournisseur.corbeille is null %}
                                                                        {% if bon.type != \"none\" and bon.type != \"pst\" %}
                                                                            {% if bon.etat == 'valide' and bon.type != \"non\" %}
                                                                                {% if bon.corbeille is null %}
                                                                                    {% set vbth = bon.totalht + vbth %}
                                                                                    {% set vbttc = bon.totalttc + vbttc %}
                                                                                {% endif %}
                                                                            {% endif %}

                                                                            {% if bon.etat == 'save' and bon.type != \"non\" %}
                                                                                {% if bon.corbeille is null %}
                                                                                    {% set nbth = bon.totalht + nbth %}
                                                                                    {% set nbttc = bon.totalttc + nbttc %}
                                                                                {% endif %}
                                                                            {% endif %}

                                                                            {% if bon.etat == 'valide' and bon.type == \"non\" %}
                                                                                {% if bon.corbeille is null %}
                                                                                    {% set brht = bon.totalht + brht %}
                                                                                    {% set brttc = bon.totalttc + brttc %}
                                                                                {% endif %}
                                                                            {% endif %}

                                                                            {% if bon.etat == 'save' and bon.type == \"non\" %}
                                                                                {% if bon.corbeille is null %}
                                                                                    {% set brnht = bon.totalht + brnht %}
                                                                                    {% set brnttc = bon.totalttc + brnttc %}
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                                <table class=\"table-bordered d reduire\"
                                                                       style=\"float: right; margin-top: 20px; font-size: 11px\">
                                                                    <tr style=\"background-color: slategrey; color: white\">
                                                                        <th class=\"text-center\"></th>
                                                                        <th class=\"text-center\">TOTAL HT</th>
                                                                        <th class=\"text-center\">TOTAL TTC</th>
                                                                    </tr>
                                                                    <tr style=\"background-color: slategrey; color: white\">
                                                                        <td class=\"text-right\">VALIDÉS</td>
                                                                        <td class=\"text-right\">{{ vbth|number_format(2,',', ' ') }}</td>
                                                                        <td class=\"text-right\">{{ vbttc|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                    <tr style=\"background-color: slategrey; color: white\">
                                                                        <td class=\"text-right\">BONS DE RETOUR
                                                                            VALIDÉS
                                                                        </td>
                                                                        <td class=\"text-right\">{{ brht|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right\">{{ brttc|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                    <tr style=\"background-color: indianred; color: white\">
                                                                        <td class=\"text-right\">NON VALIDÉS</td>
                                                                        <td class=\"text-right\">{{ nbth|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right\">{{ nbttc|number_format(2,',',' ') }}</td>
                                                                    </tr>

                                                                    <tr style=\"background-color: indianred; color: white\">
                                                                        <td class=\"text-right\">BONS DE RETOUR
                                                                            NON VALIDÉS
                                                                        </td>
                                                                        <td class=\"text-right\">{{ brnht|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right\">{{ brnttc|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                    <tr class=\"bg-pri text-white\">
                                                                        <td class=\"text-right\">TOTAUX</td>
                                                                        <td class=\"text-right\">{{ ((vbth-brht)+(nbth-brnht))|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right\">{{ ((vbttc-brttc)+(nbttc-brnttc))|number_format(2,',',' ') }}</td>

                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Prestataires</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>PRESTATAIRES</th>
                                                                        <th>BONS</th>
                                                                        <th>DEVIS</th>
                                                                        <th>BON TTC</th>
                                                                        <th>PERÇU</th>
                                                                        <th>RESTE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set tobttc = 0 %}
                                                                    {% set tofopercu = 0 %}
                                                                    {% set toforeste = 0 %}
                                                                    {% for four in fournisseurs %}
                                                                        {% if four.type == 3 %}
                                                                            {% if four.corbeille is null %}

                                                                                {% set check = 0 %}
                                                                                {% set bttc = 0 %}
                                                                                {% set fopercu = 0 %}
                                                                                {% set foreste = 0 %}

                                                                                {% for bon in chantier.bons %}
                                                                                    {% if bon.etat == \"valide\" %}
                                                                                        {% if bon.fournisseur is not null and bon.fournisseur == four %}
                                                                                            {% set check = check + 1 %}
                                                                                            {% set bttc = bon.totalttc + bttc %}
                                                                                            {% set fopercu = bon.recu + fopercu %}
                                                                                            {% set foreste = bon.reste + foreste %}
                                                                                        {% endif %}
                                                                                    {% endif %}
                                                                                {% endfor %}

                                                                                {% if check != 0 %}
                                                                                    <tr class=\"bg-light\">
                                                                                        <td class=\"col-blue bolo700 nowrape\"
                                                                                            colspan=\"3\">{{ four.fournisseur|upper }}</td>
                                                                                        <td class=\"nowrape col-pink bolo700\">{{ bttc|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"nowrape col-pink bolo700\">{{ fopercu|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"nowrape col-pink bolo700\">{{ foreste|number_format(2, ',', ' ') }}</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    {% for bon in chantier.bons %}
                                                                                        {% if bon.fournisseur is not null and bon.fournisseur == four %}
                                                                                            {% if bon.etat == \"valide\" %}
                                                                                                <tr>
                                                                                                    <td class=\"text-center\">{{ bon.date|date('Y.m.d') }}</td>
                                                                                                    <td class=\"nowrape bolo600\">
                                                                                                        <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">{{ bon.numbon }}</a>
                                                                                                    </td>
                                                                                                    <td class=\"nowrape bolo600\">{% if bon.devis is not null %}
                                                                                                            <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                                               style=\"color:dodgerblue\">{{ bon.devis.iddevis }}</a>
                                                                                                        {% endif %}</td>
                                                                                                    <td class=\"text-right nowrape \">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                                    <td class=\"text-right nowrape\">{{ bon.recu|number_format(2, ',', ' ') }}</td>
                                                                                                    <td class=\"text-right nowrape\">{{ bon.reste|number_format(2, ',', ' ') }}</td>
                                                                                                    <td class=\"col-deep-orange\"
                                                                                                        title=\"{{ bon.bonreference|striptags|raw }}\">
                                                                                                        {{ bon.bonreference|striptags|raw }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                            {% endif %}
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                {% endif %}
                                                                                {% set tobttc = tobttc + bttc %}
                                                                                {% set tofopercu = tofopercu + fopercu %}
                                                                                {% set toforeste = toforeste + foreste %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ tobttc|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ tofopercu|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ toforeste|number_format(2, ',', ' ') }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Paiement Prestataires
                                                                    validés</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>PRESTATAIRES<br>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>MONTANT</th>
                                                                        <th>DEVIS</th>
                                                                        <th>COMMANDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set topercu = 0 %}
                                                                    {% for four in fournisseurs %}
                                                                        {% if four.type == 3 %}
                                                                            {% if four.corbeille is null %}
                                                                                {% set percu = 0 %}
                                                                                {% set check = 0 %}
                                                                                {% for caisse in chantier.caisses %}
                                                                                    {% if caisse.etat == 'valide' and caisse.fournisseur == four %}
                                                                                        {% if caisse.corbeille is null and caisse.bon is not null %}
                                                                                            {% set check = check + 1 %}
                                                                                            {% set percu = caisse.montant + percu %}
                                                                                        {% endif %}
                                                                                    {% endif %}
                                                                                {% endfor %}
                                                                                {% if check != 0 %}
                                                                                    <tr class=\"bg-light\">
                                                                                        <td class=\"bolo700 nowrape\"
                                                                                            colspan=\"2\">{{ four.fournisseur|upper }}</td>
                                                                                        <td class=\"bolo700 nowrape text-right\">{{ percu|number_format(2,',',' ') }}</td>
                                                                                        <td class=\"bolo700 nowrape\"
                                                                                            colspan=\"3\"></td>
                                                                                    </tr>
                                                                                    {% for caisse in chantier.caisses %}
                                                                                        {% if caisse.etat == 'valide' and caisse.fournisseur == four %}
                                                                                            {% if caisse.corbeille is null and caisse.bon is not null %}
                                                                                                <tr>
                                                                                                    <td class=\"nowrape\">{{ caisse.date|date('Y.m.d') }}</td>
                                                                                                    <td class=\"nowrape bolo600\">
                                                                                                        <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\">
                                                                                                            {{ caisse.numcaisse }}{% if caisse.moyen is not null %}
                                                                                                                <span class=\"col-pink\">
                                                                                                                ({{ caisse.moyen }})</span>{% endif %}
                                                                                                        </a></td>
                                                                                                    <td class=\"text-right col-black bolo600\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                                                                    <td class=\"nowrape\"> {% if caisse.bon is not null %}{{ caisse.bon.devis.iddevis }} {% endif %}</td>
                                                                                                    <td class=\"nowrape\"> {% if caisse.bon is not null %}{{ caisse.bon.numbon }} {% endif %}</td>
                                                                                                    <td class=\"col-deep-orange\"
                                                                                                        title=\"{{ caisse.caissereference|striptags|raw }}\">{{ caisse.caissereference|striptags }}</td>
                                                                                                </tr>
                                                                                            {% endif %}
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                    {% set topercu = percu + topercu %}
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ topercu|number_format(2,',',' ') }}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px;color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:20px\">
                                                                    Bons de
                                                                    commande
                                                                    Prestataire non validés</h4>
                                                                <table class=\"table-striped table-bordered display nowrape\"
                                                                       style=\"width: 100%;font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>N° BON</th>
                                                                        <th>PRESTATAIRE</th>
                                                                        <th>N° DE DEVIS</th>
                                                                        <th>TOTAL HT</th>
                                                                        <th>TOTAL TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set tht = 0 %}
                                                                    {% set ttc = 0 %}
                                                                    {% for bon in chantier.bons %}
                                                                        {% if bon.fournisseur is not null and bon.fournisseur.corbeille is null %}
                                                                            {% if bon.etat == 'save' %}
                                                                                {% if bon.corbeille is null and bon.type == 'pst' %}
                                                                                    {% set tht = bon.totalht + tht %}
                                                                                    {% set ttc = bon.totalttc + ttc %}
                                                                                    <tr>
                                                                                        <td>{{ bon.date|date('Y.m.d') }}</td>
                                                                                        <td>
                                                                                            <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">{{ bon.numbon }}</a>
                                                                                        </td>
                                                                                        <td class=\"nowrape\">{{ bon.fournisseur.fournisseur|upper }}</td>
                                                                                        <td> {% if bon.devis is not null %}
                                                                                                <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                                   style=\"color:dodgerblue\">{{ bon.devis.iddevis }}</a>
                                                                                            {% endif %}</td>
                                                                                        <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                        <td class=\"col-deep-orange\"
                                                                                            title=\"{{ bon.bonreference|striptags|raw }}\">
                                                                                            {{ bon.bonreference|striptags|raw }}
                                                                                        </td>
                                                                                    </tr>
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ tht|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ ttc|number_format(2, ',', ' ') }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Décomptes validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>FACTURE</th>
                                                                        <th class=\"text-center nowrape\">DEVISTTC</th>
                                                                        <th class=\"text-center\">AVANCEMENT</th>
                                                                        <th class=\"text-center\">THT</th>
                                                                        <th class=\"text-center\">TTC</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set vdecth = 0 %}
                                                                    {% set vdecttc = 0 %}
                                                                    {% for decompte in chantier.decomptes %}
                                                                        {% if decompte.etat == 'valide' and decompte.corbeille is null %}
                                                                            {% set vdecth = decompte.apayer + vdecth %}
                                                                            {% set vdecttc = decompte.ttc + vdecttc %}
                                                                        {% endif %}
                                                                        {% if decompte.etat == 'valide' %}
                                                                            {% if decompte.corbeille is null %}
                                                                                <tr>
                                                                                    <td>{{ decompte.date|date('Y.m.d') }}</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"{{ path('editdecompte',{'id':decompte.id,'idchantier':decompte.chantier.id}) }}\"
                                                                                           style=\"color:dodgerblue\">{{ decompte.numdecompte }}
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"{{ path('editdevis',{'id':decompte.devis.id ,'idchantier':decompte.chantier.id}) }}\"
                                                                                           style=\"color:dodgerblue\">{{ decompte.devis.iddevis }}
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">{% if decompte.facture %}
                                                                                            <a href=\"{{ path('editfacture', {'id': decompte.facture.id,'idchantier':decompte.chantier.id}) }}\"
                                                                                               class=\"col-blue\">{{ decompte.facture.numfacture }}</a>
                                                                                        {% endif %}
                                                                                    </td>
                                                                                    {% if decompte.devis.ptva == 'non' %}
                                                                                        <td class=\"text-right nowrape\">{{ decompte.totalht|number_format(2,',',' ') }}</td>
                                                                                    {% else %}
                                                                                        <td class=\"text-right nowrape\">{{ (decompte.totalht + ((decompte.totalht * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                                                    {% endif %}
                                                                                    <td class=\"text-center col-pink bolo700\">{{ decompte.avancement|number_format(2,',',' ') }}
                                                                                        %
                                                                                    </td>
                                                                                    <td class=\"text-right nowrape\">{{ decompte.apayer|number_format(2,',',' ') }}</td>
                                                                                    <td class=\"text-right nowrape\">{{ decompte.ttc|number_format(2,',',' ') }}</td>
                                                                                </tr>
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ vdecth|number_format(2,',',' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ vdecttc|number_format(2,',',' ') }}</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Décomptes non validés</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th>DATE</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>FACTURE</th>
                                                                        <th class=\"text-center nowrape\">DEVIS TTC</th>
                                                                        <th class=\"text-center\">AVANCEMENT</th>
                                                                        <th class=\"text-center\">THT</th>
                                                                        <th class=\"text-center\">TTC</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set ndecth = 0 %}
                                                                    {% set ndecttc = 0 %}
                                                                    {% for decompte in chantier.decomptes %}
                                                                        {% if decompte.etat == 'save' and decompte.corbeille is null %}
                                                                            {% set ndecth = decompte.apayer + ndecth %}
                                                                            {% set ndecttc = decompte.ttc + ndecttc %}
                                                                        {% endif %}
                                                                        {% if decompte.etat == 'save' %}
                                                                            {% if decompte.corbeille is null %}
                                                                                <tr>
                                                                                    <td>{{ decompte.date|date('Y.m.d') }}</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"{{ path('editdecompte',{'id':decompte.id,'idchantier':decompte.chantier.id}) }}\"
                                                                                           style=\"color:dodgerblue\">{{ decompte.numdecompte }}
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"{{ path('editdevis',{'id':decompte.devis.id ,'idchantier':decompte.chantier.id}) }}\"
                                                                                           style=\"color:dodgerblue\">{{ decompte.devis.iddevis }}
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">{% if decompte.facture %}
                                                                                            <a href=\"{{ path('editfacture', {'id': decompte.facture.id,'idchantier':decompte.chantier.id}) }}\"
                                                                                               class=\"col-blue\">{{ decompte.facture.numfacture }}</a>
                                                                                        {% endif %}
                                                                                    </td>
                                                                                    {% if decompte.devis.ptva == 'non' %}
                                                                                        <td class=\"text-right nowrape\">{{ decompte.totalht|number_format(2,',',' ') }}</td>
                                                                                    {% else %}
                                                                                        <td class=\"text-right nowrape\">{{ (decompte.totalht + ((decompte.totalht * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                                                    {% endif %}
                                                                                    <td class=\"text-center col-pink bolo700\">{{ decompte.avancement|number_format(2,',',' ') }}
                                                                                        %
                                                                                    </td>
                                                                                    <td class=\"text-right nowrape\">{{ decompte.apayer|number_format(2,',',' ') }}</td>
                                                                                    <td class=\"text-right nowrape\">{{ decompte.ttc|number_format(2,',',' ') }}</td>
                                                                                </tr>
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center bolderr\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ ndecth|number_format(2,',',' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ ndecttc|number_format(2,',',' ') }}</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Facture validées</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>FACTURE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set vfacth = 0 %}
                                                                    {% set vfacttc = 0 %}
                                                                    {% for facture in chantier.factures %}
                                                                        {% if facture.etat == 'valide' and facture.corbeille is null %}
                                                                            {% set vfacth = facture.totalht + vfacth %}
                                                                            {% set vfacttc = facture.totalttc + vfacttc %}
                                                                        {% endif %}
                                                                        {% if facture.etat == 'valide' and facture.corbeille is null %}
                                                                            <tr>
                                                                                <td>{{ facture.date|date('Y.m.d') }}</td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    <a href=\"{{ path('editfacture', {'id': facture.id,'idchantier':facture.chantier.id}) }}\">
                                                                                        {{ facture.numfacture }}
                                                                                    </a>
                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    {% if facture.type == \"simple\" %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"devis\" %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"decompte\" %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.decompte.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.decompte.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"acompte\" and facture.acompte is not null %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.acompte.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.acompte.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"retenue\" and facture.acompte is not null %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.acompte.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.acompte.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    {% if facture.decompte is not null %}
                                                                                        <a href=\"{{ path('editdecompte', {'id': facture.decompte.id, 'idchantier':facture.chantier.id }) }}\">N° {{ facture.decompte.numdecompte }}</a>
                                                                                    {% endif %}
                                                                                </td>
                                                                                <td class=\"text-right nowrape\">{{ facture.totalht|number_format(2, ',', ' ') }}</td>
                                                                                <td class=\"text-right nowrape\">{{ facture.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                <td class=\"col-deep-orange\"
                                                                                    title=\"{{ facture.factreference|striptags|raw }}\">{{ facture.factreference|striptags|raw }}</td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ vfacth|number_format(2, ',', ' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ vfacttc|number_format(2, ',', ' ') }}</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Facture non validées</h4>
                                                                <table class=\"table-striped table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>FACTURE</th>
                                                                        <th>DEVIS</th>
                                                                        <th>DÉCOMPTE</th>
                                                                        <th>THT</th>
                                                                        <th>TTC</th>
                                                                        <th>RÉGLÉ</th>
                                                                        <th>SOLDE</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set nfacth = 0 %}
                                                                    {% set nfacttc = 0 %}
                                                                    {% for facture in chantier.factures %}
                                                                        {% if facture.etat == 'save' and facture.corbeille is null %}
                                                                            {% set nfacth = facture.totalht + vfacth %}
                                                                            {% set nfacttc = facture.totalttc + vfacttc %}
                                                                        {% endif %}
                                                                        {% if facture.etat == 'save' and facture.corbeille is null %}
                                                                            <tr>
                                                                                <td class=\"nowrape\">{{ facture.date|date('Y.m.d') }}</td>
                                                                                <td class=\"nowrape bolo600\"><a
                                                                                            href=\"{{ path('editfacture', {'id': facture.id,'idchantier':facture.chantier.id}) }}\">{{ facture.numfacture }}</a>
                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    {% if facture.type == \"simple\" %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"devis\" %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"decompte\" %}
                                                                                        <a href=\"{{ path('editdevis', {'id': facture.decompte.devis.id,'idchantier':facture.chantier.id}) }}\">{{ facture.decompte.devis.iddevis }}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"acompte\" and facture.acompte is not null %}
                                                                                        <a href=\" {% if facture.acompte.devis is not null %}{{ path('editdevis', {'id': facture.acompte.devis.id,'idchantier':facture.chantier.id}) }}{% endif %}\">{% if facture.acompte.devis is not null %}{{ facture.acompte.devis.iddevis }}{% endif %}</a>
                                                                                    {% endif %}
                                                                                    {% if facture.type == \"retenue\" and facture.acompte is not null %}
                                                                                        <a href=\" {% if facture.acompte.devis is not null %}{{ path('editdevis', {'id': facture.acompte.devis.id,'idchantier':facture.chantier.id}) }}{% endif %}\">{% if facture.acompte.devis is not null %}{{ facture.acompte.devis.iddevis }}{% endif %}</a>
                                                                                    {% endif %}
                                                                                </td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    {% if facture.decompte is not null %}
                                                                                        <a href=\"{{ path('editdecompte', {'id': facture.decompte.id,'idchantier':facture.chantier.id}) }}\">{{ facture.decompte.numdecompte }}</a>
                                                                                    {% endif %}
                                                                                </td>
                                                                                <td class=\"text-right nowrape\">{{ facture.totalht|number_format(2, ',', ' ') }}</td>
                                                                                <td class=\"text-right nowrape\">{{ facture.totalttc|number_format(2, ',', ' ') }}</td>
                                                                                <td class=\"text-right nowrape\">{{ regler|number_format(2, ',', ' ') }}</td>
                                                                                <td class=\"text-right nowrape\">{{ (facture.totalttc - regler)|number_format(2, ',', ' ') }}</td>
                                                                                <td class=\"col-deep-orange\"
                                                                                    title=\"{{ facture.factreference|striptags|raw }}\">{{ facture.factreference|striptags|raw }}</td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr class=\"text-center\">
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ nfacth|number_format(2, ',', ' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ nfacttc|number_format(2, ',', ' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ regler|number_format(2, ',', ' ') }}</th>
                                                                        <th class=\"text-right bg-blue col-white nowrape\">{{ (nfacttc - regler)|number_format(2, ',', ' ') }}</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Dépenses internes
                                                                    validées</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>DEVIS</th>
                                                                        <th>MONTANT</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set vcth = 0 %}
                                                                    {% for caisse in chantier.caisses %}
                                                                        {% if caisse.etat == 'valide' %}
                                                                            {% if caisse.corbeille is null and caisse.type == 3 %}
                                                                                {% set vcth = caisse.montant + vcth %}
                                                                                <tr>
                                                                                    <td class=\"nowrape\">{{ caisse.date|date('Y.m.d') }}</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\">
                                                                                            {{ caisse.numcaisse }}{% if caisse.moyen is not null %}
                                                                                                {{ caisse.numcaisse }}
                                                                                                <span class=\"col-pink\">
                                                                                                ({{ caisse.moyen }})</span>{% endif %}
                                                                                        </a></td>
                                                                                    <td class=\"nowrape bolo600\">{% if caisse.devis is not null %}
                                                                                        <a href=\"{{ path('editdevis',{'id':caisse.devis.id, 'idchantier':caisse.devis.chantier.id}) }}\">{{ caisse.devis.iddevis }} {% endif %}</a>
                                                                                    </td>
                                                                                    <td class=\"text-right nowrape\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                                                    <td class=\"col-deep-orange\"
                                                                                        title=\"{{ caisse.caissereference|striptags|raw }}\">{{ caisse.caissereference|striptags }}</td>
                                                                                </tr>
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}

                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ vcth|number_format(2,',',' ') }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h4 class=\"col-blue bolo600\" style=\"margin-top:30px\">
                                                                    Dépenses internes non validées</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size: 11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>DATE</th>
                                                                        <th>BON</th>
                                                                        <th>EVIS</th>
                                                                        <th>MONTANT</th>
                                                                        <th>RÉFÉRENCE</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% set ncth = 0 %}
                                                                    {% for caisse in chantier.caisses %}
                                                                        {% if caisse.etat == 'save' %}
                                                                            {% if caisse.corbeille is null and caisse.type == 3 %}
                                                                                {% set ncth = caisse.montant + ncth %}
                                                                                <tr>
                                                                                    <td class=\"nowrape\">{{ caisse.date|date('Y.m.d') }}</td>
                                                                                    <td class=\"nowrape bolo600\">
                                                                                        <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\"
                                                                                                {{ caisse.numcaisse }}>{{ caisse.numcaisse }}{% if caisse.moyen is not null %}
                                                                                                <span class=\"col-pink\">
                                                                                                ({{ caisse.moyen }})</span>{% endif %}
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class=\"nowrape\">{% if caisse.devis is not null %}
                                                                                        <a href=\"{{ path('editdevis',{'id':caisse.devis.id, 'idchantier':caisse.devis.chantier.id}) }}\">{{ caisse.devis.iddevis }} {% endif %}</a>
                                                                                    </td>

                                                                                    <td class=\"text-right nowrape\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                                                    <td class=\"col-deep-orange\"
                                                                                        title=\"{{ caisse.caissereference|striptags|raw }}\">
                                                                                        {{ caisse.caissereference|striptags|capitalize }}
                                                                                    </td>
                                                                                </tr>
                                                                            {% endif %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class=\"text-right bg-blue bolo700 col-white nowrape\">{{ ncth|number_format(2,',',' ') }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"card table-responsive shadow bg-white\"
                                                             style=\"padding: 10px 20px 20px 20px; color:#555; overflow: scroll; margin-bottom: 20px; border:1px solid #2196F3\">
                                                            <div class=\"body\" style=\"padding: 5px !important;\">
                                                                <h4 class=\"col-blue bolo600\">Gestion des stocks</h4>
                                                                <table class=\"table-bordered display\"
                                                                       style=\"width: 100%; font-size:11px\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>ARTICLES</th>
                                                                        <th class=\"text-center\">QTÉ</th>
                                                                        <th>PU</th>
                                                                        <th class=\"text-center\">MHT
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    {% set last = \"a\" %}
                                                                    {% for ligne in invente %}
                                                                        {% if ligne.bon %}
                                                                            {% if ligne.bon.etat == 'valide' %}
                                                                                {% if ligne.bon.type == 'oui' or ligne.bon.type == \"non\" %}
                                                                                    {% set qte = 0 %}

                                                                                        {% for lign in invente %}
                                                                                            {% if lign.bon %}
                                                                                                {% if lign.bon.etat == 'valide' %}
                                                                                                    {% if lign.bon.type == 'oui' or lign.bon.type == \"non\" %}
                                                                                                        {% if  ligne.designation == lign.designation %}
                                                                                                           {% set qte = qte + lign.quantite %}
                                                                                                        {% endif %}
                                                                                                    {% endif %}
                                                                                                {% endif %}
                                                                                            {% endif %}
                                                                                        {% endfor %}

                                                                                    {% if  ligne.designation != last %}

                                                                                        <tr class=\"bg-light\">
                                                                                            <td class=\"bolo600\"
                                                                                                style=\"padding: 2px !important;\">{{ ligne.designation|upper|striptags|raw|replace({'&NBSP;': \"\",}) }}</td>
                                                                                            <td class=\"bolo600 col-pink\"
                                                                                                style=\"padding: 2px !important; text-align: right\">{{ qte|number_format(2, ',', ' ') }}</td>
                                                                                            <td class=\"bolo600\"
                                                                                                style=\"padding: 2px !important; text-align: right\"></td>
                                                                                            <td style=\"padding: 2px !important; text-align: right\"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class=\"bolo600\">
                                                                                                <a href=\"{{ path('editbon', {'id': ligne.bon.id,  'idchantier': ligne.bon.chantier.id}) }}\"
                                                                                                   class=\"col-blue\">{{ ligne.bon.numbon }}</a>
                                                                                            </td>
                                                                                            {% if ligne.bon.type == 'oui' %}
                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">{{ ligne.quantite|number_format(2, ',', ' ') }}</td>
                                                                                            {% endif %}
                                                                                            {% if ligne.bon.type == 'non' %}
                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">
                                                                                                    -{{ ligne.quantite|number_format(2, ',', ' ') }}</td>
                                                                                            {% endif %}
                                                                                            <td class=\"boo600\"
                                                                                                style=\"padding: 2px !important; text-align: right\">{{ ligne.pu|number_format(2, ',', ' ') }}</td>
                                                                                            <td style=\"padding: 2px !important; text-align: right\">{{ (ligne.quantite  * ligne.pu)|number_format(2, ',', ' ') }}</td>
                                                                                        </tr>

                                                                                    {% else %}
                                                                                        <tr>
                                                                                            <td class=\"bolo600\">
                                                                                                <a href=\"{{ path('editbon', {'id': ligne.bon.id,  'idchantier': ligne.bon.chantier.id}) }}\"
                                                                                                   class=\"col-blue\">{{ ligne.bon.numbon }}</a>
                                                                                            </td>
                                                                                            {% if ligne.bon.type == 'oui' %}
                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">{{ ligne.quantite|number_format(2, ',', ' ') }}</td>
                                                                                            {% endif %}
                                                                                            {% if ligne.bon.type == 'non' %}
                                                                                                <td class=\"bolo600\"
                                                                                                    style=\"padding: 2px !important; text-align: right\">
                                                                                                    -{{ ligne.quantite|number_format(2, ',', ' ') }}</td>
                                                                                            {% endif %}
                                                                                            <td class=\"boo600\"
                                                                                                style=\"padding: 2px !important; text-align: right\">{{ ligne.pu|number_format(2, ',', ' ') }}</td>
                                                                                            <td style=\"padding: 2px !important; text-align: right\">{{ (ligne.quantite  * ligne.pu)|number_format(2, ',', ' ') }}</td>
                                                                                        </tr>
                                                                                    {% endif %}
                                                                                    {% set last = ligne.designation %}
                                                                                {% endif %}
                                                                            {% endif %}
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
                                    </section>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'rapportchantier');
    </script>
{% endblock %}
", "content/rapportchantier.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\rapportchantier.html.twig");
    }
}
