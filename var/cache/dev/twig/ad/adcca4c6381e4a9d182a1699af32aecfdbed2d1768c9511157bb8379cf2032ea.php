<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_e3fe5b2ee899649fa8f79144be4a158441c174b8448d52552791a2b8005c4934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fe5b2ee899649fa8f79144be4a158441c174b8448d52552791a2b8005c4934->enter($__internal_e3fe5b2ee899649fa8f79144be4a158441c174b8448d52552791a2b8005c4934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_76a8c8b45277494c20da5a554fbd39b7b3f2fc53ea088d9f5ec2888112b7ac0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a8c8b45277494c20da5a554fbd39b7b3f2fc53ea088d9f5ec2888112b7ac0e->enter($__internal_76a8c8b45277494c20da5a554fbd39b7b3f2fc53ea088d9f5ec2888112b7ac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e3fe5b2ee899649fa8f79144be4a158441c174b8448d52552791a2b8005c4934->leave($__internal_e3fe5b2ee899649fa8f79144be4a158441c174b8448d52552791a2b8005c4934_prof);

        
        $__internal_76a8c8b45277494c20da5a554fbd39b7b3f2fc53ea088d9f5ec2888112b7ac0e->leave($__internal_76a8c8b45277494c20da5a554fbd39b7b3f2fc53ea088d9f5ec2888112b7ac0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
