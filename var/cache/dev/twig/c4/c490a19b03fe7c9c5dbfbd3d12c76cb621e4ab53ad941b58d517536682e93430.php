<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0716d0dede9e467367d846d5f44011ef178231d66819a32405b6caa57b3a0a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff3e9f24b3da33970e0cada4b029ea391c1786bf69a5879caafb71d4443647aa = $this->env->getExtension("native_profiler");
        $__internal_ff3e9f24b3da33970e0cada4b029ea391c1786bf69a5879caafb71d4443647aa->enter($__internal_ff3e9f24b3da33970e0cada4b029ea391c1786bf69a5879caafb71d4443647aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3e9f24b3da33970e0cada4b029ea391c1786bf69a5879caafb71d4443647aa->leave($__internal_ff3e9f24b3da33970e0cada4b029ea391c1786bf69a5879caafb71d4443647aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04dc8de6b56604eb7789eb46b7192c38fdcd24961e0c6c69aa458db74cb9b4d7 = $this->env->getExtension("native_profiler");
        $__internal_04dc8de6b56604eb7789eb46b7192c38fdcd24961e0c6c69aa458db74cb9b4d7->enter($__internal_04dc8de6b56604eb7789eb46b7192c38fdcd24961e0c6c69aa458db74cb9b4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04dc8de6b56604eb7789eb46b7192c38fdcd24961e0c6c69aa458db74cb9b4d7->leave($__internal_04dc8de6b56604eb7789eb46b7192c38fdcd24961e0c6c69aa458db74cb9b4d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6af21bdece34d73e41b48d85fad8ff84428c43dfff78a9ced63baa2be8f85c0 = $this->env->getExtension("native_profiler");
        $__internal_e6af21bdece34d73e41b48d85fad8ff84428c43dfff78a9ced63baa2be8f85c0->enter($__internal_e6af21bdece34d73e41b48d85fad8ff84428c43dfff78a9ced63baa2be8f85c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6af21bdece34d73e41b48d85fad8ff84428c43dfff78a9ced63baa2be8f85c0->leave($__internal_e6af21bdece34d73e41b48d85fad8ff84428c43dfff78a9ced63baa2be8f85c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cab436e2f0b08f5128c9f8a7334aa49e0b49e3e19f0d54f16da81775e65c7d2 = $this->env->getExtension("native_profiler");
        $__internal_9cab436e2f0b08f5128c9f8a7334aa49e0b49e3e19f0d54f16da81775e65c7d2->enter($__internal_9cab436e2f0b08f5128c9f8a7334aa49e0b49e3e19f0d54f16da81775e65c7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9cab436e2f0b08f5128c9f8a7334aa49e0b49e3e19f0d54f16da81775e65c7d2->leave($__internal_9cab436e2f0b08f5128c9f8a7334aa49e0b49e3e19f0d54f16da81775e65c7d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
