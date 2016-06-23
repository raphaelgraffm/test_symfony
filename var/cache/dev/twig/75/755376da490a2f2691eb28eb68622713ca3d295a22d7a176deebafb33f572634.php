<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f89d515a900b95922b4293fa73bf040702bafc283b70a488df8e0fb049376048 extends Twig_Template
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
        $__internal_ad630e9884aa1b9e8faa5b67dea615b9f91c8d371373bd35d08416d866cdb484 = $this->env->getExtension("native_profiler");
        $__internal_ad630e9884aa1b9e8faa5b67dea615b9f91c8d371373bd35d08416d866cdb484->enter($__internal_ad630e9884aa1b9e8faa5b67dea615b9f91c8d371373bd35d08416d866cdb484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ad630e9884aa1b9e8faa5b67dea615b9f91c8d371373bd35d08416d866cdb484->leave($__internal_ad630e9884aa1b9e8faa5b67dea615b9f91c8d371373bd35d08416d866cdb484_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
