<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cf4ec3de8f5ed9a5fe3b4e068c101ffbf15fc1d15d4eb233682cdc68ea0866ab extends Twig_Template
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
        $__internal_3d3eccf7bc39b2176591f4ad0a8d862aa0aef008450793caba34b84d0ec94a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3eccf7bc39b2176591f4ad0a8d862aa0aef008450793caba34b84d0ec94a98->enter($__internal_3d3eccf7bc39b2176591f4ad0a8d862aa0aef008450793caba34b84d0ec94a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_32ed33b2a99bfd08b8a1ab0a7864defaf86cd4cfa389790f03318b0b66ef6b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ed33b2a99bfd08b8a1ab0a7864defaf86cd4cfa389790f03318b0b66ef6b9e->enter($__internal_32ed33b2a99bfd08b8a1ab0a7864defaf86cd4cfa389790f03318b0b66ef6b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3d3eccf7bc39b2176591f4ad0a8d862aa0aef008450793caba34b84d0ec94a98->leave($__internal_3d3eccf7bc39b2176591f4ad0a8d862aa0aef008450793caba34b84d0ec94a98_prof);

        
        $__internal_32ed33b2a99bfd08b8a1ab0a7864defaf86cd4cfa389790f03318b0b66ef6b9e->leave($__internal_32ed33b2a99bfd08b8a1ab0a7864defaf86cd4cfa389790f03318b0b66ef6b9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
