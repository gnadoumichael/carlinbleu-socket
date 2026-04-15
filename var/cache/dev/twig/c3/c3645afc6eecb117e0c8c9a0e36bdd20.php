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

/* security/compte.html.twig */
class __TwigTemplate_2a5cd3ab9e54ca0470dd63faf2febec8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/compte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/compte.html.twig"));

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
            <h4 class=\"text-center\" style=\"color:#efd807;\"> VOTRE APPLICATION DE SUIVI DES CHANTIERS</h4>

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
                            <h5 class=\"text-center\">Profitez d'un mois d'essai gratuit ! </h5>
                            <hr style=\"width: 50%;\">

                            ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 46, $this->source); })()), 'form_start', ["attr" => ["id" => "addUserForm"]]);
        yield "
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 47, $this->source); })()), "_token", [], "any", false, false, false, 47), 'row');
        yield "
                            <div class=\"row clearfix\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Nom<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Prénoms<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 61, $this->source); })()), "prenoms", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Raison sociale<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 71, $this->source); })()), "societe", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Pays<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 79, $this->source); })()), "pays", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Pays"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Email<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 89, $this->source); })()), "username", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Contact<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 97, $this->source); })()), "contact", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Mot de passe<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 107, $this->source); })()), "password", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control form-control-user", "minlength" => "8"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Confirmer le mot de passe<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 115, $this->source); })()), "confirm_passe", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control form-control-user", "minlength" => "8"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-12 text-center\">
                                    ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 123, $this->source); })()), "save", [], "any", false, false, false, 123), 'widget', ["label" => "CRÉER VOTRE COMPTE"]);
        yield "
                                </div>
                                <br>
                                <p>En cliquant sur S’inscrire, vous acceptez nos Conditions générales, notre Politique de confidentialité.
                                    Vous recevrez peut-être des notifications par mail de notre part.</p>
                            </div>
                            ";
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 129, $this->source); })()), 'form_end');
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
        // line 139
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 142
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

    // line 139
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

        // line 140
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
        return "security/compte.html.twig";
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
        return array (  285 => 140,  272 => 139,  258 => 24,  245 => 23,  232 => 142,  230 => 139,  217 => 129,  208 => 123,  197 => 115,  186 => 107,  173 => 97,  162 => 89,  149 => 79,  138 => 71,  125 => 61,  114 => 53,  105 => 47,  101 => 46,  91 => 39,  76 => 26,  74 => 23,  50 => 1,);
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
            <h4 class=\"text-center\" style=\"color:#efd807;\"> VOTRE APPLICATION DE SUIVI DES CHANTIERS</h4>

            <section class=\"features-icons\" style=\"padding: 0 !important; margin-top: 40px\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 bg-light text-center p-0 hidere\" style=\"border: 2px solid #4e73df\">
                                <img src=\"{{ asset('img/cpter.png') }}\" style=\"width: 100%;height: 100%\">
                        </div>
                        <div class=\"col-lg-7 bg-light\" style=\"border: 2px solid #4e73df; padding: 20px !important;\">
                            <h4 class=\"text-center text-primary\">Créez votre compte</h4>
                            <h5 class=\"text-center\">Profitez d'un mois d'essai gratuit ! </h5>
                            <hr style=\"width: 50%;\">

                            {{ form_start(formCompte, {'attr': {'id': 'addUserForm'}}) }}
                            {{ form_row(formCompte._token) }}
                            <div class=\"row clearfix\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Nom<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.nom,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Prénoms<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.prenoms,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Raison sociale<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.societe,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Pays<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.pays,{'attr':{'class':'form-control form-control-user','placeholder':'Pays'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Email<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.username,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Contact<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.contact,{'attr':{'class':'form-control form-control-user'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Mot de passe<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.password,{'attr':{'class':'form-control form-control-user','minlength':'8'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <h6 class=\"text-primary\">Confirmer le mot de passe<span class=\"text-danger\">*</span></h6>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCompte.confirm_passe,{'attr':{'class':'form-control form-control-user', 'minlength':'8'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\" style=\"margin-top: 5px\">
                                <div class=\"col-sm-12 text-center\">
                                    {{ form_widget(formCompte.save,{ 'label': 'CRÉER VOTRE COMPTE' }) }}
                                </div>
                                <br>
                                <p>En cliquant sur S’inscrire, vous acceptez nos Conditions générales, notre Politique de confidentialité.
                                    Vous recevrez peut-être des notifications par mail de notre part.</p>
                            </div>
                            {{ form_end(formCompte) }}

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
", "security/compte.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\security\\compte.html.twig");
    }
}
