<?php

/* ::base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b7d4836e091856b758d5fdc736a78bfbbf361f0d439d83bf9876c01f34ec879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7d4836e091856b758d5fdc736a78bfbbf361f0d439d83bf9876c01f34ec879->enter($__internal_8b7d4836e091856b758d5fdc736a78bfbbf361f0d439d83bf9876c01f34ec879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8685a0b80476501889d6f0727792bd0fba39cbf4de34e7afd15b1f84fec6012e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8685a0b80476501889d6f0727792bd0fba39cbf4de34e7afd15b1f84fec6012e->enter($__internal_8685a0b80476501889d6f0727792bd0fba39cbf4de34e7afd15b1f84fec6012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8b7d4836e091856b758d5fdc736a78bfbbf361f0d439d83bf9876c01f34ec879->leave($__internal_8b7d4836e091856b758d5fdc736a78bfbbf361f0d439d83bf9876c01f34ec879_prof);

        
        $__internal_8685a0b80476501889d6f0727792bd0fba39cbf4de34e7afd15b1f84fec6012e->leave($__internal_8685a0b80476501889d6f0727792bd0fba39cbf4de34e7afd15b1f84fec6012e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92946ec8bf7f3f458f0e98084b7605239d841683d880b431f813e21243c406d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92946ec8bf7f3f458f0e98084b7605239d841683d880b431f813e21243c406d0->enter($__internal_92946ec8bf7f3f458f0e98084b7605239d841683d880b431f813e21243c406d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b78bab6c3d685f8e5c903c90545f669417d5d0e88b56ed4577a8a86edacb2617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78bab6c3d685f8e5c903c90545f669417d5d0e88b56ed4577a8a86edacb2617->enter($__internal_b78bab6c3d685f8e5c903c90545f669417d5d0e88b56ed4577a8a86edacb2617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b78bab6c3d685f8e5c903c90545f669417d5d0e88b56ed4577a8a86edacb2617->leave($__internal_b78bab6c3d685f8e5c903c90545f669417d5d0e88b56ed4577a8a86edacb2617_prof);

        
        $__internal_92946ec8bf7f3f458f0e98084b7605239d841683d880b431f813e21243c406d0->leave($__internal_92946ec8bf7f3f458f0e98084b7605239d841683d880b431f813e21243c406d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_245a4093616cd1a7c78023edab7a622d607ee1bb248a9be1a43a87d2222333bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245a4093616cd1a7c78023edab7a622d607ee1bb248a9be1a43a87d2222333bf->enter($__internal_245a4093616cd1a7c78023edab7a622d607ee1bb248a9be1a43a87d2222333bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c349ee499ba4cca7945f52680a06a33de2acca8a02badfad0894a294b39968f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c349ee499ba4cca7945f52680a06a33de2acca8a02badfad0894a294b39968f9->enter($__internal_c349ee499ba4cca7945f52680a06a33de2acca8a02badfad0894a294b39968f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c349ee499ba4cca7945f52680a06a33de2acca8a02badfad0894a294b39968f9->leave($__internal_c349ee499ba4cca7945f52680a06a33de2acca8a02badfad0894a294b39968f9_prof);

        
        $__internal_245a4093616cd1a7c78023edab7a622d607ee1bb248a9be1a43a87d2222333bf->leave($__internal_245a4093616cd1a7c78023edab7a622d607ee1bb248a9be1a43a87d2222333bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a07d60b3efda89d55d6a9bfc6b6b49729478d92c2bc2a376672f39cb47114d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a07d60b3efda89d55d6a9bfc6b6b49729478d92c2bc2a376672f39cb47114d0->enter($__internal_1a07d60b3efda89d55d6a9bfc6b6b49729478d92c2bc2a376672f39cb47114d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e8383c1027b0c73ae317f00ee53555bb1e68920c13a74d99b7187a4e774fe30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8383c1027b0c73ae317f00ee53555bb1e68920c13a74d99b7187a4e774fe30->enter($__internal_7e8383c1027b0c73ae317f00ee53555bb1e68920c13a74d99b7187a4e774fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e8383c1027b0c73ae317f00ee53555bb1e68920c13a74d99b7187a4e774fe30->leave($__internal_7e8383c1027b0c73ae317f00ee53555bb1e68920c13a74d99b7187a4e774fe30_prof);

        
        $__internal_1a07d60b3efda89d55d6a9bfc6b6b49729478d92c2bc2a376672f39cb47114d0->leave($__internal_1a07d60b3efda89d55d6a9bfc6b6b49729478d92c2bc2a376672f39cb47114d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a89beb1e5d98e92399e605874e594e3cf0acc063eab4c8755ef4af61abe6bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a89beb1e5d98e92399e605874e594e3cf0acc063eab4c8755ef4af61abe6bad->enter($__internal_8a89beb1e5d98e92399e605874e594e3cf0acc063eab4c8755ef4af61abe6bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ae0359306d38a54d9c9466b56529119c0eb3b63e0905cb2fc4cd91da7732d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae0359306d38a54d9c9466b56529119c0eb3b63e0905cb2fc4cd91da7732d77->enter($__internal_9ae0359306d38a54d9c9466b56529119c0eb3b63e0905cb2fc4cd91da7732d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ae0359306d38a54d9c9466b56529119c0eb3b63e0905cb2fc4cd91da7732d77->leave($__internal_9ae0359306d38a54d9c9466b56529119c0eb3b63e0905cb2fc4cd91da7732d77_prof);

        
        $__internal_8a89beb1e5d98e92399e605874e594e3cf0acc063eab4c8755ef4af61abe6bad->leave($__internal_8a89beb1e5d98e92399e605874e594e3cf0acc063eab4c8755ef4af61abe6bad_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/daniel/www/simulador/symfony33/app/Resources/views/base.html.twig");
    }
}
