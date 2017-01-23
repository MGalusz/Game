<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_e7bf6dc262f79ed7c02555e792f4e1f3cb00e24ca1b01aa6ea8a03878588af1b extends Twig_Template
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
        $__internal_b25c9bcaf9ef2efa78192893bd8bd00b06ae794444f1cbf541858ec1a4e67fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25c9bcaf9ef2efa78192893bd8bd00b06ae794444f1cbf541858ec1a4e67fef->enter($__internal_b25c9bcaf9ef2efa78192893bd8bd00b06ae794444f1cbf541858ec1a4e67fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_b25c9bcaf9ef2efa78192893bd8bd00b06ae794444f1cbf541858ec1a4e67fef->leave($__internal_b25c9bcaf9ef2efa78192893bd8bd00b06ae794444f1cbf541858ec1a4e67fef_prof);

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
", "@Twig/Exception/traces.txt.twig", "/vagrant/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
