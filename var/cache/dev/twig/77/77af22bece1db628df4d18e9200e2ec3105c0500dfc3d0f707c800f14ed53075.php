<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_80ed5796dcea3e661c851b1ce0be058616c80be62e392be3c2599df4371a4298 extends Twig_Template
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
        $__internal_2463302ae8beabe9489b0d5ab0015b60d5faace350fd64c05f10d17393be49a8 = $this->env->getExtension("native_profiler");
        $__internal_2463302ae8beabe9489b0d5ab0015b60d5faace350fd64c05f10d17393be49a8->enter($__internal_2463302ae8beabe9489b0d5ab0015b60d5faace350fd64c05f10d17393be49a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href = \"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "\t\t<li>Aucune annonce a afficher</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
        
        $__internal_2463302ae8beabe9489b0d5ab0015b60d5faace350fd64c05f10d17393be49a8->leave($__internal_2463302ae8beabe9489b0d5ab0015b60d5faace350fd64c05f10d17393be49a8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  46 => 9,  37 => 5,  33 => 4,  30 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-pills nav-stacked">*/
/* 	{% for advert in listAdverts %}*/
/* 		<li>*/
/* 			<a href = "{{ path( 'oc_platform_view', {'id': advert.id} ) }}">*/
/* 				{{ advert.title }}*/
/* 			</a>*/
/* 		</li>*/
/* 	{% else %}*/
/* 		<li>Aucune annonce a afficher</li>*/
/* 	{% endfor %}*/
/* </ul>*/
