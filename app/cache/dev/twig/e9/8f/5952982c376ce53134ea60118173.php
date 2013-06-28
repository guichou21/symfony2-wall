<?php

/* GbCreationWallBundle::layout.html.twig */
class __TwigTemplate_e98f5952982c376ce53134ea60118173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/masonry/masonry.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
\$('#column').masonry({
    itemSelector: '.myItem',
    isAnimated: true,
    isFitWidth: true
});
</script>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  37 => 9,  34 => 8,  29 => 3,);
    }
}
