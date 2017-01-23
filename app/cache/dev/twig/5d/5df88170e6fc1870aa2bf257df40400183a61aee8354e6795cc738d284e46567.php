<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_34778c2594c9d41b59256c5095bdbf6158d7c85c44fff6161c8cd381ab5b4e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c76bbb4c3e4a18a47132f3e5c7465249be7a47dcda8348f2cc58391010ff01b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76bbb4c3e4a18a47132f3e5c7465249be7a47dcda8348f2cc58391010ff01b2->enter($__internal_c76bbb4c3e4a18a47132f3e5c7465249be7a47dcda8348f2cc58391010ff01b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76bbb4c3e4a18a47132f3e5c7465249be7a47dcda8348f2cc58391010ff01b2->leave($__internal_c76bbb4c3e4a18a47132f3e5c7465249be7a47dcda8348f2cc58391010ff01b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0d2e56311d9484b60bf71d31d7b1183948d2588bb655b01b3e641e1593c045e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d2e56311d9484b60bf71d31d7b1183948d2588bb655b01b3e641e1593c045e->enter($__internal_b0d2e56311d9484b60bf71d31d7b1183948d2588bb655b01b3e641e1593c045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0d2e56311d9484b60bf71d31d7b1183948d2588bb655b01b3e641e1593c045e->leave($__internal_b0d2e56311d9484b60bf71d31d7b1183948d2588bb655b01b3e641e1593c045e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e5f3dc42f658d2f7e14f6272e8cbbec2f0b10946696d67be52e55d0ba7ea49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5f3dc42f658d2f7e14f6272e8cbbec2f0b10946696d67be52e55d0ba7ea49f->enter($__internal_3e5f3dc42f658d2f7e14f6272e8cbbec2f0b10946696d67be52e55d0ba7ea49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e5f3dc42f658d2f7e14f6272e8cbbec2f0b10946696d67be52e55d0ba7ea49f->leave($__internal_3e5f3dc42f658d2f7e14f6272e8cbbec2f0b10946696d67be52e55d0ba7ea49f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9386454bea4d8dbda469ac59b7edf129336d65e3254f054ad0f89204d9ad1542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9386454bea4d8dbda469ac59b7edf129336d65e3254f054ad0f89204d9ad1542->enter($__internal_9386454bea4d8dbda469ac59b7edf129336d65e3254f054ad0f89204d9ad1542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9386454bea4d8dbda469ac59b7edf129336d65e3254f054ad0f89204d9ad1542->leave($__internal_9386454bea4d8dbda469ac59b7edf129336d65e3254f054ad0f89204d9ad1542_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
