<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_0fe416918ff1d99c5908b1e1f487df669c1f2c681e6259cdbf631dfe0483adb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe416918ff1d99c5908b1e1f487df669c1f2c681e6259cdbf631dfe0483adb8->enter($__internal_0fe416918ff1d99c5908b1e1f487df669c1f2c681e6259cdbf631dfe0483adb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1746a8c034c947078f4e3fbe0f027ae5c3ecaa3703010554b289e8d66e0d8e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1746a8c034c947078f4e3fbe0f027ae5c3ecaa3703010554b289e8d66e0d8e2a->enter($__internal_1746a8c034c947078f4e3fbe0f027ae5c3ecaa3703010554b289e8d66e0d8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0fe416918ff1d99c5908b1e1f487df669c1f2c681e6259cdbf631dfe0483adb8->leave($__internal_0fe416918ff1d99c5908b1e1f487df669c1f2c681e6259cdbf631dfe0483adb8_prof);

        
        $__internal_1746a8c034c947078f4e3fbe0f027ae5c3ecaa3703010554b289e8d66e0d8e2a->leave($__internal_1746a8c034c947078f4e3fbe0f027ae5c3ecaa3703010554b289e8d66e0d8e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
