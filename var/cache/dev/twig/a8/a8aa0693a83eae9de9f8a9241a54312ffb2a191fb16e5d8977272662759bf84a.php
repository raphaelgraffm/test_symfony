<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_6c54eec70072b0a52abec54fad405e9986ba620f6d7c3f6a09fc8f75cab2de36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_d21746d274037c9a9bdf97e71b9cc1cf9c8d9115c96dba790d667f3b5a016ac0 = $this->env->getExtension("native_profiler");
        $__internal_d21746d274037c9a9bdf97e71b9cc1cf9c8d9115c96dba790d667f3b5a016ac0->enter($__internal_d21746d274037c9a9bdf97e71b9cc1cf9c8d9115c96dba790d667f3b5a016ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21746d274037c9a9bdf97e71b9cc1cf9c8d9115c96dba790d667f3b5a016ac0->leave($__internal_d21746d274037c9a9bdf97e71b9cc1cf9c8d9115c96dba790d667f3b5a016ac0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39c50c5ab343fbb303bb0152df1e527e045108c1241c26d2e235000076cfa124 = $this->env->getExtension("native_profiler");
        $__internal_39c50c5ab343fbb303bb0152df1e527e045108c1241c26d2e235000076cfa124->enter($__internal_39c50c5ab343fbb303bb0152df1e527e045108c1241c26d2e235000076cfa124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39c50c5ab343fbb303bb0152df1e527e045108c1241c26d2e235000076cfa124->leave($__internal_39c50c5ab343fbb303bb0152df1e527e045108c1241c26d2e235000076cfa124_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7f054700fef9cd6ff0da6e7e45b32085edb4f06970f79572f5747a73a66271c3 = $this->env->getExtension("native_profiler");
        $__internal_7f054700fef9cd6ff0da6e7e45b32085edb4f06970f79572f5747a73a66271c3->enter($__internal_7f054700fef9cd6ff0da6e7e45b32085edb4f06970f79572f5747a73a66271c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "  
  <h2>Liste des annonces</h2>

  <ul>
  \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "  \t\t<li>
  \t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
  \t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
  \t\t\t</a>
  \t\t\tpar ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "
  \t\t\tle ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
  \t\t</li>
  \t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "  \t\t<li>Pas (encore!) d'annonces</li>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>
  
";
        
        $__internal_7f054700fef9cd6ff0da6e7e45b32085edb4f06970f79572f5747a73a66271c3->leave($__internal_7f054700fef9cd6ff0da6e7e45b32085edb4f06970f79572f5747a73a66271c3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  92 => 21,  84 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/*   */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*   	{% for advert in listAdverts %}*/
/*   		<li>*/
/*   			<a href="{{ path('oc_platform_view', {'id': advert.id} ) }}">*/
/*   				{{ advert.title }}*/
/*   			</a>*/
/*   			par {{ advert.author }}*/
/*   			le {{ advert.date | date('d/m/Y') }}*/
/*   		</li>*/
/*   	{% else %}*/
/*   		<li>Pas (encore!) d'annonces</li>*/
/*   	{% endfor %}*/
/*   </ul>*/
/*   */
/* {% endblock %}*/
/* */
