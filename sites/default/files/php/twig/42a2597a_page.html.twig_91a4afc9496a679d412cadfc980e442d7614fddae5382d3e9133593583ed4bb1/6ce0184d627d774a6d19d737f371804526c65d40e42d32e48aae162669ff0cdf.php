<?php

/* themes/ep_theme/templates/system/page.html.twig */
class __TwigTemplate_9a623f3c410c162bc625a0d573c574e7f063b3d1adf0d31ee78a31b8e4193818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 109);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 138
        echo "
";
        // line 140
        $this->displayBlock('main', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 227
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 70
        echo "    <div class=\"header-site\">
     <div class=\"row\">
        <div class=\"col-sm-4\">

            <img alt=\"Студия ПМ Евгении Пастушковой\" src=\"/themes/ep_theme/images/logo.png\"  height=\"100px\"/>

        </div>
        <div class=\"col-sm-4\">
          <div class=\"header-middle\">
            <div class=\"header-phones\">
              ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_phones", array()), "html", null, true));
        echo "
            </div>
            <!-- Button to make call back -->
            <button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\" ><span class=\"glyphicon glyphicon-phone\"></span>  Заказать обратный звонок</button>
          </div>
        </div>
        <div class=\"col-sm-4\">
              <div class=\"header-info\">
                ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_info", array()), "html", null, true));
        echo "
                   <p> </p>
                  </div>
              </div>
      </div>


  </div>
    <header";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">


      ";
        // line 99
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 100
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 102
        echo "      <div class=\"navbar-header\">

        ";
        // line 104
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 106
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 107
            echo "
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>




        ";
        }
        // line 119
        echo "
        <!-- The block for SMARTPHONES in header (phone numbers) -->

             ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "phones_smart_header", array()), "html", null, true));
        echo "

      </div>

      ";
        // line 127
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 128
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 129
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 132
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 133
            echo "        </div>
      ";
        }
        // line 135
        echo "    </header>
  ";
    }

    // line 140
    public function block_main($context, array $blocks = array())
    {
        // line 141
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 145
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 146
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 151
            echo "      ";
        }
        // line 152
        echo "
      ";
        // line 154
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 155
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 160
            echo "      ";
        }
        // line 161
        echo "
      ";
        // line 163
        echo "      ";
        // line 164
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 165
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 166
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 167
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 168
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 171
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 174
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 175
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 178
            echo "        ";
        }
        // line 179
        echo "
        ";
        // line 181
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 182
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 185
            echo "        ";
        }
        // line 186
        echo "
        ";
        // line 188
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 189
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 192
            echo "        ";
        }
        // line 193
        echo "
        ";
        // line 195
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 196
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 199
            echo "        ";
        }
        // line 200
        echo "
        ";
        // line 202
        echo "
        <aside> ";
        // line 203
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video_block", array()), "html", null, true));
        echo "</aside>
        ";
        // line 204
        $this->displayBlock('content', $context, $blocks);
        // line 212
        echo "      </section>

      ";
        // line 215
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 216
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 221
            echo "      ";
        }
        // line 222
        echo "    </div>
  </div>
