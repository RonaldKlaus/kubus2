<?php

/* KubusBackendBundle::_navigation.html.twig */
class __TwigTemplate_24284aff89c3612f0e0b890754f2e83c0888d6e804d6e8bf5a252fb1c066e311 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-static\" role=\"navigation\">
  <div class=\"navbar-header\">
    ";
        // line 9
        echo "    <a class=\"navbar-brand\" href=\"#\">KuBuS</a>
  </div>
  <div class=\"collapse navbar-collapse bs-js-navbar-scrollspy\">
    <ul class=\"nav navbar-nav\">
      ";
        // line 13
        if (array_key_exists("person", $context)) {
            // line 14
            echo "      <li class=\"dropdown\">
        <!-- if controller-check faild, don't generate menu-->
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Personen <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <!-- if Controller-check was ok, check every possible Action -->
          ";
            // line 19
            if (array_key_exists("person", $context)) {
                // line 20
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("user_index");
                echo "\">Alle Personen <span class=\"badge\">137</span></a> </li>
          ";
            }
            // line 22
            echo "          ";
            if (array_key_exists("person", $context)) {
                // line 23
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("user_create");
                echo "\">Neue Person</a> </li>
          ";
            }
            // line 25
            echo "        </ul>
      </li>
      ";
        }
        // line 28
        echo "      ";
        if (array_key_exists("person", $context)) {
            // line 29
            echo "      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"glyphicon glyphicon-star\"></span> Kurse <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Alle Kurse <span class=\"badge\">32</span></a> </li>
          <li><a href=\"#\">Neuer Kurs</a> </li>
        </ul>
      </li>
      ";
        }
        // line 37
        echo "      ";
        if (array_key_exists("person", $context)) {
            // line 38
            echo "      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"glyphicon glyphicon-bookmark\"></span> Anmeldungen <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Aktuelle Anmeldungen <span class=\"badge\">200</span></a> </li>
          <li><a href=\"#\">Vergangene Anmeldungen</a> </li>
        </ul>
      </li>
      ";
        }
        // line 46
        echo "      ";
        if (array_key_exists("person", $context)) {
            // line 47
            echo "      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"glyphicon glyphicon-envelope\"></span> Email<span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Email schreiben</a> </li>
          <li><a href=\"#\">Alle Emailtext</a> </li>
        </ul>
      </li>
      ";
        }
        // line 55
        echo "      ";
        if (array_key_exists("person", $context)) {
            // line 56
            echo "      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"glyphicon glyphicon-stats\"></span> Statistik<span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Personen</a> </li>
          <li><a href=\"#\">Kurse</a> </li>
        </ul>
      </li>
      ";
        }
        // line 64
        echo "      ";
        if (array_key_exists("person", $context)) {
            // line 65
            echo "      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"glyphicon glyphicon-cog\"></span> Einstellungen <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Promotionsprogramme <span class=\"badge\">18</span></a></li>
          <li><a href=\"#\">Status</a> </li>
          <li><a href=\"#\">Texte und Sprachen</a> </li>
          <li><a href=\"#\">Rollen und Rechte</a> </li>
        </ul>
      </li>
      ";
        }
        // line 75
        echo "    </ul>
    <ul class=\"nav navbar-nav pull-right\">
      ";
        // line 77
        if (array_key_exists("person", $context)) {
            // line 78
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hubackend/images/person.pic"), "html", null, true);
            echo "\" alt=\"avatar\" style='max-height: 33px' class=\"pull-left navbar-btn\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name"), "html", null, true);
            echo "<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id"))), "html", null, true);
            echo "\">Meine Daten</a> </li>
            <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id"))), "html", null, true);
            echo "\">Meine Anmeldungen (Nutzer)</a> </li>
            <li><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id"))), "html", null, true);
            echo "\">Meine Kurse (Trainer)</a> </li>
            <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("permission_logout");
            echo "\">Log out</a> </li>
          </ul>
        </li>
      ";
        } else {
            // line 89
            echo "        <form class=\"form-inline\" role=\"form\" action=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" method=\"post\">
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"loginEmail\">Email address</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"loginEmail\" placeholder=\"Email\">
          </div>
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"loginPassword\">Password</label>
            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"loginPassword\" placeholder=\"Password\">
          </div>
          <button type=\"submit\" class=\"btn navbar-btn btn-default\">Login</button>
        </form>
      ";
        }
        // line 101
        echo "    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "KubusBackendBundle::_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 101,  156 => 85,  152 => 84,  148 => 83,  144 => 82,  139 => 80,  133 => 78,  131 => 77,  127 => 75,  115 => 65,  102 => 56,  99 => 55,  89 => 47,  86 => 46,  60 => 28,  49 => 23,  46 => 22,  40 => 20,  38 => 19,  29 => 13,  23 => 9,  19 => 1,  73 => 37,  67 => 10,  61 => 7,  55 => 25,  50 => 14,  48 => 13,  44 => 11,  42 => 10,  39 => 9,  37 => 5,  34 => 4,  170 => 66,  163 => 89,  151 => 55,  145 => 52,  138 => 48,  132 => 47,  126 => 46,  120 => 45,  116 => 44,  112 => 64,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  80 => 35,  76 => 38,  72 => 33,  66 => 32,  63 => 29,  59 => 30,  31 => 14,  28 => 3,);
    }
}
