<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90a5d660a8753deb372ce78660e8e5db5eaf16c36c78d77c209f867b78d667d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a5d660a8753deb372ce78660e8e5db5eaf16c36c78d77c209f867b78d667d4->enter($__internal_90a5d660a8753deb372ce78660e8e5db5eaf16c36c78d77c209f867b78d667d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e8587c326d14c541606712244afee4a6f7d43276b6876f64be098aa72e18b541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8587c326d14c541606712244afee4a6f7d43276b6876f64be098aa72e18b541->enter($__internal_e8587c326d14c541606712244afee4a6f7d43276b6876f64be098aa72e18b541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a5d660a8753deb372ce78660e8e5db5eaf16c36c78d77c209f867b78d667d4->leave($__internal_90a5d660a8753deb372ce78660e8e5db5eaf16c36c78d77c209f867b78d667d4_prof);

        
        $__internal_e8587c326d14c541606712244afee4a6f7d43276b6876f64be098aa72e18b541->leave($__internal_e8587c326d14c541606712244afee4a6f7d43276b6876f64be098aa72e18b541_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f4db033eb905fe897b2dc848af4f6f192f8139d7c51c25c7de07cb9c4ec096b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4db033eb905fe897b2dc848af4f6f192f8139d7c51c25c7de07cb9c4ec096b->enter($__internal_6f4db033eb905fe897b2dc848af4f6f192f8139d7c51c25c7de07cb9c4ec096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4903ee7c5019f8bd26f5fb9dbc8366cb64a7ebd990872e87bacf8bba30ff3770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4903ee7c5019f8bd26f5fb9dbc8366cb64a7ebd990872e87bacf8bba30ff3770->enter($__internal_4903ee7c5019f8bd26f5fb9dbc8366cb64a7ebd990872e87bacf8bba30ff3770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4903ee7c5019f8bd26f5fb9dbc8366cb64a7ebd990872e87bacf8bba30ff3770->leave($__internal_4903ee7c5019f8bd26f5fb9dbc8366cb64a7ebd990872e87bacf8bba30ff3770_prof);

        
        $__internal_6f4db033eb905fe897b2dc848af4f6f192f8139d7c51c25c7de07cb9c4ec096b->leave($__internal_6f4db033eb905fe897b2dc848af4f6f192f8139d7c51c25c7de07cb9c4ec096b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d28b4f077b79a8e41964b57df432d5b595c7463f4aae2336d230dbc9f1e4d6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28b4f077b79a8e41964b57df432d5b595c7463f4aae2336d230dbc9f1e4d6ab->enter($__internal_d28b4f077b79a8e41964b57df432d5b595c7463f4aae2336d230dbc9f1e4d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30755c1eecb4609ae665526aafedfe1e5f1c327cf4c73a83e35ebb5ce8a451c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30755c1eecb4609ae665526aafedfe1e5f1c327cf4c73a83e35ebb5ce8a451c2->enter($__internal_30755c1eecb4609ae665526aafedfe1e5f1c327cf4c73a83e35ebb5ce8a451c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_30755c1eecb4609ae665526aafedfe1e5f1c327cf4c73a83e35ebb5ce8a451c2->leave($__internal_30755c1eecb4609ae665526aafedfe1e5f1c327cf4c73a83e35ebb5ce8a451c2_prof);

        
        $__internal_d28b4f077b79a8e41964b57df432d5b595c7463f4aae2336d230dbc9f1e4d6ab->leave($__internal_d28b4f077b79a8e41964b57df432d5b595c7463f4aae2336d230dbc9f1e4d6ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
