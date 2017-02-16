<?php

/* biographie/show.html.twig */
class __TwigTemplate_5cf321768f73234d81e59735dbc9fcef3ed62a10afe58751e9fc26d4d508b064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "biographie/show.html.twig", 1);
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
        $__internal_e1a04f44424064a43680bb28010bbc689d1bb262b1b66e9eb97eec73e0a0c1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a04f44424064a43680bb28010bbc689d1bb262b1b66e9eb97eec73e0a0c1e0->enter($__internal_e1a04f44424064a43680bb28010bbc689d1bb262b1b66e9eb97eec73e0a0c1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "biographie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a04f44424064a43680bb28010bbc689d1bb262b1b66e9eb97eec73e0a0c1e0->leave($__internal_e1a04f44424064a43680bb28010bbc689d1bb262b1b66e9eb97eec73e0a0c1e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92ba156d795556359cc118452eab687978c09f2dc647cd4770336ad6dc5caa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ba156d795556359cc118452eab687978c09f2dc647cd4770336ad6dc5caa87->enter($__internal_92ba156d795556359cc118452eab687978c09f2dc647cd4770336ad6dc5caa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biographie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biographie"]) ? $context["biographie"] : $this->getContext($context, "biographie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biographie"]) ? $context["biographie"] : $this->getContext($context, "biographie")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biographie"]) ? $context["biographie"] : $this->getContext($context, "biographie")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biographie_edit", array("id" => $this->getAttribute((isset($context["biographie"]) ? $context["biographie"] : $this->getContext($context, "biographie")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_92ba156d795556359cc118452eab687978c09f2dc647cd4770336ad6dc5caa87->leave($__internal_92ba156d795556359cc118452eab687978c09f2dc647cd4770336ad6dc5caa87_prof);

    }

    public function getTemplateName()
    {
        return "biographie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Biographie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ biographie.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ biographie.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ biographie.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('biographie_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('biographie_edit', { 'id': biographie.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "biographie/show.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/biographie/show.html.twig");
    }
}
