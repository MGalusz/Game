<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7be6461fd766d8b21f39dc5e44e68325921af04c2adce50ac12cc1a3234c5d97 extends Twig_Template
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
        $__internal_df40c7d87f6dab158d279880e77284c8f560cd562910bb20d74becb81cfed2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df40c7d87f6dab158d279880e77284c8f560cd562910bb20d74becb81cfed2a2->enter($__internal_df40c7d87f6dab158d279880e77284c8f560cd562910bb20d74becb81cfed2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df40c7d87f6dab158d279880e77284c8f560cd562910bb20d74becb81cfed2a2->leave($__internal_df40c7d87f6dab158d279880e77284c8f560cd562910bb20d74becb81cfed2a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b76ac9d3faa9bb4159d50c14adbe1459d27ae7e6d580c0c26fdcb9037a45a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b76ac9d3faa9bb4159d50c14adbe1459d27ae7e6d580c0c26fdcb9037a45a09->enter($__internal_8b76ac9d3faa9bb4159d50c14adbe1459d27ae7e6d580c0c26fdcb9037a45a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b76ac9d3faa9bb4159d50c14adbe1459d27ae7e6d580c0c26fdcb9037a45a09->leave($__internal_8b76ac9d3faa9bb4159d50c14adbe1459d27ae7e6d580c0c26fdcb9037a45a09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_383d58072e4e04bdd4187d08eccea58c4606c0b32669aa59a22cb4307e34821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383d58072e4e04bdd4187d08eccea58c4606c0b32669aa59a22cb4307e34821a->enter($__internal_383d58072e4e04bdd4187d08eccea58c4606c0b32669aa59a22cb4307e34821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_383d58072e4e04bdd4187d08eccea58c4606c0b32669aa59a22cb4307e34821a->leave($__internal_383d58072e4e04bdd4187d08eccea58c4606c0b32669aa59a22cb4307e34821a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_790bd833704c5d3d694c9287e27ccea777129d4894d0cf5f2669a868b57cc536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790bd833704c5d3d694c9287e27ccea777129d4894d0cf5f2669a868b57cc536->enter($__internal_790bd833704c5d3d694c9287e27ccea777129d4894d0cf5f2669a868b57cc536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_790bd833704c5d3d694c9287e27ccea777129d4894d0cf5f2669a868b57cc536->leave($__internal_790bd833704c5d3d694c9287e27ccea777129d4894d0cf5f2669a868b57cc536_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
