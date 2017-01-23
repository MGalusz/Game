<?php

/* @App/admin/envelopeList.html.twig */
class __TwigTemplate_a252f270f4e34416da228a54039e03a60b81f5022d1aee39e0dd338000c0be1c extends Twig_Template
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
        $__internal_d6738f5feea21c3e342014df29d7c2c73bff6e260d0a69c01e0f4823e906d9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6738f5feea21c3e342014df29d7c2c73bff6e260d0a69c01e0f4823e906d9e3->enter($__internal_d6738f5feea21c3e342014df29d7c2c73bff6e260d0a69c01e0f4823e906d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/admin/envelopeList.html.twig"));

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
        
        $__internal_d6738f5feea21c3e342014df29d7c2c73bff6e260d0a69c01e0f4823e906d9e3->leave($__internal_d6738f5feea21c3e342014df29d7c2c73bff6e260d0a69c01e0f4823e906d9e3_prof);

    }

    public function getTemplateName()
    {
        return "@App/admin/envelopeList.html.twig";
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
", "@App/admin/envelopeList.html.twig", "/vagrant/project_w_ciemno/src/AppBundle/Resources/views/admin/envelopeList.html.twig");
    }
}
