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

/* content/chanetude.html.twig */
class __TwigTemplate_2a353fd7243caf9bd9ba37405d443509 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chanetude.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chanetude.html.twig"));

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

        // line 3
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "
";
        
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
        yield "
    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"chanetude\"/>

    <div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 14
        if ((($tmp = (isset($context["idchantier"]) || array_key_exists("idchantier", $context) ? $context["idchantier"] : (function () { throw new RuntimeError('Variable "idchantier" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                    <div class=\"modal-header col-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UN CHANTIER</h3>
                    </div>
                ";
        } else {
            // line 21
            yield "                    <div class=\"modal-header col-white bg-blue p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            AJOUTER UN CHANTIER</h3>
                    </div>
                ";
        }
        // line 27
        yield "
                <div class=\"modal-body m-t-10 bien\">
                    ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addChantierToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 37, $this->source); })()), "client", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">NOM DU CHANTIER<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 48, $this->source); })()), "nomchantier", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">RÉFÉRENCE CONTRAT</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 58, $this->source); })()), "contrat", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">SITUATION GÉOGRAPHIQUE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 68, $this->source); })()), "localisation", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control chr"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">SOUS-CHANTIER DU CHANTIER</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 78, $this->source); })()), "sous", [], "any", false, false, false, 78), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">DESCRIPTION</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">

                        <div class=\"col-sm-6\">
                            <div class=\"form-group m-t--5\">
                                <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                                <div class=\"input-group date\" id=\"id_0\">
                                    <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                           style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                    <div class=\"input-group-addon input-group-append\">
                                        <div class=\"input-group-text\">
                                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group m-t--5\">
                                <label class=\"form-label pri bolo\">TERMINE LE</label>
                                <div class=\"input-group date\" id=\"id_1\">
                                    <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
                                           style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                    <div class=\"input-group-addon input-group-append\">
                                        <div class=\"input-group-text\">
                                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 124
        if ((($tmp = (isset($context["idchantier"]) || array_key_exists("idchantier", $context) ? $context["idchantier"] : (function () { throw new RuntimeError('Variable "idchantier" does not exist.', 124, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                        <div class=\"text-center \" id=\"divChantiere\">
                            <input type=\"submit\" id=\"updateChanier\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\">
                            <a href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
            yield "\" type=\"button\" id=\"closeChantier\"
                               class=\"btn btn-link waves-effect col-white bg-pink\"
                               data-dismiss=\"modal\">
                                ANNULER
                            </a>
                        </div>
                    ";
        } else {
            // line 135
            yield "                        <div class=\"text-center\" id=\"divChantiere\">
                            <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-pri\">
                            <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                    ";
        }
        // line 144
        yield "                    <div class=\"text-center\">
                        <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    ";
        // line 147
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 147, $this->source); })()), 'form_end');
        yield "

                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">CHANTIERS EN ÉTUDE</h4>
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalChantier\"
                                class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ CHANTIER
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #6636f6;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingEtu_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseEtu_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEtu_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en étude
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseEtu_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEtu_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataEtude\"
                                           style=\"width:100%\">
                                        ";
        // line 190
        $context["solde"] = 0;
        // line 191
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 192
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 192))) {
                // line 193
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 193))) {
                    // line 194
                    yield "                                                    ";
                    $context["vp"] = 0;
                    // line 195
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 196
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 197
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 197));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 198
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 198) == "etude") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 198)))) {
                            // line 199
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 199) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 199, $this->source); })()));
                            // line 200
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 200) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 200, $this->source); })()));
                            // line 201
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 201) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 201, $this->source); })()));
                            // line 202
                            yield "                                                        ";
                        }
                        // line 203
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    yield "
                                                ";
                }
                // line 206
                yield "                                            ";
            }
            // line 207
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT PRÉVU</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 221, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 222
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 222))) {
                // line 223
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 223))) {
                    // line 224
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 224));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 225
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 225) == "etude")) {
                            // line 226
                            yield "                                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 226))) {
                                // line 227
                                yield "                                                                ";
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 227) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 227));
                                // line 228
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROETU\"
                                                                               value=\"";
                                // line 232
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 232), "html", null, true);
                                yield "\">
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 235
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 235)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 236
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 236), "html", null, true);
                                yield "\"
                                                                           class=\"bolo600\">
                                                                            ";
                                // line 238
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 238))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 239
                                    yield "                                                                                <span class=\"badge bg-orange\">SC</span>
                                                                            ";
                                }
                                // line 241
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 241))), "truncate", [30, "...", false], "method", false, false, false, 241), "html", null, true);
                                yield "
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"bolo600\"><a
                                                                                href=\"";
                                // line 245
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 245)]), "html", null, true);
                                yield "\"
                                                                                class=\"col-white bolo700\">";
                                // line 246
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 246)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 248
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 248), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td class=\"text-right\">";
                                // line 249
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 249), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 250
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 250, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 251
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 251), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                    ";
                                // line 253
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 253), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 253), 2, ".", ""));
                                // line 254
                                yield "
                                                                    <td style=\"text-align: right\">";
                                // line 255
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 255, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                </tr>
                                                            ";
                            }
                            // line 258
                            yield "                                                        ";
                        }
                        // line 259
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 260
                    yield "                                                ";
                }
                // line 261
                yield "                                            ";
            }
            // line 262
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
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
        return "content/chanetude.html.twig";
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
        return array (  533 => 263,  527 => 262,  524 => 261,  521 => 260,  515 => 259,  512 => 258,  506 => 255,  503 => 254,  501 => 253,  496 => 251,  492 => 250,  488 => 249,  484 => 248,  479 => 246,  475 => 245,  467 => 241,  463 => 239,  461 => 238,  456 => 236,  452 => 235,  446 => 232,  440 => 228,  437 => 227,  434 => 226,  431 => 225,  426 => 224,  423 => 223,  420 => 222,  416 => 221,  401 => 208,  395 => 207,  392 => 206,  388 => 204,  382 => 203,  379 => 202,  376 => 201,  373 => 200,  370 => 199,  367 => 198,  362 => 197,  359 => 196,  356 => 195,  353 => 194,  350 => 193,  347 => 192,  342 => 191,  340 => 190,  294 => 147,  289 => 145,  286 => 144,  275 => 135,  265 => 128,  260 => 125,  258 => 124,  219 => 88,  206 => 78,  193 => 68,  180 => 58,  167 => 48,  153 => 37,  143 => 30,  139 => 29,  135 => 27,  127 => 21,  119 => 15,  117 => 14,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"chanetude\"/>

    <div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if idchantier %}
                    <div class=\"modal-header col-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UN CHANTIER</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header col-white bg-blue p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            AJOUTER UN CHANTIER</h3>
                    </div>
                {% endif %}

                <div class=\"modal-body m-t-10 bien\">
                    {{ form_start(formChantier, {'attr': {'id':'addChantierForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addChantierToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.client,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">NOM DU CHANTIER<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.nomchantier,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">RÉFÉRENCE CONTRAT</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.contrat,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">SITUATION GÉOGRAPHIQUE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.localisation,{'attr':{'class':'form-control chr'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">SOUS-CHANTIER DU CHANTIER</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.sous,{'required':'','attr':{'class':'form-control chr' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">DESCRIPTION</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.description,{'required':'','id':'description','attr':{'class':'form-control chr'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">

                        <div class=\"col-sm-6\">
                            <div class=\"form-group m-t--5\">
                                <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                                <div class=\"input-group date\" id=\"id_0\">
                                    <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                           style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                    <div class=\"input-group-addon input-group-append\">
                                        <div class=\"input-group-text\">
                                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group m-t--5\">
                                <label class=\"form-label pri bolo\">TERMINE LE</label>
                                <div class=\"input-group date\" id=\"id_1\">
                                    <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
                                           style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                    <div class=\"input-group-addon input-group-append\">
                                        <div class=\"input-group-text\">
                                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% if idchantier %}
                        <div class=\"text-center \" id=\"divChantiere\">
                            <input type=\"submit\" id=\"updateChanier\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\">
                            <a href=\"{{ path('chancours') }}\" type=\"button\" id=\"closeChantier\"
                               class=\"btn btn-link waves-effect col-white bg-pink\"
                               data-dismiss=\"modal\">
                                ANNULER
                            </a>
                        </div>
                    {% else %}
                        <div class=\"text-center\" id=\"divChantiere\">
                            <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-pri\">
                            <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"text-center\">
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    {{ form_end(formChantier) }}

                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">CHANTIERS EN ÉTUDE</h4>
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalChantier\"
                                class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ CHANTIER
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #6636f6;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingEtu_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseEtu_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEtu_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en étude
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseEtu_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEtu_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataEtude\"
                                           style=\"width:100%\">
                                        {% set solde = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"etude\" and chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT PRÉVU</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"etude\" %}
                                                            {% if chantier.corbeille is null %}
                                                                {% set solde  = chantier.cout - chantier.reglement %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROETU\"
                                                                               value=\"{{ chantier.id }}\">
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.nomchantier }}\"
                                                                           class=\"bolo600\">
                                                                            {% if chantier.sous is not null %}
                                                                                <span class=\"badge bg-orange\">SC</span>
                                                                            {% endif %}
                                                                            {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"bolo600\"><a
                                                                                href=\"{{ path('client', {'id': client.id}) }}\"
                                                                                class=\"col-white bolo700\">{{ client.nomclient|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                    {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}

                                                                    <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}

                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/chanetude.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chanetude.html.twig");
    }
}
