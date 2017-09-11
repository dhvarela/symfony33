<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_9b872e720aa2078e055e579dc21b99bf60d9c8d303f085d18fd9d6ef08fa7065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b872e720aa2078e055e579dc21b99bf60d9c8d303f085d18fd9d6ef08fa7065->enter($__internal_9b872e720aa2078e055e579dc21b99bf60d9c8d303f085d18fd9d6ef08fa7065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e1d7006c068f75ee07166fa0fa8a75d5c32344bbc86ee2951c9728e4181d3924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d7006c068f75ee07166fa0fa8a75d5c32344bbc86ee2951c9728e4181d3924->enter($__internal_e1d7006c068f75ee07166fa0fa8a75d5c32344bbc86ee2951c9728e4181d3924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9b872e720aa2078e055e579dc21b99bf60d9c8d303f085d18fd9d6ef08fa7065->leave($__internal_9b872e720aa2078e055e579dc21b99bf60d9c8d303f085d18fd9d6ef08fa7065_prof);

        
        $__internal_e1d7006c068f75ee07166fa0fa8a75d5c32344bbc86ee2951c9728e4181d3924->leave($__internal_e1d7006c068f75ee07166fa0fa8a75d5c32344bbc86ee2951c9728e4181d3924_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
