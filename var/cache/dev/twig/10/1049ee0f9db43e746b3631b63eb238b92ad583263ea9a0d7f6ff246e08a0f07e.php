<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d7e0f7f9d1ea7acfb1e00b2d3509ba29d39aefe4a84c9cf5f2d1500c3033dcd8 extends Twig_Template
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
        $__internal_53302d52c57b3bf697e1c66fc133ece814a6af97e48a0a25bd60db50eec07c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53302d52c57b3bf697e1c66fc133ece814a6af97e48a0a25bd60db50eec07c84->enter($__internal_53302d52c57b3bf697e1c66fc133ece814a6af97e48a0a25bd60db50eec07c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8799aa4d3f839e1e3b724c961c6fa212648be09ec07aeee8e943c05ad5061773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8799aa4d3f839e1e3b724c961c6fa212648be09ec07aeee8e943c05ad5061773->enter($__internal_8799aa4d3f839e1e3b724c961c6fa212648be09ec07aeee8e943c05ad5061773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_53302d52c57b3bf697e1c66fc133ece814a6af97e48a0a25bd60db50eec07c84->leave($__internal_53302d52c57b3bf697e1c66fc133ece814a6af97e48a0a25bd60db50eec07c84_prof);

        
        $__internal_8799aa4d3f839e1e3b724c961c6fa212648be09ec07aeee8e943c05ad5061773->leave($__internal_8799aa4d3f839e1e3b724c961c6fa212648be09ec07aeee8e943c05ad5061773_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
