<?php

/* layout/footer.html.twig */
class __TwigTemplate_8895400e2e9579fc2bedac971f12334a172a95f52aa0a87d5b6020dfb9246752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0642db4d1e79289925461184355c4121e31dc49ce981fc200f86628fffede2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0642db4d1e79289925461184355c4121e31dc49ce981fc200f86628fffede2af->enter($__internal_0642db4d1e79289925461184355c4121e31dc49ce981fc200f86628fffede2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_0642db4d1e79289925461184355c4121e31dc49ce981fc200f86628fffede2af->leave($__internal_0642db4d1e79289925461184355c4121e31dc49ce981fc200f86628fffede2af_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_7db2f25e7e8e341738d42efb7238972884d487f2a51f6c54c3c8a5ddc5328e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db2f25e7e8e341738d42efb7238972884d487f2a51f6c54c3c8a5ddc5328e8b->enter($__internal_7db2f25e7e8e341738d42efb7238972884d487f2a51f6c54c3c8a5ddc5328e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"left\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MyLabelBundle/images/Sncf.png"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"Logo sncf\" width=\"58\" height=\"30\">&copy;2016</div>
    <div class=\"middle\"><p class=\"text-muted\">OPTIM'Services - Production IT - Pôle Cyber-sécurité</p></div>
    <div class=\"right\"><p class=\"text-muted\">Contact/Product Owner : <a href='mailto:jerome.vivier@sncf.fr?subject=[MyLabel]'>Jérome Vivier</a></p></div>
  </div>
</footer>
";
        
        $__internal_7db2f25e7e8e341738d42efb7238972884d487f2a51f6c54c3c8a5ddc5328e8b->leave($__internal_7db2f25e7e8e341738d42efb7238972884d487f2a51f6c54c3c8a5ddc5328e8b_prof);

    }

    public function getTemplateName()
    {
        return "layout/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"left\"><img src=\"{{ asset(\"bundles/MyLabelBundle/images/Sncf.png\") }}\" class=\"img-rounded\" alt=\"Logo sncf\" width=\"58\" height=\"30\">&copy;2016</div>
    <div class=\"middle\"><p class=\"text-muted\">OPTIM'Services - Production IT - Pôle Cyber-sécurité</p></div>
    <div class=\"right\"><p class=\"text-muted\">Contact/Product Owner : <a href='mailto:jerome.vivier@sncf.fr?subject=[MyLabel]'>Jérome Vivier</a></p></div>
  </div>
</footer>
{% endblock %}
", "layout/footer.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/layout/footer.html.twig");
    }
}
