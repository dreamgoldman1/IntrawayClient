<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_563548ec3e46ac7c53541fe3d28b90bba1fc007bc3c7adc7c20baf712c351127 extends Twig_Template
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
        $__internal_3d2eb3b45ea9525a5b86fcdd469add778b122d1070f895b76400987ed5185273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2eb3b45ea9525a5b86fcdd469add778b122d1070f895b76400987ed5185273->enter($__internal_3d2eb3b45ea9525a5b86fcdd469add778b122d1070f895b76400987ed5185273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_eff0758e3b3d54178e125b9b33e2b7b9c0452670a0c101f699355f2c101acdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff0758e3b3d54178e125b9b33e2b7b9c0452670a0c101f699355f2c101acdce->enter($__internal_eff0758e3b3d54178e125b9b33e2b7b9c0452670a0c101f699355f2c101acdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3d2eb3b45ea9525a5b86fcdd469add778b122d1070f895b76400987ed5185273->leave($__internal_3d2eb3b45ea9525a5b86fcdd469add778b122d1070f895b76400987ed5185273_prof);

        
        $__internal_eff0758e3b3d54178e125b9b33e2b7b9c0452670a0c101f699355f2c101acdce->leave($__internal_eff0758e3b3d54178e125b9b33e2b7b9c0452670a0c101f699355f2c101acdce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
