<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1d3eef94652388398d071ee1bc7ba190954aee55bdf26614531d3f6538f75a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24ccb7b083891511d59725532b588879fc94d781ba26a7f3b20acf5f10b9d85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ccb7b083891511d59725532b588879fc94d781ba26a7f3b20acf5f10b9d85b->enter($__internal_24ccb7b083891511d59725532b588879fc94d781ba26a7f3b20acf5f10b9d85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_53b2821565ba1428dad0ce89709fc48887c46f52fc39cfdd1e888047c699b5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b2821565ba1428dad0ce89709fc48887c46f52fc39cfdd1e888047c699b5c6->enter($__internal_53b2821565ba1428dad0ce89709fc48887c46f52fc39cfdd1e888047c699b5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_24ccb7b083891511d59725532b588879fc94d781ba26a7f3b20acf5f10b9d85b->leave($__internal_24ccb7b083891511d59725532b588879fc94d781ba26a7f3b20acf5f10b9d85b_prof);

        
        $__internal_53b2821565ba1428dad0ce89709fc48887c46f52fc39cfdd1e888047c699b5c6->leave($__internal_53b2821565ba1428dad0ce89709fc48887c46f52fc39cfdd1e888047c699b5c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
