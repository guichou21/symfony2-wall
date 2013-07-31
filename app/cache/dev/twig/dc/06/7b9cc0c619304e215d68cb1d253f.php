<?php

/* GbCreationWallBundle:Admin:items.html.twig */
class __TwigTemplate_dc067b9cc0c619304e215d68cb1d253f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GbCreationWallBundle::admin.layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "     
<section id=\"gallery\">
      <div class=\"page-header\">
        <h1>Liste des Photos</h1>
      </div>

";
        // line 12
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "   <div class=\"alert alert-success\">
      <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
      ";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "

      <table id=\"resultData\" class=\"tableSorter\">
         <thead>
          <tr>
            <th>Id</th>  
            <th>Date</th>  
            <th>Nom</th>  
            <th>Description</th>
            <th>Likes</th>
            <th>type</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "items"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "          <tr>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "file"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nbLike"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "type"), "html", null, true);
            echo "</td>
            <td>
              <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_wall__show", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-picture icon\"></i></a>
              - <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin__edit", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil icon\"></i></a>
              - <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin__delete", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove icon\"></i></a>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    </section>

";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

 <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/tableSorter/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\">
  \$(document).ready(function() {
      \$('#resultData').tablesorter(); 
  } );

</script>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Admin:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 58,  133 => 56,  124 => 47,  114 => 43,  110 => 42,  106 => 41,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  78 => 33,  74 => 32,  58 => 18,  49 => 15,  45 => 13,  40 => 12,  32 => 5,  29 => 4,);
    }
}
