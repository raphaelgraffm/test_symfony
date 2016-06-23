<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fff1bf1d21ddbba5d8b289595765719095b60a034f0183c1c8b13a83eee3592a extends Twig_Template
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
        $__internal_106b4111fc74e8ea9163486d38d2c7b7dc9ced1cc23cb9c68cd4ce7e1d7ddad4 = $this->env->getExtension("native_profiler");
        $__internal_106b4111fc74e8ea9163486d38d2c7b7dc9ced1cc23cb9c68cd4ce7e1d7ddad4->enter($__internal_106b4111fc74e8ea9163486d38d2c7b7dc9ced1cc23cb9c68cd4ce7e1d7ddad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_106b4111fc74e8ea9163486d38d2c7b7dc9ced1cc23cb9c68cd4ce7e1d7ddad4->leave($__internal_106b4111fc74e8ea9163486d38d2c7b7dc9ced1cc23cb9c68cd4ce7e1d7ddad4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
