<?php

/* themes/bear_skin/templates/menu--main.html.twig */
class __TwigTemplate_21020459bc02301c614fd6f7fa3813e037f346c33eca84ffa818a8b70b6e6673 extends Twig_Template
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
        $tags = array("import" => 1, "macro" => 5, "if" => 7, "for" => 13, "set" => 15);
        $filters = array();
        $functions = array("link" => 24);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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
        $context["menus"] = $this;
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 5
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "  ";
            $context["menus"] = $this;
            // line 7
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 8
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 9
                    echo "      <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "main-nav"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 11
                    echo "      <ul class=\"main-nav__sub\">
    ";
                }
                // line 13
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "        ";
                    // line 15
                    $context["classes"] = array(0 => "main-nav__item", 1 => (($this->getAttribute(                    // line 17
$context["item"], "is_expanded", array())) ? ("expanded") : ("")), 2 => (($this->getAttribute(                    // line 18
$context["item"], "is_collapsed", array())) ? ("collapsed") : ("")), 3 => (($this->getAttribute(                    // line 19
$context["item"], "in_active_trail", array())) ? ("active") : ("")), 4 => (($this->getAttribute(                    // line 20
$context["item"], "below", array())) ? ("parent") : ("")));
                    // line 23
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                    echo ">
          ";
                    // line 24
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
            ";
                    // line 25
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 26
                        echo "              ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
            ";
                    }
                    // line 28
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/bear_skin/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  118 => 28,  112 => 26,  110 => 25,  106 => 24,  101 => 23,  99 => 20,  98 => 19,  97 => 18,  96 => 17,  95 => 15,  93 => 14,  88 => 13,  84 => 11,  78 => 9,  75 => 8,  72 => 7,  69 => 6,  55 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% import _self as menus %}*/
/* */
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul{{ attributes.addClass('main-nav') }}>*/
/*     {% else %}*/
/*       <ul class="main-nav__sub">*/
/*     {% endif %}*/
/*       {% for item in items %}*/
/*         {%*/
/*           set classes = [*/
/*             'main-nav__item',*/
/*             item.is_expanded ? 'expanded',*/
/*             item.is_collapsed ? 'collapsed',*/
/*             item.in_active_trail ? 'active',*/
/*             item.below ? 'parent'*/
/*           ]*/
/*         %}*/
/*         <li{{ item.attributes.addClass(classes) }}>*/
/*           {{ link(item.title, item.url) }}*/
/*             {% if item.below %}*/
/*               {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*             {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
