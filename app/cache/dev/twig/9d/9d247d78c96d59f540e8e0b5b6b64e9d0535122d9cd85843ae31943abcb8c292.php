<?php

/* ::base.body.html.twig */
class __TwigTemplate_76357377e1929665ff4182765ec4f5c0d14dd3e7d451de77e8092c25ca49dc5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::base.body.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e315a540b552f79e8629302f3017fe394601b6740a563f435ded4a508bc7d6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e315a540b552f79e8629302f3017fe394601b6740a563f435ded4a508bc7d6f3->enter($__internal_e315a540b552f79e8629302f3017fe394601b6740a563f435ded4a508bc7d6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.body.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e315a540b552f79e8629302f3017fe394601b6740a563f435ded4a508bc7d6f3->leave($__internal_e315a540b552f79e8629302f3017fe394601b6740a563f435ded4a508bc7d6f3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2613cbf2e514acbeb0a464dbfcb7bbf4286d6c512f77c1dc5a85d25d80bd797a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2613cbf2e514acbeb0a464dbfcb7bbf4286d6c512f77c1dc5a85d25d80bd797a->enter($__internal_2613cbf2e514acbeb0a464dbfcb7bbf4286d6c512f77c1dc5a85d25d80bd797a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "                
                <!--BODY-->
                
\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\">

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\" class=\"alt\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo\"><strong>Forty</strong> <span>by HTML5 UP</span></a>
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<a href=\"#menu\">Menu</a>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</header>

\t\t\t\t";
        // line 19
        $this->displayBlock('navbar', $context, $blocks);
        // line 22
        echo "
\t\t\t\t<!-- Banner -->
\t\t\t\t\t<section id=\"banner\" class=\"major\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<h1>Hello, Heitor Villa Lobos</h1>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>A blog on this awesome brasilian composer</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#one\" class=\"button next scrolly\">Get Started</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t<!-- Main -->
\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- One -->
\t\t\t\t\t\t\t<section id=\"one\" class=\"tiles\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic01.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Bachianas Brasileiras</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Ipsum dolor sit amet</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
                                                                            <img height=\"400px\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/BlogServing/Resources/images/pic02.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Ciclo Brasileiro</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>feugiat amet tempus</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic03.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Magna</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem etiam nullam</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic04.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Ipsum</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Nisl sed aliquam</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic05.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Consequat</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Ipsum dolor sit amet</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic06.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Etiam</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Feugiat amet tempus</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t<!-- Two -->
\t\t\t\t\t\t\t<section id=\"two\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h2>Massa libero</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"landing.html\" class=\"button next\">Get Started</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t</div>

\t\t\t\t<!-- Contact -->
\t\t\t\t\t<section id=\"contact\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"field half first\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"6\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
\t\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Clear\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"split\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<div class=\"contact-method\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon alt fa-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">information@untitled.tld</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<div class=\"contact-method\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon alt fa-phone\"></span>
\t\t\t\t\t\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t\t\t\t\t\t<span>(000) 000-0000 x12387</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<div class=\"contact-method\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon alt fa-home\"></span>
\t\t\t\t\t\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t\t\t\t\t\t<span>1234 Somewhere Road #5432<br />
\t\t\t\t\t\t\t\t\t\tNashville, TN 00000<br />
\t\t\t\t\t\t\t\t\t\tUnited States of America</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t";
        // line 166
        $this->displayBlock('footer', $context, $blocks);
        // line 168
        echo "        
\t\t\t</div>
                
                
                
                
                <!--FIN BODY-->
                
                 ";
        
        $__internal_2613cbf2e514acbeb0a464dbfcb7bbf4286d6c512f77c1dc5a85d25d80bd797a->leave($__internal_2613cbf2e514acbeb0a464dbfcb7bbf4286d6c512f77c1dc5a85d25d80bd797a_prof);

    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_1ecbfd411bfe9234f6dbda8a90c6b5d980a2dedba83e2f676e6534290296093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecbfd411bfe9234f6dbda8a90c6b5d980a2dedba83e2f676e6534290296093d->enter($__internal_1ecbfd411bfe9234f6dbda8a90c6b5d980a2dedba83e2f676e6534290296093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 20
        echo "                                    ";
        $this->loadTemplate("layout/menu.html.twig", "::base.body.html.twig", 20)->display($context);
        // line 21
        echo "                                ";
        
        $__internal_1ecbfd411bfe9234f6dbda8a90c6b5d980a2dedba83e2f676e6534290296093d->leave($__internal_1ecbfd411bfe9234f6dbda8a90c6b5d980a2dedba83e2f676e6534290296093d_prof);

    }

    // line 166
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0328795f2f58d81c50bf7c39850e626b3be7b3476081b5683e9a0a77d49b6cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0328795f2f58d81c50bf7c39850e626b3be7b3476081b5683e9a0a77d49b6cea->enter($__internal_0328795f2f58d81c50bf7c39850e626b3be7b3476081b5683e9a0a77d49b6cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 167
        echo "                                    ";
        $this->loadTemplate("layout/footer.html.twig", "::base.body.html.twig", 167)->display($context);
        // line 168
        echo "                                ";
        
        $__internal_0328795f2f58d81c50bf7c39850e626b3be7b3476081b5683e9a0a77d49b6cea->leave($__internal_0328795f2f58d81c50bf7c39850e626b3be7b3476081b5683e9a0a77d49b6cea_prof);

    }

    public function getTemplateName()
    {
        return "::base.body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 168,  248 => 167,  242 => 166,  235 => 21,  232 => 20,  226 => 19,  211 => 168,  209 => 166,  94 => 54,  60 => 22,  58 => 19,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'base.html.twig' %}

 
 {% block body %}
                
                <!--BODY-->
                
\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\">

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\" class=\"alt\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo\"><strong>Forty</strong> <span>by HTML5 UP</span></a>
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<a href=\"#menu\">Menu</a>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</header>

\t\t\t\t{% block navbar %}
                                    {%  include 'layout/menu.html.twig' %}
                                {% endblock navbar %}

\t\t\t\t<!-- Banner -->
\t\t\t\t\t<section id=\"banner\" class=\"major\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<h1>Hello, Heitor Villa Lobos</h1>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>A blog on this awesome brasilian composer</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#one\" class=\"button next scrolly\">Get Started</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t<!-- Main -->
\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- One -->
\t\t\t\t\t\t\t<section id=\"one\" class=\"tiles\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic01.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Bachianas Brasileiras</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Ipsum dolor sit amet</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
                                                                            <img height=\"400px\" src=\"{{ asset('bundles/BlogServing/Resources/images/pic02.jpg') }}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Ciclo Brasileiro</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>feugiat amet tempus</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic03.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Magna</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem etiam nullam</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic04.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Ipsum</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Nisl sed aliquam</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic05.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Consequat</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Ipsum dolor sit amet</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/pic06.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"landing.html\" class=\"link\">Etiam</a></h3>
\t\t\t\t\t\t\t\t\t\t<p>Feugiat amet tempus</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t<!-- Two -->
\t\t\t\t\t\t\t<section id=\"two\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h2>Massa libero</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"landing.html\" class=\"button next\">Get Started</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t</div>

\t\t\t\t<!-- Contact -->
\t\t\t\t\t<section id=\"contact\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"field half first\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"6\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
\t\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Clear\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"split\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<div class=\"contact-method\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon alt fa-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">information@untitled.tld</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<div class=\"contact-method\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon alt fa-phone\"></span>
\t\t\t\t\t\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t\t\t\t\t\t<span>(000) 000-0000 x12387</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<div class=\"contact-method\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon alt fa-home\"></span>
\t\t\t\t\t\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t\t\t\t\t\t<span>1234 Somewhere Road #5432<br />
\t\t\t\t\t\t\t\t\t\tNashville, TN 00000<br />
\t\t\t\t\t\t\t\t\t\tUnited States of America</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t{% block footer %}
                                    {%  include 'layout/footer.html.twig' %}
                                {% endblock %}        
\t\t\t</div>
                
                
                
                
                <!--FIN BODY-->
                
                 {% endblock %}", "::base.body.html.twig", "/Users/lucianahembert/Documents/sites/symfony1VillaOrange/app/Resources/views/base.body.html.twig");
    }
}
