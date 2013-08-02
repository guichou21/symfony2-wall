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
        return array (  82 => 23,  60 => 9,  52 => 8,  44 => 7,  77 => 23,  73 => 15,  69 => 21,  64 => 20,  59 => 15,  50 => 12,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
