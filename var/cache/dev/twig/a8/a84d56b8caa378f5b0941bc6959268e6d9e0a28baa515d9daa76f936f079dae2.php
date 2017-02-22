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
        $__internal_16ad49aed3a0ff6e17d117aa14f73016958455d6f9f6fb514f57bb551033f933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ad49aed3a0ff6e17d117aa14f73016958455d6f9f6fb514f57bb551033f933->enter($__internal_16ad49aed3a0ff6e17d117aa14f73016958455d6f9f6fb514f57bb551033f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f032d31240d3231d46d7d79f572c5776be883eec98465d4c7eeaf9952ad13e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f032d31240d3231d46d7d79f572c5776be883eec98465d4c7eeaf9952ad13e2d->enter($__internal_f032d31240d3231d46d7d79f572c5776be883eec98465d4c7eeaf9952ad13e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_16ad49aed3a0ff6e17d117aa14f73016958455d6f9f6fb514f57bb551033f933->leave($__internal_16ad49aed3a0ff6e17d117aa14f73016958455d6f9f6fb514f57bb551033f933_prof);

        
        $__internal_f032d31240d3231d46d7d79f572c5776be883eec98465d4c7eeaf9952ad13e2d->leave($__internal_f032d31240d3231d46d7d79f572c5776be883eec98465d4c7eeaf9952ad13e2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99dd8637c605bf3c92151847e3b07be5bedb80eb2d66774c21eee492067a6f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dd8637c605bf3c92151847e3b07be5bedb80eb2d66774c21eee492067a6f43->enter($__internal_99dd8637c605bf3c92151847e3b07be5bedb80eb2d66774c21eee492067a6f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_298d64cf59affe51da6913dd3c6d7f61e7ac00942faa94d7e40f2bee4180994f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298d64cf59affe51da6913dd3c6d7f61e7ac00942faa94d7e40f2bee4180994f->enter($__internal_298d64cf59affe51da6913dd3c6d7f61e7ac00942faa94d7e40f2bee4180994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_298d64cf59affe51da6913dd3c6d7f61e7ac00942faa94d7e40f2bee4180994f->leave($__internal_298d64cf59affe51da6913dd3c6d7f61e7ac00942faa94d7e40f2bee4180994f_prof);

        
        $__internal_99dd8637c605bf3c92151847e3b07be5bedb80eb2d66774c21eee492067a6f43->leave($__internal_99dd8637c605bf3c92151847e3b07be5bedb80eb2d66774c21eee492067a6f43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_874c29888f8de1a50935491184bcdb972f4c8dee781fa0878f57e167c07917a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874c29888f8de1a50935491184bcdb972f4c8dee781fa0878f57e167c07917a8->enter($__internal_874c29888f8de1a50935491184bcdb972f4c8dee781fa0878f57e167c07917a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7cb9c390d34138a1ecf1eeee892907de8d11ea83995b637f09ab4561440ccd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb9c390d34138a1ecf1eeee892907de8d11ea83995b637f09ab4561440ccd03->enter($__internal_7cb9c390d34138a1ecf1eeee892907de8d11ea83995b637f09ab4561440ccd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7cb9c390d34138a1ecf1eeee892907de8d11ea83995b637f09ab4561440ccd03->leave($__internal_7cb9c390d34138a1ecf1eeee892907de8d11ea83995b637f09ab4561440ccd03_prof);

        
        $__internal_874c29888f8de1a50935491184bcdb972f4c8dee781fa0878f57e167c07917a8->leave($__internal_874c29888f8de1a50935491184bcdb972f4c8dee781fa0878f57e167c07917a8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e06c9e2707abbeab9883a0ecc85a0ca3fca879eab75f8b0463a10f8de91c5afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06c9e2707abbeab9883a0ecc85a0ca3fca879eab75f8b0463a10f8de91c5afb->enter($__internal_e06c9e2707abbeab9883a0ecc85a0ca3fca879eab75f8b0463a10f8de91c5afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df8fa7333c769721bc425826c0994c06846657d1be42d91c47b4872dc9005732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8fa7333c769721bc425826c0994c06846657d1be42d91c47b4872dc9005732->enter($__internal_df8fa7333c769721bc425826c0994c06846657d1be42d91c47b4872dc9005732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df8fa7333c769721bc425826c0994c06846657d1be42d91c47b4872dc9005732->leave($__internal_df8fa7333c769721bc425826c0994c06846657d1be42d91c47b4872dc9005732_prof);

        
        $__internal_e06c9e2707abbeab9883a0ecc85a0ca3fca879eab75f8b0463a10f8de91c5afb->leave($__internal_e06c9e2707abbeab9883a0ecc85a0ca3fca879eab75f8b0463a10f8de91c5afb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0fc89f3fafd78ab822ee9bd9bdb3d09533e3fda7940d289533591d6205bd742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fc89f3fafd78ab822ee9bd9bdb3d09533e3fda7940d289533591d6205bd742->enter($__internal_e0fc89f3fafd78ab822ee9bd9bdb3d09533e3fda7940d289533591d6205bd742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4432fa0015cd936405e52c285d127d15d0b59f08267c3aa9aacb7bae9382bef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4432fa0015cd936405e52c285d127d15d0b59f08267c3aa9aacb7bae9382bef2->enter($__internal_4432fa0015cd936405e52c285d127d15d0b59f08267c3aa9aacb7bae9382bef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4432fa0015cd936405e52c285d127d15d0b59f08267c3aa9aacb7bae9382bef2->leave($__internal_4432fa0015cd936405e52c285d127d15d0b59f08267c3aa9aacb7bae9382bef2_prof);

        
        $__internal_e0fc89f3fafd78ab822ee9bd9bdb3d09533e3fda7940d289533591d6205bd742->leave($__internal_e0fc89f3fafd78ab822ee9bd9bdb3d09533e3fda7940d289533591d6205bd742_prof);

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
