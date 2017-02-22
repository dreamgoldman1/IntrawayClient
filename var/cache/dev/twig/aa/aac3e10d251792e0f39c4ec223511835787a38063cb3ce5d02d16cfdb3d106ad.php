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
        $__internal_66036faa92c8cc83b0f5105dcb9a49f4908dec8e7506d07097e65d16dc445f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66036faa92c8cc83b0f5105dcb9a49f4908dec8e7506d07097e65d16dc445f4c->enter($__internal_66036faa92c8cc83b0f5105dcb9a49f4908dec8e7506d07097e65d16dc445f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6fc6de398c2105b881812cc7b849addd71bc3b073d40254b22d42d1708514eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc6de398c2105b881812cc7b849addd71bc3b073d40254b22d42d1708514eab->enter($__internal_6fc6de398c2105b881812cc7b849addd71bc3b073d40254b22d42d1708514eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66036faa92c8cc83b0f5105dcb9a49f4908dec8e7506d07097e65d16dc445f4c->leave($__internal_66036faa92c8cc83b0f5105dcb9a49f4908dec8e7506d07097e65d16dc445f4c_prof);

        
        $__internal_6fc6de398c2105b881812cc7b849addd71bc3b073d40254b22d42d1708514eab->leave($__internal_6fc6de398c2105b881812cc7b849addd71bc3b073d40254b22d42d1708514eab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d23f7f21f2b2ca8ca99f29b72e0ed7f0df5138fc74ff0c275beaf2f6a37e9777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23f7f21f2b2ca8ca99f29b72e0ed7f0df5138fc74ff0c275beaf2f6a37e9777->enter($__internal_d23f7f21f2b2ca8ca99f29b72e0ed7f0df5138fc74ff0c275beaf2f6a37e9777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a73e99b86c67f08d81bf9a9cede33c3fd3da3069e886cb9c801317ec0639ad10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73e99b86c67f08d81bf9a9cede33c3fd3da3069e886cb9c801317ec0639ad10->enter($__internal_a73e99b86c67f08d81bf9a9cede33c3fd3da3069e886cb9c801317ec0639ad10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a73e99b86c67f08d81bf9a9cede33c3fd3da3069e886cb9c801317ec0639ad10->leave($__internal_a73e99b86c67f08d81bf9a9cede33c3fd3da3069e886cb9c801317ec0639ad10_prof);

        
        $__internal_d23f7f21f2b2ca8ca99f29b72e0ed7f0df5138fc74ff0c275beaf2f6a37e9777->leave($__internal_d23f7f21f2b2ca8ca99f29b72e0ed7f0df5138fc74ff0c275beaf2f6a37e9777_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df4a285a5b00dceb0145d18a577d760a18eb8f71745ea473a5f19d8c01d37c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4a285a5b00dceb0145d18a577d760a18eb8f71745ea473a5f19d8c01d37c60->enter($__internal_df4a285a5b00dceb0145d18a577d760a18eb8f71745ea473a5f19d8c01d37c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad2ec23039ec20c823e0f417c2382a54e2921879193ada877e7c3f1b9cd84099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2ec23039ec20c823e0f417c2382a54e2921879193ada877e7c3f1b9cd84099->enter($__internal_ad2ec23039ec20c823e0f417c2382a54e2921879193ada877e7c3f1b9cd84099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ad2ec23039ec20c823e0f417c2382a54e2921879193ada877e7c3f1b9cd84099->leave($__internal_ad2ec23039ec20c823e0f417c2382a54e2921879193ada877e7c3f1b9cd84099_prof);

        
        $__internal_df4a285a5b00dceb0145d18a577d760a18eb8f71745ea473a5f19d8c01d37c60->leave($__internal_df4a285a5b00dceb0145d18a577d760a18eb8f71745ea473a5f19d8c01d37c60_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f201d03a9e7f2b0b4b2b040e39df306a5b9a61b1df9807cd410e2351b91e522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f201d03a9e7f2b0b4b2b040e39df306a5b9a61b1df9807cd410e2351b91e522d->enter($__internal_f201d03a9e7f2b0b4b2b040e39df306a5b9a61b1df9807cd410e2351b91e522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5f6b0f06cd95fe49c5899395be7a6d2e0b43cfd00edb79aa28390b741fd57d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f6b0f06cd95fe49c5899395be7a6d2e0b43cfd00edb79aa28390b741fd57d1->enter($__internal_b5f6b0f06cd95fe49c5899395be7a6d2e0b43cfd00edb79aa28390b741fd57d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b5f6b0f06cd95fe49c5899395be7a6d2e0b43cfd00edb79aa28390b741fd57d1->leave($__internal_b5f6b0f06cd95fe49c5899395be7a6d2e0b43cfd00edb79aa28390b741fd57d1_prof);

        
        $__internal_f201d03a9e7f2b0b4b2b040e39df306a5b9a61b1df9807cd410e2351b91e522d->leave($__internal_f201d03a9e7f2b0b4b2b040e39df306a5b9a61b1df9807cd410e2351b91e522d_prof);

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
