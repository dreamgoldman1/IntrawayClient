<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bba017919bdf57e282372139b2f1844b2afe0738943686fa027d60ab02ea55f2 extends Twig_Template
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
        $__internal_bf0cd0a4d3b2c1a5ef567acb77b5962485c1b1ac3fd3789d59c8cb6d150ded9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0cd0a4d3b2c1a5ef567acb77b5962485c1b1ac3fd3789d59c8cb6d150ded9e->enter($__internal_bf0cd0a4d3b2c1a5ef567acb77b5962485c1b1ac3fd3789d59c8cb6d150ded9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_43b776ea77ba613cdd0b0048b8bcc914299cd7809701bc025d18d5e0d96a6bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b776ea77ba613cdd0b0048b8bcc914299cd7809701bc025d18d5e0d96a6bca->enter($__internal_43b776ea77ba613cdd0b0048b8bcc914299cd7809701bc025d18d5e0d96a6bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bf0cd0a4d3b2c1a5ef567acb77b5962485c1b1ac3fd3789d59c8cb6d150ded9e->leave($__internal_bf0cd0a4d3b2c1a5ef567acb77b5962485c1b1ac3fd3789d59c8cb6d150ded9e_prof);

        
        $__internal_43b776ea77ba613cdd0b0048b8bcc914299cd7809701bc025d18d5e0d96a6bca->leave($__internal_43b776ea77ba613cdd0b0048b8bcc914299cd7809701bc025d18d5e0d96a6bca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
