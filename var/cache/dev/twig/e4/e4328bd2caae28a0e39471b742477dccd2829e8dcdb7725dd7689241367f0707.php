<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6a3920f55782f8ad061f35927f3a39ac9b7988705afa57bcc1c2585f2c23ca4a extends Twig_Template
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
        $__internal_e9697fcd416ccf80f297614b0669eb50ceb6804d060ed1b4b906c7d68d524de9 = $this->env->getExtension("native_profiler");
        $__internal_e9697fcd416ccf80f297614b0669eb50ceb6804d060ed1b4b906c7d68d524de9->enter($__internal_e9697fcd416ccf80f297614b0669eb50ceb6804d060ed1b4b906c7d68d524de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e9697fcd416ccf80f297614b0669eb50ceb6804d060ed1b4b906c7d68d524de9->leave($__internal_e9697fcd416ccf80f297614b0669eb50ceb6804d060ed1b4b906c7d68d524de9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
