<?php

/* @App/Admin/questionList.html.twig */
class __TwigTemplate_f56dce75de106e39bdd79df95bc1cc9996cefd4a401fa3463f8fb563929e2d1c extends Twig_Template
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
        $__internal_5bb0ccbf61e3abf3e9d04efb3574a33819a91aa229fde02dbf0a98df0adec42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb0ccbf61e3abf3e9d04efb3574a33819a91aa229fde02dbf0a98df0adec42d->enter($__internal_5bb0ccbf61e3abf3e9d04efb3574a33819a91aa229fde02dbf0a98df0adec42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/questionList.html.twig"));

        // line 1
        echo "<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Question</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 10
            echo "        <tr>
            <td>
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_5bb0ccbf61e3abf3e9d04efb3574a33819a91aa229fde02dbf0a98df0adec42d->leave($__internal_5bb0ccbf61e3abf3e9d04efb3574a33819a91aa229fde02dbf0a98df0adec42d_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/questionList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  46 => 15,  40 => 12,  36 => 10,  32 => 9,  22 => 1,);
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
        <th>Question</th>
    </tr>
    </thead>
    <tbody>
    {% for question in questions %}
        <tr>
            <td>
                {{ question.id }}
            </td>
            <td>
                {{ question.question }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@App/Admin/questionList.html.twig", "/var/www/html/project_w_ciemno/src/AppBundle/Resources/views/Admin/questionList.html.twig");
    }
}
