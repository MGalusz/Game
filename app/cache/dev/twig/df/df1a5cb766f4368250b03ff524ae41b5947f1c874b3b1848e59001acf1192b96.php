<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_631e218cbcefe1a1088c119bf6df2f99c0b58e415580c0078364d7ebba921ccc extends Twig_Template
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
        $__internal_5641904f74ad0cf55e08ac10b67581f7fe45921c760be0177f266492fbf1c363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5641904f74ad0cf55e08ac10b67581f7fe45921c760be0177f266492fbf1c363->enter($__internal_5641904f74ad0cf55e08ac10b67581f7fe45921c760be0177f266492fbf1c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5641904f74ad0cf55e08ac10b67581f7fe45921c760be0177f266492fbf1c363->leave($__internal_5641904f74ad0cf55e08ac10b67581f7fe45921c760be0177f266492fbf1c363_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c894e738a70768d91934a7a1622743109f59d0b873f27dc3768e61f42fb77099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c894e738a70768d91934a7a1622743109f59d0b873f27dc3768e61f42fb77099->enter($__internal_c894e738a70768d91934a7a1622743109f59d0b873f27dc3768e61f42fb77099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c894e738a70768d91934a7a1622743109f59d0b873f27dc3768e61f42fb77099->leave($__internal_c894e738a70768d91934a7a1622743109f59d0b873f27dc3768e61f42fb77099_prof);

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
", "@FOSUser/Security/login.html.twig", "/vagrant/project_w_ciemno/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
