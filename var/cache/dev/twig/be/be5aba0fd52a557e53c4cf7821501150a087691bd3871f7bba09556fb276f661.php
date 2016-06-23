<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2c012c0fbc1d817d33b0ff8786c99ebf869009fffc19e15a9f0b7d18eebbfc29 extends Twig_Template
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
        $__internal_f3789e90fe9d44703c97073d3af97c8d7a6a62868c4f6759fa7a924cd7ac3277 = $this->env->getExtension("native_profiler");
        $__internal_f3789e90fe9d44703c97073d3af97c8d7a6a62868c4f6759fa7a924cd7ac3277->enter($__internal_f3789e90fe9d44703c97073d3af97c8d7a6a62868c4f6759fa7a924cd7ac3277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f3789e90fe9d44703c97073d3af97c8d7a6a62868c4f6759fa7a924cd7ac3277->leave($__internal_f3789e90fe9d44703c97073d3af97c8d7a6a62868c4f6759fa7a924cd7ac3277_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
