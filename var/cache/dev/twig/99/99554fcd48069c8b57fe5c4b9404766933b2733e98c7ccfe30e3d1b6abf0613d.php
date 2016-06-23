<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8be882d8dfe0422a0e08990778457edc5ad2b08bff38924ae8601a7a8b578605 extends Twig_Template
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
        $__internal_e43da26c233133f36d9652089065dc2de7f620512a2336687ef4a29c42512398 = $this->env->getExtension("native_profiler");
        $__internal_e43da26c233133f36d9652089065dc2de7f620512a2336687ef4a29c42512398->enter($__internal_e43da26c233133f36d9652089065dc2de7f620512a2336687ef4a29c42512398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e43da26c233133f36d9652089065dc2de7f620512a2336687ef4a29c42512398->leave($__internal_e43da26c233133f36d9652089065dc2de7f620512a2336687ef4a29c42512398_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
