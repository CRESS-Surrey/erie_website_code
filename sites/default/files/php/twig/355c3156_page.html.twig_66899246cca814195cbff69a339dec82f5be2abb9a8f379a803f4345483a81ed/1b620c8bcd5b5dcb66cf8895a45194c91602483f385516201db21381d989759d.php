<?php

/* themes/bear_skin/bear_coat/templates/page.html.twig */
class __TwigTemplate_79906bdd6bb17e193856ea56c5aee1faaaba60632ae3c3df3922302f0f713292 extends Twig_Template
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
        $tags = array("if" => 19);
        $filters = array("raw" => 5);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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
        echo "<div class=\"wrapper wrapper--header \">
  <header id=\"header\" role=\"banner\" class=\"site-header\">
    ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["loginpopup"]) ? $context["loginpopup"] : null)));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["sidr"]) ? $context["sidr"] : null)));
        echo "
  </header>
</div>

<div class=\"wrapper wrapper--navigation\">
  <!-- ****** Delete this comment on production *****
  move ";
        // line 12
        echo " to render navigation on separate row 
  ****** -->
</div>

<div class=\"wrapper wrapper--main\">
  <div id=\"main\" class=\"site-main\">
    <main id=\"content\" class=\"column main\" role=\"main\">
      ";
        // line 19
        if ( !twig_test_empty((isset($context["page"]) ? $context["page"] : null))) {
            // line 20
            echo "        <section class=\"main__highlighted\">
          ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </section>
      ";
        }
        // line 24
        echo "
      ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "

      <a id=\"main-content\"></a>

      ";
        // line 29
        if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
            // line 30
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
        <h1 class=\"main__title\" role=\"heading\">";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
        ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
      ";
        } else {
            // line 33
            echo " ";
            // line 34
            echo "        <h1 class=\"u-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bear_page_title"]) ? $context["bear_page_title"] : null), "html", null, true));
            echo "</h1>
      ";
        }
        // line 36
        echo "
      ";
        // line 37
        if ( !twig_test_empty((isset($context["messages"]) ? $context["messages"] : null))) {
            // line 38
            echo "        <section class=\"main__messages\" role=\"region\">
          ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        </section>
      ";
        }
        // line 42
        echo "
      ";
        // line 43
        if (( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null)) ||  !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null)))) {
            // line 44
            echo "        <nav class=\"main__tabs\" role=\"navigation\">
          ";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
        </nav>
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        if ( !twig_test_empty((isset($context["page"]) ? $context["page"] : null))) {
            // line 50
            echo "        <aside class=\"main__help\" role=\"note\">
          ";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 54
        echo "
      ";
        // line 55
        if ( !twig_test_empty((isset($context["action_links"]) ? $context["action_links"] : null))) {
            // line 56
            echo "        <nav class=\"main__action-links\" role=\"navigation\">
          <ul class=\"action-links\"
              role=\"menubar\">";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
        </nav>
      ";
        }
        // line 61
        echo "
      <section class=\"main__content\">
        ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </section>

      ";
        // line 66
        if ( !twig_test_empty((isset($context["feed_icons"]) ? $context["feed_icons"] : null))) {
            // line 67
            echo "        <nav class=\"main__feed-icons\" role=\"navigation\">
          ";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
        </nav>
      ";
        }
        // line 71
        echo "
    </main>
    <!-- /#content -->

    ";
        // line 75
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 76
            echo "      <aside class=\"sidebar-first site-sidebars\">
        ";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside><!-- /.sidebars -->
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 82
            echo "      <aside class=\"sidebar-second site-sidebars\">
        ";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside><!-- /.sidebars -->
    ";
        }
        // line 86
        echo "
  </div>
  <!-- /#main -->
</div>

<div class=\"wrapper wrapper--footer\">
  <div class=\"wrapper wrapper--breadcrumb\">
    <div id=\"breadcrumb\">
      ";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
    </div>
  </div>
  <div class=\"site-footer\">
    <footer id=\"footer\">
      ";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/bear_skin/bear_coat/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 99,  241 => 94,  231 => 86,  225 => 83,  222 => 82,  220 => 81,  217 => 80,  211 => 77,  208 => 76,  206 => 75,  200 => 71,  194 => 68,  191 => 67,  189 => 66,  183 => 63,  179 => 61,  173 => 58,  169 => 56,  167 => 55,  164 => 54,  158 => 51,  155 => 50,  153 => 49,  150 => 48,  144 => 45,  141 => 44,  139 => 43,  136 => 42,  130 => 39,  127 => 38,  125 => 37,  122 => 36,  116 => 34,  114 => 33,  109 => 32,  105 => 31,  100 => 30,  98 => 29,  91 => 25,  88 => 24,  82 => 21,  79 => 20,  77 => 19,  68 => 12,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="wrapper wrapper--header ">*/
/*   <header id="header" role="banner" class="site-header">*/
/*     {{ page.header }}*/
/*     {{ page.navigation }}*/
/*     {{ loginpopup|raw }}*/
/*     {{ sidr|raw }}*/
/*   </header>*/
/* </div>*/
/* */
/* <div class="wrapper wrapper--navigation">*/
/*   <!-- ****** Delete this comment on production ******/
/*   move {# {{ page.navigation }} #} to render navigation on separate row */
/*   ****** -->*/
/* </div>*/
/* */
/* <div class="wrapper wrapper--main">*/
/*   <div id="main" class="site-main">*/
/*     <main id="content" class="column main" role="main">*/
/*       {% if page is not empty %}*/
/*         <section class="main__highlighted">*/
/*           {{ page.highlighted }}*/
/*         </section>*/
/*       {% endif %}*/
/* */
/*       {{ breadcrumb }}*/
/* */
/*       <a id="main-content"></a>*/
/* */
/*       {% if title is not empty %}*/
/*         {{ title_prefix }}*/
/*         <h1 class="main__title" role="heading">{{ title }}</h1>*/
/*         {{ title_suffix }}*/
/*       {% else %} {#// this is needed for ARIA #}*/
/*         <h1 class="u-hidden">{{ bear_page_title }}</h1>*/
/*       {% endif %}*/
/* */
/*       {% if messages is not empty %}*/
/*         <section class="main__messages" role="region">*/
/*           {{ messages }}*/
/*         </section>*/
/*       {% endif %}*/
/* */
/*       {% if tabs is not empty or tabs is not empty %}*/
/*         <nav class="main__tabs" role="navigation">*/
/*           {{ tabs }}*/
/*         </nav>*/
/*       {% endif %}*/
/* */
/*       {% if page is not empty %}*/
/*         <aside class="main__help" role="note">*/
/*           {{ page.help }}*/
/*         </aside>*/
/*       {% endif %}*/
/* */
/*       {% if action_links is not empty %}*/
/*         <nav class="main__action-links" role="navigation">*/
/*           <ul class="action-links"*/
/*               role="menubar">{{ action_links }}</ul>*/
/*         </nav>*/
/*       {% endif %}*/
/* */
/*       <section class="main__content">*/
/*         {{ page.content }}*/
/*       </section>*/
/* */
/*       {% if feed_icons is not empty %}*/
/*         <nav class="main__feed-icons" role="navigation">*/
/*           {{ feed_icons }}*/
/*         </nav>*/
/*       {% endif %}*/
/* */
/*     </main>*/
/*     <!-- /#content -->*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="sidebar-first site-sidebars">*/
/*         {{ page.sidebar_first }}*/
/*       </aside><!-- /.sidebars -->*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second  %}*/
/*       <aside class="sidebar-second site-sidebars">*/
/*         {{ page.sidebar_second }}*/
/*       </aside><!-- /.sidebars -->*/
/*     {% endif %}*/
/* */
/*   </div>*/
/*   <!-- /#main -->*/
/* </div>*/
/* */
/* <div class="wrapper wrapper--footer">*/
/*   <div class="wrapper wrapper--breadcrumb">*/
/*     <div id="breadcrumb">*/
/*       {{ page.breadcrumb }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="site-footer">*/
/*     <footer id="footer">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   </div>*/
/* </div>*/
