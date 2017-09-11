<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62a5956d27be800285f7a5cc5492913f39af5affd3bd9bf00af6b589b57c192d extends Twig_Template
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
        $__internal_e12261327ed322f57725f18f03bff873b7c65494b39d9c209f807f208c7e2704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12261327ed322f57725f18f03bff873b7c65494b39d9c209f807f208c7e2704->enter($__internal_e12261327ed322f57725f18f03bff873b7c65494b39d9c209f807f208c7e2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3cfdd5b8f994c9359a004f54b1e6d74f240935f7e33debe43dc4b4aa14a517a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfdd5b8f994c9359a004f54b1e6d74f240935f7e33debe43dc4b4aa14a517a6->enter($__internal_3cfdd5b8f994c9359a004f54b1e6d74f240935f7e33debe43dc4b4aa14a517a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e12261327ed322f57725f18f03bff873b7c65494b39d9c209f807f208c7e2704->leave($__internal_e12261327ed322f57725f18f03bff873b7c65494b39d9c209f807f208c7e2704_prof);

        
        $__internal_3cfdd5b8f994c9359a004f54b1e6d74f240935f7e33debe43dc4b4aa14a517a6->leave($__internal_3cfdd5b8f994c9359a004f54b1e6d74f240935f7e33debe43dc4b4aa14a517a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
