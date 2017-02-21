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
        $__internal_51718ab5baaadeb845e18dd3aad78efe7ab4dd2fdf2ede260d6ab119260edec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51718ab5baaadeb845e18dd3aad78efe7ab4dd2fdf2ede260d6ab119260edec1->enter($__internal_51718ab5baaadeb845e18dd3aad78efe7ab4dd2fdf2ede260d6ab119260edec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c2529a5ac702fa5d43f6a5c6806ecdea4ebf88c5541422a6df1e54b8d0e14c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2529a5ac702fa5d43f6a5c6806ecdea4ebf88c5541422a6df1e54b8d0e14c0b->enter($__internal_c2529a5ac702fa5d43f6a5c6806ecdea4ebf88c5541422a6df1e54b8d0e14c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51718ab5baaadeb845e18dd3aad78efe7ab4dd2fdf2ede260d6ab119260edec1->leave($__internal_51718ab5baaadeb845e18dd3aad78efe7ab4dd2fdf2ede260d6ab119260edec1_prof);

        
        $__internal_c2529a5ac702fa5d43f6a5c6806ecdea4ebf88c5541422a6df1e54b8d0e14c0b->leave($__internal_c2529a5ac702fa5d43f6a5c6806ecdea4ebf88c5541422a6df1e54b8d0e14c0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab6b2315064bfb2b9565401711e1223919db80a8f87d8201e1316d1e6fa2ea47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6b2315064bfb2b9565401711e1223919db80a8f87d8201e1316d1e6fa2ea47->enter($__internal_ab6b2315064bfb2b9565401711e1223919db80a8f87d8201e1316d1e6fa2ea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3a39c9e8c5209a64a15f08f56fb78eb23d414638f3374b6bc52f37afbdc88241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a39c9e8c5209a64a15f08f56fb78eb23d414638f3374b6bc52f37afbdc88241->enter($__internal_3a39c9e8c5209a64a15f08f56fb78eb23d414638f3374b6bc52f37afbdc88241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a39c9e8c5209a64a15f08f56fb78eb23d414638f3374b6bc52f37afbdc88241->leave($__internal_3a39c9e8c5209a64a15f08f56fb78eb23d414638f3374b6bc52f37afbdc88241_prof);

        
        $__internal_ab6b2315064bfb2b9565401711e1223919db80a8f87d8201e1316d1e6fa2ea47->leave($__internal_ab6b2315064bfb2b9565401711e1223919db80a8f87d8201e1316d1e6fa2ea47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfe88edf703903742517b9b64fc33fb9f8e55b4c9b78a74e541676e4a2cd9e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe88edf703903742517b9b64fc33fb9f8e55b4c9b78a74e541676e4a2cd9e00->enter($__internal_bfe88edf703903742517b9b64fc33fb9f8e55b4c9b78a74e541676e4a2cd9e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c203c3afffaf17ff103819a0f4aaf0b6dfc4ca54228b440b775eeca36ee5f81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c203c3afffaf17ff103819a0f4aaf0b6dfc4ca54228b440b775eeca36ee5f81d->enter($__internal_c203c3afffaf17ff103819a0f4aaf0b6dfc4ca54228b440b775eeca36ee5f81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c203c3afffaf17ff103819a0f4aaf0b6dfc4ca54228b440b775eeca36ee5f81d->leave($__internal_c203c3afffaf17ff103819a0f4aaf0b6dfc4ca54228b440b775eeca36ee5f81d_prof);

        
        $__internal_bfe88edf703903742517b9b64fc33fb9f8e55b4c9b78a74e541676e4a2cd9e00->leave($__internal_bfe88edf703903742517b9b64fc33fb9f8e55b4c9b78a74e541676e4a2cd9e00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a63a5e4545c9c1c1c3a5db345db61aecc80d13ba0f70ceb4921a9fb3d27937e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a63a5e4545c9c1c1c3a5db345db61aecc80d13ba0f70ceb4921a9fb3d27937e->enter($__internal_4a63a5e4545c9c1c1c3a5db345db61aecc80d13ba0f70ceb4921a9fb3d27937e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24b92c2a3fd99dc07d0ec370ed5b6263284eb04302e099f6021f0a6803f29a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b92c2a3fd99dc07d0ec370ed5b6263284eb04302e099f6021f0a6803f29a4e->enter($__internal_24b92c2a3fd99dc07d0ec370ed5b6263284eb04302e099f6021f0a6803f29a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24b92c2a3fd99dc07d0ec370ed5b6263284eb04302e099f6021f0a6803f29a4e->leave($__internal_24b92c2a3fd99dc07d0ec370ed5b6263284eb04302e099f6021f0a6803f29a4e_prof);

        
        $__internal_4a63a5e4545c9c1c1c3a5db345db61aecc80d13ba0f70ceb4921a9fb3d27937e->leave($__internal_4a63a5e4545c9c1c1c3a5db345db61aecc80d13ba0f70ceb4921a9fb3d27937e_prof);

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
