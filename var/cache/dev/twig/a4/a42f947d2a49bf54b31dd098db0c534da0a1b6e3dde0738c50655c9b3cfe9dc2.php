<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_cd6ce64d2a8591a8d72ea1a6216562d8d9313770f6ec91d1c0ae77988dedb6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6ce64d2a8591a8d72ea1a6216562d8d9313770f6ec91d1c0ae77988dedb6bd->enter($__internal_cd6ce64d2a8591a8d72ea1a6216562d8d9313770f6ec91d1c0ae77988dedb6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4994c6064604d31176f0992218530ed9cacbfe10f59d43864a43aeabe690f16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4994c6064604d31176f0992218530ed9cacbfe10f59d43864a43aeabe690f16e->enter($__internal_4994c6064604d31176f0992218530ed9cacbfe10f59d43864a43aeabe690f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cd6ce64d2a8591a8d72ea1a6216562d8d9313770f6ec91d1c0ae77988dedb6bd->leave($__internal_cd6ce64d2a8591a8d72ea1a6216562d8d9313770f6ec91d1c0ae77988dedb6bd_prof);

        
        $__internal_4994c6064604d31176f0992218530ed9cacbfe10f59d43864a43aeabe690f16e->leave($__internal_4994c6064604d31176f0992218530ed9cacbfe10f59d43864a43aeabe690f16e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
