<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4a8a54d4d699e3a7a6915f58f155162ca165e36bf8865c03a60bac7a212cc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a8a54d4d699e3a7a6915f58f155162ca165e36bf8865c03a60bac7a212cc76->enter($__internal_a4a8a54d4d699e3a7a6915f58f155162ca165e36bf8865c03a60bac7a212cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ec21d4596f4a00d3a69d1343938f1770011ac2ceefa94743d5d772e701d8b55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec21d4596f4a00d3a69d1343938f1770011ac2ceefa94743d5d772e701d8b55b->enter($__internal_ec21d4596f4a00d3a69d1343938f1770011ac2ceefa94743d5d772e701d8b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a8a54d4d699e3a7a6915f58f155162ca165e36bf8865c03a60bac7a212cc76->leave($__internal_a4a8a54d4d699e3a7a6915f58f155162ca165e36bf8865c03a60bac7a212cc76_prof);

        
        $__internal_ec21d4596f4a00d3a69d1343938f1770011ac2ceefa94743d5d772e701d8b55b->leave($__internal_ec21d4596f4a00d3a69d1343938f1770011ac2ceefa94743d5d772e701d8b55b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a1516eb646057ac6107da5ffb2b1ddfda7a766cdbca5b57485c0bc4f0b113f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1516eb646057ac6107da5ffb2b1ddfda7a766cdbca5b57485c0bc4f0b113f8->enter($__internal_7a1516eb646057ac6107da5ffb2b1ddfda7a766cdbca5b57485c0bc4f0b113f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_082424a908437d7cb08aa77cb710cefae7f211ab7af5ac2a08963907f67f52dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082424a908437d7cb08aa77cb710cefae7f211ab7af5ac2a08963907f67f52dc->enter($__internal_082424a908437d7cb08aa77cb710cefae7f211ab7af5ac2a08963907f67f52dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_082424a908437d7cb08aa77cb710cefae7f211ab7af5ac2a08963907f67f52dc->leave($__internal_082424a908437d7cb08aa77cb710cefae7f211ab7af5ac2a08963907f67f52dc_prof);

        
        $__internal_7a1516eb646057ac6107da5ffb2b1ddfda7a766cdbca5b57485c0bc4f0b113f8->leave($__internal_7a1516eb646057ac6107da5ffb2b1ddfda7a766cdbca5b57485c0bc4f0b113f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8421bb8aeaa173f402fff6d8b6f8e53b9837b138ded27f8b46e98f5fdc8312c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8421bb8aeaa173f402fff6d8b6f8e53b9837b138ded27f8b46e98f5fdc8312c5->enter($__internal_8421bb8aeaa173f402fff6d8b6f8e53b9837b138ded27f8b46e98f5fdc8312c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0b2f48f8049a50fb3e720920d861ef2bcf19ce07283f1c7c9fe796bbcb1c2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b2f48f8049a50fb3e720920d861ef2bcf19ce07283f1c7c9fe796bbcb1c2c2->enter($__internal_f0b2f48f8049a50fb3e720920d861ef2bcf19ce07283f1c7c9fe796bbcb1c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f0b2f48f8049a50fb3e720920d861ef2bcf19ce07283f1c7c9fe796bbcb1c2c2->leave($__internal_f0b2f48f8049a50fb3e720920d861ef2bcf19ce07283f1c7c9fe796bbcb1c2c2_prof);

        
        $__internal_8421bb8aeaa173f402fff6d8b6f8e53b9837b138ded27f8b46e98f5fdc8312c5->leave($__internal_8421bb8aeaa173f402fff6d8b6f8e53b9837b138ded27f8b46e98f5fdc8312c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
