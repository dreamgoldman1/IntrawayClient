<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_04710f0115b1fafe7be447d92477dd21fbc271a103dfb24ba58e8c2fb1f11799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04710f0115b1fafe7be447d92477dd21fbc271a103dfb24ba58e8c2fb1f11799->enter($__internal_04710f0115b1fafe7be447d92477dd21fbc271a103dfb24ba58e8c2fb1f11799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0f70d5663d6caf2efeefe1c64101978f575ea0c11ea3c0eab5a7f91325cb083c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f70d5663d6caf2efeefe1c64101978f575ea0c11ea3c0eab5a7f91325cb083c->enter($__internal_0f70d5663d6caf2efeefe1c64101978f575ea0c11ea3c0eab5a7f91325cb083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04710f0115b1fafe7be447d92477dd21fbc271a103dfb24ba58e8c2fb1f11799->leave($__internal_04710f0115b1fafe7be447d92477dd21fbc271a103dfb24ba58e8c2fb1f11799_prof);

        
        $__internal_0f70d5663d6caf2efeefe1c64101978f575ea0c11ea3c0eab5a7f91325cb083c->leave($__internal_0f70d5663d6caf2efeefe1c64101978f575ea0c11ea3c0eab5a7f91325cb083c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bfaa5f6c443b8e3a8e1ca03e483136a16aa0e22f349bc04830788a148408a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfaa5f6c443b8e3a8e1ca03e483136a16aa0e22f349bc04830788a148408a00->enter($__internal_3bfaa5f6c443b8e3a8e1ca03e483136a16aa0e22f349bc04830788a148408a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_39a8b46a54dd82d5f5e95eb8ab6899f32b87cf6c6f06056325e53ad1f4fc32c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a8b46a54dd82d5f5e95eb8ab6899f32b87cf6c6f06056325e53ad1f4fc32c2->enter($__internal_39a8b46a54dd82d5f5e95eb8ab6899f32b87cf6c6f06056325e53ad1f4fc32c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_39a8b46a54dd82d5f5e95eb8ab6899f32b87cf6c6f06056325e53ad1f4fc32c2->leave($__internal_39a8b46a54dd82d5f5e95eb8ab6899f32b87cf6c6f06056325e53ad1f4fc32c2_prof);

        
        $__internal_3bfaa5f6c443b8e3a8e1ca03e483136a16aa0e22f349bc04830788a148408a00->leave($__internal_3bfaa5f6c443b8e3a8e1ca03e483136a16aa0e22f349bc04830788a148408a00_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfc919b79ed4a747bf419c104506753da082e3dfec2ba34a322d2dc00b65a6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc919b79ed4a747bf419c104506753da082e3dfec2ba34a322d2dc00b65a6ce->enter($__internal_dfc919b79ed4a747bf419c104506753da082e3dfec2ba34a322d2dc00b65a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79d4105e620e33a20262996ee5490bb17cad09915ab9da9dbe7881a9d02782ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d4105e620e33a20262996ee5490bb17cad09915ab9da9dbe7881a9d02782ba->enter($__internal_79d4105e620e33a20262996ee5490bb17cad09915ab9da9dbe7881a9d02782ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_79d4105e620e33a20262996ee5490bb17cad09915ab9da9dbe7881a9d02782ba->leave($__internal_79d4105e620e33a20262996ee5490bb17cad09915ab9da9dbe7881a9d02782ba_prof);

        
        $__internal_dfc919b79ed4a747bf419c104506753da082e3dfec2ba34a322d2dc00b65a6ce->leave($__internal_dfc919b79ed4a747bf419c104506753da082e3dfec2ba34a322d2dc00b65a6ce_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_37ec2cd343f9956a247291e918a018379b089811fdaeddff9b50ec6b602a5e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ec2cd343f9956a247291e918a018379b089811fdaeddff9b50ec6b602a5e89->enter($__internal_37ec2cd343f9956a247291e918a018379b089811fdaeddff9b50ec6b602a5e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cba8f578827b0dbefa8aeedbedb23a17339f14f53f82874debb65fe1805c59cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba8f578827b0dbefa8aeedbedb23a17339f14f53f82874debb65fe1805c59cf->enter($__internal_cba8f578827b0dbefa8aeedbedb23a17339f14f53f82874debb65fe1805c59cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cba8f578827b0dbefa8aeedbedb23a17339f14f53f82874debb65fe1805c59cf->leave($__internal_cba8f578827b0dbefa8aeedbedb23a17339f14f53f82874debb65fe1805c59cf_prof);

        
        $__internal_37ec2cd343f9956a247291e918a018379b089811fdaeddff9b50ec6b602a5e89->leave($__internal_37ec2cd343f9956a247291e918a018379b089811fdaeddff9b50ec6b602a5e89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
