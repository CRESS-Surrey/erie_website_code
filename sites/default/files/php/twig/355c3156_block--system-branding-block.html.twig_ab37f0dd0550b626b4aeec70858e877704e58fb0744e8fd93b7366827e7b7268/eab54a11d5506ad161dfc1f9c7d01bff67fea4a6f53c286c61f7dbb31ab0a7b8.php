<?php

/* themes/bear_skin/templates/block--system-branding-block.html.twig */
class __TwigTemplate_2477596589b39ef1de946edeaf659e8414fe79f690a5561a678174bdc883bcd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/bear_skin/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 3);
        $filters = array("t" => 5);
        $functions = array("path" => 5);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 4
            echo "    <div class=\"site-header__logo\">
      <a href=\"";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
      </a>
    </div>
  ";
        }
        // line 10
        echo "  ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 11
            echo "    <div class=\"site-header__name\">
      <a href=\"";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
    </div>
  ";
        }
        // line 15
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/bear_skin/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  82 => 12,  79 => 11,  76 => 10,  67 => 6,  61 => 5,  58 => 4,  55 => 3,  52 => 2,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {% block content %}*/
/*   {% if site_logo %}*/
/*     <div class="site-header__logo">*/
/*       <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">*/
/*         <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*       </a>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if site_name %}*/
/*     <div class="site-header__name">*/
/*       <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*     </div>*/
/*   {% endif %}*/
/*   {{ site_slogan }}*/
/* {% endblock %}*/
