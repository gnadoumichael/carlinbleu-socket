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

/* content/stock.html.twig */
class __TwigTemplate_788c7d3332f35fe9fb064705177840b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/stock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/stock.html.twig"));

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
        yield "        <div class=\"container-fluid\">
            <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-7\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-white\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "designation", [], "any", false, false, false, 12)), "html", null, true);
        yield "</h6>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-area\">
                                    <canvas id=\"myAreaChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-5\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                <div class=\"dropdown no-arrow\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                         aria-labelledby=\"dropdownMenuLink\">
                                        <div class=\"dropdown-header\">Dropdown Header:</div>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-pie pt-4 pb-2\">
                                    <canvas id=\"myPieChart\"></canvas>
                                </div>
                                <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
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
        return "content/stock.html.twig";
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
        return array (  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block title %}{{ title }}{% endblock %}

    {% block body %}
        <div class=\"container-fluid\">
            <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-7\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-white\">{{ article.designation|upper}}</h6>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-area\">
                                    <canvas id=\"myAreaChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-5\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                <div class=\"dropdown no-arrow\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                         aria-labelledby=\"dropdownMenuLink\">
                                        <div class=\"dropdown-header\">Dropdown Header:</div>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-pie pt-4 pb-2\">
                                    <canvas id=\"myPieChart\"></canvas>
                                </div>
                                <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    {% endblock %}


", "content/stock.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\stock.html.twig");
    }
}
