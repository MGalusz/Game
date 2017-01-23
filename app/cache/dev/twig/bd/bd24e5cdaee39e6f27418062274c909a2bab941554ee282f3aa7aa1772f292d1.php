<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1ca1ad7f8fa64d9018ef05a148eceba41d9972dcf3dd1e74c09eb95abd5ccdef extends Twig_Template
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
        $__internal_89e11276c4e2a00e1ce83c7af5acd71d073f6e74c1c8894307529549f98646b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e11276c4e2a00e1ce83c7af5acd71d073f6e74c1c8894307529549f98646b0->enter($__internal_89e11276c4e2a00e1ce83c7af5acd71d073f6e74c1c8894307529549f98646b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_89e11276c4e2a00e1ce83c7af5acd71d073f6e74c1c8894307529549f98646b0->leave($__internal_89e11276c4e2a00e1ce83c7af5acd71d073f6e74c1c8894307529549f98646b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
