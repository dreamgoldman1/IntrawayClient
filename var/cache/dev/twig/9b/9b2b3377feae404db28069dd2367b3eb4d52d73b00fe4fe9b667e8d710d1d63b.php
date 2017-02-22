<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_318c2a54e34a7a6988a6620dab91c68679c021e66c43e4836e7b38fdc0ae9374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318c2a54e34a7a6988a6620dab91c68679c021e66c43e4836e7b38fdc0ae9374->enter($__internal_318c2a54e34a7a6988a6620dab91c68679c021e66c43e4836e7b38fdc0ae9374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7f453a3eae119cab18dfe1153e1c0f3ad2734f74d0300a3e3fb162c4b823dbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f453a3eae119cab18dfe1153e1c0f3ad2734f74d0300a3e3fb162c4b823dbc8->enter($__internal_7f453a3eae119cab18dfe1153e1c0f3ad2734f74d0300a3e3fb162c4b823dbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_318c2a54e34a7a6988a6620dab91c68679c021e66c43e4836e7b38fdc0ae9374->leave($__internal_318c2a54e34a7a6988a6620dab91c68679c021e66c43e4836e7b38fdc0ae9374_prof);

        
        $__internal_7f453a3eae119cab18dfe1153e1c0f3ad2734f74d0300a3e3fb162c4b823dbc8->leave($__internal_7f453a3eae119cab18dfe1153e1c0f3ad2734f74d0300a3e3fb162c4b823dbc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
