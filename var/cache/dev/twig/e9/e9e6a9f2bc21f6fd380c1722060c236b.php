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

/* content/creerprojet.html.twig */
class __TwigTemplate_8fd2912a11bea4bf7a416c178fda96d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/creerprojet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/creerprojet.html.twig"));

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
<div class=\"modal fade\" id=\"ModalClient\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">AJOUTER UN CLIENT</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 17, $this->source); })()), "_token", [], "any", false, false, false, 17), 'row');
        yield "
                    <table style=\"width: 100%\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                ";
        // line 23
        if ((($tmp = (isset($context["editClient"]) || array_key_exists("editClient", $context) ? $context["editClient"] : (function () { throw new RuntimeError('Variable "editClient" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 24, $this->source); })()), "client", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 26
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 26, $this->source); })()), "client", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 28
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 28, $this->source); })()), "client", [], "any", false, false, false, 28), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Code client<span class=\"text-dangerr\">*</span><br>
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 34, $this->source); })()), "code", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 35, $this->source); })()), "code", [], "any", false, false, false, 35), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Adresse<br>
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 42, $this->source); })()), "adresse", [], "any", false, false, false, 42), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Contact<br>
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 48, $this->source); })()), "contact", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 49, $this->source); })()), "contact", [], "any", false, false, false, 49), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; C. Contribuable<br>
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 55, $this->source); })()), "compte", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 56, $this->source); })()), "compte", [], "any", false, false, false, 56), 'errors');
        yield "
                            </td>
                        </tr>
                        <tr>
                            <td style=\"text-align: left;padding-top: 10px\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 60, $this->source); })()), "saveclient", [], "any", false, false, false, 60), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-primary"]]);
        yield "</td>
                        </tr>
                        </tbody>
                    </table>
                    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 64, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal show\" id=\"ModalChantier\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">AJOUTER UN CLIENT</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 81, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 82, $this->source); })()), "_token", [], "any", false, false, false, 82), 'row');
        yield "
                    <table style=\"width: 100%;text-align: left\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                ";
        // line 88
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 89, $this->source); })()), "client", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 91
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 91, $this->source); })()), "client", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 93
        yield "
                                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 94, $this->source); })()), "chantier", [], "any", false, false, false, 94), 'errors');
        yield "</td>
                        </tr>
                        <tr>

                            <td class=\"text-pri bolderr\">
                                &raquo; Nom du chantier <span class=\"text-dangerr\">*</span><br>
                                ";
        // line 100
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 100, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 101, $this->source); })()), "chantier", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 103
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 103, $this->source); })()), "chantier", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 105
        yield "
                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 106, $this->source); })()), "chantier", [], "any", false, false, false, 106), 'errors');
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Description<br>
                                ";
        // line 111
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 111, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 114
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 114, $this->source); })()), "description", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 116
        yield "
                                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 117, $this->source); })()), "description", [], "any", false, false, false, 117), 'errors');
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Phase actuelle<br>
                                ";
        // line 122
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 123, $this->source); })()), "phase", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 125
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 125, $this->source); })()), "phase", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 127
        yield "
                                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 128, $this->source); })()), "phase", [], "any", false, false, false, 128), 'errors');
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Date de début<br>
                                ";
        // line 132
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 132, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 133, $this->source); })()), "ddebut", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        } else {
            // line 135
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 135, $this->source); })()), "ddebut", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 137
        yield "
                                ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 138, $this->source); })()), "ddebut", [], "any", false, false, false, 138), 'errors');
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Date de fin<br>
                                ";
        // line 143
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 143, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 144, $this->source); })()), "dfin", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        } else {
            // line 146
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 146, $this->source); })()), "dfin", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 148
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 148, $this->source); })()), "dfin", [], "any", false, false, false, 148), 'errors');
        yield "</td>
                        </tr>
                        <tr>

                        </tr>
                        <td align=\"left\"
                            style=\"padding-top: 10px\">
                            ";
        // line 155
        if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 155, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 156, $this->source); })()), "savechantier", [], "any", false, false, false, 156), 'widget', ["label" => "Modifier", "attr" => ["class" => "btn btn-danger"]]);
            // line 159
            yield "
                                <a href=\"";
            // line 160
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creerchantier");
            yield "\" class=\"btn btn-success\">Annuler</a>
                            ";
        } else {
            // line 162
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 162, $this->source); })()), "savechantier", [], "any", false, false, false, 162), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-primary"]]);
            // line 165
            yield "
                            ";
        }
        // line 167
        yield "                        </td>
                        </tr>
                        </tbody>
                    </table>
                    ";
        // line 171
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 171, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal show\" id=\"ModalChef\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-info\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">CHEF PROJET</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    <h6><u>AJOUTER UN CHEF</u></h6>
                    ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 189, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 190, $this->source); })()), "_token", [], "any", false, false, false, 190), 'row');
        yield "
                    <table style=\"width: 100%;text-align: left\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Nom & Prénoms <span class=\"text-dangerr\">*</span><br>
                                ";
        // line 196
        if ((($tmp = (isset($context["editChef"]) || array_key_exists("editChef", $context) ? $context["editChef"] : (function () { throw new RuntimeError('Variable "editChef" does not exist.', 196, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 197, $this->source); })()), "nom", [], "any", false, false, false, 197), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 199
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 199, $this->source); })()), "nom", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 201
        yield "
                                ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 202, $this->source); })()), "nom", [], "any", false, false, false, 202), 'errors');
        yield "</td>
                        </tr>
                        <tr>

                            <td class=\"text-pri bolderr\">
                                &raquo; Téléphone <br>
                                ";
        // line 208
        if ((($tmp = (isset($context["editChef"]) || array_key_exists("editChef", $context) ? $context["editChef"] : (function () { throw new RuntimeError('Variable "editChef" does not exist.', 208, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 209, $this->source); })()), "phone", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 211
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 211, $this->source); })()), "phone", [], "any", false, false, false, 211), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 213
        yield "
                                ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 214, $this->source); })()), "phone", [], "any", false, false, false, 214), 'errors');
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; E-mail<br>
                                ";
        // line 219
        if ((($tmp = (isset($context["editChef"]) || array_key_exists("editChef", $context) ? $context["editChef"] : (function () { throw new RuntimeError('Variable "editChef" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 220, $this->source); })()), "email", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 222
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 222, $this->source); })()), "email", [], "any", false, false, false, 222), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 224
        yield "
                                ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 225, $this->source); })()), "email", [], "any", false, false, false, 225), 'errors');
        yield "</td>
                        </tr>
                        <td align=\"left\"
                            style=\"padding-top: 10px\">
                            ";
        // line 229
        if ((($tmp = (isset($context["editChef"]) || array_key_exists("editChef", $context) ? $context["editChef"] : (function () { throw new RuntimeError('Variable "editChef" does not exist.', 229, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 230
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 230, $this->source); })()), "savechef", [], "any", false, false, false, 230), 'widget', ["label" => "Modifier", "attr" => ["class" => "btn btn-danger"]]);
            // line 233
            yield "
                                <a href=\"";
            // line 234
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creerchantier");
            yield "\" class=\"btn btn-success\">Annuler</a>
                            ";
        } else {
            // line 236
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 236, $this->source); })()), "savechef", [], "any", false, false, false, 236), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-info"]]);
            // line 239
            yield "
                            ";
        }
        // line 241
        yield "                        </td>
                        </tr>
                        </tbody>
                    </table>
                    ";
        // line 245
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChef"]) || array_key_exists("formChef", $context) ? $context["formChef"] : (function () { throw new RuntimeError('Variable "formChef" does not exist.', 245, $this->source); })()), 'form_end');
        yield "<br>

                    <h6><u>LIER UN CHEF À UN PROJET</u></h6><br>
                    ";
        // line 248
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 248, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 249, $this->source); })()), "_token", [], "any", false, false, false, 249), 'row');
        yield "
                    <table style=\"width: 100%;text-align: left\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Chefs chantier <span class=\"text-dangerr\">*</span><br>
                                ";
        // line 255
        if ((($tmp = (isset($context["editLier"]) || array_key_exists("editLier", $context) ? $context["editLier"] : (function () { throw new RuntimeError('Variable "editLier" does not exist.', 255, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 256
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 256, $this->source); })()), "chef", [], "any", false, false, false, 256), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 258
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 258, $this->source); })()), "chef", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 260
        yield "
                                ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 261, $this->source); })()), "chef", [], "any", false, false, false, 261), 'errors');
        yield "</td>
                        </tr>
                        <tr>

                            <td class=\"text-pri bolderr\">
                                &raquo; chantiers <br>
                                ";
        // line 267
        if ((($tmp = (isset($context["editLier"]) || array_key_exists("editLier", $context) ? $context["editLier"] : (function () { throw new RuntimeError('Variable "editLier" does not exist.', 267, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 268
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 268, $this->source); })()), "chantier", [], "any", false, false, false, 268), 'widget', ["attr" => ["class" => "form-control form-control-user text-danger"]]);
            yield "
                                ";
        } else {
            // line 270
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 270, $this->source); })()), "chantier", [], "any", false, false, false, 270), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                ";
        }
        // line 272
        yield "
                                ";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 273, $this->source); })()), "chantier", [], "any", false, false, false, 273), 'errors');
        yield "</td>
                        </tr>
                        <tr>
                            <td align=\"left\"
                                style=\"padding-top: 10px\">
                                ";
        // line 278
        if ((($tmp = (isset($context["editLier"]) || array_key_exists("editLier", $context) ? $context["editLier"] : (function () { throw new RuntimeError('Variable "editLier" does not exist.', 278, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 279
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 279, $this->source); })()), "savelier", [], "any", false, false, false, 279), 'widget', ["label" => "Modifier", "attr" => ["class" => "btn btn-danger"]]);
            // line 282
            yield "
                                    <a href=\"";
            // line 283
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creerchantier");
            yield "\" class=\"btn btn-success\">Annuler</a>
                                ";
        } else {
            // line 285
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 285, $this->source); })()), "savelier", [], "any", false, false, false, 285), 'widget', ["label" => "Enregistrer", "attr" => ["class" => "btn btn-info"]]);
            // line 288
            yield "
                                ";
        }
        // line 290
        yield "                            </td>
                        </tr>
                        </tbody>
                    </table>
                    ";
        // line 294
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLier"]) || array_key_exists("formLier", $context) ? $context["formLier"] : (function () { throw new RuntimeError('Variable "formLier" does not exist.', 294, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    table td {
        max-width: 100px !important;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-break: break-all;
        overflow: hidden;
        padding: 2px !important;
    }

    .modal {
        -webkit-border-radius: 20px !important;
        -moz-border-radius: 20px !important;
        border-radius: 20px !important;
    }

    .btn-label {
        position: relative;
        left: -10px;
        display: inline-block;
        padding: 0px 12px;
        background: rgba(0, 0, 0, 0.15);
        border-radius: 10px 0 0 10px;
    }

    .btn-labeled {
        padding-top: 0;
        padding-bottom: 0;
    }

    .btn {
        margin-bottom: 10px;
        border-radius: 10px
    }

    .div_chart {
        width: 100% !important;
    }
