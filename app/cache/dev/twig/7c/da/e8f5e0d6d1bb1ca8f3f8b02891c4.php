<?php

/* GbCreationWallBundle:Comment:edit.form.html.twig */
class __TwigTemplate_7cdae8f5e0d6d1bb1ca8f3f8b02891c4 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_comment_edit", array("id" => $this->getContext($context, "comment_id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 


";
        // line 24
        echo "
    <p>
        <button class=\"btn btn-primary\" type=\"submit\">Modifier</button>
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Comment:edit.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 24,  27 => 2,  19 => 1,);
    }
}
