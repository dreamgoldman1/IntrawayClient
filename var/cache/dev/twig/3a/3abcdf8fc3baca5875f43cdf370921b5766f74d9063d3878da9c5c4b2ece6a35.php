<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_ab718777a2d1a1e11949088220a8bfab053545fb00ef7e0a7e0378f2077367f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab718777a2d1a1e11949088220a8bfab053545fb00ef7e0a7e0378f2077367f0->enter($__internal_ab718777a2d1a1e11949088220a8bfab053545fb00ef7e0a7e0378f2077367f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5ca7c9b93fc0d86e28b8674f0bba09af3031e4b38168cde241e8431d17b93c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca7c9b93fc0d86e28b8674f0bba09af3031e4b38168cde241e8431d17b93c0f->enter($__internal_5ca7c9b93fc0d86e28b8674f0bba09af3031e4b38168cde241e8431d17b93c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ab718777a2d1a1e11949088220a8bfab053545fb00ef7e0a7e0378f2077367f0->leave($__internal_ab718777a2d1a1e11949088220a8bfab053545fb00ef7e0a7e0378f2077367f0_prof);

        
        $__internal_5ca7c9b93fc0d86e28b8674f0bba09af3031e4b38168cde241e8431d17b93c0f->leave($__internal_5ca7c9b93fc0d86e28b8674f0bba09af3031e4b38168cde241e8431d17b93c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
