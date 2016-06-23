<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4fd7b6a061053436ae64128215b64742abb8f4a91daaecca931e6237e8d3719b extends Twig_Template
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
        $__internal_6a2aaff7c0fcba22562b9e9586bb5ae855e6851b1672fe41ac6863e6479a4cc8 = $this->env->getExtension("native_profiler");
        $__internal_6a2aaff7c0fcba22562b9e9586bb5ae855e6851b1672fe41ac6863e6479a4cc8->enter($__internal_6a2aaff7c0fcba22562b9e9586bb5ae855e6851b1672fe41ac6863e6479a4cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6a2aaff7c0fcba22562b9e9586bb5ae855e6851b1672fe41ac6863e6479a4cc8->leave($__internal_6a2aaff7c0fcba22562b9e9586bb5ae855e6851b1672fe41ac6863e6479a4cc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
