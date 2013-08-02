<?php

/* GbCreationWallBundle:Wall:show.html.twig */
class __TwigTemplate_291e318346a559d2f780cf0680ce07d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GbCreationWallBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GbCreationWallBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <article class=\"item\">
        <header>
         <div class=\"date\"><time datetime=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
        echo "</h2>
        </header>
         <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/wall/", 1 => $this->getAttribute($this->getContext($context, "item"), "file")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "file"), "html", null, true);
        echo " n'a pas été trouvée\" class=\"large\" />
    </article>

    <article class=\"comments\">
        <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Commentaires  (";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nbLike"), "html", null, true);
        echo ")</h3>
            ";
        // line 18
        $this->env->loadTemplate("GbCreationWallBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, "comments"))));
        // line 19
        echo "        </section>

          <h3>Ajouter un commentaire</h3>
           ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GbCreationWallBundle:Comment:new", array("item_id" => $this->getAttribute($this->getContext($context, "item"), "id"))));
        echo "
    </section>
    </article>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Wall:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  148 => 61,  34 => 8,  102 => 40,  90 => 37,  53 => 11,  159 => 72,  58 => 18,  195 => 81,  192 => 80,  172 => 19,  167 => 17,  155 => 14,  113 => 63,  77 => 20,  59 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 50,  140 => 55,  132 => 17,  128 => 16,  119 => 42,  107 => 42,  71 => 17,  177 => 65,  165 => 64,  160 => 76,  135 => 47,  126 => 45,  114 => 11,  84 => 28,  70 => 19,  67 => 16,  61 => 15,  38 => 6,  94 => 26,  89 => 20,  85 => 22,  75 => 22,  68 => 18,  56 => 13,  87 => 47,  21 => 2,  26 => 6,  93 => 49,  88 => 49,  78 => 26,  46 => 9,  27 => 2,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 73,  158 => 15,  156 => 75,  151 => 74,  142 => 59,  138 => 49,  136 => 78,  121 => 46,  117 => 44,  105 => 59,  91 => 37,  62 => 23,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 23,  69 => 21,  47 => 19,  40 => 3,  37 => 6,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 15,  120 => 14,  115 => 44,  111 => 43,  108 => 62,  101 => 28,  98 => 39,  96 => 31,  83 => 25,  74 => 22,  66 => 15,  55 => 15,  52 => 12,  50 => 12,  43 => 7,  41 => 8,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 59,  176 => 20,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 71,  149 => 11,  147 => 58,  144 => 53,  141 => 80,  133 => 55,  130 => 48,  125 => 48,  122 => 43,  116 => 43,  112 => 42,  109 => 41,  106 => 61,  103 => 40,  99 => 39,  95 => 38,  92 => 50,  86 => 36,  82 => 35,  80 => 19,  73 => 10,  64 => 17,  60 => 17,  57 => 17,  54 => 10,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 10,  36 => 7,  33 => 24,  30 => 7,);
    }
}
