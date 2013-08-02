<?php

/* GbCreationWallBundle::admin.layout.html.twig */
class __TwigTemplate_f4e711bf01a8327c0e0d7d36731e28d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "      <div class=\"bs-docs-sidebar\">
        <ul class=\"nav nav-list bs-docs-sidenav\">
          <li class=\"";
        // line 6
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin__add") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin__index"))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin__add");
        echo "\" title=\"Ajouter un élément\"><i class=\"icon-chevron-right\"></i> Ajout</a></li>
          <li class=\"";
        // line 7
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin_items_show") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin_item_edit"))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_items_show");
        echo "\" title=\"Voir mes photos\"><i class=\"icon-chevron-right\"></i> Mes Photos</a></li>
          <li class=\"";
        // line 8
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin_comments_show") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin_comment_edit"))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_comments_show");
        echo "\" title=\"Voir les commentaires\"><i class=\"icon-chevron-right\"></i> Les Commentaires</a></li>
          <li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "gb_creation_admin_stats")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_stats");
        echo "\" title=\"Voir les stats du site\"><i class=\"icon-chevron-right\"></i> Stats</a></li>
        </ul>
      </div>

      <div class=\"bs-docs-sidebar\">
        <ul class=\"nav nav-list bs-docs-sidenav\">
          <li class=\"\" ><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" title=\"Se déconnecter\"><i class=\"icon-off\"></i> Déconnexion</a></li>
        </ul>
      </div>

            ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
 <script type=\"text/javascript\">
    \$(function(){ // document ready
        \$('.bs-docs-sidebar').affix({
            offset: {
              top: function () { return \$(window).width() <= 980 ? 80 : 0 }
            , bottom: 270
            }
          });
          //alert(\$(window).width());
      });
</script>

";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle::admin.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  59 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  38 => 7,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 7,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 21,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 8,  50 => 12,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 23,  80 => 19,  73 => 15,  64 => 20,  60 => 9,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 9,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
