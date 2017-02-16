<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e65debf38f1aeee40c8c368102947d5603f01f72371c84de8ce117cc88a76326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fa1ec22f799ac627979e8a87cea307bfcfb6a8fa73a8e4c028a3d101bcb4d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa1ec22f799ac627979e8a87cea307bfcfb6a8fa73a8e4c028a3d101bcb4d89->enter($__internal_8fa1ec22f799ac627979e8a87cea307bfcfb6a8fa73a8e4c028a3d101bcb4d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa1ec22f799ac627979e8a87cea307bfcfb6a8fa73a8e4c028a3d101bcb4d89->leave($__internal_8fa1ec22f799ac627979e8a87cea307bfcfb6a8fa73a8e4c028a3d101bcb4d89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9344ae3d52e54fc63443da7ba997661e57f7e0f3e4d2373a3b61b79a8d16a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9344ae3d52e54fc63443da7ba997661e57f7e0f3e4d2373a3b61b79a8d16a15->enter($__internal_c9344ae3d52e54fc63443da7ba997661e57f7e0f3e4d2373a3b61b79a8d16a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9344ae3d52e54fc63443da7ba997661e57f7e0f3e4d2373a3b61b79a8d16a15->leave($__internal_c9344ae3d52e54fc63443da7ba997661e57f7e0f3e4d2373a3b61b79a8d16a15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e99b7fba96edb7dcc317c8ac58fbf135177177f9a16fee46b1f435312bad414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e99b7fba96edb7dcc317c8ac58fbf135177177f9a16fee46b1f435312bad414->enter($__internal_5e99b7fba96edb7dcc317c8ac58fbf135177177f9a16fee46b1f435312bad414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e99b7fba96edb7dcc317c8ac58fbf135177177f9a16fee46b1f435312bad414->leave($__internal_5e99b7fba96edb7dcc317c8ac58fbf135177177f9a16fee46b1f435312bad414_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c664a2df170097053319ed72606c20063ab7e431772d0fdb5d0ad837a508d078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c664a2df170097053319ed72606c20063ab7e431772d0fdb5d0ad837a508d078->enter($__internal_c664a2df170097053319ed72606c20063ab7e431772d0fdb5d0ad837a508d078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c664a2df170097053319ed72606c20063ab7e431772d0fdb5d0ad837a508d078->leave($__internal_c664a2df170097053319ed72606c20063ab7e431772d0fdb5d0ad837a508d078_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
