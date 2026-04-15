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

/* security/connexion.html.twig */
class __TwigTemplate_def7ae63c82866b1a4813118c6bf1527 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connexion.html.twig"));

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
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"suivi, chantiers, gestion de chantiers, suivi de chantiers, projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "
</head>
<body class=\"bg-gradient-primary\">

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-8 col-lg-12 col-md-8\">
            <h2 class=\"tet text-center text-white\" style=\"margin-top: 50px\">BIENVENUE SUR CARLINBLEU</h2>
            <h4 class=\"text-center\" style=\"color: #efd807;\"> Suivi de chantiers</h4>
            <h5 class=\"text-center m-t-20 text-white\">Sécurité - Confidentialité - Intégrité</h5>
            <div class=\"bg-white p-3\" style=\"width: 320px; margin: 40px auto\" >
                <div class=\"text-center\">
                    <h4 class=\"text-primary font-weight-bold mb-4\">CONNEXION</h4>
                    ";
        // line 43
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                        <h6 class=\"text-danger mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", [], "any", false, false, false, 44), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
            yield "</h6>
                    ";
        }
        // line 46
        yield "                </div>

                <form action=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" id=\"addUserForm\" method=\"post\">

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group m-t--5\">
                                <div class=\"input-group mb-2\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i
                                                    class=\"fa fa fa-user text-primary\"></i></span>
                                    </div>
                                    <input type=\"email\" class=\"form-control\" aria-label=\"Email\"
                                           aria-describedby=\"basic-addon1\" placeholder=\"Email\" required name=\"_username\"
                                           value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group m-t--5\">
                                <div class=\"input-group mb-2\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i
                                                    class=\"fa fa fa-lock text-primary\"></i></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" id=\"showpassword\" name=\"_password\"
                                           placeholder=\"Mot de passe\" minlength=\"6\" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addUser\" value=\"Se connecter\" class=\"btn btn-primary btn-block\">
                        <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadUser\">
                    </div>
                </form>

                <div class=\"text-center\" style=\"padding-top: 20px; font-size: 12px\">
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetpassword");
        yield "\" style=\"font-size: medium\">Mot de
                        passe oublié</a> <br>
                    <!-- <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" style=\"font-size: medium\">Créer mon compte</a> <br> -->
                </div>


            </div>
        </div>
    </div>
</div>

";
        // line 102
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 105
        yield "

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
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

        // line 103
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
        return "security/connexion.html.twig";
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
        return array (  236 => 103,  223 => 102,  209 => 28,  196 => 27,  181 => 105,  179 => 102,  167 => 93,  162 => 91,  153 => 85,  146 => 81,  122 => 60,  107 => 48,  103 => 46,  97 => 44,  95 => 43,  80 => 30,  78 => 27,  50 => 1,);
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
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"suivi, chantiers, gestion de chantiers, suivi de chantiers, projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    {% block stylesheets %}
        {{ encore_entry_link_tags('admin') }}
    {% endblock %}

</head>
<body class=\"bg-gradient-primary\">

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-8 col-lg-12 col-md-8\">
            <h2 class=\"tet text-center text-white\" style=\"margin-top: 50px\">BIENVENUE SUR CARLINBLEU</h2>
            <h4 class=\"text-center\" style=\"color: #efd807;\"> Suivi de chantiers</h4>
            <h5 class=\"text-center m-t-20 text-white\">Sécurité - Confidentialité - Intégrité</h5>
            <div class=\"bg-white p-3\" style=\"width: 320px; margin: 40px auto\" >
                <div class=\"text-center\">
                    <h4 class=\"text-primary font-weight-bold mb-4\">CONNEXION</h4>
                    {% if error %}
                        <h6 class=\"text-danger mb-4\">{{ error.messageKey|trans(error.messageData, 'security') }}</h6>
                    {% endif %}
                </div>

                <form action=\"{{ path('login') }}\" id=\"addUserForm\" method=\"post\">

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group m-t--5\">
                                <div class=\"input-group mb-2\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i
                                                    class=\"fa fa fa-user text-primary\"></i></span>
                                    </div>
                                    <input type=\"email\" class=\"form-control\" aria-label=\"Email\"
                                           aria-describedby=\"basic-addon1\" placeholder=\"Email\" required name=\"_username\"
                                           value=\"{{ last_username }}\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group m-t--5\">
                                <div class=\"input-group mb-2\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i
                                                    class=\"fa fa fa-lock text-primary\"></i></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" id=\"showpassword\" name=\"_password\"
                                           placeholder=\"Mot de passe\" minlength=\"6\" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\">
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addUser\" value=\"Se connecter\" class=\"btn btn-primary btn-block\">
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadUser\">
                    </div>
                </form>

                <div class=\"text-center\" style=\"padding-top: 20px; font-size: 12px\">
                    <a href=\"{{ path('resetpassword') }}\" style=\"font-size: medium\">Mot de
                        passe oublié</a> <br>
                    <!-- <a href=\"{{ path('app_register') }}\" style=\"font-size: medium\">Créer mon compte</a> <br> -->
                </div>


            </div>
        </div>
    </div>
</div>

{% block javascripts %}
    {{ encore_entry_script_tags('admin') }}
{% endblock %}


</body>
</html>
", "security/connexion.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\security\\connexion.html.twig");
    }
}
