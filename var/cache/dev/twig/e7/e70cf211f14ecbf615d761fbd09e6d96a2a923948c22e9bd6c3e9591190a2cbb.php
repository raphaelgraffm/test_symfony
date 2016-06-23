<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ec4f1518a8e2b2e8dea758ae03fb8508689b1ed541825892dd7ad055faf7676a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3b3548e3357b2aae8da3658a2e0167c751c3f04a40b56ae76077bc413dacdb9 = $this->env->getExtension("native_profiler");
        $__internal_b3b3548e3357b2aae8da3658a2e0167c751c3f04a40b56ae76077bc413dacdb9->enter($__internal_b3b3548e3357b2aae8da3658a2e0167c751c3f04a40b56ae76077bc413dacdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b3b3548e3357b2aae8da3658a2e0167c751c3f04a40b56ae76077bc413dacdb9->leave($__internal_b3b3548e3357b2aae8da3658a2e0167c751c3f04a40b56ae76077bc413dacdb9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_063aba694188ed8e646742b566ac2a5808b0da9c3cf36dce3c5d56998fee7ac3 = $this->env->getExtension("native_profiler");
        $__internal_063aba694188ed8e646742b566ac2a5808b0da9c3cf36dce3c5d56998fee7ac3->enter($__internal_063aba694188ed8e646742b566ac2a5808b0da9c3cf36dce3c5d56998fee7ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_063aba694188ed8e646742b566ac2a5808b0da9c3cf36dce3c5d56998fee7ac3->leave($__internal_063aba694188ed8e646742b566ac2a5808b0da9c3cf36dce3c5d56998fee7ac3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
