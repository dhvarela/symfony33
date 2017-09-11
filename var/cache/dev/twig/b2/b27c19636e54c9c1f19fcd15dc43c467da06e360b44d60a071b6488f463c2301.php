<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_783fb729e05dbf57306db1796872945bbbbe59691b98f20b6f1b81ab4fef015e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783fb729e05dbf57306db1796872945bbbbe59691b98f20b6f1b81ab4fef015e->enter($__internal_783fb729e05dbf57306db1796872945bbbbe59691b98f20b6f1b81ab4fef015e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1ed3bf1c67cab1b83ffb9bcb6aa5bc7c5a8e91f2d554f1a74873558ea221fac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed3bf1c67cab1b83ffb9bcb6aa5bc7c5a8e91f2d554f1a74873558ea221fac9->enter($__internal_1ed3bf1c67cab1b83ffb9bcb6aa5bc7c5a8e91f2d554f1a74873558ea221fac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_783fb729e05dbf57306db1796872945bbbbe59691b98f20b6f1b81ab4fef015e->leave($__internal_783fb729e05dbf57306db1796872945bbbbe59691b98f20b6f1b81ab4fef015e_prof);

        
        $__internal_1ed3bf1c67cab1b83ffb9bcb6aa5bc7c5a8e91f2d554f1a74873558ea221fac9->leave($__internal_1ed3bf1c67cab1b83ffb9bcb6aa5bc7c5a8e91f2d554f1a74873558ea221fac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
