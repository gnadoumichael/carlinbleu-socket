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

/* security/main.html.twig */
class __TwigTemplate_248cea63aa90610a2b61c81e30770b7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/main.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles, matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mdb.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/waves.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-material-datetimepicker.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all-themes.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <style>
        h6 {
            font-size: 13px !important;
        }

        a {
            color: #3d67d0;
            font-weight: bold
        }

        @media (min-width: 992px) {
            .modal-lg, .modal-xl {
                max-width: 1100px !important;
            }
        }
    </style>

</head>
<body style=\"background-color:#4e73df\">

<div class=\"container\">
    <div class=\"row justify-content-center\" style=\"margin-top:60px\">
        <div class=\"col-xl-6 col-lg-6 col-md-6\">
            <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTIONNAIRE DE CHANTIERS</h3>
            <h5 class=\"text-center\" style=\"color:#efd807; \">
                BIENVENUE ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "prenoms", [], "any", false, false, false, 57)), "html", null, true);
        yield " </h5>
            <div class=\"row\" style=\"margin-top:50px\">
                <div class=\"col-md-6 text-center\" style=\"padding:5px; font-size: 16px; font-weight: bold; color:#88ccbc\">- OPTION COMPTABILITÉ - <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/compta.jpg"), "html", null, true);
        yield "\" style=\"width: 100%\"/></a></div>
                <div class=\"col-md-6 text-center\" style=\"padding:5px; font-size: 16px; font-weight: bold; color:#88ccbc\">- GESTION TECHNIQUE -  <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcomes");
        yield "\"> <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/techni.jpg"), "html", null, true);
        yield "\" style=\"width: 100%\"/></a></div>
                <div class=\"col-md-6 text-center\" style=\"padding:40px 5px;  font-size: 16px; font-weight: bold; color:#88ccbc\">- GESTION COMMERCIALE - <a href=\"#\"><img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/commer.png"), "html", null, true);
        yield "\" style=\"width: 100%\"/></a></div>
                <div class=\"col-md-6 text-center\" style=\"padding:40px 5px; font-size: 16px; font-weight: bold; color:#88ccbc\">- SHOWROOM | VENTE  - <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/showe.jpg"), "html", null, true);
        yield "\" style=\"width: 100%\"/></a></div>
            </div>
        </div>
    </div>
</div>
</body>
<script src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
        crossorigin=\"anonymous\"></script>
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
        return "security/main.html.twig";
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
        return array (  153 => 62,  149 => 61,  143 => 60,  137 => 59,  130 => 57,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles, matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"{{ asset('css/mdb.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/waves.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/bootstrap-material-datetimepicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/bootstrap-datepicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/select2.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/all-themes.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"/>
    <style>
        h6 {
            font-size: 13px !important;
        }

        a {
            color: #3d67d0;
            font-weight: bold
        }

        @media (min-width: 992px) {
            .modal-lg, .modal-xl {
                max-width: 1100px !important;
            }
        }
    </style>

</head>
<body style=\"background-color:#4e73df\">

<div class=\"container\">
    <div class=\"row justify-content-center\" style=\"margin-top:60px\">
        <div class=\"col-xl-6 col-lg-6 col-md-6\">
            <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTIONNAIRE DE CHANTIERS</h3>
            <h5 class=\"text-center\" style=\"color:#efd807; \">
                BIENVENUE {{ app.user.nom|upper }} {{ app.user.prenoms|upper }} </h5>
            <div class=\"row\" style=\"margin-top:50px\">
                <div class=\"col-md-6 text-center\" style=\"padding:5px; font-size: 16px; font-weight: bold; color:#88ccbc\">- OPTION COMPTABILITÉ - <a href=\"{{ path('welcome') }}\"><img src=\"{{ asset('img/compta.jpg') }}\" style=\"width: 100%\"/></a></div>
                <div class=\"col-md-6 text-center\" style=\"padding:5px; font-size: 16px; font-weight: bold; color:#88ccbc\">- GESTION TECHNIQUE -  <a href=\"{{ path('welcomes') }}\"> <img src=\"{{ asset('img/techni.jpg') }}\" style=\"width: 100%\"/></a></div>
                <div class=\"col-md-6 text-center\" style=\"padding:40px 5px;  font-size: 16px; font-weight: bold; color:#88ccbc\">- GESTION COMMERCIALE - <a href=\"#\"><img src=\"{{ asset('img/commer.png') }}\" style=\"width: 100%\"/></a></div>
                <div class=\"col-md-6 text-center\" style=\"padding:40px 5px; font-size: 16px; font-weight: bold; color:#88ccbc\">- SHOWROOM | VENTE  - <a href=\"{{ path('content') }}\"><img src=\"{{ asset('img/showe.jpg') }}\" style=\"width: 100%\"/></a></div>
            </div>
        </div>
    </div>
</div>
</body>
<script src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
        crossorigin=\"anonymous\"></script>
</body>
</html>
", "security/main.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\security\\main.html.twig");
    }
}
