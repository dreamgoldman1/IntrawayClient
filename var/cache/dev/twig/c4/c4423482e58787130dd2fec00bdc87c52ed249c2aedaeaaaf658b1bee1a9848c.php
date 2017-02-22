<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
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
        $__internal_ba4b42be0ad9b47b78fd371fc11d38c23d22ab2ddc383d8e4aac6fa57763d5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4b42be0ad9b47b78fd371fc11d38c23d22ab2ddc383d8e4aac6fa57763d5f0->enter($__internal_ba4b42be0ad9b47b78fd371fc11d38c23d22ab2ddc383d8e4aac6fa57763d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b5cbc98f0858a024d3698c2b53efc201d0cfaff9ca6c57004fa3fe625946554e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cbc98f0858a024d3698c2b53efc201d0cfaff9ca6c57004fa3fe625946554e->enter($__internal_b5cbc98f0858a024d3698c2b53efc201d0cfaff9ca6c57004fa3fe625946554e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ba4b42be0ad9b47b78fd371fc11d38c23d22ab2ddc383d8e4aac6fa57763d5f0->leave($__internal_ba4b42be0ad9b47b78fd371fc11d38c23d22ab2ddc383d8e4aac6fa57763d5f0_prof);

        
        $__internal_b5cbc98f0858a024d3698c2b53efc201d0cfaff9ca6c57004fa3fe625946554e->leave($__internal_b5cbc98f0858a024d3698c2b53efc201d0cfaff9ca6c57004fa3fe625946554e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
