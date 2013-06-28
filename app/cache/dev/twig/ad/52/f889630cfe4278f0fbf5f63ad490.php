<?php

/* ::base.html.twig */
class __TwigTemplate_ad52f889630cfe4278f0fbf5f63ad490 extends Twig_Template
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
        
        <title>Karen.Guiom | ";
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
        // line 19
        echo "

    </head>
    <body>


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
                  <li class=\"active\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("gb_creation_wall_homepage");
        echo "\">Accueil</a></li>
                  <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("gb_creation_wall_homepage");
        echo "\">Wall</a></li>
                  <li><a href=\"#contact\">Contact</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>

        <div class=\"container\">

          ";
        // line 48
        $this->displayBlock('sidebar', $context, $blocks);
        echo " 
          ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
        </div> <!-- /container -->


      <hr>
       <footer>
        <p>&copy; GBCreation 2013</p>
      </footer>

      ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">     
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/sy2-wall-base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">     
        ";
    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  138 => 49,  133 => 48,  127 => 17,  123 => 16,  118 => 15,  115 => 14,  109 => 11,  103 => 60,  101 => 59,  90 => 50,  88 => 49,  84 => 48,  71 => 38,  67 => 37,  47 => 19,  45 => 14,  40 => 12,  36 => 11,  24 => 1,);
    }
}
