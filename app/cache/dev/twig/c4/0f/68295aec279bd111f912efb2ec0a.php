<?php

/* ::admin.base.html.twig */
class __TwigTemplate_c40f68295aec279bd111f912efb2ec0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"copyright\" content=\"GbCreation\">
        <meta name=\"author\" content=\"GbCreation\">
        <meta name=\"language\" content=\"fr\">
        <meta http-equiv=\"content-language\" content=\"fr\">
        
        <title>ADMIN | Karen.Guiom | ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "

    </head>
    <body >


    <!-- /Menu -->
     <div class=\"navbar navbar navbar-fixed-top\">
          <div class=\"navbar-inner\">
            <div class=\"container\">
              <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"brand\" href=\"#\">Karen.Guiom</a>
              <div class=\"nav-collapse collapse\">
                <ul class=\"nav\">
                  <li ><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("gb_creation_wall_homepage");
        echo "\">Accueil</a></li>
                  <li class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin__index");
        echo "\">Admin</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>

        <div class=\"container-fluid\">

         <div class=\"row-fluid\">
            <div class=\"span3\">
              ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        echo " 
            </div>
             <div class=\"span9\">
              ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            </div>
          </div><!-- row -->

        </div> <!-- /container -->


      <hr>
       <footer>
        <p>&copy; GBCreation 2013</p>
      </footer>


      <!-- Partie import javascript-->
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/bootstrap-affix.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
        <noscript>Votre navigateur ne supporte pas le javaScript</noscript>
      ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "
    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "WeSite!";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">     
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/jquery-ui/jquery-ui.1.10.0.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">   

        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/sy2-admin.wall-base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">     
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/jquery-ui/jquery-ui-timepicker-addon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        ";
    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "      
      ";
    }

    public function getTemplateName()
    {
        return "::admin.base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 74,  172 => 73,  167 => 55,  162 => 52,  156 => 20,  152 => 19,  147 => 17,  143 => 16,  138 => 15,  135 => 14,  129 => 11,  123 => 76,  121 => 73,  116 => 71,  112 => 70,  108 => 69,  93 => 56,  91 => 55,  85 => 52,  71 => 41,  67 => 40,  47 => 22,  45 => 14,  40 => 12,  24 => 1,  77 => 23,  73 => 22,  69 => 21,  64 => 20,  59 => 15,  50 => 12,  46 => 10,  42 => 9,  38 => 7,  36 => 11,  32 => 4,  29 => 3,);
    }
}
