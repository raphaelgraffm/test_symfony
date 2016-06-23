<?php

/* ::layout.html.twig */
class __TwigTemplate_7b262bcbbe0f9150f4ea84daaec7b46a9d8c22607c1043cfca65642b48267822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ec865ae9ea9b8440ab35b596fb7169114e1d9c8ad54418650c8ada8400ceee2 = $this->env->getExtension("native_profiler");
        $__internal_9ec865ae9ea9b8440ab35b596fb7169114e1d9c8ad54418650c8ada8400ceee2->enter($__internal_9ec865ae9ea9b8440ab35b596fb7169114e1d9c8ad54418650c8ada8400ceee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t\t<p>
\t\t\t\t\tCe projet est propulsé par Symfony,
\t\t\t\t\tet construit grâce au MOOC OpenClassroom et SensioLabs.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-internet-avec-le-framework-symfony2\">
\t\t\t\t\t\tParticipez au MOOC >>
\t\t\t\t\t</a> 
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t\t\t\t\t</ul>

\t\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t\t";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr/>

\t\t\t<footer>
\t\t\t\t<p>The sky's the limit - ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - and beyond</p>
\t\t\t</footer>
\t\t</div>

\t\t";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
\t</body>
</html>";
        
        $__internal_9ec865ae9ea9b8440ab35b596fb7169114e1d9c8ad54418650c8ada8400ceee2->leave($__internal_9ec865ae9ea9b8440ab35b596fb7169114e1d9c8ad54418650c8ada8400ceee2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_969c9669ffc1ae2ce44475636bc2408b3e82c25fbc681ff6c2491a4a90993b1f = $this->env->getExtension("native_profiler");
        $__internal_969c9669ffc1ae2ce44475636bc2408b3e82c25fbc681ff6c2491a4a90993b1f->enter($__internal_969c9669ffc1ae2ce44475636bc2408b3e82c25fbc681ff6c2491a4a90993b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_969c9669ffc1ae2ce44475636bc2408b3e82c25fbc681ff6c2491a4a90993b1f->leave($__internal_969c9669ffc1ae2ce44475636bc2408b3e82c25fbc681ff6c2491a4a90993b1f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72fb031b32dc4b69c0703edb255fcd22a0faf0e62a774224fe728baac4e3eedf = $this->env->getExtension("native_profiler");
        $__internal_72fb031b32dc4b69c0703edb255fcd22a0faf0e62a774224fe728baac4e3eedf->enter($__internal_72fb031b32dc4b69c0703edb255fcd22a0faf0e62a774224fe728baac4e3eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"/>
\t\t";
        
        $__internal_72fb031b32dc4b69c0703edb255fcd22a0faf0e62a774224fe728baac4e3eedf->leave($__internal_72fb031b32dc4b69c0703edb255fcd22a0faf0e62a774224fe728baac4e3eedf_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e47fada0ef9195d0128f1daa6bf8209054850c95fe8da5880ce88f872fd361f = $this->env->getExtension("native_profiler");
        $__internal_3e47fada0ef9195d0128f1daa6bf8209054850c95fe8da5880ce88f872fd361f->enter($__internal_3e47fada0ef9195d0128f1daa6bf8209054850c95fe8da5880ce88f872fd361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "\t\t\t\t\t";
        
        $__internal_3e47fada0ef9195d0128f1daa6bf8209054850c95fe8da5880ce88f872fd361f->leave($__internal_3e47fada0ef9195d0128f1daa6bf8209054850c95fe8da5880ce88f872fd361f_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb26da2008b6b070cda9c972e4d6ec512940b7c25b9835b363fb3367fc5eab24 = $this->env->getExtension("native_profiler");
        $__internal_bb26da2008b6b070cda9c972e4d6ec512940b7c25b9835b363fb3367fc5eab24->enter($__internal_bb26da2008b6b070cda9c972e4d6ec512940b7c25b9835b363fb3367fc5eab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    \t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t";
        
        $__internal_bb26da2008b6b070cda9c972e4d6ec512940b7c25b9835b363fb3367fc5eab24->leave($__internal_bb26da2008b6b070cda9c972e4d6ec512940b7c25b9835b363fb3367fc5eab24_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  148 => 53,  141 => 42,  135 => 41,  127 => 11,  121 => 10,  109 => 8,  100 => 57,  98 => 53,  91 => 49,  83 => 43,  81 => 41,  75 => 38,  68 => 34,  64 => 33,  42 => 13,  40 => 10,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* 	<head>*/
/* 		<meta charset="utf-8"/>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/* */
/* 		<title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/* 		{% block stylesheets %}*/
/* 			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>*/
/* 		{% endblock %}*/
/* 	</head>*/
/* 	<body>*/
/* 		<div class="container">*/
/* 			<div id="header" class="jumbotron">*/
/* 				<h1>Ma plateforme d'annonces</h1>*/
/* 				<p>*/
/* 					Ce projet est propulsé par Symfony,*/
/* 					et construit grâce au MOOC OpenClassroom et SensioLabs.*/
/* 				</p>*/
/* 				<p>*/
/* 					<a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-internet-avec-le-framework-symfony2">*/
/* 						Participez au MOOC >>*/
/* 					</a> */
/* 				</p>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div id="menu" class="col-md-3">*/
/* 					<h3>Les annonces</h3>*/
/* 					<ul class="nav nav-pills nav-stacked">*/
/* 						<li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/* 						<li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/* 					</ul>*/
/* */
/* 					<h4>Dernières annonces</h4>*/
/* 					{{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* 				</div>*/
/* 				<div id="content" class="col-md-9">*/
/* 					{% block body %}*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<hr/>*/
/* */
/* 			<footer>*/
/* 				<p>The sky's the limit - {{ 'now' | date('Y') }} - and beyond</p>*/
/* 			</footer>*/
/* 		</div>*/
/* */
/* 		{% block javascripts %}*/
/* 			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* 		{% endblock %}*/
/* */
/* 	</body>*/
/* </html>*/
