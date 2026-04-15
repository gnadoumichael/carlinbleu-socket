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

/* content/varticle.html.twig */
class __TwigTemplate_3a648cc4519fd1ae9d5d880d02b70842 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/varticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/varticle.html.twig"));

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

        yield "Hello VarticleController!";
        
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
        yield "<div class=\"container-fluid\">
    <div class=\"row\">

        <div class=\"col-xl-3 col-md-3 col-lg-3\">
            <div class=\"card shadow mb-4 bg-white\"
                                                     style=\" padding:15px\">
                <h5>DESCRIPTION DE L'ARTICLES</h5>
            </div>
            <div class=\"card shadow mb-4\">
                <div class=\"card-body\">
                <img src=\"";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "info1", [], "any", false, false, false, 16) == "oui")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("articles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "link1", [], "any", false, false, false, 16))), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/not.png"), "html", null, true);
        }
        yield "\" align=\"left\"
                     style=\"width:100%;border: 1px solid #000\">
                </div>
            </div>
        </div>
        <div class=\"col-xl-7 col-md-7 col-lg-7\" >
            <div class=\"card shadow mb-4\" style=\"height:auto; padding: 15px\">
                <h3>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "designation", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3>
                <h4 class=\"text-danger\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "pu", [], "any", false, false, false, 24), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "monnaies", [], "any", false, false, false, 24), "code", [], "any", false, false, false, 24), "html", null, true);
        yield "</h4>
                <table class=\"table-striped border\" style=\"font-size: 1rem\">
                    <tr>
                        <td>Code Article</td>
                        <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "colisage", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Marque</td>
                        <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "marque", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Référence</td>
                        <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "reference", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Conditionnement de Vente</td>
                        <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "unite", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Colisage</td>
                        <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "colisage", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Longueur</td>
                        <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 48, $this->source); })()), "longueur", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
                    </tr>

                    <tr>
                        <td>Largeur</td>
                        <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "largeur", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Poids</td>
                        <td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 57, $this->source); })()), "poids", [], "any", false, false, false, 57), "html", null, true);
        yield "</td>
                    </tr>

                    <tr>
                        <td>Volume</td>
                        <td>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 62, $this->source); })()), "volume", [], "any", false, false, false, 62), "html", null, true);
        yield "</td>
                    </tr>

                    <tr>
                        <td>Tension</td>
                        <td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "tension", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Temperature</td>
                        <td>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 71, $this->source); })()), "temperature", [], "any", false, false, false, 71), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Puissance</td>
                        <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 75, $this->source); })()), "puissance", [], "any", false, false, false, 75), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Mise en oeuvre</td>
                        <td>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 79, $this->source); })()), "colisage", [], "any", false, false, false, 79), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Epaisseur</td>
                        <td>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 83, $this->source); })()), "epaisseur", [], "any", false, false, false, 83), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>Hauteur</td>
                        <td>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "hauteur", [], "any", false, false, false, 87), "html", null, true);
        yield "</td>
                    </tr>
                </table>
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
        return "content/varticle.html.twig";
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
        return array (  240 => 87,  233 => 83,  226 => 79,  219 => 75,  212 => 71,  205 => 67,  197 => 62,  189 => 57,  182 => 53,  174 => 48,  167 => 44,  160 => 40,  153 => 36,  146 => 32,  139 => 28,  130 => 24,  126 => 23,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello VarticleController!{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">

        <div class=\"col-xl-3 col-md-3 col-lg-3\">
            <div class=\"card shadow mb-4 bg-white\"
                                                     style=\" padding:15px\">
                <h5>DESCRIPTION DE L'ARTICLES</h5>
            </div>
            <div class=\"card shadow mb-4\">
                <div class=\"card-body\">
                <img src=\"{% if article.info1 == 'oui' %}{{ asset('articles/'~article.link1) }}{% else %}{{ asset('gallery/not.png') }}{% endif %}\" align=\"left\"
                     style=\"width:100%;border: 1px solid #000\">
                </div>
            </div>
        </div>
        <div class=\"col-xl-7 col-md-7 col-lg-7\" >
            <div class=\"card shadow mb-4\" style=\"height:auto; padding: 15px\">
                <h3>{{ article.designation }}</h3>
                <h4 class=\"text-danger\">{{ article.pu }} {{ article.monnaies.code }}</h4>
                <table class=\"table-striped border\" style=\"font-size: 1rem\">
                    <tr>
                        <td>Code Article</td>
                        <td>{{ article.colisage }}</td>
                    </tr>
                    <tr>
                        <td>Marque</td>
                        <td>{{ article.marque }}</td>
                    </tr>
                    <tr>
                        <td>Référence</td>
                        <td>{{ article.reference }}</td>
                    </tr>
                    <tr>
                        <td>Conditionnement de Vente</td>
                        <td>{{ article.unite }}</td>
                    </tr>
                    <tr>
                        <td>Colisage</td>
                        <td>{{ article.colisage }}</td>
                    </tr>
                    <tr>
                        <td>Longueur</td>
                        <td>{{ article.longueur }}</td>
                    </tr>

                    <tr>
                        <td>Largeur</td>
                        <td>{{ article.largeur }}</td>
                    </tr>
                    <tr>
                        <td>Poids</td>
                        <td>{{ article.poids }}</td>
                    </tr>

                    <tr>
                        <td>Volume</td>
                        <td>{{ article.volume }}</td>
                    </tr>

                    <tr>
                        <td>Tension</td>
                        <td>{{ article.tension}}</td>
                    </tr>
                    <tr>
                        <td>Temperature</td>
                        <td>{{ article.temperature }}</td>
                    </tr>
                    <tr>
                        <td>Puissance</td>
                        <td>{{ article.puissance}}</td>
                    </tr>
                    <tr>
                        <td>Mise en oeuvre</td>
                        <td>{{ article.colisage }}</td>
                    </tr>
                    <tr>
                        <td>Epaisseur</td>
                        <td>{{ article.epaisseur }}</td>
                    </tr>
                    <tr>
                        <td>Hauteur</td>
                        <td>{{ article.hauteur }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "content/varticle.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\varticle.html.twig");
    }
}
