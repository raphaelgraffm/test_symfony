<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_29bc1643eb7a951692cd03e94c9de8003b834d178672f5f4ea2795bcdd8e54c5 extends Twig_Template
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
        $__internal_a7c1e3889eab93ba43e4d974bf8a554714b959e87eac02a98ae9fe2b5b7a9c37 = $this->env->getExtension("native_profiler");
        $__internal_a7c1e3889eab93ba43e4d974bf8a554714b959e87eac02a98ae9fe2b5b7a9c37->enter($__internal_a7c1e3889eab93ba43e4d974bf8a554714b959e87eac02a98ae9fe2b5b7a9c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a7c1e3889eab93ba43e4d974bf8a554714b959e87eac02a98ae9fe2b5b7a9c37->leave($__internal_a7c1e3889eab93ba43e4d974bf8a554714b959e87eac02a98ae9fe2b5b7a9c37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
