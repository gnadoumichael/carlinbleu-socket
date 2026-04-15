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

/* registration/felicitations.html.twig */
class __TwigTemplate_b959c1258bb37c0cc6641cb863af0cf6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/felicitations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/felicitations.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\"
          CONTENT=\"private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0\">
    <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\" />
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\" content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">

    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "
</head>
<body class=\"bg-gradient-primary\">
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12 col-md-10\">
            <h2 class=\"tet text-white text-center\" style=\"margin-top: 65px\">BIENVENUE SUR CARLINBLEU</h2>
            <h4 class=\"text-center\" style=\"color:#efd807;\"> Chantiers & Showrooms </h4>

            <section class=\"features-icons\" style=\"padding: 0 !important; margin-top: 40px\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 bg-light text-center p-0 hidere\" style=\"border: 2px solid #4e73df\">
                            <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cpter.png"), "html", null, true);
        yield "\" style=\"width: 100%;height: 100%\">
                        </div>
                        <div class=\"col-lg-7 bg-light\" style=\"border: 2px solid #4e73df; padding: 20px !important;\">
                            <h4 class=\"text-center text-danger\" style=\"margin-top: 70px\">Félicitations ! un mail de confirmation vous a été envoyé pour valider votre compte.</h4>
                            <h5 class=\"text-center\">Profitez de 3 mois d'essai gratuit ! </h5>

                            <hr style=\"width: 50%;\">

                            <h4 class=\"text-center\"><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"btn btn-primary\">Se connecter</a></h4>


                            <br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
";
        // line 57
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 60
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin");
        yield "
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
        return "registration/felicitations.html.twig";
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
        return array (  170 => 58,  157 => 57,  143 => 23,  130 => 22,  117 => 60,  115 => 57,  101 => 46,  90 => 38,  75 => 25,  73 => 22,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\"
          CONTENT=\"private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0\">
    <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\" />
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\" content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">

    {% block stylesheets %}
        {{ encore_entry_link_tags('admin') }}
    {% endblock %}

</head>
<body class=\"bg-gradient-primary\">
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12 col-md-10\">
            <h2 class=\"tet text-white text-center\" style=\"margin-top: 65px\">BIENVENUE SUR CARLINBLEU</h2>
            <h4 class=\"text-center\" style=\"color:#efd807;\"> Chantiers & Showrooms </h4>

            <section class=\"features-icons\" style=\"padding: 0 !important; margin-top: 40px\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 bg-light text-center p-0 hidere\" style=\"border: 2px solid #4e73df\">
                            <img src=\"{{ asset('img/cpter.png') }}\" style=\"width: 100%;height: 100%\">
                        </div>
                        <div class=\"col-lg-7 bg-light\" style=\"border: 2px solid #4e73df; padding: 20px !important;\">
                            <h4 class=\"text-center text-danger\" style=\"margin-top: 70px\">Félicitations ! un mail de confirmation vous a été envoyé pour valider votre compte.</h4>
                            <h5 class=\"text-center\">Profitez de 3 mois d'essai gratuit ! </h5>

                            <hr style=\"width: 50%;\">

                            <h4 class=\"text-center\"><a href=\"{{ path('login') }}\" class=\"btn btn-primary\">Se connecter</a></h4>


                            <br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
{% block javascripts %}
    {{ encore_entry_script_tags('admin') }}
{% endblock %}
</body>
</html>
", "registration/felicitations.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\registration\\felicitations.html.twig");
    }
}
