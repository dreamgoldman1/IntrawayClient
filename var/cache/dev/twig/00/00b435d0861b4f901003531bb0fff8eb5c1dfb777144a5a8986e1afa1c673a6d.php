<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6beb572cc3349330119da77b7d8d71fae0f27a564e0daff9d84425bdee21270f extends Twig_Template
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
        $__internal_3ca976e8b168ae140566d24ccfbf03ab5243d3f008030ae290f46993743fd358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca976e8b168ae140566d24ccfbf03ab5243d3f008030ae290f46993743fd358->enter($__internal_3ca976e8b168ae140566d24ccfbf03ab5243d3f008030ae290f46993743fd358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_30fcea0c66242c7549364dcef9d878c9b4f5b01570b2938c3b63d8501322f498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fcea0c66242c7549364dcef9d878c9b4f5b01570b2938c3b63d8501322f498->enter($__internal_30fcea0c66242c7549364dcef9d878c9b4f5b01570b2938c3b63d8501322f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3ca976e8b168ae140566d24ccfbf03ab5243d3f008030ae290f46993743fd358->leave($__internal_3ca976e8b168ae140566d24ccfbf03ab5243d3f008030ae290f46993743fd358_prof);

        
        $__internal_30fcea0c66242c7549364dcef9d878c9b4f5b01570b2938c3b63d8501322f498->leave($__internal_30fcea0c66242c7549364dcef9d878c9b4f5b01570b2938c3b63d8501322f498_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
