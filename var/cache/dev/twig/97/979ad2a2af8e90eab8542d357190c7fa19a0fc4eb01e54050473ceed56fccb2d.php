<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_ad5c927994cfd59187fab2a6643134fcb3eb76b9fdcd538ce3e2ed6b257d4ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5c927994cfd59187fab2a6643134fcb3eb76b9fdcd538ce3e2ed6b257d4ac6->enter($__internal_ad5c927994cfd59187fab2a6643134fcb3eb76b9fdcd538ce3e2ed6b257d4ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7e94f0c2dcf8f445af31d0c6616a67851ba39c278b251e5e6fe3170fc3a44fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e94f0c2dcf8f445af31d0c6616a67851ba39c278b251e5e6fe3170fc3a44fd3->enter($__internal_7e94f0c2dcf8f445af31d0c6616a67851ba39c278b251e5e6fe3170fc3a44fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ad5c927994cfd59187fab2a6643134fcb3eb76b9fdcd538ce3e2ed6b257d4ac6->leave($__internal_ad5c927994cfd59187fab2a6643134fcb3eb76b9fdcd538ce3e2ed6b257d4ac6_prof);

        
        $__internal_7e94f0c2dcf8f445af31d0c6616a67851ba39c278b251e5e6fe3170fc3a44fd3->leave($__internal_7e94f0c2dcf8f445af31d0c6616a67851ba39c278b251e5e6fe3170fc3a44fd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
