<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5678ba8d3707948ff0ddc50b46568aec91f5b5f6f886f8f72b5d6df4ab9e271b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5678ba8d3707948ff0ddc50b46568aec91f5b5f6f886f8f72b5d6df4ab9e271b->enter($__internal_5678ba8d3707948ff0ddc50b46568aec91f5b5f6f886f8f72b5d6df4ab9e271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4700e419ba3defe1c46e4caf259174afd77fdea1820ddfd19691611bf43f1183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4700e419ba3defe1c46e4caf259174afd77fdea1820ddfd19691611bf43f1183->enter($__internal_4700e419ba3defe1c46e4caf259174afd77fdea1820ddfd19691611bf43f1183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5678ba8d3707948ff0ddc50b46568aec91f5b5f6f886f8f72b5d6df4ab9e271b->leave($__internal_5678ba8d3707948ff0ddc50b46568aec91f5b5f6f886f8f72b5d6df4ab9e271b_prof);

        
        $__internal_4700e419ba3defe1c46e4caf259174afd77fdea1820ddfd19691611bf43f1183->leave($__internal_4700e419ba3defe1c46e4caf259174afd77fdea1820ddfd19691611bf43f1183_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_115b81b291157283852fb2bc2891697d3e6a8b6cf12dac66ce4c52f71a015569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115b81b291157283852fb2bc2891697d3e6a8b6cf12dac66ce4c52f71a015569->enter($__internal_115b81b291157283852fb2bc2891697d3e6a8b6cf12dac66ce4c52f71a015569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72afa6452d52a1492c7e6740400b5957d81023088134616bc3a9601a909bc5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72afa6452d52a1492c7e6740400b5957d81023088134616bc3a9601a909bc5f8->enter($__internal_72afa6452d52a1492c7e6740400b5957d81023088134616bc3a9601a909bc5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72afa6452d52a1492c7e6740400b5957d81023088134616bc3a9601a909bc5f8->leave($__internal_72afa6452d52a1492c7e6740400b5957d81023088134616bc3a9601a909bc5f8_prof);

        
        $__internal_115b81b291157283852fb2bc2891697d3e6a8b6cf12dac66ce4c52f71a015569->leave($__internal_115b81b291157283852fb2bc2891697d3e6a8b6cf12dac66ce4c52f71a015569_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_674fd04ef7e9be7b54c8d8308c022e7079f3634b6e97edebaf71f07999d2902c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674fd04ef7e9be7b54c8d8308c022e7079f3634b6e97edebaf71f07999d2902c->enter($__internal_674fd04ef7e9be7b54c8d8308c022e7079f3634b6e97edebaf71f07999d2902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc9a3aa788c40cd324d76cca146e84bc7417f5ac1d8d3c5d123e7c9aed3981d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9a3aa788c40cd324d76cca146e84bc7417f5ac1d8d3c5d123e7c9aed3981d3->enter($__internal_fc9a3aa788c40cd324d76cca146e84bc7417f5ac1d8d3c5d123e7c9aed3981d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fc9a3aa788c40cd324d76cca146e84bc7417f5ac1d8d3c5d123e7c9aed3981d3->leave($__internal_fc9a3aa788c40cd324d76cca146e84bc7417f5ac1d8d3c5d123e7c9aed3981d3_prof);

        
        $__internal_674fd04ef7e9be7b54c8d8308c022e7079f3634b6e97edebaf71f07999d2902c->leave($__internal_674fd04ef7e9be7b54c8d8308c022e7079f3634b6e97edebaf71f07999d2902c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a51001abd1480e706e64f8deddcfa2c6a13d324fb55371c3a5bc8a1632eec34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a51001abd1480e706e64f8deddcfa2c6a13d324fb55371c3a5bc8a1632eec34->enter($__internal_4a51001abd1480e706e64f8deddcfa2c6a13d324fb55371c3a5bc8a1632eec34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fc80f8d0189701bd72177a25152e541ece43ffb52ea50ef122fb90c532be820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc80f8d0189701bd72177a25152e541ece43ffb52ea50ef122fb90c532be820->enter($__internal_0fc80f8d0189701bd72177a25152e541ece43ffb52ea50ef122fb90c532be820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0fc80f8d0189701bd72177a25152e541ece43ffb52ea50ef122fb90c532be820->leave($__internal_0fc80f8d0189701bd72177a25152e541ece43ffb52ea50ef122fb90c532be820_prof);

        
        $__internal_4a51001abd1480e706e64f8deddcfa2c6a13d324fb55371c3a5bc8a1632eec34->leave($__internal_4a51001abd1480e706e64f8deddcfa2c6a13d324fb55371c3a5bc8a1632eec34_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b88423fc67662117df67139bd6d6fa4c763b39e20b457dcdf90ee6fa98b6483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b88423fc67662117df67139bd6d6fa4c763b39e20b457dcdf90ee6fa98b6483->enter($__internal_8b88423fc67662117df67139bd6d6fa4c763b39e20b457dcdf90ee6fa98b6483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3934e54c97b39d8a567ddf1dfec315bf622c8697fd5af4348bc96d1fc01a81bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3934e54c97b39d8a567ddf1dfec315bf622c8697fd5af4348bc96d1fc01a81bb->enter($__internal_3934e54c97b39d8a567ddf1dfec315bf622c8697fd5af4348bc96d1fc01a81bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3934e54c97b39d8a567ddf1dfec315bf622c8697fd5af4348bc96d1fc01a81bb->leave($__internal_3934e54c97b39d8a567ddf1dfec315bf622c8697fd5af4348bc96d1fc01a81bb_prof);

        
        $__internal_8b88423fc67662117df67139bd6d6fa4c763b39e20b457dcdf90ee6fa98b6483->leave($__internal_8b88423fc67662117df67139bd6d6fa4c763b39e20b457dcdf90ee6fa98b6483_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/IntrawayClient/app/Resources/views/base.html.twig");
    }
}
