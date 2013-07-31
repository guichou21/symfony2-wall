<?php

/* GbCreationWallBundle:Item:edit.form.html.twig */
class __TwigTemplate_abc3f6f3ee38e797feeba6b358933bc3 extends Twig_Template
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
        echo "
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/wall/", 1 => $this->getContext($context, "item_name")))), "html", null, true);
        echo "\" class=\"Thumbnail\" alt=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "item_name"), "html", null, true);
        echo " n'a pas été trouvée\" class=\"large\" />

<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_item_edit", array("id" => $this->getContext($context, "item_id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo ">
   <div class=\"error\">
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
</div>

  <fieldset class=\"itemForm\">
    <div class=\"form-group\">
\t\t  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label');
        echo "
\t    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
\t\t  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "inputDescription")));
        echo "
\t</div>

  <div class=\"form-group\">
      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'label');
        echo "
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
        echo "
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
  </div>

\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    <button class=\"btn btn-primary\" type=\"submit\">Modifier</button>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_items_show");
        echo "\" class=\"btn btn-primary\">Annuler</a>
  </fieldset>
</form>

    ";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Item:edit.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  74 => 22,  68 => 19,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  45 => 11,  37 => 6,  29 => 4,  22 => 2,  19 => 1,);
    }
}
