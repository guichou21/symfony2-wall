<?php

/* GbCreationUserBundle::layout.html.twig */
class __TwigTemplate_204d67060833cb49dcc04808e022820a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " 
 Ici on est dans le layout de la viex de user.... pourquoi pas pareil pour Login?<br/>


  ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 13
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
";
        }
        // line 15
        echo "

<section id=\"edit\">
<div class=\"page-header\">
      <h1>Espace réservé aux Administrateurs</h1>
</div>
  ";
        // line 22
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 23
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
      ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 
  ";
        // line 29
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo " </section>
";
    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
    }

    public function getTemplateName()
    {
        return "GbCreationUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  92 => 29,  87 => 31,  84 => 29,  81 => 27,  72 => 24,  67 => 23,  62 => 22,  54 => 15,  48 => 13,  40 => 11,  38 => 10,  32 => 6,  29 => 5,  55 => 16,  50 => 14,  47 => 13,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
