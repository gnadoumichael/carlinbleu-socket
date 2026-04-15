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

/* content/moncompte.html.twig */
class __TwigTemplate_a05b97ae1c50cbf92a17d4cb8800f541 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/moncompte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/moncompte.html.twig"));

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
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-pri\">MON COMPTE</h5>
                    <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px\">
                    <table cellpadding=\"3\" cellspacing=\"0\" class=\"table-striped\">
                        <tr>
                            <td class=\"text-pri\">Administrateur</td>
                            <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "
                                ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "prenoms", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Entreprise</td>
                            <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "societe", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Localisation</td>
                            <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Contact</td>
                            <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "contact", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">E-mail</td>
                            <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Pays</td>
                            <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "pays", [], "any", false, false, false, 37), "nation", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Compte contribuable</td>
                            <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "contri", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                        </tr>
                    </table>
                </div>
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-danger\">MODIFIER MON COMPTE</h5>
                    <hr class=\"bg-danger\" style=\"width: 100%; margin-top: -5px;\">
                    ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "_token", [], "any", false, false, false, 49), 'row');
        yield "
                    <table width=\"100%\">
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Nom<br>
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'errors');
        yield "
                            </td>
                            <td class=\"text-pri bolderr\">&raquo; Prénoms<br>
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prenoms", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prenoms", [], "any", false, false, false, 58), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\" colspan=\"2\">&raquo; Entreprise<br>
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "societe", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "societe", [], "any", false, false, false, 64), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Contact<br>
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "contact", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "contact", [], "any", false, false, false, 70), 'errors');
        yield "
                            </td>
                            <td class=\"text-pri bolderr\">&raquo; Pays<br>
                                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "pays", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "pays", [], "any", false, false, false, 74), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; E-Mail<br>
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "username", [], "any", false, false, false, 80), 'errors');
        yield "
                            </td>
                            <td class=\"text-pri bolderr\">&raquo; Compte contribuable<br>
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "contri", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "contri", [], "any", false, false, false, 84), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\" colspan=\"2\">&raquo; Localisation<br>
                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "adresse", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "adresse", [], "any", false, false, false, 90), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-top: 10px; text-align: left\">
                                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "saveuser", [], "any", false, false, false, 95), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-danger"]]);
        // line 98
        yield "
                            </td>
                        </tr>
                    </table>
                    ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        yield "
                </div>


            </div>
            <div class=\"col-md-4\">
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-pri\">DOMAINES D'ACTIVITÉS</h5>
                    <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px\">
                    <table class=\"table-striped\" style=\"width: 100%\">
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["domaines"]) || array_key_exists("domaines", $context) ? $context["domaines"] : (function () { throw new RuntimeError('Variable "domaines" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 113
            yield "                            <tr>
                                <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "metier", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                                ";
            // line 115
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "info", [], "any", false, false, false, 115) == "non")) {
                // line 116
                yield "                                    <td><input type=\"checkbox\" data-toggle=\"toggle\" onclick=\"buble(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 116), "html", null, true);
                yield ");\"
                                               id=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 117), "html", null, true);
                yield "\"></td>
                                ";
            } else {
                // line 119
                yield "                                    <td><input type=\"checkbox\" checked data-toggle=\"toggle\"
                                               onclick=\"buble(";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 120), "html", null, true);
                yield ");\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 120), "html", null, true);
                yield "\"></td>
                                ";
            }
            // line 122
            yield "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domaine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "                    </table>
                </div>
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-pri\">MODIFIER MON MOT DE PASSE</h5>
                    <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "flashes", ["errpasse"], "method", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 130
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 134, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 135, $this->source); })()), "_token", [], "any", false, false, false, 135), 'row');
        yield "
                    <table width=\"100%\">
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Ancien mot de passe<br>
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 139, $this->source); })()), "oldpasse", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 140, $this->source); })()), "oldpasse", [], "any", false, false, false, 140), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Nouveau mot de passe<br>
                                ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 145, $this->source); })()), "password", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 146, $this->source); })()), "password", [], "any", false, false, false, 146), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Confirmer mot de passe<br>
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 151, $this->source); })()), "confirm_passe", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 152, $this->source); })()), "confirm_passe", [], "any", false, false, false, 152), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-top: 10px; text-align: left\">
                                ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 157, $this->source); })()), "savepasse", [], "any", false, false, false, 157), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-primary"]]);
        // line 160
        yield "
                            </td>
                        </tr>
                    </table>
                    ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 164, $this->source); })()), 'form_end');
        yield "
                </div>


            </div>
            <div class=\"col-md-4\">
                ";
        // line 170
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "compte", [], "any", false, false, false, 170) == null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "version", [], "any", false, false, false, 170) == "2"))) {
            // line 171
            yield "                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"text-pri\">AJOUTER UN SOUS-COMPTE</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                        ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "flashes", ["errcomte"], "method", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 175
                yield "                            <div class=\"alert alert-danger\">
                                ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "
                        ";
            // line 180
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 180, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
            yield "
                        ";
            // line 181
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 181, $this->source); })()), "_token", [], "any", false, false, false, 181), 'row');
            yield "
                        <table width=\"100%\">
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Nom<br>
                                    ";
            // line 185
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 185, $this->source); })()), "nom", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control "]]);
            yield "
                                    ";
            // line 186
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 186, $this->source); })()), "nom", [], "any", false, false, false, 186), 'errors');
            yield "
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Prénoms<br>
                                    ";
            // line 189
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 189, $this->source); })()), "prenoms", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control "]]);
            yield "
                                    ";
            // line 190
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 190, $this->source); })()), "prenoms", [], "any", false, false, false, 190), 'errors');
            yield "
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Société<br>
                                    ";
            // line 195
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 195, $this->source); })()), "societe", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Société"]]);
            yield "
                                    ";
            // line 196
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 196, $this->source); })()), "societe", [], "any", false, false, false, 196), 'errors');
            yield "
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Pays<br>
                                    ";
            // line 199
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 199, $this->source); })()), "pays", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Pays"]]);
            yield "
                                    ";
            // line 200
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 200, $this->source); })()), "pays", [], "any", false, false, false, 200), 'errors');
            yield "
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Email<br>
                                    ";
            // line 205
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 205, $this->source); })()), "username", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-control form-control-email", "placeholder" => "Email", "autocomplete" => "disable"]]);
            yield "
                                    ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 206, $this->source); })()), "username", [], "any", false, false, false, 206), 'errors');
            yield "
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Contact<br>
                                    ";
            // line 209
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 209, $this->source); })()), "contact", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Contact"]]);
            yield "
                                    ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 210, $this->source); })()), "contact", [], "any", false, false, false, 210), 'errors');
            yield "
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Mot de passe<br>
                                    ";
            // line 215
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 215, $this->source); })()), "password", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Mot de passe"]]);
            yield "
                                    ";
            // line 216
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 216, $this->source); })()), "password", [], "any", false, false, false, 216), 'errors');
            yield "
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Confirmer<br>
                                    ";
            // line 219
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 219, $this->source); })()), "confirm_passe", [], "any", false, false, false, 219), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "confirmer le mot de passe"]]);
            yield "
                                    ";
            // line 220
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 220, $this->source); })()), "confirm_passe", [], "any", false, false, false, 220), 'errors');
            yield "
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\" colspan=\"2\">
                                    <hr class=\"bg-pri\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-dangerr bolderr\">
                                    <b class=\"text-dangerr\">* ATTRIBUEZ UN TYPE DE COMPTE</b><br><span
                                            class=\"text-pri\">
                                ";
            // line 232
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 232, $this->source); })()), "droits", [], "any", false, false, false, 232), 'widget');
            yield "
                                        ";
            // line 233
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 233, $this->source); })()), "droits", [], "any", false, false, false, 233), 'errors');
            yield "</span>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\" colspan=\"2\">
                                    <hr class=\"bg-pri\">
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding-top: 10px; text-align: left\">
                                    ";
            // line 243
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 243, $this->source); })()), "savecompte", [], "any", false, false, false, 243), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-primary"]]);
            // line 246
            yield "
                                </td>
                            </tr>
                        </table>
                        ";
            // line 250
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 250, $this->source); })()), 'form_end');
            yield "
                    </div>
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"text-pri\">SOUS-COMPTES</h5>
                        <table class=\"table-bordered\"
                               style=\"padding: 0; width: 100%\">
                            <thead>
                            <th class=\"p-2\">SOUS-COMPTES / RESTRICTIONS</th>
                            <th style=\"width: 60px !important;\"></th>
                            <th style=\"width: 60px !important;\"></th>
                            </thead>
                            <tbody>
                            ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 262, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
                // line 263
                yield "                                <tr>
                                    <td class=\"text-pri bg-gray-300\"><b>";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "nom", [], "any", false, false, false, 264), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "prenoms", [], "any", false, false, false, 264), "html", null, true);
                yield "</b></td>
                                    <td class=\"text-center\"><a href=\"";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editsouscompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 265)]), "html", null, true);
                yield "\"><i class=\"fa fa fa-edit text-success\"></i></a></td>
                                    <td class=\"text-center\"><a href=\"#\" onclick=\"delcompte(";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 266), "html", null, true);
                yield ");\"><i class=\"fa fa-trash text-del\"></i></a></td>

                                </tr>
                                ";
                // line 269
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "droits", [], "any", false, false, false, 269));
                foreach ($context['_seq'] as $context["_key"] => $context["droit"]) {
                    // line 270
                    yield "                                    <tr>
                                        <td class=\"bolderrer\" style=\"padding-left: 20px\">++ ";
                    // line 271
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["droit"], "droit", [], "any", false, false, false, 271)), "html", null, true);
                    yield "</td>
                                        <td class=\"text-center\"></td>
                                        <td class=\"text-center\"></td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['droit'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['compte'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 281
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281), "pub", [], "any", false, false, false, 281) == "oui")) {
            // line 282
            yield "                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <div class=\"card-body\">
                        <h5 class=\"text-pri\">PHOTOS SHOWROOM</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"carouselExampleIndicators\">
                            <ol class=\"carousel-indicators\">
                                <li class=\"active\" data-slide-to=\"0\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"1\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"2\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"3\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"4\" data-target=\"#carouselExampleIndicators\"></li>
                            </ol>
                            <div class=\"carousel-inner\">

                                ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 296, $this->source); })()), "galeries", [], "any", false, false, false, 296));
            foreach ($context['_seq'] as $context["_key"] => $context["gale"]) {
                // line 297
                yield "
                                    ";
                // line 298
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "info", [], "any", false, false, false, 298) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 298) != 0))) {
                    // line 299
                    yield "                                        <div class=\"carousel-item ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 299) == 1)) {
                        yield "active";
                    }
                    yield " \">
                                            <img class=\"d-block w-100\" src=\"";
                    // line 300
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("gallery/" . CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "link", [], "any", false, false, false, 300))), "html", null, true);
                    yield "\"
                                                 style=\"width:100%;\">
                                        </div>
                                    ";
                } else {
                    // line 304
                    yield "                                        <div class=\"carousel-item ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 304) == 1)) {
                        yield "active";
                    }
                    yield "\">
                                            <img class=\"d-block w-100\" src=\"";
                    // line 305
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/not.png"), "html", null, true);
                    yield "\"
                                                 style=\"width: 100%;\">
                                        </div>
                                    ";
                }
                // line 309
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['gale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "
                            </div>
                            <a class=\"carousel-control-prev\" data-slide=\"prev\" href=\"#carouselExampleIndicators\"
                               role=\"button\">
                                <span aria-hidden=\"true\" class=\"carousel-control-prev-icon\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" data-slide=\"next\" href=\"#carouselExampleIndicators\"
                               role=\"button\">
                                <span aria-hidden=\"true\" class=\"carousel-control-next-icon\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                        <br>
                        <h6>LOGO ET IMAGES DE LA GALERIE</h6>
                        <div style=\"width: 100%\" class=\"table-responsive\">

                            <table class=\"d table-bordered\" width=\"100%\" align=\"center\">
                                <tr>
                                    ";
            // line 329
            $context["k"] = 0;
            // line 330
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 330, $this->source); })()), "galeries", [], "any", false, false, false, 330));
            foreach ($context['_seq'] as $context["_key"] => $context["gale"]) {
                // line 331
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "info", [], "any", false, false, false, 331) == "oui")) {
                    // line 332
                    yield "                                        <td style=\"border: 1px solid grey; margin-right:2px;width: 82px; text-align: center\">
                                            <img src=\"";
                    // line 333
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("gallery/" . CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "link", [], "any", false, false, false, 333))), "html", null, true);
                    yield "\"
                                                 style=\"width: 78px; height:78px;margin-bottom: 3px; margin-right: 1px; float: left\">
                                            <a href=\"";
                    // line 335
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delpicture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "link", [], "any", false, false, false, 335), "iduser" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "user", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "position" => CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 335)]), "html", null, true);
                    yield "\"
                                               style=\"float: right; margin-top: 50px\"><img
                                                        src=\"";
                    // line 337
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/signaler.png"), "html", null, true);
                    yield "\" style=\"width: 25px; \">
                                            </a>
                                            ";
                    // line 339
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 339) == 0)) {
                        // line 340
                        yield "                                                <span class=\"text-pri bolderrer\">LOGO</span>
                                            ";
                    } else {
                        // line 342
                        yield "                                                <span class=\"text-dangerr bolderrer\">IMAGE ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 342), "html", null, true);
                        yield "</span>
                                            ";
                    }
                    // line 344
                    yield "                                        </td>
                                    ";
                } else {
                    // line 346
                    yield "                                        <td style=\"border: 1px solid grey; margin-right: 2px; width: 82px; text-align: center\">
                                            <img src=\"";
                    // line 347
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/not.png"), "html", null, true);
                    yield "\"
                                                 style=\"width: 78px; height: 80px;margin-bottom: 3px; margin-right: 1px; float: left\">
                                            ";
                    // line 349
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 349) == 0)) {
                        // line 350
                        yield "                                                <span class=\"text-pri bolderrer\">LOGO</span>
                                            ";
                    } else {
                        // line 352
                        yield "                                                <span class=\"text-dangerr bolderrer\">IMAGE ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 352), "html", null, true);
                        yield "</span>
                                            ";
                    }
                    // line 354
                    yield "                                        </td>
                                    ";
                }
                // line 356
                yield "                                    ";
                if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 356, $this->source); })()) == 2)) {
                    // line 357
                    yield "                                </tr>
                                <tr>
                                    ";
                }
                // line 360
                yield "                                    ";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 360, $this->source); })()) + 1);
                // line 361
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['gale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 362
            yield "                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                ";
        }
        // line 369
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
        return "content/moncompte.html.twig";
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
        return array (  821 => 369,  812 => 362,  806 => 361,  803 => 360,  798 => 357,  795 => 356,  791 => 354,  785 => 352,  781 => 350,  779 => 349,  774 => 347,  771 => 346,  767 => 344,  761 => 342,  757 => 340,  755 => 339,  750 => 337,  745 => 335,  740 => 333,  737 => 332,  734 => 331,  729 => 330,  727 => 329,  706 => 310,  700 => 309,  693 => 305,  686 => 304,  679 => 300,  672 => 299,  670 => 298,  667 => 297,  663 => 296,  647 => 282,  644 => 281,  638 => 277,  632 => 276,  621 => 271,  618 => 270,  614 => 269,  608 => 266,  604 => 265,  598 => 264,  595 => 263,  591 => 262,  576 => 250,  570 => 246,  568 => 243,  555 => 233,  551 => 232,  536 => 220,  532 => 219,  526 => 216,  522 => 215,  514 => 210,  510 => 209,  504 => 206,  500 => 205,  492 => 200,  488 => 199,  482 => 196,  478 => 195,  470 => 190,  466 => 189,  460 => 186,  456 => 185,  449 => 181,  445 => 180,  442 => 179,  433 => 176,  430 => 175,  426 => 174,  421 => 171,  419 => 170,  410 => 164,  404 => 160,  402 => 157,  394 => 152,  390 => 151,  382 => 146,  378 => 145,  370 => 140,  366 => 139,  359 => 135,  354 => 134,  345 => 131,  342 => 130,  338 => 129,  331 => 124,  324 => 122,  317 => 120,  314 => 119,  309 => 117,  304 => 116,  302 => 115,  298 => 114,  295 => 113,  291 => 112,  278 => 102,  272 => 98,  270 => 95,  262 => 90,  258 => 89,  250 => 84,  246 => 83,  240 => 80,  236 => 79,  228 => 74,  224 => 73,  218 => 70,  214 => 69,  206 => 64,  202 => 63,  194 => 58,  190 => 57,  184 => 54,  180 => 53,  173 => 49,  169 => 48,  159 => 41,  152 => 37,  145 => 33,  138 => 29,  131 => 25,  124 => 21,  117 => 17,  113 => 16,  102 => 7,  89 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-pri\">MON COMPTE</h5>
                    <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px\">
                    <table cellpadding=\"3\" cellspacing=\"0\" class=\"table-striped\">
                        <tr>
                            <td class=\"text-pri\">Administrateur</td>
                            <td>{{ user.nom }}
                                {{ user.prenoms }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Entreprise</td>
                            <td>{{ user.societe }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Localisation</td>
                            <td>{{ user.adresse }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Contact</td>
                            <td>{{ user.contact }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">E-mail</td>
                            <td>{{ user.username }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Pays</td>
                            <td>{{ user.pays.nation }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri\">Compte contribuable</td>
                            <td>{{ user.contri }}</td>
                        </tr>
                    </table>
                </div>
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-danger\">MODIFIER MON COMPTE</h5>
                    <hr class=\"bg-danger\" style=\"width: 100%; margin-top: -5px;\">
                    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                    {{ form_row(form._token) }}
                    <table width=\"100%\">
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Nom<br>
                                {{ form_widget(form.nom,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.nom) }}
                            </td>
                            <td class=\"text-pri bolderr\">&raquo; Prénoms<br>
                                {{ form_widget(form.prenoms,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.prenoms) }}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\" colspan=\"2\">&raquo; Entreprise<br>
                                {{ form_widget(form.societe,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.societe) }}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Contact<br>
                                {{ form_widget(form.contact,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.contact) }}
                            </td>
                            <td class=\"text-pri bolderr\">&raquo; Pays<br>
                                {{ form_widget(form.pays,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.pays) }}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; E-Mail<br>
                                {{ form_widget(form.username,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.username) }}
                            </td>
                            <td class=\"text-pri bolderr\">&raquo; Compte contribuable<br>
                                {{ form_widget(form.contri,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.contri) }}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\" colspan=\"2\">&raquo; Localisation<br>
                                {{ form_widget(form.adresse,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(form.adresse) }}
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-top: 10px; text-align: left\">
                                {{ form_widget(form.saveuser,{
                                    'label': 'Enregistrer',
                                    'attr':{'class':'btn btn-danger'}
                                }) }}
                            </td>
                        </tr>
                    </table>
                    {{ form_end(form) }}
                </div>


            </div>
            <div class=\"col-md-4\">
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-pri\">DOMAINES D'ACTIVITÉS</h5>
                    <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px\">
                    <table class=\"table-striped\" style=\"width: 100%\">
                        {% for domaine in domaines %}
                            <tr>
                                <td>{{ domaine.metier.nom }}</td>
                                {% if domaine.info == 'non' %}
                                    <td><input type=\"checkbox\" data-toggle=\"toggle\" onclick=\"buble({{ domaine.id }});\"
                                               id=\"{{ domaine.id }}\"></td>
                                {% else %}
                                    <td><input type=\"checkbox\" checked data-toggle=\"toggle\"
                                               onclick=\"buble({{ domaine.id }});\" id=\"{{ domaine.id }}\"></td>
                                {% endif %}
                            </tr>
                        {% endfor %}
                    </table>
                </div>
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <h5 class=\"text-pri\">MODIFIER MON MOT DE PASSE</h5>
                    <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                    {% for message in app.flashes('errpasse') %}
                        <div class=\"alert alert-danger\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    {{ form_start(forme,{'attr': {'novalidate': 'novalidate'}}) }}
                    {{ form_row(forme._token) }}
                    <table width=\"100%\">
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Ancien mot de passe<br>
                                {{ form_widget(forme.oldpasse,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(forme.oldpasse) }}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Nouveau mot de passe<br>
                                {{ form_widget(forme.password,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(forme.password) }}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Confirmer mot de passe<br>
                                {{ form_widget(forme.confirm_passe,{'attr':{'class':'form-control '}}) }}
                                {{ form_errors(forme.confirm_passe) }}
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-top: 10px; text-align: left\">
                                {{ form_widget(forme.savepasse,{
                                    'label': 'Enregistrer',
                                    'attr':{'class':'btn btn-primary'}
                                }) }}
                            </td>
                        </tr>
                    </table>
                    {{ form_end(forme) }}
                </div>


            </div>
            <div class=\"col-md-4\">
                {% if app.user.compte == null and app.user.version == \"2\" %}
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"text-pri\">AJOUTER UN SOUS-COMPTE</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                        {% for message in app.flashes('errcomte') %}
                            <div class=\"alert alert-danger\">
                                {{ message }}
                            </div>
                        {% endfor %}

                        {{ form_start(formcompte,{'attr': {'novalidate': 'novalidate','autocomplete':'off'}}) }}
                        {{ form_row(formcompte._token) }}
                        <table width=\"100%\">
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Nom<br>
                                    {{ form_widget(formcompte.nom,{'attr':{'class':'form-control '}}) }}
                                    {{ form_errors(formcompte.nom) }}
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Prénoms<br>
                                    {{ form_widget(formcompte.prenoms,{'attr':{'class':'form-control '}}) }}
                                    {{ form_errors(formcompte.prenoms) }}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Société<br>
                                    {{ form_widget(formcompte.societe,{'attr':{'class':'form-control form-control-user','placeholder':'Société'}}) }}
                                    {{ form_errors(formcompte.societe) }}
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Pays<br>
                                    {{ form_widget(formcompte.pays,{'attr':{'class':'form-control form-control-user','placeholder':'Pays'}}) }}
                                    {{ form_errors(formcompte.pays) }}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Email<br>
                                    {{ form_widget(formcompte.username,{'attr':{'class':'form-control form-control-email','placeholder':'Email','autocomplete':'disable'}}) }}
                                    {{ form_errors(formcompte.username) }}
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Contact<br>
                                    {{ form_widget(formcompte.contact,{'attr':{'class':'form-control form-control-user','placeholder':'Contact'}}) }}
                                    {{ form_errors(formcompte.contact) }}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">&raquo; Mot de passe<br>
                                    {{ form_widget(formcompte.password,{'attr':{'class':'form-control form-control-user','placeholder':'Mot de passe'}}) }}
                                    {{ form_errors(formcompte.password) }}
                                </td>
                                <td class=\"text-pri bolderr\">&raquo; Confirmer<br>
                                    {{ form_widget(formcompte.confirm_passe,{'attr':{'class':'form-control form-control-user','placeholder':'confirmer le mot de passe'}}) }}
                                    {{ form_errors(formcompte.confirm_passe) }}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\" colspan=\"2\">
                                    <hr class=\"bg-pri\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-dangerr bolderr\">
                                    <b class=\"text-dangerr\">* ATTRIBUEZ UN TYPE DE COMPTE</b><br><span
                                            class=\"text-pri\">
                                {{ form_widget(formcompte.droits) }}
                                        {{ form_errors(formcompte.droits) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\" colspan=\"2\">
                                    <hr class=\"bg-pri\">
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding-top: 10px; text-align: left\">
                                    {{ form_widget(formcompte.savecompte,{
                                        'label': 'Enregistrer',
                                        'attr':{'class':'btn btn-primary'}
                                    }) }}
                                </td>
                            </tr>
                        </table>
                        {{ form_end(formcompte) }}
                    </div>
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"text-pri\">SOUS-COMPTES</h5>
                        <table class=\"table-bordered\"
                               style=\"padding: 0; width: 100%\">
                            <thead>
                            <th class=\"p-2\">SOUS-COMPTES / RESTRICTIONS</th>
                            <th style=\"width: 60px !important;\"></th>
                            <th style=\"width: 60px !important;\"></th>
                            </thead>
                            <tbody>
                            {% for compte in comptes %}
                                <tr>
                                    <td class=\"text-pri bg-gray-300\"><b>{{ compte.nom }}&nbsp;{{ compte.prenoms }}</b></td>
                                    <td class=\"text-center\"><a href=\"{{ path('editsouscompte', {'id': compte.id}) }}\"><i class=\"fa fa fa-edit text-success\"></i></a></td>
                                    <td class=\"text-center\"><a href=\"#\" onclick=\"delcompte({{ compte.id }});\"><i class=\"fa fa-trash text-del\"></i></a></td>

                                </tr>
                                {% for droit in compte.droits %}
                                    <tr>
                                        <td class=\"bolderrer\" style=\"padding-left: 20px\">++ {{ droit.droit|capitalize }}</td>
                                        <td class=\"text-center\"></td>
                                        <td class=\"text-center\"></td>
                                    </tr>
                                {% endfor %}
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
                {% if app.user.pub == 'oui' %}
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <div class=\"card-body\">
                        <h5 class=\"text-pri\">PHOTOS SHOWROOM</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"carouselExampleIndicators\">
                            <ol class=\"carousel-indicators\">
                                <li class=\"active\" data-slide-to=\"0\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"1\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"2\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"3\" data-target=\"#carouselExampleIndicators\"></li>
                                <li data-slide-to=\"4\" data-target=\"#carouselExampleIndicators\"></li>
                            </ol>
                            <div class=\"carousel-inner\">

                                {% for gale in user.galeries %}

                                    {% if gale.info == 'oui' and gale.position != 0 %}
                                        <div class=\"carousel-item {% if gale.position == 1 %}active{% endif %} \">
                                            <img class=\"d-block w-100\" src=\"{{ asset('gallery/'~gale.link ) }}\"
                                                 style=\"width:100%;\">
                                        </div>
                                    {% else %}
                                        <div class=\"carousel-item {% if gale.position == 1 %}active{% endif %}\">
                                            <img class=\"d-block w-100\" src=\"{{ asset('gallery/not.png' ) }}\"
                                                 style=\"width: 100%;\">
                                        </div>
                                    {% endif %}
                                {% endfor %}

                            </div>
                            <a class=\"carousel-control-prev\" data-slide=\"prev\" href=\"#carouselExampleIndicators\"
                               role=\"button\">
                                <span aria-hidden=\"true\" class=\"carousel-control-prev-icon\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" data-slide=\"next\" href=\"#carouselExampleIndicators\"
                               role=\"button\">
                                <span aria-hidden=\"true\" class=\"carousel-control-next-icon\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                        <br>
                        <h6>LOGO ET IMAGES DE LA GALERIE</h6>
                        <div style=\"width: 100%\" class=\"table-responsive\">

                            <table class=\"d table-bordered\" width=\"100%\" align=\"center\">
                                <tr>
                                    {% set k = 0 %}
                                    {% for gale in user.galeries %}
                                    {% if gale.info == 'oui' %}
                                        <td style=\"border: 1px solid grey; margin-right:2px;width: 82px; text-align: center\">
                                            <img src=\"{{ asset('gallery/'~gale.link ) }}\"
                                                 style=\"width: 78px; height:78px;margin-bottom: 3px; margin-right: 1px; float: left\">
                                            <a href=\"{{ path('delpicture',{'id':gale.link,'iduser':gale.user.id, 'position':gale.position}) }}\"
                                               style=\"float: right; margin-top: 50px\"><img
                                                        src=\"{{ asset('img/signaler.png') }}\" style=\"width: 25px; \">
                                            </a>
                                            {% if gale.position == 0 %}
                                                <span class=\"text-pri bolderrer\">LOGO</span>
                                            {% else %}
                                                <span class=\"text-dangerr bolderrer\">IMAGE {{ gale.position }}</span>
                                            {% endif %}
                                        </td>
                                    {% else %}
                                        <td style=\"border: 1px solid grey; margin-right: 2px; width: 82px; text-align: center\">
                                            <img src=\"{{ asset('gallery/not.png') }}\"
                                                 style=\"width: 78px; height: 80px;margin-bottom: 3px; margin-right: 1px; float: left\">
                                            {% if gale.position == 0 %}
                                                <span class=\"text-pri bolderrer\">LOGO</span>
                                            {% else %}
                                                <span class=\"text-dangerr bolderrer\">IMAGE {{ gale.position }}</span>
                                            {% endif %}
                                        </td>
                                    {% endif %}
                                    {% if k == 2 %}
                                </tr>
                                <tr>
                                    {% endif %}
                                    {% set k = k + 1 %}
                                    {% endfor %}
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "content/moncompte.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\moncompte.html.twig");
    }
}
