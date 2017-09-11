<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_6381189856c6745ffdd508ba07998f251ec36560bd0663798adc8028eb454983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6381189856c6745ffdd508ba07998f251ec36560bd0663798adc8028eb454983->enter($__internal_6381189856c6745ffdd508ba07998f251ec36560bd0663798adc8028eb454983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_792b7722b0031867208b7fd8ff0344b67fb29c246877a0c03bc434dee09f2b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792b7722b0031867208b7fd8ff0344b67fb29c246877a0c03bc434dee09f2b41->enter($__internal_792b7722b0031867208b7fd8ff0344b67fb29c246877a0c03bc434dee09f2b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6381189856c6745ffdd508ba07998f251ec36560bd0663798adc8028eb454983->leave($__internal_6381189856c6745ffdd508ba07998f251ec36560bd0663798adc8028eb454983_prof);

        
        $__internal_792b7722b0031867208b7fd8ff0344b67fb29c246877a0c03bc434dee09f2b41->leave($__internal_792b7722b0031867208b7fd8ff0344b67fb29c246877a0c03bc434dee09f2b41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
