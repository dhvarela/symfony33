<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_0093f1827f47005e1b7975f4a472071aeda57dc3018dd4eb321b256b9c9d3015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0093f1827f47005e1b7975f4a472071aeda57dc3018dd4eb321b256b9c9d3015->enter($__internal_0093f1827f47005e1b7975f4a472071aeda57dc3018dd4eb321b256b9c9d3015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f2b0972a079b066ebbba71253909a8287ae4ca1dde9607c2d78afd88c518afc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b0972a079b066ebbba71253909a8287ae4ca1dde9607c2d78afd88c518afc2->enter($__internal_f2b0972a079b066ebbba71253909a8287ae4ca1dde9607c2d78afd88c518afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0093f1827f47005e1b7975f4a472071aeda57dc3018dd4eb321b256b9c9d3015->leave($__internal_0093f1827f47005e1b7975f4a472071aeda57dc3018dd4eb321b256b9c9d3015_prof);

        
        $__internal_f2b0972a079b066ebbba71253909a8287ae4ca1dde9607c2d78afd88c518afc2->leave($__internal_f2b0972a079b066ebbba71253909a8287ae4ca1dde9607c2d78afd88c518afc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
