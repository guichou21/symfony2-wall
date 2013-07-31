<?php

/* GbCreationWallBundle:Admin:delete.html.twig */
class __TwigTemplate_860e7ad1ec13e54ee805612d5206ad1f extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"event-modal\" class=\"modal hide fade\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3>Confirmation Suppression</h3>
            </div>
            <div class=\"modal-body\">
                <p>Etes-vous certain de vouloir supprimer ?</p>
            </div>
            <div class=\"modal-footer\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin_items_show");
        echo "\" class=\"btn\">Annuler</a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gb_creation_admin_item_delete", array("id" => $this->getContext($context, "item_id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Supprimer</a>
        </div>
    </div>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\">
  \$(document).ready(function() {
       \$('#event-modal').modal({
        backdrop: true;
    });
  } );

</script>
";
    }

    public function getTemplateName()
    {
        return "GbCreationWallBundle:Admin:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  59 => 20,  53 => 17,  47 => 14,  43 => 13,  32 => 4,  29 => 3,);
    }
}