";
    }

    // line 146
    public function block_header($context, array $blocks = array())
    {
        // line 147
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 148
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 155
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 156
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 157
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 175
    public function block_highlighted($context, array $blocks = array())
    {
        // line 176
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 182
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 183
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 189
    public function block_action_links($context, array $blocks = array())
    {
        // line 190
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 196
    public function block_help($context, array $blocks = array())
    {
        // line 197
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 204
    public function block_content($context, array $blocks = array())
    {
        // line 205
        echo "          <a id=\"main-content\"></a>

          ";
        // line 207
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

          <!-- The callback button -->
          <a href=\"#\" id=\"popup_toggle\"  data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"return false;\"><div class=\"circlephone\" style=\"transform-origin: center;\"></div><div class=\"circle-fill\" style=\"transform-origin: center;\"></div><div class=\"img-circle\" style=\"transform-origin: center;\"><div class=\"img-circleblock\" style=\"transform-origin: center;\"></div></div></a>
        ";
    }

    // line 216
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 217
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 218
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 227
    public function block_footer($context, array $blocks = array())
    {
        // line 228
        echo "

    <footer class=\"hidden-xs hidden-sm footer ";
        // line 230
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
          ";
        // line 231
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
  </footer>
  <div class=\"footer-content-smartphone hidden-md hidden-lg\">
      ";
        // line 234
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_smart", array()), "html", null, true));
        echo "
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/ep_theme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 234,  429 => 231,  425 => 230,  421 => 228,  418 => 227,  411 => 218,  408 => 217,  405 => 216,  396 => 207,  392 => 205,  389 => 204,  382 => 197,  379 => 196,  372 => 190,  369 => 189,  362 => 183,  359 => 182,  352 => 176,  349 => 175,  342 => 157,  339 => 156,  336 => 155,  329 => 148,  326 => 147,  323 => 146,  317 => 222,  314 => 221,  311 => 216,  308 => 215,  304 => 212,  302 => 204,  298 => 203,  295 => 202,  292 => 200,  289 => 199,  286 => 196,  283 => 195,  280 => 193,  277 => 192,  274 => 189,  271 => 188,  268 => 186,  265 => 185,  262 => 182,  259 => 181,  256 => 179,  253 => 178,  250 => 175,  247 => 174,  241 => 171,  239 => 168,  238 => 167,  237 => 166,  236 => 165,  235 => 164,  233 => 163,  230 => 161,  227 => 160,  224 => 155,  221 => 154,  218 => 152,  215 => 151,  212 => 146,  209 => 145,  202 => 141,  199 => 140,  194 => 135,  190 => 133,  187 => 132,  181 => 129,  178 => 128,  175 => 127,  168 => 122,  163 => 119,  150 => 109,  146 => 107,  143 => 106,  139 => 104,  135 => 102,  129 => 100,  127 => 99,  121 => 96,  110 => 88,  99 => 80,  87 => 70,  85 => 67,  84 => 66,  83 => 64,  81 => 63,  78 => 62,  72 => 227,  70 => 226,  67 => 225,  65 => 140,  62 => 138,  58 => 62,  56 => 61,  54 => 59,);
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
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <div class="header-site">*/
/*      <div class="row">*/
/*         <div class="col-sm-4">*/
/* */
/*             <img alt="Студия ПМ Евгении Пастушковой" src="/themes/ep_theme/images/logo.png"  height="100px"/>*/
/* */
/*         </div>*/
/*         <div class="col-sm-4">*/
/*           <div class="header-middle">*/
/*             <div class="header-phones">*/
/*               {{ page.header_phones }}*/
/*             </div>*/
/*             <!-- Button to make call back -->*/
/*             <button class="btn btn-success" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-phone"></span>  Заказать обратный звонок</button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*               <div class="header-info">*/
/*                 {{ page.header_info }}*/
/*                    <p> </p>*/
/*                   </div>*/
/*               </div>*/
/*       </div>*/
/* */
/* */
/*   </div>*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/* */
/* */
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/*       <div class="navbar-header">*/
/* */
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/* */
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/* */
/* */
/* */
/* */
/*         {% endif %}*/
/* */
/*         <!-- The block for SMARTPHONES in header (phone numbers) -->*/
/* */
/*              {{ page.phones_smart_header }}*/
/* */
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/* */
/*         <aside> {{ page.video_block }}</aside>*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/* */
/*           {{ page.content }}*/
/* */
/*           <!-- The callback button -->*/
/*           <a href="#" id="popup_toggle"  data-toggle="modal" data-target="#myModal" onclick="return false;"><div class="circlephone" style="transform-origin: center;"></div><div class="circle-fill" style="transform-origin: center;"></div><div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div></a>*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/* */
/* */
/*     <footer class="hidden-xs hidden-sm footer {{ container }}" role="contentinfo">*/
/*           {{ page.footer }}*/
/*   </footer>*/
/*   <div class="footer-content-smartphone hidden-md hidden-lg">*/
/*       {{ page.footer_smart }}*/
/*   </div>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
