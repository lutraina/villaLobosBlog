<?php

/* BlogServingBundle:Default:index.html.twig */
class __TwigTemplate_46042a995b667a7056a67db6cc4bbc018d4399a731bf43b44255007c3d672bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.body.html.twig", "BlogServingBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'banner' => array($this, 'block_banner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7289065760d890152746e366d4a4992a3e8352881ccd01c0779f7a7dc3f88992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7289065760d890152746e366d4a4992a3e8352881ccd01c0779f7a7dc3f88992->enter($__internal_7289065760d890152746e366d4a4992a3e8352881ccd01c0779f7a7dc3f88992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogServingBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7289065760d890152746e366d4a4992a3e8352881ccd01c0779f7a7dc3f88992->leave($__internal_7289065760d890152746e366d4a4992a3e8352881ccd01c0779f7a7dc3f88992_prof);

    }

    // line 4
    public function block_banner($context, array $blocks = array())
    {
        $__internal_a8d8e6e737f3dffc64327807d7cc2f3400d3e7d9320058edac244ac1fea077e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d8e6e737f3dffc64327807d7cc2f3400d3e7d9320058edac244ac1fea077e4->enter($__internal_a8d8e6e737f3dffc64327807d7cc2f3400d3e7d9320058edac244ac1fea077e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("BlogServingBundle:Builder:mainMenu");
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Blog\ServingBundle\Twig\AppExtension')->isSpam((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))), "html", null, true);
        echo "

";
        
        $__internal_a8d8e6e737f3dffc64327807d7cc2f3400d3e7d9320058edac244ac1fea077e4->leave($__internal_a8d8e6e737f3dffc64327807d7cc2f3400d3e7d9320058edac244ac1fea077e4_prof);

    }

    public function getTemplateName()
    {
        return "BlogServingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.body.html.twig' %}


{% block banner %}

{{ knp_menu_render('BlogServingBundle:Builder:mainMenu') }}
{{ checkIfSpam(text) }}

{% endblock %}




", "BlogServingBundle:Default:index.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/src/Blog/ServingBundle/Resources/views/Default/index.html.twig");
    }
}
