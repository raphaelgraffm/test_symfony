<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8f2217731db0994fc5523dbc49766fd2b944e51329ab041f95e62f1bf2a215b3 extends Twig_Template
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
        $__internal_e8bcf8e0d45da1a6c98b637637a0d336eef2ca6db55d3e88ee6e597e8a9e1ec0 = $this->env->getExtension("native_profiler");
        $__internal_e8bcf8e0d45da1a6c98b637637a0d336eef2ca6db55d3e88ee6e597e8a9e1ec0->enter($__internal_e8bcf8e0d45da1a6c98b637637a0d336eef2ca6db55d3e88ee6e597e8a9e1ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e8bcf8e0d45da1a6c98b637637a0d336eef2ca6db55d3e88ee6e597e8a9e1ec0->leave($__internal_e8bcf8e0d45da1a6c98b637637a0d336eef2ca6db55d3e88ee6e597e8a9e1ec0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
