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
        $__internal_31ebdf0a00d306daa43eadb330b8654beed17010ea32730cf0da43eaa0cb467a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ebdf0a00d306daa43eadb330b8654beed17010ea32730cf0da43eaa0cb467a->enter($__internal_31ebdf0a00d306daa43eadb330b8654beed17010ea32730cf0da43eaa0cb467a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_31ebdf0a00d306daa43eadb330b8654beed17010ea32730cf0da43eaa0cb467a->leave($__internal_31ebdf0a00d306daa43eadb330b8654beed17010ea32730cf0da43eaa0cb467a_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_743421301c7e9b7fbcff5407830187afba198f00a50e310538eaa8d09b149676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743421301c7e9b7fbcff5407830187afba198f00a50e310538eaa8d09b149676->enter($__internal_743421301c7e9b7fbcff5407830187afba198f00a50e310538eaa8d09b149676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <!-- Footer -->
    <footer id=\"footer\">
            <div class=\"inner\">
                    <ul class=\"icons\">
                            <li><a href=\"#\" class=\"icon alt fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-linkedin\"><span class=\"label\">LinkedIn</span></a></li>
                    </ul>
                    <ul class=\"copyright\">
                            <li>&copy; Untitled</li><li>Design: <a href=\"https://html5up.net\">HTML5 UP</a></li>
                    </ul>
            </div>
    </footer>

";
        
        $__internal_743421301c7e9b7fbcff5407830187afba198f00a50e310538eaa8d09b149676->leave($__internal_743421301c7e9b7fbcff5407830187afba198f00a50e310538eaa8d09b149676_prof);

    }

    public function getTemplateName()
    {
        return "layout/footer.html.twig";
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
        return new Twig_Source("{% block footer %}
    <!-- Footer -->
    <footer id=\"footer\">
            <div class=\"inner\">
                    <ul class=\"icons\">
                            <li><a href=\"#\" class=\"icon alt fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
                            <li><a href=\"#\" class=\"icon alt fa-linkedin\"><span class=\"label\">LinkedIn</span></a></li>
                    </ul>
                    <ul class=\"copyright\">
                            <li>&copy; Untitled</li><li>Design: <a href=\"https://html5up.net\">HTML5 UP</a></li>
                    </ul>
            </div>
    </footer>

{% endblock %}
", "layout/footer.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/layout/footer.html.twig");
    }
}
