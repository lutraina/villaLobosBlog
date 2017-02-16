<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_823a3a3c4d6c4f5e78feac34641dbadace6f2423c8ce1f3dbc884b027f41bcef extends Twig_Template
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
        $__internal_5629ce0c0c78240b203244049e06a36b1fcbf3799df0740fac02a93909792b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5629ce0c0c78240b203244049e06a36b1fcbf3799df0740fac02a93909792b1c->enter($__internal_5629ce0c0c78240b203244049e06a36b1fcbf3799df0740fac02a93909792b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5629ce0c0c78240b203244049e06a36b1fcbf3799df0740fac02a93909792b1c->leave($__internal_5629ce0c0c78240b203244049e06a36b1fcbf3799df0740fac02a93909792b1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b466e412f1eb0371f908df5159d6c466803e827b177a00e176de190edc616555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b466e412f1eb0371f908df5159d6c466803e827b177a00e176de190edc616555->enter($__internal_b466e412f1eb0371f908df5159d6c466803e827b177a00e176de190edc616555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b466e412f1eb0371f908df5159d6c466803e827b177a00e176de190edc616555->leave($__internal_b466e412f1eb0371f908df5159d6c466803e827b177a00e176de190edc616555_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b55ebdcffd165520bf8d4da5beb27b0280a11fee5000d15faa2a09b24cc35cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55ebdcffd165520bf8d4da5beb27b0280a11fee5000d15faa2a09b24cc35cf4->enter($__internal_b55ebdcffd165520bf8d4da5beb27b0280a11fee5000d15faa2a09b24cc35cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b55ebdcffd165520bf8d4da5beb27b0280a11fee5000d15faa2a09b24cc35cf4->leave($__internal_b55ebdcffd165520bf8d4da5beb27b0280a11fee5000d15faa2a09b24cc35cf4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3aeb7a0b5035421445d07a5381a59a7b872122001563877e51b7c6b83c165d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aeb7a0b5035421445d07a5381a59a7b872122001563877e51b7c6b83c165d5->enter($__internal_b3aeb7a0b5035421445d07a5381a59a7b872122001563877e51b7c6b83c165d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3aeb7a0b5035421445d07a5381a59a7b872122001563877e51b7c6b83c165d5->leave($__internal_b3aeb7a0b5035421445d07a5381a59a7b872122001563877e51b7c6b83c165d5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/lucianahembert/Documents/sites/symfony1-Villa-Orange/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
