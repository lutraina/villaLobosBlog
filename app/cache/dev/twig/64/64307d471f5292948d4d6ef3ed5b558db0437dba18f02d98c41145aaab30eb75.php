<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_88730c5e0b8e01a8cdcf93497cad1089bd0c555340c048ea3aa22d1c97254e9b extends Twig_Template
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
        $__internal_782752fcc5e8e2332c82a1811c6aac03bc22917b26f3b0d63c28d402af4cf433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782752fcc5e8e2332c82a1811c6aac03bc22917b26f3b0d63c28d402af4cf433->enter($__internal_782752fcc5e8e2332c82a1811c6aac03bc22917b26f3b0d63c28d402af4cf433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_782752fcc5e8e2332c82a1811c6aac03bc22917b26f3b0d63c28d402af4cf433->leave($__internal_782752fcc5e8e2332c82a1811c6aac03bc22917b26f3b0d63c28d402af4cf433_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3886dc500e758d6fd8e865472b4d61cc75e930f22896c983be200f5a694553d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3886dc500e758d6fd8e865472b4d61cc75e930f22896c983be200f5a694553d3->enter($__internal_3886dc500e758d6fd8e865472b4d61cc75e930f22896c983be200f5a694553d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3886dc500e758d6fd8e865472b4d61cc75e930f22896c983be200f5a694553d3->leave($__internal_3886dc500e758d6fd8e865472b4d61cc75e930f22896c983be200f5a694553d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ed898ff53fd5b8ec4f4f7d7bd5f8fcc98418faadd09d4c75fed20f88723c1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed898ff53fd5b8ec4f4f7d7bd5f8fcc98418faadd09d4c75fed20f88723c1d4->enter($__internal_8ed898ff53fd5b8ec4f4f7d7bd5f8fcc98418faadd09d4c75fed20f88723c1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ed898ff53fd5b8ec4f4f7d7bd5f8fcc98418faadd09d4c75fed20f88723c1d4->leave($__internal_8ed898ff53fd5b8ec4f4f7d7bd5f8fcc98418faadd09d4c75fed20f88723c1d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c264374c420c2cb73e43edcf624e1c772992b22b857fa0e6b20599f5541d3b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c264374c420c2cb73e43edcf624e1c772992b22b857fa0e6b20599f5541d3b95->enter($__internal_c264374c420c2cb73e43edcf624e1c772992b22b857fa0e6b20599f5541d3b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c264374c420c2cb73e43edcf624e1c772992b22b857fa0e6b20599f5541d3b95->leave($__internal_c264374c420c2cb73e43edcf624e1c772992b22b857fa0e6b20599f5541d3b95_prof);

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
