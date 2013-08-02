<?php

/* GbCreationWallBundle:Admin:add.html.twig */
class __TwigTemplate_0fb737519f555fd0b8c164ad32cd9833 extends Twig_Template
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
     <section id=\"add\">
    ";
        // line 6
        $this->env->loadTemplate("GbCreationWallBundle:Item:form.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"))));
        // line 7
        echo "    </section>

\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "\t\t<div id=\"alertMsg\" class=\"alert alert-success\">
\t\t<button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
\t\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery-ui/1.10/minified/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery-ui/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery-ui/jquery-ui-sliderAccess.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
  \$(document).ready(function() {
\t\$(\"#alertMsg\").fadeOut(3000);

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
        return "GbCreationWallBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  73 => 22,  69 => 21,  64 => 20,  59 => 15,  50 => 12,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
