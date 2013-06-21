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
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\"><head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <meta name=\"copyright\" content=\"GbCreation\">
        <meta name=\"author\" content=\"GbCreation\">
        <meta name=\"language\" content=\"fr\">
        <meta http-equiv=\"content-language\" content=\"fr\">
        
        <title>Karen.Guiom | ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />    
        
    </head>
    <body>
        <div id=\"root\">
            <header class=\"header\">
                <div class=\"wrap\">
                    <a href=\"/\" class=\"logo\"><img src=\"/img/logo.png\" alt=\"\"></a>
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
        // line 38
        $this->displayBlock('sidebar', $context, $blocks);
        echo " - 
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "        </div>

    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "WeSite!";
    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
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
        return array (  101 => 40,  96 => 39,  91 => 38,  85 => 9,  77 => 41,  74 => 40,  72 => 39,  68 => 38,  37 => 10,  33 => 9,  23 => 1,);
    }
}