</style>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-12 col-lg-12\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-body bg-gray-400\" style=\"padding: 5px !important;\">
                    <div style=\"padding:15px 12px 0 12px\">
                    ";
        // line 345
        if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 345, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 346
            yield "                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                data-toggle=\"modal\" data-target=\"#ModalClient\">
                            <span class=\"btn-label\"><i class=\"fa fa-plus-circle\"></i></span>AJOUTER UN
                            CLIENT
                        </button>

                        ";
            // line 352
            if ((($tmp = (isset($context["editP"]) || array_key_exists("editP", $context) ? $context["editP"] : (function () { throw new RuntimeError('Variable "editP" does not exist.', 352, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 353
                yield "                            <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                    data-toggle=\"modal\" data-target=\"#ModalChantier\">
                                <span class=\"btn-label\"><i class=\"fa fa-minus-circle\"></i></span>MODIFIER
                                UN PROJET
                            </button>
                        ";
            } else {
                // line 359
                yield "                            <button type=\"button\" class=\"btn btn-labeled btn-success btn-sm\"
                                    data-toggle=\"modal\" data-target=\"#ModalChantier\">
                                <span class=\"btn-label\"><i class=\"fa fa-plus-circle\"></i></span>AJOUTER
                                UN PROJET
                            </button>
                        ";
            }
            // line 365
            yield "                        <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                data-toggle=\"modal\" data-target=\"#ModalChef\">
                            <span class=\"btn-label\"><i class=\"fa fa-plus-circle\"></i></span> CHEF PROJET
                        </button>
                    ";
        }
        // line 370
        yield "                </div>

                    <div id=\"accordion\" style=\"padding:10px 12px 0 12px\">
                        ";
        // line 374
        yield "                        <div style=\"margin-bottom: 5px\">
                            <div id=\"headingOne\">
                                <h5 class=\"mb-0\">
                                    <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                       data-target=\"#collapseOne\"
                                       aria-expanded=\"true\" aria-controls=\"collapseOne\" style=\"width: 100%;\">
                                        PROJETS EN COURS
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\"
                                 data-parent=\"#accordion\">
                                <div class=\"table-responsive shadow\">
                                    <table class=\"table-bordered shadow display nowrap pri\" id=\"dataPROJET\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>CLIENT / PROJETS</th>
                                            <th>COÛT</th>
                                            <th>CLIENT</th>
                                            <th>RÈGLEMENT</th>
                                            <th>SOLDE</th>
                                            <th>DÉPENSES</th>
                                            <th>MARGES EST.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 401
        $context["cout"] = 0;
        // line 402
        yield "                                        ";
        $context["check"] = 0;
        // line 403
        yield "                                        ";
        $context["ccheck"] = 0;
        // line 404
        yield "                                        ";
        $context["reglement"] = 0;
        // line 405
        yield "                                        ";
        $context["depense"] = 0;
        // line 406
        yield "                                        ";
        $context["tcout"] = 0;
        // line 407
        yield "                                        ";
        $context["treglement"] = 0;
        // line 408
        yield "                                        ";
        $context["tdepense"] = 0;
        // line 409
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 409, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 410
            yield "                                            ";
            $context["vp"] = 0;
            // line 411
            yield "                                            ";
            $context["vr"] = 0;
            // line 412
            yield "                                            ";
            $context["dp"] = 0;
            // line 413
            yield "
                                            ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 414));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 415
                yield "                                                ";
                if ((($tmp =  !(isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 415, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 416
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 416) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 416, $this->source); })()), "user", [], "any", false, false, false, 416)) || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 416) == (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 416, $this->source); })())))) {
                        // line 417
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 417, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                            // line 418
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 418) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 418)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 418) == "1"))) {
                                // line 419
                                yield "                                                                ";
                                $context["ccheck"] = 1;
                                // line 420
                                yield "                                                            ";
                            }
                            // line 421
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 422
                        yield "                                                        ";
                        if (((isset($context["ccheck"]) || array_key_exists("ccheck", $context) ? $context["ccheck"] : (function () { throw new RuntimeError('Variable "ccheck" does not exist.', 422, $this->source); })()) != 1)) {
                            // line 423
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 423) != "oui")) {
                                // line 424
                                yield "                                                                ";
                                $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 424) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 424, $this->source); })()));
                                // line 425
                                yield "                                                                ";
                                $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 425) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 425, $this->source); })()));
                                // line 426
                                yield "                                                                ";
                                $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 426) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 426, $this->source); })()));
                                // line 427
                                yield "                                                            ";
                            }
                            // line 428
                            yield "                                                        ";
                        }
                        // line 429
                        yield "                                                        ";
                        $context["ccheck"] = 0;
                        // line 430
                        yield "                                                    ";
                    }
                    // line 431
                    yield "                                                ";
                } else {
                    // line 432
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 432, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                        // line 433
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 433) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 433)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 433) == "1"))) {
                            // line 434
                            yield "                                                            ";
                            $context["ccheck"] = 1;
                            // line 435
                            yield "                                                        ";
                        }
                        // line 436
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 437
                    yield "                                                    ";
                    if (((isset($context["ccheck"]) || array_key_exists("ccheck", $context) ? $context["ccheck"] : (function () { throw new RuntimeError('Variable "ccheck" does not exist.', 437, $this->source); })()) != 1)) {
                        // line 438
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 438) != "oui")) {
                            // line 439
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 439) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 439, $this->source); })()));
                            // line 440
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 440) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 440, $this->source); })()));
                            // line 441
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 441) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 441, $this->source); })()));
                            // line 442
                            yield "                                                        ";
                        }
                        // line 443
                        yield "                                                    ";
                    }
                    // line 444
                    yield "                                                    ";
                    $context["ccheck"] = 0;
                    // line 445
                    yield "                                                ";
                }
                // line 446
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            yield "
                                            ";
            // line 448
            $context["tcout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 448, $this->source); })()) + (isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 448, $this->source); })()));
            // line 449
            yield "                                            ";
            $context["treglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 449, $this->source); })()) + (isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 449, $this->source); })()));
            // line 450
            yield "                                            ";
            $context["tdepense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 450, $this->source); })()) + (isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 450, $this->source); })()));
            // line 451
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 451));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 452
                yield "
                                                ";
                // line 453
                if ((($tmp =  !(isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 453, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 454
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 454) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454)) || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 454) == (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 454, $this->source); })())))) {
                        // line 455
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 455, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                            // line 456
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 456) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 456)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 456) == "1"))) {
                                // line 457
                                yield "                                                                ";
                                $context["check"] = 1;
                                // line 458
                                yield "                                                            ";
                            }
                            // line 459
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 460
                        yield "                                                        ";
                        if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 460, $this->source); })()) != 1)) {
                            // line 461
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 461) != "oui")) {
                                // line 462
                                yield "                                                                ";
                                if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 462, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 463
                                    yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY\"
                                                                                   value=\"";
                                    // line 467
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 467), "html", null, true);
                                    yield "\"></td>
                                                                        <td>
                                                                            <a href=\"";
                                    // line 469
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 469)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 470
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 470), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 470)), "html", null, true);
                                    yield "</a>
                                                                        </td>
                                                                        <td class=\"text-right\">";
                                    // line 472
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 472), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td> +
                                                                            <a href=\"";
                                    // line 474
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 474)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 475
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 475), "html", null, true);
                                    yield "\"
                                                                               class=\"text-white\">
                                                                                ";
                                    // line 477
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 477)), "html", null, true);
                                    yield "</a></td>
                                                                        <td class=\"text-right\">";
                                    // line 478
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 478), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 479
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 479), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 479), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 480
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 480), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 481
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 481), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 481), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                    </tr>
                                                                ";
                                } else {
                                    // line 484
                                    yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY\"
                                                                                   value=\"";
                                    // line 488
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 488), "html", null, true);
                                    yield "\"></td>
                                                                        <td>
                                                                            <a href=\"";
                                    // line 490
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 490)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 491
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 491), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 491)), "html", null, true);
                                    yield "</a>
                                                                        </td>
                                                                        <td class=\"text-right\">";
                                    // line 493
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 493), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td> +
                                                                            <a href=\"";
                                    // line 495
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 495)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 496
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 496), "html", null, true);
                                    yield "\"
                                                                               class=\"text-white\">
                                                                                ";
                                    // line 498
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 498)), "html", null, true);
                                    yield "</a></td>
                                                                        <td class=\"text-right\">";
                                    // line 499
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 499), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 500
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 500), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 500), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 501
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 501), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 502
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 502), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 502), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                    </tr>
                                                                ";
                                }
                                // line 505
                                yield "                                                            ";
                            }
                            // line 506
                            yield "                                                        ";
                        }
                        // line 507
                        yield "                                                        ";
                        $context["check"] = 0;
                        // line 508
                        yield "                                                    ";
                    }
                    // line 509
                    yield "                                                ";
                } else {
                    // line 510
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 510, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                        // line 511
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 511) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 511)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 511) == "1"))) {
                            // line 512
                            yield "                                                            ";
                            $context["check"] = 1;
                            // line 513
                            yield "                                                        ";
                        }
                        // line 514
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 515
                    yield "                                                    ";
                    if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 515, $this->source); })()) != 1)) {
                        // line 516
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 516) != "oui")) {
                            // line 517
                            yield "                                                            ";
                            if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 517, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 518
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY\"
                                                                               value=\"";
                                // line 522
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 522), "html", null, true);
                                yield "\"></td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 524
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 524)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 525
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 525), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 525)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 527
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 527), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td> +
                                                                        <a href=\"";
                                // line 529
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 529)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 530
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 530), "html", null, true);
                                yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                                // line 532
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 532)), "html", null, true);
                                yield "</a></td>
                                                                    <td class=\"text-right\">";
                                // line 533
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 533), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 534
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 534), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 534), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 535
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 535), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 536
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 536), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 536), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                </tr>
                                                            ";
                            } else {
                                // line 539
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY\"
                                                                               value=\"";
                                // line 543
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 543), "html", null, true);
                                yield "\"></td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 545
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 545)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 546
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 546), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 546)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 548
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 548), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td> +
                                                                        <a href=\"";
                                // line 550
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 550)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 551
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 551), "html", null, true);
                                yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                                // line 553
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 553)), "html", null, true);
                                yield "</a></td>
                                                                    <
                                                                    <td class=\"text-right\">";
                                // line 555
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 555), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 556
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 556), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 556), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 557
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 557), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 558
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 558), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 558), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                </tr>
                                                            ";
                            }
                            // line 561
                            yield "                                                        ";
                        }
                        // line 562
                        yield "                                                    ";
                    }
                    // line 563
                    yield "                                                    ";
                    $context["check"] = 0;
                    // line 564
                    yield "                                                ";
                }
                // line 565
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 566
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    ";
        // line 570
        if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 570, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 571
            yield "                                        <div class=\"row p-3\">
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;COÛTS&nbsp;&nbsp;&nbsp;</span>
                                                <br><span class=\"text-pri h6\">";
            // line 575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 575, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "&nbsp;TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;RÈGLEMENTS</span>
                                                <br><span class=\"text-pri h6\">";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 580, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "&nbsp;TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;SOLDES</span>
                                                <br><span
                                                        class=\"text-pri h6\">";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 586, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 586, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield " TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;DÉPENSES</span>
                                                <br><span class=\"text-pri h6\">";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 591, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "&nbsp;TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;MARGES&nbsp;EST.</span>
                                                <br><span
                                                        class=\"text-pri h6\">";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 597, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 597, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield "&nbsp;TTC</span>
                                            </div>
                                        </div>
                                    ";
        }
        // line 601
        yield "                                </div>
                            </div>
                        </div>

                        ";
        // line 606
        yield "                        <div class=\"b-4\" style=\"margin-bottom: 5px\">
                            <div id=\"headingDeu\">
                                <h5 class=\"mb-0\">
                                    <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                       data-target=\"#collapseDeu\"
                                       aria-expanded=\"true\" aria-controls=\"collapseDeu\" style=\"width: 100%;\">
                                        PROJETS ARCHIVÉS
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseDeu\" class=\"collapse\" aria-labelledby=\"headingDeu\"
                                 data-parent=\"#accordion\">
                                <div class=\"table-responsive shadow  bg-white\"
                                     style=\"margin-bottom: 50px; padding: 20px; margin-top: -20px\">
                                    <br>
                                    <table class=\"table-bordered shadow display nowrap\" id=\"dataPROJET2\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-gray-600\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>CLIENT / PROJETS</th>
                                            <th>VALEUR</th>
                                            <th>CLIENT</th>
                                            <th>RÈGLEMENT</th>
                                            <th>SOLDE</th>
                                            <th>DÉPENSES</th>
                                            <th>MARGES EST.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 635
        $context["cout"] = 0;
        // line 636
        yield "                                        ";
        $context["check2"] = 0;
        // line 637
        yield "                                        ";
        $context["ccheck2"] = 0;
        // line 638
        yield "                                        ";
        $context["reglement"] = 0;
        // line 639
        yield "                                        ";
        $context["depense"] = 0;
        // line 640
        yield "
                                        ";
        // line 641
        $context["acout"] = 0;
        // line 642
        yield "                                        ";
        $context["areglement"] = 0;
        // line 643
        yield "                                        ";
        $context["adepense"] = 0;
        // line 644
        yield "
                                        ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 645, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 646
            yield "                                            ";
            $context["vp"] = 0;
            // line 647
            yield "                                            ";
            $context["vr"] = 0;
            // line 648
            yield "                                            ";
            $context["dp"] = 0;
            // line 649
            yield "
                                            ";
            // line 650
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 650));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 651
                yield "                                                ";
                if ((($tmp =  !(isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 651, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 652
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 652) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 652, $this->source); })()), "user", [], "any", false, false, false, 652)) || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 652) == (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 652, $this->source); })())))) {
                        // line 653
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 653, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                            // line 654
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 654) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 654)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 654) == "1"))) {
                                // line 655
                                yield "                                                                ";
                                $context["ccheck2"] = 1;
                                // line 656
                                yield "                                                            ";
                            }
                            // line 657
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 658
                        yield "                                                        ";
                        if (((isset($context["ccheck2"]) || array_key_exists("ccheck2", $context) ? $context["ccheck2"] : (function () { throw new RuntimeError('Variable "ccheck2" does not exist.', 658, $this->source); })()) != 1)) {
                            // line 659
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 659) == "oui")) {
                                // line 660
                                yield "                                                                ";
                                $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 660) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 660, $this->source); })()));
                                // line 661
                                yield "                                                                ";
                                $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 661) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 661, $this->source); })()));
                                // line 662
                                yield "                                                                ";
                                $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 662) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 662, $this->source); })()));
                                // line 663
                                yield "                                                            ";
                            }
                            // line 664
                            yield "                                                        ";
                        }
                        // line 665
                        yield "                                                        ";
                        $context["ccheck2"] = 0;
                        // line 666
                        yield "                                                    ";
                    }
                    // line 667
                    yield "                                                ";
                } else {
                    // line 668
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 668, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                        // line 669
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 669) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 669)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 669) == "1"))) {
                            // line 670
                            yield "                                                            ";
                            $context["ccheck2"] = 1;
                            // line 671
                            yield "                                                        ";
                        }
                        // line 672
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 673
                    yield "                                                    ";
                    if (((isset($context["ccheck2"]) || array_key_exists("ccheck2", $context) ? $context["ccheck2"] : (function () { throw new RuntimeError('Variable "ccheck2" does not exist.', 673, $this->source); })()) != 1)) {
                        // line 674
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 674) == "oui")) {
                            // line 675
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 675) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 675, $this->source); })()));
                            // line 676
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 676) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 676, $this->source); })()));
                            // line 677
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 677) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 677, $this->source); })()));
                            // line 678
                            yield "                                                        ";
                        }
                        // line 679
                        yield "                                                    ";
                    }
                    // line 680
                    yield "                                                    ";
                    $context["ccheck2"] = 0;
                    // line 681
                    yield "                                                ";
                }
                // line 682
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 683
            yield "

                                            ";
            // line 685
            $context["acout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 685, $this->source); })()) + (isset($context["acout"]) || array_key_exists("acout", $context) ? $context["acout"] : (function () { throw new RuntimeError('Variable "acout" does not exist.', 685, $this->source); })()));
            // line 686
            yield "                                            ";
            $context["areglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 686, $this->source); })()) + (isset($context["areglement"]) || array_key_exists("areglement", $context) ? $context["areglement"] : (function () { throw new RuntimeError('Variable "areglement" does not exist.', 686, $this->source); })()));
            // line 687
            yield "                                            ";
            $context["adepense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 687, $this->source); })()) + (isset($context["adepense"]) || array_key_exists("adepense", $context) ? $context["adepense"] : (function () { throw new RuntimeError('Variable "adepense" does not exist.', 687, $this->source); })()));
            // line 688
            yield "
                                            ";
            // line 689
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 689));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 690
                yield "                                                ";
                if ((($tmp =  !(isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 690, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 691
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 691) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 691, $this->source); })()), "user", [], "any", false, false, false, 691)) || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 691) == (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 691, $this->source); })())))) {
                        // line 692
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 692, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                            // line 693
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 693) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 693)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 693) == "1"))) {
                                // line 694
                                yield "                                                                ";
                                $context["check2"] = 1;
                                // line 695
                                yield "                                                            ";
                            }
                            // line 696
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 697
                        yield "                                                        ";
                        if (((isset($context["check2"]) || array_key_exists("check2", $context) ? $context["check2"] : (function () { throw new RuntimeError('Variable "check2" does not exist.', 697, $this->source); })()) != 1)) {
                            // line 698
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 698) == "oui")) {
                                // line 699
                                yield "                                                                ";
                                if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 699, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 700
                                    yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY2\"
                                                                                   value=\"";
                                    // line 704
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 704), "html", null, true);
                                    yield "\"></td>
                                                                        <td>
                                                                            <a href=\"";
                                    // line 706
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 706)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 707
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 707), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 707), "html", null, true);
                                    yield "</a>
                                                                        </td>
                                                                        <td class=\"text-right\">";
                                    // line 709
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 709), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td> +
                                                                            <a href=\"";
                                    // line 711
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 711)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 712
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 712), "html", null, true);
                                    yield "\"
                                                                               class=\"text-white\">
                                                                                ";
                                    // line 714
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 714)), "html", null, true);
                                    yield "</a></td>
                                                                        <td class=\"text-right\">";
                                    // line 715
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 715), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 716
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 716), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 716), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 717
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 717), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 718
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 718), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 718), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>

                                                                    </tr>
                                                                ";
                                } else {
                                    // line 722
                                    yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY2\"
                                                                                   value=\"";
                                    // line 726
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 726), "html", null, true);
                                    yield "\"></td>
                                                                        <td>
                                                                            <a href=\"";
                                    // line 728
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 728)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 729
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 729), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 729)), "html", null, true);
                                    yield "</a>
                                                                        </td>
                                                                        <td class=\"text-right\">";
                                    // line 731
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 731), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td> +
                                                                            <a href=\"";
                                    // line 733
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 733)]), "html", null, true);
                                    yield "\"
                                                                               title=\"";
                                    // line 734
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 734), "html", null, true);
                                    yield "\"
                                                                               class=\"text-white\">
                                                                                ";
                                    // line 736
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 736)), "html", null, true);
                                    yield "</a></td>
                                                                        <td class=\"text-right\">";
                                    // line 737
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 737), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 738
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 738), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 738), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 739
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 739), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 740
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 740), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 740), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>


                                                                    </tr>
                                                                ";
                                }
                                // line 745
                                yield "                                                            ";
                            }
                            // line 746
                            yield "                                                        ";
                        }
                        // line 747
                        yield "                                                        ";
                        $context["check2"] = 0;
                        // line 748
                        yield "                                                    ";
                    }
                    // line 749
                    yield "                                                ";
                } else {
                    // line 750
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 750, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                        // line 751
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 751) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 751)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 751) == "1"))) {
                            // line 752
                            yield "                                                            ";
                            $context["check2"] = 1;
                            // line 753
                            yield "                                                        ";
                        }
                        // line 754
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 755
                    yield "                                                    ";
                    if (((isset($context["check2"]) || array_key_exists("check2", $context) ? $context["check2"] : (function () { throw new RuntimeError('Variable "check2" does not exist.', 755, $this->source); })()) != 1)) {
                        // line 756
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 756) == "oui")) {
                            // line 757
                            yield "                                                            ";
                            if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 757, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 758
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY2\"
                                                                               value=\"";
                                // line 762
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 762), "html", null, true);
                                yield "\"></td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 764
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 764)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 765
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 765), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 765), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 767
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 767), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td> +
                                                                        <a href=\"";
                                // line 769
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 769)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 770
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 770), "html", null, true);
                                yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                                // line 772
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 772)), "html", null, true);
                                yield "</a></td>
                                                                    <td class=\"text-right\">";
                                // line 773
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 773), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 774
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 774), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 774), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 775
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 775), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 776
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 776), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 776), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                </tr>
                                                            ";
                            } else {
                                // line 780
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY2\"
                                                                               value=\"";
                                // line 784
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 784), "html", null, true);
                                yield "\"></td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 786
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 786)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 787
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 787), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 787)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 789
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 789), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td> +
                                                                        <a href=\"";
                                // line 791
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 791)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 792
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 792), "html", null, true);
                                yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                                // line 794
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 794)), "html", null, true);
                                yield "</a></td>
                                                                    <td class=\"text-right\">";
                                // line 795
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 795), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 796
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 796), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 796), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 797
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 797), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 798
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 798), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 798), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>


                                                                </tr>
                                                            ";
                            }
                            // line 803
                            yield "                                                        ";
                        }
                        // line 804
                        yield "                                                    ";
                    }
                    // line 805
                    yield "                                                    ";
                    $context["check2"] = 0;
                    // line 806
                    yield "                                                ";
                }
                // line 807
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 808
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    ";
        // line 812
        if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 812, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 813
            yield "                                        <table class=\"table-bordered d reduire\">
                                            <tr class=\"bg-pri text-white\">
                                                <td colspan=\"2\" class=\"text-center\">TOTAUX PROJETS ARCHIVÉS</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">VALEUR</td>
                                                <td class=\"text-right\">";
            // line 819
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["acout"]) || array_key_exists("acout", $context) ? $context["acout"] : (function () { throw new RuntimeError('Variable "acout" does not exist.', 819, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">RÈGLEMENT</td>
                                                <td class=\"text-right\">";
            // line 823
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["areglement"]) || array_key_exists("areglement", $context) ? $context["areglement"] : (function () { throw new RuntimeError('Variable "areglement" does not exist.', 823, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">SOLDE</td>
                                                <td class=\"text-right\">";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["acout"]) || array_key_exists("acout", $context) ? $context["acout"] : (function () { throw new RuntimeError('Variable "acout" does not exist.', 827, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["areglement"]) || array_key_exists("areglement", $context) ? $context["areglement"] : (function () { throw new RuntimeError('Variable "areglement" does not exist.', 827, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">DÉPENSES</td>
                                                <td class=\"text-right\">";
            // line 831
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["adepense"]) || array_key_exists("adepense", $context) ? $context["adepense"] : (function () { throw new RuntimeError('Variable "adepense" does not exist.', 831, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">MARGES EST.</td>
                                                <td class=\"text-right\">";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["acout"]) || array_key_exists("acout", $context) ? $context["acout"] : (function () { throw new RuntimeError('Variable "acout" does not exist.', 835, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["adepense"]) || array_key_exists("adepense", $context) ? $context["adepense"] : (function () { throw new RuntimeError('Variable "adepense" does not exist.', 835, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                        </table>
                                    ";
        }
        // line 839
        yield "                                </div>
                            </div>
                        </div>

                        ";
        // line 844
        yield "                        <div class=\"b-4\" style=\"margin-bottom: 5px\">
                            <div id=\"headingTroi\">
                                <h5 class=\"mb-0\">
                                    <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                       data-target=\"#collapseTroi\"
                                       aria-expanded=\"true\" aria-controls=\"collapseTroi\" style=\"width: 100%;\">
                                        PROJETS EN COURS
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseTroi\" class=\"collapse\" aria-labelledby=\"headingTroi\"
                                 data-parent=\"#accordion\">
                                <div class=\"table-responsive shadow bg-white\"
                                     style=\"margin-bottom: 50px; padding: 20px; margin-top: -20px\">
                                    <br>
                                    <table class=\"table-bordered shadow display nowrap\" width=\"100%\" id=\"dataPROJET3\">
                                        <thead>
                                        <tr class=\"text-gray-600\">
                                            <th>CLIENT / PROJETS</th>
                                            <th>VALEUR</th>
                                            <th>CLIENT</th>
                                            <th>RÈGLEMENT</th>
                                            <th>SOLDE</th>
                                            <th>DÉPENSES</th>
                                            <th>MARGES EST.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 872
        $context["cout"] = 0;
        // line 873
        yield "                                        ";
        $context["check3"] = 0;
        // line 874
        yield "                                        ";
        $context["ccheck3"] = 0;
        // line 875
        yield "                                        ";
        $context["reglement"] = 0;
        // line 876
        yield "                                        ";
        $context["depense"] = 0;
        // line 877
        yield "
                                        ";
        // line 878
        $context["bcout"] = 0;
        // line 879
        yield "                                        ";
        $context["breglement"] = 0;
        // line 880
        yield "                                        ";
        $context["bdepense"] = 0;
        // line 881
        yield "
                                        ";
        // line 882
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 882, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 883
            yield "                                            ";
            $context["vp"] = 0;
            // line 884
            yield "                                            ";
            $context["vr"] = 0;
            // line 885
            yield "                                            ";
            $context["dp"] = 0;
            // line 886
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 886));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 887
                yield "                                                ";
                if ((($tmp =  !(isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 887, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 888
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 888) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 888, $this->source); })()), "user", [], "any", false, false, false, 888)) || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 888) == (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 888, $this->source); })())))) {
                        // line 889
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 889, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                            // line 890
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 890) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 890)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 890) == "1"))) {
                                // line 891
                                yield "                                                                ";
                                $context["ccheck3"] = 1;
                                // line 892
                                yield "                                                            ";
                            }
                            // line 893
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 894
                        yield "                                                        ";
                        if (((isset($context["ccheck3"]) || array_key_exists("ccheck3", $context) ? $context["ccheck3"] : (function () { throw new RuntimeError('Variable "ccheck3" does not exist.', 894, $this->source); })()) != 1)) {
                            // line 895
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 895) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 895, $this->source); })()));
                            // line 896
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 896) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 896, $this->source); })()));
                            // line 897
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 897) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 897, $this->source); })()));
                            // line 898
                            yield "                                                        ";
                        }
                        // line 899
                        yield "                                                        ";
                        $context["ccheck3"] = 0;
                        // line 900
                        yield "                                                    ";
                    }
                    // line 901
                    yield "                                                ";
                } else {
                    // line 902
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 902, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                        // line 903
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 903) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 903)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 903) == "1"))) {
                            // line 904
                            yield "                                                            ";
                            $context["ccheck3"] = 1;
                            // line 905
                            yield "                                                        ";
                        }
                        // line 906
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 907
                    yield "                                                    ";
                    if (((isset($context["ccheck3"]) || array_key_exists("ccheck3", $context) ? $context["ccheck3"] : (function () { throw new RuntimeError('Variable "ccheck3" does not exist.', 907, $this->source); })()) != 1)) {
                        // line 908
                        yield "                                                        ";
                        $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 908) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 908, $this->source); })()));
                        // line 909
                        yield "                                                        ";
                        $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 909) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 909, $this->source); })()));
                        // line 910
                        yield "                                                        ";
                        $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 910) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 910, $this->source); })()));
                        // line 911
                        yield "                                                    ";
                    }
                    // line 912
                    yield "                                                    ";
                    $context["ccheck3"] = 0;
                    // line 913
                    yield "                                                ";
                }
                // line 914
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 915
            yield "
                                            ";
            // line 916
            $context["bcout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 916, $this->source); })()) + (isset($context["bcout"]) || array_key_exists("bcout", $context) ? $context["bcout"] : (function () { throw new RuntimeError('Variable "bcout" does not exist.', 916, $this->source); })()));
            // line 917
            yield "                                            ";
            $context["breglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 917, $this->source); })()) + (isset($context["breglement"]) || array_key_exists("breglement", $context) ? $context["breglement"] : (function () { throw new RuntimeError('Variable "breglement" does not exist.', 917, $this->source); })()));
            // line 918
            yield "                                            ";
            $context["bdepense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 918, $this->source); })()) + (isset($context["bdepense"]) || array_key_exists("bdepense", $context) ? $context["bdepense"] : (function () { throw new RuntimeError('Variable "bdepense" does not exist.', 918, $this->source); })()));
            // line 919
            yield "
                                            ";
            // line 920
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 920));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 921
                yield "                                                ";
                if ((($tmp =  !(isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 921, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 922
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 922) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 922, $this->source); })()), "user", [], "any", false, false, false, 922)) || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dobyuser", [], "any", false, false, false, 922) == (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 922, $this->source); })())))) {
                        // line 923
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 923, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                            // line 924
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 924) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 924)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 924) == "1"))) {
                                // line 925
                                yield "                                                                ";
                                $context["check3"] = 1;
                                // line 926
                                yield "                                                            ";
                            }
                            // line 927
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 928
                        yield "                                                        ";
                        if (((isset($context["check3"]) || array_key_exists("check3", $context) ? $context["check3"] : (function () { throw new RuntimeError('Variable "check3" does not exist.', 928, $this->source); })()) != 1)) {
                            // line 929
                            yield "                                                            ";
                            if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 929, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 930
                                yield "                                                                <tr>
                                                                    <td>
                                                                        <a href=\"";
                                // line 932
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 932)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 933
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 933), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 933), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 935
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 935), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td> +
                                                                        <a href=\"";
                                // line 937
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 937)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 938
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 938), "html", null, true);
                                yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                                // line 940
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 940), "html", null, true);
                                yield "</a></td>
                                                                    <td class=\"text-right\">";
                                // line 941
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 941), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 942
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 942), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 942), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 943
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 943), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 944
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 944), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 944), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                </tr>
                                                            ";
                            } else {
                                // line 947
                                yield "                                                                <tr>
                                                                    <td>
                                                                        <a href=\"";
                                // line 949
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 949)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 950
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 950), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 950)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 952
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 952), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td> +
                                                                        <a href=\"";
                                // line 954
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 954)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 955
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 955), "html", null, true);
                                yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                                // line 957
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 957)), "html", null, true);
                                yield "</a></td>
                                                                    <td class=\"text-right\">";
                                // line 958
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 958), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 959
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 959), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 959), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 960
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 960), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 961
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 961), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 961), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                </tr>
                                                            ";
                            }
                            // line 964
                            yield "                                                        ";
                        }
                        // line 965
                        yield "                                                        ";
                        $context["check3"] = 0;
                        // line 966
                        yield "                                                    ";
                    }
                    // line 967
                    yield "                                                ";
                } else {
                    // line 968
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["corbeilles"]) || array_key_exists("corbeilles", $context) ? $context["corbeilles"] : (function () { throw new RuntimeError('Variable "corbeilles" does not exist.', 968, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["corbe"]) {
                        // line 969
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "designation", [], "any", false, false, false, 969) == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "idchantier", [], "any", false, false, false, 969)) && (CoreExtension::getAttribute($this->env, $this->source, $context["corbe"], "type", [], "any", false, false, false, 969) == "1"))) {
                            // line 970
                            yield "                                                            ";
                            $context["check3"] = 1;
                            // line 971
                            yield "                                                        ";
                        }
                        // line 972
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['corbe'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 973
                    yield "                                                    ";
                    if (((isset($context["check3"]) || array_key_exists("check3", $context) ? $context["check3"] : (function () { throw new RuntimeError('Variable "check3" does not exist.', 973, $this->source); })()) != 1)) {
                        // line 974
                        yield "                                                        ";
                        if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 974, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 975
                            yield "                                                            <tr>
                                                                <td>
                                                                    <a href=\"";
                            // line 977
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 977)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 978
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 978), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 978), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td class=\"text-right\">";
                            // line 980
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 980), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td> + <a href=\"";
                            // line 981
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 981)]), "html", null, true);
                            yield "\"
                                                                          title=\"";
                            // line 982
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 982), "html", null, true);
                            yield "\"
                                                                          class=\"text-white\">
                                                                        ";
                            // line 984
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 984)), "html", null, true);
                            yield "</a></td>
                                                                <td class=\"text-right\">";
                            // line 985
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 985), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 986
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 986), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 986), 2, ".", "")), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 987
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 987), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 988
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 988), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 988), 2, ".", "")), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                            </tr>
                                                        ";
                        } else {
                            // line 991
                            yield "                                                            <tr>
                                                                <td>
                                                                    <a href=\"";
                            // line 993
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 993)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 994
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 994), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 994)), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td class=\"text-right\">";
                            // line 996
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 996), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td> + <a href=\"";
                            // line 997
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 997)]), "html", null, true);
                            yield "\"
                                                                          title=\"";
                            // line 998
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 998), "html", null, true);
                            yield "\"
                                                                          class=\"text-white\">
                                                                        ";
                            // line 1000
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 1000), "html", null, true);
                            yield "</a></td>
                                                                <td class=\"text-right\">";
                            // line 1001
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1001), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1002
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1002), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1002), 2, ".", "")), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1003
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1003), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1004
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1004), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1004), 2, ".", "")), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                            </tr>
                                                        ";
                        }
                        // line 1007
                        yield "                                                    ";
                    }
                    // line 1008
                    yield "                                                ";
                }
                // line 1009
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1010
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    ";
        // line 1014
        if ((($tmp = (isset($context["estadmin"]) || array_key_exists("estadmin", $context) ? $context["estadmin"] : (function () { throw new RuntimeError('Variable "estadmin" does not exist.', 1014, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1015
            yield "                                        <table class=\"table-bordered d reduire\" style=\"float: right\">
                                            <tr class=\"bg-pri text-white\">
                                                <td colspan=\"2\" class=\"text-center\">TOTAUX PROJETS</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">VALEUR</td>
                                                <td class=\"text-right\">";
            // line 1021
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bcout"]) || array_key_exists("bcout", $context) ? $context["bcout"] : (function () { throw new RuntimeError('Variable "bcout" does not exist.', 1021, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">RÈGLEMENT</td>
                                                <td class=\"text-right\">";
            // line 1025
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["breglement"]) || array_key_exists("breglement", $context) ? $context["breglement"] : (function () { throw new RuntimeError('Variable "breglement" does not exist.', 1025, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">SOLDE</td>
                                                <td class=\"text-right\">";
            // line 1029
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bcout"]) || array_key_exists("bcout", $context) ? $context["bcout"] : (function () { throw new RuntimeError('Variable "bcout" does not exist.', 1029, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["breglement"]) || array_key_exists("breglement", $context) ? $context["breglement"] : (function () { throw new RuntimeError('Variable "breglement" does not exist.', 1029, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">DÉPENSES</td>
                                                <td class=\"text-right\">";
            // line 1033
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bdepense"]) || array_key_exists("bdepense", $context) ? $context["bdepense"] : (function () { throw new RuntimeError('Variable "bdepense" does not exist.', 1033, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">MARGES EST.</td>
                                                <td class=\"text-right\">";
            // line 1037
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bcout"]) || array_key_exists("bcout", $context) ? $context["bcout"] : (function () { throw new RuntimeError('Variable "bcout" does not exist.', 1037, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bdepense"]) || array_key_exists("bdepense", $context) ? $context["bdepense"] : (function () { throw new RuntimeError('Variable "bdepense" does not exist.', 1037, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
            yield "</td>
                                            </tr>
                                        </table>
                                    ";
        }
        // line 1041
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start of weather widget -->
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h5 class=\"text-pri\">LISTE DES CLIENTS</h5>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"table-responsive \">
                                <h6>PC: PROJETS EN COURS</h6>
                                <h6>PA: PROJETS ARCHIVÉS</h6>
                                <table class=\"table-bordered  display nowrap\" width=\"100%\" id=\"dataLISTECLIENTS\">
                                    <thead>
                                    <tr class=\"text-gray-600 text-center\">
                                        <th style=\"width: 10px !important;\"></th>
                                        <th>CLIENT</th>
                                        <th>PC</th>
                                        <th>PA</th>
                                        <th>TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1067
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1067, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1068
            yield "                                    ";
            $context["pc"] = 0;
            // line 1069
            yield "                                    ";
            $context["pa"] = 0;
            // line 1070
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1070));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 1071
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 1071) != "oui")) {
                    // line 1072
                    yield "                                            ";
                    $context["pc"] = ((isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 1072, $this->source); })()) + 1);
                    // line 1073
                    yield "                                        ";
                } else {
                    // line 1074
                    yield "                                            ";
                    $context["pa"] = ((isset($context["pa"]) || array_key_exists("pa", $context) ? $context["pa"] : (function () { throw new RuntimeError('Variable "pa" does not exist.', 1074, $this->source); })()) + 1);
                    // line 1075
                    yield "                                        ";
                }
                // line 1076
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1077
            yield "                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                   class=\"CLYE\"
                                                   value=\"";
            // line 1081
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 1081), "html", null, true);
            yield "\"></td>
                                        <td>
                                            <a href=\"";
            // line 1083
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 1083)]), "html", null, true);
            yield "\" class=\"text-pri\"
                                               title=\"";
            // line 1084
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 1084)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 1084)), "html", null, true);
            yield "</a>
                                        </td>
                                        <td class=\"text-center\">";
            // line 1086
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 1086, $this->source); })()), "html", null, true);
            yield "</td>
                                        <td class=\"text-center\">";
            // line 1087
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pa"]) || array_key_exists("pa", $context) ? $context["pa"] : (function () { throw new RuntimeError('Variable "pa" does not exist.', 1087, $this->source); })()), "html", null, true);
            yield "</td>
                                        <td class=\"text-center text-info bolderrer\">";
            // line 1088
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["pa"]) || array_key_exists("pa", $context) ? $context["pa"] : (function () { throw new RuntimeError('Variable "pa" does not exist.', 1088, $this->source); })()) + (isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 1088, $this->source); })())), "html", null, true);
            yield "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1090
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h4 class=\"text-pri\">Activités récentes</h4>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <div class=\"dashboard-widget-content\">

                                    <ul class=\"list-unstyled timeline widget\">
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start to do list -->
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h4 class=\"text-pri\">Liste des tâches</h4>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">

                                <div class=\"\">
                                    <ul class=\"to_do\">
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Schedule meeting with new client
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Create email address for new intern
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Create email address for new intern
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location
                                            </p>
                                        </li>
                                    </ul>
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "content/creerprojet.html.twig";
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
        return array (  2575 => 1090,  2567 => 1088,  2563 => 1087,  2559 => 1086,  2552 => 1084,  2548 => 1083,  2543 => 1081,  2537 => 1077,  2531 => 1076,  2528 => 1075,  2525 => 1074,  2522 => 1073,  2519 => 1072,  2516 => 1071,  2511 => 1070,  2508 => 1069,  2505 => 1068,  2501 => 1067,  2473 => 1041,  2466 => 1037,  2459 => 1033,  2452 => 1029,  2445 => 1025,  2438 => 1021,  2430 => 1015,  2428 => 1014,  2423 => 1011,  2417 => 1010,  2411 => 1009,  2408 => 1008,  2405 => 1007,  2399 => 1004,  2395 => 1003,  2391 => 1002,  2387 => 1001,  2383 => 1000,  2378 => 998,  2374 => 997,  2370 => 996,  2363 => 994,  2359 => 993,  2355 => 991,  2349 => 988,  2345 => 987,  2341 => 986,  2337 => 985,  2333 => 984,  2328 => 982,  2324 => 981,  2320 => 980,  2313 => 978,  2309 => 977,  2305 => 975,  2302 => 974,  2299 => 973,  2293 => 972,  2290 => 971,  2287 => 970,  2284 => 969,  2279 => 968,  2276 => 967,  2273 => 966,  2270 => 965,  2267 => 964,  2261 => 961,  2257 => 960,  2253 => 959,  2249 => 958,  2245 => 957,  2240 => 955,  2236 => 954,  2231 => 952,  2224 => 950,  2220 => 949,  2216 => 947,  2210 => 944,  2206 => 943,  2202 => 942,  2198 => 941,  2194 => 940,  2189 => 938,  2185 => 937,  2180 => 935,  2173 => 933,  2169 => 932,  2165 => 930,  2162 => 929,  2159 => 928,  2153 => 927,  2150 => 926,  2147 => 925,  2144 => 924,  2139 => 923,  2136 => 922,  2133 => 921,  2129 => 920,  2126 => 919,  2123 => 918,  2120 => 917,  2118 => 916,  2115 => 915,  2109 => 914,  2106 => 913,  2103 => 912,  2100 => 911,  2097 => 910,  2094 => 909,  2091 => 908,  2088 => 907,  2082 => 906,  2079 => 905,  2076 => 904,  2073 => 903,  2068 => 902,  2065 => 901,  2062 => 900,  2059 => 899,  2056 => 898,  2053 => 897,  2050 => 896,  2047 => 895,  2044 => 894,  2038 => 893,  2035 => 892,  2032 => 891,  2029 => 890,  2024 => 889,  2021 => 888,  2018 => 887,  2013 => 886,  2010 => 885,  2007 => 884,  2004 => 883,  2000 => 882,  1997 => 881,  1994 => 880,  1991 => 879,  1989 => 878,  1986 => 877,  1983 => 876,  1980 => 875,  1977 => 874,  1974 => 873,  1972 => 872,  1942 => 844,  1936 => 839,  1929 => 835,  1922 => 831,  1915 => 827,  1908 => 823,  1901 => 819,  1893 => 813,  1891 => 812,  1886 => 809,  1880 => 808,  1874 => 807,  1871 => 806,  1868 => 805,  1865 => 804,  1862 => 803,  1854 => 798,  1850 => 797,  1846 => 796,  1842 => 795,  1838 => 794,  1833 => 792,  1829 => 791,  1824 => 789,  1817 => 787,  1813 => 786,  1808 => 784,  1802 => 780,  1795 => 776,  1791 => 775,  1787 => 774,  1783 => 773,  1779 => 772,  1774 => 770,  1770 => 769,  1765 => 767,  1758 => 765,  1754 => 764,  1749 => 762,  1743 => 758,  1740 => 757,  1737 => 756,  1734 => 755,  1728 => 754,  1725 => 753,  1722 => 752,  1719 => 751,  1714 => 750,  1711 => 749,  1708 => 748,  1705 => 747,  1702 => 746,  1699 => 745,  1691 => 740,  1687 => 739,  1683 => 738,  1679 => 737,  1675 => 736,  1670 => 734,  1666 => 733,  1661 => 731,  1654 => 729,  1650 => 728,  1645 => 726,  1639 => 722,  1632 => 718,  1628 => 717,  1624 => 716,  1620 => 715,  1616 => 714,  1611 => 712,  1607 => 711,  1602 => 709,  1595 => 707,  1591 => 706,  1586 => 704,  1580 => 700,  1577 => 699,  1574 => 698,  1571 => 697,  1565 => 696,  1562 => 695,  1559 => 694,  1556 => 693,  1551 => 692,  1548 => 691,  1545 => 690,  1541 => 689,  1538 => 688,  1535 => 687,  1532 => 686,  1530 => 685,  1526 => 683,  1520 => 682,  1517 => 681,  1514 => 680,  1511 => 679,  1508 => 678,  1505 => 677,  1502 => 676,  1499 => 675,  1496 => 674,  1493 => 673,  1487 => 672,  1484 => 671,  1481 => 670,  1478 => 669,  1473 => 668,  1470 => 667,  1467 => 666,  1464 => 665,  1461 => 664,  1458 => 663,  1455 => 662,  1452 => 661,  1449 => 660,  1446 => 659,  1443 => 658,  1437 => 657,  1434 => 656,  1431 => 655,  1428 => 654,  1423 => 653,  1420 => 652,  1417 => 651,  1413 => 650,  1410 => 649,  1407 => 648,  1404 => 647,  1401 => 646,  1397 => 645,  1394 => 644,  1391 => 643,  1388 => 642,  1386 => 641,  1383 => 640,  1380 => 639,  1377 => 638,  1374 => 637,  1371 => 636,  1369 => 635,  1338 => 606,  1332 => 601,  1325 => 597,  1316 => 591,  1308 => 586,  1299 => 580,  1291 => 575,  1285 => 571,  1283 => 570,  1278 => 567,  1272 => 566,  1266 => 565,  1263 => 564,  1260 => 563,  1257 => 562,  1254 => 561,  1248 => 558,  1244 => 557,  1240 => 556,  1236 => 555,  1231 => 553,  1226 => 551,  1222 => 550,  1217 => 548,  1210 => 546,  1206 => 545,  1201 => 543,  1195 => 539,  1189 => 536,  1185 => 535,  1181 => 534,  1177 => 533,  1173 => 532,  1168 => 530,  1164 => 529,  1159 => 527,  1152 => 525,  1148 => 524,  1143 => 522,  1137 => 518,  1134 => 517,  1131 => 516,  1128 => 515,  1122 => 514,  1119 => 513,  1116 => 512,  1113 => 511,  1108 => 510,  1105 => 509,  1102 => 508,  1099 => 507,  1096 => 506,  1093 => 505,  1087 => 502,  1083 => 501,  1079 => 500,  1075 => 499,  1071 => 498,  1066 => 496,  1062 => 495,  1057 => 493,  1050 => 491,  1046 => 490,  1041 => 488,  1035 => 484,  1029 => 481,  1025 => 480,  1021 => 479,  1017 => 478,  1013 => 477,  1008 => 475,  1004 => 474,  999 => 472,  992 => 470,  988 => 469,  983 => 467,  977 => 463,  974 => 462,  971 => 461,  968 => 460,  962 => 459,  959 => 458,  956 => 457,  953 => 456,  948 => 455,  945 => 454,  943 => 453,  940 => 452,  935 => 451,  932 => 450,  929 => 449,  927 => 448,  924 => 447,  918 => 446,  915 => 445,  912 => 444,  909 => 443,  906 => 442,  903 => 441,  900 => 440,  897 => 439,  894 => 438,  891 => 437,  885 => 436,  882 => 435,  879 => 434,  876 => 433,  871 => 432,  868 => 431,  865 => 430,  862 => 429,  859 => 428,  856 => 427,  853 => 426,  850 => 425,  847 => 424,  844 => 423,  841 => 422,  835 => 421,  832 => 420,  829 => 419,  826 => 418,  821 => 417,  818 => 416,  815 => 415,  811 => 414,  808 => 413,  805 => 412,  802 => 411,  799 => 410,  794 => 409,  791 => 408,  788 => 407,  785 => 406,  782 => 405,  779 => 404,  776 => 403,  773 => 402,  771 => 401,  742 => 374,  737 => 370,  730 => 365,  722 => 359,  714 => 353,  712 => 352,  704 => 346,  702 => 345,  648 => 294,  642 => 290,  638 => 288,  635 => 285,  630 => 283,  627 => 282,  624 => 279,  622 => 278,  614 => 273,  611 => 272,  605 => 270,  599 => 268,  597 => 267,  588 => 261,  585 => 260,  579 => 258,  573 => 256,  571 => 255,  562 => 249,  558 => 248,  552 => 245,  546 => 241,  542 => 239,  539 => 236,  534 => 234,  531 => 233,  528 => 230,  526 => 229,  519 => 225,  516 => 224,  510 => 222,  504 => 220,  502 => 219,  494 => 214,  491 => 213,  485 => 211,  479 => 209,  477 => 208,  468 => 202,  465 => 201,  459 => 199,  453 => 197,  451 => 196,  442 => 190,  438 => 189,  417 => 171,  411 => 167,  407 => 165,  404 => 162,  399 => 160,  396 => 159,  393 => 156,  391 => 155,  380 => 148,  374 => 146,  368 => 144,  366 => 143,  358 => 138,  355 => 137,  349 => 135,  343 => 133,  341 => 132,  334 => 128,  331 => 127,  325 => 125,  319 => 123,  317 => 122,  309 => 117,  306 => 116,  300 => 114,  294 => 112,  292 => 111,  284 => 106,  281 => 105,  275 => 103,  269 => 101,  267 => 100,  258 => 94,  255 => 93,  249 => 91,  243 => 89,  241 => 88,  232 => 82,  228 => 81,  208 => 64,  201 => 60,  194 => 56,  190 => 55,  181 => 49,  177 => 48,  168 => 42,  164 => 41,  155 => 35,  151 => 34,  141 => 28,  135 => 26,  129 => 24,  127 => 23,  118 => 17,  114 => 16,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}

