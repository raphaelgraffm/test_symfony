<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c0d3b2729bf348062af3764f41e0277e86db997e5abf532a7354646440ec3bfb extends Twig_Template
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
        $__internal_280b9e22b81fb0fa78ff3ad96f882166d872b62ef737b28265cfcaef4ef92ace = $this->env->getExtension("native_profiler");
        $__internal_280b9e22b81fb0fa78ff3ad96f882166d872b62ef737b28265cfcaef4ef92ace->enter($__internal_280b9e22b81fb0fa78ff3ad96f882166d872b62ef737b28265cfcaef4ef92ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_280b9e22b81fb0fa78ff3ad96f882166d872b62ef737b28265cfcaef4ef92ace->leave($__internal_280b9e22b81fb0fa78ff3ad96f882166d872b62ef737b28265cfcaef4ef92ace_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
