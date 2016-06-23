<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_416e40c01804e97eae3dac7f6c76dde52263b5c04d2eb5cbbe0e54197115f8e3 extends Twig_Template
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
        $__internal_77d028d61680c829917ded8d7f3bae9a8b43cee09d22a5798b97714748cd3901 = $this->env->getExtension("native_profiler");
        $__internal_77d028d61680c829917ded8d7f3bae9a8b43cee09d22a5798b97714748cd3901->enter($__internal_77d028d61680c829917ded8d7f3bae9a8b43cee09d22a5798b97714748cd3901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77d028d61680c829917ded8d7f3bae9a8b43cee09d22a5798b97714748cd3901->leave($__internal_77d028d61680c829917ded8d7f3bae9a8b43cee09d22a5798b97714748cd3901_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
