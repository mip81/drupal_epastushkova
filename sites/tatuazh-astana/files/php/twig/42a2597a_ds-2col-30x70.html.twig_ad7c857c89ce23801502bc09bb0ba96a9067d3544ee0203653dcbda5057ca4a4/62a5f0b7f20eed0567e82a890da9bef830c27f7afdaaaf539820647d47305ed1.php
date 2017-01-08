<?php

/* modules/ds/templates/ds-2col-30x70.html.twig */
class __TwigTemplate_8cb45dcfbd584b2ac273d29a2975031d71ea9849c61d13369d27a62a013baadb extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 14
        echo "<div class=\"row\">
  <div class=\"col-md-5\">
        <div style=\"color: #00A0E2; text-align: center; font-weight: bold;margin-bottom: 5px;\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "videotitle", array()), "html", null, true));
        echo "</div>
\t";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
        echo "\t  
</div>
  <div class=\"col-md-7\">
    ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-2col-30x70.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  51 => 17,  47 => 16,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * The template shows two column one has video from youtube*/
/*  * and the second shows the content. Will be used in the main page.*/
/*  * with Views*/
/*  **/
/*  * Available variables:*/
/*  * - ds_content_wrapper: wrapper around content*/
/*  * - attributes: content region attributes*/
/*  * - ds_content: content region*/
/*  *//* */
/* #}*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*         <div style="color: #00A0E2; text-align: center; font-weight: bold;margin-bottom: 5px;">{{ content.videotitle }}</div>*/
/* 	{{ content.left }}	  */
/* </div>*/
/*   <div class="col-md-7">*/
/*     {{ content.right }}*/
/*   </div>*/
/* */
/* </div>*/
/* */
