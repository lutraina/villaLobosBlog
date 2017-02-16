<?php

/* biographie/index.html.twig */
class __TwigTemplate_2645d77ba71476ffeafd69b16c75e82d7220df29d03d06e608a3f4b4b6f569b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c61a8c6b75db138e73c5febf43eb819f5ab8dd21fd9954e146aab42d3782a460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61a8c6b75db138e73c5febf43eb819f5ab8dd21fd9954e146aab42d3782a460->enter($__internal_c61a8c6b75db138e73c5febf43eb819f5ab8dd21fd9954e146aab42d3782a460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "biographie/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c61a8c6b75db138e73c5febf43eb819f5ab8dd21fd9954e146aab42d3782a460->leave($__internal_c61a8c6b75db138e73c5febf43eb819f5ab8dd21fd9954e146aab42d3782a460_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_add614015d0ec023957414e265ac47176939207486a4b2ae7ef30a57f9c3a36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add614015d0ec023957414e265ac47176939207486a4b2ae7ef30a57f9c3a36a->enter($__internal_add614015d0ec023957414e265ac47176939207486a4b2ae7ef30a57f9c3a36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1>Biographies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biographies"]) ? $context["biographies"] : $this->getContext($context, "biographies")));
        foreach ($context['_seq'] as $context["_key"] => $context["biographie"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_show", array("id" => $this->getAttribute($context["biographie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["biographie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["biographie"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["biographie"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_show", array("id" => $this->getAttribute($context["biographie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_edit", array("id" => $this->getAttribute($context["biographie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biographie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_new");
        echo "\">Create a new biographie</a>
        </li>
    </ul>
";
        
        $__internal_add614015d0ec023957414e265ac47176939207486a4b2ae7ef30a57f9c3a36a->leave($__internal_add614015d0ec023957414e265ac47176939207486a4b2ae7ef30a57f9c3a36a_prof);

    }

    public function getTemplateName()
    {
        return "biographie/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  62 => 17,  56 => 16,  53 => 15,  49 => 14,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <h1>Biographies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for biographie in biographies %}
            <tr>
                <td><a href=\"{{ path('biographie_show', { 'id': biographie.id }) }}\">{{ biographie.id }}</a></td>
                <td>{{ biographie.titre }}</td>
                <td>{{ biographie.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('biographie_show', { 'id': biographie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('biographie_edit', { 'id': biographie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('biographie_new') }}\">Create a new biographie</a>
        </li>
    </ul>
{% endblock %}
", "biographie/index.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/biographie/index.html.twig");
    }
}
