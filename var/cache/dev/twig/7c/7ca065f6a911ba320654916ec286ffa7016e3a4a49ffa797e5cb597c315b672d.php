<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_60e8da93633c91ee986dfb1b219a60c843da13508e3d61c53290e3ed62da5379 extends Twig_Template
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
        $__internal_e067db63477ddf7f5156ebe2f9aec1a0d139a4d1790a389eb50a56a2bd6e0f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e067db63477ddf7f5156ebe2f9aec1a0d139a4d1790a389eb50a56a2bd6e0f86->enter($__internal_e067db63477ddf7f5156ebe2f9aec1a0d139a4d1790a389eb50a56a2bd6e0f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_10148dc81ac76efe951bc017521c5c5e190164547b5df872c74d60c2d8aa5af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10148dc81ac76efe951bc017521c5c5e190164547b5df872c74d60c2d8aa5af7->enter($__internal_10148dc81ac76efe951bc017521c5c5e190164547b5df872c74d60c2d8aa5af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e067db63477ddf7f5156ebe2f9aec1a0d139a4d1790a389eb50a56a2bd6e0f86->leave($__internal_e067db63477ddf7f5156ebe2f9aec1a0d139a4d1790a389eb50a56a2bd6e0f86_prof);

        
        $__internal_10148dc81ac76efe951bc017521c5c5e190164547b5df872c74d60c2d8aa5af7->leave($__internal_10148dc81ac76efe951bc017521c5c5e190164547b5df872c74d60c2d8aa5af7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
