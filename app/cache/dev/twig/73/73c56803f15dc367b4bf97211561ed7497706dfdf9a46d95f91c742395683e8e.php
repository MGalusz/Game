<?php

/* @App/Admin/envelopeForm.html.twig */
class __TwigTemplate_24eb8501d5245bfda67248ea83780b4f47b1cfbbe4080573150c1e32c1ef2c09 extends Twig_Template
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
        $__internal_8d2f651f057b6556a41da43566383c4faf76d9169acf31fa2388af8d67de1f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2f651f057b6556a41da43566383c4faf76d9169acf31fa2388af8d67de1f39->enter($__internal_8d2f651f057b6556a41da43566383c4faf76d9169acf31fa2388af8d67de1f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/envelopeForm.html.twig"));

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
        
        $__internal_8d2f651f057b6556a41da43566383c4faf76d9169acf31fa2388af8d67de1f39->leave($__internal_8d2f651f057b6556a41da43566383c4faf76d9169acf31fa2388af8d67de1f39_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/envelopeForm.html.twig";
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
{{ form_end(form) }}", "@App/Admin/envelopeForm.html.twig", "/var/www/html/project_w_ciemno/src/AppBundle/Resources/views/Admin/envelopeForm.html.twig");
    }
}
