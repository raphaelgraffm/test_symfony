<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c593a2d264abbf69fcdd07c2cfdf796335cb4faedf4dad5b74eea52442735f50 extends Twig_Template
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
        $__internal_4e0b0d3aa0a53d309b2c9548715effcf99b7e1709215f8b2a1d4471e665ac788 = $this->env->getExtension("native_profiler");
        $__internal_4e0b0d3aa0a53d309b2c9548715effcf99b7e1709215f8b2a1d4471e665ac788->enter($__internal_4e0b0d3aa0a53d309b2c9548715effcf99b7e1709215f8b2a1d4471e665ac788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4e0b0d3aa0a53d309b2c9548715effcf99b7e1709215f8b2a1d4471e665ac788->leave($__internal_4e0b0d3aa0a53d309b2c9548715effcf99b7e1709215f8b2a1d4471e665ac788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
