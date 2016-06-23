<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d9cae5f464c4739542033caeeaacef7e43647c41e8648531e457f772d10d84ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58ef7d3f1e6672e15ec73e2ed4321a085d7fccc76633411710dfe8750564766f = $this->env->getExtension("native_profiler");
        $__internal_58ef7d3f1e6672e15ec73e2ed4321a085d7fccc76633411710dfe8750564766f->enter($__internal_58ef7d3f1e6672e15ec73e2ed4321a085d7fccc76633411710dfe8750564766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ef7d3f1e6672e15ec73e2ed4321a085d7fccc76633411710dfe8750564766f->leave($__internal_58ef7d3f1e6672e15ec73e2ed4321a085d7fccc76633411710dfe8750564766f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5042a4ec5ee5a8c6963e6cddb293499d759e4403c256fa4d6cd8c623b15dc98 = $this->env->getExtension("native_profiler");
        $__internal_a5042a4ec5ee5a8c6963e6cddb293499d759e4403c256fa4d6cd8c623b15dc98->enter($__internal_a5042a4ec5ee5a8c6963e6cddb293499d759e4403c256fa4d6cd8c623b15dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a5042a4ec5ee5a8c6963e6cddb293499d759e4403c256fa4d6cd8c623b15dc98->leave($__internal_a5042a4ec5ee5a8c6963e6cddb293499d759e4403c256fa4d6cd8c623b15dc98_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_806727d5f333406b9353736c31de9e70ea71bc48ad21ae819981a8a31f89f01c = $this->env->getExtension("native_profiler");
        $__internal_806727d5f333406b9353736c31de9e70ea71bc48ad21ae819981a8a31f89f01c->enter($__internal_806727d5f333406b9353736c31de9e70ea71bc48ad21ae819981a8a31f89f01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
  </p>

";
        
        $__internal_806727d5f333406b9353736c31de9e70ea71bc48ad21ae819981a8a31f89f01c->leave($__internal_806727d5f333406b9353736c31de9e70ea71bc48ad21ae819981a8a31f89f01c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'accueil*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
/* */
