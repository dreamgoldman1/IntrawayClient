<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d190c8eb8212fd21ba767679ac936bf4bc16ecd729c80d7b6d5e107d31acd0c0 extends Twig_Template
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
        $__internal_63b7e7dc840c20535eeb3439bc7f6201716a2c6ee54ea999e8783237a02a9b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b7e7dc840c20535eeb3439bc7f6201716a2c6ee54ea999e8783237a02a9b05->enter($__internal_63b7e7dc840c20535eeb3439bc7f6201716a2c6ee54ea999e8783237a02a9b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_79bf51835bc72e028f53ace21e1b4f476bc5dc7f7ce2d5bbf6ed8204c69b505f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bf51835bc72e028f53ace21e1b4f476bc5dc7f7ce2d5bbf6ed8204c69b505f->enter($__internal_79bf51835bc72e028f53ace21e1b4f476bc5dc7f7ce2d5bbf6ed8204c69b505f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_63b7e7dc840c20535eeb3439bc7f6201716a2c6ee54ea999e8783237a02a9b05->leave($__internal_63b7e7dc840c20535eeb3439bc7f6201716a2c6ee54ea999e8783237a02a9b05_prof);

        
        $__internal_79bf51835bc72e028f53ace21e1b4f476bc5dc7f7ce2d5bbf6ed8204c69b505f->leave($__internal_79bf51835bc72e028f53ace21e1b4f476bc5dc7f7ce2d5bbf6ed8204c69b505f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
