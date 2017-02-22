<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_9970f7c7c20478472bc13d522c960c51777a0e6b340a59e9698c5df4ad31385e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9970f7c7c20478472bc13d522c960c51777a0e6b340a59e9698c5df4ad31385e->enter($__internal_9970f7c7c20478472bc13d522c960c51777a0e6b340a59e9698c5df4ad31385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_642cea86ed734b70018a7b38e86c910e295648a3caa4344c82b8330570287e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642cea86ed734b70018a7b38e86c910e295648a3caa4344c82b8330570287e82->enter($__internal_642cea86ed734b70018a7b38e86c910e295648a3caa4344c82b8330570287e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9970f7c7c20478472bc13d522c960c51777a0e6b340a59e9698c5df4ad31385e->leave($__internal_9970f7c7c20478472bc13d522c960c51777a0e6b340a59e9698c5df4ad31385e_prof);

        
        $__internal_642cea86ed734b70018a7b38e86c910e295648a3caa4344c82b8330570287e82->leave($__internal_642cea86ed734b70018a7b38e86c910e295648a3caa4344c82b8330570287e82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
