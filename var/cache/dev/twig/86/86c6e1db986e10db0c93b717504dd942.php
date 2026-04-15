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

/* content/webgl.html.twig */
class __TwigTemplate_a7e62039ab4174a5e840f23f30c12cb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/webgl.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/webgl.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>three.js webgl - glTF 2.0 - extensions</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">
    <style>
        body {
            font-family: Monospace;
            background-color: #222222;
            margin: 0px;
            overflow: hidden;
        }

        #info {
            color: #808080;
            position: absolute;
            top: 10px;
            width: 100%;
            text-align: center;
            z-index: 100;
            display:block;
        }

        #container {
            position: absolute;
            top: 0px;
            width:100%;
            height:100%;
            z-index: -1;
        }

        #info a, .button {
            color: #f00;
            font-weight: bold;
            text-decoration: underline;
            cursor: pointer
        }

    </style>
</head>

<body>
<div id=\"info\">
    <a href=\"http://threejs.org\" target=\"_blank\" rel=\"noopener\">three.js</a>
</div>

<div id=\"container\"></div>

<script src=\"gltfLoader/js/three.js\"></script>
<script src=\"gltfLoader/js/libs/dat.gui.min.js\"></script>
<script src=\"gltfLoader/js/controls/OrbitControls.js\"></script>
<script src=\"gltfLoader/js/loaders/DRACOLoader.js\"></script>
<script src=\"gltfLoader/js/loaders/DDSLoader.js\"></script>
<script src=\"gltfLoader/js/loaders/GLTFLoader.js\"></script>
<script src=\"gltfLoader/js/effects/AsciiEffect.js\"></script>
<script src=\"gltfLoader/js/WebGL.js\"></script>
<script src=\"gltfLoader/js/main.js\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "content/webgl.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>three.js webgl - glTF 2.0 - extensions</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">
    <style>
        body {
            font-family: Monospace;
            background-color: #222222;
            margin: 0px;
            overflow: hidden;
        }

        #info {
            color: #808080;
            position: absolute;
            top: 10px;
            width: 100%;
            text-align: center;
            z-index: 100;
            display:block;
        }

        #container {
            position: absolute;
            top: 0px;
            width:100%;
            height:100%;
            z-index: -1;
        }

        #info a, .button {
            color: #f00;
            font-weight: bold;
            text-decoration: underline;
            cursor: pointer
        }

    </style>
</head>

<body>
<div id=\"info\">
    <a href=\"http://threejs.org\" target=\"_blank\" rel=\"noopener\">three.js</a>
</div>

<div id=\"container\"></div>

<script src=\"gltfLoader/js/three.js\"></script>
<script src=\"gltfLoader/js/libs/dat.gui.min.js\"></script>
<script src=\"gltfLoader/js/controls/OrbitControls.js\"></script>
<script src=\"gltfLoader/js/loaders/DRACOLoader.js\"></script>
<script src=\"gltfLoader/js/loaders/DDSLoader.js\"></script>
<script src=\"gltfLoader/js/loaders/GLTFLoader.js\"></script>
<script src=\"gltfLoader/js/effects/AsciiEffect.js\"></script>
<script src=\"gltfLoader/js/WebGL.js\"></script>
<script src=\"gltfLoader/js/main.js\"></script>

</body>
</html>", "content/webgl.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\webgl.html.twig");
    }
}
