<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a4ee8a30dbf0e2647342567e5c33bdafb16c256f7d7f22b684560a1aa70545ac extends Twig_Template
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
        $__internal_f3f70be917d1d147b81353b77a46ec201e5185344ac2efcdd54f078d0afd6a5c = $this->env->getExtension("native_profiler");
        $__internal_f3f70be917d1d147b81353b77a46ec201e5185344ac2efcdd54f078d0afd6a5c->enter($__internal_f3f70be917d1d147b81353b77a46ec201e5185344ac2efcdd54f078d0afd6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f3f70be917d1d147b81353b77a46ec201e5185344ac2efcdd54f078d0afd6a5c->leave($__internal_f3f70be917d1d147b81353b77a46ec201e5185344ac2efcdd54f078d0afd6a5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
