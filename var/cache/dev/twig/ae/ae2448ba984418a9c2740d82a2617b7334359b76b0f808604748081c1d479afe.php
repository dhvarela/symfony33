<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_c857d75c95fe5ab6d7cee306dc35255264bc48db69922562c07f19453dc556a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c857d75c95fe5ab6d7cee306dc35255264bc48db69922562c07f19453dc556a7->enter($__internal_c857d75c95fe5ab6d7cee306dc35255264bc48db69922562c07f19453dc556a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4d9294fcaa1d8f8cf0a3158a198ab311ff1a9aff9566e5fca76d9f029cf35ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9294fcaa1d8f8cf0a3158a198ab311ff1a9aff9566e5fca76d9f029cf35ef6->enter($__internal_4d9294fcaa1d8f8cf0a3158a198ab311ff1a9aff9566e5fca76d9f029cf35ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c857d75c95fe5ab6d7cee306dc35255264bc48db69922562c07f19453dc556a7->leave($__internal_c857d75c95fe5ab6d7cee306dc35255264bc48db69922562c07f19453dc556a7_prof);

        
        $__internal_4d9294fcaa1d8f8cf0a3158a198ab311ff1a9aff9566e5fca76d9f029cf35ef6->leave($__internal_4d9294fcaa1d8f8cf0a3158a198ab311ff1a9aff9566e5fca76d9f029cf35ef6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
