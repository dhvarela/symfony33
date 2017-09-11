<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77eb36a635134a04eba039262d7c8c2bc15655ca55e66f0c7836f87950f2c41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77eb36a635134a04eba039262d7c8c2bc15655ca55e66f0c7836f87950f2c41c->enter($__internal_77eb36a635134a04eba039262d7c8c2bc15655ca55e66f0c7836f87950f2c41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ff115447c3db195ce59d46e888cc62c87e54a0e1193bd2317ad315baa8c15f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff115447c3db195ce59d46e888cc62c87e54a0e1193bd2317ad315baa8c15f20->enter($__internal_ff115447c3db195ce59d46e888cc62c87e54a0e1193bd2317ad315baa8c15f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77eb36a635134a04eba039262d7c8c2bc15655ca55e66f0c7836f87950f2c41c->leave($__internal_77eb36a635134a04eba039262d7c8c2bc15655ca55e66f0c7836f87950f2c41c_prof);

        
        $__internal_ff115447c3db195ce59d46e888cc62c87e54a0e1193bd2317ad315baa8c15f20->leave($__internal_ff115447c3db195ce59d46e888cc62c87e54a0e1193bd2317ad315baa8c15f20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5670e3c76ff0050f3a7266d90da4e45405d22c142f96daeb67fc3a2a0d11a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5670e3c76ff0050f3a7266d90da4e45405d22c142f96daeb67fc3a2a0d11a81->enter($__internal_c5670e3c76ff0050f3a7266d90da4e45405d22c142f96daeb67fc3a2a0d11a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f8ea93da71f6e78f83b314ef73c1010e29d5575dab3103667516b880ab801a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8ea93da71f6e78f83b314ef73c1010e29d5575dab3103667516b880ab801a1->enter($__internal_4f8ea93da71f6e78f83b314ef73c1010e29d5575dab3103667516b880ab801a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f8ea93da71f6e78f83b314ef73c1010e29d5575dab3103667516b880ab801a1->leave($__internal_4f8ea93da71f6e78f83b314ef73c1010e29d5575dab3103667516b880ab801a1_prof);

        
        $__internal_c5670e3c76ff0050f3a7266d90da4e45405d22c142f96daeb67fc3a2a0d11a81->leave($__internal_c5670e3c76ff0050f3a7266d90da4e45405d22c142f96daeb67fc3a2a0d11a81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88c41d6283d84e390da48701c88c4a6d5e85f9fd4c2ef6ac1afde98b66666914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c41d6283d84e390da48701c88c4a6d5e85f9fd4c2ef6ac1afde98b66666914->enter($__internal_88c41d6283d84e390da48701c88c4a6d5e85f9fd4c2ef6ac1afde98b66666914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6adfbd4f99f1a65d65b54e2457c83197d3e73ce6bf6f8342b77d3cb60edb3841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adfbd4f99f1a65d65b54e2457c83197d3e73ce6bf6f8342b77d3cb60edb3841->enter($__internal_6adfbd4f99f1a65d65b54e2457c83197d3e73ce6bf6f8342b77d3cb60edb3841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6adfbd4f99f1a65d65b54e2457c83197d3e73ce6bf6f8342b77d3cb60edb3841->leave($__internal_6adfbd4f99f1a65d65b54e2457c83197d3e73ce6bf6f8342b77d3cb60edb3841_prof);

        
        $__internal_88c41d6283d84e390da48701c88c4a6d5e85f9fd4c2ef6ac1afde98b66666914->leave($__internal_88c41d6283d84e390da48701c88c4a6d5e85f9fd4c2ef6ac1afde98b66666914_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6313897f654193bf8976cc7e9a72dfbf7a12cd6bfdc5c38b1a3f5bee90323aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6313897f654193bf8976cc7e9a72dfbf7a12cd6bfdc5c38b1a3f5bee90323aff->enter($__internal_6313897f654193bf8976cc7e9a72dfbf7a12cd6bfdc5c38b1a3f5bee90323aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7254c14ed5aafc27c4ec6d87a35eda537ea48fbfb008c172d2b83d48e10e1615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7254c14ed5aafc27c4ec6d87a35eda537ea48fbfb008c172d2b83d48e10e1615->enter($__internal_7254c14ed5aafc27c4ec6d87a35eda537ea48fbfb008c172d2b83d48e10e1615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7254c14ed5aafc27c4ec6d87a35eda537ea48fbfb008c172d2b83d48e10e1615->leave($__internal_7254c14ed5aafc27c4ec6d87a35eda537ea48fbfb008c172d2b83d48e10e1615_prof);

        
        $__internal_6313897f654193bf8976cc7e9a72dfbf7a12cd6bfdc5c38b1a3f5bee90323aff->leave($__internal_6313897f654193bf8976cc7e9a72dfbf7a12cd6bfdc5c38b1a3f5bee90323aff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
