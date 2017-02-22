<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61527599f1b475fa210386663620b0946261ed9584f826e23e33dd4604fb2a6e extends Twig_Template
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
        $__internal_63d512cc6d14a9e98c7339a4df705f1d79cb2d49e2a3d30e789d271908031415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d512cc6d14a9e98c7339a4df705f1d79cb2d49e2a3d30e789d271908031415->enter($__internal_63d512cc6d14a9e98c7339a4df705f1d79cb2d49e2a3d30e789d271908031415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4e0a597725a4f4038fa33aa265d3eeee4b7c85b1b800ebc7ffb981f9d8add857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0a597725a4f4038fa33aa265d3eeee4b7c85b1b800ebc7ffb981f9d8add857->enter($__internal_4e0a597725a4f4038fa33aa265d3eeee4b7c85b1b800ebc7ffb981f9d8add857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_63d512cc6d14a9e98c7339a4df705f1d79cb2d49e2a3d30e789d271908031415->leave($__internal_63d512cc6d14a9e98c7339a4df705f1d79cb2d49e2a3d30e789d271908031415_prof);

        
        $__internal_4e0a597725a4f4038fa33aa265d3eeee4b7c85b1b800ebc7ffb981f9d8add857->leave($__internal_4e0a597725a4f4038fa33aa265d3eeee4b7c85b1b800ebc7ffb981f9d8add857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
