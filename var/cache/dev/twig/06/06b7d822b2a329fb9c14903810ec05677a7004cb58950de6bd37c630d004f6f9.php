<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_46a61dfdb1f1f10291938d6de7ae8079b8eaaa2a4cc6b10a0d9d62efe3a57a31 extends Twig_Template
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
        $__internal_747fbe7f632f7ebf2c5b5d280d2558ed08ddf2a37c6c34ae71203351463e8cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747fbe7f632f7ebf2c5b5d280d2558ed08ddf2a37c6c34ae71203351463e8cd4->enter($__internal_747fbe7f632f7ebf2c5b5d280d2558ed08ddf2a37c6c34ae71203351463e8cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_20500c56fd01a3870af95f09ed6ccae63f54c1f1dffe202694387a069b0b9f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20500c56fd01a3870af95f09ed6ccae63f54c1f1dffe202694387a069b0b9f39->enter($__internal_20500c56fd01a3870af95f09ed6ccae63f54c1f1dffe202694387a069b0b9f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_747fbe7f632f7ebf2c5b5d280d2558ed08ddf2a37c6c34ae71203351463e8cd4->leave($__internal_747fbe7f632f7ebf2c5b5d280d2558ed08ddf2a37c6c34ae71203351463e8cd4_prof);

        
        $__internal_20500c56fd01a3870af95f09ed6ccae63f54c1f1dffe202694387a069b0b9f39->leave($__internal_20500c56fd01a3870af95f09ed6ccae63f54c1f1dffe202694387a069b0b9f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
