<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ff95babfcda70595578c4e9550ca8e188c0e99c259c46b023576c8fe811a155a extends Twig_Template
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
        $__internal_9b3839fef22a814a18adac3c707865dc7bd7b09913c6fd80fab66048262301bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3839fef22a814a18adac3c707865dc7bd7b09913c6fd80fab66048262301bf->enter($__internal_9b3839fef22a814a18adac3c707865dc7bd7b09913c6fd80fab66048262301bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7ce83305001f7d61042b0209831b251012847aa7f8e10d2d7da29dedec93725d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce83305001f7d61042b0209831b251012847aa7f8e10d2d7da29dedec93725d->enter($__internal_7ce83305001f7d61042b0209831b251012847aa7f8e10d2d7da29dedec93725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9b3839fef22a814a18adac3c707865dc7bd7b09913c6fd80fab66048262301bf->leave($__internal_9b3839fef22a814a18adac3c707865dc7bd7b09913c6fd80fab66048262301bf_prof);

        
        $__internal_7ce83305001f7d61042b0209831b251012847aa7f8e10d2d7da29dedec93725d->leave($__internal_7ce83305001f7d61042b0209831b251012847aa7f8e10d2d7da29dedec93725d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
