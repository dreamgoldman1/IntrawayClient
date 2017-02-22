<?php

/* GOLMenuBundle:Menu:menu.html.twig */
class __TwigTemplate_b61cd704acb413e138ed2cc71d9d002de4ac5dd543b7993414d7388246586468 extends Twig_Template
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
        $__internal_b4a38123cdb704c44c421e22e50a0d345dbcf6a281fc5315855e3aadec227426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a38123cdb704c44c421e22e50a0d345dbcf6a281fc5315855e3aadec227426->enter($__internal_b4a38123cdb704c44c421e22e50a0d345dbcf6a281fc5315855e3aadec227426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLMenuBundle:Menu:menu.html.twig"));

        $__internal_74348f01b9a3633bacc66b90fb699807c1571a5839ecdce7dede21d9b0c41b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74348f01b9a3633bacc66b90fb699807c1571a5839ecdce7dede21d9b0c41b1f->enter($__internal_74348f01b9a3633bacc66b90fb699807c1571a5839ecdce7dede21d9b0c41b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLMenuBundle:Menu:menu.html.twig"));

        // line 1
        echo "<div class=\"page-header-menu\">
        <div class=\"container\">
            <!-- BEGIN MEGA MENU -->
            <div class=\"hor-menu  \">
                <ul class=\"nav navbar-nav\">
                    <li class=\"menu-dropdown classic-menu-dropdown \">
                        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "profiles\"> View Profiles</a>
                    </li>
                    <li class=\"menu-dropdown mega-menu-dropdown  \">
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "create-profile\"> Create Profile</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->";
        
        $__internal_b4a38123cdb704c44c421e22e50a0d345dbcf6a281fc5315855e3aadec227426->leave($__internal_b4a38123cdb704c44c421e22e50a0d345dbcf6a281fc5315855e3aadec227426_prof);

        
        $__internal_74348f01b9a3633bacc66b90fb699807c1571a5839ecdce7dede21d9b0c41b1f->leave($__internal_74348f01b9a3633bacc66b90fb699807c1571a5839ecdce7dede21d9b0c41b1f_prof);

    }

    public function getTemplateName()
    {
        return "GOLMenuBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-header-menu\">
        <div class=\"container\">
            <!-- BEGIN MEGA MENU -->
            <div class=\"hor-menu  \">
                <ul class=\"nav navbar-nav\">
                    <li class=\"menu-dropdown classic-menu-dropdown \">
                        <a href=\"{{ env }}profiles\"> View Profiles</a>
                    </li>
                    <li class=\"menu-dropdown mega-menu-dropdown  \">
                        <a href=\"{{ env }}create-profile\"> Create Profile</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->", "GOLMenuBundle:Menu:menu.html.twig", "/var/www/IntrawayClient/src/GOL/MenuBundle/Resources/views/Menu/menu.html.twig");
    }
}
