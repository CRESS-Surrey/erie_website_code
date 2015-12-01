<?php

/* themes/bear_skin/templates/menu-local-tasks.html.twig */
class __TwigTemplate_4575e3ae9bc4b139737f94a8694b3244ac9a21ae8c0072632d4539d94fd867c6 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array("t" => 2);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 2
            echo "  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal is-collapsible\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs-primary tabs primary clearfix\" data-drupal-nav-tabs-target>";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
        // line 7
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 8
            echo "  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal\" aria-labelledby=\"secondary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs-secondary tabs secondary clearfix\">";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bear_skin/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 8,  57 => 7,  51 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if primary %}*/
/*   <h2 id="primary-tabs-title" class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*   <nav role="navigation" class="is-horizontal is-collapsible" aria-labelledby="primary-tabs-title" data-drupal-nav-tabs>*/
/*     <ul class="tabs-primary tabs primary clearfix" data-drupal-nav-tabs-target>{{ primary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <h2 id="secondary-tabs-title" class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*   <nav role="navigation" class="is-horizontal" aria-labelledby="secondary-tabs-title" data-drupal-nav-tabs>*/
/*     <ul class="tabs-secondary tabs secondary clearfix">{{ secondary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
