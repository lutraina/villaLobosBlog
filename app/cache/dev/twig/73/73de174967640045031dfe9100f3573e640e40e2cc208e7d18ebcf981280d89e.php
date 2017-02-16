<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_44d7aaacedba412a7f062ef48165a2c53378ab79f470508074436931d1f8c4f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75d83c3c33a2eca0ea13e98b81f03be94eec4f9f1ae8d50ba204c957f40ad2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d83c3c33a2eca0ea13e98b81f03be94eec4f9f1ae8d50ba204c957f40ad2c5->enter($__internal_75d83c3c33a2eca0ea13e98b81f03be94eec4f9f1ae8d50ba204c957f40ad2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_75d83c3c33a2eca0ea13e98b81f03be94eec4f9f1ae8d50ba204c957f40ad2c5->leave($__internal_75d83c3c33a2eca0ea13e98b81f03be94eec4f9f1ae8d50ba204c957f40ad2c5_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
