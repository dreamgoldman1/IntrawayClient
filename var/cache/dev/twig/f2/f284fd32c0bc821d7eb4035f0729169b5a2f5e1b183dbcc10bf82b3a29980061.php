<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
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
        $__internal_89f209e7bf15ade388a333bb776f1559e0e71786b7b0d1811a3431948fd50ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f209e7bf15ade388a333bb776f1559e0e71786b7b0d1811a3431948fd50ffe->enter($__internal_89f209e7bf15ade388a333bb776f1559e0e71786b7b0d1811a3431948fd50ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_753c6782a0e2243dd87c6f5dcdadd64706eda1e9407419b658bf5b411a70fe24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753c6782a0e2243dd87c6f5dcdadd64706eda1e9407419b658bf5b411a70fe24->enter($__internal_753c6782a0e2243dd87c6f5dcdadd64706eda1e9407419b658bf5b411a70fe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_89f209e7bf15ade388a333bb776f1559e0e71786b7b0d1811a3431948fd50ffe->leave($__internal_89f209e7bf15ade388a333bb776f1559e0e71786b7b0d1811a3431948fd50ffe_prof);

        
        $__internal_753c6782a0e2243dd87c6f5dcdadd64706eda1e9407419b658bf5b411a70fe24->leave($__internal_753c6782a0e2243dd87c6f5dcdadd64706eda1e9407419b658bf5b411a70fe24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
