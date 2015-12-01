<?php

/* themes/jethro/templates/page.html.twig */
class __TwigTemplate_24d92b3581f93cd8a19df610da8661465aad7dc4b0aadadc7db88c97a18963cf extends Twig_Template
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
        $tags = array("if" => 63);
        $filters = array("t" => 228);
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

        // line 61
        echo "<!----Header start --->

";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 64
            echo "  <div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
\t";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 77
        echo "<!---Header End --->

<!--- Banner start ---->

";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 82
            echo "  <div id=\"headerwrap\">
    <div class=\"container\">
      <div class=\"banner-text-block\">
        ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div> <!-- /headerwrap -->
";
        }
        // line 90
        echo "
<!--- End Banner --->

<!-- Yellow Wrap -->
";
        // line 94
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array()))) {
            // line 95
            echo "  <div id=\"db\">
    <div class=\"container\">
      <div class=\"row centered\">
        ";
            // line 98
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array())) {
                // line 99
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 100
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array()), "html", null, true));
                echo "
          </div><!-- /col-lg-4 -->
        ";
            }
            // line 103
            echo "
        ";
            // line 104
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array())) {
                // line 105
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 106
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array()), "html", null, true));
                echo "

          </div><!-- /col-lg-4 -->
        ";
            }
            // line 110
            echo "
        ";
            // line 111
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array())) {
                // line 112
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 113
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array()), "html", null, true));
                echo "
          </div><!-- /col-lg-4 -->
        ";
            }
            // line 116
            echo "      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /yellow wrap -->
";
        }
        // line 120
        echo "

<!-- Dark Blue Wrap / Highlighted -->

";
        // line 124
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 125
            echo "  <div id=\"y\">
    <div class=\"container centered\">
      ";
            // line 127
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
    </div><!-- /container -->
  </div><!-- /Dark Blue wrap -->

";
        }
        // line 132
        echo "
<div class=\"content\">
  <div class=\"container\">
    ";
        // line 135
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 136
            echo "      <div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
\t<!-- Sidebar 2 -->
\t<div class=\"sidebar\">
\t  ";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t</div>
      </div>
    ";
        }
        // line 143
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 144
            echo "      <div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
\t";
            // line 145
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 149
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 150
            echo "      <div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
\t<!-- Sidebar 1 -->
\t<div class=\"sidebar\">
\t  ";
            // line 153
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t</div>
      </div>
    ";
        }
        // line 157
        echo "  </div>
</div>

<div class=\"clearfix\"></div>

";
        // line 162
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_highlighted", array())) {
            // line 163
            echo "  <div id=\"db\">
    <div class=\"container centered\">
      ";
            // line 165
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_highlighted", array()), "html", null, true));
            echo "
    </div><!-- /container -->
  </div><!-- /Dark Blue wrap -->

";
        }
        // line 170
        echo "
  <!--Page Bottom highlight Yellow Wrap / Intro Text -->

";
        // line 173
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom_highlighted", array())) {
            // line 174
            echo "  <div id=\"y\">
    <div class=\"container\">
      <div class=\"col-lg-12 centered\">
        ";
            // line 177
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom_highlighted", array()), "html", null, true));
            echo "
      </div>
    </div><!-- /container -->
  </div><!-- /yellow wrap -->
";
        }
        // line 182
        echo "
<!--End Page Bottom Highlight ---->


<!-- White Wrap Version 2 - footer top region-->
";
        // line 187
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 188
            echo "  <div id=\"w2\">
    <div class=\"container\">
      <div class=\"row centered\">
        ";
            // line 191
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /White Wrap Ver.2 - Social Icons -->

";
        }
        // line 197
        echo "
<!-- Footer Wrap -->
";
        // line 199
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
            // line 200
            echo "  <div id=\"f\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 203
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 204
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 205
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 208
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 209
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 210
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 213
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 214
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 215
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 218
            echo "      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /Footer wrap -->
";
        }
        // line 222
        echo "

<div id=\"c\">
  <div class=\"container\">
    <div class=\"col-md-8\">
      <div class=\"pull-left powered-by-block\">
\t<p>";
        // line 228
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Jethro ported to Drupal by")));
        echo " <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p>
      </div>
    </div>
    <div class=\"col-md-4\">
      ";
        // line 232
        if ((isset($context["show_social_icons"]) ? $context["show_social_icons"] : null)) {
            // line 233
            echo "\t<div class=\"pull-right social-icons\">
\t  <a href=\"";
            // line 234
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true));
            echo "\"><i class=\"icon-facebook\"></i></a>
