<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_4c86f03ad52d7cc7b2c9de94f6e1f3a6bacace5836097cf22fbe3787135b4c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c86f03ad52d7cc7b2c9de94f6e1f3a6bacace5836097cf22fbe3787135b4c1c->enter($__internal_4c86f03ad52d7cc7b2c9de94f6e1f3a6bacace5836097cf22fbe3787135b4c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c117141973d484102a5c2cf48bb054613cf8607967b26c9430eb31719d300934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c117141973d484102a5c2cf48bb054613cf8607967b26c9430eb31719d300934->enter($__internal_c117141973d484102a5c2cf48bb054613cf8607967b26c9430eb31719d300934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4c86f03ad52d7cc7b2c9de94f6e1f3a6bacace5836097cf22fbe3787135b4c1c->leave($__internal_4c86f03ad52d7cc7b2c9de94f6e1f3a6bacace5836097cf22fbe3787135b4c1c_prof);

        
        $__internal_c117141973d484102a5c2cf48bb054613cf8607967b26c9430eb31719d300934->leave($__internal_c117141973d484102a5c2cf48bb054613cf8607967b26c9430eb31719d300934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
