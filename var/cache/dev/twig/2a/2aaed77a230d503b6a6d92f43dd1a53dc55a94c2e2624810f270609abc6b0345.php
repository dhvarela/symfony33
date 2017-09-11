<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_8af84feb2c877f0ddffe47a2555f51f4be1da74d082229d67a4288a74df42494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af84feb2c877f0ddffe47a2555f51f4be1da74d082229d67a4288a74df42494->enter($__internal_8af84feb2c877f0ddffe47a2555f51f4be1da74d082229d67a4288a74df42494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_34260e164983f362dab1766245bb0d2e72898d9e0a3b4d5b356b51eb238e94b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34260e164983f362dab1766245bb0d2e72898d9e0a3b4d5b356b51eb238e94b0->enter($__internal_34260e164983f362dab1766245bb0d2e72898d9e0a3b4d5b356b51eb238e94b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8af84feb2c877f0ddffe47a2555f51f4be1da74d082229d67a4288a74df42494->leave($__internal_8af84feb2c877f0ddffe47a2555f51f4be1da74d082229d67a4288a74df42494_prof);

        
        $__internal_34260e164983f362dab1766245bb0d2e72898d9e0a3b4d5b356b51eb238e94b0->leave($__internal_34260e164983f362dab1766245bb0d2e72898d9e0a3b4d5b356b51eb238e94b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
