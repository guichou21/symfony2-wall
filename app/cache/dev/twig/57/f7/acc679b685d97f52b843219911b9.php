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
        return array (  61 => 20,  57 => 19,  53 => 18,  48 => 17,  42 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
