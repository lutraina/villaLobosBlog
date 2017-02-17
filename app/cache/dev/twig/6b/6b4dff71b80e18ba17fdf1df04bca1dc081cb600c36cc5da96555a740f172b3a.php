<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_92158565b18d2a93045179aa286ae42785f7b5c3722db571c4383cf5aba0c1e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96d0f1f29538a909aa961cb90da0c6af279dc1b5ddcba8b3fcec7ea326fc126b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d0f1f29538a909aa961cb90da0c6af279dc1b5ddcba8b3fcec7ea326fc126b->enter($__internal_96d0f1f29538a909aa961cb90da0c6af279dc1b5ddcba8b3fcec7ea326fc126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96d0f1f29538a909aa961cb90da0c6af279dc1b5ddcba8b3fcec7ea326fc126b->leave($__internal_96d0f1f29538a909aa961cb90da0c6af279dc1b5ddcba8b3fcec7ea326fc126b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9505ee925046bab3ac44dd4a9295feea1ba0246bc862f63e2cda40132dc2f138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9505ee925046bab3ac44dd4a9295feea1ba0246bc862f63e2cda40132dc2f138->enter($__internal_9505ee925046bab3ac44dd4a9295feea1ba0246bc862f63e2cda40132dc2f138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9505ee925046bab3ac44dd4a9295feea1ba0246bc862f63e2cda40132dc2f138->leave($__internal_9505ee925046bab3ac44dd4a9295feea1ba0246bc862f63e2cda40132dc2f138_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65d45b09456d7dd6c5f801f10127ac3f993bd5e26a62867528f1558ffef12a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d45b09456d7dd6c5f801f10127ac3f993bd5e26a62867528f1558ffef12a3b->enter($__internal_65d45b09456d7dd6c5f801f10127ac3f993bd5e26a62867528f1558ffef12a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65d45b09456d7dd6c5f801f10127ac3f993bd5e26a62867528f1558ffef12a3b->leave($__internal_65d45b09456d7dd6c5f801f10127ac3f993bd5e26a62867528f1558ffef12a3b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b8669325f0cc83d9d99886297790e04479fd811bfab4712537381dbd972ad98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8669325f0cc83d9d99886297790e04479fd811bfab4712537381dbd972ad98->enter($__internal_0b8669325f0cc83d9d99886297790e04479fd811bfab4712537381dbd972ad98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b8669325f0cc83d9d99886297790e04479fd811bfab4712537381dbd972ad98->leave($__internal_0b8669325f0cc83d9d99886297790e04479fd811bfab4712537381dbd972ad98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
