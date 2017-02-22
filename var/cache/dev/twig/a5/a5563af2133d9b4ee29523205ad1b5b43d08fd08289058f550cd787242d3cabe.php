<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73d587c34fb846436934c6248f5da45a89b8941fda3a9ed820e8e8f7433740c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d587c34fb846436934c6248f5da45a89b8941fda3a9ed820e8e8f7433740c8->enter($__internal_73d587c34fb846436934c6248f5da45a89b8941fda3a9ed820e8e8f7433740c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2e6428f2c142b9fbef46cc0d82c4c72339f7bf1cecd279149511efbf2db6762f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6428f2c142b9fbef46cc0d82c4c72339f7bf1cecd279149511efbf2db6762f->enter($__internal_2e6428f2c142b9fbef46cc0d82c4c72339f7bf1cecd279149511efbf2db6762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_73d587c34fb846436934c6248f5da45a89b8941fda3a9ed820e8e8f7433740c8->leave($__internal_73d587c34fb846436934c6248f5da45a89b8941fda3a9ed820e8e8f7433740c8_prof);

        
        $__internal_2e6428f2c142b9fbef46cc0d82c4c72339f7bf1cecd279149511efbf2db6762f->leave($__internal_2e6428f2c142b9fbef46cc0d82c4c72339f7bf1cecd279149511efbf2db6762f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_89fa56e7d8d118869b46c4c5992eabf725256c65c8da18b27f89fc6864526153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fa56e7d8d118869b46c4c5992eabf725256c65c8da18b27f89fc6864526153->enter($__internal_89fa56e7d8d118869b46c4c5992eabf725256c65c8da18b27f89fc6864526153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8185f039b9073594b3f5f140e2f8c6f86ccb1e8994938a6cda6c7a4add9dc5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8185f039b9073594b3f5f140e2f8c6f86ccb1e8994938a6cda6c7a4add9dc5a9->enter($__internal_8185f039b9073594b3f5f140e2f8c6f86ccb1e8994938a6cda6c7a4add9dc5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8185f039b9073594b3f5f140e2f8c6f86ccb1e8994938a6cda6c7a4add9dc5a9->leave($__internal_8185f039b9073594b3f5f140e2f8c6f86ccb1e8994938a6cda6c7a4add9dc5a9_prof);

        
        $__internal_89fa56e7d8d118869b46c4c5992eabf725256c65c8da18b27f89fc6864526153->leave($__internal_89fa56e7d8d118869b46c4c5992eabf725256c65c8da18b27f89fc6864526153_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
