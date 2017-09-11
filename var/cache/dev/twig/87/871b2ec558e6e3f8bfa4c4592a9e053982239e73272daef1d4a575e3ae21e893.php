<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_ca5c44a0665c22ea5a0b83121a9323c84c0550903b7b230df73af1ae618f10fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5c44a0665c22ea5a0b83121a9323c84c0550903b7b230df73af1ae618f10fb->enter($__internal_ca5c44a0665c22ea5a0b83121a9323c84c0550903b7b230df73af1ae618f10fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_27ee3de66dd715f3d0d85f78eeec711373fc4f64089667d704d13b7c32c8db83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ee3de66dd715f3d0d85f78eeec711373fc4f64089667d704d13b7c32c8db83->enter($__internal_27ee3de66dd715f3d0d85f78eeec711373fc4f64089667d704d13b7c32c8db83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca5c44a0665c22ea5a0b83121a9323c84c0550903b7b230df73af1ae618f10fb->leave($__internal_ca5c44a0665c22ea5a0b83121a9323c84c0550903b7b230df73af1ae618f10fb_prof);

        
        $__internal_27ee3de66dd715f3d0d85f78eeec711373fc4f64089667d704d13b7c32c8db83->leave($__internal_27ee3de66dd715f3d0d85f78eeec711373fc4f64089667d704d13b7c32c8db83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
