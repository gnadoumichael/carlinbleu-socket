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

/* content/livraison.html.twig */
class __TwigTemplate_3e313bfbd50c136a8e4e5fcba7a6851a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/livraison.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/livraison.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "
    <style>

        #borde td, th {
            border: solid #D3D3D3;
            border-width: 1px 1px 1px 1px;
            padding: 5px;
        }

        #borda td, th {
            border: solid #D3D3D3;
            border-width: 1px 1px 1px 1px;
            padding: 5px;
        }


        td.bord {
            border: 0 solid #FFFFFF !important;
            padding: 5px;
            text-align: right;
            font-weight: 600;
        }

        td.bordz {
            border: 0 solid #FFFFFF !important;
            padding: 0 0 0 5px !important;
        }


        page {
            position: relative;
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        header,
        footer {
            position: absolute;
            left: 0;
            right: 0;
            padding-right: 1.5cm;
            padding-left: 1.5cm;
        }

        header:after {
            content: \"Header\";
        }

        header {
            top: 0;
            padding-top: 5mm;
            padding-bottom: 3mm;
        }

        footer {
            bottom: 0;
            color: #000;
            padding-top: 3mm;
            padding-bottom: 5mm;
        }

        @media print {
            body, page {
                margin: 0;
            }

            header,
            footer {
                position: fixed;
                left: 0;
                right: 0;
                padding-right: 1.5cm;
                padding-left: 1.5cm;
            }
        }

    </style>
    <script>
        function printFrame() {
            var frm = document.getElementById('frame').contentWindow;
            frm.focus();// focus on contentWindow is needed on some ie versions
            frm.print();
            return false;
        }
    </script>

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idlivraison\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idligne"]) || array_key_exists("idligne", $context) ? $context["idligne"] : (function () { throw new RuntimeError('Variable "idligne" does not exist.', 95, $this->source); })()), "html", null, true);
        yield "\">

    <div class=\"modal fade right\" id=\"modalChoisir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CHOISIR UN BIEN / SERVICE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 108, $this->source); })()), 'form_start', ["attr" => ["id" => "addChoisirLivraisonForm"]]);
        yield "
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 109, $this->source); })()), "_token", [], "any", false, false, false, 109), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Rechercher</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 115, $this->source); })()), "code", [], "any", false, false, false, 115), 'widget', ["id" => "refarticle", "required" => "", "attr" => ["class" => "form-control refarticle"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 123, $this->source); })()), "reference", [], "any", false, false, false, 123), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ARTICLE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 133, $this->source); })()), "article", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 143, $this->source); })()), "quantite", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addChoisirLivraison\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">

                            <div type=\"button\" id=\"closeChoisirLivraison\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>

                            <img src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadChoisirLivraison\">
                        </div>
                        ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 160, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLivraison\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE LIVRAISON</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 175
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 175, $this->source); })()), 'form_start', ["attr" => ["id" => "addLivraisonForm"]]);
        yield "
                        ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 176, $this->source); })()), "_token", [], "any", false, false, false, 176), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 182, $this->source); })()), "devis", [], "any", false, false, false, 182), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 192, $this->source); })()), "date", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 202, $this->source); })()), "livrereference", [], "any", false, false, false, 202), 'widget', ["id" => "editor1", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addLivraison\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closeLivraison\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLivraison\">
                        </div>
                        <br>
                        <br>

                        ";
        // line 220
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 220, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDupliquer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">DUPLIQUER CE BON DE LIVRAISON</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER LES LIGNES</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <div class=\"table-responsive\">
                            <table id=\"borde\" style=\"width:100%;\">
                                <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                    <th style=\"text-align: center\">RÉF</th>
                                    <th style=\"text-align: left !important;\">
                                        DÉSIGNATION
                                    </th>
                                </tr>
                                ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 260, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
            // line 261
            yield "                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 261))) {
                // line 262
                yield "                                        <tr>
                                            <td style=\"text-align: center\">";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 263), "html", null, true);
                yield "</td>
                                            <td>
                                                <span class=\"pri font-bold\">";
                // line 265
                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 265);
                yield "</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-center bordz\"><b>Unité:</b> ";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 268), "html", null, true);
                yield "
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            <b>Quantité:</b> ";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 273), 2, ",", " "), "html", null, true);
                yield "
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            ";
                // line 278
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 278, $this->source); })()), "etat", [], "any", false, false, false, 278) == "save")) {
                    // line 279
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignelivre", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 279, $this->source); })()), "id", [], "any", false, false, false, 279), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 279, $this->source); })()), "chantier", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 279)]), "html", null, true);
                    yield "\"
                                                                   class=\"m-r-10\"><i class=\"fa fa-edit col-green\"
                                                                                     aria-hidden=\"true\"
                                                                                     title=\"Modifier\"></i></a>
                                                                <a href=\"";
                    // line 283
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, false, 283), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 283, $this->source); })()), "chantier", [], "any", false, false, false, 283), "id", [], "any", false, false, false, 283), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 283), "type" => "livraison"]), "html", null, true);
                    yield "\"
                                                                   class=\"sholigne\"><i class=\"fa fa-trash col-pink\"
                                                                                       aria-hidden=\"true\"
                                                                                       title=\"Supprimer\"></i></a>
                                                            ";
                }
                // line 288
                yield "                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    ";
            }
            // line 294
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        yield "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalMise\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME DU DEVIS</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 313
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 313, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addforme"]]);
        yield "
                        ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 314, $this->source); })()), "_token", [], "any", false, false, false, 314), 'row');
        yield "
                        <h5 class=\"col-pink bolo600\">CORPS DU DEVIS</h5>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TAILLE DU TEXTE(px)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 321, $this->source); })()), "dsize", [], "any", false, false, false, 321), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class=\"col-pink bolo600\">ENTÊTE DU DEVIS</h5>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC ENTÊTE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 332, $this->source); })()), "info", [], "any", false, false, false, 332), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <label class=\"form-label m-b--30 col-blue bolo\">LOGO DANS L'ENTÊTE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 340, $this->source); })()), "entete", [], "any", false, false, false, 340), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">HAUTEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 350, $this->source); })()), "teteH", [], "any", false, false, false, 350), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">LARGEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 358, $this->source); })()), "teteY", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE EN HAUT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 368, $this->source); })()), "teteDH", [], "any", false, false, false, 368), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE EN BAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 376, $this->source); })()), "teteDB", [], "any", false, false, false, 376), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE À DROITE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 386
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 386, $this->source); })()), "teteDD", [], "any", false, false, false, 386), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE À GAUCHE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 394, $this->source); })()), "teteDG", [], "any", false, false, false, 394), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class=\"col-pink bolo600\">PIED DE PAGE DU DEVIS</h5>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">PIED DE PAGE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 405
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 405, $this->source); })()), "pied", [], "any", false, false, false, 405), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-6\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">TAILLE DU TEXTE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
        // line 414
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 414, $this->source); })()), "piedsize", [], "any", false, false, false, 414), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                            <input type=\"submit\" id=\"updateForme\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeupForme\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadupForme\">
                        </div>
                        ";
        // line 430
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 430, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER CE BON DE LIVRAISON</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 445
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 445, $this->source); })()), 'form_start', ["attr" => ["id" => "updateLivraisonForm"]]);
        yield "
                        ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 446, $this->source); })()), "_token", [], "any", false, false, false, 446), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 452, $this->source); })()), "devis", [], "any", false, false, false, 452), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 462, $this->source); })()), "date", [], "any", false, false, false, 462), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 472
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 472, $this->source); })()), "livrereference", [], "any", false, false, false, 472), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateLivraison\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeupdLivraison\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadupdLivraison\">
                        </div>
                        <br>
                        <br>

                        ";
        // line 491
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeLivraison"]) || array_key_exists("formeLivraison", $context) ? $context["formeLivraison"] : (function () { throw new RuntimeError('Variable "formeLivraison" does not exist.', 491, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE DÉSIGNATION</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 508
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 508, $this->source); })()), 'form_start', ["attr" => ["id" => "updateLigneLivraisonForm"]]);
        yield "
                        ";
        // line 509
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 509, $this->source); })()), "_token", [], "any", false, false, false, 509), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 515
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 515, $this->source); })()), "reference", [], "any", false, false, false, 515), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 526
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 526, $this->source); })()), "designation", [], "any", false, false, false, 526), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 538
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 538, $this->source); })()), "unite", [], "any", false, false, false, 538), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">QUANTITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 547
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 547, $this->source); })()), "quantite", [], "any", false, false, false, 547), 'widget', ["type" => "number", "attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateLigneLivraison\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlivraison", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 555, $this->source); })()), "id", [], "any", false, false, false, 555)]), "html", null, true);
        yield "\" id=\"closeLigne\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                            <img src=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLigne\">
                        </div>
                        ";
        // line 561
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 561, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class=\"content\" style=\"margin-top: 100px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-12\">
                    <div class=\"mb-2 m-t--25 \"
                         style=\"background-color: #d1d3e2 !important;\">
                        <div class=\"ont tohidbut\">
                            <div class=\"row clearfix \" style=\" padding: 0.1cm;\">
                                <div class=\"col-sm-12 text-center\">
                                    <h3 class=\"font-bold col-pink\">";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 578, $this->source); })()), "nomchantier", [], "any", false, false, false, 578), "html", null, true);
        yield "</h3>
                                    <h3 class=\"font-bold m-t--10 pri\">LIVRAISON N°: ";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 579, $this->source); })()), "numlivre", [], "any", false, false, false, 579), "html", null, true);
        yield "</h3>
                                    <h3 class=\"font-bold m-t--10 pri\">DEVIS N°: <a
                                                href=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 581, $this->source); })()), "devis", [], "any", false, false, false, 581), "id", [], "any", false, false, false, 581)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 581, $this->source); })()), "devis", [], "any", false, false, false, 581), "iddevis", [], "any", false, false, false, 581), "html", null, true);
        yield "</a>
                                    </h3>

                                    ";
        // line 584
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 584, $this->source); })()), "etat", [], "any", false, false, false, 584) == "valide")) {
            // line 585
            yield "                                        <h4 class=\"font-bold col-black\">CE BON EST VALIDÉ</h4>
                                    ";
        }
        // line 587
        yield "
                                    ";
        // line 588
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 588, $this->source); })()), "corbeille", [], "any", false, false, false, 588)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 589
            yield "                                        <h4 class=\"font-bold col-black\">CE BON EST SUPPRIMÉ</h4>
                                        <a class=\"btn bg-deep-orange text-white\" id=\"restaureLivraison\"><i
                                                    class=\"fa fa-redo\"></i> RESTAURER</a>
                                    ";
        } else {
            // line 593
            yield "
                                        <div class=\"btn-group shoher\">
                                            <button type=\"button\" class=\"btn bg-pink dropdown-toggle m-r-5\"
                                                    data-toggle=\"dropdown\"
                                                    aria-haspopup=\"true\" aria-expanded=\"true\">
                                                <i class=\"fa fa-cog\"></i> FAIRE <span class=\"caret\"></span>
                                            </button>
                                            <div class=\"dropdown-menu p-l-10 p-r-10\"
                                                 style=\"background-color: #e9e9e9; left: 50px; position: absolute\">
                                                <a href=\"";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 602, $this->source); })()), "chantier", [], "any", false, false, false, 602), "id", [], "any", false, false, false, 602)]), "html", null, true);
            yield "\"
                                                   class=\"btn btn-labeled bg-green text-white\" style=\"width: 100%\">
                                                    ACCÉDER AU CHANTIER</a>

                                                <button type=\"button\" class=\"btn btn-labeled bg-blue col-white\" style=\"width: 100%\"
                                                        data-toggle=\"modal\" data-target=\"#modalLivraison\">CRÉER UN NOUVEAU
                                                    BON
                                                </button>
                                                ";
            // line 610
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 610, $this->source); })()), "etat", [], "any", false, false, false, 610) == "save")) {
                // line 611
                yield "                                                    <button type=\"button\" class=\"btn btn-labeled bg-pri col-white\"
                                                            data-toggle=\"modal\" data-target=\"#modalChoisir\" style=\"width: 100%\">CHOISIR UN
                                                        ARTICLE
                                                    </button>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pri col-white\" style=\"width: 100%\"
                                                            id=\"duplivraison\">DUPLIQUER CE BON
                                                    </button>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pink col-white\" style=\"width: 100%\"
                                                            data-toggle=\"modal\" data-target=\"#modalInfo\">MODIFIER LES INFORMATIONS
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-labeled bg-pink text-white\" style=\"width: 100%\"
                                                            data-toggle=\"modal\" data-target=\"#modalList\">MODIFIER LES LIGNES
                                                    </button>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pink text-white\" style=\"width: 100%\"
                                                            data-toggle=\"modal\" data-target=\"#modalMise\">MISE EN FORME
                                                    </button><br>

                                                ";
            }
            // line 632
            yield "                                            </div>
                                        </div>
                                        <div class=\"hidere\">
                                            <a href=\"";
            // line 635
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 635, $this->source); })()), "chantier", [], "any", false, false, false, 635), "id", [], "any", false, false, false, 635)]), "html", null, true);
            yield "\"
                                               class=\"btn btn-labeled bg-green btn-sm text-white\">
                                                ACCÉDER AU CHANTIER</a>

                                            <button type=\"button\" class=\"btn btn-labeled bg-blue btn-sm col-white\"
                                                    data-toggle=\"modal\" data-target=\"#modalLivraison\">CRÉER UN NOUVEAU
                                                BON
                                            </button>
                                            <br>
                                            ";
            // line 644
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 644, $this->source); })()), "etat", [], "any", false, false, false, 644) == "save")) {
                // line 645
                yield "                                                <button type=\"button\" class=\"btn btn-labeled bg-pri col-white btn-sm\"
                                                        data-toggle=\"modal\" data-target=\"#modalChoisir\">CHOISIR UN
                                                    ARTICLE
                                                </button>

                                                <button type=\"button\" class=\"btn btn-labeled bg-pri col-white btn-sm\"
                                                        id=\"duplivraison\">DUPLIQUER CE BON
                                                </button>
                                                <br>

                                                <button type=\"button\" class=\"btn btn-labeled bg-pink btn-sm col-white\"
                                                        data-toggle=\"modal\"
                                                        data-target=\"#modalInfo\">MODIFIER LES INFORMATIONS
                                                </button>
                                                <button type=\"button\" class=\"btn btn-labeled bg-pink text-white btn-sm\"
                                                        data-toggle=\"modal\" data-target=\"#modalList\">MODIFIER LES LIGNES
                                                </button>

                                                <button type=\"button\" class=\"btn btn-labeled bg-pink text-white btn-sm\"
                                                        data-toggle=\"modal\"
                                                        data-target=\"#modalMise\">MISE EN FORME
                                                </button><br>

                                            ";
            }
            // line 669
            yield "                                        </div>
                                        ";
            // line 670
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 670, $this->source); })()), "etat", [], "any", false, false, false, 670) == "valide")) {
                // line 671
                yield "                                            <a class=\"btn bg-pink text-white\" id=\"devalideLivraison\"><i
                                                        class=\"fa fa-check-circle\"></i> DÉVALIDER</a>
                                        ";
            }
            // line 674
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 674, $this->source); })()), "etat", [], "any", false, false, false, 674) == "save")) {
                // line 675
                yield "                                        <a class=\"btn bg-pri text-white\" id=\"valideLivraison\"><i
                                                    class=\"fa fa-check-circle\"></i> VALIDER</a>

                                        <a class=\"btn bg-pink text-white\" id=\"deleteLivraison\"><i
                                                    class=\"fa fa-trash\"></i> SUPPRIMER</a>  ";
            }
            // line 680
            yield "                                        <button type=\"button\" class=\"btn btn-labeled bg-indigo
                                         text-white btn-sm\" onclick='printFrame();'><i class=\"fa fa-print\"></i> IMPRIMER</button>

                                        <button class=\"btn btn-labeled bg-deep-orange col-white btn-sm\"
                                                onClick={handlePrint}><i class=\"fa fa-envelope\"></i> MAIL</button>

                                        <a href=\"";
            // line 686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attacher", ["charger" => "oui", "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 686, $this->source); })()), "id", [], "any", false, false, false, 686), "type" => "livraison"]), "html", null, true);
            yield "\"
                                           class=\"btn btn-labeled bg-pri text-white btn-sm\"><i class=\"fa fa-print\"></i>PDF</a>

                                    ";
        }
        // line 690
        yield "                                </div>
                            </div>
                            <br>
                            <page class=\"shadow bg-white devtohide\"
                                  style=\"width: 21cm; height:29.7cm; margin: auto; padding: 0.6cm;\">
                                <iframe id=\"frame\"
                                        src=\"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attacher", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 696, $this->source); })()), "id", [], "any", false, false, false, 696), "type" => "imprimlivraison", "charger" => "oui"]), "html", null, true);
        yield "\"
                                        style=\"width: 100%; height: 100%; border: none;\"></iframe>
                            </page>

                            <table class=\"shoher\" id=\"borda\" style=\"width:100%; background-color: #fff\">

                                <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                    <th style=\"text-align: center\">RÉF</th>
                                    <th style=\"text-align: left !important;\">
                                        DÉSIGNATION
                                    </th>
                                </tr>
                                ";
        // line 708
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 708, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
            // line 709
            yield "                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 709))) {
                // line 710
                yield "                                        <tr>
                                            <td style=\"text-align: center\">";
                // line 711
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 711), "html", null, true);
                yield "</td>
                                            <td>
                                                <span class=\"pri font-bold\">";
                // line 713
                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 713);
                yield "</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-center bordz\"><b>Unité:</b> ";
                // line 716
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 716), "html", null, true);
                yield "
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            <b>Quantité:</b> ";
                // line 721
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 721), 2, ",", " "), "html", null, true);
                yield "
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            ";
                // line 726
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 726, $this->source); })()), "etat", [], "any", false, false, false, 726) == "save")) {
                    // line 727
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignelivre", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 727, $this->source); })()), "id", [], "any", false, false, false, 727), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 727, $this->source); })()), "chantier", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 727)]), "html", null, true);
                    yield "\"
                                                                   class=\"m-r-10\"><i class=\"fa fa-edit col-green\"
                                                                                     aria-hidden=\"true\"
                                                                                     title=\"Modifier\"></i></a>
                                                                <a href=\"";
                    // line 731
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 731, $this->source); })()), "id", [], "any", false, false, false, 731), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 731, $this->source); })()), "chantier", [], "any", false, false, false, 731), "id", [], "any", false, false, false, 731), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 731), "type" => "livraison"]), "html", null, true);
                    yield "\"
                                                                   class=\"sholigne\"><i class=\"fa fa-trash col-pink\"
                                                                                       aria-hidden=\"true\"
                                                                                       title=\"Supprimer\"></i></a>
                                                            ";
                }
                // line 736
                yield "                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    ";
            }
            // line 742
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 743
        yield "                            </table>

                            <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        return "content/livraison.html.twig";
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
        return array (  1112 => 743,  1106 => 742,  1098 => 736,  1090 => 731,  1082 => 727,  1080 => 726,  1072 => 721,  1064 => 716,  1058 => 713,  1053 => 711,  1050 => 710,  1047 => 709,  1043 => 708,  1028 => 696,  1020 => 690,  1013 => 686,  1005 => 680,  998 => 675,  995 => 674,  990 => 671,  988 => 670,  985 => 669,  959 => 645,  957 => 644,  945 => 635,  940 => 632,  917 => 611,  915 => 610,  904 => 602,  893 => 593,  887 => 589,  885 => 588,  882 => 587,  878 => 585,  876 => 584,  868 => 581,  863 => 579,  859 => 578,  839 => 561,  833 => 558,  827 => 555,  816 => 547,  804 => 538,  789 => 526,  775 => 515,  766 => 509,  762 => 508,  742 => 491,  733 => 485,  717 => 472,  704 => 462,  691 => 452,  682 => 446,  678 => 445,  660 => 430,  654 => 427,  638 => 414,  626 => 405,  612 => 394,  601 => 386,  588 => 376,  577 => 368,  564 => 358,  553 => 350,  540 => 340,  529 => 332,  515 => 321,  505 => 314,  501 => 313,  481 => 295,  475 => 294,  467 => 288,  459 => 283,  451 => 279,  449 => 278,  441 => 273,  433 => 268,  427 => 265,  422 => 263,  419 => 262,  416 => 261,  412 => 260,  369 => 220,  360 => 214,  345 => 202,  332 => 192,  319 => 182,  310 => 176,  306 => 175,  288 => 160,  282 => 157,  265 => 143,  252 => 133,  239 => 123,  228 => 115,  219 => 109,  215 => 108,  199 => 95,  195 => 94,  191 => 93,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}

    <style>

        #borde td, th {
            border: solid #D3D3D3;
            border-width: 1px 1px 1px 1px;
            padding: 5px;
        }

        #borda td, th {
            border: solid #D3D3D3;
            border-width: 1px 1px 1px 1px;
            padding: 5px;
        }


        td.bord {
            border: 0 solid #FFFFFF !important;
            padding: 5px;
            text-align: right;
            font-weight: 600;
        }

        td.bordz {
            border: 0 solid #FFFFFF !important;
            padding: 0 0 0 5px !important;
        }


        page {
            position: relative;
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        header,
        footer {
            position: absolute;
            left: 0;
            right: 0;
            padding-right: 1.5cm;
            padding-left: 1.5cm;
        }

        header:after {
            content: \"Header\";
        }

        header {
            top: 0;
            padding-top: 5mm;
            padding-bottom: 3mm;
        }

        footer {
            bottom: 0;
            color: #000;
            padding-top: 3mm;
            padding-bottom: 5mm;
        }

        @media print {
            body, page {
                margin: 0;
            }

            header,
            footer {
                position: fixed;
                left: 0;
                right: 0;
                padding-right: 1.5cm;
                padding-left: 1.5cm;
            }
        }

    </style>
    <script>
        function printFrame() {
            var frm = document.getElementById('frame').contentWindow;
            frm.focus();// focus on contentWindow is needed on some ie versions
            frm.print();
            return false;
        }
    </script>

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idlivraison\" value=\"{{ livraison.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ idligne }}\">

    <div class=\"modal fade right\" id=\"modalChoisir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CHOISIR UN BIEN / SERVICE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formez,{'attr': {'id': 'addChoisirLivraisonForm'}}) }}
                        {{ form_row(formez._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Rechercher</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.code,{'id':'refarticle','required':'','attr':{'class':'form-control refarticle'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.reference,{'required':'','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ARTICLE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.article,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.quantite,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addChoisirLivraison\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">

                            <div type=\"button\" id=\"closeChoisirLivraison\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>

                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadChoisirLivraison\">
                        </div>
                        {{ form_end(formez) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLivraison\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE LIVRAISON</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formeLivraison, {'attr': {'id': 'addLivraisonForm' }}) }}
                        {{ form_row(formeLivraison._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formeLivraison.devis,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formeLivraison.date,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formeLivraison.livrereference,{'id':'editor1','attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addLivraison\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closeLivraison\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLivraison\">
                        </div>
                        <br>
                        <br>

                        {{ form_end(formeLivraison) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDupliquer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">DUPLIQUER CE BON DE LIVRAISON</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER LES LIGNES</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <div class=\"table-responsive\">
                            <table id=\"borde\" style=\"width:100%;\">
                                <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                    <th style=\"text-align: center\">RÉF</th>
                                    <th style=\"text-align: left !important;\">
                                        DÉSIGNATION
                                    </th>
                                </tr>
                                {% for lign in lignes %}
                                    {% if lign.groupe is null %}
                                        <tr>
                                            <td style=\"text-align: center\">{{ lign.reference }}</td>
                                            <td>
                                                <span class=\"pri font-bold\">{{ lign.designation|raw }}</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-center bordz\"><b>Unité:</b> {{ lign.unite }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            <b>Quantité:</b> {{ lign.quantite|number_format(2, ',', ' ') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            {% if livraison.etat == 'save' %}
                                                                <a href=\"{{ path('editlignelivre',{'id':livre.id,  'idchantier':livre.chantier.id,   'idligne':lign.id}) }}\"
                                                                   class=\"m-r-10\"><i class=\"fa fa-edit col-green\"
                                                                                     aria-hidden=\"true\"
                                                                                     title=\"Modifier\"></i></a>
                                                                <a href=\"{{ path('supligne',{'id':livre.id,  'idchantier':livre.chantier.id,   'idligne':lign.id, 'type':'livraison'}) }}\"
                                                                   class=\"sholigne\"><i class=\"fa fa-trash col-pink\"
                                                                                       aria-hidden=\"true\"
                                                                                       title=\"Supprimer\"></i></a>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalMise\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME DU DEVIS</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formes, {'enctype':'multipart/form-data','attr': {'id': 'addforme'}}) }}
                        {{ form_row(formes._token) }}
                        <h5 class=\"col-pink bolo600\">CORPS DU DEVIS</h5>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TAILLE DU TEXTE(px)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.dsize,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class=\"col-pink bolo600\">ENTÊTE DU DEVIS</h5>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC ENTÊTE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.info,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <label class=\"form-label m-b--30 col-blue bolo\">LOGO DANS L'ENTÊTE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.entete,{'required':'','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">HAUTEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.teteH,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">LARGEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.teteY,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE EN HAUT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.teteDH,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE EN BAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.teteDB,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE À DROITE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.teteDD,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCALAGE À GAUCHE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.teteDG,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class=\"col-pink bolo600\">PIED DE PAGE DU DEVIS</h5>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">PIED DE PAGE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formes.pied,{'required':'','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-6\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">TAILLE DU TEXTE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formes.piedsize,{'attr':{'class':'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                            <input type=\"submit\" id=\"updateForme\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeupForme\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadupForme\">
                        </div>
                        {{ form_end(formes) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER CE BON DE LIVRAISON</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formLivre, {'attr': {'id': 'updateLivraisonForm' }}) }}
                        {{ form_row(formLivre._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formLivre.devis,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formLivre.date,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formLivre.livrereference,{'id':'editor2','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateLivraison\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeupdLivraison\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadupdLivraison\">
                        </div>
                        <br>
                        <br>

                        {{ form_end(formeLivraison) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE DÉSIGNATION</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(forme, {'attr': {'id': 'updateLigneLivraisonForm'}}) }}
                        {{ form_row(forme._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(forme.reference,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(forme.designation,{'id':'editor4','attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(forme.unite,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">QUANTITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(forme.quantite,{'type':'number','attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateLigneLivraison\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"{{ path('editlivraison', {'id': livre.id}) }}\" id=\"closeLigne\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLigne\">
                        </div>
                        {{ form_end(forme) }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class=\"content\" style=\"margin-top: 100px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-12\">
                    <div class=\"mb-2 m-t--25 \"
                         style=\"background-color: #d1d3e2 !important;\">
                        <div class=\"ont tohidbut\">
                            <div class=\"row clearfix \" style=\" padding: 0.1cm;\">
                                <div class=\"col-sm-12 text-center\">
                                    <h3 class=\"font-bold col-pink\">{{ chantier.nomchantier }}</h3>
                                    <h3 class=\"font-bold m-t--10 pri\">LIVRAISON N°: {{ livre.numlivre }}</h3>
                                    <h3 class=\"font-bold m-t--10 pri\">DEVIS N°: <a
                                                href=\"{{ path('editdevis', {'id': livre.devis.id}) }}\">{{ livre.devis.iddevis }}</a>
                                    </h3>

                                    {% if livre.etat == \"valide\" %}
                                        <h4 class=\"font-bold col-black\">CE BON EST VALIDÉ</h4>
                                    {% endif %}

                                    {% if livre.corbeille %}
                                        <h4 class=\"font-bold col-black\">CE BON EST SUPPRIMÉ</h4>
                                        <a class=\"btn bg-deep-orange text-white\" id=\"restaureLivraison\"><i
                                                    class=\"fa fa-redo\"></i> RESTAURER</a>
                                    {% else %}

                                        <div class=\"btn-group shoher\">
                                            <button type=\"button\" class=\"btn bg-pink dropdown-toggle m-r-5\"
                                                    data-toggle=\"dropdown\"
                                                    aria-haspopup=\"true\" aria-expanded=\"true\">
                                                <i class=\"fa fa-cog\"></i> FAIRE <span class=\"caret\"></span>
                                            </button>
                                            <div class=\"dropdown-menu p-l-10 p-r-10\"
                                                 style=\"background-color: #e9e9e9; left: 50px; position: absolute\">
                                                <a href=\"{{ path('chantier', {'id': livre.chantier.id}) }}\"
                                                   class=\"btn btn-labeled bg-green text-white\" style=\"width: 100%\">
                                                    ACCÉDER AU CHANTIER</a>

                                                <button type=\"button\" class=\"btn btn-labeled bg-blue col-white\" style=\"width: 100%\"
                                                        data-toggle=\"modal\" data-target=\"#modalLivraison\">CRÉER UN NOUVEAU
                                                    BON
                                                </button>
                                                {% if livre.etat == \"save\" %}
                                                    <button type=\"button\" class=\"btn btn-labeled bg-pri col-white\"
                                                            data-toggle=\"modal\" data-target=\"#modalChoisir\" style=\"width: 100%\">CHOISIR UN
                                                        ARTICLE
                                                    </button>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pri col-white\" style=\"width: 100%\"
                                                            id=\"duplivraison\">DUPLIQUER CE BON
                                                    </button>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pink col-white\" style=\"width: 100%\"
                                                            data-toggle=\"modal\" data-target=\"#modalInfo\">MODIFIER LES INFORMATIONS
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-labeled bg-pink text-white\" style=\"width: 100%\"
                                                            data-toggle=\"modal\" data-target=\"#modalList\">MODIFIER LES LIGNES
                                                    </button>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pink text-white\" style=\"width: 100%\"
                                                            data-toggle=\"modal\" data-target=\"#modalMise\">MISE EN FORME
                                                    </button><br>

                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"hidere\">
                                            <a href=\"{{ path('chantier', {'id': livre.chantier.id}) }}\"
                                               class=\"btn btn-labeled bg-green btn-sm text-white\">
                                                ACCÉDER AU CHANTIER</a>

                                            <button type=\"button\" class=\"btn btn-labeled bg-blue btn-sm col-white\"
                                                    data-toggle=\"modal\" data-target=\"#modalLivraison\">CRÉER UN NOUVEAU
                                                BON
                                            </button>
                                            <br>
                                            {% if livre.etat == \"save\" %}
                                                <button type=\"button\" class=\"btn btn-labeled bg-pri col-white btn-sm\"
                                                        data-toggle=\"modal\" data-target=\"#modalChoisir\">CHOISIR UN
                                                    ARTICLE
                                                </button>

                                                <button type=\"button\" class=\"btn btn-labeled bg-pri col-white btn-sm\"
                                                        id=\"duplivraison\">DUPLIQUER CE BON
                                                </button>
                                                <br>

                                                <button type=\"button\" class=\"btn btn-labeled bg-pink btn-sm col-white\"
                                                        data-toggle=\"modal\"
                                                        data-target=\"#modalInfo\">MODIFIER LES INFORMATIONS
                                                </button>
                                                <button type=\"button\" class=\"btn btn-labeled bg-pink text-white btn-sm\"
                                                        data-toggle=\"modal\" data-target=\"#modalList\">MODIFIER LES LIGNES
                                                </button>

                                                <button type=\"button\" class=\"btn btn-labeled bg-pink text-white btn-sm\"
                                                        data-toggle=\"modal\"
                                                        data-target=\"#modalMise\">MISE EN FORME
                                                </button><br>

                                            {% endif %}
                                        </div>
                                        {% if livre.etat == \"valide\" %}
                                            <a class=\"btn bg-pink text-white\" id=\"devalideLivraison\"><i
                                                        class=\"fa fa-check-circle\"></i> DÉVALIDER</a>
                                        {% endif %}
                                    {% if livre.etat == \"save\" %}
                                        <a class=\"btn bg-pri text-white\" id=\"valideLivraison\"><i
                                                    class=\"fa fa-check-circle\"></i> VALIDER</a>

                                        <a class=\"btn bg-pink text-white\" id=\"deleteLivraison\"><i
                                                    class=\"fa fa-trash\"></i> SUPPRIMER</a>  {% endif %}
                                        <button type=\"button\" class=\"btn btn-labeled bg-indigo
                                         text-white btn-sm\" onclick='printFrame();'><i class=\"fa fa-print\"></i> IMPRIMER</button>

                                        <button class=\"btn btn-labeled bg-deep-orange col-white btn-sm\"
                                                onClick={handlePrint}><i class=\"fa fa-envelope\"></i> MAIL</button>

                                        <a href=\"{{ path('attacher', {'charger': 'oui', 'id': livre.id, 'type': 'livraison'}) }}\"
                                           class=\"btn btn-labeled bg-pri text-white btn-sm\"><i class=\"fa fa-print\"></i>PDF</a>

                                    {% endif %}
                                </div>
                            </div>
                            <br>
                            <page class=\"shadow bg-white devtohide\"
                                  style=\"width: 21cm; height:29.7cm; margin: auto; padding: 0.6cm;\">
                                <iframe id=\"frame\"
                                        src=\"{{ path('attacher',{'id':livre.id, 'type':'imprimlivraison', 'charger':'oui'}) }}\"
                                        style=\"width: 100%; height: 100%; border: none;\"></iframe>
                            </page>

                            <table class=\"shoher\" id=\"borda\" style=\"width:100%; background-color: #fff\">

                                <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                    <th style=\"text-align: center\">RÉF</th>
                                    <th style=\"text-align: left !important;\">
                                        DÉSIGNATION
                                    </th>
                                </tr>
                                {% for lign in lignes %}
                                    {% if lign.groupe is null %}
                                        <tr>
                                            <td style=\"text-align: center\">{{ lign.reference }}</td>
                                            <td>
                                                <span class=\"pri font-bold\">{{ lign.designation|raw }}</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-center bordz\"><b>Unité:</b> {{ lign.unite }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            <b>Quantité:</b> {{ lign.quantite|number_format(2, ',', ' ') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-center bordz\">
                                                            {% if livraison.etat == 'save' %}
                                                                <a href=\"{{ path('editlignelivre',{'id':livre.id,  'idchantier':livre.chantier.id,   'idligne':lign.id}) }}\"
                                                                   class=\"m-r-10\"><i class=\"fa fa-edit col-green\"
                                                                                     aria-hidden=\"true\"
                                                                                     title=\"Modifier\"></i></a>
                                                                <a href=\"{{ path('supligne',{'id':livre.id,  'idchantier':livre.chantier.id,   'idligne':lign.id, 'type':'livraison'}) }}\"
                                                                   class=\"sholigne\"><i class=\"fa fa-trash col-pink\"
                                                                                       aria-hidden=\"true\"
                                                                                       title=\"Supprimer\"></i></a>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                            </table>

                            <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/livraison.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\livraison.html.twig");
    }
}
