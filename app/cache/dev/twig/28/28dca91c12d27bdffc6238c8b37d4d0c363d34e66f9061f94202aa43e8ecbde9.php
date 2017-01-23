<?php

/* @App/Admin/envelopeForm.html.twig */
class __TwigTemplate_df6d1e5a1e63c26ab8302f63dc0f38a936743bdce600a1bda35209d97678f928 extends Twig_Template
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
        $__internal_eb8ba29891e8b18c106d92bf8ddec39d2bea315ef94648ee1d21a8a984b234dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8ba29891e8b18c106d92bf8ddec39d2bea315ef94648ee1d21a8a984b234dd->enter($__internal_eb8ba29891e8b18c106d92bf8ddec39d2bea315ef94648ee1d21a8a984b234dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/envelopeForm.html.twig"));

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
        
        $__internal_eb8ba29891e8b18c106d92bf8ddec39d2bea315ef94648ee1d21a8a984b234dd->leave($__internal_eb8ba29891e8b18c106d92bf8ddec39d2bea315ef94648ee1d21a8a984b234dd_prof);

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
{{ form_end(form) }}", "@App/Admin/envelopeForm.html.twig", "/vagrant/project_w_ciemno/src/AppBundle/Resources/views/Admin/envelopeForm.html.twig");
    }
}
