<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e260ad0fa9ca8220d94ca971f08be33491535f4bbef8bc7d9449d4ff34d684be extends Twig_Template
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
        $__internal_9812841296b69ab8adc2ee75213c93b74717e77dd2e7e6b9a7786f4180b809a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9812841296b69ab8adc2ee75213c93b74717e77dd2e7e6b9a7786f4180b809a8->enter($__internal_9812841296b69ab8adc2ee75213c93b74717e77dd2e7e6b9a7786f4180b809a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9812841296b69ab8adc2ee75213c93b74717e77dd2e7e6b9a7786f4180b809a8->leave($__internal_9812841296b69ab8adc2ee75213c93b74717e77dd2e7e6b9a7786f4180b809a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a60dcf666fbd3ceadfcc144a633fc8bf30dba3ad4560ce0530332ac9da6a987f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60dcf666fbd3ceadfcc144a633fc8bf30dba3ad4560ce0530332ac9da6a987f->enter($__internal_a60dcf666fbd3ceadfcc144a633fc8bf30dba3ad4560ce0530332ac9da6a987f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a60dcf666fbd3ceadfcc144a633fc8bf30dba3ad4560ce0530332ac9da6a987f->leave($__internal_a60dcf666fbd3ceadfcc144a633fc8bf30dba3ad4560ce0530332ac9da6a987f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d6f145439d1d12cb7d52af636d3bcde365f243056f2341b529be7f5378cebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6f145439d1d12cb7d52af636d3bcde365f243056f2341b529be7f5378cebf7->enter($__internal_9d6f145439d1d12cb7d52af636d3bcde365f243056f2341b529be7f5378cebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d6f145439d1d12cb7d52af636d3bcde365f243056f2341b529be7f5378cebf7->leave($__internal_9d6f145439d1d12cb7d52af636d3bcde365f243056f2341b529be7f5378cebf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6f6005b4542daf410b7640a4fe3b1167b1679ddc8868310b1c5d489d40369fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f6005b4542daf410b7640a4fe3b1167b1679ddc8868310b1c5d489d40369fa->enter($__internal_a6f6005b4542daf410b7640a4fe3b1167b1679ddc8868310b1c5d489d40369fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6f6005b4542daf410b7640a4fe3b1167b1679ddc8868310b1c5d489d40369fa->leave($__internal_a6f6005b4542daf410b7640a4fe3b1167b1679ddc8868310b1c5d489d40369fa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/lucianahembert/Documents/sites/symfony1-Villa-Orange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
