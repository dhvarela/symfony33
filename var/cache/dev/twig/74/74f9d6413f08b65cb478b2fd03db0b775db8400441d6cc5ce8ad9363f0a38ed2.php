<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_08097282e6a8b24a34c9418e9fce14e1e6b1e528cc915057382090ab285c6bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08097282e6a8b24a34c9418e9fce14e1e6b1e528cc915057382090ab285c6bee->enter($__internal_08097282e6a8b24a34c9418e9fce14e1e6b1e528cc915057382090ab285c6bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8e849d4cade98aefa51b6844788c9d5012e270c03682a5928916a76af2d4f248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e849d4cade98aefa51b6844788c9d5012e270c03682a5928916a76af2d4f248->enter($__internal_8e849d4cade98aefa51b6844788c9d5012e270c03682a5928916a76af2d4f248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_08097282e6a8b24a34c9418e9fce14e1e6b1e528cc915057382090ab285c6bee->leave($__internal_08097282e6a8b24a34c9418e9fce14e1e6b1e528cc915057382090ab285c6bee_prof);

        
        $__internal_8e849d4cade98aefa51b6844788c9d5012e270c03682a5928916a76af2d4f248->leave($__internal_8e849d4cade98aefa51b6844788c9d5012e270c03682a5928916a76af2d4f248_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