\t  <a href=\"";
            // line 235
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter"]) ? $context["twitter"] : null), "html", null, true));
            echo "\"><i class=\"icon-twitter\"></i></a>
\t  <a href=\"";
            // line 236
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google"]) ? $context["google"] : null), "html", null, true));
            echo "\"><i class=\"icon-google-plus\"></i></a>
\t  <a href=\"";
            // line 237
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : null), "html", null, true));
            echo "\"><i class=\"icon-linkedin\"></i></a>
\t  <a href=\"";
            // line 238
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest"]) ? $context["pinterest"] : null), "html", null, true));
            echo "\"><i class=\"icon-pinterest\"></i></a>
\t  <a href=\"";
            // line 239
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss"]) ? $context["rss"] : null), "html", null, true));
            echo "\"><i class=\"icon-rss\"></i></a>
\t</div>
      ";
        }
        // line 242
        echo "    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/jethro/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 242,  391 => 239,  387 => 238,  383 => 237,  379 => 236,  375 => 235,  371 => 234,  368 => 233,  366 => 232,  359 => 228,  351 => 222,  345 => 218,  339 => 215,  334 => 214,  331 => 213,  325 => 210,  320 => 209,  317 => 208,  311 => 205,  306 => 204,  304 => 203,  299 => 200,  297 => 199,  293 => 197,  284 => 191,  279 => 188,  277 => 187,  270 => 182,  262 => 177,  257 => 174,  255 => 173,  250 => 170,  242 => 165,  238 => 163,  236 => 162,  229 => 157,  222 => 153,  215 => 150,  212 => 149,  206 => 146,  202 => 145,  197 => 144,  194 => 143,  187 => 139,  180 => 136,  178 => 135,  173 => 132,  165 => 127,  161 => 125,  159 => 124,  153 => 120,  147 => 116,  141 => 113,  136 => 112,  134 => 111,  131 => 110,  124 => 106,  119 => 105,  117 => 104,  114 => 103,  108 => 100,  103 => 99,  101 => 98,  96 => 95,  94 => 94,  88 => 90,  80 => 85,  75 => 82,  73 => 81,  67 => 77,  59 => 72,  49 => 64,  47 => 63,  43 => 61,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the Navigation region.*/
