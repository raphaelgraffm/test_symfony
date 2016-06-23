<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f594cc08b064754e1c760028fc02b45a9195959dfcba06cbca01a7cbd6dbc396 extends Twig_Template
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
        $__internal_bd7c5865ba891293db4e141063a805a74e25083bb593d2d6af0ff8fc8447eff3 = $this->env->getExtension("native_profiler");
        $__internal_bd7c5865ba891293db4e141063a805a74e25083bb593d2d6af0ff8fc8447eff3->enter($__internal_bd7c5865ba891293db4e141063a805a74e25083bb593d2d6af0ff8fc8447eff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bd7c5865ba891293db4e141063a805a74e25083bb593d2d6af0ff8fc8447eff3->leave($__internal_bd7c5865ba891293db4e141063a805a74e25083bb593d2d6af0ff8fc8447eff3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
