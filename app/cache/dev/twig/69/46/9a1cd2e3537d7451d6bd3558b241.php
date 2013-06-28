<?php

/* GbCreationWallBundle:Wall:index.html.twig */
class __TwigTemplate_69469a1cd2e3537d7451d6bd3558b241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GbCreationWallBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"grid\">
    <div class=\"row-fluid\">
        <div id=\"column\" class=\"column\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "items"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <!-- <article id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
            echo "\" class=\"item span4\">-->
            <article id=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
            echo "\" class=\"myItem\">
                <header>
                </header>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_wall__show", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/wall/", 1 => $this->getAttribute($this->getContext($context, "item"), "file")))), "html", null, true);
            echo "\" />
                </a>
                    <span class=\"date\"><time datetime=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "d/m/Y"), "html", null, true);
            echo "</time></span>
                    <span class=\"description\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
            echo "</span>
                    <span class=\"nb-comments\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "like"), "html", null, true);
            echo " <i class=\"icon-comment icon-white\"></i></span>
                <!--<footer class=\"meta\">
                    <p>Comments: todo</p>
                    <h4>tags : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "tags"), "html", null, true);
            echo "</h4>
                    <h4> il y a ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "like"), "html", null, true);
            echo " likes</h4>
                    <h4>ceci est type : ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "type"), "html", null, true);
            echo "</h4>     
                </footer>-->
            </article>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <p>Il n'y a pas de photos dans le mur</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Wall:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 17,  67 => 16,  61 => 15,  56 => 13,  52 => 12,  46 => 9,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
