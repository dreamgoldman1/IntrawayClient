<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dcf09ef115ad475e35053e1e75acf96a2b5ea8f24c2a89da80af25d647968159 extends Twig_Template
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
        $__internal_ae892315800889eeab01fa1252d4391cb6829bc52996fe5046d29fc8bca44219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae892315800889eeab01fa1252d4391cb6829bc52996fe5046d29fc8bca44219->enter($__internal_ae892315800889eeab01fa1252d4391cb6829bc52996fe5046d29fc8bca44219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e97573492e02d42bd45ad5998cff3ec39f6ab1d5a6c35f72daceb31eabd706f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97573492e02d42bd45ad5998cff3ec39f6ab1d5a6c35f72daceb31eabd706f4->enter($__internal_e97573492e02d42bd45ad5998cff3ec39f6ab1d5a6c35f72daceb31eabd706f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ae892315800889eeab01fa1252d4391cb6829bc52996fe5046d29fc8bca44219->leave($__internal_ae892315800889eeab01fa1252d4391cb6829bc52996fe5046d29fc8bca44219_prof);

        
        $__internal_e97573492e02d42bd45ad5998cff3ec39f6ab1d5a6c35f72daceb31eabd706f4->leave($__internal_e97573492e02d42bd45ad5998cff3ec39f6ab1d5a6c35f72daceb31eabd706f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
