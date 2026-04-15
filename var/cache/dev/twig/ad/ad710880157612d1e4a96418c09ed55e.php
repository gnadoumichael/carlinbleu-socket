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

/* content/chansous.html.twig */
class __TwigTemplate_4c846216f237b6e0ea0ab426c312e7cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chansous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chansous.html.twig"));

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
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
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
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    ";
        // line 136
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 136, $this->source); })()), 'form_end');
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
                        <h4 class=\"bolo700 col-deep-orange\">SOUS CHANTIERS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #FF9800\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1s\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1s\" href=\"#collapseOne_1s\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1s\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    | Sous-chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1s\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1s\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataSous\"
                                           style=\"width: 100%\">

                                        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 177
            yield "
                                            ";
            // line 178
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 178))) {
                // line 179
                yield "                                                ";
                $context["vp"] = 0;
                // line 180
                yield "                                                ";
                $context["vr"] = 0;
                // line 181
                yield "                                                ";
                $context["dp"] = 0;
                // line 182
                yield "
                                                ";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 183));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 184
                    yield "                                                    ";
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 184))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 185
                        yield "                                                        ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 185))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 186
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 186) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 186)))) {
                                // line 187
                                yield "                                                                ";
                                $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 187) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 187, $this->source); })()));
                                // line 188
                                yield "                                                                ";
                                $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 188) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 188, $this->source); })()));
                                // line 189
                                yield "                                                                ";
                                $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 189) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 189, $this->source); })()));
                                // line 190
                                yield "                                                            ";
                            }
                            // line 191
                            yield "                                                        ";
                        }
                        // line 192
                        yield "                                                    ";
                    }
                    // line 193
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                yield "
                                            ";
            }
            // line 196
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIER/SOUS-CHANTIERS</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 209, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 210
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 210))) {
                // line 211
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 211));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 212
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 212))) {
                        // line 213
                        yield "                                                        ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 213))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 214
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 214) == "encours")) {
                                // line 215
                                yield "                                                                <tr>
                                                                    <td>
                                                                        <a href=\"";
                                // line 217
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 217)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 218
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 218), "html", null, true);
                                yield "\"
                                                                           class=\"bolo600\">
                                                                            ";
                                // line 220
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 220)), "html", null, true);
                                yield "
                                                                        </a>

                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 224
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 224), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 226
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 226), "id", [], "any", false, false, false, 226)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 227
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 227), "nomchantier", [], "any", false, false, false, 227), "html", null, true);
                                yield "\"
                                                                           class=\"col-white bolo600\">
                                                                            ";
                                // line 229
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 229), "nomchantier", [], "any", false, false, false, 229))), "truncate", [30, "...", false], "method", false, false, false, 229), "html", null, true);
                                yield "
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 231
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 231), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 232
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 232), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 232), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 233
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 233), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                    ";
                                // line 235
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 235), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 235), 2, ".", ""));
                                // line 236
                                yield "                                                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 236, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                </tr>
                                                            ";
                            }
                            // line 240
                            yield "                                                        ";
                        }
                        // line 241
                        yield "                                                    ";
                    }
                    // line 242
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                yield "                                            ";
            }
            // line 244
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\"></th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center col-blue\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                        </tr>
                                        </tfoot>
                                    </table>
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
        return "content/chansous.html.twig";
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
        return array (  492 => 245,  486 => 244,  483 => 243,  477 => 242,  474 => 241,  471 => 240,  463 => 236,  461 => 235,  456 => 233,  452 => 232,  448 => 231,  443 => 229,  438 => 227,  434 => 226,  429 => 224,  422 => 220,  417 => 218,  413 => 217,  409 => 215,  406 => 214,  403 => 213,  400 => 212,  395 => 211,  392 => 210,  388 => 209,  374 => 197,  368 => 196,  364 => 194,  358 => 193,  355 => 192,  352 => 191,  349 => 190,  346 => 189,  343 => 188,  340 => 187,  337 => 186,  334 => 185,  331 => 184,  327 => 183,  324 => 182,  321 => 181,  318 => 180,  315 => 179,  313 => 178,  310 => 177,  306 => 176,  263 => 136,  258 => 134,  201 => 80,  188 => 70,  175 => 60,  162 => 50,  149 => 40,  127 => 21,  123 => 20,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
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
                        <h4 class=\"bolo700 col-deep-orange\">SOUS CHANTIERS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #FF9800\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1s\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1s\" href=\"#collapseOne_1s\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1s\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    | Sous-chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1s\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1s\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataSous\"
                                           style=\"width: 100%\">

                                        {% for client in clients %}

                                            {% if client.corbeille is null %}
                                                {% set vp = 0 %}
                                                {% set vr = 0 %}
                                                {% set dp = 0 %}

                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.sous is not null %}
                                                        {% if chantier.sous is not null %}
                                                            {% if chantier.etat == 'encours' and chantier.corbeille is null %}
                                                                {% set vp = chantier.cout + vp %}
                                                                {% set vr = chantier.reglement + vr %}
                                                                {% set dp = chantier.depense + dp %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}

                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIER/SOUS-CHANTIERS</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null %}
                                                        {% if chantier.sous is not null %}
                                                            {% if chantier.etat == 'encours' %}
                                                                <tr>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.nomchantier }}\"
                                                                           class=\"bolo600\">
                                                                            {{ chantier.nomchantier|upper }}
                                                                        </a>

                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier',{'id':chantier.sous.id}) }}\"
                                                                           title=\"{{ chantier.sous.nomchantier }}\"
                                                                           class=\"col-white bolo600\">
                                                                            {{ chantier.sous.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                    {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                                                    <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>

                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\"></th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center col-blue\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/chansous.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chansous.html.twig");
    }
}
