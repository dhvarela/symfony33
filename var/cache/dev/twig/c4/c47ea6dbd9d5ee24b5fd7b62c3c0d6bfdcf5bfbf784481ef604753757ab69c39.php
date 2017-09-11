<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f2ae79c890e84f9839eb441b394d37571fd9675f62cfdfec5bead6d27b42d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2ae79c890e84f9839eb441b394d37571fd9675f62cfdfec5bead6d27b42d1f->enter($__internal_3f2ae79c890e84f9839eb441b394d37571fd9675f62cfdfec5bead6d27b42d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f718582b911119bee9f487764335ff0ffc20e69f5a176781f1569ad6ca334701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f718582b911119bee9f487764335ff0ffc20e69f5a176781f1569ad6ca334701->enter($__internal_f718582b911119bee9f487764335ff0ffc20e69f5a176781f1569ad6ca334701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f2ae79c890e84f9839eb441b394d37571fd9675f62cfdfec5bead6d27b42d1f->leave($__internal_3f2ae79c890e84f9839eb441b394d37571fd9675f62cfdfec5bead6d27b42d1f_prof);

        
        $__internal_f718582b911119bee9f487764335ff0ffc20e69f5a176781f1569ad6ca334701->leave($__internal_f718582b911119bee9f487764335ff0ffc20e69f5a176781f1569ad6ca334701_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_92412d804e73ce4df2fb837908f196ccce436792806123283764d48647c0e9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92412d804e73ce4df2fb837908f196ccce436792806123283764d48647c0e9c7->enter($__internal_92412d804e73ce4df2fb837908f196ccce436792806123283764d48647c0e9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5a6b67c43a86ceb305a637a08a44746bf8e6bc551681826a605f4c5b040b4587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6b67c43a86ceb305a637a08a44746bf8e6bc551681826a605f4c5b040b4587->enter($__internal_5a6b67c43a86ceb305a637a08a44746bf8e6bc551681826a605f4c5b040b4587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5a6b67c43a86ceb305a637a08a44746bf8e6bc551681826a605f4c5b040b4587->leave($__internal_5a6b67c43a86ceb305a637a08a44746bf8e6bc551681826a605f4c5b040b4587_prof);

        
        $__internal_92412d804e73ce4df2fb837908f196ccce436792806123283764d48647c0e9c7->leave($__internal_92412d804e73ce4df2fb837908f196ccce436792806123283764d48647c0e9c7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51f927ce4c05d5cb64820d200488d57f956955cacb8471325d4415f36b425052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f927ce4c05d5cb64820d200488d57f956955cacb8471325d4415f36b425052->enter($__internal_51f927ce4c05d5cb64820d200488d57f956955cacb8471325d4415f36b425052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06a3a8cb3ff8445c421ed13e32e321e9ac7f08a97e920d5c2c2e0f07f99fb6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a3a8cb3ff8445c421ed13e32e321e9ac7f08a97e920d5c2c2e0f07f99fb6aa->enter($__internal_06a3a8cb3ff8445c421ed13e32e321e9ac7f08a97e920d5c2c2e0f07f99fb6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_06a3a8cb3ff8445c421ed13e32e321e9ac7f08a97e920d5c2c2e0f07f99fb6aa->leave($__internal_06a3a8cb3ff8445c421ed13e32e321e9ac7f08a97e920d5c2c2e0f07f99fb6aa_prof);

        
        $__internal_51f927ce4c05d5cb64820d200488d57f956955cacb8471325d4415f36b425052->leave($__internal_51f927ce4c05d5cb64820d200488d57f956955cacb8471325d4415f36b425052_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
