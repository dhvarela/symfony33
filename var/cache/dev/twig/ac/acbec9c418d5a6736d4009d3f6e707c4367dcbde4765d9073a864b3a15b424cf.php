<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_ad07876ed6f9356099fc0d18f1774d4ab377a29733b4597ac10529fad54ca120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad07876ed6f9356099fc0d18f1774d4ab377a29733b4597ac10529fad54ca120->enter($__internal_ad07876ed6f9356099fc0d18f1774d4ab377a29733b4597ac10529fad54ca120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_cd4b9f79445bcc0d9e5cf632569683308d69972457e93c59e4eb3d62e3f4b727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4b9f79445bcc0d9e5cf632569683308d69972457e93c59e4eb3d62e3f4b727->enter($__internal_cd4b9f79445bcc0d9e5cf632569683308d69972457e93c59e4eb3d62e3f4b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ad07876ed6f9356099fc0d18f1774d4ab377a29733b4597ac10529fad54ca120->leave($__internal_ad07876ed6f9356099fc0d18f1774d4ab377a29733b4597ac10529fad54ca120_prof);

        
        $__internal_cd4b9f79445bcc0d9e5cf632569683308d69972457e93c59e4eb3d62e3f4b727->leave($__internal_cd4b9f79445bcc0d9e5cf632569683308d69972457e93c59e4eb3d62e3f4b727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
