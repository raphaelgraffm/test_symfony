<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_d00b7278554baed3005eac662be8884555038985ef3c365663cf6b6ae058a7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_ac5e166b84548632708364847fa8d713f55f35217b3f109d4785e9f3ef7daa0b = $this->env->getExtension("native_profiler");
        $__internal_ac5e166b84548632708364847fa8d713f55f35217b3f109d4785e9f3ef7daa0b->enter($__internal_ac5e166b84548632708364847fa8d713f55f35217b3f109d4785e9f3ef7daa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5e166b84548632708364847fa8d713f55f35217b3f109d4785e9f3ef7daa0b->leave($__internal_ac5e166b84548632708364847fa8d713f55f35217b3f109d4785e9f3ef7daa0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84d77476296c4ede5599421274c66f581ef6ef8c1867526a327826f81f3f15d4 = $this->env->getExtension("native_profiler");
        $__internal_84d77476296c4ede5599421274c66f581ef6ef8c1867526a327826f81f3f15d4->enter($__internal_84d77476296c4ede5599421274c66f581ef6ef8c1867526a327826f81f3f15d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_84d77476296c4ede5599421274c66f581ef6ef8c1867526a327826f81f3f15d4->leave($__internal_84d77476296c4ede5599421274c66f581ef6ef8c1867526a327826f81f3f15d4_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e11bdcadfa4915b3255bcfd3dfe1f8470020b873f46fd4b1c99b48760b7eb3d0 = $this->env->getExtension("native_profiler");
        $__internal_e11bdcadfa4915b3255bcfd3dfe1f8470020b873f46fd4b1c99b48760b7eb3d0->enter($__internal_e11bdcadfa4915b3255bcfd3dfe1f8470020b873f46fd4b1c99b48760b7eb3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p> Annonce supprimée </p>  

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
        
        $__internal_e11bdcadfa4915b3255bcfd3dfe1f8470020b873f46fd4b1c99b48760b7eb3d0->leave($__internal_e11bdcadfa4915b3255bcfd3dfe1f8470020b873f46fd4b1c99b48760b7eb3d0_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Supprimer une annonce</h2>*/
/* */
/*   <p> Annonce supprimée </p>  */
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
