<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d06af05a9eb36703c79f93e53f5e6eaf60533d8e37432cbfd02b55b88c01581e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cdaa7d26e68552c4d158491675b56afa369cafa4dc60b6733aef23e253c25d38 = $this->env->getExtension("native_profiler");
        $__internal_cdaa7d26e68552c4d158491675b56afa369cafa4dc60b6733aef23e253c25d38->enter($__internal_cdaa7d26e68552c4d158491675b56afa369cafa4dc60b6733aef23e253c25d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdaa7d26e68552c4d158491675b56afa369cafa4dc60b6733aef23e253c25d38->leave($__internal_cdaa7d26e68552c4d158491675b56afa369cafa4dc60b6733aef23e253c25d38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ca9420f3bf74ecc7b4ae3a5dbe744edecf21e1d07b890410b36876540906c43 = $this->env->getExtension("native_profiler");
        $__internal_8ca9420f3bf74ecc7b4ae3a5dbe744edecf21e1d07b890410b36876540906c43->enter($__internal_8ca9420f3bf74ecc7b4ae3a5dbe744edecf21e1d07b890410b36876540906c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ca9420f3bf74ecc7b4ae3a5dbe744edecf21e1d07b890410b36876540906c43->leave($__internal_8ca9420f3bf74ecc7b4ae3a5dbe744edecf21e1d07b890410b36876540906c43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14569196c4f09ceb310ae00e322ad567addb98a7d750245d74103279334b64e = $this->env->getExtension("native_profiler");
        $__internal_c14569196c4f09ceb310ae00e322ad567addb98a7d750245d74103279334b64e->enter($__internal_c14569196c4f09ceb310ae00e322ad567addb98a7d750245d74103279334b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c14569196c4f09ceb310ae00e322ad567addb98a7d750245d74103279334b64e->leave($__internal_c14569196c4f09ceb310ae00e322ad567addb98a7d750245d74103279334b64e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1882024c9b883354e36ec8123225bef4a36296c3d30d0d962a88b3bfa5ad3ff9 = $this->env->getExtension("native_profiler");
        $__internal_1882024c9b883354e36ec8123225bef4a36296c3d30d0d962a88b3bfa5ad3ff9->enter($__internal_1882024c9b883354e36ec8123225bef4a36296c3d30d0d962a88b3bfa5ad3ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1882024c9b883354e36ec8123225bef4a36296c3d30d0d962a88b3bfa5ad3ff9->leave($__internal_1882024c9b883354e36ec8123225bef4a36296c3d30d0d962a88b3bfa5ad3ff9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
