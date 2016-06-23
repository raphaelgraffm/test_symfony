<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b9fef3eed2cc4df15115b10451f611e77224c6a545c54ae0d99facc8de21c42f extends Twig_Template
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
        $__internal_801fe9f6d787996a98fb3783d2e589c5b9a900dada489dda10c11b7017fa1e36 = $this->env->getExtension("native_profiler");
        $__internal_801fe9f6d787996a98fb3783d2e589c5b9a900dada489dda10c11b7017fa1e36->enter($__internal_801fe9f6d787996a98fb3783d2e589c5b9a900dada489dda10c11b7017fa1e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_801fe9f6d787996a98fb3783d2e589c5b9a900dada489dda10c11b7017fa1e36->leave($__internal_801fe9f6d787996a98fb3783d2e589c5b9a900dada489dda10c11b7017fa1e36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
