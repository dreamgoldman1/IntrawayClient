<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b3fe1a6e6fe5913a776b008bbc67dbb2875dada4b4e9ca7717a34e3500cdd099 extends Twig_Template
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
        $__internal_967a868528c78144a3df9f2552720ef787624c069eed823e96dc84ffe937b664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967a868528c78144a3df9f2552720ef787624c069eed823e96dc84ffe937b664->enter($__internal_967a868528c78144a3df9f2552720ef787624c069eed823e96dc84ffe937b664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e9ea00d259d9c164770f09d7818c9d9c03d676d12c05eb500fb1cb3dac4bb2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ea00d259d9c164770f09d7818c9d9c03d676d12c05eb500fb1cb3dac4bb2ea->enter($__internal_e9ea00d259d9c164770f09d7818c9d9c03d676d12c05eb500fb1cb3dac4bb2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_967a868528c78144a3df9f2552720ef787624c069eed823e96dc84ffe937b664->leave($__internal_967a868528c78144a3df9f2552720ef787624c069eed823e96dc84ffe937b664_prof);

        
        $__internal_e9ea00d259d9c164770f09d7818c9d9c03d676d12c05eb500fb1cb3dac4bb2ea->leave($__internal_e9ea00d259d9c164770f09d7818c9d9c03d676d12c05eb500fb1cb3dac4bb2ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
