<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1f6e1985f5c2c5d1e1a93d87279556721ebf74aa2fc33b54b9d87fb7907812c3 extends Twig_Template
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
        $__internal_6f63af4070fa4a9e6e21e1c20e3f6932de2b22e9fc61b7e2f47db94864e4272f = $this->env->getExtension("native_profiler");
        $__internal_6f63af4070fa4a9e6e21e1c20e3f6932de2b22e9fc61b7e2f47db94864e4272f->enter($__internal_6f63af4070fa4a9e6e21e1c20e3f6932de2b22e9fc61b7e2f47db94864e4272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f63af4070fa4a9e6e21e1c20e3f6932de2b22e9fc61b7e2f47db94864e4272f->leave($__internal_6f63af4070fa4a9e6e21e1c20e3f6932de2b22e9fc61b7e2f47db94864e4272f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
