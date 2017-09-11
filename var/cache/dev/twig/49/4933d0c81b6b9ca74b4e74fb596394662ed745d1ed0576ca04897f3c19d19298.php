<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8664cc45cf9aac490d7a632ee8f3177546145b0f6685bc152d6ac9c0daaee95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8664cc45cf9aac490d7a632ee8f3177546145b0f6685bc152d6ac9c0daaee95f->enter($__internal_8664cc45cf9aac490d7a632ee8f3177546145b0f6685bc152d6ac9c0daaee95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_768d7dc482c98315e492c8645fa37acf8622e203eefabdb71c5a24453b789d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768d7dc482c98315e492c8645fa37acf8622e203eefabdb71c5a24453b789d70->enter($__internal_768d7dc482c98315e492c8645fa37acf8622e203eefabdb71c5a24453b789d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8664cc45cf9aac490d7a632ee8f3177546145b0f6685bc152d6ac9c0daaee95f->leave($__internal_8664cc45cf9aac490d7a632ee8f3177546145b0f6685bc152d6ac9c0daaee95f_prof);

        
        $__internal_768d7dc482c98315e492c8645fa37acf8622e203eefabdb71c5a24453b789d70->leave($__internal_768d7dc482c98315e492c8645fa37acf8622e203eefabdb71c5a24453b789d70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81168927b687be333c6f1577e1156dc9c919aaea1a5b01e7860f68149c575aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81168927b687be333c6f1577e1156dc9c919aaea1a5b01e7860f68149c575aad->enter($__internal_81168927b687be333c6f1577e1156dc9c919aaea1a5b01e7860f68149c575aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de17108ee1fb585b2353de02ebf7eef8b1a04a048f736c0acf2e73599ce52ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de17108ee1fb585b2353de02ebf7eef8b1a04a048f736c0acf2e73599ce52ec7->enter($__internal_de17108ee1fb585b2353de02ebf7eef8b1a04a048f736c0acf2e73599ce52ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_de17108ee1fb585b2353de02ebf7eef8b1a04a048f736c0acf2e73599ce52ec7->leave($__internal_de17108ee1fb585b2353de02ebf7eef8b1a04a048f736c0acf2e73599ce52ec7_prof);

        
        $__internal_81168927b687be333c6f1577e1156dc9c919aaea1a5b01e7860f68149c575aad->leave($__internal_81168927b687be333c6f1577e1156dc9c919aaea1a5b01e7860f68149c575aad_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_65dd977ab0f5e80bc44e535d203b883d6d44092dabf2c7c5d93231b2450435d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65dd977ab0f5e80bc44e535d203b883d6d44092dabf2c7c5d93231b2450435d1->enter($__internal_65dd977ab0f5e80bc44e535d203b883d6d44092dabf2c7c5d93231b2450435d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51f88a45d61978113a74162e1845f0f1da9e85bfd3f9cd1a8ad61559bf71f68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f88a45d61978113a74162e1845f0f1da9e85bfd3f9cd1a8ad61559bf71f68d->enter($__internal_51f88a45d61978113a74162e1845f0f1da9e85bfd3f9cd1a8ad61559bf71f68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_51f88a45d61978113a74162e1845f0f1da9e85bfd3f9cd1a8ad61559bf71f68d->leave($__internal_51f88a45d61978113a74162e1845f0f1da9e85bfd3f9cd1a8ad61559bf71f68d_prof);

        
        $__internal_65dd977ab0f5e80bc44e535d203b883d6d44092dabf2c7c5d93231b2450435d1->leave($__internal_65dd977ab0f5e80bc44e535d203b883d6d44092dabf2c7c5d93231b2450435d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
