<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0292c773fba793686bf97b6d07a6b86c80ceef7c49a49a3dbf0e9cc8b41af2f7 extends Twig_Template
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
        $__internal_de21bc7c868212d7b3fbddd881d6d9b68cac790eafbd6db152b9e0cdc60c72bf = $this->env->getExtension("native_profiler");
        $__internal_de21bc7c868212d7b3fbddd881d6d9b68cac790eafbd6db152b9e0cdc60c72bf->enter($__internal_de21bc7c868212d7b3fbddd881d6d9b68cac790eafbd6db152b9e0cdc60c72bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_de21bc7c868212d7b3fbddd881d6d9b68cac790eafbd6db152b9e0cdc60c72bf->leave($__internal_de21bc7c868212d7b3fbddd881d6d9b68cac790eafbd6db152b9e0cdc60c72bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
