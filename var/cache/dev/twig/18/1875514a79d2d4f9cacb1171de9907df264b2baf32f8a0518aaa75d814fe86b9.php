<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_fbc683a6a7a94a26ab5b9f11cf7f073e8c40b11b38e4570dbd4ee17016549e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc683a6a7a94a26ab5b9f11cf7f073e8c40b11b38e4570dbd4ee17016549e60->enter($__internal_fbc683a6a7a94a26ab5b9f11cf7f073e8c40b11b38e4570dbd4ee17016549e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_10a681e9ca56c279cfb2d7138c5bcc6b86f893b400252894036675a3a52ca5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a681e9ca56c279cfb2d7138c5bcc6b86f893b400252894036675a3a52ca5a0->enter($__internal_10a681e9ca56c279cfb2d7138c5bcc6b86f893b400252894036675a3a52ca5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fbc683a6a7a94a26ab5b9f11cf7f073e8c40b11b38e4570dbd4ee17016549e60->leave($__internal_fbc683a6a7a94a26ab5b9f11cf7f073e8c40b11b38e4570dbd4ee17016549e60_prof);

        
        $__internal_10a681e9ca56c279cfb2d7138c5bcc6b86f893b400252894036675a3a52ca5a0->leave($__internal_10a681e9ca56c279cfb2d7138c5bcc6b86f893b400252894036675a3a52ca5a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
