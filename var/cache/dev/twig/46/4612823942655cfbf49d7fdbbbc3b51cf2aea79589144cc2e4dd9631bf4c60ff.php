<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_54b9b918dad1cd275aa79252279314378caa278b0c1c5029de4ee8f033419821 extends Twig_Template
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
        $__internal_b2c9bed6675c04d8bd984aa67156fd5eec551d16ffef53ada0ea252488363a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c9bed6675c04d8bd984aa67156fd5eec551d16ffef53ada0ea252488363a3f->enter($__internal_b2c9bed6675c04d8bd984aa67156fd5eec551d16ffef53ada0ea252488363a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_675a4355c298d78a16f6b275e7834e8c11a1520b4912e0b395b5318ad1b4a9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675a4355c298d78a16f6b275e7834e8c11a1520b4912e0b395b5318ad1b4a9f0->enter($__internal_675a4355c298d78a16f6b275e7834e8c11a1520b4912e0b395b5318ad1b4a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b2c9bed6675c04d8bd984aa67156fd5eec551d16ffef53ada0ea252488363a3f->leave($__internal_b2c9bed6675c04d8bd984aa67156fd5eec551d16ffef53ada0ea252488363a3f_prof);

        
        $__internal_675a4355c298d78a16f6b275e7834e8c11a1520b4912e0b395b5318ad1b4a9f0->leave($__internal_675a4355c298d78a16f6b275e7834e8c11a1520b4912e0b395b5318ad1b4a9f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
