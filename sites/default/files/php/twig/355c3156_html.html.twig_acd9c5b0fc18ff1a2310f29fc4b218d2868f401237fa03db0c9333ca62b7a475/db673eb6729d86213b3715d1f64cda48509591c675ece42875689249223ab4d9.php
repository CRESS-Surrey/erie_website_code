<?php

/* themes/bear_skin/templates/html.html.twig */
class __TwigTemplate_12990e763831714b64bb2ac30c784b312abe415d88b3eec314dad98f93ec586c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("raw" => 5, "safe_join" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw', 'safe_join'),
                array()
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

        // line 1
        echo "<!DOCTYPE html>
<html";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
<head>
  <head>
    <head-placeholder token=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>
</head>
<body";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <ul id=\"skip-link\" class=\"visually-hidden focusable\">
    <li><a href=\"#mainMenuLabel\" class=\"element-invisible element-focusable\">Navigation</a></li>
    <li><a href=\"#content\" class=\"element-invisible element-focusable\">Content</a></li>
    <li><a href=\"#footer\" class=\"element-invisible element-focusable\">Footer</a></li>
  </ul>

  ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "

  <!--[if lt IE 9]>
  <script src=\"";
        // line 23
        echo "/js/vendor/html5-respond.js\"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src=\"";
        // line 26
        echo "/js/vendor/html5.js\"></script>
  <![endif]-->
  <js-bottom-placeholder token=\"";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  <script>jQuery.noConflict();</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/bear_skin/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  99 => 26,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  70 => 11,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/* <head>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/* </head>*/
/* <body{{ attributes }}>*/
/*   <ul id="skip-link" class="visually-hidden focusable">*/
/*     <li><a href="#mainMenuLabel" class="element-invisible element-focusable">Navigation</a></li>*/
/*     <li><a href="#content" class="element-invisible element-focusable">Content</a></li>*/
/*     <li><a href="#footer" class="element-invisible element-focusable">Footer</a></li>*/
/*   </ul>*/
/* */
/*   {{ page_top }}*/
/*   {{ page }}*/
/*   {{ page_bottom }}*/
/* */
/*   <!--[if lt IE 9]>*/
/*   <script src="{# PHP: print $base_path . $path_to_bear_skin; #}/js/vendor/html5-respond.js"></script>*/
/*   <![endif]-->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="{# PHP: print $base_path . $path_to_bear_skin; #}/js/vendor/html5.js"></script>*/
/*   <![endif]-->*/
/*   <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   <script>jQuery.noConflict();</script>*/
/* </body>*/
/* </html>*/
/* */
