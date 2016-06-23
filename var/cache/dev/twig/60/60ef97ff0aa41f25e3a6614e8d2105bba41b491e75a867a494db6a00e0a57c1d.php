<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_595efee28a45f0407487a8d0180caa6ff4863f8e46991875bf05df1b80f64b90 extends Twig_Template
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
        $__internal_cc1569af640873aa5c06187aba6400614fdfe9abe38febd06f977f5f2f303df5 = $this->env->getExtension("native_profiler");
        $__internal_cc1569af640873aa5c06187aba6400614fdfe9abe38febd06f977f5f2f303df5->enter($__internal_cc1569af640873aa5c06187aba6400614fdfe9abe38febd06f977f5f2f303df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc1569af640873aa5c06187aba6400614fdfe9abe38febd06f977f5f2f303df5->leave($__internal_cc1569af640873aa5c06187aba6400614fdfe9abe38febd06f977f5f2f303df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
