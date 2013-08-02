<?php

/* GbCreationWallBundle:Item:edit.form.html.twig */
class __TwigTemplate_abc3f6f3ee38e797feeba6b358933bc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/wall/", 1 => $this->getContext($context, "item_name")))), "html", null, true);
        echo "\" class=\"Thumbnail\" alt=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "item_name"), "html", null, true);
        echo " n'a pas été trouvée\" class=\"large\" />

<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_item_edit", array("id" => $this->getContext($context, "item_id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo ">
   <div class=\"error\">
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
</div>

  <fieldset class=\"itemForm\">
    <div class=\"form-group\">
\t\t  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label');
        echo "
\t    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
\t\t  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "inputDescription")));
        echo "
\t</div>

  <div class=\"form-group\">
      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'label');
        echo "
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
        echo "
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
  </div>

\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    <button class=\"btn btn-primary\" type=\"submit\">Modifier</button>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_items_show");
        echo "\" class=\"btn btn-primary\">Annuler</a>
  </fieldset>
</form>

    ";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Item:edit.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  34 => 8,  102 => 40,  90 => 37,  53 => 13,  159 => 72,  58 => 18,  195 => 81,  192 => 80,  172 => 19,  167 => 17,  155 => 14,  113 => 63,  77 => 41,  59 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 50,  140 => 55,  132 => 17,  128 => 16,  119 => 42,  107 => 42,  71 => 38,  177 => 65,  165 => 64,  160 => 76,  135 => 47,  126 => 45,  114 => 11,  84 => 28,  70 => 20,  67 => 37,  61 => 20,  38 => 6,  94 => 51,  89 => 20,  85 => 25,  75 => 33,  68 => 19,  56 => 9,  87 => 47,  21 => 2,  26 => 6,  93 => 49,  88 => 49,  78 => 21,  46 => 11,  27 => 2,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 73,  158 => 15,  156 => 75,  151 => 74,  142 => 59,  138 => 49,  136 => 78,  121 => 46,  117 => 44,  105 => 59,  91 => 37,  62 => 23,  49 => 12,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 21,  47 => 19,  40 => 3,  37 => 6,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 15,  120 => 14,  115 => 44,  111 => 43,  108 => 62,  101 => 32,  98 => 39,  96 => 31,  83 => 25,  74 => 22,  66 => 15,  55 => 15,  52 => 17,  50 => 12,  43 => 7,  41 => 11,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 59,  176 => 20,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 71,  149 => 11,  147 => 58,  144 => 53,  141 => 80,  133 => 55,  130 => 48,  125 => 48,  122 => 43,  116 => 43,  112 => 42,  109 => 41,  106 => 61,  103 => 40,  99 => 39,  95 => 38,  92 => 50,  86 => 36,  82 => 35,  80 => 19,  73 => 10,  64 => 18,  60 => 17,  57 => 7,  54 => 10,  51 => 14,  48 => 5,  45 => 11,  42 => 10,  39 => 10,  36 => 11,  33 => 24,  30 => 7,);
    }
}
