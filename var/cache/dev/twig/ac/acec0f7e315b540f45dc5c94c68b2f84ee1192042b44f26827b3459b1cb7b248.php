<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1057a5406f98737a0f6aa607744cdb59f9a16d0d40bace90531ae11e5284e2bb extends Twig_Template
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
        $__internal_db926ff1d444255ee3bae41a96f6e3f878fc3702f52e50d9e51e9030dd38a7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db926ff1d444255ee3bae41a96f6e3f878fc3702f52e50d9e51e9030dd38a7b7->enter($__internal_db926ff1d444255ee3bae41a96f6e3f878fc3702f52e50d9e51e9030dd38a7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3dbe8f8b108d4bea9b55fc061718af70bde5cbec4b2c7e2693c7a05768e60c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbe8f8b108d4bea9b55fc061718af70bde5cbec4b2c7e2693c7a05768e60c4e->enter($__internal_3dbe8f8b108d4bea9b55fc061718af70bde5cbec4b2c7e2693c7a05768e60c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_db926ff1d444255ee3bae41a96f6e3f878fc3702f52e50d9e51e9030dd38a7b7->leave($__internal_db926ff1d444255ee3bae41a96f6e3f878fc3702f52e50d9e51e9030dd38a7b7_prof);

        
        $__internal_3dbe8f8b108d4bea9b55fc061718af70bde5cbec4b2c7e2693c7a05768e60c4e->leave($__internal_3dbe8f8b108d4bea9b55fc061718af70bde5cbec4b2c7e2693c7a05768e60c4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
