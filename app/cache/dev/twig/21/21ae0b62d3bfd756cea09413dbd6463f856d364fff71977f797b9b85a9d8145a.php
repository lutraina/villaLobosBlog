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
        $__internal_e5f95d10ac5b4599a1c41acfb50c679b02534ca616c125bce317f0b364d4e4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f95d10ac5b4599a1c41acfb50c679b02534ca616c125bce317f0b364d4e4a9->enter($__internal_e5f95d10ac5b4599a1c41acfb50c679b02534ca616c125bce317f0b364d4e4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f95d10ac5b4599a1c41acfb50c679b02534ca616c125bce317f0b364d4e4a9->leave($__internal_e5f95d10ac5b4599a1c41acfb50c679b02534ca616c125bce317f0b364d4e4a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3672ed90c62c51cdf8c5ffac09543b54a7477b848c93729b8525741d9722f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3672ed90c62c51cdf8c5ffac09543b54a7477b848c93729b8525741d9722f3e->enter($__internal_e3672ed90c62c51cdf8c5ffac09543b54a7477b848c93729b8525741d9722f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e3672ed90c62c51cdf8c5ffac09543b54a7477b848c93729b8525741d9722f3e->leave($__internal_e3672ed90c62c51cdf8c5ffac09543b54a7477b848c93729b8525741d9722f3e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b896370c5e389ab28601c53cf6c374a83b5fbc78126cae3cd8b93495c0ce6581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b896370c5e389ab28601c53cf6c374a83b5fbc78126cae3cd8b93495c0ce6581->enter($__internal_b896370c5e389ab28601c53cf6c374a83b5fbc78126cae3cd8b93495c0ce6581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b896370c5e389ab28601c53cf6c374a83b5fbc78126cae3cd8b93495c0ce6581->leave($__internal_b896370c5e389ab28601c53cf6c374a83b5fbc78126cae3cd8b93495c0ce6581_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ec36afc9f8224bf54d82ce22a62924f5d6fb60b0680dbb585a8d06e88f5147f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec36afc9f8224bf54d82ce22a62924f5d6fb60b0680dbb585a8d06e88f5147f->enter($__internal_4ec36afc9f8224bf54d82ce22a62924f5d6fb60b0680dbb585a8d06e88f5147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ec36afc9f8224bf54d82ce22a62924f5d6fb60b0680dbb585a8d06e88f5147f->leave($__internal_4ec36afc9f8224bf54d82ce22a62924f5d6fb60b0680dbb585a8d06e88f5147f_prof);

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
