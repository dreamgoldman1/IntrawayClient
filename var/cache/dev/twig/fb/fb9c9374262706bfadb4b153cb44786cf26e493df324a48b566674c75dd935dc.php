<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71eabe95e9cfc0d531445abbd1392b37745f1fc51aa6c854845e65142150dc03 extends Twig_Template
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
        $__internal_29fca292ff59c2e70ad6c1708b0614fc328047a4cd12d76a0eaeb29ba9b15b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fca292ff59c2e70ad6c1708b0614fc328047a4cd12d76a0eaeb29ba9b15b7a->enter($__internal_29fca292ff59c2e70ad6c1708b0614fc328047a4cd12d76a0eaeb29ba9b15b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5d206b26912530e89c044b128012107ed6ec4d812f3da28de5458f593d2bdf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d206b26912530e89c044b128012107ed6ec4d812f3da28de5458f593d2bdf3d->enter($__internal_5d206b26912530e89c044b128012107ed6ec4d812f3da28de5458f593d2bdf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_29fca292ff59c2e70ad6c1708b0614fc328047a4cd12d76a0eaeb29ba9b15b7a->leave($__internal_29fca292ff59c2e70ad6c1708b0614fc328047a4cd12d76a0eaeb29ba9b15b7a_prof);

        
        $__internal_5d206b26912530e89c044b128012107ed6ec4d812f3da28de5458f593d2bdf3d->leave($__internal_5d206b26912530e89c044b128012107ed6ec4d812f3da28de5458f593d2bdf3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
