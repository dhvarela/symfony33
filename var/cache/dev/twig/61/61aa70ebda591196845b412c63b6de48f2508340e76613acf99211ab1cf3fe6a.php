<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d851f2e88206afd775c879a81d472d79f5f0112e7fcd98ca143285efcd3b9731 extends Twig_Template
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
        $__internal_4c4f13f4f764fb502a16fb75c0d14a740822b31afaf5d60b66477a7b1f64ae17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4f13f4f764fb502a16fb75c0d14a740822b31afaf5d60b66477a7b1f64ae17->enter($__internal_4c4f13f4f764fb502a16fb75c0d14a740822b31afaf5d60b66477a7b1f64ae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_93d84d4170f46550b114f9f0447336ef9cc700fc7e488fad9dd66e3bb37a0aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d84d4170f46550b114f9f0447336ef9cc700fc7e488fad9dd66e3bb37a0aee->enter($__internal_93d84d4170f46550b114f9f0447336ef9cc700fc7e488fad9dd66e3bb37a0aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4c4f13f4f764fb502a16fb75c0d14a740822b31afaf5d60b66477a7b1f64ae17->leave($__internal_4c4f13f4f764fb502a16fb75c0d14a740822b31afaf5d60b66477a7b1f64ae17_prof);

        
        $__internal_93d84d4170f46550b114f9f0447336ef9cc700fc7e488fad9dd66e3bb37a0aee->leave($__internal_93d84d4170f46550b114f9f0447336ef9cc700fc7e488fad9dd66e3bb37a0aee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
