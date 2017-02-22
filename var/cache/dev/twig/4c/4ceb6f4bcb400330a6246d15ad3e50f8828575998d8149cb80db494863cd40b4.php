<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_bd88b7943bb05d16f1b33cef770a61adb6a97568031821e3ad024693b9a51484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd88b7943bb05d16f1b33cef770a61adb6a97568031821e3ad024693b9a51484->enter($__internal_bd88b7943bb05d16f1b33cef770a61adb6a97568031821e3ad024693b9a51484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_86ee519b5dfc38078bee93efd1a480394d0e6f5b8c2ea2479f40a6fd3474c382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ee519b5dfc38078bee93efd1a480394d0e6f5b8c2ea2479f40a6fd3474c382->enter($__internal_86ee519b5dfc38078bee93efd1a480394d0e6f5b8c2ea2479f40a6fd3474c382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bd88b7943bb05d16f1b33cef770a61adb6a97568031821e3ad024693b9a51484->leave($__internal_bd88b7943bb05d16f1b33cef770a61adb6a97568031821e3ad024693b9a51484_prof);

        
        $__internal_86ee519b5dfc38078bee93efd1a480394d0e6f5b8c2ea2479f40a6fd3474c382->leave($__internal_86ee519b5dfc38078bee93efd1a480394d0e6f5b8c2ea2479f40a6fd3474c382_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
