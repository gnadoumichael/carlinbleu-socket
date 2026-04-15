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

/* content/message.html.twig */
class __TwigTemplate_25d80ec6aa4285819222a14fadddf35e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/message.html.twig"));

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
                <div class=\"col-md-5\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            MESSAGE
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 30px\">
                            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "messageForm"]]);
        yield "
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("sendMessage"), "html", null, true);
        yield "\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">Envoyé à:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 22
        if ((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "receiver", [], "any", false, false, false, 23), 'widget', ["required" => "required", "attr" => ["class" => "form-control text-danger"]]);
            yield "
                                            ";
        } else {
            // line 25
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "receiver", [], "any", false, false, false, 25), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
            yield "
                                            ";
        }
        // line 27
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">CC:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 36
        if ((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "copies", [], "any", false, false, false, 37), 'widget', ["required" => "", "attr" => ["class" => "form-control text-danger"]]);
            yield "
                                            ";
        } else {
            // line 39
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "copies", [], "any", false, false, false, 39), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                            ";
        }
        // line 41
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">Objet:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 50
        if ((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "objet", [], "any", false, false, false, 51), 'widget', ["required" => "required", "attr" => ["class" => "form-control text-danger"]]);
            yield "
                                            ";
        } else {
            // line 53
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "objet", [], "any", false, false, false, 53), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
            yield "
                                            ";
        }
        // line 55
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">Message:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 64
        if ((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "contenu", [], "any", false, false, false, 65), 'widget', ["id" => "message", "attr" => ["class" => "form-control text-danger"]]);
            yield "
                                            ";
        } else {
            // line 67
            yield "                                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "contenu", [], "any", false, false, false, 67), 'widget', ["id" => "message", "attr" => ["class" => "form-control"]]);
            yield "
                                            ";
        }
        // line 69
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table style=\"width:100%; text-align: left\">
                                <tr>
                                    <td>
                                        <h5 class=\"col-pink bolo600\"><u>DOCUMENTS ATTACHÉS</u></h5>
                                        <table>
                                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["docs"]) || array_key_exists("docs", $context) ? $context["docs"] : (function () { throw new RuntimeError('Variable "docs" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 79
            yield "                                                <tr>
                                                    <td><a href=\"\"><i class=\"fa fa-paperclip text-pri\"
                                                                      aria-hidden=\"true\"
                                                                      title=\"Détacher\"></i></a></td>

                                                    ";
            // line 84
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 84) == "devis")) {
                // line 85
                yield "                                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "donner", [], "any", false, false, false, 85), "html", null, true);
                yield " |
                                                            <a href=\"#\"
                                                               onclick=\"shasha(";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "numero", [], "any", false, false, false, 87), "html", null, true);
                yield ",'imprimdevis');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deldoc", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 90), "type" => "null"]), "html", null, true);
                yield "\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    ";
            }
            // line 95
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 95) == "decompte")) {
                // line 96
                yield "                                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "donner", [], "any", false, false, false, 96), "html", null, true);
                yield " |
                                                            <a href=\"#\"
                                                               onclick=\"shasha(";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "numero", [], "any", false, false, false, 98), "html", null, true);
                yield ",'imprimdecompte');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deldoc", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 101), "type" => "null"]), "html", null, true);
                yield "\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    ";
            }
            // line 106
            yield "
                                                    ";
            // line 107
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 107) == "bon")) {
                // line 108
                yield "                                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "donner", [], "any", false, false, false, 108), "html", null, true);
                yield " |
                                                            <a href=\"#\" onclick=\"shasha(";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "numero", [], "any", false, false, false, 109), "html", null, true);
                yield ",'imprimbon');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deldoc", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 112), "type" => "null"]), "html", null, true);
                yield "\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    ";
            }
            // line 117
            yield "
                                                    ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 118) == "caisse")) {
                // line 119
                yield "                                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "donner", [], "any", false, false, false, 119), "html", null, true);
                yield " |
                                                            <a href=\"#\"
                                                               onclick=\"shasha(";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "numero", [], "any", false, false, false, 121), "html", null, true);
                yield ",'imprimcaisse');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deldoc", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 124), "type" => "null"]), "html", null, true);
                yield "\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    ";
            }
            // line 129
            yield "
                                                    ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "type", [], "any", false, false, false, 130) == "facture")) {
                // line 131
                yield "                                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "donner", [], "any", false, false, false, 131), "html", null, true);
                yield " |
                                                            <a href=\"#\"
                                                               onclick=\"shasha(";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "numero", [], "any", false, false, false, 133), "html", null, true);
                yield ",'imprimfacture');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deldoc", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 136), "type" => "null"]), "html", null, true);
                yield "\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    ";
            }
            // line 141
            yield "                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['doc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "                                        </table>
                                    </td>
                                </tr>
                                ";
        // line 146
        if (((isset($context["idmessage"]) || array_key_exists("idmessage", $context) ? $context["idmessage"] : (function () { throw new RuntimeError('Variable "idmessage" does not exist.', 146, $this->source); })()) == null)) {
            // line 147
            yield "                                <tr>
                                    <td style=\"text-align: left;padding-top: 10px\">
                                        <input type=\"submit\" id=\"sendMessage\" value=\"ENVOYER LE MESSAGE\"
                                               class=\"btn btn-link waves-effect text-white bg-pri\">
                                    </td>
                                </tr>
                                ";
        }
        // line 154
        yield "                            </table>
                            ";
        // line 155
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), 'form_end');
        yield "
                            ";
        // line 156
        if (((isset($context["idmessage"]) || array_key_exists("idmessage", $context) ? $context["idmessage"] : (function () { throw new RuntimeError('Variable "idmessage" does not exist.', 156, $this->source); })()) != null)) {
            // line 157
            yield "                                <h5 class=\"text-center\" style=\"margin-top: 50px\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\">RETOUR</a></h5>
                            ";
        }
        // line 159
        yield "                        </div>

                    </div>
                </div>
                <div class=\"col-md-7\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            MESSAGES ENVOYÉS
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 30px; overflow-x: scroll\">
                            <table class=\"table-striped table-bordered display nowrap\"
                                   style=\"width: 100%\" id=\"dataMail\">
                                <thead>
                                <tr>
                                    <th class=\"mw30\"></th>
                                    <th style=\"width: 80px !important;\">DATE</th>
                                    <th>À</th>
                                    <th>OBJET</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 181
            yield "                                    <tr>
                                        <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\" class=\"MESSAS\" value=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 182), "html", null, true);
            yield "\"></td>
                                        <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 183), "d.m.Y"), "html", null, true);
            yield "</td>
                                        <td><a href=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editmessage", ["idmessage" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "receiver", [], "any", false, false, false, 184), "html", null, true);
            yield "</a></td>
                                        <td class=\"mw300\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "objet", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'message');
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
        return "content/message.html.twig";
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
        return array (  445 => 188,  436 => 185,  430 => 184,  426 => 183,  422 => 182,  419 => 181,  415 => 180,  392 => 159,  386 => 157,  384 => 156,  380 => 155,  377 => 154,  368 => 147,  366 => 146,  361 => 143,  354 => 141,  346 => 136,  340 => 133,  334 => 131,  332 => 130,  329 => 129,  321 => 124,  315 => 121,  309 => 119,  307 => 118,  304 => 117,  296 => 112,  290 => 109,  285 => 108,  283 => 107,  280 => 106,  272 => 101,  266 => 98,  260 => 96,  257 => 95,  249 => 90,  243 => 87,  237 => 85,  235 => 84,  228 => 79,  224 => 78,  213 => 69,  207 => 67,  201 => 65,  199 => 64,  188 => 55,  182 => 53,  176 => 51,  174 => 50,  163 => 41,  157 => 39,  151 => 37,  149 => 36,  138 => 27,  132 => 25,  126 => 23,  124 => 22,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-5\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            MESSAGE
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 30px\">
                            {{ form_start(form, {'enctype':'multipart/form-data','attr': {'id': 'messageForm'}}) }}
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('sendMessage') }}\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">Envoyé à:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {% if editMode %}
                                                {{ form_widget(form.receiver,{'required':'required','attr':{'class':'form-control text-danger'}}) }}
                                            {% else %}
                                                {{ form_widget(form.receiver,{'required':'required','attr':{'class':'form-control'}}) }}
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">CC:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {% if editMode %}
                                                {{ form_widget(form.copies,{'required':'','attr':{'class':'form-control text-danger'}}) }}
                                            {% else %}
                                                {{ form_widget(form.copies,{'required':'','attr':{'class':'form-control'}}) }}
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">Objet:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {% if editMode %}
                                                {{ form_widget(form.objet,{'required':'required','attr':{'class':'form-control text-danger'}}) }}
                                            {% else %}
                                                {{ form_widget(form.objet,{'required':'required','attr':{'class':'form-control'}}) }}
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo600\">Message:</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {% if editMode %}
                                                {{ form_widget(form.contenu,{'id':'message','attr':{'class':'form-control text-danger'}}) }}
                                            {% else %}
                                                {{ form_widget(form.contenu,{'id':'message','attr':{'class':'form-control'}}) }}
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table style=\"width:100%; text-align: left\">
                                <tr>
                                    <td>
                                        <h5 class=\"col-pink bolo600\"><u>DOCUMENTS ATTACHÉS</u></h5>
                                        <table>
                                            {% for doc in docs %}
                                                <tr>
                                                    <td><a href=\"\"><i class=\"fa fa-paperclip text-pri\"
                                                                      aria-hidden=\"true\"
                                                                      title=\"Détacher\"></i></a></td>

                                                    {% if doc.type == 'devis' %}
                                                        <td>{{ doc.donner }} |
                                                            <a href=\"#\"
                                                               onclick=\"shasha({{ doc.numero }},'imprimdevis');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"{{ path('deldoc', {'id': doc.id, 'type': 'null'}) }}\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    {% endif %}
                                                    {% if doc.type == 'decompte' %}
                                                        <td>{{ doc.donner }} |
                                                            <a href=\"#\"
                                                               onclick=\"shasha({{ doc.numero }},'imprimdecompte');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"{{ path('deldoc', {'id': doc.id, 'type': 'null'}) }}\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    {% endif %}

                                                    {% if doc.type == 'bon' %}
                                                        <td>{{ doc.donner }} |
                                                            <a href=\"#\" onclick=\"shasha({{ doc.numero }},'imprimbon');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"{{ path('deldoc', {'id': doc.id, 'type': 'null'}) }}\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    {% endif %}

                                                    {% if doc.type == 'caisse' %}
                                                        <td>{{ doc.donner }} |
                                                            <a href=\"#\"
                                                               onclick=\"shasha({{ doc.numero }},'imprimcaisse');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"{{ path('deldoc', {'id': doc.id, 'type': 'null'}) }}\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    {% endif %}

                                                    {% if doc.type == 'facture' %}
                                                        <td>{{ doc.donner }} |
                                                            <a href=\"#\"
                                                               onclick=\"shasha({{ doc.numero }},'imprimfacture');\"><i
                                                                        class=\"fa fa-eye col-green\"
                                                                        aria-hidden=\"true\"></i></a></a>|
                                                            <a href=\"{{ path('deldoc', {'id': doc.id, 'type': 'null'}) }}\"><i
                                                                        class=\"fa fa-trash col-pink\"
                                                                        aria-hidden=\"true\"></i></a>
                                                        </td>
                                                    {% endif %}
                                                </tr>
                                            {% endfor %}
                                        </table>
                                    </td>
                                </tr>
                                {% if idmessage == null %}
                                <tr>
                                    <td style=\"text-align: left;padding-top: 10px\">
                                        <input type=\"submit\" id=\"sendMessage\" value=\"ENVOYER LE MESSAGE\"
                                               class=\"btn btn-link waves-effect text-white bg-pri\">
                                    </td>
                                </tr>
                                {% endif %}
                            </table>
                            {{ form_end(form) }}
                            {% if idmessage != null %}
                                <h5 class=\"text-center\" style=\"margin-top: 50px\"><a href=\"{{ path('message') }}\">RETOUR</a></h5>
                            {% endif %}
                        </div>

                    </div>
                </div>
                <div class=\"col-md-7\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            MESSAGES ENVOYÉS
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 30px; overflow-x: scroll\">
                            <table class=\"table-striped table-bordered display nowrap\"
                                   style=\"width: 100%\" id=\"dataMail\">
                                <thead>
                                <tr>
                                    <th class=\"mw30\"></th>
                                    <th style=\"width: 80px !important;\">DATE</th>
                                    <th>À</th>
                                    <th>OBJET</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for message in messages %}
                                    <tr>
                                        <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\" class=\"MESSAS\" value=\"{{ message.id }}\"></td>
                                        <td>{{ message.date|date('d.m.Y') }}</td>
                                        <td><a href=\"{{ path('editmessage', {'idmessage': message.id}) }}\">{{ message.receiver }}</a></td>
                                        <td class=\"mw300\">{{ message.objet }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'message');
    </script>
{% endblock %}
", "content/message.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\message.html.twig");
    }
}
