<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_db66de055739c56c5cd5bb7c75e4783c4595ab1b51e7dcf625b5fe20dc504d10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ce9e64c8aa2b6d7d7f40fa35fd393eeb931f3e48718ce935bec466bfc7011d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9e64c8aa2b6d7d7f40fa35fd393eeb931f3e48718ce935bec466bfc7011d73->enter($__internal_ce9e64c8aa2b6d7d7f40fa35fd393eeb931f3e48718ce935bec466bfc7011d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce9e64c8aa2b6d7d7f40fa35fd393eeb931f3e48718ce935bec466bfc7011d73->leave($__internal_ce9e64c8aa2b6d7d7f40fa35fd393eeb931f3e48718ce935bec466bfc7011d73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e966a8cf57f7f4e8698aac52364e777c5961805aab2a03bd211f8f5492f98be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e966a8cf57f7f4e8698aac52364e777c5961805aab2a03bd211f8f5492f98be5->enter($__internal_e966a8cf57f7f4e8698aac52364e777c5961805aab2a03bd211f8f5492f98be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e966a8cf57f7f4e8698aac52364e777c5961805aab2a03bd211f8f5492f98be5->leave($__internal_e966a8cf57f7f4e8698aac52364e777c5961805aab2a03bd211f8f5492f98be5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d1f362d866d2ef135b8eaaf86d3d554bc6afef4b1283aa9112ff5d4ef0f2e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1f362d866d2ef135b8eaaf86d3d554bc6afef4b1283aa9112ff5d4ef0f2e3c->enter($__internal_4d1f362d866d2ef135b8eaaf86d3d554bc6afef4b1283aa9112ff5d4ef0f2e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4d1f362d866d2ef135b8eaaf86d3d554bc6afef4b1283aa9112ff5d4ef0f2e3c->leave($__internal_4d1f362d866d2ef135b8eaaf86d3d554bc6afef4b1283aa9112ff5d4ef0f2e3c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5a654748e1a2c8b705363bfa48328ca03da39e8991e6eece0fffe97b3c099a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a654748e1a2c8b705363bfa48328ca03da39e8991e6eece0fffe97b3c099a1->enter($__internal_d5a654748e1a2c8b705363bfa48328ca03da39e8991e6eece0fffe97b3c099a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d5a654748e1a2c8b705363bfa48328ca03da39e8991e6eece0fffe97b3c099a1->leave($__internal_d5a654748e1a2c8b705363bfa48328ca03da39e8991e6eece0fffe97b3c099a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/lucianahembert/Documents/sites/symfony1-Villa-Orange/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
