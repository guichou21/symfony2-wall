<?php

/* GbCreationWallBundle:Admin:items.show.html.twig */
class __TwigTemplate_13248738bef476ba9a0ad7ec32417504 extends Twig_Template
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
            <th>Date</th>  
            <th>Nom</th>  
            <th>Description</th>
            <th>Likes</th>
            <th>type</th>
            <th id=\"thAction\">Action</th0>
          </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "items"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "          <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "file"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "description"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nbLike"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "type"), "html", null, true);
            echo "</td>
            <td>
              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_wall__show", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-picture icon\"></i></a>
              - <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_item_edit", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil icon\"></i></a>
              - <a class=\"confirmModalLink\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_item_delete", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\"><i class=\"icon-remove icon\"></i></a>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
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
                <p><span class=\"label label-warning\">Attention, Les commentaires associés à la photo seront supprimés.....</span></p>
                <div class=\"alert\">Attention, Les commentaires associés à la photo seront supprimés.....</div>
            </div>
            <div class=\"modal-footer\">
              <a href=\"#\" class=\"btn\" id=\"confirmModalNo\">Non</a>
              <a href=\"#\" class=\"btn btn-primary\" id=\"confirmModalYes\">Oui</a>
        </div>
    </div>

";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
  <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/tableSorter/jquery.tablesorter.js"), "html", null, true);
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
        return "GbCreationWallBundle:Admin:items.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  90 => 37,  53 => 18,  159 => 72,  58 => 18,  195 => 81,  192 => 80,  172 => 19,  167 => 17,  155 => 14,  113 => 63,  77 => 44,  59 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 83,  140 => 55,  132 => 77,  128 => 76,  119 => 42,  107 => 42,  71 => 41,  177 => 65,  165 => 64,  160 => 76,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 40,  61 => 20,  38 => 7,  94 => 38,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  87 => 47,  21 => 2,  26 => 6,  93 => 49,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 7,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 73,  158 => 15,  156 => 75,  151 => 74,  142 => 59,  138 => 57,  136 => 78,  121 => 46,  117 => 44,  105 => 59,  91 => 37,  62 => 23,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 16,  69 => 21,  47 => 14,  40 => 12,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 44,  115 => 44,  111 => 43,  108 => 37,  101 => 32,  98 => 39,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 8,  50 => 12,  43 => 13,  41 => 11,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 59,  176 => 20,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 71,  149 => 11,  147 => 58,  144 => 53,  141 => 80,  133 => 55,  130 => 48,  125 => 48,  122 => 43,  116 => 43,  112 => 42,  109 => 41,  106 => 36,  103 => 40,  99 => 39,  95 => 38,  92 => 33,  86 => 36,  82 => 35,  80 => 19,  73 => 15,  64 => 21,  60 => 9,  57 => 19,  54 => 10,  51 => 14,  48 => 17,  45 => 13,  42 => 11,  39 => 10,  36 => 11,  33 => 4,  30 => 7,);
    }
}
