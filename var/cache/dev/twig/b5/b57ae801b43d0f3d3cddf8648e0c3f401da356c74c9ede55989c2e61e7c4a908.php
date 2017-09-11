<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6a70998442965774cc90829eee21db4b47643f5cea3c586197cc7950b57ea4af extends Twig_Template
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
        $__internal_0450c2cc99667d900d9458e0771a5ca087151ec3932c2e0a65655fc56b617e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0450c2cc99667d900d9458e0771a5ca087151ec3932c2e0a65655fc56b617e8f->enter($__internal_0450c2cc99667d900d9458e0771a5ca087151ec3932c2e0a65655fc56b617e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_30f62cbbb2f10d00ab607b1e1f4a134b04c7cc2274c00fc3655be2cfb2e551e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f62cbbb2f10d00ab607b1e1f4a134b04c7cc2274c00fc3655be2cfb2e551e9->enter($__internal_30f62cbbb2f10d00ab607b1e1f4a134b04c7cc2274c00fc3655be2cfb2e551e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0450c2cc99667d900d9458e0771a5ca087151ec3932c2e0a65655fc56b617e8f->leave($__internal_0450c2cc99667d900d9458e0771a5ca087151ec3932c2e0a65655fc56b617e8f_prof);

        
        $__internal_30f62cbbb2f10d00ab607b1e1f4a134b04c7cc2274c00fc3655be2cfb2e551e9->leave($__internal_30f62cbbb2f10d00ab607b1e1f4a134b04c7cc2274c00fc3655be2cfb2e551e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
