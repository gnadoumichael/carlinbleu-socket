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

/* @CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig */
class __TwigTemplate_716934491b3778f0d38e72a13189e7b5 extends Template
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

        $this->parent = false;

        // line 1
        $_trait_0 = $this->load("@CraueTwigExtensions/ChangeLanguage/changeLanguage_blocks.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@CraueTwigExtensions/ChangeLanguage/changeLanguage_blocks.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig"));

        // line 2
        yield "
<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\ChangeLanguageExtension']->getAvailableLocales());
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 5
            yield "\t\t<li>";
            // line 6
            $context["craue_language_iscurrent"] = ($context["locale"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6));
            // line 7
            if ((($tmp = (isset($context["craue_language_iscurrent"]) || array_key_exists("craue_language_iscurrent", $context) ? $context["craue_language_iscurrent"] : (function () { throw new RuntimeError('Variable "craue_language_iscurrent" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield from                 $this->unwrap()->yieldBlock("craue_language_link_text", $context, $blocks);
            } else {
                // line 10
                yield "<a href=\"";
                yield from                 $this->unwrap()->yieldBlock("craue_language_link_target", $context, $blocks);
                yield "\">";
                // line 11
                yield from                 $this->unwrap()->yieldBlock("craue_language_link_text", $context, $blocks);
                // line 12
                yield "</a>";
            }
            // line 14
            yield "</li>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig";
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
        return array (  114 => 16,  99 => 14,  96 => 12,  94 => 11,  90 => 10,  87 => 8,  85 => 7,  83 => 6,  81 => 5,  64 => 4,  60 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% use '@CraueTwigExtensions/ChangeLanguage/changeLanguage_blocks.html.twig' %}

<ul>
\t{% for locale in craue_availableLocales() %}
\t\t<li>
\t\t\t{%- set craue_language_iscurrent = locale == app.request.locale -%}
\t\t\t{%- if craue_language_iscurrent -%}
\t\t\t\t{{- block('craue_language_link_text') -}}
\t\t\t{%- else -%}
\t\t\t\t<a href=\"{{ block('craue_language_link_target') }}\">
\t\t\t\t\t{{- block('craue_language_link_text') -}}
\t\t\t\t</a>
\t\t\t{%- endif -%}
\t\t</li>
\t{% endfor %}
</ul>
", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig", "C:\\wamp64\\www\\carlinbleu\\vendor\\craue\\twigextensions-bundle\\Resources\\views\\ChangeLanguage\\changeLanguage_content.html.twig");
    }
}
