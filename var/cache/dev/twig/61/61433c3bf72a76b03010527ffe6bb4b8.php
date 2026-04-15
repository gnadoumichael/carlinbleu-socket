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

/* content/chantous.html.twig */
class __TwigTemplate_6254ca6684f0e127f4bd24ef9117a56f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chantous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chantous.html.twig"));

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
                        <h4 class=\"bolo700 col-deep-orange\">TOUS LES CHANTIERS</h4>
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
                         style=\"border-left: 2px solid #79A807; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseThree_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseThree_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Tous
                                    les chantiers
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree_1\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingThree_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataToChantiers\"
                                           style=\"width: 100%\">

                                        ";
        // line 177
        $context["tcout"] = 0;
        // line 178
        yield "                                        ";
        $context["treglement"] = 0;
        // line 179
        yield "                                        ";
        $context["tdepense"] = 0;
        // line 180
        yield "                                        ";
        $context["tbalance"] = 0;
        // line 181
        yield "                                        ";
        $context["marge"] = 0;
        // line 182
        yield "                                        ";
        $context["solde"] = 0;
        // line 183
        yield "
                                        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 185
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 185))) {
                // line 186
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 186))) {
                    // line 187
                    yield "
                                                    ";
                    // line 188
                    $context["vp"] = 0;
                    // line 189
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 190
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 191
                    yield "
                                                    ";
                    // line 192
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 192));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 193
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 193))) {
                            // line 194
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 194) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 194, $this->source); })()));
                            // line 195
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 195) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 195, $this->source); })()));
                            // line 196
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 196) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 196, $this->source); })()));
                            // line 197
                            yield "                                                        ";
                        }
                        // line 198
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    yield "
                                                    ";
                    // line 200
                    $context["tcout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 200, $this->source); })()) + (isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 200, $this->source); })()));
                    // line 201
                    yield "                                                    ";
                    $context["treglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 201, $this->source); })()) + (isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 201, $this->source); })()));
                    // line 202
                    yield "                                                    ";
                    $context["tdepense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 202, $this->source); })()) + (isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 202, $this->source); })()));
                    // line 203
                    yield "
                                                ";
                }
                // line 205
                yield "                                            ";
            }
            // line 206
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT&nbsp;DU&nbsp;CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
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
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 225))) {
                            // line 226
                            yield "                                                            ";
                            $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 226) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 226));
                            // line 227
                            yield "                                                            <tr>
                                                                <td>
                                                                    <a href=\"";
                            // line 229
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 229)]), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\"
                                                                       title=\"";
                            // line 231
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 231), "html", null, true);
                            yield "\">
                                                                        ";
                            // line 232
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 232))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 233
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 235
                            yield "
                                                                        ";
                            // line 236
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 236)), "html", null, true);
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
                            // line 244
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "terminer", [], "any", false, false, false, 244) == "oui")) {
                                // line 245
                                yield "                                                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 245), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 245), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                ";
                            } else {
                                // line 247
                                yield "                                                                    <td style=\"text-align: right\">0</td>
                                                                ";
                            }
                            // line 249
                            yield "
                                                                ";
                            // line 250
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "terminer", [], "any", false, false, false, 250) == "oui")) {
                                // line 251
                                yield "                                                                    ";
                                $context["balance"] =  -(isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 251, $this->source); })());
                                // line 252
                                yield "                                                                ";
                            } else {
                                // line 253
                                yield "                                                                    ";
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 253), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 253), 2, ".", ""));
                                // line 254
                                yield "                                                                ";
                            }
                            // line 255
                            yield "                                                                <td style=\"text-align: right\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 255, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                            </tr>
                                                        ";
                        }
                        // line 258
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 259
                    yield "                                                ";
                }
                // line 260
                yield "                                            ";
            }
            // line 261
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 266, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 268, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 269, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 269, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 270, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 271, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 271, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 272, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 272, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
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
        return "content/chantous.html.twig";
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
        return array (  566 => 272,  562 => 271,  558 => 270,  554 => 269,  550 => 268,  545 => 266,  539 => 262,  533 => 261,  530 => 260,  527 => 259,  521 => 258,  514 => 255,  511 => 254,  508 => 253,  505 => 252,  502 => 251,  500 => 250,  497 => 249,  493 => 247,  487 => 245,  485 => 244,  481 => 243,  477 => 242,  473 => 241,  469 => 240,  465 => 239,  459 => 236,  456 => 235,  452 => 233,  450 => 232,  446 => 231,  441 => 229,  437 => 227,  434 => 226,  431 => 225,  426 => 224,  423 => 223,  420 => 222,  416 => 221,  400 => 207,  394 => 206,  391 => 205,  387 => 203,  384 => 202,  381 => 201,  379 => 200,  376 => 199,  370 => 198,  367 => 197,  364 => 196,  361 => 195,  358 => 194,  355 => 193,  351 => 192,  348 => 191,  345 => 190,  342 => 189,  340 => 188,  337 => 187,  334 => 186,  331 => 185,  327 => 184,  324 => 183,  321 => 182,  318 => 181,  315 => 180,  312 => 179,  309 => 178,  307 => 177,  263 => 136,  258 => 134,  201 => 80,  188 => 70,  175 => 60,  162 => 50,  149 => 40,  127 => 21,  123 => 20,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
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
                        <h4 class=\"bolo700 col-deep-orange\">TOUS LES CHANTIERS</h4>
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
                         style=\"border-left: 2px solid #79A807; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseThree_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseThree_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Tous
                                    les chantiers
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree_1\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingThree_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataToChantiers\"
                                           style=\"width: 100%\">

                                        {% set tcout = 0 %}
                                        {% set treglement = 0 %}
                                        {% set tdepense = 0 %}
                                        {% set tbalance = 0 %}
                                        {% set marge = 0 %}
                                        {% set solde = 0 %}

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}

                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}

                                                    {% set tcout = vp + tcout %}
                                                    {% set treglement = vr + treglement %}
                                                    {% set tdepense = dp + tdepense %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}

                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT&nbsp;DU&nbsp;CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% set solde  = chantier.cout - chantier.reglement %}
                                                            <tr>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       class=\"bolo600\"
                                                                       title=\"{{ chantier.nomchantier }}\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        {% endif %}

                                                                        {{ chantier.nomchantier|upper }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                <td class=\"bolo600\">{{ client.nomclient|upper }}</td>
                                                                <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                {% if chantier.terminer == 'oui' %}
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                {% else %}
                                                                    <td style=\"text-align: right\">0</td>
                                                                {% endif %}

                                                                {% if chantier.terminer == 'oui' %}
                                                                    {% set balance =  -solde %}
                                                                {% else %}
                                                                    {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                                                {% endif %}
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
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">{{ tcout|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\">{{ treglement|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ (tcout|number_format(2,'.','') -  treglement|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ tdepense|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ (tcout|number_format(2,'.','') -  tdepense|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ (treglement|number_format(2,'.','') -  tdepense|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
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
", "content/chantous.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chantous.html.twig");
    }
}
