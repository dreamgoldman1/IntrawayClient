<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a6d7250fac0fe09ae9d9dc48481a6fc3c2cdd5b65b08e4cc7595d600b905dcec extends Twig_Template
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
        $__internal_7c385f065d532925e92895b8d2b16ee76858c5d7c347b9a3c98574e802437049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c385f065d532925e92895b8d2b16ee76858c5d7c347b9a3c98574e802437049->enter($__internal_7c385f065d532925e92895b8d2b16ee76858c5d7c347b9a3c98574e802437049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_37eac1896b6230bcf2606156814d6368015a5d5fb445d6694b9801490c9c2341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37eac1896b6230bcf2606156814d6368015a5d5fb445d6694b9801490c9c2341->enter($__internal_37eac1896b6230bcf2606156814d6368015a5d5fb445d6694b9801490c9c2341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7c385f065d532925e92895b8d2b16ee76858c5d7c347b9a3c98574e802437049->leave($__internal_7c385f065d532925e92895b8d2b16ee76858c5d7c347b9a3c98574e802437049_prof);

        
        $__internal_37eac1896b6230bcf2606156814d6368015a5d5fb445d6694b9801490c9c2341->leave($__internal_37eac1896b6230bcf2606156814d6368015a5d5fb445d6694b9801490c9c2341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
