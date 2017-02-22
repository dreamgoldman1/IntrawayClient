<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_49266892f3eff1007187f45ee9e6da48b7b7f8aeac3c93567b45647d7b653d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49266892f3eff1007187f45ee9e6da48b7b7f8aeac3c93567b45647d7b653d16->enter($__internal_49266892f3eff1007187f45ee9e6da48b7b7f8aeac3c93567b45647d7b653d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2402549d477fb3ef576dc175f70f000558a4f92e1cc35eb94fb89d46a2e7874f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2402549d477fb3ef576dc175f70f000558a4f92e1cc35eb94fb89d46a2e7874f->enter($__internal_2402549d477fb3ef576dc175f70f000558a4f92e1cc35eb94fb89d46a2e7874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_49266892f3eff1007187f45ee9e6da48b7b7f8aeac3c93567b45647d7b653d16->leave($__internal_49266892f3eff1007187f45ee9e6da48b7b7f8aeac3c93567b45647d7b653d16_prof);

        
        $__internal_2402549d477fb3ef576dc175f70f000558a4f92e1cc35eb94fb89d46a2e7874f->leave($__internal_2402549d477fb3ef576dc175f70f000558a4f92e1cc35eb94fb89d46a2e7874f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
