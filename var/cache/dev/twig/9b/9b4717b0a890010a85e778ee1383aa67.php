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

/* content/catalogue.html.twig */
class __TwigTemplate_9e0e5d3f47eda83a3fb440cb3644719b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/catalogue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/catalogue.html.twig"));

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
        yield "    <section class=\"content m-t--25\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix m-t-100\">
                <div class=\"col-sm-12 text-center\">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["met"]) || array_key_exists("met", $context) ? $context["met"] : (function () { throw new RuntimeError('Variable "met" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 9
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue", ["idpays" => 1, "metier" => CoreExtension::getAttribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\" class=\"btn bg-blue text-center waves-effect\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["me"], "nom", [], "any", false, false, false, 9), "html", null, true);
            yield "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['me'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "                </div>
            </div>
            <hr>
            <div class=\"row clearfix\">
                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                    <div class=\"card\" style=\"padding: 20px; min-height: 800px\">
                        <h4 class=\"col-pink\" style=\"font-weight: bold\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metier"]) || array_key_exists("metier", $context) ? $context["metier"] : (function () { throw new RuntimeError('Variable "metier" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17)), "html", null, true);
        yield "</h4>
                    </div>

                </div>



                <div class=\"col-xs-12 col-md-4 col-sm-4\">
                        <div class=\"card bg-blue-grey\" style=\"padding: 10px;\">
                    <h4 style=\"font-weight: bold\">ENTREPRISES AGRÉÉES</h4><br>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "presentation", [], "any", false, false, false, 28) == "oui")) {
                // line 29
                yield "                    <div class=\"card profile-card\" style=\"margin-top: 70px\">

                        <div class=\"profile-body\">
                            <div class=\"image-area\">
                                <img src=\"https://carlinbleu.com/eagles/public/gallery/";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "logo", [], "any", false, false, false, 33), "html", null, true);
                yield "\"  style=\"width: 96px; height: 96px\" />
                            </div>
                            <div class=\"content-area\">
                                <h3 class=\"col-pink bolo600\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "societe", [], "any", false, false, false, 36)), "html", null, true);
                yield "</h3>
                                <p>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 37)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenoms", [], "any", false, false, false, 37)), "html", null, true);
                yield "</p>
                                <p>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "contact", [], "any", false, false, false, 38), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"profile-footer\">
                            <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-lg waves-effect btn-block\">DÉCOUVRIR</a>
                        </div>
                    </div>
                    ";
            }
            // line 46
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                    </div>
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
        return "content/catalogue.html.twig";
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
        return array (  191 => 47,  185 => 46,  178 => 42,  171 => 38,  165 => 37,  161 => 36,  155 => 33,  149 => 29,  146 => 28,  142 => 27,  129 => 17,  121 => 11,  110 => 9,  106 => 8,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}
    <section class=\"content m-t--25\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix m-t-100\">
                <div class=\"col-sm-12 text-center\">
                    {% for me in met %}
                        <a href=\"{{ path('catalogue', {'idpays': 1 , 'metier': me.id}) }}\" class=\"btn bg-blue text-center waves-effect\">{{ me.nom }}</a>
                    {% endfor %}
                </div>
            </div>
            <hr>
            <div class=\"row clearfix\">
                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                    <div class=\"card\" style=\"padding: 20px; min-height: 800px\">
                        <h4 class=\"col-pink\" style=\"font-weight: bold\">{{ metier.nom|upper }}</h4>
                    </div>

                </div>



                <div class=\"col-xs-12 col-md-4 col-sm-4\">
                        <div class=\"card bg-blue-grey\" style=\"padding: 10px;\">
                    <h4 style=\"font-weight: bold\">ENTREPRISES AGRÉÉES</h4><br>
                    {% for user in users %}
                    {% if user.presentation == 'oui' %}
                    <div class=\"card profile-card\" style=\"margin-top: 70px\">

                        <div class=\"profile-body\">
                            <div class=\"image-area\">
                                <img src=\"https://carlinbleu.com/eagles/public/gallery/{{ user.logo }}\"  style=\"width: 96px; height: 96px\" />
                            </div>
                            <div class=\"content-area\">
                                <h3 class=\"col-pink bolo600\">{{ user.societe|upper }}</h3>
                                <p>{{ user.nom|upper }} {{ user.prenoms|upper }}</p>
                                <p>{{ user.contact }}</p>
                            </div>
                        </div>
                        <div class=\"profile-footer\">
                            <a href=\"{{ path('page',{'id':user.id}) }}\" class=\"btn btn-primary btn-lg waves-effect btn-block\">DÉCOUVRIR</a>
                        </div>
                    </div>
                    {% endif %}
                    {% endfor %}
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}

", "content/catalogue.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\catalogue.html.twig");
    }
}
