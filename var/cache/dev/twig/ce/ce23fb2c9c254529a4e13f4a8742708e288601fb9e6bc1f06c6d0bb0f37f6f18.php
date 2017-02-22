<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_84a858c4626d984a8b884fd53031b9fd958fbecc1ff4594a319881f78f7fef41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a858c4626d984a8b884fd53031b9fd958fbecc1ff4594a319881f78f7fef41->enter($__internal_84a858c4626d984a8b884fd53031b9fd958fbecc1ff4594a319881f78f7fef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a9569b6bcbf87b943ef0f3ee1577fddffc3fee26fcea6b6de016623a37da87fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9569b6bcbf87b943ef0f3ee1577fddffc3fee26fcea6b6de016623a37da87fa->enter($__internal_a9569b6bcbf87b943ef0f3ee1577fddffc3fee26fcea6b6de016623a37da87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_84a858c4626d984a8b884fd53031b9fd958fbecc1ff4594a319881f78f7fef41->leave($__internal_84a858c4626d984a8b884fd53031b9fd958fbecc1ff4594a319881f78f7fef41_prof);

        
        $__internal_a9569b6bcbf87b943ef0f3ee1577fddffc3fee26fcea6b6de016623a37da87fa->leave($__internal_a9569b6bcbf87b943ef0f3ee1577fddffc3fee26fcea6b6de016623a37da87fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
