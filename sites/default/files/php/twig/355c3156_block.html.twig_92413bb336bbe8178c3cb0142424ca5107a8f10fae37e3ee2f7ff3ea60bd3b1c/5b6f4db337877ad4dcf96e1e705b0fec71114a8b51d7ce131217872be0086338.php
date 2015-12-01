<?php

/* block.html.twig */
class __TwigTemplate_7c797aa597284bb2b2dbb609d0f0164d677232aecbd6c8f5bd071b095bdd63e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "if" => 10, "block" => 14);
        $filters = array("clean_class" => 4);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 2
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 5
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 8
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 10
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 11
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 13
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</div>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
      ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  82 => 15,  79 => 14,  74 => 19,  72 => 14,  67 => 13,  59 => 11,  57 => 10,  53 => 9,  48 => 8,  46 => 5,  45 => 4,  44 => 2,);
    }
}
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2{{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% block content %}*/
/*     <div{{ content_attributes.addClass('content') }}>*/
/*       {{ content }}*/
/*     </div>*/
/*   {% endblock %}*/
/* </div>*/
/* */
