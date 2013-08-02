<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_366d747615cf0c8654d90ceba01defac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  76 => 17,  23 => 4,  81 => 27,  148 => 61,  34 => 6,  102 => 17,  90 => 32,  53 => 11,  159 => 72,  58 => 16,  195 => 81,  192 => 80,  172 => 19,  167 => 17,  155 => 14,  113 => 63,  77 => 20,  59 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 50,  140 => 55,  132 => 17,  128 => 16,  119 => 42,  107 => 42,  71 => 17,  177 => 65,  165 => 64,  160 => 76,  135 => 47,  126 => 45,  114 => 11,  84 => 29,  70 => 19,  67 => 23,  61 => 12,  38 => 6,  94 => 34,  89 => 20,  85 => 22,  75 => 22,  68 => 18,  56 => 11,  87 => 31,  21 => 2,  26 => 9,  93 => 49,  88 => 31,  78 => 26,  46 => 9,  27 => 5,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 73,  158 => 15,  156 => 75,  151 => 74,  142 => 59,  138 => 49,  136 => 78,  121 => 46,  117 => 19,  105 => 18,  91 => 37,  62 => 22,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 24,  72 => 19,  69 => 18,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 15,  120 => 20,  115 => 44,  111 => 43,  108 => 19,  101 => 28,  98 => 39,  96 => 31,  83 => 25,  74 => 22,  66 => 15,  55 => 16,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 59,  176 => 20,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 71,  149 => 11,  147 => 58,  144 => 53,  141 => 80,  133 => 55,  130 => 48,  125 => 48,  122 => 43,  116 => 43,  112 => 42,  109 => 41,  106 => 61,  103 => 40,  99 => 39,  95 => 30,  92 => 29,  86 => 36,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 17,  57 => 12,  54 => 15,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 3,);
    }
}