/*  * - page.banner: Items for the banner region.*/
/*  * - page.page_title: Used by Current page Title.*/
/*  * - page.banner_bottom_first: Items For Banner bottom First Region.*/
/*  * - page.banner_bottom_second: Items For Banner bottom Second Region.*/
/*  * - page.banner_bottom_first: Items For Banner bottom Third Region.*/
/*  * - page.highlighted: Items for the highlighted top  region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.content_highlighted: Items for the highlighted in content region.*/
/*  * - page.page_bottom_highlighted: Items for the highlighted in bottom region.*/
/*  * - page.footer_top: Items for the footer top region.*/
/*  * - page.footer_first: Items for the footer first region.*/
/*  * - page.footer_second: Items for the footer Second region.*/
/*  * - page.footer_third: Items for the footer third region.*/
/*  * - page.footer_bottom: Items for the footer bottom region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <!----Header start --->*/
/* */
/* {% if page.header %}*/
/*   <div class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/* 	{{ page.header }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!---Header End --->*/
/* */
/* <!--- Banner start ---->*/
/* */
/* {%  if page.banner %}*/
/*   <div id="headerwrap">*/
/*     <div class="container">*/
/*       <div class="banner-text-block">*/
/*         {{ page.banner }}*/
/*       </div>*/
/*     </div>*/
/*   </div> <!-- /headerwrap -->*/
/* {% endif %}*/
/* */
/* <!--- End Banner --->*/
/* */
/* <!-- Yellow Wrap -->*/
/* {% if page.banner_bottom_first or page.banner_bottom_second or page.banner_bottom_third %}*/
/*   <div id="db">*/
/*     <div class="container">*/
/*       <div class="row centered">*/
/*         {% if page.banner_bottom_first %}*/
/*           <div class="{{ banner_bottom_class }}">*/
/*             {{ page.banner_bottom_first }}*/
/*           </div><!-- /col-lg-4 -->*/
/*         {% endif %}*/
/* */
/*         {% if page.banner_bottom_second %}*/
/*           <div class="{{ banner_bottom_class }}">*/
/*             {{ page.banner_bottom_second }}*/
/* */
/*           </div><!-- /col-lg-4 -->*/
/*         {% endif %}*/
/* */
/*         {% if page.banner_bottom_third %}*/
/*           <div class="{{ banner_bottom_class }}">*/
/*             {{ page.banner_bottom_third }}*/
/*           </div><!-- /col-lg-4 -->*/
/*         {% endif %}*/
/*       </div><!-- /row -->*/
/*     </div><!-- /container -->*/
/*   </div><!-- /yellow wrap -->*/
/* {% endif  %}*/
/* */
/* */
/* <!-- Dark Blue Wrap / Highlighted -->*/
/* */
/* {% if page.highlighted %}*/
/*   <div id="y">*/
/*     <div class="container centered">*/
/*       {{ page.highlighted }}*/
/*     </div><!-- /container -->*/
/*   </div><!-- /Dark Blue wrap -->*/
/* */
/* {% endif  %}*/
/* */
/* <div class="content">*/
/*   <div class="container">*/
/*     {% if page.sidebar_first %}*/
/*       <div class={{ sidebarfirst }} >*/
/* 	<!-- Sidebar 2 -->*/
/* 	<div class="sidebar">*/
/* 	  {{ page.sidebar_first }}*/
/* 	</div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.content %}*/
/*       <div class={{ contentlayout }}>*/
/* 	{{ page.breadcrumb }}*/
/* 	{{ page.content }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.sidebar_second %}*/
/*       <div class={{ sidebarsecond }}>*/
/* 	<!-- Sidebar 1 -->*/
/* 	<div class="sidebar">*/
/* 	  {{ page.sidebar_second }}*/
/* 	</div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="clearfix"></div>*/
/* */
/* {% if page.content_highlighted %}*/
/*   <div id="db">*/
/*     <div class="container centered">*/
/*       {{ page.content_highlighted }}*/
/*     </div><!-- /container -->*/
/*   </div><!-- /Dark Blue wrap -->*/
/* */
/* {% endif  %}*/
/* */
/*   <!--Page Bottom highlight Yellow Wrap / Intro Text -->*/
/* */
/* {% if page.page_bottom_highlighted %}*/
/*   <div id="y">*/
/*     <div class="container">*/
/*       <div class="col-lg-12 centered">*/
/*         {{ page.page_bottom_highlighted }}*/
/*       </div>*/
/*     </div><!-- /container -->*/
/*   </div><!-- /yellow wrap -->*/
/* {% endif %}*/
/* */
/* <!--End Page Bottom Highlight ---->*/
/* */
/* */
/* <!-- White Wrap Version 2 - footer top region-->*/
/* {% if page.footer_top %}*/
/*   <div id="w2">*/
/*     <div class="container">*/
/*       <div class="row centered">*/
/*         {{ page.footer_top }}*/
/*       </div><!-- /row -->*/
/*     </div><!-- /container -->*/
/*   </div><!-- /White Wrap Ver.2 - Social Icons -->*/
/* */
/* {% endif %}*/
/* */
/* <!-- Footer Wrap -->*/
/* {% if page.footer_first or page.footer_second or page.footer_third %}*/
/*   <div id="f">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if page.footer_first %}*/
/*           <div class="{{ footer_class }}">*/
/*             {{  page.footer_first }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.footer_second %}*/
/*           <div class="{{ footer_class }}">*/
/*             {{  page.footer_second }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.footer_third %}*/
/*           <div class="{{ footer_class }}">*/
/*             {{ page.footer_third }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div><!-- /row -->*/
/*     </div><!-- /container -->*/
/*   </div><!-- /Footer wrap -->*/
/* {% endif %}*/
/* */
/* */
/* <div id="c">*/
/*   <div class="container">*/
/*     <div class="col-md-8">*/
/*       <div class="pull-left powered-by-block">*/
/* 	<p>{{ 'Jethro ported to Drupal by'|t }} <a href="http://dropthemes.in" target="_blank">DropThemes.in</a></p>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*       {% if show_social_icons %}*/
/* 	<div class="pull-right social-icons">*/
/* 	  <a href="{{ facebook }}"><i class="icon-facebook"></i></a>*/
/* 	  <a href="{{ twitter }}"><i class="icon-twitter"></i></a>*/
/* 	  <a href="{{ google }}"><i class="icon-google-plus"></i></a>*/
/* 	  <a href="{{ linkedin }}"><i class="icon-linkedin"></i></a>*/
/* 	  <a href="{{ pinterest }}"><i class="icon-pinterest"></i></a>*/
/* 	  <a href="{{ rss }}"><i class="icon-rss"></i></a>*/
/* 	</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
