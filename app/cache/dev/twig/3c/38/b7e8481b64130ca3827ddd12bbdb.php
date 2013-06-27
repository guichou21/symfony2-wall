<?php

/* GbCreationWallBundle:Default:index.html.twig */
class __TwigTemplate_3c38b7e8481b64130ca3827ddd12bbdb extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "wall";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<p>Bienvenue sur le wall :<b>";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</b>!</p>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,);
    }
}
