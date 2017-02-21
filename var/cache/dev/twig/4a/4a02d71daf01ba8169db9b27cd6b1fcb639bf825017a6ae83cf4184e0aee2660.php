<?php

/* GOLContentBundle:Default:index.html.twig */
class __TwigTemplate_9c42d216237c7531ef9034a5d2df15005060a60c3e53100eeef2d20b27fe6563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Intraway.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d619ec56e800c2e4615c898e1eec20f5fa4f1efc6f8207c90754ba4ebabb7f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d619ec56e800c2e4615c898e1eec20f5fa4f1efc6f8207c90754ba4ebabb7f21->enter($__internal_d619ec56e800c2e4615c898e1eec20f5fa4f1efc6f8207c90754ba4ebabb7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Default:index.html.twig"));

        $__internal_7e0eee86ba86b7c961a6c8effb922c346114ef02119876a67c96fd8846e8e7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0eee86ba86b7c961a6c8effb922c346114ef02119876a67c96fd8846e8e7c8->enter($__internal_7e0eee86ba86b7c961a6c8effb922c346114ef02119876a67c96fd8846e8e7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d619ec56e800c2e4615c898e1eec20f5fa4f1efc6f8207c90754ba4ebabb7f21->leave($__internal_d619ec56e800c2e4615c898e1eec20f5fa4f1efc6f8207c90754ba4ebabb7f21_prof);

        
        $__internal_7e0eee86ba86b7c961a6c8effb922c346114ef02119876a67c96fd8846e8e7c8->leave($__internal_7e0eee86ba86b7c961a6c8effb922c346114ef02119876a67c96fd8846e8e7c8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc6f873c149fb73c308cd891934b379c5f7b88deb2a776833451c4855b8da202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6f873c149fb73c308cd891934b379c5f7b88deb2a776833451c4855b8da202->enter($__internal_fc6f873c149fb73c308cd891934b379c5f7b88deb2a776833451c4855b8da202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1bff64a03ef2c66f648663424d01327cc185d62979d8c7f6dc14d66ee2241943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bff64a03ef2c66f648663424d01327cc185d62979d8c7f6dc14d66ee2241943->enter($__internal_1bff64a03ef2c66f648663424d01327cc185d62979d8c7f6dc14d66ee2241943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- ===========================
    BODY LEFT PART
    ============================ -->
    <div class=\"col-md-12 mainleft\">

        <h3 class=\"mobmid\">Users </h3>

        <div class=\"testimonials\">
            ";
        // line 13
        echo "                <div class=\"row col-sm-4\">
                    <blockquote>
                        <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.</p>
                    </blockquote>
                    <img src=\"\" alt=\"\">
                    <h4>Gilberto Orozco</h4>
                    <p>Ingeniero de Sistemas</p>
                </div><!--1st testimonial end-->
            ";
        // line 22
        echo "        </div>

        <hr>

    </div>
";
        
        $__internal_1bff64a03ef2c66f648663424d01327cc185d62979d8c7f6dc14d66ee2241943->leave($__internal_1bff64a03ef2c66f648663424d01327cc185d62979d8c7f6dc14d66ee2241943_prof);

        
        $__internal_fc6f873c149fb73c308cd891934b379c5f7b88deb2a776833451c4855b8da202->leave($__internal_fc6f873c149fb73c308cd891934b379c5f7b88deb2a776833451c4855b8da202_prof);

    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  59 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Intraway.html.twig\" %}

{% block content %}
    <!-- ===========================
    BODY LEFT PART
    ============================ -->
    <div class=\"col-md-12 mainleft\">

        <h3 class=\"mobmid\">Users </h3>

        <div class=\"testimonials\">
            {# for profile in dataProfile #}
                <div class=\"row col-sm-4\">
                    <blockquote>
                        <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.</p>
                    </blockquote>
                    <img src=\"\" alt=\"\">
                    <h4>Gilberto Orozco</h4>
                    <p>Ingeniero de Sistemas</p>
                </div><!--1st testimonial end-->
            {# endfor #}
        </div>

        <hr>

    </div>
{% endblock %}", "GOLContentBundle:Default:index.html.twig", "/var/www/IntrawayClient/src/GOL/ContentBundle/Resources/views/Default/index.html.twig");
    }
}
