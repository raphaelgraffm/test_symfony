<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aaa4e66f947dfc276ddf645668c1f3d06d55a5587d7c984f18a93fa829ea5b9d extends Twig_Template
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
        $__internal_a4425c012aae21aa8f5f2f62f7295227ce3e471c471a51087981998d02128306 = $this->env->getExtension("native_profiler");
        $__internal_a4425c012aae21aa8f5f2f62f7295227ce3e471c471a51087981998d02128306->enter($__internal_a4425c012aae21aa8f5f2f62f7295227ce3e471c471a51087981998d02128306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a4425c012aae21aa8f5f2f62f7295227ce3e471c471a51087981998d02128306->leave($__internal_a4425c012aae21aa8f5f2f62f7295227ce3e471c471a51087981998d02128306_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
