<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a54dfc79b99d3c369c4707f803ba8b0423a4f8c743c54a41bb9b0628a7505eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54dfc79b99d3c369c4707f803ba8b0423a4f8c743c54a41bb9b0628a7505eaa->enter($__internal_a54dfc79b99d3c369c4707f803ba8b0423a4f8c743c54a41bb9b0628a7505eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_eb6120d8a56b138bf00dd1354391ae175fd123ba36629e212385cc1ea2b9c2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6120d8a56b138bf00dd1354391ae175fd123ba36629e212385cc1ea2b9c2f3->enter($__internal_eb6120d8a56b138bf00dd1354391ae175fd123ba36629e212385cc1ea2b9c2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54dfc79b99d3c369c4707f803ba8b0423a4f8c743c54a41bb9b0628a7505eaa->leave($__internal_a54dfc79b99d3c369c4707f803ba8b0423a4f8c743c54a41bb9b0628a7505eaa_prof);

        
        $__internal_eb6120d8a56b138bf00dd1354391ae175fd123ba36629e212385cc1ea2b9c2f3->leave($__internal_eb6120d8a56b138bf00dd1354391ae175fd123ba36629e212385cc1ea2b9c2f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbc530d2a055677bca459cbdb20db9f506ecd1ff5f415813396879edc19b02d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc530d2a055677bca459cbdb20db9f506ecd1ff5f415813396879edc19b02d0->enter($__internal_dbc530d2a055677bca459cbdb20db9f506ecd1ff5f415813396879edc19b02d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a24a810b612bdc74dc47bc88ef42a0eaf82563bd6f0eff965a687d1358cd8469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24a810b612bdc74dc47bc88ef42a0eaf82563bd6f0eff965a687d1358cd8469->enter($__internal_a24a810b612bdc74dc47bc88ef42a0eaf82563bd6f0eff965a687d1358cd8469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a24a810b612bdc74dc47bc88ef42a0eaf82563bd6f0eff965a687d1358cd8469->leave($__internal_a24a810b612bdc74dc47bc88ef42a0eaf82563bd6f0eff965a687d1358cd8469_prof);

        
        $__internal_dbc530d2a055677bca459cbdb20db9f506ecd1ff5f415813396879edc19b02d0->leave($__internal_dbc530d2a055677bca459cbdb20db9f506ecd1ff5f415813396879edc19b02d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e566f52c0b93fa427b41c0d4d1f51b3d28ad41f822af818e1393a36af3b9e920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e566f52c0b93fa427b41c0d4d1f51b3d28ad41f822af818e1393a36af3b9e920->enter($__internal_e566f52c0b93fa427b41c0d4d1f51b3d28ad41f822af818e1393a36af3b9e920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00391279c363356ac7d67602bd843e6b3f1291b257b2623bd11471b01ec6a1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00391279c363356ac7d67602bd843e6b3f1291b257b2623bd11471b01ec6a1e5->enter($__internal_00391279c363356ac7d67602bd843e6b3f1291b257b2623bd11471b01ec6a1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_00391279c363356ac7d67602bd843e6b3f1291b257b2623bd11471b01ec6a1e5->leave($__internal_00391279c363356ac7d67602bd843e6b3f1291b257b2623bd11471b01ec6a1e5_prof);

        
        $__internal_e566f52c0b93fa427b41c0d4d1f51b3d28ad41f822af818e1393a36af3b9e920->leave($__internal_e566f52c0b93fa427b41c0d4d1f51b3d28ad41f822af818e1393a36af3b9e920_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
