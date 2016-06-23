<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_bce904f00957d5532f9021a2821b0940f5da8c6590f736e3e540abe886b55535 extends Twig_Template
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
        $__internal_63b9835f99b83fbe89b81d5e6cf53a33c01650c9773ed3c96c90280764232608 = $this->env->getExtension("native_profiler");
        $__internal_63b9835f99b83fbe89b81d5e6cf53a33c01650c9773ed3c96c90280764232608->enter($__internal_63b9835f99b83fbe89b81d5e6cf53a33c01650c9773ed3c96c90280764232608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_63b9835f99b83fbe89b81d5e6cf53a33c01650c9773ed3c96c90280764232608->leave($__internal_63b9835f99b83fbe89b81d5e6cf53a33c01650c9773ed3c96c90280764232608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
