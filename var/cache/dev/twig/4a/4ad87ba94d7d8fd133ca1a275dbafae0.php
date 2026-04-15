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

/* content/chanechouer.html.twig */
class __TwigTemplate_9029dc6170858700979d3aa716d863ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chanechouer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chanechouer.html.twig"));

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
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 21
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
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 40, $this->source); })()), "nomchantier", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 50, $this->source); })()), "contrat", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 60, $this->source); })()), "localisation", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 70, $this->source); })()), "sous", [], "any", false, false, false, 70), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
        // line 71
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
        // line 81
        yield         // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control
                                chr"]]);
        // line 83
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
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadChantier\"></div>
                ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 139, $this->source); })()), 'form_end');
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
                    <h4 class=\"bolo700 col-deep-orange\">CHANTIERS ÉCHOUÉS</h4>
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
                                échoués
                            </a>
                        </h5>
                    </div>
                    <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                         aria-labelledby=\"headingOne_1\">
                        <div class=\"panel-body\">
                            <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                <table class=\"table-striped table-bordered display nowrape\" id=\"dataEchoue\"
                                       style=\"width: 100%\">


                                    ";
        // line 181
        $context["solde"] = 0;
        // line 182
        yield "
                                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 184
            yield "                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 184))) {
                // line 185
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 185))) {
                    // line 186
                    yield "
                                    ";
                    // line 187
                    $context["vp"] = 0;
                    // line 188
                    yield "                                    ";
                    $context["vr"] = 0;
                    // line 189
                    yield "                                    ";
                    $context["dp"] = 0;
                    // line 190
                    yield "
                                    ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 191));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 192
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 192) == "echouer") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 192)))) {
                            // line 193
                            yield "                                    ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 193) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 193, $this->source); })()));
                            // line 194
                            yield "                                    ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 194) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 194, $this->source); })()));
                            // line 195
                            yield "                                    ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 195) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 195, $this->source); })()));
                            // line 196
                            yield "                                    ";
                        }
                        // line 197
                        yield "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    yield "
                                    ";
                }
                // line 200
                yield "                                    ";
            }
            // line 201
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                                    <thead>
                                    <tr class=\"font-weight-normal\">
                                        <th style=\"min-width: 30px !important;\"></th>
                                        <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                        <th class=\"text-center col-blue-grey\">COÛT</th>
                                        <th class=\"text-center col-blue-grey\">CLIENT</th>
                                        <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                        <th class=\"text-center col-blue-grey\">SOLDE</th>
                                        <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                        <th class=\"text-center col-blue-grey\">BALANCE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 216
            yield "                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 216))) {
                // line 217
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 217))) {
                    // line 218
                    yield "                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 218))) {
                        // line 219
                        yield "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 219));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 220
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 220) == "echouer")) {
                                // line 221
                                yield "                                    ";
                                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 221))) {
                                    // line 222
                                    yield "                                    ";
                                    $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 222) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 222));
                                    // line 223
                                    yield "                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                   class=\"PROECHO\"
                                                   value=\"";
                                    // line 227
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 227), "html", null, true);
                                    yield "\">
                                        </td>
                                        <td>
                                            <a href=\"";
                                    // line 230
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 230)]), "html", null, true);
                                    yield "\"
                                               class=\"bolo600\"
                                               title=\"";
                                    // line 232
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 232), "html", null, true);
                                    yield "\">
                                                ";
                                    // line 233
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 233))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 234
                                        yield "                                                <span class=\"badge bg-orange\">SC</span>
                                                ";
                                    }
                                    // line 236
                                    yield "                                                ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 236))), "truncate", [30, "...", false], "method", false, false, false, 236), "html", null, true);
                                    yield "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                                    // line 239
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 239), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                        <td class=\"bolo600\">";
                                    // line 240
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 240)), "html", null, true);
                                    yield "</td>
                                        <td class=\"text-right\">";
                                    // line 241
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 241), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                        <td style=\"text-align: right\">";
                                    // line 242
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 242, $this->source); })()), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                        <td style=\"text-align: right\">";
                                    // line 243
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 243), 2, ",", " "), "html", null, true);
                                    yield "</td>

                                        ";
                                    // line 245
                                    $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 245), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 245), 2, ".", ""));
                                    // line 246
                                    yield "                                        <td style=\"text-align: right\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 246, $this->source); })()), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                    </tr>
                                    ";
                                }
                                // line 249
                                yield "                                    ";
                            }
                            // line 250
                            yield "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        yield "                                    ";
                    }
                    // line 252
                    yield "                                    ";
                }
                // line 253
                yield "                                    ";
            }
            // line 254
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        yield "                                    </tbody>
                                    <tfoot>
                                    <tr class=\"font-weight-normal\">
                                        <th style=\"width: 10px !important;\"></th>
                                        <th></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
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
        return "content/chanechouer.html.twig";
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
        return array (  508 => 255,  502 => 254,  499 => 253,  496 => 252,  493 => 251,  487 => 250,  484 => 249,  477 => 246,  475 => 245,  470 => 243,  466 => 242,  462 => 241,  458 => 240,  454 => 239,  447 => 236,  443 => 234,  441 => 233,  437 => 232,  432 => 230,  426 => 227,  420 => 223,  417 => 222,  414 => 221,  411 => 220,  406 => 219,  403 => 218,  400 => 217,  397 => 216,  393 => 215,  378 => 202,  372 => 201,  369 => 200,  365 => 198,  359 => 197,  356 => 196,  353 => 195,  350 => 194,  347 => 193,  344 => 192,  340 => 191,  337 => 190,  334 => 189,  331 => 188,  329 => 187,  326 => 186,  323 => 185,  320 => 184,  316 => 183,  313 => 182,  311 => 181,  266 => 139,  261 => 137,  205 => 83,  202 => 82,  201 => 81,  189 => 71,  187 => 70,  174 => 60,  161 => 50,  148 => 40,  126 => 21,  122 => 20,  106 => 7,  103 => 6,  90 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
{{ title }}
{% endblock %}
{% block body %}

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\"/>
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
                                {{ form_widget(formChantier.sous,{'required':'','attr':{'class':'form-control chr' }})
                                }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">DESCRIPTION</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{
                                form_widget(formChantier.description,{'required':'','id':'description','attr':{'class':'form-control
                                chr'}}) }}
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
                    <h4 class=\"bolo700 col-deep-orange\">CHANTIERS ÉCHOUÉS</h4>
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
                                échoués
                            </a>
                        </h5>
                    </div>
                    <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                         aria-labelledby=\"headingOne_1\">
                        <div class=\"panel-body\">
                            <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                <table class=\"table-striped table-bordered display nowrape\" id=\"dataEchoue\"
                                       style=\"width: 100%\">


                                    {% set solde = 0 %}

                                    {% for client in clients %}
                                    {% if client.type is null %}
                                    {% if client.corbeille is null %}

                                    {% set vp = 0 %}
                                    {% set vr = 0 %}
                                    {% set dp = 0 %}

                                    {% for chantier in client.chantiers %}
                                    {% if chantier.etat == \"echouer\" and chantier.corbeille is null %}
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
                                        <th class=\"text-center col-blue-grey\">COÛT</th>
                                        <th class=\"text-center col-blue-grey\">CLIENT</th>
                                        <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                        <th class=\"text-center col-blue-grey\">SOLDE</th>
                                        <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                        <th class=\"text-center col-blue-grey\">BALANCE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for client in clients %}
                                    {% if client.corbeille is null %}
                                    {% if client.type is null %}
                                    {% if client.corbeille is null %}
                                    {% for chantier in client.chantiers %}
                                    {% if chantier.etat == \"echouer\" %}
                                    {% if chantier.corbeille is null %}
                                    {% set solde  = chantier.cout - chantier.reglement %}
                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                   class=\"PROECHO\"
                                                   value=\"{{ chantier.id }}\">
                                        </td>
                                        <td>
                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                               class=\"bolo600\"
                                               title=\"{{ chantier.nomchantier }}\">
                                                {% if chantier.sous is not null %}
                                                <span class=\"badge bg-orange\">SC</span>
                                                {% endif %}
                                                {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                            </a>
                                        </td>
                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                        <td class=\"bolo600\">{{ client.nomclient|upper }}</td>
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
                                    {% endif %}
                                    {% endfor %}
                                    </tbody>
                                    <tfoot>
                                    <tr class=\"font-weight-normal\">
                                        <th style=\"width: 10px !important;\"></th>
                                        <th></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
                                        <th class=\"text-center bg-blue col-white\"></th>
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
", "content/chanechouer.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chanechouer.html.twig");
    }
}
