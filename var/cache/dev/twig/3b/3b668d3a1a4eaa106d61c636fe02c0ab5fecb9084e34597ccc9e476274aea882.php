<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_8931999c8cd71a4fe636e828e520bdaa1c89b8c0c7b76a94926784a53a62da4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8931999c8cd71a4fe636e828e520bdaa1c89b8c0c7b76a94926784a53a62da4b->enter($__internal_8931999c8cd71a4fe636e828e520bdaa1c89b8c0c7b76a94926784a53a62da4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_89247d4d653ce1d68e8ed65828bbf6c57c924a1f37adf3bc35c429c9cdbb9b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89247d4d653ce1d68e8ed65828bbf6c57c924a1f37adf3bc35c429c9cdbb9b58->enter($__internal_89247d4d653ce1d68e8ed65828bbf6c57c924a1f37adf3bc35c429c9cdbb9b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8931999c8cd71a4fe636e828e520bdaa1c89b8c0c7b76a94926784a53a62da4b->leave($__internal_8931999c8cd71a4fe636e828e520bdaa1c89b8c0c7b76a94926784a53a62da4b_prof);

        
        $__internal_89247d4d653ce1d68e8ed65828bbf6c57c924a1f37adf3bc35c429c9cdbb9b58->leave($__internal_89247d4d653ce1d68e8ed65828bbf6c57c924a1f37adf3bc35c429c9cdbb9b58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/daniel/www/simulador/symfony33/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
