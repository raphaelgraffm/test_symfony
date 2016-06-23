<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e803e76cde48885691b9fdb80878781263efa131eff76b89ba12c965c7d34ee9 extends Twig_Template
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
        $__internal_893e5459bff7cb58452eaf6d3ee3602357850564390cd0bf0ab3705e98a19977 = $this->env->getExtension("native_profiler");
        $__internal_893e5459bff7cb58452eaf6d3ee3602357850564390cd0bf0ab3705e98a19977->enter($__internal_893e5459bff7cb58452eaf6d3ee3602357850564390cd0bf0ab3705e98a19977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_893e5459bff7cb58452eaf6d3ee3602357850564390cd0bf0ab3705e98a19977->leave($__internal_893e5459bff7cb58452eaf6d3ee3602357850564390cd0bf0ab3705e98a19977_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
