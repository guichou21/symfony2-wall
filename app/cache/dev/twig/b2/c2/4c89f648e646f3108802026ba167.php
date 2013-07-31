<?php

/* GbCreationWallBundle:Item:form.html.twig */
class __TwigTemplate_b2c24c89f648e646f3108802026ba167 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_item_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo ">
<div class=\"error\">
\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
</div>

  <fieldset class=\"itemForm\">
    <div class=\"form-group\">
    \t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fileToUpload"), 'errors');
        echo "
    \t<div id=\"dropZone\" class=\"dropZone\">
    \t\t<span class=\"labelInputFile\">ou</span>
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fileToUpload"), 'widget', array("attr" => array("class" => "inputFile")));
        echo "
\t\t</div>
    </div>
    <div class=\"form-group\">
\t\t  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label');
        echo "
\t    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
\t\t  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "inputDescription")));
        echo "
\t</div>

  <div class=\"form-group\">
      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'label');
        echo "
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
        echo "
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
  </div>

\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
  </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Item:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  72 => 23,  68 => 22,  64 => 21,  57 => 17,  53 => 16,  49 => 15,  42 => 11,  36 => 8,  28 => 3,  19 => 1,);
    }
}
