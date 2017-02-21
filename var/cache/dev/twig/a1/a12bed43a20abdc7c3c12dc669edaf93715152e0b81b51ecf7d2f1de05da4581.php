<?php

/* GOLContentBundle:Profile:profiles.html.twig */
class __TwigTemplate_38fd94704376abde2fca984a2f0c4d770984f056598eafef56c1534b8a1aaff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Profile:profiles.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Intraway.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_138b29b2929730d866967365fdd9924ddbb20ecaa967b6bfbe17ebb5e2542025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138b29b2929730d866967365fdd9924ddbb20ecaa967b6bfbe17ebb5e2542025->enter($__internal_138b29b2929730d866967365fdd9924ddbb20ecaa967b6bfbe17ebb5e2542025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Profile:profiles.html.twig"));

        $__internal_094ad35e5475c096be6b80c23b4dba6823cd79009a87b756de6737735f8e12f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094ad35e5475c096be6b80c23b4dba6823cd79009a87b756de6737735f8e12f4->enter($__internal_094ad35e5475c096be6b80c23b4dba6823cd79009a87b756de6737735f8e12f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Profile:profiles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_138b29b2929730d866967365fdd9924ddbb20ecaa967b6bfbe17ebb5e2542025->leave($__internal_138b29b2929730d866967365fdd9924ddbb20ecaa967b6bfbe17ebb5e2542025_prof);

        
        $__internal_094ad35e5475c096be6b80c23b4dba6823cd79009a87b756de6737735f8e12f4->leave($__internal_094ad35e5475c096be6b80c23b4dba6823cd79009a87b756de6737735f8e12f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b76550fbc3976302d325f610ce84a7fcf7294af080e8b529db4b32b0eadbece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b76550fbc3976302d325f610ce84a7fcf7294af080e8b529db4b32b0eadbece->enter($__internal_7b76550fbc3976302d325f610ce84a7fcf7294af080e8b529db4b32b0eadbece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d6afca513e4c8e40ce45fde14ca98b38ab9e927acbef2752f66e2bd40e068110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6afca513e4c8e40ce45fde14ca98b38ab9e927acbef2752f66e2bd40e068110->enter($__internal_d6afca513e4c8e40ce45fde14ca98b38ab9e927acbef2752f66e2bd40e068110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Profiles
                            <small></small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class=\"page-content\">
                <div class=\"container\">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class=\"page-breadcrumb breadcrumb\">
                        <li>
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Home</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Profiles</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class=\"profile-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <!-- BEGIN PORTLET -->
                                            <div class=\"portlet light \">
                                                <div class=\"portlet-title\">
                                                    <div class=\"caption caption-md\">
                                                        <i class=\"fa fa-users font-blue-madison\"></i>
                                                        <span class=\"caption-subject font-blue-madison bold uppercase\">Users Profiles</span>
                                                    </div>
                                                </div>
                                                <div class=\"portlet-body\">
                                                    <div class=\"\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                                        <div class=\"general-item-list\">

                                                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 57
            echo "                                                                <div class=\"item\">
                                                                    <div class=\"item-head\">
                                                                        <div class=\"item-details\">
                                                                            <img class=\"item-pic\" src=\"http://intrawayserver.dev/uploads/img/profile/";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "image", array()), "html", null, true);
            echo "\">
                                                                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
            echo "profile/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "id", array()), "html", null, true);
            echo "\" class=\"item-name primary-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "name", array()), "html", null, true);
            echo "</a>
                                                                            <span class=\"item-label\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "profession", array()), "html", null, true);
            echo "</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"item-body\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "profile", array()), "html", null, true);
            echo "</div>
                                                                </div>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
";
        
        $__internal_d6afca513e4c8e40ce45fde14ca98b38ab9e927acbef2752f66e2bd40e068110->leave($__internal_d6afca513e4c8e40ce45fde14ca98b38ab9e927acbef2752f66e2bd40e068110_prof);

        
        $__internal_7b76550fbc3976302d325f610ce84a7fcf7294af080e8b529db4b32b0eadbece->leave($__internal_7b76550fbc3976302d325f610ce84a7fcf7294af080e8b529db4b32b0eadbece_prof);

    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Profile:profiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  133 => 65,  127 => 62,  119 => 61,  115 => 60,  110 => 57,  106 => 56,  75 => 28,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Intraway.html.twig\" %}

{% block content %}
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Profiles
                            <small></small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class=\"page-content\">
                <div class=\"container\">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class=\"page-breadcrumb breadcrumb\">
                        <li>
                            <a href=\"{{ env }}\">Home</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Profiles</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class=\"profile-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <!-- BEGIN PORTLET -->
                                            <div class=\"portlet light \">
                                                <div class=\"portlet-title\">
                                                    <div class=\"caption caption-md\">
                                                        <i class=\"fa fa-users font-blue-madison\"></i>
                                                        <span class=\"caption-subject font-blue-madison bold uppercase\">Users Profiles</span>
                                                    </div>
                                                </div>
                                                <div class=\"portlet-body\">
                                                    <div class=\"\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                                        <div class=\"general-item-list\">

                                                            {% for profile in dataProfile %}
                                                                <div class=\"item\">
                                                                    <div class=\"item-head\">
                                                                        <div class=\"item-details\">
                                                                            <img class=\"item-pic\" src=\"http://intrawayserver.dev/uploads/img/profile/{{ profile.image }}\">
                                                                            <a href=\"{{ env }}profile/{{ profile.id }}\" class=\"item-name primary-link\">{{ profile.name }}</a>
                                                                            <span class=\"item-label\">{{ profile.profession }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"item-body\">{{ profile.profile }}</div>
                                                                </div>
                                                            {% endfor %}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
{% endblock %}", "GOLContentBundle:Profile:profiles.html.twig", "/var/www/IntrawayClient/src/GOL/ContentBundle/Resources/views/Profile/profiles.html.twig");
    }
}
