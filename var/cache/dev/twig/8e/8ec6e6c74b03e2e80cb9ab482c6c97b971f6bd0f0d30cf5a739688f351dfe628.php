<?php

/* ::base.html.twig */
class __TwigTemplate_46e554134e5e9b4ad91abc0f11e3990ee21d4cd307407daebe37c120a017b762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8e6b08225f7e343215a6d9fd44439d9fb00da50b5c333cf8f41b6b2dda93dd7 = $this->env->getExtension("native_profiler");
        $__internal_a8e6b08225f7e343215a6d9fd44439d9fb00da50b5c333cf8f41b6b2dda93dd7->enter($__internal_a8e6b08225f7e343215a6d9fd44439d9fb00da50b5c333cf8f41b6b2dda93dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a8e6b08225f7e343215a6d9fd44439d9fb00da50b5c333cf8f41b6b2dda93dd7->leave($__internal_a8e6b08225f7e343215a6d9fd44439d9fb00da50b5c333cf8f41b6b2dda93dd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e55761d47b0bc414267ab12253987f7b21b1b90d01ffaebdd27ef52379aa7de4 = $this->env->getExtension("native_profiler");
        $__internal_e55761d47b0bc414267ab12253987f7b21b1b90d01ffaebdd27ef52379aa7de4->enter($__internal_e55761d47b0bc414267ab12253987f7b21b1b90d01ffaebdd27ef52379aa7de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e55761d47b0bc414267ab12253987f7b21b1b90d01ffaebdd27ef52379aa7de4->leave($__internal_e55761d47b0bc414267ab12253987f7b21b1b90d01ffaebdd27ef52379aa7de4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba2846634e1bc81fc030e315571157b3f66a0be13be9f798d293cea63db47f56 = $this->env->getExtension("native_profiler");
        $__internal_ba2846634e1bc81fc030e315571157b3f66a0be13be9f798d293cea63db47f56->enter($__internal_ba2846634e1bc81fc030e315571157b3f66a0be13be9f798d293cea63db47f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba2846634e1bc81fc030e315571157b3f66a0be13be9f798d293cea63db47f56->leave($__internal_ba2846634e1bc81fc030e315571157b3f66a0be13be9f798d293cea63db47f56_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e709cb7903174889bdc354726a5fabd1cfe3e3557ad7bdecdf127692756a39ef = $this->env->getExtension("native_profiler");
        $__internal_e709cb7903174889bdc354726a5fabd1cfe3e3557ad7bdecdf127692756a39ef->enter($__internal_e709cb7903174889bdc354726a5fabd1cfe3e3557ad7bdecdf127692756a39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e709cb7903174889bdc354726a5fabd1cfe3e3557ad7bdecdf127692756a39ef->leave($__internal_e709cb7903174889bdc354726a5fabd1cfe3e3557ad7bdecdf127692756a39ef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_630a1660eb36c69648cc41e47e2cba3fdca201d25f21b4d68cf26845af0154af = $this->env->getExtension("native_profiler");
        $__internal_630a1660eb36c69648cc41e47e2cba3fdca201d25f21b4d68cf26845af0154af->enter($__internal_630a1660eb36c69648cc41e47e2cba3fdca201d25f21b4d68cf26845af0154af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_630a1660eb36c69648cc41e47e2cba3fdca201d25f21b4d68cf26845af0154af->leave($__internal_630a1660eb36c69648cc41e47e2cba3fdca201d25f21b4d68cf26845af0154af_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
