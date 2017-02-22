<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0cbd9c888264907070ac7495bccc5f60b10ebd4ca8e75d0e8ad4922427374b86 extends Twig_Template
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
        $__internal_bf21b2e200ee8a11b59f4e4283d17643dd3fe2afba5869d8645f31ae8b5459f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf21b2e200ee8a11b59f4e4283d17643dd3fe2afba5869d8645f31ae8b5459f6->enter($__internal_bf21b2e200ee8a11b59f4e4283d17643dd3fe2afba5869d8645f31ae8b5459f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d2f9a2b866fafe12b00a584f86f96608923ab88e5c5d6a23b672c0c2f85ea791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f9a2b866fafe12b00a584f86f96608923ab88e5c5d6a23b672c0c2f85ea791->enter($__internal_d2f9a2b866fafe12b00a584f86f96608923ab88e5c5d6a23b672c0c2f85ea791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf21b2e200ee8a11b59f4e4283d17643dd3fe2afba5869d8645f31ae8b5459f6->leave($__internal_bf21b2e200ee8a11b59f4e4283d17643dd3fe2afba5869d8645f31ae8b5459f6_prof);

        
        $__internal_d2f9a2b866fafe12b00a584f86f96608923ab88e5c5d6a23b672c0c2f85ea791->leave($__internal_d2f9a2b866fafe12b00a584f86f96608923ab88e5c5d6a23b672c0c2f85ea791_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
