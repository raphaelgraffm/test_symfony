<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_71d841413f6434e4a349589bf8f48c1acbcec4e8fc276de2c6a76dec84235e5f extends Twig_Template
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
        $__internal_bb9da0710fc4ec4e1a957f2cf1d35fae164fe71e1c4d5750f6a7c57f48068cdd = $this->env->getExtension("native_profiler");
        $__internal_bb9da0710fc4ec4e1a957f2cf1d35fae164fe71e1c4d5750f6a7c57f48068cdd->enter($__internal_bb9da0710fc4ec4e1a957f2cf1d35fae164fe71e1c4d5750f6a7c57f48068cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bb9da0710fc4ec4e1a957f2cf1d35fae164fe71e1c4d5750f6a7c57f48068cdd->leave($__internal_bb9da0710fc4ec4e1a957f2cf1d35fae164fe71e1c4d5750f6a7c57f48068cdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
