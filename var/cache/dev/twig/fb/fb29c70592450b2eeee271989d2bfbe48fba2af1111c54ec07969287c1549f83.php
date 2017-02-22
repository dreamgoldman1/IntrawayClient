<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_df3aaadc37c0f2bc7fd7305233625825c040a1a5a6a067e42d84f22f42c15850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3aaadc37c0f2bc7fd7305233625825c040a1a5a6a067e42d84f22f42c15850->enter($__internal_df3aaadc37c0f2bc7fd7305233625825c040a1a5a6a067e42d84f22f42c15850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_54361e1743cb034bb09db37b70a7fa6aba95f4bd7ddc3676ca403d8a798aeef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54361e1743cb034bb09db37b70a7fa6aba95f4bd7ddc3676ca403d8a798aeef4->enter($__internal_54361e1743cb034bb09db37b70a7fa6aba95f4bd7ddc3676ca403d8a798aeef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_df3aaadc37c0f2bc7fd7305233625825c040a1a5a6a067e42d84f22f42c15850->leave($__internal_df3aaadc37c0f2bc7fd7305233625825c040a1a5a6a067e42d84f22f42c15850_prof);

        
        $__internal_54361e1743cb034bb09db37b70a7fa6aba95f4bd7ddc3676ca403d8a798aeef4->leave($__internal_54361e1743cb034bb09db37b70a7fa6aba95f4bd7ddc3676ca403d8a798aeef4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
