<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_18849f79b020f7acf65fa415abdcad8a00e786828d7a240c51bbe82b760359e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18849f79b020f7acf65fa415abdcad8a00e786828d7a240c51bbe82b760359e6->enter($__internal_18849f79b020f7acf65fa415abdcad8a00e786828d7a240c51bbe82b760359e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9cd8e3632f4ea2cc6599a713ef11aae60515b845579323da71cbbfb385e91e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd8e3632f4ea2cc6599a713ef11aae60515b845579323da71cbbfb385e91e49->enter($__internal_9cd8e3632f4ea2cc6599a713ef11aae60515b845579323da71cbbfb385e91e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_18849f79b020f7acf65fa415abdcad8a00e786828d7a240c51bbe82b760359e6->leave($__internal_18849f79b020f7acf65fa415abdcad8a00e786828d7a240c51bbe82b760359e6_prof);

        
        $__internal_9cd8e3632f4ea2cc6599a713ef11aae60515b845579323da71cbbfb385e91e49->leave($__internal_9cd8e3632f4ea2cc6599a713ef11aae60515b845579323da71cbbfb385e91e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
