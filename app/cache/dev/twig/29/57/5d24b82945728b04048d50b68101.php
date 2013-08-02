<?php

/* GbCreationWallBundle:Admin:comment.edit.html.twig */
class __TwigTemplate_29575d24b82945728b04048d50b68101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GbCreationWallBundle::admin.layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GbCreationWallBundle::admin.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     
     <section id=\"edit\">
      <div class=\"page-header\">
        <h1>Modification</h1>
      </div>

    ";
        // line 10
        $this->env->loadTemplate("GbCreationWallBundle:Comment:edit.form.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"), "comment_id" => $this->getContext($context, "comment_id"))));
        // line 11
        echo "    </section>

";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Admin:comment.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 81,  192 => 80,  172 => 19,  167 => 17,  155 => 14,  113 => 63,  77 => 44,  59 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 83,  140 => 55,  132 => 77,  128 => 76,  119 => 42,  107 => 36,  71 => 41,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 40,  61 => 13,  38 => 7,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 47,  21 => 2,  26 => 6,  93 => 49,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 16,  158 => 15,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 78,  121 => 46,  117 => 44,  105 => 59,  91 => 31,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 45,  72 => 16,  69 => 21,  47 => 22,  40 => 12,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 62,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 8,  50 => 12,  43 => 8,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 59,  176 => 20,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 11,  147 => 58,  144 => 53,  141 => 80,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 23,  80 => 19,  73 => 15,  64 => 20,  60 => 9,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 14,  42 => 9,  39 => 10,  36 => 11,  33 => 4,  30 => 7,);
    }
}
