<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fbca3c705e7a62b2b8002f90bf8388a8b53b771125f94576a345535319438da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cce424d274207c94c6550b443399fd5e3e56da0902f26289361088b325d5a3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce424d274207c94c6550b443399fd5e3e56da0902f26289361088b325d5a3ae->enter($__internal_cce424d274207c94c6550b443399fd5e3e56da0902f26289361088b325d5a3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cce424d274207c94c6550b443399fd5e3e56da0902f26289361088b325d5a3ae->leave($__internal_cce424d274207c94c6550b443399fd5e3e56da0902f26289361088b325d5a3ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3065bad7425d172c1027d8527b5c580169243c6f4232aaa2a86ed99670ca5a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3065bad7425d172c1027d8527b5c580169243c6f4232aaa2a86ed99670ca5a87->enter($__internal_3065bad7425d172c1027d8527b5c580169243c6f4232aaa2a86ed99670ca5a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3065bad7425d172c1027d8527b5c580169243c6f4232aaa2a86ed99670ca5a87->leave($__internal_3065bad7425d172c1027d8527b5c580169243c6f4232aaa2a86ed99670ca5a87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53843956d7040abdcaa9a7b205695768404719c6e2c6b35c6f5b3772c9efcf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53843956d7040abdcaa9a7b205695768404719c6e2c6b35c6f5b3772c9efcf3a->enter($__internal_53843956d7040abdcaa9a7b205695768404719c6e2c6b35c6f5b3772c9efcf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53843956d7040abdcaa9a7b205695768404719c6e2c6b35c6f5b3772c9efcf3a->leave($__internal_53843956d7040abdcaa9a7b205695768404719c6e2c6b35c6f5b3772c9efcf3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd398ae81bd04d54afa0d6b92affa6634e2fb952557b87dfa14d91280e05b19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd398ae81bd04d54afa0d6b92affa6634e2fb952557b87dfa14d91280e05b19c->enter($__internal_cd398ae81bd04d54afa0d6b92affa6634e2fb952557b87dfa14d91280e05b19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd398ae81bd04d54afa0d6b92affa6634e2fb952557b87dfa14d91280e05b19c->leave($__internal_cd398ae81bd04d54afa0d6b92affa6634e2fb952557b87dfa14d91280e05b19c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/vagrant/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
