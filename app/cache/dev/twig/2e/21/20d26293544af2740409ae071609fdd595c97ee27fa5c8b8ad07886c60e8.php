<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_2e2120d26293544af2740409ae071609fdd595c97ee27fa5c8b8ad07886c60e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'button_attributes' => array($this, 'block_button_attributes'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_tabs' => array($this, 'block_form_tabs'),
            'tabs_widget' => array($this, 'block_tabs_widget'),
            'form_tab' => array($this, 'block_form_tab'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'file_widget' => array($this, 'block_file_widget'),
            'form_legend' => array($this, 'block_form_legend'),
            'form_label' => array($this, 'block_form_label'),
            'help_label' => array($this, 'block_help_label'),
            'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
            'help_label_popover' => array($this, 'block_help_label_popover'),
            'form_rows_visible' => array($this, 'block_form_rows_visible'),
            'form_row' => array($this, 'block_form_row'),
            'form_message' => array($this, 'block_form_message'),
            'form_help' => array($this, 'block_form_help'),
            'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
            'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
            'collection_button' => array($this, 'block_collection_button'),
            'label_asterisk' => array($this, 'block_label_asterisk'),
            'widget_addon' => array($this, 'block_widget_addon'),
            'form_errors' => array($this, 'block_form_errors'),
            'error_type' => array($this, 'block_error_type'),
            'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
            'help_widget_popover' => array($this, 'block_help_widget_popover'),
            'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
            'form_widget' => array($this, 'block_form_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 12
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 15
        if ((!twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))))) {
            echo " <span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "\"";
            if ((!twig_test_empty((isset($context["icon_color"]) ? $context["icon_color"] : $this->getContext($context, "icon_color"))))) {
                echo " style=\"color: ";
                echo twig_escape_filter($this->env, (isset($context["icon_color"]) ? $context["icon_color"] : $this->getContext($context, "icon_color")), "html", null, true);
                echo ";\" ";
            }
            echo " ></span> ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        if (((!(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline"))) && (isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
            // line 24
            echo "    ";
            if ((!(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
                // line 25
                echo "    ";
                $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")) . " ") . (isset($context["horizontal_label_offset_class"]) ? $context["horizontal_label_offset_class"] : $this->getContext($context, "horizontal_label_offset_class")));
                // line 26
                echo "    ";
            }
            // line 27
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
    ";
        // line 30
        if (((!(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline"))) && (isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
            // line 31
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    </div>
    ";
        }
    }

    // line 36
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 37
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 38
        echo "    ";
        if (((!(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline"))) && (isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
            // line 39
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
            echo "\">
    ";
        }
        // line 41
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 42
        if (((!(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline"))) && (isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
            // line 43
            echo "    </div>
    ";
        }
    }

    // line 47
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 49
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 50
        echo "    ";
        if (((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && (!(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) && (isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
            // line 51
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
            echo "\">
    ";
        }
        // line 53
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) || (!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))))) {
            // line 54
            echo "    <div class=\"input-group\">
        ";
            // line 55
            if ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))))) {
                // line 56
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 57
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "    ";
        if ((!((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null)))) {
            // line 61
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable")));
            // line 62
            echo "    ";
        }
        // line 63
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 64
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        // line 65
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) || (!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))))) {
            // line 66
            echo "        ";
            if ((!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))) {
                // line 67
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 68
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 70
            echo "    </div>
    ";
        }
        // line 72
        echo "    ";
        if (((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && (!(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) && (isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
            // line 73
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 80
        ob_start();
        // line 81
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 82
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "<fieldset>";
            }
            // line 83
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : $this->getContext($context, "show_legend"))) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabbed")) {
            // line 87
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 90
        echo "    ";
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "
    ";
        // line 91
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabbed")) {
            // line 92
            echo "        </div>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 97
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 98
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "</fieldset>";
            }
            // line 99
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_form_tabs($context, array $blocks = array())
    {
        // line 104
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabsView"), 'widget');
            echo "
";
        }
    }

    // line 109
    public function block_tabs_widget($context, array $blocks = array())
    {
        // line 110
        ob_start();
        // line 111
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "class"), "html", null, true);
        echo "\">
    ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabs"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 113
            echo "        <li";
            if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "active")) {
                echo " class=\"active\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "id"), "html", null, true);
            echo "\">
                ";
            // line 115
            if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "icon")) {
                echo "<span class=\"glyphicon glyphicon-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "icon"), "html", null, true);
                echo "\"></span>";
            }
            // line 116
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "label"), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 124
    public function block_form_tab($context, array $blocks = array())
    {
        // line 125
        echo "<div class=\"tab-pane";
        echo (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tab_active")) ? (" active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
    ";
        // line 126
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
</div>
";
    }

    // line 130
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    <div class=\"collection-items col-lg-9\">
    ";
        // line 133
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 139
        ob_start();
        // line 140
        echo "
    ";
        // line 141
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 142
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 143
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 144
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")))) : ((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class"))))));
            // line 145
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
    ";
        }
        // line 147
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 148
            echo "        ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 149
                echo "        <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
        ";
            }
            // line 151
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 152
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal_label_class" => (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")), "horizontal_input_wrapper_class" => (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
        ";
            // line 155
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 156
                echo "        </div>
        ";
            }
            // line 158
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 160
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 168
            echo "    ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
        }
        // line 170
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 171
            echo "<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
            echo "\">
    <div class=\"checkbox\">
