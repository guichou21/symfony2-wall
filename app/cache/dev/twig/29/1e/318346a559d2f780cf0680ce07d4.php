<?php

/* GbCreationWallBundle:Wall:show.html.twig */
class __TwigTemplate_291e318346a559d2f780cf0680ce07d4 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <article class=\"item\">
        <header>
         <div class=\"date\"><time datetime=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
        echo "</h2>
        </header>
         <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/wall/", 1 => $this->getAttribute($this->getContext($context, "item"), "file")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "file"), "html", null, true);
        echo " n'a pas été trouvée\" class=\"large\" />
    </article>

    <article class=\"comments\">
        <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Commentaires  (";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nbLike"), "html", null, true);
        echo ")</h3>
            ";
        // line 18
        $this->env->loadTemplate("GbCreationWallBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, "comments"))));
        // line 19
        echo "        </section>

          <h3>Ajouter un commentaire</h3>
           ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GbCreationWallBundle:Comment:new", array("item_id" => $this->getAttribute($this->getContext($context, "item"), "id"))));
        echo "
    </section>
    </article>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Wall:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 19,  68 => 18,  64 => 17,  53 => 11,  48 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
