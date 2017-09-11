<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_5f8d4ea98ffae510e08e3446061b45b83e4f4ffbb9c64b0f3b57e536cdabc195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8d4ea98ffae510e08e3446061b45b83e4f4ffbb9c64b0f3b57e536cdabc195->enter($__internal_5f8d4ea98ffae510e08e3446061b45b83e4f4ffbb9c64b0f3b57e536cdabc195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb6ac0e307777b005cfb1d5fe6e7a9f8ccc962cbb2176c0b963d56fe6d4b2dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6ac0e307777b005cfb1d5fe6e7a9f8ccc962cbb2176c0b963d56fe6d4b2dfa->enter($__internal_fb6ac0e307777b005cfb1d5fe6e7a9f8ccc962cbb2176c0b963d56fe6d4b2dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5f8d4ea98ffae510e08e3446061b45b83e4f4ffbb9c64b0f3b57e536cdabc195->leave($__internal_5f8d4ea98ffae510e08e3446061b45b83e4f4ffbb9c64b0f3b57e536cdabc195_prof);

        
        $__internal_fb6ac0e307777b005cfb1d5fe6e7a9f8ccc962cbb2176c0b963d56fe6d4b2dfa->leave($__internal_fb6ac0e307777b005cfb1d5fe6e7a9f8ccc962cbb2176c0b963d56fe6d4b2dfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