";
        }
        // line 174
        echo "
";
        // line 175
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 176
            echo "    <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
";
        }
        // line 178
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
";
        // line 179
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 180
            echo "    ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 181
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    </label>
    ";
            }
        }
        // line 185
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 186
            echo "    </div>
</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 192
    public function block_date_widget($context, array $blocks = array())
    {
        // line 193
        ob_start();
        // line 194
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 195
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 196
                echo "        <div class=\"input-group date col-lg-9\">
            ";
                // line 197
                if ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))))) {
                    // line 198
                    echo "                ";
                    $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                    // line 199
                    echo "                ";
                    $this->displayBlock("widget_addon", $context, $blocks);
                    echo "
            ";
                }
                // line 201
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable grd-white form-control")));
                // line 202
                echo "            <input type=\"text\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\"  data-form=\"datepicker\" data-date-format=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))), "html", null, true);
                echo "\"/>
            ";
                // line 203
                if ((!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))) {
                    // line 204
                    echo "                ";
                    $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                    // line 205
                    echo "                ";
                    $this->displayBlock("widget_addon", $context, $blocks);
                    echo "
            ";
                }
                // line 207
                echo "\t    <script type=\"text/javascript\">
\t\t\$(document).ready(function () {
\t\t    \$(";
                // line 209
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ").datepicker();
                    \$(";
                // line 210
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ").keydown(function(e) {
                        if(e.which == 27) {
                            \$(";
                // line 212
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ").datepicker('hide');
                                return false;
                            }
                        });
                });
            </script>
        </div>
    ";
            } else {
                // line 220
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 223
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline"))));
            // line 224
            echo "            ";
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 225
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . "")), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3")))), "{{ month }}" =>             // line 226
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . "")), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3")))), "{{ day }}" =>             // line 227
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . "")), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3"))))));
            // line 228
            echo "
        ";
            // line 229
            $this->displayBlock("help", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 234
    public function block_time_widget($context, array $blocks = array())
    {
        // line 235
        ob_start();
        // line 236
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 237
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 239
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 240
            echo "        ";
            ob_start();
            // line 241
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', array("attr" => array("size" => "1"), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
            echo "
        ";
            // line 242
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', array("attr" => array("size" => "1"), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
            echo "
        ";
            // line 243
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 244
                echo "            :";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', array("attr" => array("size" => "1")));
                echo "
        ";
            }
            // line 246
            echo "        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 247
            echo "        ";
            $this->displayBlock("help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 252
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 253
        ob_start();
        // line 254
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 255
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 257
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 258
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 259
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
                ";
            // line 260
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
                ";
            // line 261
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3"))));
            echo "
                ";
            // line 262
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 268
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 269
        ob_start();
        // line 270
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), array("text" => (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text"), "%")) : ("%"))));
        // line 271
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 275
    public function block_money_widget($context, array $blocks = array())
    {
        // line 276
        ob_start();
        // line 277
        echo "    ";
        $context["widget_addon_prepend"] = ((((((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) != false) || ((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) == null)) && ((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) != "{{ widget }}"))) ? (array("text" => strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))));
        // line 278
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 282
    public function block_file_widget($context, array $blocks = array())
    {
        // line 283
        ob_start();
        // line 284
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "file")) : ("file"));
        // line 285
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
        echo "\">
    ";
        // line 286
        if ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))))) {
            // line 287
            echo "        ";
            $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
            // line 288
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 290
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 291
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && (!(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), null)) : (null)))))) {
            // line 292
            echo "    ";
            if ((!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))) {
                // line 293
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 294
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        // line 297
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 303
    public function block_form_legend($context, array $blocks = array())
    {
        // line 304
        ob_start();
        // line 305
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 306
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 307
            echo "    ";
        }
        // line 308
        echo "    <legend>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</legend>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 312
    public function block_form_label($context, array $blocks = array())
    {
        // line 313
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "label", 1 => "both")))) {
            // line 314
            ob_start();
            // line 315
            echo "    ";
            if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
                // line 316
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                    // line 317
                    echo "            ";
                    $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                    // line 318
                    echo "        ";
                }
                // line 319
                echo "        ";
                if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                    // line 320
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 321
                    echo "        ";
                }
                // line 322
                echo "        ";
                $context["label_attr_class"] = " control-label ";
                // line 323
                echo "        ";
                if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                    // line 324
                    echo "            ";
                    $context["label_attr_class"] = ((isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class")) . (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")));
                    // line 325
                    echo "        ";
                }
                // line 326
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? (" required") : (" optional")))));
                // line 327
                echo "        <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 328
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 329
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 330
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null)))) {
                    // line 331
                    echo "            ";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 333
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label"))) {
                    // line 334
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 336
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title")) {
                    // line 337
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 339
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title")) {
                    // line 340
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 342
                echo "        </label>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 348
    public function block_help_label($context, array $blocks = array())
    {
        // line 349
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</span>
";
    }

    // line 352
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        // line 353
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "placement"), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\">
            ";
        // line 355
        if ((!($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon") === false))) {
            // line 356
            echo "            <span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon"), "html", null, true);
            echo "\"></span>
            ";
        }
        // line 357
        echo "            
            ";
        // line 358
        if ((!($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text") === null))) {
            // line 359
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text"), "html", null, true);
            echo "
            ";
        }
        // line 361
        echo "        </a>
    </span>
";
    }

    // line 365
    public function block_help_label_popover($context, array $blocks = array())
    {
        // line 366
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "placement"), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "content"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" >
            ";
        // line 368
        if ((!($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon") === false))) {
            // line 369
            echo "            <span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon"), "html", null, true);
            echo "\"></span>
            ";
        }
        // line 370
        echo "            
            ";
        // line 371
        if ((!($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text") === null))) {
            // line 372
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text"), "html", null, true);
            echo "
            ";
        }
        // line 374
        echo "        </a>
    </span>
";
    }

    // line 382
    public function block_form_rows_visible($context, array $blocks = array())
    {
        // line 383
        ob_start();
        // line 384
        echo "    ";
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 385
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 386
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 389
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 390
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                echo " ";
                // line 391
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
                echo "
        ";
            }
            // line 393
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 397
    public function block_form_row($context, array $blocks = array())
    {
        // line 398
        ob_start();
        // line 399
        echo "    ";
        if (twig_in_filter("tab", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes"))) {
            // line 400
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } else {
            // line 402
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? (" has-error") : ("")))));
            // line 403
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "
        ";
            // line 404
            echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
            echo " ";
            echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "
        ";
            // line 405
            if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null)))) {
                // line 406
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 408
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_form_message($context, array $blocks = array())
    {
        // line 416
        ob_start();
        // line 417
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 418
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 424
    public function block_form_help($context, array $blocks = array())
    {
        // line 425
        ob_start();
        // line 426
        if ((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block"))) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</p>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 430
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        // line 431
        ob_start();
        // line 432
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) {
            // line 433
            echo "        ";
            $context["button_type"] = "add";
            // line 434
            echo "        ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"));
            // line 435
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 440
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        // line 441
        ob_start();
        // line 442
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) {
            // line 443
            echo "    ";
            $context["button_type"] = "remove";
            // line 444
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn"));
            // line 445
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 450
    public function block_collection_button($context, array $blocks = array())
    {
        // line 451
        echo "<a ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : $this->getContext($context, "button_type")), "html", null, true);
        echo "-btn=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id", array(), "array"), "html", null, true);
        echo "_control_group\">
";
        // line 452
        if (($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon") != "")) {
            // line 453
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon"), "html", null, true);
            echo " ";
            if ((!(null === $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon_color")))) {
                echo "icon-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon_color"), "html", null, true);
            }
            echo "\"></span>
";
        }
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
</a>

";
    }

    // line 460
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 461
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 462
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : $this->getContext($context, "render_required_asterisk"))) {
                echo " <span class=\"asterisk\">*</span>";
            }
        } else {
            // line 464
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : $this->getContext($context, "render_optional_text"))) {
                echo " <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>";
            }
        }
    }

    // line 468
    public function block_widget_addon($context, array $blocks = array())
    {
        // line 469
        ob_start();
        // line 471
        $context["__internal_56a64d53d9812f5d38fe169d98fe1baedae34da18f7bdab17500f0d3056a11c2"] = $this->env->loadTemplate("MopaBootstrapBundle::icons.html.twig");
        // line 472
        $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon")) : (null));
        // line 473
        echo "    <span class=\"input-group-addon\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), false)) : (false))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ($context["__internal_56a64d53d9812f5d38fe169d98fe1baedae34da18f7bdab17500f0d3056a11c2"]->geticon((isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 479
    public function block_form_errors($context, array $blocks = array())
    {
        // line 480
        ob_start();
        // line 481
        if ((isset($context["error_delay"]) ? $context["error_delay"] : $this->getContext($context, "error_delay"))) {
            // line 482
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 483
                echo "        ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 484
                    echo "            ";
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "method")) {
                    }
                    // line 485
                    echo "        ";
                }
                // line 486
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 488
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 489
                echo "        ";
                if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
                    // line 490
                    echo "            ";
                    $context["__internal_8ddc2eff0fd09d1da9e3442733b72980a4ac8a8410588ab3edc5f11635a866c5"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
                    // line 491
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 492
                        echo "                ";
                        echo $context["__internal_8ddc2eff0fd09d1da9e3442733b72980a4ac8a8410588ab3edc5f11635a866c5"]->getflash("danger", (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))));
                        // line 497
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 499
                    echo "        ";
                } else {
                    // line 500
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 501
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 502
                        echo "                ";
                        echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                        // line 506
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 508
                    echo "            </span>
        ";
                }
                // line 510
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 517
    public function block_error_type($context, array $blocks = array())
    {
        // line 518
        ob_start();
        // line 519
        if ((isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type"))) {
            // line 520
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 522
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type"), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 524
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 531
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        // line 532
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 533
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) {
                echo " ";
                // line 534
                echo "        ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => ($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), "class") . " collection-item")));
                // line 535
                echo "    ";
            }
            // line 536
            echo "    ";
            if (array_key_exists("prototype", $context)) {
                // line 537
                echo "        ";
                $context["data_prototype"] = (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item"))))) ? ((((((("<div class=\"collection-item " . twig_join_filter((($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class"))) : ("")), " ")) . "\" id=\"") . $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars"), "id")) . "_control_group\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')) . "</div>")) : ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
                // line 538
                echo "        ";
                $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name"), "__name__")) : ("__name__"));
                // line 539
                echo "        ";
                $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("data-prototype" => (isset($context["data_prototype"]) ? $context["data_prototype"] : $this->getContext($context, "data_prototype")), "data-prototy   pe-name" => (isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : $this->getContext($context, "data_prototype_name")))), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                // line 540
                echo "    ";
            }
            // line 541
            echo "    ";
            // line 542
            echo "    ";
            $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_control_group"), "class" => $this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), "class")));
            // line 543
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 544
                echo "        ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class"), "")) : ("")) . " has-error")));
                // line 545
                echo "    ";
            }
            // line 546
            echo "\t";
            if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
                // line 547
                echo "\t\t";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => (((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class"), "row")) : ("row")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class"))));
                // line 548
                echo "\t";
            }
            // line 549
            echo "    <div";
            if ((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover"))) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 551
            echo "    ";
            if ((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")))) {
                // line 553
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : $this->getContext($context, "show_child_legend"))) {
                    // line 554
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 556
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 558
                echo "    ";
            } else {
                // line 559
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 560
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 562
                echo "    ";
            }
        } else {
            // line 564
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 565
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
    }

    // line 570
    public function block_help_widget_popover($context, array $blocks = array())
    {
        // line 571
        echo " ";
        ob_start();
        // line 572
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 573
            echo " data-";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 575
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 578
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        // line 579
        ob_start();
        // line 580
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 581
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 586
    public function block_form_widget($context, array $blocks = array())
    {
        // line 587
        if (((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")) && (!(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))))) {
            // line 588
            echo "    ";
            $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")) . " ") . (isset($context["horizontal_label_offset_class"]) ? $context["horizontal_label_offset_class"] : $this->getContext($context, "horizontal_label_offset_class")));
        }
        // line 590
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1618 => 590,  1614 => 588,  1612 => 587,  1609 => 586,  1602 => 581,  1600 => 580,  1598 => 579,  1595 => 578,  1590 => 575,  1579 => 573,  1574 => 572,  1571 => 571,  1568 => 570,  1559 => 565,  1556 => 564,  1552 => 562,  1546 => 560,  1543 => 559,  1540 => 558,  1534 => 556,  1528 => 554,  1525 => 553,  1522 => 551,  1502 => 549,  1499 => 548,  1496 => 547,  1493 => 546,  1490 => 545,  1487 => 544,  1484 => 543,  1481 => 542,  1479 => 541,  1476 => 540,  1473 => 539,  1470 => 538,  1467 => 537,  1464 => 536,  1461 => 535,  1458 => 534,  1454 => 533,  1452 => 532,  1449 => 531,  1442 => 524,  1436 => 522,  1430 => 520,  1428 => 519,  1426 => 518,  1423 => 517,  1416 => 510,  1412 => 508,  1405 => 506,  1402 => 502,  1398 => 501,  1393 => 500,  1390 => 499,  1383 => 497,  1380 => 492,  1375 => 491,  1372 => 490,  1369 => 489,  1366 => 488,  1351 => 486,  1348 => 485,  1344 => 484,  1341 => 483,  1323 => 482,  1321 => 481,  1319 => 480,  1316 => 479,  1308 => 473,  1306 => 472,  1304 => 471,  1302 => 469,  1299 => 468,  1290 => 464,  1285 => 462,  1283 => 461,  1280 => 460,  1272 => 455,  1261 => 453,  1259 => 452,  1239 => 451,  1236 => 450,  1227 => 445,  1224 => 444,  1221 => 443,  1218 => 442,  1216 => 441,  1213 => 440,  1204 => 435,  1201 => 434,  1198 => 433,  1195 => 432,  1193 => 431,  1190 => 430,  1181 => 426,  1179 => 425,  1176 => 424,  1169 => 418,  1164 => 417,  1162 => 416,  1159 => 415,  1151 => 408,  1145 => 406,  1143 => 405,  1135 => 404,  1130 => 403,  1127 => 402,  1121 => 400,  1118 => 399,  1116 => 398,  1113 => 397,  1104 => 393,  1098 => 391,  1094 => 390,  1089 => 389,  1083 => 386,  1080 => 385,  1077 => 384,  1075 => 383,  1072 => 382,  1066 => 374,  1060 => 372,  1058 => 371,  1055 => 370,  1049 => 369,  1047 => 368,  1039 => 367,  1036 => 366,  1033 => 365,  1027 => 361,  1021 => 359,  1019 => 358,  1016 => 357,  1010 => 356,  1008 => 355,  1002 => 354,  999 => 353,  996 => 352,  989 => 349,  986 => 348,  978 => 342,  972 => 340,  969 => 339,  963 => 337,  960 => 336,  954 => 334,  951 => 333,  945 => 331,  943 => 330,  939 => 329,  937 => 328,  921 => 327,  918 => 326,  915 => 325,  912 => 324,  909 => 323,  906 => 322,  903 => 321,  900 => 320,  897 => 319,  894 => 318,  891 => 317,  888 => 316,  885 => 315,  883 => 314,  881 => 313,  878 => 312,  870 => 308,  867 => 307,  864 => 306,  861 => 305,  859 => 304,  856 => 303,  850 => 297,  843 => 294,  840 => 293,  837 => 292,  835 => 291,  828 => 290,  822 => 288,  819 => 287,  817 => 286,  812 => 285,  810 => 284,  808 => 283,  805 => 282,  797 => 278,  794 => 277,  792 => 276,  789 => 275,  781 => 271,  778 => 270,  776 => 269,  773 => 268,  764 => 262,  760 => 261,  756 => 260,  752 => 259,  747 => 258,  744 => 257,  738 => 255,  735 => 254,  733 => 253,  730 => 252,  721 => 247,  718 => 246,  712 => 244,  710 => 243,  706 => 242,  701 => 241,  698 => 240,  695 => 239,  689 => 237,  686 => 236,  684 => 235,  681 => 234,  673 => 229,  670 => 228,  668 => 227,  667 => 226,  666 => 225,  664 => 224,  661 => 223,  654 => 220,  643 => 212,  638 => 210,  634 => 209,  630 => 207,  624 => 205,  621 => 204,  619 => 203,  610 => 202,  607 => 201,  601 => 199,  598 => 198,  596 => 197,  593 => 196,  590 => 195,  588 => 194,  586 => 193,  583 => 192,  575 => 186,  573 => 185,  565 => 181,  562 => 180,  560 => 179,  547 => 178,  539 => 176,  537 => 175,  534 => 174,  527 => 171,  525 => 170,  521 => 168,  519 => 167,  517 => 166,  514 => 165,  507 => 160,  504 => 159,  498 => 158,  494 => 156,  492 => 155,  487 => 153,  483 => 152,  467 => 151,  458 => 148,  447 => 145,  441 => 143,  438 => 142,  436 => 141,  433 => 140,  431 => 139,  428 => 138,  420 => 133,  417 => 132,  415 => 131,  412 => 130,  405 => 126,  395 => 124,  389 => 120,  378 => 116,  372 => 115,  361 => 113,  357 => 112,  352 => 111,  350 => 110,  347 => 109,  340 => 105,  338 => 104,  335 => 103,  329 => 99,  324 => 98,  317 => 95,  310 => 92,  308 => 91,  303 => 90,  296 => 87,  291 => 85,  288 => 84,  275 => 81,  270 => 79,  260 => 73,  257 => 72,  253 => 70,  244 => 67,  239 => 65,  234 => 64,  231 => 63,  228 => 62,  225 => 61,  222 => 60,  213 => 57,  210 => 56,  205 => 54,  202 => 53,  188 => 48,  185 => 47,  172 => 41,  161 => 37,  127 => 24,  124 => 23,  118 => 21,  81 => 10,  65 => 4,  211 => 40,  198 => 37,  190 => 49,  152 => 26,  126 => 20,  104 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 149,  457 => 153,  453 => 147,  444 => 144,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 125,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 114,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 97,  314 => 94,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 86,  285 => 89,  283 => 83,  278 => 82,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 45,  220 => 43,  214 => 41,  177 => 42,  169 => 60,  140 => 22,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 80,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 46,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 59,  217 => 42,  208 => 55,  204 => 72,  179 => 43,  159 => 61,  143 => 23,  135 => 53,  119 => 42,  102 => 32,  71 => 6,  67 => 15,  63 => 7,  59 => 14,  38 => 6,  94 => 28,  89 => 13,  85 => 25,  75 => 11,  68 => 5,  56 => 4,  87 => 14,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 9,  46 => 7,  27 => 1,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 51,  183 => 82,  171 => 61,  166 => 39,  163 => 38,  158 => 36,  156 => 66,  151 => 63,  142 => 29,  138 => 54,  136 => 27,  121 => 22,  117 => 17,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 13,  79 => 18,  72 => 16,  69 => 9,  47 => 9,  40 => 8,  37 => 10,  22 => 32,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 19,  120 => 18,  115 => 16,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 11,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 2,  41 => 7,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 38,  199 => 67,  193 => 50,  189 => 71,  187 => 84,  182 => 66,  176 => 33,  173 => 65,  168 => 72,  164 => 30,  162 => 57,  154 => 58,  149 => 31,  147 => 30,  144 => 49,  141 => 48,  133 => 26,  130 => 25,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 15,  95 => 28,  92 => 14,  86 => 12,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 3,  51 => 14,  48 => 13,  45 => 17,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
