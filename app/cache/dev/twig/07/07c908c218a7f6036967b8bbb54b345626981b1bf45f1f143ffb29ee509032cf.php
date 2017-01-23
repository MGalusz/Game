<?php

/* @App/Admin/questionForm.html.twig */
class __TwigTemplate_2158b6b2112f6e70eceb715676509d75b8b235c6d5dc0347cf3444d4e4684aca extends Twig_Template
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
        $__internal_b72d0607fcbccb724274715bae7ecba5f5a6420ee2074c55f31888e3fda9f692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72d0607fcbccb724274715bae7ecba5f5a6420ee2074c55f31888e3fda9f692->enter($__internal_b72d0607fcbccb724274715bae7ecba5f5a6420ee2074c55f31888e3fda9f692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/questionForm.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_b72d0607fcbccb724274715bae7ecba5f5a6420ee2074c55f31888e3fda9f692->leave($__internal_b72d0607fcbccb724274715bae7ecba5f5a6420ee2074c55f31888e3fda9f692_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/questionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}", "@App/Admin/questionForm.html.twig", "/var/www/html/project_w_ciemno/src/AppBundle/Resources/views/Admin/questionForm.html.twig");
    }
}
