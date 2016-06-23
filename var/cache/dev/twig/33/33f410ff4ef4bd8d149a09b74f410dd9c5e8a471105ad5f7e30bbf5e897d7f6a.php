<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b25a2e71b4331a69c71bb4010e55356697dd12cf685a3a1016a399c06f3a9e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60187f1edb8c2726825e1ebbab768284989f9bec01ae512847112f52f4e11d3b = $this->env->getExtension("native_profiler");
        $__internal_60187f1edb8c2726825e1ebbab768284989f9bec01ae512847112f52f4e11d3b->enter($__internal_60187f1edb8c2726825e1ebbab768284989f9bec01ae512847112f52f4e11d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60187f1edb8c2726825e1ebbab768284989f9bec01ae512847112f52f4e11d3b->leave($__internal_60187f1edb8c2726825e1ebbab768284989f9bec01ae512847112f52f4e11d3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbfc24b281026557b5cefcae52b25397d699dd879a71957585522b4ce3d86264 = $this->env->getExtension("native_profiler");
        $__internal_cbfc24b281026557b5cefcae52b25397d699dd879a71957585522b4ce3d86264->enter($__internal_cbfc24b281026557b5cefcae52b25397d699dd879a71957585522b4ce3d86264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cbfc24b281026557b5cefcae52b25397d699dd879a71957585522b4ce3d86264->leave($__internal_cbfc24b281026557b5cefcae52b25397d699dd879a71957585522b4ce3d86264_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe7bf8c30906584924605c7dcf3cc13466842a044fbf1a45a2a91c6464a17c6 = $this->env->getExtension("native_profiler");
        $__internal_7fe7bf8c30906584924605c7dcf3cc13466842a044fbf1a45a2a91c6464a17c6->enter($__internal_7fe7bf8c30906584924605c7dcf3cc13466842a044fbf1a45a2a91c6464a17c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7fe7bf8c30906584924605c7dcf3cc13466842a044fbf1a45a2a91c6464a17c6->leave($__internal_7fe7bf8c30906584924605c7dcf3cc13466842a044fbf1a45a2a91c6464a17c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
