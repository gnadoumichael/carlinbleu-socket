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

/* @Twig/Exception/error401.html.twig */
class __TwigTemplate_5ae788b61844818898d672e679435aa1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error401.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error401.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\"
          CONTENT=\"private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0\">
    <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\"
          content=\"Devis, Chantier, Bon de commande, Bon de caisse, articles, Planning, Gestionnaire de stock, Facture\">
    <meta name=\"author\" content=\"carlinbleu.com\">
    <link rel=\"shortcut icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Icon-96.png"), "html", null, true);
        yield "\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\">


</head>

<body>
<style>

    #notfound {
        position: relative;
        height: 100vh;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 560px;
        width: 100%;
        padding-left: 160px;
        line-height: 1.1;
    }

    .notfound .notfound-404 {
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        width: 140px;
        height: 140px;
        background-image: url('/img/emoji.png');
        background-size: cover;
    }

    .notfound .notfound-404:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(2.4);
        -ms-transform: scale(2.4);
        transform: scale(2.4);
        border-radius: 50%;
        background-color: #f2f5f8;
        z-index: -1;
    }

    .notfound h1 {
        font-family: 'Nunito', sans-serif;
        font-size: 65px;
        font-weight: 700;
        margin-top: 0px;
        margin-bottom: 10px;
        color: #151723;
        text-transform: uppercase;
    }

    .notfound h2 {
        font-family: 'Nunito', sans-serif;
        font-size: 21px;
        font-weight: 400;
        margin: 0;
        text-transform: uppercase;
        color: #151723;
    }

    .notfound p {
        font-family: 'Nunito', sans-serif;
        color: #999fa5;
        font-weight: 400;
    }

    .notfound a {
        font-family: 'Nunito', sans-serif;
        display: inline-block;
        font-weight: 700;
        border-radius: 40px;
        text-decoration: none;
        color: #388dbc;
    }

    @media only screen and (max-width: 767px) {
        .notfound .notfound-404 {
            width: 110px;
            height: 110px;
        }

        .notfound {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 110px;
        }
    }
</style>
<div id=\"notfound\">
    <div class=\"notfound\">
        <div class=\"notfound-404\"></div>
        <h1 style=\"color: #2196F3; text-transform: lowercase\">carlinbleu.com</h1>
        <h1>401</h1>
        <h2>Oops! accès refusé</h2>
        <p>Désolé, Une authentification est nécessaire pour accéder à la ressource.</p>
        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">Retour à la page d'accueil</a>
    </div>
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
        return "@Twig/Exception/error401.html.twig";
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
        return array (  177 => 125,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\"
          CONTENT=\"private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0\">
    <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\"
          content=\"Devis, Chantier, Bon de commande, Bon de caisse, articles, Planning, Gestionnaire de stock, Facture\">
    <meta name=\"author\" content=\"carlinbleu.com\">
    <link rel=\"shortcut icon\" href=\"{{ asset('img/Icon-96.png') }}\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\">


</head>

<body>
<style>

    #notfound {
        position: relative;
        height: 100vh;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 560px;
        width: 100%;
        padding-left: 160px;
        line-height: 1.1;
    }

    .notfound .notfound-404 {
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        width: 140px;
        height: 140px;
        background-image: url('/img/emoji.png');
        background-size: cover;
    }

    .notfound .notfound-404:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(2.4);
        -ms-transform: scale(2.4);
        transform: scale(2.4);
        border-radius: 50%;
        background-color: #f2f5f8;
        z-index: -1;
    }

    .notfound h1 {
        font-family: 'Nunito', sans-serif;
        font-size: 65px;
        font-weight: 700;
        margin-top: 0px;
        margin-bottom: 10px;
        color: #151723;
        text-transform: uppercase;
    }

    .notfound h2 {
        font-family: 'Nunito', sans-serif;
        font-size: 21px;
        font-weight: 400;
        margin: 0;
        text-transform: uppercase;
        color: #151723;
    }

    .notfound p {
        font-family: 'Nunito', sans-serif;
        color: #999fa5;
        font-weight: 400;
    }

    .notfound a {
        font-family: 'Nunito', sans-serif;
        display: inline-block;
        font-weight: 700;
        border-radius: 40px;
        text-decoration: none;
        color: #388dbc;
    }

    @media only screen and (max-width: 767px) {
        .notfound .notfound-404 {
            width: 110px;
            height: 110px;
        }

        .notfound {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 110px;
        }
    }
</style>
<div id=\"notfound\">
    <div class=\"notfound\">
        <div class=\"notfound-404\"></div>
        <h1 style=\"color: #2196F3; text-transform: lowercase\">carlinbleu.com</h1>
        <h1>401</h1>
        <h2>Oops! accès refusé</h2>
        <p>Désolé, Une authentification est nécessaire pour accéder à la ressource.</p>
        <a href=\"{{ path('logout') }}\">Retour à la page d'accueil</a>
    </div>
</div>

</body>

</html>
", "@Twig/Exception/error401.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\bundles\\TwigBundle\\Exception\\error401.html.twig");
    }
}
