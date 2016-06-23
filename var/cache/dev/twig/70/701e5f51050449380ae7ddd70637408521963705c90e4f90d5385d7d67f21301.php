<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_de7d644e1fff218bf1712793acfd088dc06423efc934bb323504260b016cfc5a extends Twig_Template
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
        $__internal_027d8699981e3609122613ee0a05b5782622ec73ddac9563f721a5e621652bec = $this->env->getExtension("native_profiler");
        $__internal_027d8699981e3609122613ee0a05b5782622ec73ddac9563f721a5e621652bec->enter($__internal_027d8699981e3609122613ee0a05b5782622ec73ddac9563f721a5e621652bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_027d8699981e3609122613ee0a05b5782622ec73ddac9563f721a5e621652bec->leave($__internal_027d8699981e3609122613ee0a05b5782622ec73ddac9563f721a5e621652bec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
