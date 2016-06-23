<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f8cdc8b1103c88874f1cd6af747ae6640b430da9eb1cd831d98633f3c4b4cbe9 extends Twig_Template
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
        $__internal_f3181a05bbe74531b5818c1c1ee58e2736dfeb668d1dd3f580304c8baa15f1dd = $this->env->getExtension("native_profiler");
        $__internal_f3181a05bbe74531b5818c1c1ee58e2736dfeb668d1dd3f580304c8baa15f1dd->enter($__internal_f3181a05bbe74531b5818c1c1ee58e2736dfeb668d1dd3f580304c8baa15f1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f3181a05bbe74531b5818c1c1ee58e2736dfeb668d1dd3f580304c8baa15f1dd->leave($__internal_f3181a05bbe74531b5818c1c1ee58e2736dfeb668d1dd3f580304c8baa15f1dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
