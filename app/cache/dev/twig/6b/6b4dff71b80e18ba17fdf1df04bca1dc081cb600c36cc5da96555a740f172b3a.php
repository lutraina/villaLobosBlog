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
        $__internal_149fb4711fd6fc6ebad9fc4cb9d8c22589a0d24cd71f3f2e6e0c82b7314c558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149fb4711fd6fc6ebad9fc4cb9d8c22589a0d24cd71f3f2e6e0c82b7314c558c->enter($__internal_149fb4711fd6fc6ebad9fc4cb9d8c22589a0d24cd71f3f2e6e0c82b7314c558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149fb4711fd6fc6ebad9fc4cb9d8c22589a0d24cd71f3f2e6e0c82b7314c558c->leave($__internal_149fb4711fd6fc6ebad9fc4cb9d8c22589a0d24cd71f3f2e6e0c82b7314c558c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68230ae82452d40ca90a9da678a0802e135efe9f6d42147f479c4dcaa8bf1522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68230ae82452d40ca90a9da678a0802e135efe9f6d42147f479c4dcaa8bf1522->enter($__internal_68230ae82452d40ca90a9da678a0802e135efe9f6d42147f479c4dcaa8bf1522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_68230ae82452d40ca90a9da678a0802e135efe9f6d42147f479c4dcaa8bf1522->leave($__internal_68230ae82452d40ca90a9da678a0802e135efe9f6d42147f479c4dcaa8bf1522_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40749fee09ef3b1b583d88578e680b246c12c897531e4852e4d6e0ea0b0b3f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40749fee09ef3b1b583d88578e680b246c12c897531e4852e4d6e0ea0b0b3f6e->enter($__internal_40749fee09ef3b1b583d88578e680b246c12c897531e4852e4d6e0ea0b0b3f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40749fee09ef3b1b583d88578e680b246c12c897531e4852e4d6e0ea0b0b3f6e->leave($__internal_40749fee09ef3b1b583d88578e680b246c12c897531e4852e4d6e0ea0b0b3f6e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4058c69811fcb5dfa43a75caa80d3c53cc5dcef3027822e560d3e02c7984874b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4058c69811fcb5dfa43a75caa80d3c53cc5dcef3027822e560d3e02c7984874b->enter($__internal_4058c69811fcb5dfa43a75caa80d3c53cc5dcef3027822e560d3e02c7984874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4058c69811fcb5dfa43a75caa80d3c53cc5dcef3027822e560d3e02c7984874b->leave($__internal_4058c69811fcb5dfa43a75caa80d3c53cc5dcef3027822e560d3e02c7984874b_prof);

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
