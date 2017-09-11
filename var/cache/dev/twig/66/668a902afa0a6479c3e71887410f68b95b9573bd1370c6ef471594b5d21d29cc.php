<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a312865dff10bc0533f3c37be125a17e91023579d9711e8d478be100cd8c786 extends Twig_Template
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
        $__internal_7c96301515e495bb0a4137deae6be9b8a94673cdb221eaac7a3825359d34396b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c96301515e495bb0a4137deae6be9b8a94673cdb221eaac7a3825359d34396b->enter($__internal_7c96301515e495bb0a4137deae6be9b8a94673cdb221eaac7a3825359d34396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b8af32ab13082fb5d7dd8abe09cb0dc7f745ef48a97c42b848bb405d00206101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8af32ab13082fb5d7dd8abe09cb0dc7f745ef48a97c42b848bb405d00206101->enter($__internal_b8af32ab13082fb5d7dd8abe09cb0dc7f745ef48a97c42b848bb405d00206101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7c96301515e495bb0a4137deae6be9b8a94673cdb221eaac7a3825359d34396b->leave($__internal_7c96301515e495bb0a4137deae6be9b8a94673cdb221eaac7a3825359d34396b_prof);

        
        $__internal_b8af32ab13082fb5d7dd8abe09cb0dc7f745ef48a97c42b848bb405d00206101->leave($__internal_b8af32ab13082fb5d7dd8abe09cb0dc7f745ef48a97c42b848bb405d00206101_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
