<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_ff91329819c601bfc7f5f1388f36fd1c1c27c577097d8a1185e1b816df1f7e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff91329819c601bfc7f5f1388f36fd1c1c27c577097d8a1185e1b816df1f7e84->enter($__internal_ff91329819c601bfc7f5f1388f36fd1c1c27c577097d8a1185e1b816df1f7e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_086b263121964b84bac1cf7155195e9dd169ea3a8f06313ca4910dc0c30b2f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086b263121964b84bac1cf7155195e9dd169ea3a8f06313ca4910dc0c30b2f78->enter($__internal_086b263121964b84bac1cf7155195e9dd169ea3a8f06313ca4910dc0c30b2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ff91329819c601bfc7f5f1388f36fd1c1c27c577097d8a1185e1b816df1f7e84->leave($__internal_ff91329819c601bfc7f5f1388f36fd1c1c27c577097d8a1185e1b816df1f7e84_prof);

        
        $__internal_086b263121964b84bac1cf7155195e9dd169ea3a8f06313ca4910dc0c30b2f78->leave($__internal_086b263121964b84bac1cf7155195e9dd169ea3a8f06313ca4910dc0c30b2f78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
