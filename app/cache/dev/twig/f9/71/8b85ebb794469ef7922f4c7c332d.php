<?php

/* GbCreationWallBundle:Admin:stats.html.twig */
class __TwigTemplate_f9718b85ebb794469ef7922f4c7c332d extends Twig_Template
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
     <section id=\"stats\">
      <div class=\"page-header\">
        <h1>Administration</h1>
      </div>
      <p class=\"lead\">bla bla bla bla <br>       blabla sur admin</p>

       <h2>Stats</h2>
       <h4>Photos</h4>
             <p>Il y a XX photos</p>
       <h4>Commentaires</h4>
          <p>Il y a YY commentaires</p>
    </section>

";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Admin:stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
