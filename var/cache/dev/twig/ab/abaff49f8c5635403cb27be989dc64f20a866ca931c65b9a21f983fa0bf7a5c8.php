<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f01cc832987ca5bb27808e606b2aafc06fd2be802975f573885ef45655f4452e extends Twig_Template
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
        $__internal_cab3370580ce58676f7b046f9e817f93a62d9d4e4faef9973b167d49096d5832 = $this->env->getExtension("native_profiler");
        $__internal_cab3370580ce58676f7b046f9e817f93a62d9d4e4faef9973b167d49096d5832->enter($__internal_cab3370580ce58676f7b046f9e817f93a62d9d4e4faef9973b167d49096d5832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cab3370580ce58676f7b046f9e817f93a62d9d4e4faef9973b167d49096d5832->leave($__internal_cab3370580ce58676f7b046f9e817f93a62d9d4e4faef9973b167d49096d5832_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
