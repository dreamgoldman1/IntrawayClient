<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c2a257afc4df593fdbd94b33c6ee1d0de41746940c8ad30b81ac40689c8f7970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b2ed359d1e7b281eda48fec5df0e53f47dc3d61745b583eec4f88601c8bbd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2ed359d1e7b281eda48fec5df0e53f47dc3d61745b583eec4f88601c8bbd8b->enter($__internal_0b2ed359d1e7b281eda48fec5df0e53f47dc3d61745b583eec4f88601c8bbd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_59d697bc8d6e7db7d2e24a25cff4ea7049bc212d62415fdd4d9ceace893464f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d697bc8d6e7db7d2e24a25cff4ea7049bc212d62415fdd4d9ceace893464f4->enter($__internal_59d697bc8d6e7db7d2e24a25cff4ea7049bc212d62415fdd4d9ceace893464f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2ed359d1e7b281eda48fec5df0e53f47dc3d61745b583eec4f88601c8bbd8b->leave($__internal_0b2ed359d1e7b281eda48fec5df0e53f47dc3d61745b583eec4f88601c8bbd8b_prof);

        
        $__internal_59d697bc8d6e7db7d2e24a25cff4ea7049bc212d62415fdd4d9ceace893464f4->leave($__internal_59d697bc8d6e7db7d2e24a25cff4ea7049bc212d62415fdd4d9ceace893464f4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bdf220a4eab70297d8bfe90509f21bea9b6776af38ae712b45c90b1f4940ef19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf220a4eab70297d8bfe90509f21bea9b6776af38ae712b45c90b1f4940ef19->enter($__internal_bdf220a4eab70297d8bfe90509f21bea9b6776af38ae712b45c90b1f4940ef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_70216341c6d13231d98897247633a6edfe60924b637cf07e8417ae85a1021993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70216341c6d13231d98897247633a6edfe60924b637cf07e8417ae85a1021993->enter($__internal_70216341c6d13231d98897247633a6edfe60924b637cf07e8417ae85a1021993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_70216341c6d13231d98897247633a6edfe60924b637cf07e8417ae85a1021993->leave($__internal_70216341c6d13231d98897247633a6edfe60924b637cf07e8417ae85a1021993_prof);

        
        $__internal_bdf220a4eab70297d8bfe90509f21bea9b6776af38ae712b45c90b1f4940ef19->leave($__internal_bdf220a4eab70297d8bfe90509f21bea9b6776af38ae712b45c90b1f4940ef19_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_feb286c60e2bd08c4cdebab62a44da3304d0ada2aeed8b5840fb8c242ac15438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb286c60e2bd08c4cdebab62a44da3304d0ada2aeed8b5840fb8c242ac15438->enter($__internal_feb286c60e2bd08c4cdebab62a44da3304d0ada2aeed8b5840fb8c242ac15438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_031f6b05b334cd026449243229f0cf52a99297a4b5e0eddb47ab67c487ec1d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031f6b05b334cd026449243229f0cf52a99297a4b5e0eddb47ab67c487ec1d05->enter($__internal_031f6b05b334cd026449243229f0cf52a99297a4b5e0eddb47ab67c487ec1d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_031f6b05b334cd026449243229f0cf52a99297a4b5e0eddb47ab67c487ec1d05->leave($__internal_031f6b05b334cd026449243229f0cf52a99297a4b5e0eddb47ab67c487ec1d05_prof);

        
        $__internal_feb286c60e2bd08c4cdebab62a44da3304d0ada2aeed8b5840fb8c242ac15438->leave($__internal_feb286c60e2bd08c4cdebab62a44da3304d0ada2aeed8b5840fb8c242ac15438_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
