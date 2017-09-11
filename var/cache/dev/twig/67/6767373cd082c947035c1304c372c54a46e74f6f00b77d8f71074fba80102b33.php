<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_4d46a89e430629d5e9d8fe60ec89e03c2307abdda90f4ecb95292ac5c83515e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d46a89e430629d5e9d8fe60ec89e03c2307abdda90f4ecb95292ac5c83515e6->enter($__internal_4d46a89e430629d5e9d8fe60ec89e03c2307abdda90f4ecb95292ac5c83515e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_eb380b399bb2790b001f8f98c9f76de29a35aedd1a28ed64fecf5339c865485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb380b399bb2790b001f8f98c9f76de29a35aedd1a28ed64fecf5339c865485b->enter($__internal_eb380b399bb2790b001f8f98c9f76de29a35aedd1a28ed64fecf5339c865485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4d46a89e430629d5e9d8fe60ec89e03c2307abdda90f4ecb95292ac5c83515e6->leave($__internal_4d46a89e430629d5e9d8fe60ec89e03c2307abdda90f4ecb95292ac5c83515e6_prof);

        
        $__internal_eb380b399bb2790b001f8f98c9f76de29a35aedd1a28ed64fecf5339c865485b->leave($__internal_eb380b399bb2790b001f8f98c9f76de29a35aedd1a28ed64fecf5339c865485b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
