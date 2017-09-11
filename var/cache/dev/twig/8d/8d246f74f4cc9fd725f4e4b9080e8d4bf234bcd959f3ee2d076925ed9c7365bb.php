<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_6303988b155a252c6ab1df233eaa88be875c7b4747d0fed1c103d3fee7804acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6303988b155a252c6ab1df233eaa88be875c7b4747d0fed1c103d3fee7804acd->enter($__internal_6303988b155a252c6ab1df233eaa88be875c7b4747d0fed1c103d3fee7804acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c6b8952979a73eeb4d86f7ed3b9864a7d5f0eb989f7516b9e17b83e527baf782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b8952979a73eeb4d86f7ed3b9864a7d5f0eb989f7516b9e17b83e527baf782->enter($__internal_c6b8952979a73eeb4d86f7ed3b9864a7d5f0eb989f7516b9e17b83e527baf782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6303988b155a252c6ab1df233eaa88be875c7b4747d0fed1c103d3fee7804acd->leave($__internal_6303988b155a252c6ab1df233eaa88be875c7b4747d0fed1c103d3fee7804acd_prof);

        
        $__internal_c6b8952979a73eeb4d86f7ed3b9864a7d5f0eb989f7516b9e17b83e527baf782->leave($__internal_c6b8952979a73eeb4d86f7ed3b9864a7d5f0eb989f7516b9e17b83e527baf782_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
