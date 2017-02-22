<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da7edff53276ce9c9a59fb3e4ccb8edf2484fa2ab3e716e9b020367957771995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7edff53276ce9c9a59fb3e4ccb8edf2484fa2ab3e716e9b020367957771995->enter($__internal_da7edff53276ce9c9a59fb3e4ccb8edf2484fa2ab3e716e9b020367957771995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_656d54103ff151ccd8e584dc57b39f35c512da95d2a6c1ea690dd08eed4f13c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656d54103ff151ccd8e584dc57b39f35c512da95d2a6c1ea690dd08eed4f13c7->enter($__internal_656d54103ff151ccd8e584dc57b39f35c512da95d2a6c1ea690dd08eed4f13c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7edff53276ce9c9a59fb3e4ccb8edf2484fa2ab3e716e9b020367957771995->leave($__internal_da7edff53276ce9c9a59fb3e4ccb8edf2484fa2ab3e716e9b020367957771995_prof);

        
        $__internal_656d54103ff151ccd8e584dc57b39f35c512da95d2a6c1ea690dd08eed4f13c7->leave($__internal_656d54103ff151ccd8e584dc57b39f35c512da95d2a6c1ea690dd08eed4f13c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_233f869eae5f4c016d267bb869ae854e0fc53f371514436cd3d1176f27d10436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233f869eae5f4c016d267bb869ae854e0fc53f371514436cd3d1176f27d10436->enter($__internal_233f869eae5f4c016d267bb869ae854e0fc53f371514436cd3d1176f27d10436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d9d64f52b341c631a48fc12c0913d83e33824cb33060031bb37b1e75a6061e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d64f52b341c631a48fc12c0913d83e33824cb33060031bb37b1e75a6061e8d->enter($__internal_d9d64f52b341c631a48fc12c0913d83e33824cb33060031bb37b1e75a6061e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9d64f52b341c631a48fc12c0913d83e33824cb33060031bb37b1e75a6061e8d->leave($__internal_d9d64f52b341c631a48fc12c0913d83e33824cb33060031bb37b1e75a6061e8d_prof);

        
        $__internal_233f869eae5f4c016d267bb869ae854e0fc53f371514436cd3d1176f27d10436->leave($__internal_233f869eae5f4c016d267bb869ae854e0fc53f371514436cd3d1176f27d10436_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4311916cbbe0951eee3a5f67bce5e355fdf4a60a30659b42b728a6745ddd71a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4311916cbbe0951eee3a5f67bce5e355fdf4a60a30659b42b728a6745ddd71a3->enter($__internal_4311916cbbe0951eee3a5f67bce5e355fdf4a60a30659b42b728a6745ddd71a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_82b40c90cf3c0f00887962be7a9077bd24f444f9c1c920c2412a6996c52a287b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b40c90cf3c0f00887962be7a9077bd24f444f9c1c920c2412a6996c52a287b->enter($__internal_82b40c90cf3c0f00887962be7a9077bd24f444f9c1c920c2412a6996c52a287b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82b40c90cf3c0f00887962be7a9077bd24f444f9c1c920c2412a6996c52a287b->leave($__internal_82b40c90cf3c0f00887962be7a9077bd24f444f9c1c920c2412a6996c52a287b_prof);

        
        $__internal_4311916cbbe0951eee3a5f67bce5e355fdf4a60a30659b42b728a6745ddd71a3->leave($__internal_4311916cbbe0951eee3a5f67bce5e355fdf4a60a30659b42b728a6745ddd71a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_844ab1cb01882dd0e50ec45d965f427970247c31abf2c08b4b56dc875cf74681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844ab1cb01882dd0e50ec45d965f427970247c31abf2c08b4b56dc875cf74681->enter($__internal_844ab1cb01882dd0e50ec45d965f427970247c31abf2c08b4b56dc875cf74681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91ca3235a6b5a8366931375fff91294f5752563d14aa04175e62a7936cee1081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ca3235a6b5a8366931375fff91294f5752563d14aa04175e62a7936cee1081->enter($__internal_91ca3235a6b5a8366931375fff91294f5752563d14aa04175e62a7936cee1081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91ca3235a6b5a8366931375fff91294f5752563d14aa04175e62a7936cee1081->leave($__internal_91ca3235a6b5a8366931375fff91294f5752563d14aa04175e62a7936cee1081_prof);

        
        $__internal_844ab1cb01882dd0e50ec45d965f427970247c31abf2c08b4b56dc875cf74681->leave($__internal_844ab1cb01882dd0e50ec45d965f427970247c31abf2c08b4b56dc875cf74681_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
