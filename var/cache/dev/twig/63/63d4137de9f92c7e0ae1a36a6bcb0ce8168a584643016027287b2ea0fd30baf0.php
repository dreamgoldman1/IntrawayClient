<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_e136f312dbe29e2d71c63d90f0d5275e0e3238f9f107047ce911725a3724ae06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e136f312dbe29e2d71c63d90f0d5275e0e3238f9f107047ce911725a3724ae06->enter($__internal_e136f312dbe29e2d71c63d90f0d5275e0e3238f9f107047ce911725a3724ae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2f56dc1db51d8c8c63da021191e7919de4d7188b95bfd4b931b70217161c33f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f56dc1db51d8c8c63da021191e7919de4d7188b95bfd4b931b70217161c33f8->enter($__internal_2f56dc1db51d8c8c63da021191e7919de4d7188b95bfd4b931b70217161c33f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e136f312dbe29e2d71c63d90f0d5275e0e3238f9f107047ce911725a3724ae06->leave($__internal_e136f312dbe29e2d71c63d90f0d5275e0e3238f9f107047ce911725a3724ae06_prof);

        
        $__internal_2f56dc1db51d8c8c63da021191e7919de4d7188b95bfd4b931b70217161c33f8->leave($__internal_2f56dc1db51d8c8c63da021191e7919de4d7188b95bfd4b931b70217161c33f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
