<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c66c00553b0acd3ed9c9e1ea3924c0e69856c0add0b51bcedfe3f049632326d4 extends Twig_Template
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
        $__internal_a98de07de69c5d02431e084262a4ba1abd6db2927df380adc5d01a4f40d3ca38 = $this->env->getExtension("native_profiler");
        $__internal_a98de07de69c5d02431e084262a4ba1abd6db2927df380adc5d01a4f40d3ca38->enter($__internal_a98de07de69c5d02431e084262a4ba1abd6db2927df380adc5d01a4f40d3ca38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a98de07de69c5d02431e084262a4ba1abd6db2927df380adc5d01a4f40d3ca38->leave($__internal_a98de07de69c5d02431e084262a4ba1abd6db2927df380adc5d01a4f40d3ca38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
