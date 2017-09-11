<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_d582c803cdf240e6d66e8e6be89ab7c0559bc31547257ad72a7728e64155544b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d582c803cdf240e6d66e8e6be89ab7c0559bc31547257ad72a7728e64155544b->enter($__internal_d582c803cdf240e6d66e8e6be89ab7c0559bc31547257ad72a7728e64155544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_423e1f92faaebad461d00792a816e131984529e23b242f3c5f66657e23efa1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423e1f92faaebad461d00792a816e131984529e23b242f3c5f66657e23efa1c1->enter($__internal_423e1f92faaebad461d00792a816e131984529e23b242f3c5f66657e23efa1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d582c803cdf240e6d66e8e6be89ab7c0559bc31547257ad72a7728e64155544b->leave($__internal_d582c803cdf240e6d66e8e6be89ab7c0559bc31547257ad72a7728e64155544b_prof);

        
        $__internal_423e1f92faaebad461d00792a816e131984529e23b242f3c5f66657e23efa1c1->leave($__internal_423e1f92faaebad461d00792a816e131984529e23b242f3c5f66657e23efa1c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
