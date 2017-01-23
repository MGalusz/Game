<?php

/* @App/Admin/envelopeList.html.twig */
class __TwigTemplate_5a9db9ae3f051329b9cf2bcb7939adaa55be738a9de28bb470ba42749936b2d3 extends Twig_Template
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
        $__internal_0721f2086787620f7aa9f475122642983052b4c85b15c2de1d16efcfb011cad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0721f2086787620f7aa9f475122642983052b4c85b15c2de1d16efcfb011cad8->enter($__internal_0721f2086787620f7aa9f475122642983052b4c85b15c2de1d16efcfb011cad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/envelopeList.html.twig"));

        // line 1
        echo "<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Value</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["envelopes"]) ? $context["envelopes"] : $this->getContext($context, "envelopes")));
        foreach ($context['_seq'] as $context["_key"] => $context["envelope"]) {
            // line 11
            echo "        <tr>
            <td>
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["envelope"], "id", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["envelope"], "value", array()), "html", null, true);
            echo "
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['envelope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>
";
        
        $__internal_0721f2086787620f7aa9f475122642983052b4c85b15c2de1d16efcfb011cad8->leave($__internal_0721f2086787620f7aa9f475122642983052b4c85b15c2de1d16efcfb011cad8_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/envelopeList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  47 => 16,  41 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Value</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {% for envelope in envelopes %}
        <tr>
            <td>
                {{ envelope.id }}
            </td>
            <td>
                {{ envelope.value }}
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
", "@App/Admin/envelopeList.html.twig", "/var/www/html/project_w_ciemno/src/AppBundle/Resources/views/Admin/envelopeList.html.twig");
    }
}
