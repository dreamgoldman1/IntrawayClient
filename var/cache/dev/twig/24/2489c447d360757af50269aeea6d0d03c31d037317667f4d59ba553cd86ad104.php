<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_b4e08bbdc43a3a5cbcede5d2d2facc1a28517ebbff3b653092c34ac66203f6e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e08bbdc43a3a5cbcede5d2d2facc1a28517ebbff3b653092c34ac66203f6e3->enter($__internal_b4e08bbdc43a3a5cbcede5d2d2facc1a28517ebbff3b653092c34ac66203f6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cdffbfe6798afad75c023c6cf0e8d17ff42cc32ee77f64f043d4a10f47494572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdffbfe6798afad75c023c6cf0e8d17ff42cc32ee77f64f043d4a10f47494572->enter($__internal_cdffbfe6798afad75c023c6cf0e8d17ff42cc32ee77f64f043d4a10f47494572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b4e08bbdc43a3a5cbcede5d2d2facc1a28517ebbff3b653092c34ac66203f6e3->leave($__internal_b4e08bbdc43a3a5cbcede5d2d2facc1a28517ebbff3b653092c34ac66203f6e3_prof);

        
        $__internal_cdffbfe6798afad75c023c6cf0e8d17ff42cc32ee77f64f043d4a10f47494572->leave($__internal_cdffbfe6798afad75c023c6cf0e8d17ff42cc32ee77f64f043d4a10f47494572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
