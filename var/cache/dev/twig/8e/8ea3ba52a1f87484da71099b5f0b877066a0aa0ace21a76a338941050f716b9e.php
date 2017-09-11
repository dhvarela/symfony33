<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_1903515a2a64c6f095fa1cc5b89c49da78072eec92fec2176fad793ed31a3e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1903515a2a64c6f095fa1cc5b89c49da78072eec92fec2176fad793ed31a3e85->enter($__internal_1903515a2a64c6f095fa1cc5b89c49da78072eec92fec2176fad793ed31a3e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ba050c1dbebd933f4c578aebbfeb34a1e5dbf079e5a16cf38a81b862891655a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba050c1dbebd933f4c578aebbfeb34a1e5dbf079e5a16cf38a81b862891655a1->enter($__internal_ba050c1dbebd933f4c578aebbfeb34a1e5dbf079e5a16cf38a81b862891655a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1903515a2a64c6f095fa1cc5b89c49da78072eec92fec2176fad793ed31a3e85->leave($__internal_1903515a2a64c6f095fa1cc5b89c49da78072eec92fec2176fad793ed31a3e85_prof);

        
        $__internal_ba050c1dbebd933f4c578aebbfeb34a1e5dbf079e5a16cf38a81b862891655a1->leave($__internal_ba050c1dbebd933f4c578aebbfeb34a1e5dbf079e5a16cf38a81b862891655a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
