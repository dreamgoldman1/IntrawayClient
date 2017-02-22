<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_652bb7aceb0d3e6413feff8802d11032db44ade2f1eb1ded7d290f6bae916b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652bb7aceb0d3e6413feff8802d11032db44ade2f1eb1ded7d290f6bae916b3b->enter($__internal_652bb7aceb0d3e6413feff8802d11032db44ade2f1eb1ded7d290f6bae916b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cbc68b7491f4dc03677845af81512635b706c6f9b83f349fdd9269086c322369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc68b7491f4dc03677845af81512635b706c6f9b83f349fdd9269086c322369->enter($__internal_cbc68b7491f4dc03677845af81512635b706c6f9b83f349fdd9269086c322369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_652bb7aceb0d3e6413feff8802d11032db44ade2f1eb1ded7d290f6bae916b3b->leave($__internal_652bb7aceb0d3e6413feff8802d11032db44ade2f1eb1ded7d290f6bae916b3b_prof);

        
        $__internal_cbc68b7491f4dc03677845af81512635b706c6f9b83f349fdd9269086c322369->leave($__internal_cbc68b7491f4dc03677845af81512635b706c6f9b83f349fdd9269086c322369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/IntrawayClient/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
