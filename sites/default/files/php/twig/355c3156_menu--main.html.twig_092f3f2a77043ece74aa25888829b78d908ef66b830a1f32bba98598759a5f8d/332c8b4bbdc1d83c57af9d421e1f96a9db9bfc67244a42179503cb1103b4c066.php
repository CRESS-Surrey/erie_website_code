<?php

/* themes/jethro/templates/menu--main.html.twig */
class __TwigTemplate_e574c937cf2cfd891b4b57099d6c0e31bb6cde04466776033afde480e0cceb85 extends Twig_Template
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
        $tags = array("for" => 14, "if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array(),
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

        // line 10
        echo "
";
        // line 12
        echo "
<ul class=\"nav navbar-nav\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "    ";
            // line 16
            echo "    ";
            if ($this->getAttribute($context["item"], "below", array())) {
                // line 17
                echo "      <li class=\"dropdown\">
\t<a href=\"";
                // line 18
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo " <b class=\"caret\"></b> </a>
\t<ul class=\"dropdown-menu\">
\t  ";
                // line 21
                echo "\t  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    echo "\t    <li ><a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "\t</ul>
      </li>
    ";
                // line 27
                echo "    ";
            } else {
                // line 28
                echo "      ";
                // line 29
                echo "      ";
                if (($context["item"] == "node")) {
                    // line 30
                    echo "\t<li class=\"active\" ><a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"  > ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</a></li>
      ";
                } else {
                    // line 32
                    echo "\t<li ><a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"  > ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</a></li>
      ";
                }
                // line 34
                echo "    ";
            }
            // line 35
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/jethro/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  116 => 35,  113 => 34,  105 => 32,  97 => 30,  94 => 29,  92 => 28,  89 => 27,  85 => 24,  74 => 22,  69 => 21,  62 => 18,  59 => 17,  56 => 16,  54 => 15,  50 => 14,  46 => 12,  43 => 10,);
    }
}
/* {#  https://api.drupal.org/api/drupal/core!modules!system!templates!menu.html.twig/8*/
/*     menu_name: The machine name of the menu.*/
/*     items: A nested list of menu items. Each menu item contains:*/
/*       attributes: HTML attributes for the menu item.*/
/*       below: The menu item child items.*/
/*       title: The menu link title.*/
/*       url: The menu link url, instance of \Drupal\Core\Url*/
/*       localized_options: Menu link localized options.*/
/* #}*/
/* */
/* {# All menu and submenu items #}*/
/* */
/* <ul class="nav navbar-nav">*/
/*   {% for item in items %}*/
/*     {# Menu with submenu #}*/
/*     {% if item.below %}*/
/*       <li class="dropdown">*/
/* 	<a href="{{ item.url }}" class="dropdown-toggle" data-toggle="dropdown" > {{ item.title }} <b class="caret"></b> </a>*/
/* 	<ul class="dropdown-menu">*/
/* 	  {# Menu -> Submenu #}*/
/* 	  {% for item in item.below %}*/
/* 	    <li ><a href="{{ item.url }}"> {{ item.title }} </a></li>*/
/* 	  {% endfor %}*/
/* 	</ul>*/
/*       </li>*/
/*     {# Menu without submenu #}*/
/*     {% else %}*/
/*       {# Menu - Link #}*/
/*       {% if item == 'node' %}*/
/* 	<li class="active" ><a href="{{ item.url }}"  > {{ item.title }}</a></li>*/
/*       {% else %}*/
/* 	<li ><a href="{{ item.url }}"  > {{ item.title }}</a></li>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </ul>*/
/* */
