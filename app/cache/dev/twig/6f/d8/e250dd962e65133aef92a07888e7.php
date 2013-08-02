<?php

/* GbCreationUserBundle:Security:login.html.twig */
class __TwigTemplate_6fd8e250dd962e65133aef92a07888e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GbCreationUserBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GbCreationUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     <section id=\"edit\">
      <div class=\"page-header\">
            <h1>Espace réservé aux Administrateurs</h1>
      </div>


  ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
  ";
        }
        // line 13
        echo " 
  <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input class=\"btn btn-primary\" type=\"submit\" value=\"Connexion\" />
  </form>
 
     </section>
";
    }

    public function getTemplateName()
    {
        return "GbCreationUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  50 => 14,  47 => 13,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
