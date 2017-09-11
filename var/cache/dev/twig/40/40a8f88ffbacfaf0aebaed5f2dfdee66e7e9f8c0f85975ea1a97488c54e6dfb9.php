<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a2cbdb18bc7486f336c97fb4976ccf741c7376bdf28083f5cbd79916b62ecd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cbdb18bc7486f336c97fb4976ccf741c7376bdf28083f5cbd79916b62ecd0f->enter($__internal_a2cbdb18bc7486f336c97fb4976ccf741c7376bdf28083f5cbd79916b62ecd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f0d4b9701a2a5ab2e4b27c49391f2bd6d6604cb1c680e1bdfe2cb808d357904f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d4b9701a2a5ab2e4b27c49391f2bd6d6604cb1c680e1bdfe2cb808d357904f->enter($__internal_f0d4b9701a2a5ab2e4b27c49391f2bd6d6604cb1c680e1bdfe2cb808d357904f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2cbdb18bc7486f336c97fb4976ccf741c7376bdf28083f5cbd79916b62ecd0f->leave($__internal_a2cbdb18bc7486f336c97fb4976ccf741c7376bdf28083f5cbd79916b62ecd0f_prof);

        
        $__internal_f0d4b9701a2a5ab2e4b27c49391f2bd6d6604cb1c680e1bdfe2cb808d357904f->leave($__internal_f0d4b9701a2a5ab2e4b27c49391f2bd6d6604cb1c680e1bdfe2cb808d357904f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2a2fa6b0003173ba7794a9faa785a2fb2f4e128e67d7e72893ce9ffd1deb474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a2fa6b0003173ba7794a9faa785a2fb2f4e128e67d7e72893ce9ffd1deb474->enter($__internal_b2a2fa6b0003173ba7794a9faa785a2fb2f4e128e67d7e72893ce9ffd1deb474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27173654f01366f0f67e6c42cd4fabc41655279b6634dd2bcbd7a7cc3578c6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27173654f01366f0f67e6c42cd4fabc41655279b6634dd2bcbd7a7cc3578c6d3->enter($__internal_27173654f01366f0f67e6c42cd4fabc41655279b6634dd2bcbd7a7cc3578c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_27173654f01366f0f67e6c42cd4fabc41655279b6634dd2bcbd7a7cc3578c6d3->leave($__internal_27173654f01366f0f67e6c42cd4fabc41655279b6634dd2bcbd7a7cc3578c6d3_prof);

        
        $__internal_b2a2fa6b0003173ba7794a9faa785a2fb2f4e128e67d7e72893ce9ffd1deb474->leave($__internal_b2a2fa6b0003173ba7794a9faa785a2fb2f4e128e67d7e72893ce9ffd1deb474_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7151433079dd7f90333931d1f5ff5f58c2dc232d5fff92a98ed7cb5d27675f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7151433079dd7f90333931d1f5ff5f58c2dc232d5fff92a98ed7cb5d27675f30->enter($__internal_7151433079dd7f90333931d1f5ff5f58c2dc232d5fff92a98ed7cb5d27675f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03440f7aba0cb7f43894dec3a3d358cffab733a5976af58bc527213f02199ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03440f7aba0cb7f43894dec3a3d358cffab733a5976af58bc527213f02199ad9->enter($__internal_03440f7aba0cb7f43894dec3a3d358cffab733a5976af58bc527213f02199ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_03440f7aba0cb7f43894dec3a3d358cffab733a5976af58bc527213f02199ad9->leave($__internal_03440f7aba0cb7f43894dec3a3d358cffab733a5976af58bc527213f02199ad9_prof);

        
        $__internal_7151433079dd7f90333931d1f5ff5f58c2dc232d5fff92a98ed7cb5d27675f30->leave($__internal_7151433079dd7f90333931d1f5ff5f58c2dc232d5fff92a98ed7cb5d27675f30_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2520e07a2885cb13dd7ab779095d5a063b4c17155e17a9384176e275e4f17662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2520e07a2885cb13dd7ab779095d5a063b4c17155e17a9384176e275e4f17662->enter($__internal_2520e07a2885cb13dd7ab779095d5a063b4c17155e17a9384176e275e4f17662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_363001c4955d30a4ac0b44880343da3f44fbb0b4fe530f172b8307ef4e67a65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363001c4955d30a4ac0b44880343da3f44fbb0b4fe530f172b8307ef4e67a65b->enter($__internal_363001c4955d30a4ac0b44880343da3f44fbb0b4fe530f172b8307ef4e67a65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_363001c4955d30a4ac0b44880343da3f44fbb0b4fe530f172b8307ef4e67a65b->leave($__internal_363001c4955d30a4ac0b44880343da3f44fbb0b4fe530f172b8307ef4e67a65b_prof);

        
        $__internal_2520e07a2885cb13dd7ab779095d5a063b4c17155e17a9384176e275e4f17662->leave($__internal_2520e07a2885cb13dd7ab779095d5a063b4c17155e17a9384176e275e4f17662_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
