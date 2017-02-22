<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_d8f14e13909b2647f79016b814d7d721673a47252a418d42f9132044e6486b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f14e13909b2647f79016b814d7d721673a47252a418d42f9132044e6486b23->enter($__internal_d8f14e13909b2647f79016b814d7d721673a47252a418d42f9132044e6486b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c73bd05d7cbc00ac608bd96e030bdbdce4bcf21de7275ea2808ba49ba8282a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73bd05d7cbc00ac608bd96e030bdbdce4bcf21de7275ea2808ba49ba8282a24->enter($__internal_c73bd05d7cbc00ac608bd96e030bdbdce4bcf21de7275ea2808ba49ba8282a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d8f14e13909b2647f79016b814d7d721673a47252a418d42f9132044e6486b23->leave($__internal_d8f14e13909b2647f79016b814d7d721673a47252a418d42f9132044e6486b23_prof);

        
        $__internal_c73bd05d7cbc00ac608bd96e030bdbdce4bcf21de7275ea2808ba49ba8282a24->leave($__internal_c73bd05d7cbc00ac608bd96e030bdbdce4bcf21de7275ea2808ba49ba8282a24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
