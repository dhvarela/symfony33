<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e876faec86e22871fbe6263d863d1a4bae4889fe581494695867b856b5aa9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e876faec86e22871fbe6263d863d1a4bae4889fe581494695867b856b5aa9ae->enter($__internal_3e876faec86e22871fbe6263d863d1a4bae4889fe581494695867b856b5aa9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8791af9ed8d82f95ce1a96a170e714d4feaeeb93f7ca1ceda86f88a3d7ac6136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8791af9ed8d82f95ce1a96a170e714d4feaeeb93f7ca1ceda86f88a3d7ac6136->enter($__internal_8791af9ed8d82f95ce1a96a170e714d4feaeeb93f7ca1ceda86f88a3d7ac6136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3e876faec86e22871fbe6263d863d1a4bae4889fe581494695867b856b5aa9ae->leave($__internal_3e876faec86e22871fbe6263d863d1a4bae4889fe581494695867b856b5aa9ae_prof);

        
        $__internal_8791af9ed8d82f95ce1a96a170e714d4feaeeb93f7ca1ceda86f88a3d7ac6136->leave($__internal_8791af9ed8d82f95ce1a96a170e714d4feaeeb93f7ca1ceda86f88a3d7ac6136_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d338a6722d2e871932674606fefdf10e8db4207bca88d1ecb49478223228e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d338a6722d2e871932674606fefdf10e8db4207bca88d1ecb49478223228e1f->enter($__internal_8d338a6722d2e871932674606fefdf10e8db4207bca88d1ecb49478223228e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_405c97ad2a1b6fffba3adba3dff48ee2a20edb231619edb4afbab471d2db86ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405c97ad2a1b6fffba3adba3dff48ee2a20edb231619edb4afbab471d2db86ff->enter($__internal_405c97ad2a1b6fffba3adba3dff48ee2a20edb231619edb4afbab471d2db86ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_405c97ad2a1b6fffba3adba3dff48ee2a20edb231619edb4afbab471d2db86ff->leave($__internal_405c97ad2a1b6fffba3adba3dff48ee2a20edb231619edb4afbab471d2db86ff_prof);

        
        $__internal_8d338a6722d2e871932674606fefdf10e8db4207bca88d1ecb49478223228e1f->leave($__internal_8d338a6722d2e871932674606fefdf10e8db4207bca88d1ecb49478223228e1f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
