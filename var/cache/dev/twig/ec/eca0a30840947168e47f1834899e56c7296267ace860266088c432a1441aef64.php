<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_900547da06972b1badcd76847bdd357eb04b897620a08e7108865799d9124385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_2e68f98229e6231c59fdb8b3c07fe44ba73db79257fe4d70942ed7bb28bb26e4 = $this->env->getExtension("native_profiler");
        $__internal_2e68f98229e6231c59fdb8b3c07fe44ba73db79257fe4d70942ed7bb28bb26e4->enter($__internal_2e68f98229e6231c59fdb8b3c07fe44ba73db79257fe4d70942ed7bb28bb26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e68f98229e6231c59fdb8b3c07fe44ba73db79257fe4d70942ed7bb28bb26e4->leave($__internal_2e68f98229e6231c59fdb8b3c07fe44ba73db79257fe4d70942ed7bb28bb26e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f454924932b684e76708492ae4e442f6af16a91a9ed298e9bf0a62c27eb12c71 = $this->env->getExtension("native_profiler");
        $__internal_f454924932b684e76708492ae4e442f6af16a91a9ed298e9bf0a62c27eb12c71->enter($__internal_f454924932b684e76708492ae4e442f6af16a91a9ed298e9bf0a62c27eb12c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f454924932b684e76708492ae4e442f6af16a91a9ed298e9bf0a62c27eb12c71->leave($__internal_f454924932b684e76708492ae4e442f6af16a91a9ed298e9bf0a62c27eb12c71_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_201e7060e52d88c2178b97272d0b372582449f737715c6f2422f480f3da7f285 = $this->env->getExtension("native_profiler");
        $__internal_201e7060e52d88c2178b97272d0b372582449f737715c6f2422f480f3da7f285->enter($__internal_201e7060e52d88c2178b97272d0b372582449f737715c6f2422f480f3da7f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_201e7060e52d88c2178b97272d0b372582449f737715c6f2422f480f3da7f285->leave($__internal_201e7060e52d88c2178b97272d0b372582449f737715c6f2422f480f3da7f285_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
