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
        $__internal_2ecb0d36d380b44b46d09ce5be9c1be8c30c2257c8f243445b89b7913afa1011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecb0d36d380b44b46d09ce5be9c1be8c30c2257c8f243445b89b7913afa1011->enter($__internal_2ecb0d36d380b44b46d09ce5be9c1be8c30c2257c8f243445b89b7913afa1011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2ecb0d36d380b44b46d09ce5be9c1be8c30c2257c8f243445b89b7913afa1011->leave($__internal_2ecb0d36d380b44b46d09ce5be9c1be8c30c2257c8f243445b89b7913afa1011_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8854ddf0a78084f55d44aca821aaa828df61f965b442baf37f5d6fe19d731470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8854ddf0a78084f55d44aca821aaa828df61f965b442baf37f5d6fe19d731470->enter($__internal_8854ddf0a78084f55d44aca821aaa828df61f965b442baf37f5d6fe19d731470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8854ddf0a78084f55d44aca821aaa828df61f965b442baf37f5d6fe19d731470->leave($__internal_8854ddf0a78084f55d44aca821aaa828df61f965b442baf37f5d6fe19d731470_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a32d183a70903d02dc2dda49a23120fa401dbf33db97d8d3ba38a323646df7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32d183a70903d02dc2dda49a23120fa401dbf33db97d8d3ba38a323646df7b4->enter($__internal_a32d183a70903d02dc2dda49a23120fa401dbf33db97d8d3ba38a323646df7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a32d183a70903d02dc2dda49a23120fa401dbf33db97d8d3ba38a323646df7b4->leave($__internal_a32d183a70903d02dc2dda49a23120fa401dbf33db97d8d3ba38a323646df7b4_prof);

    }

    // line 19
    public function block_banner($context, array $blocks = array())
    {
        $__internal_7e030747a862fd95b2a6830f67ca7f7c3271bf7efeb93b2134299de5f714c388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e030747a862fd95b2a6830f67ca7f7c3271bf7efeb93b2134299de5f714c388->enter($__internal_7e030747a862fd95b2a6830f67ca7f7c3271bf7efeb93b2134299de5f714c388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        // line 20
        echo "                ";
        
        $__internal_7e030747a862fd95b2a6830f67ca7f7c3271bf7efeb93b2134299de5f714c388->leave($__internal_7e030747a862fd95b2a6830f67ca7f7c3271bf7efeb93b2134299de5f714c388_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_4314f23c701e6580148dd62c391ab0f72a68fa22b6241c230598edbfef217f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4314f23c701e6580148dd62c391ab0f72a68fa22b6241c230598edbfef217f6b->enter($__internal_4314f23c701e6580148dd62c391ab0f72a68fa22b6241c230598edbfef217f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "                ";
        
        $__internal_4314f23c701e6580148dd62c391ab0f72a68fa22b6241c230598edbfef217f6b->leave($__internal_4314f23c701e6580148dd62c391ab0f72a68fa22b6241c230598edbfef217f6b_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f37c83c290817cf60b84babce85a27e78eae0b5118a976b9502ce682b52b735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f37c83c290817cf60b84babce85a27e78eae0b5118a976b9502ce682b52b735->enter($__internal_6f37c83c290817cf60b84babce85a27e78eae0b5118a976b9502ce682b52b735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f37c83c290817cf60b84babce85a27e78eae0b5118a976b9502ce682b52b735->leave($__internal_6f37c83c290817cf60b84babce85a27e78eae0b5118a976b9502ce682b52b735_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_35eeb8bec4b9d4605ef80064da3742b2df24e8676e1bba3a99e50d6d42006203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eeb8bec4b9d4605ef80064da3742b2df24e8676e1bba3a99e50d6d42006203->enter($__internal_35eeb8bec4b9d4605ef80064da3742b2df24e8676e1bba3a99e50d6d42006203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "        ";
        
        $__internal_35eeb8bec4b9d4605ef80064da3742b2df24e8676e1bba3a99e50d6d42006203->leave($__internal_35eeb8bec4b9d4605ef80064da3742b2df24e8676e1bba3a99e50d6d42006203_prof);

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
