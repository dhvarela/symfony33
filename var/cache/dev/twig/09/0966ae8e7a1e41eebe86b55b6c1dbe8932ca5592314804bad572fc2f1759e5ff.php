<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_738bb2a1d796e92eb783994df8d11bb507edea7046073ed08e524ed4197d12e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738bb2a1d796e92eb783994df8d11bb507edea7046073ed08e524ed4197d12e5->enter($__internal_738bb2a1d796e92eb783994df8d11bb507edea7046073ed08e524ed4197d12e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_31b5cc27dfd06a3803d9433028642f16662638e2f03fcad5c459100424b06712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b5cc27dfd06a3803d9433028642f16662638e2f03fcad5c459100424b06712->enter($__internal_31b5cc27dfd06a3803d9433028642f16662638e2f03fcad5c459100424b06712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_738bb2a1d796e92eb783994df8d11bb507edea7046073ed08e524ed4197d12e5->leave($__internal_738bb2a1d796e92eb783994df8d11bb507edea7046073ed08e524ed4197d12e5_prof);

        
        $__internal_31b5cc27dfd06a3803d9433028642f16662638e2f03fcad5c459100424b06712->leave($__internal_31b5cc27dfd06a3803d9433028642f16662638e2f03fcad5c459100424b06712_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
