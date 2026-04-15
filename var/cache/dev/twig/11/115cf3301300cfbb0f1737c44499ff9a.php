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

/* registration/register.html.twig */
class __TwigTemplate_90607c51dc5ac3f452c40af9e633d879 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
    <meta name=\"keywords\"
          content=\"suivi, chantiers, gestion de chantiers, suivi de chantiers, projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">

    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 26
        yield "
</head>
<body class=\"bg-gradient-primary\">
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12 col-md-10\">
            <h2 class=\"tet text-white text-center\" style=\"margin-top: 65px\">BIENVENUE SUR CARLINBLEU</h2>
            <h4 class=\"text-center\" style=\"color:#efd807;\"> Votre application de suivi des chantiers </h4>

            <section class=\"features-icons\" style=\"padding: 0 !important; margin-top: 40px\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 bg-light text-center p-0 hidere\" style=\"border: 2px solid #4e73df\">
                            <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cpter.png"), "html", null, true);
        yield "\" style=\"width: 100%;height: 100%\">
                        </div>
                        <div class=\"col-lg-7 bg-light\" style=\"border: 2px solid #4e73df; padding: 20px !important;\">
                            <h4 class=\"text-center text-primary\">Créez votre compte</h4>
                            <h5 class=\"text-center\">Profitez de 3 mois d'essai gratuit ! </h5>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "                                <h6 class=\"text-danger text-center\">
                                    ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                </h6>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
                            ";
        // line 50
        if (array_key_exists("errors", $context)) {
            // line 51
            yield "
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 53
                yield "                                    <h6 class=\"text-danger text-center\">
                                        ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
                yield "
                                    </h6>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                            ";
        }
        // line 58
        yield "
                            ";
        // line 59
        if (array_key_exists("rr", $context)) {
            // line 60
            yield "                                <h6 class=\"text-danger text-center\">
                                    ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rr"]) || array_key_exists("rr", $context) ? $context["rr"] : (function () { throw new RuntimeError('Variable "rr" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "
                                </h6>
                            ";
        }
        // line 64
        yield "
                            <hr style=\"width: 50%;\">

                            ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), 'form_start', ["attr" => ["id" => "addUserForm"]]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "_token", [], "any", false, false, false, 68), 'row');
        yield "
                            <div class=\"row clearfix\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Nom<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Prénoms<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "prenoms", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Entreprise<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "societe", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Pays<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "pays", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Pays"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Email<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "username", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Contact<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "contact", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Mot de passe<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "password", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control form-control-user", "minlength" => "8"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Confirmer<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "confirm_passe", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control form-control-user", "minlength" => "8"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 style=\"font-size: 11px; margin-top: 20px\">En cliquant sur \"CRÉER VOTRE COMPTE\", vous acceptez notre <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        yield "\" style=\"font-size: 12px\">Politique de confidentialité</a>.
                                Vous recevrez peut-être des notifications par mail de notre part et vous pouvez à tout moment nous répondre.</h6>
                            <div class=\"text-center\" style=\"margin-top: 20px\">
                                <input type=\"button\" id=\"addUser\" value=\"CRÉER VOTRE COMPTE\" class=\"btn btn-primary btn-block\">
                                <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadccount\">
                            </div>
                            ";
        // line 148
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), 'form_end');
        yield "


                            <br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
";
        // line 159
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 162
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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

        // line 160
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
        return "registration/register.html.twig";
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
        return array (  347 => 160,  334 => 159,  320 => 24,  307 => 23,  294 => 162,  292 => 159,  278 => 148,  272 => 145,  265 => 141,  257 => 136,  246 => 128,  233 => 118,  222 => 110,  209 => 100,  198 => 92,  185 => 82,  174 => 74,  165 => 68,  161 => 67,  156 => 64,  150 => 61,  147 => 60,  145 => 59,  142 => 58,  139 => 57,  130 => 54,  127 => 53,  123 => 52,  120 => 51,  118 => 50,  115 => 49,  106 => 46,  103 => 45,  99 => 44,  91 => 39,  76 => 26,  74 => 23,  50 => 1,);
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
    <meta name=\"keywords\"
          content=\"suivi, chantiers, gestion de chantiers, suivi de chantiers, projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
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
            <h4 class=\"text-center\" style=\"color:#efd807;\"> Votre application de suivi des chantiers </h4>

            <section class=\"features-icons\" style=\"padding: 0 !important; margin-top: 40px\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 bg-light text-center p-0 hidere\" style=\"border: 2px solid #4e73df\">
                            <img src=\"{{ asset('img/cpter.png') }}\" style=\"width: 100%;height: 100%\">
                        </div>
                        <div class=\"col-lg-7 bg-light\" style=\"border: 2px solid #4e73df; padding: 20px !important;\">
                            <h4 class=\"text-center text-primary\">Créez votre compte</h4>
                            <h5 class=\"text-center\">Profitez de 3 mois d'essai gratuit ! </h5>
                            {% for message in app.flashes('success') %}
                                <h6 class=\"text-danger text-center\">
                                    {{ message }}
                                </h6>
                            {% endfor %}

                            {% if errors is defined %}

                                {% for error in errors %}
                                    <h6 class=\"text-danger text-center\">
                                        {{ error.message }}
                                    </h6>
                                {% endfor %}
                            {% endif %}

                            {% if rr is defined %}
                                <h6 class=\"text-danger text-center\">
                                    {{ rr }}
                                </h6>
                            {% endif %}

                            <hr style=\"width: 50%;\">

                            {{ form_start(registrationForm, {'attr': {'id': 'addUserForm'}}) }}
                            {{ form_row(registrationForm._token) }}
                            <div class=\"row clearfix\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Nom<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.nom,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Prénoms<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.prenoms,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Entreprise<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.societe,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Pays<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.pays,{'attr':{'class':'form-control form-control-user','placeholder':'Pays'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Email<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.username,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Contact<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.contact,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Mot de passe<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.password,{'attr':{'class':'form-control form-control-user','minlength':'8'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\" style=\"font-size: 13px\">Confirmer<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(registrationForm.confirm_passe,{'attr':{'class':'form-control form-control-user', 'minlength':'8'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 style=\"font-size: 11px; margin-top: 20px\">En cliquant sur \"CRÉER VOTRE COMPTE\", vous acceptez notre <a href=\"{{ path('privacy') }}\" style=\"font-size: 12px\">Politique de confidentialité</a>.
                                Vous recevrez peut-être des notifications par mail de notre part et vous pouvez à tout moment nous répondre.</h6>
                            <div class=\"text-center\" style=\"margin-top: 20px\">
                                <input type=\"button\" id=\"addUser\" value=\"CRÉER VOTRE COMPTE\" class=\"btn btn-primary btn-block\">
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadccount\">
                            </div>
                            {{ form_end(registrationForm) }}


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
", "registration/register.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\registration\\register.html.twig");
    }
}
