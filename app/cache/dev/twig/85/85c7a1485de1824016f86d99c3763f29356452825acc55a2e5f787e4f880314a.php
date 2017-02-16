<?php

/* base.html.twig */
class __TwigTemplate_e1fa5ecd585f07aa5da82462dfd3b4f91dc741f3e7f236b486c6f9d9d4d0c88d extends Twig_Template
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
        $__internal_0497e571dbc7b48b58ed35861c6cf895ae04ad0192a2dc433b1d8d7ae8a5e15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0497e571dbc7b48b58ed35861c6cf895ae04ad0192a2dc433b1d8d7ae8a5e15a->enter($__internal_0497e571dbc7b48b58ed35861c6cf895ae04ad0192a2dc433b1d8d7ae8a5e15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo " 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
            
        <div style=\"width:100% ;height: 100%; overflow: auto;\">
            <div id=\"contenu\">
                ";
        // line 24
        $this->displayBlock('banner', $context, $blocks);
        // line 26
        echo "                    
                    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "            </div>
        </div>
        <!-- Scripts -->
            ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_0497e571dbc7b48b58ed35861c6cf895ae04ad0192a2dc433b1d8d7ae8a5e15a->leave($__internal_0497e571dbc7b48b58ed35861c6cf895ae04ad0192a2dc433b1d8d7ae8a5e15a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_53a4ad9e3eea4e2e8a7efb1a31bd907f3dbe70b88f5b3ef718b2839ff59df459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a4ad9e3eea4e2e8a7efb1a31bd907f3dbe70b88f5b3ef718b2839ff59df459->enter($__internal_53a4ad9e3eea4e2e8a7efb1a31bd907f3dbe70b88f5b3ef718b2839ff59df459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_53a4ad9e3eea4e2e8a7efb1a31bd907f3dbe70b88f5b3ef718b2839ff59df459->leave($__internal_53a4ad9e3eea4e2e8a7efb1a31bd907f3dbe70b88f5b3ef718b2839ff59df459_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f320cf1ae2c8ebfc93e8dd663242eccc5e35af8730829469336ba4bbddc617f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f320cf1ae2c8ebfc93e8dd663242eccc5e35af8730829469336ba4bbddc617f4->enter($__internal_f320cf1ae2c8ebfc93e8dd663242eccc5e35af8730829469336ba4bbddc617f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6ee41cf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6ee41cf_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6ee41cf_main_1.css");
            // line 14
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
            // asset "6ee41cf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6ee41cf_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6ee41cf_jquery-ui_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
        } else {
            // asset "6ee41cf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6ee41cf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6ee41cf.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 16
        echo "\t\t";
        
        $__internal_f320cf1ae2c8ebfc93e8dd663242eccc5e35af8730829469336ba4bbddc617f4->leave($__internal_f320cf1ae2c8ebfc93e8dd663242eccc5e35af8730829469336ba4bbddc617f4_prof);

    }

    // line 24
    public function block_banner($context, array $blocks = array())
    {
        $__internal_d73e1d79584f05c256546140fd7edd3d4e724edf6fb0d5eb36faf1d59c09d4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73e1d79584f05c256546140fd7edd3d4e724edf6fb0d5eb36faf1d59c09d4a9->enter($__internal_d73e1d79584f05c256546140fd7edd3d4e724edf6fb0d5eb36faf1d59c09d4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        // line 25
        echo "                     ";
        
        $__internal_d73e1d79584f05c256546140fd7edd3d4e724edf6fb0d5eb36faf1d59c09d4a9->leave($__internal_d73e1d79584f05c256546140fd7edd3d4e724edf6fb0d5eb36faf1d59c09d4a9_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a69c2900eecf233a64686c90c4e703cb01cf4edbeebb9d3de439995180eed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a69c2900eecf233a64686c90c4e703cb01cf4edbeebb9d3de439995180eed4->enter($__internal_51a69c2900eecf233a64686c90c4e703cb01cf4edbeebb9d3de439995180eed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "                
                teste
                
                
                
                
                ";
        
        $__internal_51a69c2900eecf233a64686c90c4e703cb01cf4edbeebb9d3de439995180eed4->leave($__internal_51a69c2900eecf233a64686c90c4e703cb01cf4edbeebb9d3de439995180eed4_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41bb6cb36c89c1dcd30fe65be74f30423b04592f7e4dfceb708f497a6d179072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bb6cb36c89c1dcd30fe65be74f30423b04592f7e4dfceb708f497a6d179072->enter($__internal_41bb6cb36c89c1dcd30fe65be74f30423b04592f7e4dfceb708f497a6d179072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "                    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7542672_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery_1.js");
            // line 48
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
            // asset "7542672_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery-ui_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
            // asset "7542672_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery.scrolly.min_3.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
            // asset "7542672_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_jquery.scrollex.min_4.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
            // asset "7542672_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_skel.min_5.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
            // asset "7542672_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_util_6.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
            // asset "7542672_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672_main_7.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
        } else {
            // asset "7542672"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7542672") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7542672.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "            ";
        
        $__internal_41bb6cb36c89c1dcd30fe65be74f30423b04592f7e4dfceb708f497a6d179072->leave($__internal_41bb6cb36c89c1dcd30fe65be74f30423b04592f7e4dfceb708f497a6d179072_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4c65af54162724353d8c63fdb061681c72e612acd58d0cd84c59cf5451741738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c65af54162724353d8c63fdb061681c72e612acd58d0cd84c59cf5451741738->enter($__internal_4c65af54162724353d8c63fdb061681c72e612acd58d0cd84c59cf5451741738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "            ";
        $this->loadTemplate("layout/footer.html.twig", "base.html.twig", 53)->display($context);
        // line 54
        echo "        ";
        
        $__internal_4c65af54162724353d8c63fdb061681c72e612acd58d0cd84c59cf5451741738->leave($__internal_4c65af54162724353d8c63fdb061681c72e612acd58d0cd84c59cf5451741738_prof);

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
        return array (  240 => 54,  237 => 53,  231 => 52,  224 => 50,  174 => 48,  169 => 39,  163 => 38,  150 => 28,  144 => 27,  137 => 25,  131 => 24,  124 => 16,  104 => 14,  99 => 8,  93 => 7,  81 => 6,  72 => 55,  70 => 52,  67 => 51,  65 => 38,  60 => 35,  58 => 27,  55 => 26,  53 => 24,  44 => 18,  41 => 17,  39 => 7,  35 => 6,  28 => 1,);
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
\t\t{% block stylesheets %}
\t\t\t{% stylesheets filter='cssrewrite'

\t\t\t'@BlogServingBundle/Resources/public/css/main.css'
\t\t\t'@BlogServingBundle/Resources/public/css/jquery-ui.css'
\t\t\t
\t\t\t%}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
\t\t\t{% endstylesheets %}
\t\t{% endblock %}
 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
            
        <div style=\"width:100% ;height: 100%; overflow: auto;\">
            <div id=\"contenu\">
                {% block banner %}
                     {% endblock %}
                    
                    {% block body %}
                
                teste
                
                
                
                
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
            {%  include 'layout/footer.html.twig' %}
        {% endblock footer %}
    </body>
</html>
", "base.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/base.html.twig");
    }
}
