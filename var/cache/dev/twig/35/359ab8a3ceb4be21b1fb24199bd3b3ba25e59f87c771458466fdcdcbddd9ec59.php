<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_653c22a4f22f493e242cb783acb6e77e59cd051536346e88ad8bae2aa8116bc7 extends Twig_Template
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
        $__internal_7f8ff1a17b0c5562261291435c7cd590e04f3b34c28c97d01986d83b337ed4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8ff1a17b0c5562261291435c7cd590e04f3b34c28c97d01986d83b337ed4f3->enter($__internal_7f8ff1a17b0c5562261291435c7cd590e04f3b34c28c97d01986d83b337ed4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_480c612afd1f3d576ebbd7df18f837d2031b7f9db854ce314f79a1cef92fc091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480c612afd1f3d576ebbd7df18f837d2031b7f9db854ce314f79a1cef92fc091->enter($__internal_480c612afd1f3d576ebbd7df18f837d2031b7f9db854ce314f79a1cef92fc091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7f8ff1a17b0c5562261291435c7cd590e04f3b34c28c97d01986d83b337ed4f3->leave($__internal_7f8ff1a17b0c5562261291435c7cd590e04f3b34c28c97d01986d83b337ed4f3_prof);

        
        $__internal_480c612afd1f3d576ebbd7df18f837d2031b7f9db854ce314f79a1cef92fc091->leave($__internal_480c612afd1f3d576ebbd7df18f837d2031b7f9db854ce314f79a1cef92fc091_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
