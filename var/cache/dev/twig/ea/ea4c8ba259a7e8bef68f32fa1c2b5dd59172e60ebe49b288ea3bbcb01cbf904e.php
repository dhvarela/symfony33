<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_4337f3af62bfb62950de0f49ab12dbd01fb8aa72701c72ab3c1e9e8789f98cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4337f3af62bfb62950de0f49ab12dbd01fb8aa72701c72ab3c1e9e8789f98cfe->enter($__internal_4337f3af62bfb62950de0f49ab12dbd01fb8aa72701c72ab3c1e9e8789f98cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cb55256dbe8fc3b840c5d48f2c65abd1e5bbe82c315e254af7207e518cfc2a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb55256dbe8fc3b840c5d48f2c65abd1e5bbe82c315e254af7207e518cfc2a1b->enter($__internal_cb55256dbe8fc3b840c5d48f2c65abd1e5bbe82c315e254af7207e518cfc2a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4337f3af62bfb62950de0f49ab12dbd01fb8aa72701c72ab3c1e9e8789f98cfe->leave($__internal_4337f3af62bfb62950de0f49ab12dbd01fb8aa72701c72ab3c1e9e8789f98cfe_prof);

        
        $__internal_cb55256dbe8fc3b840c5d48f2c65abd1e5bbe82c315e254af7207e518cfc2a1b->leave($__internal_cb55256dbe8fc3b840c5d48f2c65abd1e5bbe82c315e254af7207e518cfc2a1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
