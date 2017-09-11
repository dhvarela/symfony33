<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_24e55aa10c4fd54b6600ef51a35f198cb0cfb2a5226ec3fd14e78aa9122cb754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e55aa10c4fd54b6600ef51a35f198cb0cfb2a5226ec3fd14e78aa9122cb754->enter($__internal_24e55aa10c4fd54b6600ef51a35f198cb0cfb2a5226ec3fd14e78aa9122cb754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a5c9df42e425aec3341b2b50a4f6c30df95ba2c72a50cc3266210d24af2e91e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c9df42e425aec3341b2b50a4f6c30df95ba2c72a50cc3266210d24af2e91e0->enter($__internal_a5c9df42e425aec3341b2b50a4f6c30df95ba2c72a50cc3266210d24af2e91e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_24e55aa10c4fd54b6600ef51a35f198cb0cfb2a5226ec3fd14e78aa9122cb754->leave($__internal_24e55aa10c4fd54b6600ef51a35f198cb0cfb2a5226ec3fd14e78aa9122cb754_prof);

        
        $__internal_a5c9df42e425aec3341b2b50a4f6c30df95ba2c72a50cc3266210d24af2e91e0->leave($__internal_a5c9df42e425aec3341b2b50a4f6c30df95ba2c72a50cc3266210d24af2e91e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
