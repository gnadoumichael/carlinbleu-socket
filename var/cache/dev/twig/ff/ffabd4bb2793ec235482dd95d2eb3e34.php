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

/* content/projetarchive.html.twig */
class __TwigTemplate_0a67edac540dee70755502fa593dd505 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/projetarchive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/projetarchive.html.twig"));

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
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-3\">
                <div id=\"accordion\">
                    ";
        // line 11
        yield "                    <div class=\"card shadow mb-4\" id=\"client\">
                        <div id=\"headingDe\">
                            ";
        // line 13
        if ((($tmp = (isset($context["editClient"]) || array_key_exists("editClient", $context) ? $context["editClient"] : (function () { throw new RuntimeError('Variable "editClient" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left text-white bg-danger bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapseDe\"
                                       aria-expanded=\"false\" aria-controls=\"collapseDe\" style=\"width: 100%;\">
                                        1- MODIFIER UN CLIENT
                                    </a>
                                </h5>
                            ";
        } else {
            // line 22
            yield "                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left text-white bg-pri bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapseDe\"
                                       aria-expanded=\"false\" aria-controls=\"collapseDe\" style=\"width: 100%;\">
                                        1- AJOUTER UN CLIENT
                                    </a>
                                </h5>
                            ";
        }
        // line 30
        yield "                        </div>
                        <div id=\"collapseDe\" class=\"collapse ";
        // line 31
        if ((($tmp = (isset($context["editClient"]) || array_key_exists("editClient", $context) ? $context["editClient"] : (function () { throw new RuntimeError('Variable "editClient" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "show";
        }
        yield " bg-light\"
                             aria-labelledby=\"headingDe\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 37, $this->source); })()), "_token", [], "any", false, false, false, 37), 'row');
        yield "
                                    <table style=\"width: 100%\">
                                        <tbody>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                                ";
        // line 43
        if ((($tmp = (isset($context["editClient"]) || array_key_exists("editClient", $context) ? $context["editClient"] : (function () { throw new RuntimeError('Variable "editClient" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 44, $this->source); })()), "client", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 46
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 46, $this->source); })()), "client", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 48
        yield "                                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 48, $this->source); })()), "client", [], "any", false, false, false, 48), 'errors');
        yield "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Code client<br>
                                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 54, $this->source); })()), "code", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 55, $this->source); })()), "code", [], "any", false, false, false, 55), 'errors');
        yield "
                                            </td>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Adresse<br>
                                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 59, $this->source); })()), "adresse", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 60, $this->source); })()), "adresse", [], "any", false, false, false, 60), 'errors');
        yield "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Contact<br>
                                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 66, $this->source); })()), "contact", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 67, $this->source); })()), "contact", [], "any", false, false, false, 67), 'errors');
        yield "
                                            </td>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Compte contribuable<br>
                                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 71, $this->source); })()), "compte", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 72, $this->source); })()), "compte", [], "any", false, false, false, 72), 'errors');
        yield "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"text-align: left;padding-top: 10px\">";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 76, $this->source); })()), "saveclient", [], "any", false, false, false, 76), 'widget', ["label" => "Enregistrer"]);
        yield "</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 80, $this->source); })()), 'form_end');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 86
        yield "


                    ";
        // line 90
        yield "                    <div class=\"card shadow mb-4\" id=\"chantier\">
                        <div id=\"headingPl\">
                            ";
        // line 92
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 92, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left bg-danger text-white bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapsePl\"
                                       aria-expanded=\"false\" aria-controls=\"collapsePl\" style=\"width: 100%;\">
                                        2- MODIFIER UN PROJET
                                    </a>
                                </h5>
                            ";
        } else {
            // line 101
            yield "                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left bg-pri text-white bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapsePl\"
                                       aria-expanded=\"false\" aria-controls=\"collapsePl\" style=\"width: 100%;\">
                                        2- CRÉER UN PROJET
                                    </a>
                                </h5>
                            ";
        }
        // line 109
        yield "                        </div>
                        <div id=\"collapsePl\" class=\"collapse ";
        // line 110
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "show";
        }
        yield " bg-light\"
                             aria-labelledby=\"headingPl\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 115, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 116, $this->source); })()), "_token", [], "any", false, false, false, 116), 'row');
        yield "
                                    <table style=\"width: 100%;text-align: left\">
                                        <tbody>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                                ";
        // line 122
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 123, $this->source); })()), "client", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 125
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 125, $this->source); })()), "client", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 127
        yield "
                                                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 128, $this->source); })()), "chantier", [], "any", false, false, false, 128), 'errors');
        yield "</td>
                                        </tr>
                                        <tr>

                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Nom du chantier <span class=\"text-dangerr\">*</span><br>
                                                ";
        // line 134
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 135, $this->source); })()), "chantier", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 137
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 137, $this->source); })()), "chantier", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 139
        yield "
                                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 140, $this->source); })()), "chantier", [], "any", false, false, false, 140), 'errors');
        yield "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Description<br>
                                                ";
        // line 145
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 146, $this->source); })()), "description", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 148
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 148, $this->source); })()), "description", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 150
        yield "
                                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), 'errors');
        yield "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Phase actuelle<br>
                                                ";
        // line 156
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 156, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 157, $this->source); })()), "phase", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 159
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 159, $this->source); })()), "phase", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 161
        yield "
                                                ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 162, $this->source); })()), "phase", [], "any", false, false, false, 162), 'errors');
        yield "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\">&raquo; Date de debut<br>
                                                ";
        // line 166
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 166, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 167
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 167, $this->source); })()), "ddebut", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 169
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 169, $this->source); })()), "ddebut", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 171
        yield "
                                                ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 172, $this->source); })()), "ddebut", [], "any", false, false, false, 172), 'errors');
        yield "</td>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Date de fin<br>
                                                ";
        // line 175
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 175, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 176, $this->source); })()), "dfin", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                                ";
        } else {
            // line 178
            yield "                                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 178, $this->source); })()), "dfin", [], "any", false, false, false, 178), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                                ";
        }
        // line 180
        yield "
                                                ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 181, $this->source); })()), "dfin", [], "any", false, false, false, 181), 'errors');
        yield "</td>
                                        </tr>
                                        <td align=\"left\"
                                            style=\"padding-top: 10px\">
                                            ";
        // line 185
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 185, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 186, $this->source); })()), "savechantier", [], "any", false, false, false, 186), 'widget', ["label" => "Modifier", "attr" => ["class" => "btn btn-danger"]]);
            // line 189
            yield "
                                            ";
        } else {
            // line 191
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 191, $this->source); })()), "savechantier", [], "any", false, false, false, 191), 'widget', ["label" => "Enregistrer"]);
            // line 193
            yield "
                                            ";
        }
        // line 195
        yield "                                        </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    ";
        // line 199
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 199, $this->source); })()), 'form_end');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 205
        yield "                </div>
            </div>
            <div class=\"col-xl-9 col-lg-9\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            ";
        // line 211
        $context["cout"] = 0;
        // line 212
        yield "                            ";
        $context["reglement"] = 0;
        // line 213
        yield "                            ";
        $context["depense"] = 0;
        // line 214
        yield "                            ";
        $context["p"] = 1;
        // line 215
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 216
            yield "                                ";
            $context["vp"] = 0;
            // line 217
            yield "                                ";
            $context["vr"] = 0;
            // line 218
            yield "                                ";
            $context["dp"] = 0;
            // line 219
            yield "                                ";
            $context["cc"] = 0;
            // line 220
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 220));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 221
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 221) == "oui")) {
                    // line 222
                    yield "                                    ";
                    $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 222) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 222, $this->source); })()));
                    // line 223
                    yield "                                    ";
                    $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 223) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 223, $this->source); })()));
                    // line 224
                    yield "                                    ";
                    $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 224) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 224, $this->source); })()));
                    // line 225
                    yield "                                        ";
                    $context["cc"] = ((isset($context["cc"]) || array_key_exists("cc", $context) ? $context["cc"] : (function () { throw new RuntimeError('Variable "cc" does not exist.', 225, $this->source); })()) + 1);
                    // line 226
                    yield "                                    ";
                }
                // line 227
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "                                ";
            $context["cout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 228, $this->source); })()) + (isset($context["cout"]) || array_key_exists("cout", $context) ? $context["cout"] : (function () { throw new RuntimeError('Variable "cout" does not exist.', 228, $this->source); })()));
            // line 229
            yield "                                ";
            $context["reglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 229, $this->source); })()) + (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 229, $this->source); })()));
            // line 230
            yield "                                ";
            $context["depense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 230, $this->source); })()) + (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 230, $this->source); })()));
            // line 231
            yield "                                <table class=\"d  table-bordered bg-pri text-white shadow\" width=\"100%\" style=\"margin-bottom: 10px\">
                                    ";
            // line 232
            if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 232, $this->source); })()) == 1)) {
                // line 233
                yield "                                        <tr class=\"bg-white bolderrer text-primary\">
                                            <td colspan=\"2\" style=\"width: 300px; padding-left: 5px\">CLIENT / PROJETS</td>
                                            <td sty align=\"center\" style=\"width: 150px\">VALEUR DES PROJETS</td>
                                            <td align=\"center\" style=\"width: 150px\">RÈGLEMENT</td>
                                            <td align=\"center\" style=\"width: 150px\">SOLDE</td>
                                            <td align=\"center\" style=\"width: 150px\">DÉPENSES</td>
                                            <td align=\"center\" style=\"width: 150px\">MARGES EST.</td>
                                            <td style=\"width: 50px\"></td>
                                        </tr>
                                    ";
            }
            // line 243
            yield "                                    ";
            if (((isset($context["cc"]) || array_key_exists("cc", $context) ? $context["cc"] : (function () { throw new RuntimeError('Variable "cc" does not exist.', 243, $this->source); })()) > 0)) {
                // line 244
                yield "                                    <tr>
                                        <td colspan=\"2\" class=\"text-white bg-pri\" style=\"width: 300px;padding-left: 5px\"><a
                                                    href=\"";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 246)]), "html", null, true);
                yield "\"
                                                    class=\"text-white\" title=\"";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 247), "html", null, true);
                yield "\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 247, $this->source); })()), "html", null, true);
                yield "
                                                - ";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 248), "html", null, true);
                yield "</a></td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: darkcyan;width:150px\">";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 250, $this->source); })()), 2, ".", " "), "html", null, true);
                yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: tan;width:150px\">";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 252, $this->source); })()), 2, ".", " "), "html", null, true);
                yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: slategrey;width:150px\">";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 254, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 254, $this->source); })()), 2, ".", "")), 2, ".", " "), "html", null, true);
                yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: indianred;width:150px\">";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 256, $this->source); })()), 2, ".", " "), "html", null, true);
                yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color:#4e73df;width:150px\">";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 258, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 258, $this->source); })()), 2, ".", "")), 2, ".", " "), "html", null, true);
                yield "</td>
                                        <td class=\"bg-white\" align=\"center\" style=\"width: 50px\">
                                            <a href=\"";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editclient", ["idclient" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 260)]), "html", null, true);
                yield "\">
                                                <img src=\"";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/modifier.png"), "html", null, true);
                yield "\" style=\"width: 20px\"></a>
                                            <a href=\"";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delClient", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 262)]), "html", null, true);
                yield "\" class=\"sholigne\">
                                                <img src=\"";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/signaler.png"), "html", null, true);
                yield "\" style=\"width: 20px\"></a>
                                        </td>
                                    </tr>
                                    ";
            }
            // line 267
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 267));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 268
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 268) == "oui")) {
                    // line 269
                    yield "                                        <tr>
                                            <td style=\"width: 300px ;padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                <a href=\"";
                    // line 271
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 271)]), "html", null, true);
                    yield "\" class=\"text-pri\"
                                                   title=\"";
                    // line 272
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 272), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 272), 0, 55), "html", null, true);
                    yield "</a></td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">";
                    // line 275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 275), 2, ".", " "), "html", null, true);
                    yield "</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">";
                    // line 278
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 278), 2, ".", " "), "html", null, true);
                    yield "</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">";
                    // line 281
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 281), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 281), 2, ".", "")), 2, ".", " "), "html", null, true);
                    yield "</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">";
                    // line 284
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 284), 2, ".", " "), "html", null, true);
                    yield "</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">";
                    // line 287
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 287), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 287), 2, ".", "")), 2, ".", " "), "html", null, true);
                    yield "</td>
                                            <td class=\"bg-white\" align=\"center\" style=\"width: 50px\">
                                                <a href=\"";
                    // line 289
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editechantier", ["idchantier" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 289)]), "html", null, true);
                    yield "\">
                                                    <img src=\"";
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/modifier.png"), "html", null, true);
                    yield "\" style=\"width: 20px\"
                                                         title=\"Modifier\"></a>
                                                <a href=\"";
                    // line 292
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delchantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 292)]), "html", null, true);
                    yield "\" class=\"sholigne\">
                                                    <img src=\"";
                    // line 293
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/signaler.png"), "html", null, true);
                    yield "\" style=\"width: 20px\"></a>
                                            </td>
                                        </tr>
                                        ";
                }
                // line 297
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            yield "                                </table>
                                ";
            // line 299
            $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 299, $this->source); })()) + 1);
            // line 300
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        yield "
                        </div>
                    </div>
                    <p align=\"center\" style=\"margin-top: 40px\">
                        <input type='button' id='btn' class=\"btn btn-primary\" value='Imprimer'
                               onclick='printRelev();'>
                    </p>

                </div>

            </div>
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
        return "content/projetarchive.html.twig";
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
        return array (  724 => 301,  718 => 300,  716 => 299,  713 => 298,  707 => 297,  700 => 293,  696 => 292,  691 => 290,  687 => 289,  682 => 287,  676 => 284,  670 => 281,  664 => 278,  658 => 275,  650 => 272,  646 => 271,  642 => 269,  639 => 268,  634 => 267,  627 => 263,  623 => 262,  619 => 261,  615 => 260,  610 => 258,  605 => 256,  600 => 254,  595 => 252,  590 => 250,  585 => 248,  579 => 247,  575 => 246,  571 => 244,  568 => 243,  556 => 233,  554 => 232,  551 => 231,  548 => 230,  545 => 229,  542 => 228,  536 => 227,  533 => 226,  530 => 225,  527 => 224,  524 => 223,  521 => 222,  518 => 221,  513 => 220,  510 => 219,  507 => 218,  504 => 217,  501 => 216,  496 => 215,  493 => 214,  490 => 213,  487 => 212,  485 => 211,  477 => 205,  469 => 199,  463 => 195,  459 => 193,  456 => 191,  452 => 189,  449 => 186,  447 => 185,  440 => 181,  437 => 180,  431 => 178,  425 => 176,  423 => 175,  417 => 172,  414 => 171,  408 => 169,  402 => 167,  400 => 166,  393 => 162,  390 => 161,  384 => 159,  378 => 157,  376 => 156,  368 => 151,  365 => 150,  359 => 148,  353 => 146,  351 => 145,  343 => 140,  340 => 139,  334 => 137,  328 => 135,  326 => 134,  317 => 128,  314 => 127,  308 => 125,  302 => 123,  300 => 122,  291 => 116,  287 => 115,  277 => 110,  274 => 109,  264 => 101,  254 => 93,  252 => 92,  248 => 90,  243 => 86,  235 => 80,  228 => 76,  221 => 72,  217 => 71,  210 => 67,  206 => 66,  197 => 60,  193 => 59,  186 => 55,  182 => 54,  172 => 48,  166 => 46,  160 => 44,  158 => 43,  149 => 37,  145 => 36,  135 => 31,  132 => 30,  122 => 22,  112 => 14,  110 => 13,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-3\">
                <div id=\"accordion\">
                    {# CRÉER  OU MODIFIER UN CLIENT #}
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <div id=\"headingDe\">
                            {% if editClient %}
                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left text-white bg-danger bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapseDe\"
                                       aria-expanded=\"false\" aria-controls=\"collapseDe\" style=\"width: 100%;\">
                                        1- MODIFIER UN CLIENT
                                    </a>
                                </h5>
                            {% else %}
                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left text-white bg-pri bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapseDe\"
                                       aria-expanded=\"false\" aria-controls=\"collapseDe\" style=\"width: 100%;\">
                                        1- AJOUTER UN CLIENT
                                    </a>
                                </h5>
                            {% endif %}
                        </div>
                        <div id=\"collapseDe\" class=\"collapse {% if editClient %}show{% endif %} bg-light\"
                             aria-labelledby=\"headingDe\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    {{ form_start(formClient, {'attr': {'novalidate': 'novalidate'}}) }}
                                    {{ form_row(formClient._token) }}
                                    <table style=\"width: 100%\">
                                        <tbody>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                                {% if editClient %}
                                                    {{ form_widget(formClient.client,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formClient.client,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}
                                                {{ form_errors(formClient.client) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Code client<br>
                                                {{ form_widget(formClient.code,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {{ form_errors(formClient.code) }}
                                            </td>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Adresse<br>
                                                {{ form_widget(formClient.adresse,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {{ form_errors(formClient.adresse) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Contact<br>
                                                {{ form_widget(formClient.contact,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {{ form_errors(formClient.contact) }}
                                            </td>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Compte contribuable<br>
                                                {{ form_widget(formClient.compte,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {{ form_errors(formClient.compte) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"text-align: left;padding-top: 10px\">{{ form_widget(formClient.saveclient,{ 'label': 'Enregistrer' }) }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{ form_end(formClient) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN #}



                    {# CRÉER OU MODIFER UN PROJET #}
                    <div class=\"card shadow mb-4\" id=\"chantier\">
                        <div id=\"headingPl\">
                            {% if editP %}
                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left bg-danger text-white bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapsePl\"
                                       aria-expanded=\"false\" aria-controls=\"collapsePl\" style=\"width: 100%;\">
                                        2- MODIFIER UN PROJET
                                    </a>
                                </h5>
                            {% else %}
                                <h5 class=\"mb-0\">
                                    <a class=\"btn text-left bg-pri text-white bolderrer\" data-toggle=\"collapse\"
                                       data-target=\"#collapsePl\"
                                       aria-expanded=\"false\" aria-controls=\"collapsePl\" style=\"width: 100%;\">
                                        2- CRÉER UN PROJET
                                    </a>
                                </h5>
                            {% endif %}
                        </div>
                        <div id=\"collapsePl\" class=\"collapse {% if editP %}show{% endif %} bg-light\"
                             aria-labelledby=\"headingPl\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    {{ form_start(formChantier, {'attr': {'novalidate': 'novalidate'}}) }}
                                    {{ form_row(formChantier._token) }}
                                    <table style=\"width: 100%;text-align: left\">
                                        <tbody>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                                {% if editP %}
                                                    {{ form_widget(formChantier.client,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formChantier.client,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}

                                                {{ form_errors(formChantier.chantier) }}</td>
                                        </tr>
                                        <tr>

                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Nom du chantier <span class=\"text-dangerr\">*</span><br>
                                                {% if editP %}
                                                    {{ form_widget(formChantier.chantier,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formChantier.chantier,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}

                                                {{ form_errors(formChantier.chantier) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Description<br>
                                                {% if editP %}
                                                    {{ form_widget(formChantier.description,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formChantier.description,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}

                                                {{ form_errors(formChantier.description) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\" colspan=\"2\">
                                                &raquo; Phase actuelle<br>
                                                {% if editP %}
                                                    {{ form_widget(formChantier.phase,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formChantier.phase,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}

                                                {{ form_errors(formChantier.phase) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-pri bolderr\">&raquo; Date de debut<br>
                                                {% if editP %}
                                                    {{ form_widget(formChantier.ddebut,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formChantier.ddebut,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}

                                                {{ form_errors(formChantier.ddebut) }}</td>
                                            <td class=\"text-pri bolderr\">
                                                &raquo; Date de fin<br>
                                                {% if editP %}
                                                    {{ form_widget(formChantier.dfin,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                                {% else %}
                                                    {{ form_widget(formChantier.dfin,{'attr':{'class':'form-control form-control-user'}}) }}
                                                {% endif %}

                                                {{ form_errors(formChantier.dfin) }}</td>
                                        </tr>
                                        <td align=\"left\"
                                            style=\"padding-top: 10px\">
                                            {% if editP %}
                                                {{ form_widget(formChantier.savechantier,{
                                                    'label': 'Modifier',
                                                    'attr':{'class':'btn btn-danger'}
                                                }) }}
                                            {% else %}
                                                {{ form_widget(formChantier.savechantier,{
                                                    'label': 'Enregistrer',
                                                }) }}
                                            {% endif %}
                                        </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{ form_end(formChantier) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN #}
                </div>
            </div>
            <div class=\"col-xl-9 col-lg-9\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            {% set cout = 0 %}
                            {% set reglement = 0 %}
                            {% set depense = 0 %}
                            {% set p = 1 %}
                            {% for client in clients %}
                                {% set vp = 0 %}
                                {% set vr = 0 %}
                                {% set dp = 0 %}
                                {% set cc = 0 %}
                                {% for chantier in client.chantiers %}
                                    {% if chantier.archiver == 'oui' %}
                                    {% set vp = chantier.cout + vp %}
                                    {% set vr = chantier.reglement + vr %}
                                    {% set dp = chantier.depense + dp %}
                                        {% set cc = cc + 1 %}
                                    {% endif %}
                                {% endfor %}
                                {% set cout = vp + cout %}
                                {% set reglement = vr + reglement %}
                                {% set depense = dp + depense %}
                                <table class=\"d  table-bordered bg-pri text-white shadow\" width=\"100%\" style=\"margin-bottom: 10px\">
                                    {% if p == 1 %}
                                        <tr class=\"bg-white bolderrer text-primary\">
                                            <td colspan=\"2\" style=\"width: 300px; padding-left: 5px\">CLIENT / PROJETS</td>
                                            <td sty align=\"center\" style=\"width: 150px\">VALEUR DES PROJETS</td>
                                            <td align=\"center\" style=\"width: 150px\">RÈGLEMENT</td>
                                            <td align=\"center\" style=\"width: 150px\">SOLDE</td>
                                            <td align=\"center\" style=\"width: 150px\">DÉPENSES</td>
                                            <td align=\"center\" style=\"width: 150px\">MARGES EST.</td>
                                            <td style=\"width: 50px\"></td>
                                        </tr>
                                    {% endif %}
                                    {% if cc > 0 %}
                                    <tr>
                                        <td colspan=\"2\" class=\"text-white bg-pri\" style=\"width: 300px;padding-left: 5px\"><a
                                                    href=\"{{ path('client',{'id':client.id}) }}\"
                                                    class=\"text-white\" title=\"{{ client.client }}\"> {{ p }}
                                                - {{ client.client }}</a></td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: darkcyan;width:150px\">{{ vp|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: tan;width:150px\">{{ vr|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: slategrey;width:150px\">{{ (vp|number_format(2,'.','') -  vr|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: indianred;width:150px\">{{ dp|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color:#4e73df;width:150px\">{{ (vp|number_format(2,'.','') -  dp|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                        <td class=\"bg-white\" align=\"center\" style=\"width: 50px\">
                                            <a href=\"{{ path('editclient', {'idclient': client.id}) }}\">
                                                <img src=\"{{ asset('img/modifier.png') }}\" style=\"width: 20px\"></a>
                                            <a href=\"{{ path('delClient', {'id': client.id}) }}\" class=\"sholigne\">
                                                <img src=\"{{ asset('img/signaler.png') }}\" style=\"width: 20px\"></a>
                                        </td>
                                    </tr>
                                    {% endif %}
                                    {% for chantier in client.chantiers %}
                                        {% if chantier.archiver == 'oui' %}
                                        <tr>
                                            <td style=\"width: 300px ;padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                <a href=\"{{ path('chantier', {'id': chantier.id}) }}\" class=\"text-pri\"
                                                   title=\"{{ chantier.chantier }}\">{{ chantier.chantier[0:55] }}</a></td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">{{ chantier.cout|number_format(2,'.',' ') }}</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">{{ chantier.reglement|number_format(2,'.',' ') }}</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">{{ chantier.depense|number_format(2,'.',' ') }}</td>
                                            <td align=\"right\"
                                                style=\"width: 150px\"
                                                class=\"bg-light text-pri\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                            <td class=\"bg-white\" align=\"center\" style=\"width: 50px\">
                                                <a href=\"{{ path('editechantier', {'idchantier': chantier.id}) }}\">
                                                    <img src=\"{{ asset('img/modifier.png') }}\" style=\"width: 20px\"
                                                         title=\"Modifier\"></a>
                                                <a href=\"{{ path('delchantier', {'id': chantier.id}) }}\" class=\"sholigne\">
                                                    <img src=\"{{ asset('img/signaler.png') }}\" style=\"width: 20px\"></a>
                                            </td>
                                        </tr>
                                        {%endif %}
                                    {% endfor %}
                                </table>
                                {% set p = p + 1 %}
                            {% endfor %}

                        </div>
                    </div>
                    <p align=\"center\" style=\"margin-top: 40px\">
                        <input type='button' id='btn' class=\"btn btn-primary\" value='Imprimer'
                               onclick='printRelev();'>
                    </p>

                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "content/projetarchive.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\projetarchive.html.twig");
    }
}
