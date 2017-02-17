<?php

/* base.html.twig */
class __TwigTemplate_90fe86d58a12d40b011ed6fa97884c9c9a31f0827cda6f958d5b38da9fc86e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'banner' => array($this, 'block_banner'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c6474c4340fb8711a0c9e28e703a6622e688cea7c4705c218507195a09bb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c6474c4340fb8711a0c9e28e703a6622e688cea7c4705c218507195a09bb74->enter($__internal_54c6474c4340fb8711a0c9e28e703a6622e688cea7c4705c218507195a09bb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div style=\"width:100% ;height: 100%; overflow: auto;\">
            <div id=\"contenu\">
                ";
        // line 19
        $this->displayBlock('banner', $context, $blocks);
        // line 21
        echo "                    
                ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            </div>
        </div>
        <!-- Scripts -->
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "    </body>
</html>
";
        
        $__internal_54c6474c4340fb8711a0c9e28e703a6622e688cea7c4705c218507195a09bb74->leave($__internal_54c6474c4340fb8711a0c9e28e703a6622e688cea7c4705c218507195a09bb74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4125391221da8f285e41ac21a8554267a0135ef2ee8a8c031aa36a9a4c306129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4125391221da8f285e41ac21a8554267a0135ef2ee8a8c031aa36a9a4c306129->enter($__internal_4125391221da8f285e41ac21a8554267a0135ef2ee8a8c031aa36a9a4c306129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4125391221da8f285e41ac21a8554267a0135ef2ee8a8c031aa36a9a4c306129->leave($__internal_4125391221da8f285e41ac21a8554267a0135ef2ee8a8c031aa36a9a4c306129_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23c0051cfff9f9434fca71f07a996ab9e68c15936e0cc03c742b91c11348b05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c0051cfff9f9434fca71f07a996ab9e68c15936e0cc03c742b91c11348b05e->enter($__internal_23c0051cfff9f9434fca71f07a996ab9e68c15936e0cc03c742b91c11348b05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6ee41cf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6ee41cf_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6ee41cf_main_1.css");
            // line 11
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
            // asset "6ee41cf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6ee41cf_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6ee41cf_jquery-ui_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
        } else {
            // asset "6ee41cf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6ee41cf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6ee41cf.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "            ";
        
        $__internal_23c0051cfff9f9434fca71f07a996ab9e68c15936e0cc03c742b91c11348b05e->leave($__internal_23c0051cfff9f9434fca71f07a996ab9e68c15936e0cc03c742b91c11348b05e_prof);

    }

    // line 19
    public function block_banner($context, array $blocks = array())
    {
        $__internal_54f9c976fe176fe943f54db0237cecb18a18131ee2330f1b6a70e1f5e725f4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f9c976fe176fe943f54db0237cecb18a18131ee2330f1b6a70e1f5e725f4e9->enter($__internal_54f9c976fe176fe943f54db0237cecb18a18131ee2330f1b6a70e1f5e725f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        // line 20
        echo "                ";
        
        $__internal_54f9c976fe176fe943f54db0237cecb18a18131ee2330f1b6a70e1f5e725f4e9->leave($__internal_54f9c976fe176fe943f54db0237cecb18a18131ee2330f1b6a70e1f5e725f4e9_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6626e1a5014def28164484c3f113249ed854d3dfaf85e3f122fa81d569b555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6626e1a5014def28164484c3f113249ed854d3dfaf85e3f122fa81d569b555f->enter($__internal_e6626e1a5014def28164484c3f113249ed854d3dfaf85e3f122fa81d569b555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "                ";
        
        $__internal_e6626e1a5014def28164484c3f113249ed854d3dfaf85e3f122fa81d569b555f->leave($__internal_e6626e1a5014def28164484c3f113249ed854d3dfaf85e3f122fa81d569b555f_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee222285458d2a885e72e451848ca1025da9b46e6352473d26fdb42a329a647a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee222285458d2a885e72e451848ca1025da9b46e6352473d26fdb42a329a647a->enter($__internal_ee222285458d2a885e72e451848ca1025da9b46e6352473d26fdb42a329a647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7542672_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery_1.js");
            // line 37
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
            // asset "7542672_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery-ui_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
            // asset "7542672_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery.scrolly.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
            // asset "7542672_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery.scrollex.min_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
            // asset "7542672_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_skel.min_5.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
            // asset "7542672_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_util_6.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
            // asset "7542672_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_main_7.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
        } else {
            // asset "7542672"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
            ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "        ";
        
        $__internal_ee222285458d2a885e72e451848ca1025da9b46e6352473d26fdb42a329a647a->leave($__internal_ee222285458d2a885e72e451848ca1025da9b46e6352473d26fdb42a329a647a_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_91643d053bc93cb61ad9032b522cb29750e019aa3e5b4e12ac709734e60e1678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91643d053bc93cb61ad9032b522cb29750e019aa3e5b4e12ac709734e60e1678->enter($__internal_91643d053bc93cb61ad9032b522cb29750e019aa3e5b4e12ac709734e60e1678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "        ";
        
        $__internal_91643d053bc93cb61ad9032b522cb29750e019aa3e5b4e12ac709734e60e1678->leave($__internal_91643d053bc93cb61ad9032b522cb29750e019aa3e5b4e12ac709734e60e1678_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 41,  219 => 40,  212 => 39,  162 => 37,  157 => 28,  151 => 27,  144 => 23,  138 => 22,  131 => 20,  125 => 19,  118 => 13,  98 => 11,  93 => 7,  87 => 6,  75 => 5,  66 => 42,  63 => 40,  61 => 27,  56 => 24,  54 => 22,  51 => 21,  49 => 19,  40 => 14,  38 => 6,  34 => 5,  28 => 1,);
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
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
            {% block stylesheets %}
                {% stylesheets filter='cssrewrite'
                '@BlogServingBundle/Resources/public/css/main.css'
                '@BlogServingBundle/Resources/public/css/jquery-ui.css'
                %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
                {% endstylesheets %}
            {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div style=\"width:100% ;height: 100%; overflow: auto;\">
            <div id=\"contenu\">
                {% block banner %}
                {% endblock %}
                    
                {% block body %}
                {% endblock %}
            </div>
        </div>
        <!-- Scripts -->
        {% block javascripts %}
            {% javascripts
                '%kernel.root_dir%/../vendor/components/jquery/jquery.js'
                '%kernel.root_dir%/../vendor/components/jqueryui/jquery-ui.js'
                '@BlogServingBundle/Resources/public/js/jquery.scrolly.min.js'
                '@BlogServingBundle/Resources/public/js/jquery.scrollex.min.js'
                '@BlogServingBundle/Resources/public/js/skel.min.js'
                '@BlogServingBundle/Resources/public/js/util.js'
                '@BlogServingBundle/Resources/public/js/main.js'
            %}
            <script src=\"{{ asset_url }}\"/></script>
            {% endjavascripts %}
        {% endblock %}
        {% block footer %}
        {% endblock footer %}
    </body>
</html>
", "base.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/base.html.twig");
    }
}
