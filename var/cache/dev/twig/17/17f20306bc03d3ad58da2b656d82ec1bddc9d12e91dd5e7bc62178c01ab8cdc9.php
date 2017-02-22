<?php

/* GOLContentBundle:Profile:profile.html.twig */
class __TwigTemplate_8e5575cf72d9ca35390da73ae56b29e8998d9803ac0bf2eecc0c195c017a353b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Profile:profile.html.twig", 1);
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
        $__internal_31e1042835b6782e57898f1c78409f327ba09b420ebf121cb42ded79ec7a7af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e1042835b6782e57898f1c78409f327ba09b420ebf121cb42ded79ec7a7af6->enter($__internal_31e1042835b6782e57898f1c78409f327ba09b420ebf121cb42ded79ec7a7af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Profile:profile.html.twig"));

        $__internal_3faacc7cad53fcebdb108bd684ebdf1bc76254164c087ba9afac28ccc1c20622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faacc7cad53fcebdb108bd684ebdf1bc76254164c087ba9afac28ccc1c20622->enter($__internal_3faacc7cad53fcebdb108bd684ebdf1bc76254164c087ba9afac28ccc1c20622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Profile:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e1042835b6782e57898f1c78409f327ba09b420ebf121cb42ded79ec7a7af6->leave($__internal_31e1042835b6782e57898f1c78409f327ba09b420ebf121cb42ded79ec7a7af6_prof);

        
        $__internal_3faacc7cad53fcebdb108bd684ebdf1bc76254164c087ba9afac28ccc1c20622->leave($__internal_3faacc7cad53fcebdb108bd684ebdf1bc76254164c087ba9afac28ccc1c20622_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2fc66a4945a0b6b9232e502bc666e32af43601909f992b83eece33fd3cd4f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fc66a4945a0b6b9232e502bc666e32af43601909f992b83eece33fd3cd4f27->enter($__internal_a2fc66a4945a0b6b9232e502bc666e32af43601909f992b83eece33fd3cd4f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a2ad51d50fcd9aee056afe7aa7005fbe411ed70be60b3c343e368d73dd78688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2ad51d50fcd9aee056afe7aa7005fbe411ed70be60b3c343e368d73dd78688->enter($__internal_8a2ad51d50fcd9aee056afe7aa7005fbe411ed70be60b3c343e368d73dd78688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Profile
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
        // line 27
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Home</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Profile</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"profile\">
                            <div class=\"tabbable-line tabbable-full-width\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\">
                                        <a href=\"#tab_1_1\" data-toggle=\"tab\"> Overview </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3\">
                                                <ul class=\"list-unstyled profile-nav\">
                                                    <li>
                                                        <img class=\"thumbnail\" style=\"width: 100%\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("http://54.202.167.7/uploads/img/profile/" . $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "image", array()))), "html", null, true);
        echo "\" class=\"img-responsive pic-bordered\" alt=\"\">
                                                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "edit-profile/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "id", array()), "html", null, true);
        echo "\" class=\"profile-edit\"> <i class=\"fa fa-pencil\"></i>Edit </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-8 profile-info\">
                                                        <h1 class=\"font-green sbold uppercase\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "name", array()), "html", null, true);
        echo "</h1>
                                                        <p> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "profession", array()), "html", null, true);
        echo " </p>
                                                        <p> <i class=\"fa fa-envelope\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "email", array()), "html", null, true);
        echo " </a></p>
                                                        <p> <i class=\"fa fa-phone\"></i> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "phone", array()), "html", null, true);
        echo " </p>
                                                    </div>

                                                    <div class=\"col-md-4\">
                                                        <div class=\"portlet sale-summary\">
                                                            <div class=\"portlet-title\">
                                                                <div class=\"caption font-red sbold\"> Hobbies </div>
                                                            </div>
                                                            <p>";
        // line 69
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "hobby1", array())), "html", null, true);
        echo "</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent1", array()), "html", null, true);
        echo "%\">
                                                                    <span class=\"sr-only\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent1", array()), "html", null, true);
        echo "% Complete (warning)</span>
                                                                </div>
                                                            </div>
                                                            <p>";
        // line 75
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "hobby2", array())), "html", null, true);
        echo "</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent2", array()), "html", null, true);
        echo "%\">
                                                                    <span class=\"sr-only\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent2", array()), "html", null, true);
        echo "% Complete</span>
                                                                </div>
                                                            </div>
                                                            <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "hobby3", array())), "html", null, true);
        echo "</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent3", array()), "html", null, true);
        echo "%\">
                                                                    <span class=\"sr-only\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent3", array()), "html", null, true);
        echo "% Complete (danger)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row text-center\">
                                                            <a class=\"btn btn-danger\" href='";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "delete-profile/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "id", array()), "html", null, true);
        echo "'><i class='fa fa-close'></i> Delete</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-9\">
                                                <div class=\"portlet sale-summary\">
                                                    <div class=\"caption portlet-title font-red sbold\"> Profile </div>
                                                    <div class=\"portlet-body\">
                                                        <p> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "profile", array()), "html", null, true);
        echo " </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8a2ad51d50fcd9aee056afe7aa7005fbe411ed70be60b3c343e368d73dd78688->leave($__internal_8a2ad51d50fcd9aee056afe7aa7005fbe411ed70be60b3c343e368d73dd78688_prof);

        
        $__internal_a2fc66a4945a0b6b9232e502bc666e32af43601909f992b83eece33fd3cd4f27->leave($__internal_a2fc66a4945a0b6b9232e502bc666e32af43601909f992b83eece33fd3cd4f27_prof);

    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 102,  186 => 89,  178 => 84,  174 => 83,  169 => 81,  163 => 78,  159 => 77,  154 => 75,  148 => 72,  144 => 71,  139 => 69,  128 => 61,  124 => 60,  120 => 59,  116 => 58,  104 => 51,  100 => 50,  74 => 27,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Profile
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
                            <span>Profile</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"profile\">
                            <div class=\"tabbable-line tabbable-full-width\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\">
                                        <a href=\"#tab_1_1\" data-toggle=\"tab\"> Overview </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3\">
                                                <ul class=\"list-unstyled profile-nav\">
                                                    <li>
                                                        <img class=\"thumbnail\" style=\"width: 100%\" src=\"{{ asset('http://54.202.167.7/uploads/img/profile/' ~ dataProfile.image ) }}\" class=\"img-responsive pic-bordered\" alt=\"\">
                                                        <a href=\"{{ env }}edit-profile/{{ dataProfile.id }}\" class=\"profile-edit\"> <i class=\"fa fa-pencil\"></i>Edit </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-8 profile-info\">
                                                        <h1 class=\"font-green sbold uppercase\">{{ dataProfile.name }}</h1>
                                                        <p> {{ dataProfile.profession }} </p>
                                                        <p> <i class=\"fa fa-envelope\"></i> {{ dataProfile.email }} </a></p>
                                                        <p> <i class=\"fa fa-phone\"></i> {{ dataProfile.phone }} </p>
                                                    </div>

                                                    <div class=\"col-md-4\">
                                                        <div class=\"portlet sale-summary\">
                                                            <div class=\"portlet-title\">
                                                                <div class=\"caption font-red sbold\"> Hobbies </div>
                                                            </div>
                                                            <p>{{ dataProfile.hobby1 | title }}</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ dataProfile.percent1 }}%\">
                                                                    <span class=\"sr-only\">{{ dataProfile.percent1 }}% Complete (warning)</span>
                                                                </div>
                                                            </div>
                                                            <p>{{ dataProfile.hobby2 | title }}</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ dataProfile.percent2 }}%\">
                                                                    <span class=\"sr-only\">{{ dataProfile.percent2 }}% Complete</span>
                                                                </div>
                                                            </div>
                                                            <p>{{ dataProfile.hobby3 | title }}</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ dataProfile.percent3 }}%\">
                                                                    <span class=\"sr-only\">{{ dataProfile.percent3 }}% Complete (danger)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row text-center\">
                                                            <a class=\"btn btn-danger\" href='{{ env }}delete-profile/{{ dataProfile.id }}'><i class='fa fa-close'></i> Delete</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-9\">
                                                <div class=\"portlet sale-summary\">
                                                    <div class=\"caption portlet-title font-red sbold\"> Profile </div>
                                                    <div class=\"portlet-body\">
                                                        <p> {{ dataProfile.profile }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "GOLContentBundle:Profile:profile.html.twig", "/var/www/IntrawayClient/src/GOL/ContentBundle/Resources/views/Profile/profile.html.twig");
    }
}
