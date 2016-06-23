<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_96d4a7d7f5c601fa5bd01a3e7429f3d576d236fed461481cd4ee1daa04cc1b5f extends Twig_Template
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
        $__internal_0688c814a3815605e204ced594bc74c0e741f10682f0d67f868770cbcebf168a = $this->env->getExtension("native_profiler");
        $__internal_0688c814a3815605e204ced594bc74c0e741f10682f0d67f868770cbcebf168a->enter($__internal_0688c814a3815605e204ced594bc74c0e741f10682f0d67f868770cbcebf168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0688c814a3815605e204ced594bc74c0e741f10682f0d67f868770cbcebf168a->leave($__internal_0688c814a3815605e204ced594bc74c0e741f10682f0d67f868770cbcebf168a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
