<?php

/* GOLContentBundle:Profile:form-profile.html.twig */
class __TwigTemplate_29955dcd8ae7449819fc6cd0b1359644712c9af6bd9f17e68c9efe90a717cebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Profile:form-profile.html.twig", 1);
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
        $__internal_487e88fe60aed1238fff959eae0c0e98277dfcf0dfa72f819186e8444acda13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487e88fe60aed1238fff959eae0c0e98277dfcf0dfa72f819186e8444acda13e->enter($__internal_487e88fe60aed1238fff959eae0c0e98277dfcf0dfa72f819186e8444acda13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Profile:form-profile.html.twig"));

        $__internal_c6abbc822e2a4a45bc5b2fba9a5279992d59b8c5952a311a6c08865881bb302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6abbc822e2a4a45bc5b2fba9a5279992d59b8c5952a311a6c08865881bb302b->enter($__internal_c6abbc822e2a4a45bc5b2fba9a5279992d59b8c5952a311a6c08865881bb302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Profile:form-profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487e88fe60aed1238fff959eae0c0e98277dfcf0dfa72f819186e8444acda13e->leave($__internal_487e88fe60aed1238fff959eae0c0e98277dfcf0dfa72f819186e8444acda13e_prof);

        
        $__internal_c6abbc822e2a4a45bc5b2fba9a5279992d59b8c5952a311a6c08865881bb302b->leave($__internal_c6abbc822e2a4a45bc5b2fba9a5279992d59b8c5952a311a6c08865881bb302b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_408ae75af447af4cca4405a859068b17e4bd704d3ae3a7913813d735e024aeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408ae75af447af4cca4405a859068b17e4bd704d3ae3a7913813d735e024aeb1->enter($__internal_408ae75af447af4cca4405a859068b17e4bd704d3ae3a7913813d735e024aeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eccea4bce655f7f37624f03d3326101c3cec7ad6aa5076acef8b171229de360f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccea4bce655f7f37624f03d3326101c3cec7ad6aa5076acef8b171229de360f->enter($__internal_eccea4bce655f7f37624f03d3326101c3cec7ad6aa5076acef8b171229de360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <h1>Create / Edit Profile
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
                            <span>Create / Edit</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-9 \">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class=\"portlet light \">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption font-green\">
                                            <i class=\"fa fa-table font-blue-madison\"></i>
                                            <span class=\"caption-subject font-blue-madison bold uppercase\"> Profile Form</span>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body form\">
                                        <form enctype=\"multipart/form-data\" role=\"form\" method=\"POST\">
                                            <div class=\"form-body\">
                                                ";
        // line 50
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "image", array(), "any", true, true)) {
            // line 51
            echo "                                                    <div class=\"col-sm-4\">
                                                        <img class=\"thumbnail\" style='width: 100%' src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/img/profile/" . $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "image", array()))), "html", null, true);
            echo "\" />
                                                    </div>
                                                ";
        }
        // line 55
        echo "                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"file\" class=\"form-control edited\" id=\"form_control_1\" name=\"image\">
                                                    <span class=\"help-block\">Seleccionar archivo para foto de perfil</span>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"name\" value=\"";
        // line 60
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "name", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "name", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Nombre</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"profession\" value=\"";
        // line 64
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profession", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "profession", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Profesión o frase</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"phone\" value=\"";
        // line 68
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "phone", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "phone", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Teléfono</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"email\" value=\"";
        // line 72
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "email", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "email", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Email</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <textarea class=\"form-control\" rows=\"3\" name=\"profile\">";
        // line 76
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profile", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "profile", array()), "html", null, true);
        }
        echo "</textarea>
                                                    <label for=\"form_control_1\">Perfil</label>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby1\" value=\"";
        // line 81
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "hobby1", array()), "html", null, true);
        }
        echo "\">
                                                        <label for=\"form_control_1\">Hobby 1</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent1\" value=\"";
        // line 88
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent1", array()), "html", null, true);
        }
        echo "\">
                                                            <label for=\"form_control_1\">Porcentaje 1</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby2\" value=\"";
        // line 96
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "hobby2", array()), "html", null, true);
        }
        echo "\">
                                                        <label for=\"form_control_1\">Hobby 2</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent2\" value=\"";
        // line 103
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent2", array()), "html", null, true);
        }
        echo "\">
                                                            <label for=\"form_control_1\">Porcentaje 2</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby3\" value=\"";
        // line 111
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "hobby3", array()), "html", null, true);
        }
        echo "\">
                                                        <label for=\"form_control_1\">Hobby 3</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent3\" value=\"";
        // line 118
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")), "percent3", array()), "html", null, true);
        }
        echo "\">
                                                            <label for=\"form_control_1\">Porcentaje 3</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions noborder\">
                                                <button type=\"submit\" class=\"btn blue\">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_eccea4bce655f7f37624f03d3326101c3cec7ad6aa5076acef8b171229de360f->leave($__internal_eccea4bce655f7f37624f03d3326101c3cec7ad6aa5076acef8b171229de360f_prof);

        
        $__internal_408ae75af447af4cca4405a859068b17e4bd704d3ae3a7913813d735e024aeb1->leave($__internal_408ae75af447af4cca4405a859068b17e4bd704d3ae3a7913813d735e024aeb1_prof);

    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Profile:form-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 118,  214 => 111,  201 => 103,  189 => 96,  176 => 88,  164 => 81,  154 => 76,  145 => 72,  136 => 68,  127 => 64,  118 => 60,  111 => 55,  105 => 52,  102 => 51,  100 => 50,  74 => 27,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h1>Create / Edit Profile
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
                            <span>Create / Edit</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-9 \">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class=\"portlet light \">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption font-green\">
                                            <i class=\"fa fa-table font-blue-madison\"></i>
                                            <span class=\"caption-subject font-blue-madison bold uppercase\"> Profile Form</span>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body form\">
                                        <form enctype=\"multipart/form-data\" role=\"form\" method=\"POST\">
                                            <div class=\"form-body\">
                                                {% if dataProfile.image is defined %}
                                                    <div class=\"col-sm-4\">
                                                        <img class=\"thumbnail\" style='width: 100%' src=\"{{ asset('uploads/img/profile/' ~ dataProfile.image) }}\" />
                                                    </div>
                                                {% endif %}
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"file\" class=\"form-control edited\" id=\"form_control_1\" name=\"image\">
                                                    <span class=\"help-block\">Seleccionar archivo para foto de perfil</span>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"name\" value=\"{% if dataProfile.name is defined %}{{ dataProfile.name }}{% endif %}\">
                                                    <label for=\"form_control_1\">Nombre</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"profession\" value=\"{% if dataProfile.profession is defined %}{{ dataProfile.profession }}{% endif %}\">
                                                    <label for=\"form_control_1\">Profesión o frase</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"phone\" value=\"{% if dataProfile.phone is defined %}{{ dataProfile.phone }}{% endif %}\">
                                                    <label for=\"form_control_1\">Teléfono</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"email\" value=\"{% if dataProfile.email is defined %}{{ dataProfile.email }}{% endif %}\">
                                                    <label for=\"form_control_1\">Email</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <textarea class=\"form-control\" rows=\"3\" name=\"profile\">{% if dataProfile.profile is defined %}{{ dataProfile.profile }}{% endif %}</textarea>
                                                    <label for=\"form_control_1\">Perfil</label>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby1\" value=\"{% if dataProfile.hobby1 is defined %}{{ dataProfile.hobby1 }}{% endif %}\">
                                                        <label for=\"form_control_1\">Hobby 1</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent1\" value=\"{% if dataProfile.percent1 is defined %}{{ dataProfile.percent1 }}{% endif %}\">
                                                            <label for=\"form_control_1\">Porcentaje 1</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby2\" value=\"{% if dataProfile.hobby2 is defined %}{{ dataProfile.hobby2 }}{% endif %}\">
                                                        <label for=\"form_control_1\">Hobby 2</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent2\" value=\"{% if dataProfile.percent2 is defined %}{{ dataProfile.percent2 }}{% endif %}\">
                                                            <label for=\"form_control_1\">Porcentaje 2</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby3\" value=\"{% if dataProfile.hobby3 is defined %}{{ dataProfile.hobby3 }}{% endif %}\">
                                                        <label for=\"form_control_1\">Hobby 3</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent3\" value=\"{% if dataProfile.percent3 is defined %}{{ dataProfile.percent3 }}{% endif %}\">
                                                            <label for=\"form_control_1\">Porcentaje 3</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions noborder\">
                                                <button type=\"submit\" class=\"btn blue\">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "GOLContentBundle:Profile:form-profile.html.twig", "/var/www/IntrawayClient/src/GOL/ContentBundle/Resources/views/Profile/form-profile.html.twig");
    }
}
