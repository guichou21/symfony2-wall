<?php

/* GbCreationWallBundle:Admin:edit.html.twig */
class __TwigTemplate_57f7acc679b685d97f52b843219911b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GbCreationWallBundle::admin.layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $this->env->loadTemplate("GbCreationWallBundle:Item:edit.form.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"), "item_id" => $this->getContext($context, "item_id"))));
        // line 11
        echo "    </section>

";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery-ui/1.10/minified/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery-ui/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery-ui/jquery-ui-sliderAccess.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
  \$(document).ready(function() {

\t\$('.datepicker').datetimepicker({
\t\tdateFormat: \"dd/mm/yy\",
\t\ttimeFormat: \"HH:mm\"
\t});

  } );

</script>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  159 => 72,  58 => 18,  195 => 81,  192 => 80,  172 => 19,  167 => 17,  155 => 14,  113 => 63,  77 => 44,  59 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 83,  140 => 55,  132 => 77,  128 => 76,  119 => 42,  107 => 36,  71 => 41,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 40,  61 => 20,  38 => 7,  94 => 22,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  87 => 47,  21 => 2,  26 => 6,  93 => 49,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 73,  158 => 15,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 78,  121 => 46,  117 => 44,  105 => 59,  91 => 37,  62 => 23,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 16,  69 => 21,  47 => 14,  40 => 10,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 44,  115 => 43,  111 => 62,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 8,  50 => 12,  43 => 13,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 59,  176 => 20,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 71,  149 => 11,  147 => 58,  144 => 53,  141 => 80,  133 => 55,  130 => 48,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 41,  106 => 36,  103 => 40,  99 => 39,  95 => 38,  92 => 33,  86 => 36,  82 => 35,  80 => 19,  73 => 15,  64 => 21,  60 => 9,  57 => 19,  54 => 10,  51 => 14,  48 => 17,  45 => 13,  42 => 11,  39 => 10,  36 => 11,  33 => 4,  30 => 7,);
    }
}