<div class=\"modal fade\" id=\"ModalClient\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">AJOUTER UN CLIENT</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    {{ form_start(formClient, {'attr': {'novalidate': 'novalidate'}}) }}
                    {{ form_row(formClient._token) }}
                    <table style=\"width: 100%\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
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
                                &raquo; Code client<span class=\"text-dangerr\">*</span><br>
                                {{ form_widget(formClient.code,{'attr':{'class':'form-control form-control-user'}}) }}
                                {{ form_errors(formClient.code) }}
                            </td>
                        </tr>
                        <tr>
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
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; C. Contribuable<br>
                                {{ form_widget(formClient.compte,{'attr':{'class':'form-control form-control-user'}}) }}
                                {{ form_errors(formClient.compte) }}
                            </td>
                        </tr>
                        <tr>
                            <td style=\"text-align: left;padding-top: 10px\">{{ form_widget(formClient.saveclient,{ 'label': 'Enregistrer',  'attr':{'class':'btn btn-primary'} }) }}</td>
                        </tr>
                        </tbody>
                    </table>
                    {{ form_end(formClient) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal show\" id=\"ModalChantier\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">AJOUTER UN CLIENT</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    {{ form_start(formChantier, {'attr': {'novalidate': 'novalidate'}}) }}
                    {{ form_row(formChantier._token) }}
                    <table style=\"width: 100%;text-align: left\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                {% if editP %}
                                    {{ form_widget(formChantier.client,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChantier.client,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChantier.chantier) }}</td>
                        </tr>
                        <tr>

                            <td class=\"text-pri bolderr\">
                                &raquo; Nom du chantier <span class=\"text-dangerr\">*</span><br>
                                {% if editP %}
                                    {{ form_widget(formChantier.chantier,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChantier.chantier,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChantier.chantier) }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Description<br>
                                {% if editP %}
                                    {{ form_widget(formChantier.description,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChantier.description,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChantier.description) }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Phase actuelle<br>
                                {% if editP %}
                                    {{ form_widget(formChantier.phase,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChantier.phase,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChantier.phase) }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">&raquo; Date de début<br>
                                {% if editP %}
                                    {{ form_widget(formChantier.ddebut,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% else %}
                                    {{ form_widget(formChantier.ddebut,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChantier.ddebut) }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Date de fin<br>
                                {% if editP %}
                                    {{ form_widget(formChantier.dfin,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% else %}
                                    {{ form_widget(formChantier.dfin,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}
                                {{ form_errors(formChantier.dfin) }}</td>
                        </tr>
                        <tr>

                        </tr>
                        <td align=\"left\"
                            style=\"padding-top: 10px\">
                            {% if editP %}
                                {{ form_widget(formChantier.savechantier,{
                                    'label': 'Modifier',
                                    'attr':{'class':'btn btn-danger'}
                                }) }}
                                <a href=\"{{ path('creerchantier') }}\" class=\"btn btn-success\">Annuler</a>
                            {% else %}
                                {{ form_widget(formChantier.savechantier,{
                                    'label': 'Enregistrer',
                                    'attr':{'class':'btn btn-primary'}
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
</div>
<div class=\"modal show\" id=\"ModalChef\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-info\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">CHEF PROJET</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    <h6><u>AJOUTER UN CHEF</u></h6>
                    {{ form_start(formChef, {'attr': {'novalidate': 'novalidate'}}) }}
                    {{ form_row(formChef._token) }}
                    <table style=\"width: 100%;text-align: left\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Nom & Prénoms <span class=\"text-dangerr\">*</span><br>
                                {% if editChef %}
                                    {{ form_widget(formChef.nom,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChef.nom,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChef.nom) }}</td>
                        </tr>
                        <tr>

                            <td class=\"text-pri bolderr\">
                                &raquo; Téléphone <br>
                                {% if editChef %}
                                    {{ form_widget(formChef.phone,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChef.phone,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChef.phone) }}</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; E-mail<br>
                                {% if editChef %}
                                    {{ form_widget(formChef.email,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formChef.email,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formChef.email) }}</td>
                        </tr>
                        <td align=\"left\"
                            style=\"padding-top: 10px\">
                            {% if editChef %}
                                {{ form_widget(formChef.savechef,{
                                    'label': 'Modifier',
                                    'attr':{'class':'btn btn-danger'}
                                }) }}
                                <a href=\"{{ path('creerchantier') }}\" class=\"btn btn-success\">Annuler</a>
                            {% else %}
                                {{ form_widget(formChef.savechef,{
                                    'label': 'Enregistrer',
                                    'attr':{'class':'btn btn-info'}
                                }) }}
                            {% endif %}
                        </td>
                        </tr>
                        </tbody>
                    </table>
                    {{ form_end(formChef) }}<br>

                    <h6><u>LIER UN CHEF À UN PROJET</u></h6><br>
                    {{ form_start(formLier, {'attr': {'novalidate': 'novalidate'}}) }}
                    {{ form_row(formLier._token) }}
                    <table style=\"width: 100%;text-align: left\">
                        <tbody>
                        <tr>
                            <td class=\"text-pri bolderr\">
                                &raquo; Chefs chantier <span class=\"text-dangerr\">*</span><br>
                                {% if editLier %}
                                    {{ form_widget(formLier.chef,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formLier.chef,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formLier.chef) }}</td>
                        </tr>
                        <tr>

                            <td class=\"text-pri bolderr\">
                                &raquo; chantiers <br>
                                {% if editLier %}
                                    {{ form_widget(formLier.chantier,{'attr':{'class':'form-control form-control-user text-danger'}}) }}
                                {% else %}
                                    {{ form_widget(formLier.chantier,{'attr':{'class':'form-control form-control-user'}}) }}
                                {% endif %}

                                {{ form_errors(formLier.chantier) }}</td>
                        </tr>
                        <tr>
                            <td align=\"left\"
                                style=\"padding-top: 10px\">
                                {% if editLier %}
                                    {{ form_widget(formLier.savelier,{
                                        'label': 'Modifier',
                                        'attr':{'class':'btn btn-danger'}
                                    }) }}
                                    <a href=\"{{ path('creerchantier') }}\" class=\"btn btn-success\">Annuler</a>
                                {% else %}
                                    {{ form_widget(formLier.savelier,{
                                        'label': 'Enregistrer',
                                        'attr':{'class':'btn btn-info'}
                                    }) }}
                                {% endif %}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    {{ form_end(formLier) }}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    table td {
        max-width: 100px !important;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-break: break-all;
        overflow: hidden;
        padding: 2px !important;
    }

    .modal {
        -webkit-border-radius: 20px !important;
        -moz-border-radius: 20px !important;
        border-radius: 20px !important;
    }

    .btn-label {
        position: relative;
        left: -10px;
        display: inline-block;
        padding: 0px 12px;
        background: rgba(0, 0, 0, 0.15);
        border-radius: 10px 0 0 10px;
    }

    .btn-labeled {
        padding-top: 0;
        padding-bottom: 0;
    }

    .btn {
        margin-bottom: 10px;
        border-radius: 10px
    }

    .div_chart {
        width: 100% !important;
    }
</style>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-12 col-lg-12\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-body bg-gray-400\" style=\"padding: 5px !important;\">
                    <div style=\"padding:15px 12px 0 12px\">
                    {% if estadmin %}
                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                data-toggle=\"modal\" data-target=\"#ModalClient\">
                            <span class=\"btn-label\"><i class=\"fa fa-plus-circle\"></i></span>AJOUTER UN
                            CLIENT
                        </button>

                        {% if editP %}
                            <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                    data-toggle=\"modal\" data-target=\"#ModalChantier\">
                                <span class=\"btn-label\"><i class=\"fa fa-minus-circle\"></i></span>MODIFIER
                                UN PROJET
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-labeled btn-success btn-sm\"
                                    data-toggle=\"modal\" data-target=\"#ModalChantier\">
                                <span class=\"btn-label\"><i class=\"fa fa-plus-circle\"></i></span>AJOUTER
                                UN PROJET
                            </button>
                        {% endif %}
                        <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                data-toggle=\"modal\" data-target=\"#ModalChef\">
                            <span class=\"btn-label\"><i class=\"fa fa-plus-circle\"></i></span> CHEF PROJET
                        </button>
                    {% endif %}
                </div>

                    <div id=\"accordion\" style=\"padding:10px 12px 0 12px\">
                        {# PROJETS EN COURS #}
                        <div style=\"margin-bottom: 5px\">
                            <div id=\"headingOne\">
                                <h5 class=\"mb-0\">
                                    <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                       data-target=\"#collapseOne\"
                                       aria-expanded=\"true\" aria-controls=\"collapseOne\" style=\"width: 100%;\">
                                        PROJETS EN COURS
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\"
                                 data-parent=\"#accordion\">
                                <div class=\"table-responsive shadow\">
                                    <table class=\"table-bordered shadow display nowrap pri\" id=\"dataPROJET\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>CLIENT / PROJETS</th>
                                            <th>COÛT</th>
                                            <th>CLIENT</th>
                                            <th>RÈGLEMENT</th>
                                            <th>SOLDE</th>
                                            <th>DÉPENSES</th>
                                            <th>MARGES EST.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set cout = 0 %}
                                        {% set check = 0 %}
                                        {% set ccheck = 0 %}
                                        {% set reglement = 0 %}
                                        {% set depense = 0 %}
                                        {% set tcout = 0 %}
                                        {% set treglement = 0 %}
                                        {% set tdepense = 0 %}
                                        {% for client in clients %}
                                            {% set vp = 0 %}
                                            {% set vr = 0 %}
                                            {% set dp = 0 %}

                                            {% for chantier in client.chantiers %}
                                                {% if not estmaster %}
                                                    {% if chantier.dobyuser == app.user or chantier.dobyuser == master %}
                                                        {% for corbe in corbeilles %}
                                                            {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                                {% set ccheck = 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if ccheck != 1 %}
                                                            {% if chantier.archiver != 'oui' %}
                                                                {% set vp = chantier.cout + vp %}
                                                                {% set vr = chantier.reglement + vr %}
                                                                {% set dp = chantier.depense + dp %}
                                                            {% endif %}
                                                        {% endif %}
                                                        {% set ccheck = 0 %}
                                                    {% endif %}
                                                {% else %}
                                                    {% for corbe in corbeilles %}
                                                        {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                            {% set ccheck = 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if ccheck != 1 %}
                                                        {% if chantier.archiver != 'oui' %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% set ccheck = 0 %}
                                                {% endif %}
                                            {% endfor %}

                                            {% set tcout = vp + tcout %}
                                            {% set treglement = vr + treglement %}
                                            {% set tdepense = dp + tdepense %}
                                            {% for chantier in client.chantiers %}

                                                {% if not estmaster %}
                                                    {% if chantier.dobyuser == app.user or chantier.dobyuser == master %}
                                                        {% for corbe in corbeilles %}
                                                            {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                                {% set check = 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if check != 1 %}
                                                            {% if chantier.archiver != 'oui' %}
                                                                {% if estadmin %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY\"
                                                                                   value=\"{{ chantier.id }}\"></td>
                                                                        <td>
                                                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                               title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                        </td>
                                                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                        <td> +
                                                                            <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                               title=\"{{ client.client }}\"
                                                                               class=\"text-white\">
                                                                                {{ client.client|upper }}</a></td>
                                                                        <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                {% else %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY\"
                                                                                   value=\"{{ chantier.id }}\"></td>
                                                                        <td>
                                                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                               title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                        </td>
                                                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                        <td> +
                                                                            <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                               title=\"{{ client.client }}\"
                                                                               class=\"text-white\">
                                                                                {{ client.client|upper }}</a></td>
                                                                        <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% endif %}
                                                        {% set check = 0 %}
                                                    {% endif %}
                                                {% else %}
                                                    {% for corbe in corbeilles %}
                                                        {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                            {% set check = 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if check != 1 %}
                                                        {% if chantier.archiver != 'oui' %}
                                                            {% if estadmin %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY\"
                                                                               value=\"{{ chantier.id }}\"></td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td> +
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.client }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.client|upper }}</a></td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% else %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY\"
                                                                               value=\"{{ chantier.id }}\"></td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td> +
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.client }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.client|upper }}</a></td>
                                                                    <
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% set check = 0 %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    {% if estadmin %}
                                        <div class=\"row p-3\">
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;COÛTS&nbsp;&nbsp;&nbsp;</span>
                                                <br><span class=\"text-pri h6\">{{ tcout|number_format(2,',',' ') }}&nbsp;TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;RÈGLEMENTS</span>
                                                <br><span class=\"text-pri h6\">{{ treglement|number_format(2,',',' ') }}&nbsp;TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;SOLDES</span>
                                                <br><span
                                                        class=\"text-pri h6\">{{ (tcout|number_format(2,'.','') -  treglement|number_format(2,'.',''))|number_format(2,',',' ') }} TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;DÉPENSES</span>
                                                <br><span class=\"text-pri h6\">{{ tdepense|number_format(2,',',' ') }}&nbsp;TTC</span>
                                            </div>
                                            <div class=\"col-sm shadow m-1 p-2 text-center\"
                                                 style=\"border: 1px solid #4e73df; border-radius: 20px\">
                                                <span class=\"text-secondary\">TOTAL&nbsp;DES&nbsp;MARGES&nbsp;EST.</span>
                                                <br><span
                                                        class=\"text-pri h6\">{{ (tcout|number_format(2,'.','') -  tdepense|number_format(2,'.',''))|number_format(2,',',' ') }}&nbsp;TTC</span>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        {# PROJETS ARCHIVÉS #}
                        <div class=\"b-4\" style=\"margin-bottom: 5px\">
                            <div id=\"headingDeu\">
                                <h5 class=\"mb-0\">
                                    <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                       data-target=\"#collapseDeu\"
                                       aria-expanded=\"true\" aria-controls=\"collapseDeu\" style=\"width: 100%;\">
                                        PROJETS ARCHIVÉS
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseDeu\" class=\"collapse\" aria-labelledby=\"headingDeu\"
                                 data-parent=\"#accordion\">
                                <div class=\"table-responsive shadow  bg-white\"
                                     style=\"margin-bottom: 50px; padding: 20px; margin-top: -20px\">
                                    <br>
                                    <table class=\"table-bordered shadow display nowrap\" id=\"dataPROJET2\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-gray-600\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>CLIENT / PROJETS</th>
                                            <th>VALEUR</th>
                                            <th>CLIENT</th>
                                            <th>RÈGLEMENT</th>
                                            <th>SOLDE</th>
                                            <th>DÉPENSES</th>
                                            <th>MARGES EST.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set cout = 0 %}
                                        {% set check2 = 0 %}
                                        {% set ccheck2 = 0 %}
                                        {% set reglement = 0 %}
                                        {% set depense = 0 %}

                                        {% set acout = 0 %}
                                        {% set areglement = 0 %}
                                        {% set adepense = 0 %}

                                        {% for client in clients %}
                                            {% set vp = 0 %}
                                            {% set vr = 0 %}
                                            {% set dp = 0 %}

                                            {% for chantier in client.chantiers %}
                                                {% if not estmaster %}
                                                    {% if chantier.dobyuser == app.user or chantier.dobyuser == master %}
                                                        {% for corbe in corbeilles %}
                                                            {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                                {% set ccheck2 = 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if ccheck2 != 1 %}
                                                            {% if chantier.archiver == 'oui' %}
                                                                {% set vp = chantier.cout + vp %}
                                                                {% set vr = chantier.reglement + vr %}
                                                                {% set dp = chantier.depense + dp %}
                                                            {% endif %}
                                                        {% endif %}
                                                        {% set ccheck2 = 0 %}
                                                    {% endif %}
                                                {% else %}
                                                    {% for corbe in corbeilles %}
                                                        {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                            {% set ccheck2 = 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if ccheck2 != 1 %}
                                                        {% if chantier.archiver == 'oui' %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% set ccheck2 = 0 %}
                                                {% endif %}
                                            {% endfor %}


                                            {% set acout = vp + acout %}
                                            {% set areglement = vr + areglement %}
                                            {% set adepense = dp + adepense %}

                                            {% for chantier in client.chantiers %}
                                                {% if not estmaster %}
                                                    {% if chantier.dobyuser == app.user or chantier.dobyuser == master %}
                                                        {% for corbe in corbeilles %}
                                                            {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                                {% set check2 = 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if check2 != 1 %}
                                                            {% if chantier.archiver == 'oui' %}
                                                                {% if estadmin %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY2\"
                                                                                   value=\"{{ chantier.id }}\"></td>
                                                                        <td>
                                                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                               title=\"{{ chantier.chantier }}\">{{ chantier.chantier }}</a>
                                                                        </td>
                                                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                        <td> +
                                                                            <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                               title=\"{{ client.client }}\"
                                                                               class=\"text-white\">
                                                                                {{ client.client|upper }}</a></td>
                                                                        <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>

                                                                    </tr>
                                                                {% else %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROJY2\"
                                                                                   value=\"{{ chantier.id }}\"></td>
                                                                        <td>
                                                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                               title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                        </td>
                                                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                        <td> +
                                                                            <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                               title=\"{{ client.client }}\"
                                                                               class=\"text-white\">
                                                                                {{ client.client|upper }}</a></td>
                                                                        <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>


                                                                    </tr>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% endif %}
                                                        {% set check2 = 0 %}
                                                    {% endif %}
                                                {% else %}
                                                    {% for corbe in corbeilles %}
                                                        {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                            {% set check2 = 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if check2 != 1 %}
                                                        {% if chantier.archiver == 'oui' %}
                                                            {% if estadmin %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY2\"
                                                                               value=\"{{ chantier.id }}\"></td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.chantier }}\">{{ chantier.chantier }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td> +
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.client }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.client|upper }}</a></td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>

                                                                </tr>
                                                            {% else %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROJY2\"
                                                                               value=\"{{ chantier.id }}\"></td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td> +
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.client }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.client|upper }}</a></td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>


                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% set check2 = 0 %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    {% if estadmin %}
                                        <table class=\"table-bordered d reduire\">
                                            <tr class=\"bg-pri text-white\">
                                                <td colspan=\"2\" class=\"text-center\">TOTAUX PROJETS ARCHIVÉS</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">VALEUR</td>
                                                <td class=\"text-right\">{{ acout|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">RÈGLEMENT</td>
                                                <td class=\"text-right\">{{ areglement|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">SOLDE</td>
                                                <td class=\"text-right\">{{ (acout|number_format(2,'.','') -  areglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">DÉPENSES</td>
                                                <td class=\"text-right\">{{ adepense|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">MARGES EST.</td>
                                                <td class=\"text-right\">{{ (acout|number_format(2,'.','') -  adepense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                            </tr>
                                        </table>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        {# TOUS LES PROJETS #}
                        <div class=\"b-4\" style=\"margin-bottom: 5px\">
                            <div id=\"headingTroi\">
                                <h5 class=\"mb-0\">
                                    <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                       data-target=\"#collapseTroi\"
                                       aria-expanded=\"true\" aria-controls=\"collapseTroi\" style=\"width: 100%;\">
                                        PROJETS EN COURS
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseTroi\" class=\"collapse\" aria-labelledby=\"headingTroi\"
                                 data-parent=\"#accordion\">
                                <div class=\"table-responsive shadow bg-white\"
                                     style=\"margin-bottom: 50px; padding: 20px; margin-top: -20px\">
                                    <br>
                                    <table class=\"table-bordered shadow display nowrap\" width=\"100%\" id=\"dataPROJET3\">
                                        <thead>
                                        <tr class=\"text-gray-600\">
                                            <th>CLIENT / PROJETS</th>
                                            <th>VALEUR</th>
                                            <th>CLIENT</th>
                                            <th>RÈGLEMENT</th>
                                            <th>SOLDE</th>
                                            <th>DÉPENSES</th>
                                            <th>MARGES EST.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set cout = 0 %}
                                        {% set check3 = 0 %}
                                        {% set ccheck3 = 0 %}
                                        {% set reglement = 0 %}
                                        {% set depense = 0 %}

                                        {% set bcout = 0 %}
                                        {% set breglement = 0 %}
                                        {% set bdepense = 0 %}

                                        {% for client in clients %}
                                            {% set vp = 0 %}
                                            {% set vr = 0 %}
                                            {% set dp = 0 %}
                                            {% for chantier in client.chantiers %}
                                                {% if not estmaster %}
                                                    {% if chantier.dobyuser == app.user or chantier.dobyuser == master %}
                                                        {% for corbe in corbeilles %}
                                                            {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                                {% set ccheck3 = 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if ccheck3 != 1 %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                        {% set ccheck3 = 0 %}
                                                    {% endif %}
                                                {% else %}
                                                    {% for corbe in corbeilles %}
                                                        {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                            {% set ccheck3 = 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if ccheck3 != 1 %}
                                                        {% set vp = chantier.cout + vp %}
                                                        {% set vr = chantier.reglement + vr %}
                                                        {% set dp = chantier.depense + dp %}
                                                    {% endif %}
                                                    {% set ccheck3 = 0 %}
                                                {% endif %}
                                            {% endfor %}

                                            {% set bcout = vp + bcout %}
                                            {% set breglement = vr + breglement %}
                                            {% set bdepense = dp + bdepense %}

                                            {% for chantier in client.chantiers %}
                                                {% if not estmaster %}
                                                    {% if chantier.dobyuser == app.user or chantier.dobyuser == master %}
                                                        {% for corbe in corbeilles %}
                                                            {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                                {% set check3 = 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if check3 != 1 %}
                                                            {% if estadmin %}
                                                                <tr>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.chantier }}\">{{ chantier.chantier }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td> +
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.client }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.client }}</a></td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% else %}
                                                                <tr>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td> +
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.client }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.client|upper }}</a></td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                        {% set check3 = 0 %}
                                                    {% endif %}
                                                {% else %}
                                                    {% for corbe in corbeilles %}
                                                        {% if corbe.designation == chantier.idchantier and corbe.type == '1' %}
                                                            {% set check3 = 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if check3 != 1 %}
                                                        {% if estadmin %}
                                                            <tr>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.chantier }}\">{{ chantier.chantier }}</a>
                                                                </td>
                                                                <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                <td> + <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                          title=\"{{ client.client }}\"
                                                                          class=\"text-white\">
                                                                        {{ client.client|upper }}</a></td>
                                                                <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                            </tr>
                                                        {% else %}
                                                            <tr>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.chantier }}\">{{ chantier.chantier|upper }}</a>
                                                                </td>
                                                                <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                <td> + <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                          title=\"{{ client.client }}\"
                                                                          class=\"text-white\">
                                                                        {{ client.client }}</a></td>
                                                                <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    {% if estadmin %}
                                        <table class=\"table-bordered d reduire\" style=\"float: right\">
                                            <tr class=\"bg-pri text-white\">
                                                <td colspan=\"2\" class=\"text-center\">TOTAUX PROJETS</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">VALEUR</td>
                                                <td class=\"text-right\">{{ bcout|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">RÈGLEMENT</td>
                                                <td class=\"text-right\">{{ breglement|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">SOLDE</td>
                                                <td class=\"text-right\">{{ (bcout|number_format(2,'.','') -  breglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">DÉPENSES</td>
                                                <td class=\"text-right\">{{ bdepense|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"slategrey\">MARGES EST.</td>
                                                <td class=\"text-right\">{{ (bcout|number_format(2,'.','') -  bdepense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                            </tr>
                                        </table>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start of weather widget -->
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h5 class=\"text-pri\">LISTE DES CLIENTS</h5>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"table-responsive \">
                                <h6>PC: PROJETS EN COURS</h6>
                                <h6>PA: PROJETS ARCHIVÉS</h6>
                                <table class=\"table-bordered  display nowrap\" width=\"100%\" id=\"dataLISTECLIENTS\">
                                    <thead>
                                    <tr class=\"text-gray-600 text-center\">
                                        <th style=\"width: 10px !important;\"></th>
                                        <th>CLIENT</th>
                                        <th>PC</th>
                                        <th>PA</th>
                                        <th>TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    {% for client in clients %}
                                    {% set pc = 0 %}
                                    {% set pa = 0 %}
                                    {% for chantier in client.chantiers %}
                                        {% if chantier.archiver != 'oui' %}
                                            {% set pc = pc + 1 %}
                                        {% else %}
                                            {% set pa = pa + 1  %}
                                        {% endif %}
                                    {% endfor %}
                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                   class=\"CLYE\"
                                                   value=\"{{ client.id }}\"></td>
                                        <td>
                                            <a href=\"{{ path('client', {'id': client.id}) }}\" class=\"text-pri\"
                                               title=\"{{ client.client|upper }}\">{{ client.client|upper }}</a>
                                        </td>
                                        <td class=\"text-center\">{{ pc }}</td>
                                        <td class=\"text-center\">{{ pa }}</td>
                                        <td class=\"text-center text-info bolderrer\">{{ pa + pc }}</td>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h4 class=\"text-pri\">Activités récentes</h4>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <div class=\"dashboard-widget-content\">

                                    <ul class=\"list-unstyled timeline widget\">
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"block\">
                                                <div class=\"block_content\">
                                                    <h2 class=\"title\">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                                    <div class=\"byline\">
                                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                                    </div>
                                                    <p class=\"excerpt\">Film festivals used to be do-or-die moments for
                                                        movie makers. They were where you met the producers that could
                                                        fund your project, and if the buyers liked your flick, they’d
                                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start to do list -->
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h4 class=\"text-pri\">Liste des tâches</h4>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">

                                <div class=\"\">
                                    <ul class=\"to_do\">
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Schedule meeting with new client
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Create email address for new intern
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Create email address for new intern
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "content/creerprojet.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\creerprojet.html.twig");
    }
}
