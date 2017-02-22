<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8dc9e6c82196d273eff516f503cb02cd1de7ad444fd39dc242077a723ca70405 extends Twig_Template
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
        $__internal_a0612a72a4652d4c945ff5150db64e6dd8feeff4821c688770f2d30ea2b4fe91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0612a72a4652d4c945ff5150db64e6dd8feeff4821c688770f2d30ea2b4fe91->enter($__internal_a0612a72a4652d4c945ff5150db64e6dd8feeff4821c688770f2d30ea2b4fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3b6d1f40fb3cab4c936d63d1697fd491ed8bf0f2084f3ebcd78e0249c948ab6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6d1f40fb3cab4c936d63d1697fd491ed8bf0f2084f3ebcd78e0249c948ab6f->enter($__internal_3b6d1f40fb3cab4c936d63d1697fd491ed8bf0f2084f3ebcd78e0249c948ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a0612a72a4652d4c945ff5150db64e6dd8feeff4821c688770f2d30ea2b4fe91->leave($__internal_a0612a72a4652d4c945ff5150db64e6dd8feeff4821c688770f2d30ea2b4fe91_prof);

        
        $__internal_3b6d1f40fb3cab4c936d63d1697fd491ed8bf0f2084f3ebcd78e0249c948ab6f->leave($__internal_3b6d1f40fb3cab4c936d63d1697fd491ed8bf0f2084f3ebcd78e0249c948ab6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
