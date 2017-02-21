<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_51b39ec8633f58176cd22054112bb90435f00fe703b7b6ce656959029d740d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b39ec8633f58176cd22054112bb90435f00fe703b7b6ce656959029d740d3e->enter($__internal_51b39ec8633f58176cd22054112bb90435f00fe703b7b6ce656959029d740d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_14fda8e79cce885e0fa5336d746988404437224a1a381464033d19e6cf04904d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fda8e79cce885e0fa5336d746988404437224a1a381464033d19e6cf04904d->enter($__internal_14fda8e79cce885e0fa5336d746988404437224a1a381464033d19e6cf04904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b39ec8633f58176cd22054112bb90435f00fe703b7b6ce656959029d740d3e->leave($__internal_51b39ec8633f58176cd22054112bb90435f00fe703b7b6ce656959029d740d3e_prof);

        
        $__internal_14fda8e79cce885e0fa5336d746988404437224a1a381464033d19e6cf04904d->leave($__internal_14fda8e79cce885e0fa5336d746988404437224a1a381464033d19e6cf04904d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad516e34a08e4fa6ecd896bfede3da4f24556d442413ed5fa93c2dce31cffe07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad516e34a08e4fa6ecd896bfede3da4f24556d442413ed5fa93c2dce31cffe07->enter($__internal_ad516e34a08e4fa6ecd896bfede3da4f24556d442413ed5fa93c2dce31cffe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79870ba4452a80902de22cd20f2eabc07436cfc4dc0cfc4db5dae209e548968b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79870ba4452a80902de22cd20f2eabc07436cfc4dc0cfc4db5dae209e548968b->enter($__internal_79870ba4452a80902de22cd20f2eabc07436cfc4dc0cfc4db5dae209e548968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_79870ba4452a80902de22cd20f2eabc07436cfc4dc0cfc4db5dae209e548968b->leave($__internal_79870ba4452a80902de22cd20f2eabc07436cfc4dc0cfc4db5dae209e548968b_prof);

        
        $__internal_ad516e34a08e4fa6ecd896bfede3da4f24556d442413ed5fa93c2dce31cffe07->leave($__internal_ad516e34a08e4fa6ecd896bfede3da4f24556d442413ed5fa93c2dce31cffe07_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b82a205e729fa688238ba1f02b08bec98f4e5ad7c857c98fbcee223133c954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b82a205e729fa688238ba1f02b08bec98f4e5ad7c857c98fbcee223133c954->enter($__internal_c3b82a205e729fa688238ba1f02b08bec98f4e5ad7c857c98fbcee223133c954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3269d30200f35fe0dfb09a75aa0b81a46fc82f284b5b775f53eeaf77eac07074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3269d30200f35fe0dfb09a75aa0b81a46fc82f284b5b775f53eeaf77eac07074->enter($__internal_3269d30200f35fe0dfb09a75aa0b81a46fc82f284b5b775f53eeaf77eac07074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3269d30200f35fe0dfb09a75aa0b81a46fc82f284b5b775f53eeaf77eac07074->leave($__internal_3269d30200f35fe0dfb09a75aa0b81a46fc82f284b5b775f53eeaf77eac07074_prof);

        
        $__internal_c3b82a205e729fa688238ba1f02b08bec98f4e5ad7c857c98fbcee223133c954->leave($__internal_c3b82a205e729fa688238ba1f02b08bec98f4e5ad7c857c98fbcee223133c954_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6df894a98797d17e4f37b9d7033974d2e37c77cd1370086144566874bb6c1d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df894a98797d17e4f37b9d7033974d2e37c77cd1370086144566874bb6c1d8f->enter($__internal_6df894a98797d17e4f37b9d7033974d2e37c77cd1370086144566874bb6c1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b25011480c6f38173784f88fd71f29eff71e77befde3751ecf3d4fa6bd1cddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b25011480c6f38173784f88fd71f29eff71e77befde3751ecf3d4fa6bd1cddd->enter($__internal_4b25011480c6f38173784f88fd71f29eff71e77befde3751ecf3d4fa6bd1cddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4b25011480c6f38173784f88fd71f29eff71e77befde3751ecf3d4fa6bd1cddd->leave($__internal_4b25011480c6f38173784f88fd71f29eff71e77befde3751ecf3d4fa6bd1cddd_prof);

        
        $__internal_6df894a98797d17e4f37b9d7033974d2e37c77cd1370086144566874bb6c1d8f->leave($__internal_6df894a98797d17e4f37b9d7033974d2e37c77cd1370086144566874bb6c1d8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
