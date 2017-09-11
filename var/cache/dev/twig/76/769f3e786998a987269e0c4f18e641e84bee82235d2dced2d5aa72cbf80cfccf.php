<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_687fd97f810b96a1cd73b27c6f2cf97b5e567722b9c5e9f49cbc9e20b85551af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687fd97f810b96a1cd73b27c6f2cf97b5e567722b9c5e9f49cbc9e20b85551af->enter($__internal_687fd97f810b96a1cd73b27c6f2cf97b5e567722b9c5e9f49cbc9e20b85551af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_838dacd549a99c01d1b4fa0826aed0728962f3e76bfcf2ba0af457969ffa51f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838dacd549a99c01d1b4fa0826aed0728962f3e76bfcf2ba0af457969ffa51f6->enter($__internal_838dacd549a99c01d1b4fa0826aed0728962f3e76bfcf2ba0af457969ffa51f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_687fd97f810b96a1cd73b27c6f2cf97b5e567722b9c5e9f49cbc9e20b85551af->leave($__internal_687fd97f810b96a1cd73b27c6f2cf97b5e567722b9c5e9f49cbc9e20b85551af_prof);

        
        $__internal_838dacd549a99c01d1b4fa0826aed0728962f3e76bfcf2ba0af457969ffa51f6->leave($__internal_838dacd549a99c01d1b4fa0826aed0728962f3e76bfcf2ba0af457969ffa51f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
