<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_62bf95cf26c72f011fba9ff48f98dc0df2873388aca76cf82880893254bf3527 extends Twig_Template
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
        $__internal_bd6a35d5323022370ba0909800ee61754adb53c6bf28e3dec8e5ff91831a28bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6a35d5323022370ba0909800ee61754adb53c6bf28e3dec8e5ff91831a28bf->enter($__internal_bd6a35d5323022370ba0909800ee61754adb53c6bf28e3dec8e5ff91831a28bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e3e61968bba625d582e7b4ef3b538a8311dd950511ca7b51e8dc23bd39602454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e61968bba625d582e7b4ef3b538a8311dd950511ca7b51e8dc23bd39602454->enter($__internal_e3e61968bba625d582e7b4ef3b538a8311dd950511ca7b51e8dc23bd39602454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bd6a35d5323022370ba0909800ee61754adb53c6bf28e3dec8e5ff91831a28bf->leave($__internal_bd6a35d5323022370ba0909800ee61754adb53c6bf28e3dec8e5ff91831a28bf_prof);

        
        $__internal_e3e61968bba625d582e7b4ef3b538a8311dd950511ca7b51e8dc23bd39602454->leave($__internal_e3e61968bba625d582e7b4ef3b538a8311dd950511ca7b51e8dc23bd39602454_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
