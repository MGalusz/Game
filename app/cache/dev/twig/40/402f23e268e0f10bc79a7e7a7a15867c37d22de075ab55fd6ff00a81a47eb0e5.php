<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_49087e9fe46bc9caaae3640286cb2b46e8a1d825f10eeadcacc7fd9672286c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c88c7d8f6f0187b9fe5177b839f8b07255652c37085650276e263c6b36c02c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88c7d8f6f0187b9fe5177b839f8b07255652c37085650276e263c6b36c02c28->enter($__internal_c88c7d8f6f0187b9fe5177b839f8b07255652c37085650276e263c6b36c02c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88c7d8f6f0187b9fe5177b839f8b07255652c37085650276e263c6b36c02c28->leave($__internal_c88c7d8f6f0187b9fe5177b839f8b07255652c37085650276e263c6b36c02c28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fe4fd2a3819043f7cd71c43fb89b14b49207bd030f307e9628d1925eff31a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe4fd2a3819043f7cd71c43fb89b14b49207bd030f307e9628d1925eff31a38->enter($__internal_3fe4fd2a3819043f7cd71c43fb89b14b49207bd030f307e9628d1925eff31a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3fe4fd2a3819043f7cd71c43fb89b14b49207bd030f307e9628d1925eff31a38->leave($__internal_3fe4fd2a3819043f7cd71c43fb89b14b49207bd030f307e9628d1925eff31a38_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/project_w_ciemno/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
