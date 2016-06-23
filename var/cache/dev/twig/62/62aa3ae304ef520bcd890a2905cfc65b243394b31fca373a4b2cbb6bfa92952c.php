<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_6bf727cdef31e4379a83c22bf5bf77febabe9f32bf42f2d86f7921b41b4e8466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ddda288ed366921de54c438d5505ab1ef69cb10d8fb065f9769c93800c79de9 = $this->env->getExtension("native_profiler");
        $__internal_0ddda288ed366921de54c438d5505ab1ef69cb10d8fb065f9769c93800c79de9->enter($__internal_0ddda288ed366921de54c438d5505ab1ef69cb10d8fb065f9769c93800c79de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ddda288ed366921de54c438d5505ab1ef69cb10d8fb065f9769c93800c79de9->leave($__internal_0ddda288ed366921de54c438d5505ab1ef69cb10d8fb065f9769c93800c79de9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb9a16435ed8c45ebdf5ddbff751189573c00e7b2694d0991778dcec2e3c4f34 = $this->env->getExtension("native_profiler");
        $__internal_fb9a16435ed8c45ebdf5ddbff751189573c00e7b2694d0991778dcec2e3c4f34->enter($__internal_fb9a16435ed8c45ebdf5ddbff751189573c00e7b2694d0991778dcec2e3c4f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fb9a16435ed8c45ebdf5ddbff751189573c00e7b2694d0991778dcec2e3c4f34->leave($__internal_fb9a16435ed8c45ebdf5ddbff751189573c00e7b2694d0991778dcec2e3c4f34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_be5f51d7e462288797957fde8e5344d2cac38b20c5b57028a2ba075f769ad7d3 = $this->env->getExtension("native_profiler");
        $__internal_be5f51d7e462288797957fde8e5344d2cac38b20c5b57028a2ba075f769ad7d3->enter($__internal_be5f51d7e462288797957fde8e5344d2cac38b20c5b57028a2ba075f769ad7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<h1>Annonces</h1>

\t<hr/>

\t";
        // line 14
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_be5f51d7e462288797957fde8e5344d2cac38b20c5b57028a2ba075f769ad7d3->leave($__internal_be5f51d7e462288797957fde8e5344d2cac38b20c5b57028a2ba075f769ad7d3_prof);

    }

    // line 14
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ebdbc080ed13ac1a19713754211d0a5f8d1ec575571e7207574cb3e1698c0125 = $this->env->getExtension("native_profiler");
        $__internal_ebdbc080ed13ac1a19713754211d0a5f8d1ec575571e7207574cb3e1698c0125->enter($__internal_ebdbc080ed13ac1a19713754211d0a5f8d1ec575571e7207574cb3e1698c0125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 15
        echo "\t";
        
        $__internal_ebdbc080ed13ac1a19713754211d0a5f8d1ec575571e7207574cb3e1698c0125->leave($__internal_ebdbc080ed13ac1a19713754211d0a5f8d1ec575571e7207574cb3e1698c0125_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  74 => 14,  66 => 16,  64 => 14,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# Layout global pour le controller #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<h1>Annonces</h1>*/
/* */
/* 	<hr/>*/
/* */
/* 	{% block ocplatform_body %}*/
/* 	{% endblock %}*/
/* */
/* {% endblock %}*/
