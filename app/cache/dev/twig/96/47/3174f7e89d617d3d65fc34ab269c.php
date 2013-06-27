<?php

/* ::carousel.html.twig */
class __TwigTemplate_96473174f7e89d617d3d65fc34ab269c extends Twig_Template
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
      <!-- 
Faire les icon de différentes taille.......
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">

    -->
      <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.png\">

    </head>
    <body>

<!-- NAVBAR
    ================================================== -->
    <div class=\"navbar-wrapper\">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class=\"container\">

        <div class=\"navbar navbar-inverse\">
          <div class=\"navbar-inner\">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"#\">Karen.Guiom</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class=\"nav-collapse collapse\">
              <ul class=\"nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">Nav header</li>
                    <li><a href=\"#\">Separated link</a></li>
                    <li><a href=\"#\">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



<!-- Carousel
    ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\">
      <div class=\"carousel-inner\">
        <div class=\"item active\">
          <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/header0.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/header1.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/header2.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
    </div><!-- /.carousel -->





    
        <div id=\"root\">
            <header class=\"header\">
                <div class=\"wrap\">
                    <a href=\"/\" class=\"logo\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/img/article_blog.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <nav>
                        <a href=\"/blog\">Blog</a>
                        <a href=\"/tutoriels\">Wall</a>
                        <form method=\"get\" action=\"/search\">
                            <input name=\"q\" placeholder=\"Rechercher\">
                        </form>
              
                    </nav>
                </div>
            </header>
            <section class=\"subhead\">
                <div class=\"wrap\" id=\"subhead\">
                    <h1>Karen.Guiom & Alice</h1>
                    <div class=\"subtitle\">
                        le site de la famille
                    </div>
                </div>
            </section>

quel doctype
        ";
        // line 124
        $this->displayBlock('sidebar', $context, $blocks);
        echo " - 
        ";
        // line 125
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "        </div>




  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
     <script>
      !function (\$) {
        \$(function(){
          // carousel demo
          \$('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/js/holder/holder.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/css/sy2-wall.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">   
        ";
    }

    // line 124
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 125
    public function block_body($context, array $blocks = array())
    {
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 126,  284 => 125,  279 => 124,  273 => 17,  269 => 16,  264 => 15,  261 => 14,  255 => 11,  246 => 157,  234 => 148,  230 => 147,  226 => 146,  222 => 145,  218 => 144,  214 => 143,  210 => 142,  206 => 141,  202 => 140,  198 => 139,  194 => 138,  190 => 137,  186 => 136,  175 => 127,  172 => 126,  170 => 125,  166 => 124,  142 => 103,  124 => 88,  118 => 85,  112 => 82,  47 => 19,  45 => 14,  40 => 12,  36 => 11,  24 => 1,);
    }
}
