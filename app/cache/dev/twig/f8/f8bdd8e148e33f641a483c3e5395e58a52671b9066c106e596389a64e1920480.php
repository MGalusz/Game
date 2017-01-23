<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_20a908e0fcac23d3bfa2cd045622175529189f4bae06e7a6167ed8aa39c5cf04 extends Twig_Template
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
        $__internal_6f8f0ff435408bca9fcb97814bc63b30aaaaf7958fabc3fe279f747a1da60417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8f0ff435408bca9fcb97814bc63b30aaaaf7958fabc3fe279f747a1da60417->enter($__internal_6f8f0ff435408bca9fcb97814bc63b30aaaaf7958fabc3fe279f747a1da60417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8f0ff435408bca9fcb97814bc63b30aaaaf7958fabc3fe279f747a1da60417->leave($__internal_6f8f0ff435408bca9fcb97814bc63b30aaaaf7958fabc3fe279f747a1da60417_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6658a42f6075d6aa164f3fc156eacac58f9887a1dad0f9e6c06e6328808e3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6658a42f6075d6aa164f3fc156eacac58f9887a1dad0f9e6c06e6328808e3cb->enter($__internal_f6658a42f6075d6aa164f3fc156eacac58f9887a1dad0f9e6c06e6328808e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6658a42f6075d6aa164f3fc156eacac58f9887a1dad0f9e6c06e6328808e3cb->leave($__internal_f6658a42f6075d6aa164f3fc156eacac58f9887a1dad0f9e6c06e6328808e3cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4724a89ee6f5b004fca438ae1a1596cd6084e92205d9a7eec26418b90a3f076b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4724a89ee6f5b004fca438ae1a1596cd6084e92205d9a7eec26418b90a3f076b->enter($__internal_4724a89ee6f5b004fca438ae1a1596cd6084e92205d9a7eec26418b90a3f076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4724a89ee6f5b004fca438ae1a1596cd6084e92205d9a7eec26418b90a3f076b->leave($__internal_4724a89ee6f5b004fca438ae1a1596cd6084e92205d9a7eec26418b90a3f076b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df4853876d8d59ba4a93731e4a7e1b1e89df433506389dfbac512ddc24e6a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df4853876d8d59ba4a93731e4a7e1b1e89df433506389dfbac512ddc24e6a25->enter($__internal_0df4853876d8d59ba4a93731e4a7e1b1e89df433506389dfbac512ddc24e6a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0df4853876d8d59ba4a93731e4a7e1b1e89df433506389dfbac512ddc24e6a25->leave($__internal_0df4853876d8d59ba4a93731e4a7e1b1e89df433506389dfbac512ddc24e6a25_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/vagrant/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
