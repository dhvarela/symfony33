<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_26b776b56dac54e37db2e45be5b8f02aa78ad8db0b69b27e9eddba29a05a7e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b776b56dac54e37db2e45be5b8f02aa78ad8db0b69b27e9eddba29a05a7e8e->enter($__internal_26b776b56dac54e37db2e45be5b8f02aa78ad8db0b69b27e9eddba29a05a7e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c716196e0f7694d24ea03361a8826736dfaa97919f7d3feca7c9fa17bf1ceca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c716196e0f7694d24ea03361a8826736dfaa97919f7d3feca7c9fa17bf1ceca3->enter($__internal_c716196e0f7694d24ea03361a8826736dfaa97919f7d3feca7c9fa17bf1ceca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_26b776b56dac54e37db2e45be5b8f02aa78ad8db0b69b27e9eddba29a05a7e8e->leave($__internal_26b776b56dac54e37db2e45be5b8f02aa78ad8db0b69b27e9eddba29a05a7e8e_prof);

        
        $__internal_c716196e0f7694d24ea03361a8826736dfaa97919f7d3feca7c9fa17bf1ceca3->leave($__internal_c716196e0f7694d24ea03361a8826736dfaa97919f7d3feca7c9fa17bf1ceca3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
