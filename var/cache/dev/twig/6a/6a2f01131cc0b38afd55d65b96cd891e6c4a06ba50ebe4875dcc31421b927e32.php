<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bd74833c471e1198709c687a80c80ee92c643d9749d1cd5b6576b40c6f27fb5b extends Twig_Template
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
        $__internal_701f218d931e661ebcc632af4e8dfc0472d67d45a13f45864e99ddae485cbc02 = $this->env->getExtension("native_profiler");
        $__internal_701f218d931e661ebcc632af4e8dfc0472d67d45a13f45864e99ddae485cbc02->enter($__internal_701f218d931e661ebcc632af4e8dfc0472d67d45a13f45864e99ddae485cbc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_701f218d931e661ebcc632af4e8dfc0472d67d45a13f45864e99ddae485cbc02->leave($__internal_701f218d931e661ebcc632af4e8dfc0472d67d45a13f45864e99ddae485cbc02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
