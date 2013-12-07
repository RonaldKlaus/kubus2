<?php

/* KubusBackendBundle::layout.html.twig */
class __TwigTemplate_1446ed018d8855e23734c29cdc4cc0142f11acfe1ac4a9bc18d033b474ed6abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "

\t";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        echo "\t
\t\t<h1>KuBuS - Backend</h1> 
\t\t";
        // line 7
        echo twig_include($this->env, $context, "KubusBackendBundle::_navigation.html.twig");
        echo "
\t";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo "\t";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        echo "\t";
    }

    public function getTemplateName()
    {
        return "KubusBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 10,  61 => 7,  55 => 5,  50 => 14,  48 => 13,  44 => 11,  42 => 10,  39 => 9,  37 => 5,  34 => 4,  170 => 66,  163 => 61,  151 => 55,  145 => 52,  138 => 48,  132 => 47,  126 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  80 => 35,  76 => 34,  72 => 33,  66 => 32,  63 => 31,  59 => 30,  31 => 3,  28 => 3,);
    }
}
