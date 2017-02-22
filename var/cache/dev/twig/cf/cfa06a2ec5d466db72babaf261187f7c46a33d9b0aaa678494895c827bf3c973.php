<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_aeb81688c0a8b39ecd5c9c4ec4244bec26033c444f3fac4ca6a84f362b58a283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb81688c0a8b39ecd5c9c4ec4244bec26033c444f3fac4ca6a84f362b58a283->enter($__internal_aeb81688c0a8b39ecd5c9c4ec4244bec26033c444f3fac4ca6a84f362b58a283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_98454e5baaa988c1e9e487c39bc3e9325231f5da0fa2f318250bfca865341b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98454e5baaa988c1e9e487c39bc3e9325231f5da0fa2f318250bfca865341b2e->enter($__internal_98454e5baaa988c1e9e487c39bc3e9325231f5da0fa2f318250bfca865341b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aeb81688c0a8b39ecd5c9c4ec4244bec26033c444f3fac4ca6a84f362b58a283->leave($__internal_aeb81688c0a8b39ecd5c9c4ec4244bec26033c444f3fac4ca6a84f362b58a283_prof);

        
        $__internal_98454e5baaa988c1e9e487c39bc3e9325231f5da0fa2f318250bfca865341b2e->leave($__internal_98454e5baaa988c1e9e487c39bc3e9325231f5da0fa2f318250bfca865341b2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
