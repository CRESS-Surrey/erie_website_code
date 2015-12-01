<?php

/* themes/bear_skin/templates/page.html.twig */
class __TwigTemplate_06eace9334525763d99c4505fd8fed54271d27e474dcd8e813716f382f7d33e0 extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<div class=\"wrapper wrapper--header \">
  <header id=\"header\" role=\"banner\" class=\"site-header\">
    
    ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

    ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "

  </header>
</div>

<div class=\"wrapper wrapper--navigation\">
  <!-- ****** Delete this comment on production *****
  move ";
        // line 13
        echo " to render navigation on separate row 
  ****** -->
</div>

<div class=\"wrapper wrapper--main\">
  <div id=\"main\" class=\"site-main\">
    <main id=\"content\" class=\"column main\" role=\"main\">
      ";
        // line 20
        if ( !twig_test_empty((isset($context["page"]) ? $context["page"] : null))) {
            // line 21
            echo "        <section class=\"main__highlighted\">
          ";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </section>
      ";
        }
        // line 25
        echo "
      <a id=\"main-content\"></a>

      ";
        // line 28
        if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
        <h1 class=\"main__title\" role=\"heading\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
        ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
      ";
        }
        // line 33
        echo "
      ";
        // line 34
        if ( !twig_test_empty((isset($context["messages"]) ? $context["messages"] : null))) {
            // line 35
            echo "        <section class=\"main__messages\" role=\"region\">
          ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        </section>
      ";
        }
        // line 39
        echo "
      ";
        // line 40
        if (( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null)) ||  !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null)))) {
            // line 41
            echo "        <nav class=\"main__tabs\" role=\"navigation\">
          ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
        </nav>
      ";
        }
        // line 45
        echo "
      ";
        // line 46
        if ( !twig_test_empty((isset($context["page"]) ? $context["page"] : null))) {
            // line 47
            echo "        <aside class=\"main__help\" role=\"note\">
          ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 51
        echo "
      ";
        // line 52
        if ( !twig_test_empty((isset($context["action_links"]) ? $context["action_links"] : null))) {
            // line 53
            echo "        <nav class=\"main__action-links\" role=\"navigation\">
          <ul class=\"action-links\"
              role=\"menubar\">";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
        </nav>
      ";
        }
        // line 58
        echo "
      <section class=\"main__content\">
        ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </section>

      ";
        // line 63
        if ( !twig_test_empty((isset($context["feed_icons"]) ? $context["feed_icons"] : null))) {
            // line 64
            echo "        <nav class=\"main__feed-icons\" role=\"navigation\">
          ";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
        </nav>
      ";
        }
        // line 68
        echo "
    </main>
    <!-- /#content -->

    ";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 73
            echo "      <aside class=\"sidebar-first site-sidebars\">
        ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside><!-- /.sidebars -->
    ";
        }
        // line 77
        echo "
    ";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 79
            echo "      <aside class=\"sidebar-second site-sidebars\">
        ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside><!-- /.sidebars -->
    ";
        }
        // line 83
        echo "
  </div>
  <!-- /#main -->
</div>

<div class=\"wrapper wrapper--footer\">
  <div class=\"wrapper wrapper--breadcrumb\">
    <div id=\"breadcrumb\">
      ";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
    </div>
  </div>
  <div class=\"site-footer\">
    <footer id=\"footer\">
      ";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/bear_skin/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 96,  223 => 91,  213 => 83,  207 => 80,  204 => 79,  202 => 78,  199 => 77,  193 => 74,  190 => 73,  188 => 72,  182 => 68,  176 => 65,  173 => 64,  171 => 63,  165 => 60,  161 => 58,  155 => 55,  151 => 53,  149 => 52,  146 => 51,  140 => 48,  137 => 47,  135 => 46,  132 => 45,  126 => 42,  123 => 41,  121 => 40,  118 => 39,  112 => 36,  109 => 35,  107 => 34,  104 => 33,  99 => 31,  95 => 30,  90 => 29,  88 => 28,  83 => 25,  77 => 22,  74 => 21,  72 => 20,  63 => 13,  53 => 6,  48 => 4,  43 => 1,);
    }
}
/* <div class="wrapper wrapper--header ">*/
/*   <header id="header" role="banner" class="site-header">*/
/*     */
/*     {{ page.header }}*/
/* */
/*     {{ page.navigation }}*/
/* */
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
/*       <a id="main-content"></a>*/
/* */
/*       {% if title is not empty %}*/
/*         {{ title_prefix }}*/
/*         <h1 class="main__title" role="heading">{{ title }}</h1>*/
/*         {{ title_suffix }}*/
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
