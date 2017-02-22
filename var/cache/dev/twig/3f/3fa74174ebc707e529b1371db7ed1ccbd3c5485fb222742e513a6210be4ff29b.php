<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_e367544eb46963ad713b926059edded600c61a6e1ba99e1ae9b8e4b0d20383ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e367544eb46963ad713b926059edded600c61a6e1ba99e1ae9b8e4b0d20383ba->enter($__internal_e367544eb46963ad713b926059edded600c61a6e1ba99e1ae9b8e4b0d20383ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ccb4915de6575b25b4385fbf6e9ad4736a25162fc17147108878391eccb2595b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb4915de6575b25b4385fbf6e9ad4736a25162fc17147108878391eccb2595b->enter($__internal_ccb4915de6575b25b4385fbf6e9ad4736a25162fc17147108878391eccb2595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e367544eb46963ad713b926059edded600c61a6e1ba99e1ae9b8e4b0d20383ba->leave($__internal_e367544eb46963ad713b926059edded600c61a6e1ba99e1ae9b8e4b0d20383ba_prof);

        
        $__internal_ccb4915de6575b25b4385fbf6e9ad4736a25162fc17147108878391eccb2595b->leave($__internal_ccb4915de6575b25b4385fbf6e9ad4736a25162fc17147108878391eccb2595b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
