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
        return array (  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
