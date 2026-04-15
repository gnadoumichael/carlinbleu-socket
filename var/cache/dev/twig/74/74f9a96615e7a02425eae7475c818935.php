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

/* content/chancourss.html.twig */
class __TwigTemplate_169e498664523b76988c829e3cb83e48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chancourss.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chancourss.html.twig"));

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
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"chancours\"/>

    <div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-header col-white bg-green p-l-20 hide\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CHANTIER</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addChantierToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control chrs supper selclient\" name=\"client\"
                                            id=\"client\"></select>
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
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 42, $this->source); })()), "nomchantier", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 52, $this->source); })()), "contrat", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 62, $this->source); })()), "localisation", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 72, $this->source); })()), "sous", [], "any", false, false, false, 72), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
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
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
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
                    <div class=\"text-center hide\" id=\"divChantiere\">
                        <input type=\"submit\" id=\"updateChr\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>
                    <div class=\"text-center\" id=\"divChantier\">
                        <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <img src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 138, $this->source); })()), 'form_end');
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
                        <h4 class=\"bolo700 col-deep-orange\">CHANTIERS EN COURS</h4>
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
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en cours
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataCours\"
                                           style=\"width:100%\">
                                        ";
        // line 178
        $context["solde"] = 0;
        // line 179
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 180
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 180))) {
                // line 181
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 181))) {
                    // line 182
                    yield "
                                                    ";
                    // line 183
                    $context["vp"] = 0;
                    // line 184
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 185
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 186
                    yield "
                                                    ";
                    // line 187
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 187));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 188
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 188) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 188)))) {
                            // line 189
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 189) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 189, $this->source); })()));
                            // line 190
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 190) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 190, $this->source); })()));
                            // line 191
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 191) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 191, $this->source); })()));
                            // line 192
                            yield "                                                        ";
                        }
                        // line 193
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    yield "
                                                ";
                }
                // line 196
                yield "                                            ";
            }
            // line 197
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 213, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 214
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 214))) {
                // line 215
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 215))) {
                    // line 216
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 216));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 217
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 217)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 217) == "encours"))) {
                            // line 218
                            yield "                                                            ";
                            $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 218) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 218));
                            // line 219
                            yield "                                                            ";
                            $context["mm"] = 0;
                            // line 220
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 220));
                            foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                                // line 221
                                yield "                                                                ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 221) == "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 221)))) {
                                    // line 222
                                    yield "                                                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "lignes", [], "any", false, false, false, 222));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                                        // line 223
                                        yield "                                                                        ";
                                        if (((((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "unite", [], "any", false, false, false, 223) == "M2") || (CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "unite", [], "any", false, false, false, 223) == "m2")) || (CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "unite", [], "any", false, false, false, 223) == "m²")) || (CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "unite", [], "any", false, false, false, 223) == "M²"))) {
                                            // line 224
                                            yield "                                                                            ";
                                            $context["mm"] = ((isset($context["mm"]) || array_key_exists("mm", $context) ? $context["mm"] : (function () { throw new RuntimeError('Variable "mm" does not exist.', 224, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 224));
                                            // line 225
                                            yield "                                                                        ";
                                        }
                                        // line 226
                                        yield "                                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 227
                                    yield "                                                                ";
                                }
                                // line 228
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 229
                            yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PROJY\" value=\"";
                            // line 232
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 232), "html", null, true);
                            yield "\">
                                                                </td>
                                                                <td style=\"text-align: center\"
                                                                    title=\"Avancement selon décomptes validés\">";
                            // line 235
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 235), 2, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                            // line 239
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 239)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 240
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 240), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\">
                                                                        ";
                            // line 242
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 242))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 243
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 245
                            yield "                                                                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 245))), "truncate", [30, "...", false], "method", false, false, false, 245), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"bolo600\"><a
                                                                            href=\"";
                            // line 249
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 249)]), "html", null, true);
                            yield "\"
                                                                            class=\"col-white bolo700\">";
                            // line 250
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 250)), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td class=\"text-right\">";
                            // line 252
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["mm"]) || array_key_exists("mm", $context) ? $context["mm"] : (function () { throw new RuntimeError('Variable "mm" does not exist.', 252, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-right\">";
                            // line 253
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ml"]) || array_key_exists("ml", $context) ? $context["ml"] : (function () { throw new RuntimeError('Variable "ml" does not exist.', 253, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 254
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 254, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 255
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 255), 2, ",", " "), "html", null, true);
                            yield "</td>

                                                                ";
                            // line 257
                            $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 257), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 257), 2, ".", ""));
                            // line 258
                            yield "
                                                                <td style=\"text-align: right\">";
                            // line 259
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 259, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>

                                                            </tr>
                                                        ";
                        }
                        // line 263
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    yield "                                                ";
                }
                // line 265
                yield "                                            ";
            }
            // line 266
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
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
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br></p>
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
        return "content/chancourss.html.twig";
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
        return array (  548 => 267,  542 => 266,  539 => 265,  536 => 264,  530 => 263,  523 => 259,  520 => 258,  518 => 257,  513 => 255,  509 => 254,  505 => 253,  501 => 252,  496 => 250,  492 => 249,  484 => 245,  480 => 243,  478 => 242,  473 => 240,  469 => 239,  462 => 235,  456 => 232,  451 => 229,  445 => 228,  442 => 227,  436 => 226,  433 => 225,  430 => 224,  427 => 223,  422 => 222,  419 => 221,  414 => 220,  411 => 219,  408 => 218,  405 => 217,  400 => 216,  397 => 215,  394 => 214,  390 => 213,  373 => 198,  367 => 197,  364 => 196,  360 => 194,  354 => 193,  351 => 192,  348 => 191,  345 => 190,  342 => 189,  339 => 188,  335 => 187,  332 => 186,  329 => 185,  326 => 184,  324 => 183,  321 => 182,  318 => 181,  315 => 180,  310 => 179,  308 => 178,  265 => 138,  260 => 136,  203 => 82,  190 => 72,  177 => 62,  164 => 52,  151 => 42,  129 => 23,  125 => 22,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"chancours\"/>

    <div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-header col-white bg-green p-l-20 hide\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CHANTIER</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    {{ form_start(formChantier, {'attr': {'id':'addChantierForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addChantierToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control chrs supper selclient\" name=\"client\"
                                            id=\"client\"></select>
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
                                    {{ form_widget(formChantier.nomchantier,{'attr':{'class':'form-control chr'}}) }}
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
                    <div class=\"text-center hide\" id=\"divChantiere\">
                        <input type=\"submit\" id=\"updateChr\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>
                    <div class=\"text-center\" id=\"divChantier\">
                        <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
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
                        <h4 class=\"bolo700 col-deep-orange\">CHANTIERS EN COURS</h4>
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
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en cours
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataCours\"
                                           style=\"width:100%\">
                                        {% set solde = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}

                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"encours\" and chantier.corbeille is null %}
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
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
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
                                                        {% if chantier.corbeille is null  and chantier.etat == \"encours\" %}
                                                            {% set solde  = chantier.cout - chantier.reglement %}
                                                            {% set mm  = 0 %}
                                                            {% for devis in chantier.devis %}
                                                                {% if devis.etat == \"valide\" and devis.type is null %}
                                                                    {% for ligne in devis.lignes %}
                                                                        {% if ligne.unite == \"M2\" or ligne.unite == \"m2\" or ligne.unite == \"m²\"  or ligne.unite == \"M²\" %}
                                                                            {% set mm  = mm + ligne.quantite %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% endif %}
                                                            {% endfor %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PROJY\" value=\"{{ chantier.id }}\">
                                                                </td>
                                                                <td style=\"text-align: center\"
                                                                    title=\"Avancement selon décomptes validés\">{{ chantier.progression|number_format(2,',',' ') }}
                                                                    %
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
                                                                <td class=\"text-right\">{{ mm|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-right\">{{ ml|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}

                                                                <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>

                                                            </tr>
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
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/chancourss.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chancourss.html.twig");
    }
}
