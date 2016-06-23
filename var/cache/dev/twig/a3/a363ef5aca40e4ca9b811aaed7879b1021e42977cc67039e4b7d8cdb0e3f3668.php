<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9a3898ec0cf197c324831f8e4abf0b8e729941315122852ab59e2141ae1eac78 extends Twig_Template
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
        $__internal_f2f4452b89b1b50fee1dfaf7d42ab1528834de63aa985bd6b9c1c5a5d52cc762 = $this->env->getExtension("native_profiler");
        $__internal_f2f4452b89b1b50fee1dfaf7d42ab1528834de63aa985bd6b9c1c5a5d52cc762->enter($__internal_f2f4452b89b1b50fee1dfaf7d42ab1528834de63aa985bd6b9c1c5a5d52cc762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f2f4452b89b1b50fee1dfaf7d42ab1528834de63aa985bd6b9c1c5a5d52cc762->leave($__internal_f2f4452b89b1b50fee1dfaf7d42ab1528834de63aa985bd6b9c1c5a5d52cc762_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
