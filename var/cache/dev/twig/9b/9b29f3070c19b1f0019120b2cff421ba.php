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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_2588dad911f7780ab26959856ef22190 extends Template
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

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        yield "<html>
<head>
    <title>Confirmation de votre compte</title>
</head>
<body>
<div style=\"margin: 100px auto; width: 600px\">

    <h1 style=\"text-align: center; color: #4e73df; font-weight: bold\">CARLINBLEU</h1>
    <h2>Confirmation de votre compte</h2>
    <p>
        Veuillez confirmer votre compte e-mail en cliquant sur le lien suivant : <br><br>
        <a href=\"";
        // line 12
        yield (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 12, $this->source); })());
        yield "\">Confirmer votre compte</a>.<br><br>
        Ce lien expire dans  ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 13, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 13, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        yield ".
    </p>
    <p>
        Merci !
    </p>
</div>

</body>
</html>


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
        return "registration/confirmation_email.html.twig";
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
        return array (  65 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html>
<head>
    <title>Confirmation de votre compte</title>
</head>
<body>
<div style=\"margin: 100px auto; width: 600px\">

    <h1 style=\"text-align: center; color: #4e73df; font-weight: bold\">CARLINBLEU</h1>
    <h2>Confirmation de votre compte</h2>
    <p>
        Veuillez confirmer votre compte e-mail en cliquant sur le lien suivant : <br><br>
        <a href=\"{{ signedUrl|raw }}\">Confirmer votre compte</a>.<br><br>
        Ce lien expire dans  {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
    </p>
    <p>
        Merci !
    </p>
</div>

</body>
</html>


", "registration/confirmation_email.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\registration\\confirmation_email.html.twig");
    }
}
