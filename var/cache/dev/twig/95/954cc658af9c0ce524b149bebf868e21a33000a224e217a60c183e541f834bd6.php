<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_aa1d9f6c98982b1b05c467461359e9986e568128e4870a507418ebeef4729925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1d9f6c98982b1b05c467461359e9986e568128e4870a507418ebeef4729925->enter($__internal_aa1d9f6c98982b1b05c467461359e9986e568128e4870a507418ebeef4729925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6194a6eb84ecdb50cb988a2d039d35bdf72e89485a44e79b4b459f22157d1123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6194a6eb84ecdb50cb988a2d039d35bdf72e89485a44e79b4b459f22157d1123->enter($__internal_6194a6eb84ecdb50cb988a2d039d35bdf72e89485a44e79b4b459f22157d1123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_aa1d9f6c98982b1b05c467461359e9986e568128e4870a507418ebeef4729925->leave($__internal_aa1d9f6c98982b1b05c467461359e9986e568128e4870a507418ebeef4729925_prof);

        
        $__internal_6194a6eb84ecdb50cb988a2d039d35bdf72e89485a44e79b4b459f22157d1123->leave($__internal_6194a6eb84ecdb50cb988a2d039d35bdf72e89485a44e79b4b459f22157d1123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
