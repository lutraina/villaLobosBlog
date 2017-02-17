<?php

/* biographie/new.html.twig */
class __TwigTemplate_bd1bc548859b6062393f92b49fc3ffffa62d0be2f030838bb63866942fa2cfee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "biographie/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c2c9d8d3e78e979c2a24276bbe527508018ddf9dc5c5cf27c27b7be1daa5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c2c9d8d3e78e979c2a24276bbe527508018ddf9dc5c5cf27c27b7be1daa5cb->enter($__internal_82c2c9d8d3e78e979c2a24276bbe527508018ddf9dc5c5cf27c27b7be1daa5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "biographie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c2c9d8d3e78e979c2a24276bbe527508018ddf9dc5c5cf27c27b7be1daa5cb->leave($__internal_82c2c9d8d3e78e979c2a24276bbe527508018ddf9dc5c5cf27c27b7be1daa5cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6545f20e86475ddc8b27721e83e2f8cf5ba57ca56b6281d374e9b41467eefc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6545f20e86475ddc8b27721e83e2f8cf5ba57ca56b6281d374e9b41467eefc1->enter($__internal_b6545f20e86475ddc8b27721e83e2f8cf5ba57ca56b6281d374e9b41467eefc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biographie creation</h1>

    ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Blog\ServingBundle\Twig\AppExtension')->isEmail("mail"), "html", null, true);
        echo "
    
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b6545f20e86475ddc8b27721e83e2f8cf5ba57ca56b6281d374e9b41467eefc1->leave($__internal_b6545f20e86475ddc8b27721e83e2f8cf5ba57ca56b6281d374e9b41467eefc1_prof);

    }

    public function getTemplateName()
    {
        return "biographie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  58 => 11,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Biographie creation</h1>

    {{ checkIfEmail('mail') }}
    
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('biographie_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "biographie/new.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/biographie/new.html.twig");
    }
}
