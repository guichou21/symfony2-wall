<?php

/* GbCreationWallBundle:Admin:comments.show.html.twig */
class __TwigTemplate_9b26e93ad199802dcb162f985bf8fc88 extends Twig_Template
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
        <h1>Liste des Commentaires</h1>
      </div>

";
        // line 12
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "   <div id=\"alertMsg\" class=\"alert alert-success\">
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

      <table id=\"resultData\" class=\"table table-striped tableSorter\">
         <thead>
          <tr>
            <th id=\"thId\">Id</th>  
            <th id=\"thIdItem\">#</th>
            <th id=\"thDate\">Date</th>  
            <th id=\"thAuthor\">Auteur</th>  
            <th id=\"thComment\">Commentaires</th>
            <th id=\"thApproved\">Aprouvé</th>
            <th id=\"thAction\">Action</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comments"));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 34
            echo "          <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "commentaire"), "idItem"), "id"), "html", null, true);
            echo " ";
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "created"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "author"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "comment"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            if (($this->getAttribute($this->getContext($context, "commentaire"), "isApproved") == "1")) {
                echo "oui";
            } else {
                echo "non";
            }
            echo " </td>
            <td>
              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_wall__show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "commentaire"), "idItem"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-picture icon\"></i></a>
              - <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_comment_edit", array("id" => $this->getAttribute($this->getContext($context, "commentaire"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil icon\"></i></a>
              - <a class=\"confirmModalLink\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_comment_delete", array("id" => $this->getAttribute($this->getContext($context, "commentaire"), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\"><i class=\"icon-remove icon\"></i></a>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    </section>


        <div id=\"event-modal\" class=\"modal hide fade\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3>Confirmation Suppression</h3>
            </div>
            <div class=\"modal-body\">
                <p>Etes-vous certain de vouloir supprimer ?</p>
            </div>
            <div class=\"modal-footer\">
              <a href=\"#\" class=\"btn\" id=\"confirmModalNo\">Non</a>
              <a href=\"#\" class=\"btn btn-primary\" id=\"confirmModalYes\">Oui</a>
        </div>
    </div>

";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
 <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/tableSorter/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\">
  \$(document).ready(function() {
      \$('#resultData').tablesorter(); 
      \$(\"#thAction\").toggleClass('header ');

       var theHREF; 
      \$(\".confirmModalLink\").click(function(e) {
          e.preventDefault();
          theHREF = \$(this).attr(\"href\");
          \$(\"#event-modal\").modal(\"show\");
      });
   
      \$(\"#confirmModalNo\").click(function(e) {
          \$(\"#event-modal\").modal(\"hide\");
      });
   
      \$(\"#confirmModalYes\").click(function(e) {
          window.location.href = theHREF;
      });    

      \$(\"#alertMsg\").fadeOut(3000);
  } );

</script>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Admin:comments.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 73,  159 => 72,  154 => 71,  130 => 48,  120 => 44,  116 => 43,  112 => 42,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  86 => 36,  82 => 35,  79 => 34,  75 => 33,  58 => 18,  49 => 15,  45 => 13,  40 => 12,  32 => 5,  29 => 4,);
    }
}
