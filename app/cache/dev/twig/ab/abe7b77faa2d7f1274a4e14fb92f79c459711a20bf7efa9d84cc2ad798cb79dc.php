<?php

/* form_div_layout.html.twig */
class __TwigTemplate_9e31fde2a299720507cc41d644ee17c8b5b1dc253e3be6eeff9ef17cef84c37e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3f99b0411469da785a5f901791e182b3cd096e3d674637d905b79f27187c3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f99b0411469da785a5f901791e182b3cd096e3d674637d905b79f27187c3a9->enter($__internal_a3f99b0411469da785a5f901791e182b3cd096e3d674637d905b79f27187c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 282
        $this->displayBlock('form_end', $context, $blocks);
        // line 289
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 293
        $this->displayBlock('form_errors', $context, $blocks);
        // line 303
        $this->displayBlock('form_rest', $context, $blocks);
        // line 310
        echo "
";
        // line 313
        $this->displayBlock('form_rows', $context, $blocks);
        // line 319
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 336
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 350
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_a3f99b0411469da785a5f901791e182b3cd096e3d674637d905b79f27187c3a9->leave($__internal_a3f99b0411469da785a5f901791e182b3cd096e3d674637d905b79f27187c3a9_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_9d07c47b5198c8bf0f88a36e2dfb8ad82f397a5aa5f6248e992c36762deba229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d07c47b5198c8bf0f88a36e2dfb8ad82f397a5aa5f6248e992c36762deba229->enter($__internal_9d07c47b5198c8bf0f88a36e2dfb8ad82f397a5aa5f6248e992c36762deba229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_9d07c47b5198c8bf0f88a36e2dfb8ad82f397a5aa5f6248e992c36762deba229->leave($__internal_9d07c47b5198c8bf0f88a36e2dfb8ad82f397a5aa5f6248e992c36762deba229_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cedd312b212f2a12e2b93677f6cf03687e52ab4effc3f7b7ead7f30a45e1ce5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedd312b212f2a12e2b93677f6cf03687e52ab4effc3f7b7ead7f30a45e1ce5c->enter($__internal_cedd312b212f2a12e2b93677f6cf03687e52ab4effc3f7b7ead7f30a45e1ce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_cedd312b212f2a12e2b93677f6cf03687e52ab4effc3f7b7ead7f30a45e1ce5c->leave($__internal_cedd312b212f2a12e2b93677f6cf03687e52ab4effc3f7b7ead7f30a45e1ce5c_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d658d3dcedbeef9b98dc20b71de77ff06f655c4fe8000d15f52b77f38deeb5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d658d3dcedbeef9b98dc20b71de77ff06f655c4fe8000d15f52b77f38deeb5f7->enter($__internal_d658d3dcedbeef9b98dc20b71de77ff06f655c4fe8000d15f52b77f38deeb5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_d658d3dcedbeef9b98dc20b71de77ff06f655c4fe8000d15f52b77f38deeb5f7->leave($__internal_d658d3dcedbeef9b98dc20b71de77ff06f655c4fe8000d15f52b77f38deeb5f7_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e151fdb5235d97688766b320143eb76bcb60a010b79885b9a3fb3c84ee711e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151fdb5235d97688766b320143eb76bcb60a010b79885b9a3fb3c84ee711e8d->enter($__internal_e151fdb5235d97688766b320143eb76bcb60a010b79885b9a3fb3c84ee711e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_e151fdb5235d97688766b320143eb76bcb60a010b79885b9a3fb3c84ee711e8d->leave($__internal_e151fdb5235d97688766b320143eb76bcb60a010b79885b9a3fb3c84ee711e8d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_826644b2ddbb9717bcdfa949f18a2c1ebae1c9c1445dcce362153f7c04efb68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826644b2ddbb9717bcdfa949f18a2c1ebae1c9c1445dcce362153f7c04efb68c->enter($__internal_826644b2ddbb9717bcdfa949f18a2c1ebae1c9c1445dcce362153f7c04efb68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_826644b2ddbb9717bcdfa949f18a2c1ebae1c9c1445dcce362153f7c04efb68c->leave($__internal_826644b2ddbb9717bcdfa949f18a2c1ebae1c9c1445dcce362153f7c04efb68c_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_87041d1446c33a4aab6bb7ca09ac4f100d06e2c8c266244a285f7689b1ccdb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87041d1446c33a4aab6bb7ca09ac4f100d06e2c8c266244a285f7689b1ccdb01->enter($__internal_87041d1446c33a4aab6bb7ca09ac4f100d06e2c8c266244a285f7689b1ccdb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_87041d1446c33a4aab6bb7ca09ac4f100d06e2c8c266244a285f7689b1ccdb01->leave($__internal_87041d1446c33a4aab6bb7ca09ac4f100d06e2c8c266244a285f7689b1ccdb01_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b973668c3070c91c01eaf5e1b6ebc25ea274bf8d635989232060767e7fcc9a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b973668c3070c91c01eaf5e1b6ebc25ea274bf8d635989232060767e7fcc9a49->enter($__internal_b973668c3070c91c01eaf5e1b6ebc25ea274bf8d635989232060767e7fcc9a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_b973668c3070c91c01eaf5e1b6ebc25ea274bf8d635989232060767e7fcc9a49->leave($__internal_b973668c3070c91c01eaf5e1b6ebc25ea274bf8d635989232060767e7fcc9a49_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_940cba9a3c55b77c3085c5a6765cdf93fe729f9b50159e84ab48012fcba18256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940cba9a3c55b77c3085c5a6765cdf93fe729f9b50159e84ab48012fcba18256->enter($__internal_940cba9a3c55b77c3085c5a6765cdf93fe729f9b50159e84ab48012fcba18256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_940cba9a3c55b77c3085c5a6765cdf93fe729f9b50159e84ab48012fcba18256->leave($__internal_940cba9a3c55b77c3085c5a6765cdf93fe729f9b50159e84ab48012fcba18256_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_1b94c54072521a19ac2de89e2000fb9000c18de2ca97527cc0f81ec7de0bbae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b94c54072521a19ac2de89e2000fb9000c18de2ca97527cc0f81ec7de0bbae0->enter($__internal_1b94c54072521a19ac2de89e2000fb9000c18de2ca97527cc0f81ec7de0bbae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1b94c54072521a19ac2de89e2000fb9000c18de2ca97527cc0f81ec7de0bbae0->leave($__internal_1b94c54072521a19ac2de89e2000fb9000c18de2ca97527cc0f81ec7de0bbae0_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c06db1b53a8eb2676992dbd1e819ac08e41c8918d9dc4d8072565bef57da6315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06db1b53a8eb2676992dbd1e819ac08e41c8918d9dc4d8072565bef57da6315->enter($__internal_c06db1b53a8eb2676992dbd1e819ac08e41c8918d9dc4d8072565bef57da6315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_c06db1b53a8eb2676992dbd1e819ac08e41c8918d9dc4d8072565bef57da6315->leave($__internal_c06db1b53a8eb2676992dbd1e819ac08e41c8918d9dc4d8072565bef57da6315_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_94b214d5653179fce6c7e42c579e9f400b7434f8ca3b8b9fd2bf1f97bf04bc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b214d5653179fce6c7e42c579e9f400b7434f8ca3b8b9fd2bf1f97bf04bc3c->enter($__internal_94b214d5653179fce6c7e42c579e9f400b7434f8ca3b8b9fd2bf1f97bf04bc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_94b214d5653179fce6c7e42c579e9f400b7434f8ca3b8b9fd2bf1f97bf04bc3c->leave($__internal_94b214d5653179fce6c7e42c579e9f400b7434f8ca3b8b9fd2bf1f97bf04bc3c_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_47b097f35802b59301887fc87a18f7f39ad89649d72b660ec436ceb9c30646d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b097f35802b59301887fc87a18f7f39ad89649d72b660ec436ceb9c30646d5->enter($__internal_47b097f35802b59301887fc87a18f7f39ad89649d72b660ec436ceb9c30646d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_47b097f35802b59301887fc87a18f7f39ad89649d72b660ec436ceb9c30646d5->leave($__internal_47b097f35802b59301887fc87a18f7f39ad89649d72b660ec436ceb9c30646d5_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c6d31d63bfda391a22c9610673313a5542c8d4b5fe8fd08ec5faf932582492f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d31d63bfda391a22c9610673313a5542c8d4b5fe8fd08ec5faf932582492f5->enter($__internal_c6d31d63bfda391a22c9610673313a5542c8d4b5fe8fd08ec5faf932582492f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_c6d31d63bfda391a22c9610673313a5542c8d4b5fe8fd08ec5faf932582492f5->leave($__internal_c6d31d63bfda391a22c9610673313a5542c8d4b5fe8fd08ec5faf932582492f5_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ef123a003bc356ffb66cad8861ada6f5a04b998c0508a427ec1d4f203b7f9dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef123a003bc356ffb66cad8861ada6f5a04b998c0508a427ec1d4f203b7f9dc5->enter($__internal_ef123a003bc356ffb66cad8861ada6f5a04b998c0508a427ec1d4f203b7f9dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_ef123a003bc356ffb66cad8861ada6f5a04b998c0508a427ec1d4f203b7f9dc5->leave($__internal_ef123a003bc356ffb66cad8861ada6f5a04b998c0508a427ec1d4f203b7f9dc5_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_9c813c723afaf173e4d7fbea088d57ed8c442bc39a725df91dfd5b781894ea10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c813c723afaf173e4d7fbea088d57ed8c442bc39a725df91dfd5b781894ea10->enter($__internal_9c813c723afaf173e4d7fbea088d57ed8c442bc39a725df91dfd5b781894ea10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9c813c723afaf173e4d7fbea088d57ed8c442bc39a725df91dfd5b781894ea10->leave($__internal_9c813c723afaf173e4d7fbea088d57ed8c442bc39a725df91dfd5b781894ea10_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_b932eaa33a17ea6a72622a09740546e672daf62bc3e9321d78fc00d8e3c1dce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b932eaa33a17ea6a72622a09740546e672daf62bc3e9321d78fc00d8e3c1dce5->enter($__internal_b932eaa33a17ea6a72622a09740546e672daf62bc3e9321d78fc00d8e3c1dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b932eaa33a17ea6a72622a09740546e672daf62bc3e9321d78fc00d8e3c1dce5->leave($__internal_b932eaa33a17ea6a72622a09740546e672daf62bc3e9321d78fc00d8e3c1dce5_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b90cc6d356efc9c0e6e094f9574b604815c1d362653da6a18dce01fb63d3b22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90cc6d356efc9c0e6e094f9574b604815c1d362653da6a18dce01fb63d3b22b->enter($__internal_b90cc6d356efc9c0e6e094f9574b604815c1d362653da6a18dce01fb63d3b22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_b90cc6d356efc9c0e6e094f9574b604815c1d362653da6a18dce01fb63d3b22b->leave($__internal_b90cc6d356efc9c0e6e094f9574b604815c1d362653da6a18dce01fb63d3b22b_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_676304dec13dadb305dfa3ade66e5d3f121a55bdcd945b41675158825778b255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676304dec13dadb305dfa3ade66e5d3f121a55bdcd945b41675158825778b255->enter($__internal_676304dec13dadb305dfa3ade66e5d3f121a55bdcd945b41675158825778b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_676304dec13dadb305dfa3ade66e5d3f121a55bdcd945b41675158825778b255->leave($__internal_676304dec13dadb305dfa3ade66e5d3f121a55bdcd945b41675158825778b255_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_c48a08b2afd47ff128f001c24adc87860f06d4969617085cbf3eb1a0b1c81abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48a08b2afd47ff128f001c24adc87860f06d4969617085cbf3eb1a0b1c81abd->enter($__internal_c48a08b2afd47ff128f001c24adc87860f06d4969617085cbf3eb1a0b1c81abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c48a08b2afd47ff128f001c24adc87860f06d4969617085cbf3eb1a0b1c81abd->leave($__internal_c48a08b2afd47ff128f001c24adc87860f06d4969617085cbf3eb1a0b1c81abd_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f45013ccc3bfbdff0d6e5663f0f488549f833aa3a50ff9013c83555f668def64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45013ccc3bfbdff0d6e5663f0f488549f833aa3a50ff9013c83555f668def64->enter($__internal_f45013ccc3bfbdff0d6e5663f0f488549f833aa3a50ff9013c83555f668def64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_f45013ccc3bfbdff0d6e5663f0f488549f833aa3a50ff9013c83555f668def64->leave($__internal_f45013ccc3bfbdff0d6e5663f0f488549f833aa3a50ff9013c83555f668def64_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_f78e4379d2148e37192fc7b7a4f3fbf2b70311723bf57939793e48dfaa45f449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78e4379d2148e37192fc7b7a4f3fbf2b70311723bf57939793e48dfaa45f449->enter($__internal_f78e4379d2148e37192fc7b7a4f3fbf2b70311723bf57939793e48dfaa45f449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f78e4379d2148e37192fc7b7a4f3fbf2b70311723bf57939793e48dfaa45f449->leave($__internal_f78e4379d2148e37192fc7b7a4f3fbf2b70311723bf57939793e48dfaa45f449_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_52b5976a7c81aab2884aff9f121923fbc641c54720afb46afeac8b779e37ebaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b5976a7c81aab2884aff9f121923fbc641c54720afb46afeac8b779e37ebaa->enter($__internal_52b5976a7c81aab2884aff9f121923fbc641c54720afb46afeac8b779e37ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_52b5976a7c81aab2884aff9f121923fbc641c54720afb46afeac8b779e37ebaa->leave($__internal_52b5976a7c81aab2884aff9f121923fbc641c54720afb46afeac8b779e37ebaa_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_1d8174c3efbc2611dc60e7739d851009ee31a584b87b1b1b70d8008f0e70e355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8174c3efbc2611dc60e7739d851009ee31a584b87b1b1b70d8008f0e70e355->enter($__internal_1d8174c3efbc2611dc60e7739d851009ee31a584b87b1b1b70d8008f0e70e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1d8174c3efbc2611dc60e7739d851009ee31a584b87b1b1b70d8008f0e70e355->leave($__internal_1d8174c3efbc2611dc60e7739d851009ee31a584b87b1b1b70d8008f0e70e355_prof);

    }

    // line 178
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_aed6a20dd176d441df4b0631cbdbf3002ceca72c981956557cf6fecbe4e0a235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed6a20dd176d441df4b0631cbdbf3002ceca72c981956557cf6fecbe4e0a235->enter($__internal_aed6a20dd176d441df4b0631cbdbf3002ceca72c981956557cf6fecbe4e0a235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aed6a20dd176d441df4b0631cbdbf3002ceca72c981956557cf6fecbe4e0a235->leave($__internal_aed6a20dd176d441df4b0631cbdbf3002ceca72c981956557cf6fecbe4e0a235_prof);

    }

    // line 183
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e8f7940ef9c432778793c450942dba9f2f5dd204af9d33156d74917cb875f787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f7940ef9c432778793c450942dba9f2f5dd204af9d33156d74917cb875f787->enter($__internal_e8f7940ef9c432778793c450942dba9f2f5dd204af9d33156d74917cb875f787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 185
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 186
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 187
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 188
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_e8f7940ef9c432778793c450942dba9f2f5dd204af9d33156d74917cb875f787->leave($__internal_e8f7940ef9c432778793c450942dba9f2f5dd204af9d33156d74917cb875f787_prof);

    }

    // line 197
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_1a8caae57c76a44fc1c662c4db3dd7bfa48352c9cf7146667e532e77577b32d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8caae57c76a44fc1c662c4db3dd7bfa48352c9cf7146667e532e77577b32d5->enter($__internal_1a8caae57c76a44fc1c662c4db3dd7bfa48352c9cf7146667e532e77577b32d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_1a8caae57c76a44fc1c662c4db3dd7bfa48352c9cf7146667e532e77577b32d5->leave($__internal_1a8caae57c76a44fc1c662c4db3dd7bfa48352c9cf7146667e532e77577b32d5_prof);

    }

    // line 202
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_c9c90a50145ae900049e9fe15d73be140861bc7e104d10542b1dbcb3da032958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c90a50145ae900049e9fe15d73be140861bc7e104d10542b1dbcb3da032958->enter($__internal_c9c90a50145ae900049e9fe15d73be140861bc7e104d10542b1dbcb3da032958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c9c90a50145ae900049e9fe15d73be140861bc7e104d10542b1dbcb3da032958->leave($__internal_c9c90a50145ae900049e9fe15d73be140861bc7e104d10542b1dbcb3da032958_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_09fd4861f0a728d417b17d738f4b7a7cd2468fb95a5abbe67d893aedf4e992de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fd4861f0a728d417b17d738f4b7a7cd2468fb95a5abbe67d893aedf4e992de->enter($__internal_09fd4861f0a728d417b17d738f4b7a7cd2468fb95a5abbe67d893aedf4e992de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 211
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 212
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 214
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 215
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 218
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 219
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 220
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 221
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 227
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_09fd4861f0a728d417b17d738f4b7a7cd2468fb95a5abbe67d893aedf4e992de->leave($__internal_09fd4861f0a728d417b17d738f4b7a7cd2468fb95a5abbe67d893aedf4e992de_prof);

    }

    // line 231
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_d7d4811831744472408459783a5ef68e8ce7131bf0fa3079fb923d7b17d2397e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d4811831744472408459783a5ef68e8ce7131bf0fa3079fb923d7b17d2397e->enter($__internal_d7d4811831744472408459783a5ef68e8ce7131bf0fa3079fb923d7b17d2397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_d7d4811831744472408459783a5ef68e8ce7131bf0fa3079fb923d7b17d2397e->leave($__internal_d7d4811831744472408459783a5ef68e8ce7131bf0fa3079fb923d7b17d2397e_prof);

    }

    // line 235
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_a284e30ea8f360e6d32cdd37ab92cd6c628c22e697bf8a5b4dbbd653c56579a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a284e30ea8f360e6d32cdd37ab92cd6c628c22e697bf8a5b4dbbd653c56579a3->enter($__internal_a284e30ea8f360e6d32cdd37ab92cd6c628c22e697bf8a5b4dbbd653c56579a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_a284e30ea8f360e6d32cdd37ab92cd6c628c22e697bf8a5b4dbbd653c56579a3->leave($__internal_a284e30ea8f360e6d32cdd37ab92cd6c628c22e697bf8a5b4dbbd653c56579a3_prof);

    }

    // line 243
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ede168c7272add5dfa07047b2851bcd1253a41170ef666567aff994d6b81159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede168c7272add5dfa07047b2851bcd1253a41170ef666567aff994d6b81159c->enter($__internal_ede168c7272add5dfa07047b2851bcd1253a41170ef666567aff994d6b81159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo "</div>";
        
        $__internal_ede168c7272add5dfa07047b2851bcd1253a41170ef666567aff994d6b81159c->leave($__internal_ede168c7272add5dfa07047b2851bcd1253a41170ef666567aff994d6b81159c_prof);

    }

    // line 251
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_96b16763ca8e30bf390623191d70cdafd2d86c467c0e94dcaeede0c9c9ff379c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b16763ca8e30bf390623191d70cdafd2d86c467c0e94dcaeede0c9c9ff379c->enter($__internal_96b16763ca8e30bf390623191d70cdafd2d86c467c0e94dcaeede0c9c9ff379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_96b16763ca8e30bf390623191d70cdafd2d86c467c0e94dcaeede0c9c9ff379c->leave($__internal_96b16763ca8e30bf390623191d70cdafd2d86c467c0e94dcaeede0c9c9ff379c_prof);

    }

    // line 257
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_60537ceafaa6e8cb44047a50ed5b449aa70f4d31bef1f8531fe61fc6d674d8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60537ceafaa6e8cb44047a50ed5b449aa70f4d31bef1f8531fe61fc6d674d8f2->enter($__internal_60537ceafaa6e8cb44047a50ed5b449aa70f4d31bef1f8531fe61fc6d674d8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_60537ceafaa6e8cb44047a50ed5b449aa70f4d31bef1f8531fe61fc6d674d8f2->leave($__internal_60537ceafaa6e8cb44047a50ed5b449aa70f4d31bef1f8531fe61fc6d674d8f2_prof);

    }

    // line 263
    public function block_form($context, array $blocks = array())
    {
        $__internal_84a82e7bf9546429f82238e1b83529e87448725ea0d80ca45207108831d4b8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a82e7bf9546429f82238e1b83529e87448725ea0d80ca45207108831d4b8b6->enter($__internal_84a82e7bf9546429f82238e1b83529e87448725ea0d80ca45207108831d4b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 266
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_84a82e7bf9546429f82238e1b83529e87448725ea0d80ca45207108831d4b8b6->leave($__internal_84a82e7bf9546429f82238e1b83529e87448725ea0d80ca45207108831d4b8b6_prof);

    }

    // line 269
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_80afacc5d3e2fc8df6670af1d3c3614a909ee84a1c2f7f9a195f2848e9727428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80afacc5d3e2fc8df6670af1d3c3614a909ee84a1c2f7f9a195f2848e9727428->enter($__internal_80afacc5d3e2fc8df6670af1d3c3614a909ee84a1c2f7f9a195f2848e9727428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 271
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 272
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 274
            $context["form_method"] = "POST";
        }
        // line 276
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 277
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 278
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_80afacc5d3e2fc8df6670af1d3c3614a909ee84a1c2f7f9a195f2848e9727428->leave($__internal_80afacc5d3e2fc8df6670af1d3c3614a909ee84a1c2f7f9a195f2848e9727428_prof);

    }

    // line 282
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_75868907ab910eaef11c36c44a500f30a92c58d24c9f11c63ac54f2c5f52d789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75868907ab910eaef11c36c44a500f30a92c58d24c9f11c63ac54f2c5f52d789->enter($__internal_75868907ab910eaef11c36c44a500f30a92c58d24c9f11c63ac54f2c5f52d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 283
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 286
        echo "</form>";
        
        $__internal_75868907ab910eaef11c36c44a500f30a92c58d24c9f11c63ac54f2c5f52d789->leave($__internal_75868907ab910eaef11c36c44a500f30a92c58d24c9f11c63ac54f2c5f52d789_prof);

    }

    // line 289
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_ed01b891eb72fa2e7e1333a9c3baa2cc9a8f4a9b04182064d5d53b0dfb4e0c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed01b891eb72fa2e7e1333a9c3baa2cc9a8f4a9b04182064d5d53b0dfb4e0c6c->enter($__internal_ed01b891eb72fa2e7e1333a9c3baa2cc9a8f4a9b04182064d5d53b0dfb4e0c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 290
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_ed01b891eb72fa2e7e1333a9c3baa2cc9a8f4a9b04182064d5d53b0dfb4e0c6c->leave($__internal_ed01b891eb72fa2e7e1333a9c3baa2cc9a8f4a9b04182064d5d53b0dfb4e0c6c_prof);

    }

    // line 293
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_065e869376d568f195e12ecfe1524ec7866cab65bc9157f8acfafa83d25e424d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065e869376d568f195e12ecfe1524ec7866cab65bc9157f8acfafa83d25e424d->enter($__internal_065e869376d568f195e12ecfe1524ec7866cab65bc9157f8acfafa83d25e424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 294
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 295
            echo "<ul>";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 297
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "</ul>";
        }
        
        $__internal_065e869376d568f195e12ecfe1524ec7866cab65bc9157f8acfafa83d25e424d->leave($__internal_065e869376d568f195e12ecfe1524ec7866cab65bc9157f8acfafa83d25e424d_prof);

    }

    // line 303
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_568d3639fc0a9aabbdb1e4b5ce12db19e6aced49cf060f84dccce20e320b09a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568d3639fc0a9aabbdb1e4b5ce12db19e6aced49cf060f84dccce20e320b09a4->enter($__internal_568d3639fc0a9aabbdb1e4b5ce12db19e6aced49cf060f84dccce20e320b09a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 305
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 306
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_568d3639fc0a9aabbdb1e4b5ce12db19e6aced49cf060f84dccce20e320b09a4->leave($__internal_568d3639fc0a9aabbdb1e4b5ce12db19e6aced49cf060f84dccce20e320b09a4_prof);

    }

    // line 313
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_00b8bcf591910a03f156a2b274e8d612e8308cecec959911ccfd5a30c15ec82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b8bcf591910a03f156a2b274e8d612e8308cecec959911ccfd5a30c15ec82d->enter($__internal_00b8bcf591910a03f156a2b274e8d612e8308cecec959911ccfd5a30c15ec82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_00b8bcf591910a03f156a2b274e8d612e8308cecec959911ccfd5a30c15ec82d->leave($__internal_00b8bcf591910a03f156a2b274e8d612e8308cecec959911ccfd5a30c15ec82d_prof);

    }

    // line 319
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_5e622f50d714cc54bc90bdd71cfdc4cef55f4fa31e179e5d4c760f89f1d4d5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e622f50d714cc54bc90bdd71cfdc4cef55f4fa31e179e5d4c760f89f1d4d5bb->enter($__internal_5e622f50d714cc54bc90bdd71cfdc4cef55f4fa31e179e5d4c760f89f1d4d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 320
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 321
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 322
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 323
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !(isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
                // line 325
                echo " ";
                // line 326
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 327
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 328
$context["attrvalue"] === true)) {
                    // line 329
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 330
$context["attrvalue"] === false)) {
                    // line 331
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5e622f50d714cc54bc90bdd71cfdc4cef55f4fa31e179e5d4c760f89f1d4d5bb->leave($__internal_5e622f50d714cc54bc90bdd71cfdc4cef55f4fa31e179e5d4c760f89f1d4d5bb_prof);

    }

    // line 336
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_9aa53024f2bacbef97b1f4fc13c7fef92d174935060e6a51871240f7bd816e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa53024f2bacbef97b1f4fc13c7fef92d174935060e6a51871240f7bd816e9c->enter($__internal_9aa53024f2bacbef97b1f4fc13c7fef92d174935060e6a51871240f7bd816e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 337
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 339
            echo " ";
            // line 340
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 342
$context["attrvalue"] === true)) {
                // line 343
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 344
$context["attrvalue"] === false)) {
                // line 345
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9aa53024f2bacbef97b1f4fc13c7fef92d174935060e6a51871240f7bd816e9c->leave($__internal_9aa53024f2bacbef97b1f4fc13c7fef92d174935060e6a51871240f7bd816e9c_prof);

    }

    // line 350
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_40e9e85dc1783aaa3ed0b6e28524ce97dc3678fdafe37888779f683826826597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e9e85dc1783aaa3ed0b6e28524ce97dc3678fdafe37888779f683826826597->enter($__internal_40e9e85dc1783aaa3ed0b6e28524ce97dc3678fdafe37888779f683826826597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 351
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_40e9e85dc1783aaa3ed0b6e28524ce97dc3678fdafe37888779f683826826597->leave($__internal_40e9e85dc1783aaa3ed0b6e28524ce97dc3678fdafe37888779f683826826597_prof);

    }

    // line 364
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_302d0f18a4712636b840adc6f5be2cc20609cc7e4a9d3a5f2abb0f43153c2556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302d0f18a4712636b840adc6f5be2cc20609cc7e4a9d3a5f2abb0f43153c2556->enter($__internal_302d0f18a4712636b840adc6f5be2cc20609cc7e4a9d3a5f2abb0f43153c2556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_302d0f18a4712636b840adc6f5be2cc20609cc7e4a9d3a5f2abb0f43153c2556->leave($__internal_302d0f18a4712636b840adc6f5be2cc20609cc7e4a9d3a5f2abb0f43153c2556_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1292 => 372,  1290 => 371,  1285 => 370,  1283 => 369,  1278 => 368,  1276 => 367,  1274 => 366,  1270 => 365,  1264 => 364,  1249 => 359,  1247 => 358,  1242 => 357,  1240 => 356,  1235 => 355,  1233 => 354,  1231 => 353,  1227 => 352,  1218 => 351,  1212 => 350,  1197 => 345,  1195 => 344,  1190 => 343,  1188 => 342,  1183 => 341,  1181 => 340,  1179 => 339,  1175 => 338,  1169 => 337,  1163 => 336,  1147 => 331,  1145 => 330,  1140 => 329,  1138 => 328,  1133 => 327,  1131 => 326,  1129 => 325,  1124 => 324,  1120 => 323,  1116 => 322,  1112 => 321,  1106 => 320,  1100 => 319,  1089 => 315,  1085 => 314,  1079 => 313,  1067 => 306,  1065 => 305,  1061 => 304,  1055 => 303,  1047 => 299,  1039 => 297,  1035 => 296,  1033 => 295,  1031 => 294,  1025 => 293,  1016 => 290,  1010 => 289,  1003 => 286,  1000 => 284,  998 => 283,  992 => 282,  982 => 278,  980 => 277,  953 => 276,  950 => 274,  947 => 272,  945 => 271,  943 => 270,  937 => 269,  930 => 266,  928 => 265,  926 => 264,  920 => 263,  913 => 258,  907 => 257,  900 => 254,  898 => 253,  896 => 252,  890 => 251,  883 => 248,  881 => 247,  879 => 246,  877 => 245,  875 => 244,  869 => 243,  862 => 240,  856 => 235,  845 => 231,  822 => 227,  818 => 224,  815 => 221,  814 => 220,  813 => 219,  811 => 218,  809 => 217,  806 => 215,  804 => 214,  801 => 212,  799 => 211,  797 => 210,  791 => 209,  784 => 204,  782 => 203,  776 => 202,  769 => 199,  767 => 198,  761 => 197,  748 => 194,  744 => 191,  741 => 188,  740 => 187,  739 => 186,  737 => 185,  735 => 184,  729 => 183,  722 => 180,  720 => 179,  714 => 178,  707 => 175,  705 => 174,  699 => 173,  692 => 170,  690 => 169,  684 => 168,  677 => 165,  675 => 164,  669 => 163,  661 => 160,  659 => 159,  653 => 158,  646 => 155,  644 => 154,  638 => 153,  631 => 150,  629 => 149,  623 => 148,  616 => 145,  610 => 144,  603 => 141,  601 => 140,  595 => 139,  588 => 136,  586 => 135,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 364,  153 => 350,  151 => 336,  149 => 319,  147 => 313,  144 => 310,  142 => 303,  140 => 293,  138 => 289,  136 => 282,  134 => 269,  132 => 263,  130 => 257,  128 => 251,  126 => 243,  124 => 235,  122 => 231,  120 => 209,  118 => 202,  116 => 197,  114 => 183,  112 => 178,  110 => 173,  108 => 168,  106 => 163,  104 => 158,  102 => 153,  100 => 148,  98 => 144,  96 => 139,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/var/www/html/project_w_ciemno/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
