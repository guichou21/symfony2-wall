<?php

/* GbCreationWallBundle:Comment:form.html.twig */
class __TwigTemplate_a37ceac63b82ede681c4156f87265f2a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_comment__create", array("item_id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "idItem"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo " class=\"formComment\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  73 => 10,  57 => 7,  40 => 3,  22 => 2,  19 => 1,  75 => 22,  70 => 19,  68 => 18,  64 => 17,  53 => 11,  48 => 5,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
