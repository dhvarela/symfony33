<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_f8b8cec85da671e3b8f5440c97319df80cde3796005b6964f27cb6c172250c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b8cec85da671e3b8f5440c97319df80cde3796005b6964f27cb6c172250c8a->enter($__internal_f8b8cec85da671e3b8f5440c97319df80cde3796005b6964f27cb6c172250c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_abbf8560d804f904caadb5389c4a4dcf4328f67d2f330d7e42cea040a6a2acd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbf8560d804f904caadb5389c4a4dcf4328f67d2f330d7e42cea040a6a2acd1->enter($__internal_abbf8560d804f904caadb5389c4a4dcf4328f67d2f330d7e42cea040a6a2acd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f8b8cec85da671e3b8f5440c97319df80cde3796005b6964f27cb6c172250c8a->leave($__internal_f8b8cec85da671e3b8f5440c97319df80cde3796005b6964f27cb6c172250c8a_prof);

        
        $__internal_abbf8560d804f904caadb5389c4a4dcf4328f67d2f330d7e42cea040a6a2acd1->leave($__internal_abbf8560d804f904caadb5389c4a4dcf4328f67d2f330d7e42cea040a6a2acd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
