<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_85db6763cdfe45abfe65ac7e3c60f65b9958377761d38aebda7f4fe4bb49ab7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85db6763cdfe45abfe65ac7e3c60f65b9958377761d38aebda7f4fe4bb49ab7d->enter($__internal_85db6763cdfe45abfe65ac7e3c60f65b9958377761d38aebda7f4fe4bb49ab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8b38f9a1134afa0c62269e9de405a52fee7b617fd7b56eb55a3355b15410f8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b38f9a1134afa0c62269e9de405a52fee7b617fd7b56eb55a3355b15410f8e7->enter($__internal_8b38f9a1134afa0c62269e9de405a52fee7b617fd7b56eb55a3355b15410f8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_85db6763cdfe45abfe65ac7e3c60f65b9958377761d38aebda7f4fe4bb49ab7d->leave($__internal_85db6763cdfe45abfe65ac7e3c60f65b9958377761d38aebda7f4fe4bb49ab7d_prof);

        
        $__internal_8b38f9a1134afa0c62269e9de405a52fee7b617fd7b56eb55a3355b15410f8e7->leave($__internal_8b38f9a1134afa0c62269e9de405a52fee7b617fd7b56eb55a3355b15410f8e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
