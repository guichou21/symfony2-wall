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
        echo "\">Wall</a></li>
                  <li class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("gb_creation_admin__index");
        echo "\">Admin</a></li>
                </ul>
                 <p class=\"navbar-text pull-right\">
                    ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "                       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" title=\"Se déconnecter\"><i class=\"icon-off\"></i></a>
                    ";
        } else {
            // line 47
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"icon-user\"></i></a>
                    ";
        }
        // line 49
        echo "                  </p>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>

        <div class=\"container-fluid\">

         <div class=\"row-fluid\">
            <div class=\"span3\">
              ";
        // line 59
        $this->displayBlock('sidebar', $context, $blocks);
        echo " 
            </div>
             <div class=\"span9\">
              ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "            </div>
          </div><!-- row -->

        </div> <!-- /container -->


      <hr>
       <footer>
        <p>&copy; GBCreation 2013</p>
      </footer>


      <!-- Partie import javascript-->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/bootstrap-affix.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
        <noscript>Votre navigateur ne supporte pas le javaScript</noscript>
      ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
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

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
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
        return array (  195 => 81,  192 => 80,  187 => 62,  182 => 59,  176 => 20,  172 => 19,  167 => 17,  163 => 16,  158 => 15,  155 => 14,  149 => 11,  143 => 83,  141 => 80,  136 => 78,  132 => 77,  128 => 76,  113 => 63,  111 => 62,  105 => 59,  93 => 49,  79 => 45,  77 => 44,  71 => 41,  45 => 14,  36 => 11,  24 => 1,  95 => 30,  92 => 29,  87 => 47,  84 => 29,  81 => 27,  72 => 24,  67 => 40,  62 => 22,  54 => 15,  48 => 13,  40 => 12,  38 => 10,  32 => 6,  29 => 5,  55 => 16,  50 => 14,  47 => 22,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
