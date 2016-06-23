<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a47867615b29bacf02026e90304ad892a779c7377f4c6832ea893434c7c2a73c extends Twig_Template
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
        $__internal_de1cde318c176452a8c85da19972d05dff4c4284954261bb2435f5495f14dc53 = $this->env->getExtension("native_profiler");
        $__internal_de1cde318c176452a8c85da19972d05dff4c4284954261bb2435f5495f14dc53->enter($__internal_de1cde318c176452a8c85da19972d05dff4c4284954261bb2435f5495f14dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_de1cde318c176452a8c85da19972d05dff4c4284954261bb2435f5495f14dc53->leave($__internal_de1cde318c176452a8c85da19972d05dff4c4284954261bb2435f5495f14dc53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
