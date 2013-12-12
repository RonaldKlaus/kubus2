<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_da7fa6f87624f3c8fa1de5c8d7d769c286acd55ac011bb677e53de7ea523fc0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\">
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) || (((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $context["logger"]->getdisplay_message($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) > 1)) {
                        // line 101
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "line"), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 116
                        echo ((((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 126
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 121,  327 => 114,  321 => 112,  318 => 111,  306 => 107,  297 => 104,  274 => 97,  265 => 96,  175 => 65,  462 => 202,  449 => 198,  446 => 197,  439 => 195,  429 => 188,  422 => 184,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  351 => 120,  348 => 140,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  300 => 105,  289 => 113,  286 => 112,  267 => 101,  262 => 98,  256 => 96,  226 => 84,  216 => 79,  200 => 72,  178 => 66,  165 => 60,  153 => 56,  170 => 66,  100 => 39,  150 => 55,  137 => 66,  113 => 48,  148 => 83,  23 => 1,  20 => 1,  77 => 16,  53 => 12,  90 => 27,  70 => 19,  58 => 14,  34 => 4,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1219 => 355,  1209 => 349,  1200 => 347,  1196 => 346,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1141 => 321,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1032 => 283,  1029 => 282,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  892 => 225,  889 => 224,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  814 => 191,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  715 => 151,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  694 => 138,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  649 => 122,  640 => 119,  635 => 117,  617 => 112,  614 => 111,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  464 => 71,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  426 => 58,  414 => 52,  408 => 176,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  366 => 33,  363 => 126,  344 => 119,  342 => 137,  332 => 116,  316 => 16,  313 => 15,  311 => 14,  299 => 8,  293 => 6,  290 => 5,  281 => 388,  276 => 381,  271 => 374,  266 => 366,  263 => 95,  255 => 93,  250 => 341,  248 => 94,  245 => 335,  233 => 87,  215 => 280,  212 => 78,  207 => 75,  197 => 71,  194 => 70,  191 => 67,  186 => 239,  184 => 233,  181 => 65,  174 => 65,  146 => 181,  134 => 54,  129 => 148,  114 => 111,  84 => 24,  76 => 25,  1618 => 590,  1614 => 588,  1612 => 587,  1609 => 586,  1602 => 581,  1600 => 580,  1598 => 579,  1595 => 578,  1590 => 575,  1579 => 573,  1574 => 572,  1571 => 571,  1568 => 570,  1559 => 565,  1556 => 564,  1552 => 562,  1546 => 560,  1543 => 559,  1540 => 558,  1534 => 556,  1528 => 554,  1525 => 553,  1522 => 551,  1502 => 549,  1499 => 548,  1496 => 547,  1493 => 546,  1490 => 545,  1487 => 544,  1484 => 543,  1481 => 542,  1479 => 541,  1476 => 540,  1473 => 539,  1470 => 538,  1467 => 537,  1464 => 536,  1461 => 535,  1458 => 534,  1454 => 533,  1452 => 532,  1449 => 531,  1442 => 524,  1436 => 522,  1430 => 520,  1428 => 519,  1426 => 518,  1423 => 517,  1416 => 510,  1412 => 508,  1405 => 506,  1402 => 502,  1398 => 501,  1393 => 500,  1390 => 499,  1383 => 497,  1380 => 492,  1375 => 491,  1372 => 490,  1369 => 489,  1366 => 488,  1351 => 486,  1348 => 485,  1344 => 484,  1341 => 483,  1323 => 482,  1321 => 481,  1319 => 381,  1316 => 479,  1308 => 473,  1306 => 472,  1304 => 471,  1302 => 469,  1299 => 468,  1290 => 464,  1285 => 462,  1283 => 461,  1280 => 460,  1272 => 455,  1261 => 453,  1259 => 452,  1239 => 451,  1236 => 450,  1227 => 445,  1224 => 444,  1221 => 356,  1218 => 442,  1216 => 354,  1213 => 440,  1204 => 435,  1201 => 434,  1198 => 433,  1195 => 432,  1193 => 345,  1190 => 344,  1181 => 426,  1179 => 425,  1176 => 424,  1169 => 418,  1164 => 417,  1162 => 416,  1159 => 415,  1151 => 408,  1145 => 406,  1143 => 322,  1135 => 404,  1130 => 403,  1127 => 402,  1121 => 400,  1118 => 320,  1116 => 398,  1113 => 397,  1104 => 393,  1098 => 313,  1094 => 390,  1089 => 389,  1083 => 386,  1080 => 385,  1077 => 305,  1075 => 383,  1072 => 382,  1066 => 374,  1060 => 372,  1058 => 371,  1055 => 370,  1049 => 369,  1047 => 368,  1039 => 367,  1036 => 284,  1033 => 365,  1027 => 281,  1021 => 359,  1019 => 358,  1016 => 276,  1010 => 356,  1008 => 355,  1002 => 354,  999 => 353,  996 => 352,  989 => 349,  986 => 348,  978 => 342,  972 => 340,  969 => 339,  963 => 337,  960 => 336,  954 => 334,  951 => 333,  945 => 331,  943 => 330,  939 => 243,  937 => 328,  921 => 327,  918 => 234,  915 => 233,  912 => 324,  909 => 323,  906 => 322,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 317,  888 => 316,  885 => 315,  883 => 314,  881 => 220,  878 => 219,  870 => 308,  867 => 307,  864 => 306,  861 => 305,  859 => 304,  856 => 303,  850 => 297,  843 => 294,  840 => 293,  837 => 292,  835 => 291,  828 => 197,  822 => 288,  819 => 287,  817 => 192,  812 => 190,  810 => 284,  808 => 283,  805 => 282,  797 => 278,  794 => 277,  792 => 276,  789 => 275,  781 => 271,  778 => 270,  776 => 269,  773 => 268,  764 => 169,  760 => 261,  756 => 165,  752 => 259,  747 => 258,  744 => 257,  738 => 255,  735 => 254,  733 => 253,  730 => 252,  721 => 153,  718 => 246,  712 => 150,  710 => 149,  706 => 242,  701 => 241,  698 => 240,  695 => 139,  689 => 137,  686 => 236,  684 => 235,  681 => 234,  673 => 229,  670 => 228,  668 => 227,  667 => 226,  666 => 126,  664 => 224,  661 => 223,  654 => 123,  643 => 120,  638 => 118,  634 => 209,  630 => 207,  624 => 205,  621 => 204,  619 => 113,  610 => 202,  607 => 201,  601 => 199,  598 => 107,  596 => 106,  593 => 105,  590 => 195,  588 => 194,  586 => 193,  583 => 192,  575 => 186,  573 => 185,  565 => 181,  562 => 180,  560 => 179,  547 => 93,  539 => 176,  537 => 175,  534 => 174,  527 => 91,  525 => 170,  521 => 168,  519 => 167,  517 => 166,  514 => 165,  507 => 160,  504 => 159,  498 => 158,  494 => 156,  492 => 155,  487 => 153,  483 => 152,  467 => 72,  458 => 148,  447 => 145,  441 => 196,  438 => 142,  436 => 141,  433 => 60,  431 => 189,  428 => 59,  420 => 133,  417 => 132,  415 => 180,  412 => 130,  405 => 49,  395 => 124,  389 => 120,  378 => 116,  372 => 115,  361 => 146,  357 => 123,  352 => 111,  350 => 26,  347 => 109,  340 => 105,  338 => 135,  335 => 134,  329 => 131,  324 => 113,  317 => 95,  310 => 92,  308 => 13,  303 => 106,  296 => 87,  291 => 102,  288 => 101,  275 => 105,  270 => 102,  260 => 363,  257 => 72,  253 => 342,  244 => 67,  239 => 65,  234 => 64,  231 => 83,  228 => 62,  225 => 298,  222 => 297,  213 => 78,  210 => 270,  205 => 54,  202 => 77,  188 => 48,  185 => 74,  172 => 64,  161 => 63,  127 => 62,  124 => 132,  118 => 49,  81 => 23,  65 => 31,  211 => 40,  198 => 37,  190 => 76,  152 => 84,  126 => 46,  104 => 32,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 144,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 125,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 22,  322 => 97,  314 => 94,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 86,  285 => 3,  283 => 100,  278 => 98,  268 => 373,  264 => 84,  258 => 94,  252 => 80,  247 => 68,  241 => 90,  229 => 85,  220 => 81,  214 => 41,  177 => 42,  169 => 86,  140 => 58,  132 => 47,  128 => 49,  107 => 13,  61 => 15,  273 => 380,  269 => 94,  254 => 92,  243 => 92,  240 => 326,  238 => 312,  235 => 85,  230 => 303,  227 => 301,  224 => 81,  221 => 77,  219 => 59,  217 => 289,  208 => 55,  204 => 267,  179 => 101,  159 => 196,  143 => 51,  135 => 53,  119 => 40,  102 => 40,  71 => 32,  67 => 20,  63 => 18,  59 => 14,  38 => 7,  94 => 34,  89 => 47,  85 => 24,  75 => 19,  68 => 6,  56 => 22,  87 => 34,  21 => 2,  26 => 9,  93 => 32,  88 => 25,  78 => 30,  46 => 10,  27 => 3,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 51,  183 => 82,  171 => 216,  166 => 209,  163 => 61,  158 => 62,  156 => 62,  151 => 59,  142 => 29,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 30,  49 => 11,  24 => 3,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 17,  40 => 20,  37 => 5,  22 => 2,  246 => 93,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 45,  115 => 65,  111 => 47,  108 => 42,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 30,  66 => 27,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 265,  193 => 50,  189 => 240,  187 => 75,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 203,  162 => 59,  154 => 60,  149 => 182,  147 => 54,  144 => 70,  141 => 51,  133 => 78,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 36,  103 => 39,  99 => 31,  95 => 42,  92 => 27,  86 => 32,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 22,  57 => 25,  54 => 14,  51 => 13,  48 => 13,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
