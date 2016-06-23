<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1c84f5e6944e97c498238ed9f5731fe4495539b2f8d8d092369d7515bd9547e5 extends Twig_Template
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
        $__internal_3b6aba1c733de6df6e2f591e11c58a556ad4a958a729f9b88767cd33fef0807d = $this->env->getExtension("native_profiler");
        $__internal_3b6aba1c733de6df6e2f591e11c58a556ad4a958a729f9b88767cd33fef0807d->enter($__internal_3b6aba1c733de6df6e2f591e11c58a556ad4a958a729f9b88767cd33fef0807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3b6aba1c733de6df6e2f591e11c58a556ad4a958a729f9b88767cd33fef0807d->leave($__internal_3b6aba1c733de6df6e2f591e11c58a556ad4a958a729f9b88767cd33fef0807d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
