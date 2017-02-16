<?php

/* layout/menu.html.twig */
class __TwigTemplate_082b4d402f31158f30f57c1643e927cbe11b00da2967e51d3a72e889a82124a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a0fc0f679bb064b28de8c19c67bc5183ccf57151e5c3783e836b3ee01530d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0fc0f679bb064b28de8c19c67bc5183ccf57151e5c3783e836b3ee01530d54->enter($__internal_9a0fc0f679bb064b28de8c19c67bc5183ccf57151e5c3783e836b3ee01530d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_9a0fc0f679bb064b28de8c19c67bc5183ccf57151e5c3783e836b3ee01530d54->leave($__internal_9a0fc0f679bb064b28de8c19c67bc5183ccf57151e5c3783e836b3ee01530d54_prof);

    }

    public function block_navbar($context, array $blocks = array())
    {
        $__internal_eb202c96448f5b5f7ff084a3a4c45049171606712e24b029743093472024742b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb202c96448f5b5f7ff084a3a4c45049171606712e24b029743093472024742b->enter($__internal_eb202c96448f5b5f7ff084a3a4c45049171606712e24b029743093472024742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "\t\t<!-- Menu -->
\t\t\t\t\t<nav id=\"menu\">
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"landing.html\">Landing</a></li>
\t\t\t\t\t\t\t<li><a href=\"generic.html\">Generic</a></li>
\t\t\t\t\t\t\t<li><a href=\"elements.html\">Elements</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"actions vertical\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button special fit\">Get Started</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button fit\">Log In</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
";
        
        $__internal_eb202c96448f5b5f7ff084a3a4c45049171606712e24b029743093472024742b->leave($__internal_eb202c96448f5b5f7ff084a3a4c45049171606712e24b029743093472024742b_prof);

    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block navbar %}
\t\t<!-- Menu -->
\t\t\t\t\t<nav id=\"menu\">
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"landing.html\">Landing</a></li>
\t\t\t\t\t\t\t<li><a href=\"generic.html\">Generic</a></li>
\t\t\t\t\t\t\t<li><a href=\"elements.html\">Elements</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"actions vertical\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button special fit\">Get Started</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button fit\">Log In</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
{% endblock %}", "layout/menu.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/layout/menu.html.twig");
    }
}
