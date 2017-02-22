<?php

/* Intraway.html.twig */
class __TwigTemplate_c88eb7db98783b322ee1cc45eb522808ae139ffae3d149b4a8a4266e61649519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0053aad1fe6316ce1b195de4d616d5782b85c4828f892d79cea090e185a0e1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0053aad1fe6316ce1b195de4d616d5782b85c4828f892d79cea090e185a0e1a8->enter($__internal_0053aad1fe6316ce1b195de4d616d5782b85c4828f892d79cea090e185a0e1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Intraway.html.twig"));

        $__internal_b35512eb9bd77576e9c78ceb8a79ccd46bc406579203f08b7aa53ef88b95d330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35512eb9bd77576e9c78ceb8a79ccd46bc406579203f08b7aa53ef88b95d330->enter($__internal_b35512eb9bd77576e9c78ceb8a79ccd46bc406579203f08b7aa53ef88b95d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Intraway.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"es\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"Gilberto Orozco Linero\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/profile-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout3/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout3/css/themes/default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout3/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    </head>
    <!-- END HEAD -->

    <body class=\"page-container-bg-solid\">
        ";
        // line 44
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLHeaderBundle:Header:header"));
        echo "
        
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLFooterBundle:Footer:footer"));
        echo "

        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=false\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/gmaps/gmaps.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/pages/scripts/profile.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/pages/scripts/timeline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/layouts/layout3/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/layouts/layout3/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>";
        
        $__internal_0053aad1fe6316ce1b195de4d616d5782b85c4828f892d79cea090e185a0e1a8->leave($__internal_0053aad1fe6316ce1b195de4d616d5782b85c4828f892d79cea090e185a0e1a8_prof);

        
        $__internal_b35512eb9bd77576e9c78ceb8a79ccd46bc406579203f08b7aa53ef88b95d330->leave($__internal_b35512eb9bd77576e9c78ceb8a79ccd46bc406579203f08b7aa53ef88b95d330_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5801ca4d28a14c4b7e40a94409c27625cc967b110cea8bc02a8bc1d79ce5ed61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5801ca4d28a14c4b7e40a94409c27625cc967b110cea8bc02a8bc1d79ce5ed61->enter($__internal_5801ca4d28a14c4b7e40a94409c27625cc967b110cea8bc02a8bc1d79ce5ed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_937a5ced1518efa2d745fd7c5d094e73d646f678bdafcfce5244b904b0d8702b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937a5ced1518efa2d745fd7c5d094e73d646f678bdafcfce5244b904b0d8702b->enter($__internal_937a5ced1518efa2d745fd7c5d094e73d646f678bdafcfce5244b904b0d8702b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo ".:: Intraway | Gilberto Orozco Linero ::.";
        
        $__internal_937a5ced1518efa2d745fd7c5d094e73d646f678bdafcfce5244b904b0d8702b->leave($__internal_937a5ced1518efa2d745fd7c5d094e73d646f678bdafcfce5244b904b0d8702b_prof);

        
        $__internal_5801ca4d28a14c4b7e40a94409c27625cc967b110cea8bc02a8bc1d79ce5ed61->leave($__internal_5801ca4d28a14c4b7e40a94409c27625cc967b110cea8bc02a8bc1d79ce5ed61_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b5998b5e616cd6312a7db0f4f6c7107dcee6e5c59daf5b3eb7d6d47fbe1bad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5998b5e616cd6312a7db0f4f6c7107dcee6e5c59daf5b3eb7d6d47fbe1bad3->enter($__internal_6b5998b5e616cd6312a7db0f4f6c7107dcee6e5c59daf5b3eb7d6d47fbe1bad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c9601b8b5e59365410f5092abc3e69cf846f398a280f0b16e62dd2ccbc21bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9601b8b5e59365410f5092abc3e69cf846f398a280f0b16e62dd2ccbc21bd6->enter($__internal_3c9601b8b5e59365410f5092abc3e69cf846f398a280f0b16e62dd2ccbc21bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3c9601b8b5e59365410f5092abc3e69cf846f398a280f0b16e62dd2ccbc21bd6->leave($__internal_3c9601b8b5e59365410f5092abc3e69cf846f398a280f0b16e62dd2ccbc21bd6_prof);

        
        $__internal_6b5998b5e616cd6312a7db0f4f6c7107dcee6e5c59daf5b3eb7d6d47fbe1bad3->leave($__internal_6b5998b5e616cd6312a7db0f4f6c7107dcee6e5c59daf5b3eb7d6d47fbe1bad3_prof);

    }

    public function getTemplateName()
    {
        return "Intraway.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 46,  211 => 11,  197 => 76,  193 => 75,  189 => 74,  183 => 71,  179 => 70,  173 => 67,  167 => 64,  162 => 62,  158 => 61,  152 => 58,  148 => 57,  144 => 56,  140 => 55,  136 => 54,  132 => 53,  128 => 52,  121 => 49,  118 => 47,  116 => 46,  110 => 44,  102 => 38,  97 => 36,  93 => 35,  89 => 34,  83 => 31,  77 => 28,  73 => 27,  67 => 24,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  39 => 11,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"es\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>{% block title %}.:: Intraway | Gilberto Orozco Linero ::.{% endblock %}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"Gilberto Orozco Linero\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('assets/global/css/components-rounded.min.css') }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"{{ asset('assets/pages/css/profile-2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{ asset('assets/layouts/layout3/css/layout.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/layouts/layout3/css/themes/default.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"{{ asset('assets/layouts/layout3/css/custom.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" /> 
    </head>
    <!-- END HEAD -->

    <body class=\"page-container-bg-solid\">
        {# Render Header section #}
        {{ render(controller('GOLHeaderBundle:Header:header')) }}
        
        {% block content %}{% endblock %}

        {# Render Footer section #}
        {{ render(controller('GOLFooterBundle:Footer:footer')) }}

        <!-- BEGIN CORE PLUGINS -->
        <script src=\"{{ asset('/assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/js.cookie.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{ asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/jquery.sparkline.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=false\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/gmaps/gmaps.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('/assets/global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('/assets/pages/scripts/profile.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/pages/scripts/timeline.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{ asset('/assets/layouts/layout3/scripts/layout.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/layouts/layout3/scripts/demo.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/layouts/global/scripts/quick-sidebar.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>", "Intraway.html.twig", "/var/www/IntrawayClient/app/Resources/views/Intraway.html.twig");
    }
}
