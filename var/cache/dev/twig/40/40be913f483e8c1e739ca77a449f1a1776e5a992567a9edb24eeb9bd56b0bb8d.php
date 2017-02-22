<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82ba383184c3e7eea6fd4fc91c5f90ac93f4643875a645f8063060334e432ebb extends Twig_Template
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
        $__internal_3ad99fd867d184a2102253c94d831c1bedb322e501e3e731f79c48c1773084df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad99fd867d184a2102253c94d831c1bedb322e501e3e731f79c48c1773084df->enter($__internal_3ad99fd867d184a2102253c94d831c1bedb322e501e3e731f79c48c1773084df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f1b7d1072667c2bc2cf4b8a89a4630fd8c4b05a6b90d62c55cb71a5e4fd98b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b7d1072667c2bc2cf4b8a89a4630fd8c4b05a6b90d62c55cb71a5e4fd98b2d->enter($__internal_f1b7d1072667c2bc2cf4b8a89a4630fd8c4b05a6b90d62c55cb71a5e4fd98b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3ad99fd867d184a2102253c94d831c1bedb322e501e3e731f79c48c1773084df->leave($__internal_3ad99fd867d184a2102253c94d831c1bedb322e501e3e731f79c48c1773084df_prof);

        
        $__internal_f1b7d1072667c2bc2cf4b8a89a4630fd8c4b05a6b90d62c55cb71a5e4fd98b2d->leave($__internal_f1b7d1072667c2bc2cf4b8a89a4630fd8c4b05a6b90d62c55cb71a5e4fd98b2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
