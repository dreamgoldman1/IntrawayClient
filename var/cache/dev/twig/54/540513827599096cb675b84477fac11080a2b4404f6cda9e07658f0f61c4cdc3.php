<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_ea887cccadd33565f2388816ecad0a601d1fda44ef3a73953162c6467d6adcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea887cccadd33565f2388816ecad0a601d1fda44ef3a73953162c6467d6adcae->enter($__internal_ea887cccadd33565f2388816ecad0a601d1fda44ef3a73953162c6467d6adcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3180c6bfdd7f0b360f685ef08ad690ae0324302433568e9ef76054fb0890d0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3180c6bfdd7f0b360f685ef08ad690ae0324302433568e9ef76054fb0890d0fd->enter($__internal_3180c6bfdd7f0b360f685ef08ad690ae0324302433568e9ef76054fb0890d0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ea887cccadd33565f2388816ecad0a601d1fda44ef3a73953162c6467d6adcae->leave($__internal_ea887cccadd33565f2388816ecad0a601d1fda44ef3a73953162c6467d6adcae_prof);

        
        $__internal_3180c6bfdd7f0b360f685ef08ad690ae0324302433568e9ef76054fb0890d0fd->leave($__internal_3180c6bfdd7f0b360f685ef08ad690ae0324302433568e9ef76054fb0890d0fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
