<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_22f6b991aa010fed63171b80bd899e36a343e551de91d76fb60a04e8c05c086c extends Twig_Template
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
        $__internal_3f32e8c002cebdb6039e767fb2dbebd6eee2f5b1401d692967e2fa8ca18fb55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f32e8c002cebdb6039e767fb2dbebd6eee2f5b1401d692967e2fa8ca18fb55a->enter($__internal_3f32e8c002cebdb6039e767fb2dbebd6eee2f5b1401d692967e2fa8ca18fb55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c38c76b5c40065892d6a8a26c2fe27c69165b0bc9970a95ce785f3f556f29558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38c76b5c40065892d6a8a26c2fe27c69165b0bc9970a95ce785f3f556f29558->enter($__internal_c38c76b5c40065892d6a8a26c2fe27c69165b0bc9970a95ce785f3f556f29558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3f32e8c002cebdb6039e767fb2dbebd6eee2f5b1401d692967e2fa8ca18fb55a->leave($__internal_3f32e8c002cebdb6039e767fb2dbebd6eee2f5b1401d692967e2fa8ca18fb55a_prof);

        
        $__internal_c38c76b5c40065892d6a8a26c2fe27c69165b0bc9970a95ce785f3f556f29558->leave($__internal_c38c76b5c40065892d6a8a26c2fe27c69165b0bc9970a95ce785f3f556f29558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
