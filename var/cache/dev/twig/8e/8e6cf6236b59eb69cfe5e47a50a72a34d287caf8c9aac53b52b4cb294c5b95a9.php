<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c784234235a7ff887bc50d174fd272f250a41d940cce5594db2bbeb23d36505b extends Twig_Template
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
        $__internal_f4f1a483f41e24c6263923ad6bd8ed899db64dcc8a86e34c01262fedd88d87d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f1a483f41e24c6263923ad6bd8ed899db64dcc8a86e34c01262fedd88d87d6->enter($__internal_f4f1a483f41e24c6263923ad6bd8ed899db64dcc8a86e34c01262fedd88d87d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0df211cb2728db6eb8e362751594d8d1a5cf67b0189b8d33b2f8bd22ba56d4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df211cb2728db6eb8e362751594d8d1a5cf67b0189b8d33b2f8bd22ba56d4d3->enter($__internal_0df211cb2728db6eb8e362751594d8d1a5cf67b0189b8d33b2f8bd22ba56d4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f4f1a483f41e24c6263923ad6bd8ed899db64dcc8a86e34c01262fedd88d87d6->leave($__internal_f4f1a483f41e24c6263923ad6bd8ed899db64dcc8a86e34c01262fedd88d87d6_prof);

        
        $__internal_0df211cb2728db6eb8e362751594d8d1a5cf67b0189b8d33b2f8bd22ba56d4d3->leave($__internal_0df211cb2728db6eb8e362751594d8d1a5cf67b0189b8d33b2f8bd22ba56d4d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
