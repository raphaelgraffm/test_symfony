<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_11804beb10c45b35fe28e9c01f1355542705cb00a604d629aa147f585c7c1d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_1730956eb10e3438df1d1154d64441e311cb8fcf99f6aec788dc9deba66e53c5 = $this->env->getExtension("native_profiler");
        $__internal_1730956eb10e3438df1d1154d64441e311cb8fcf99f6aec788dc9deba66e53c5->enter($__internal_1730956eb10e3438df1d1154d64441e311cb8fcf99f6aec788dc9deba66e53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1730956eb10e3438df1d1154d64441e311cb8fcf99f6aec788dc9deba66e53c5->leave($__internal_1730956eb10e3438df1d1154d64441e311cb8fcf99f6aec788dc9deba66e53c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67a95bbac9c52543e1de6973c73d07820336d13d2e017facde646ec728ce6949 = $this->env->getExtension("native_profiler");
        $__internal_67a95bbac9c52543e1de6973c73d07820336d13d2e017facde646ec728ce6949->enter($__internal_67a95bbac9c52543e1de6973c73d07820336d13d2e017facde646ec728ce6949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_67a95bbac9c52543e1de6973c73d07820336d13d2e017facde646ec728ce6949->leave($__internal_67a95bbac9c52543e1de6973c73d07820336d13d2e017facde646ec728ce6949_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_022bc397e65944a17b45a80765ade4931d83d753e6fa07a0793293dcd6f611db = $this->env->getExtension("native_profiler");
        $__internal_022bc397e65944a17b45a80765ade4931d83d753e6fa07a0793293dcd6f611db->enter($__internal_022bc397e65944a17b45a80765ade4931d83d753e6fa07a0793293dcd6f611db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_022bc397e65944a17b45a80765ade4931d83d753e6fa07a0793293dcd6f611db->leave($__internal_022bc397e65944a17b45a80765ade4931d83d753e6fa07a0793293dcd6f611db_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit général de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
