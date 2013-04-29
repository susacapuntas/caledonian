<?php

/* _header.twig */
class __TwigTemplate_aa6cbcd36f081f29ff2dc8569ba848e5 extends Twig_Template
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
        $this->env->loadTemplate("_header_basic.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("active", $context))) {
            $context["active"] = "dashboard";
        }
        // line 4
        echo "
<div class=\"navbar navbar-fixed-top \">
    <div class=\"navbar-bolt navbar-inverse\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
        echo "\">
                <strong>bolt</strong> <span class=\"hidden-phone\"> ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "general", array(), "any", false, true), "sitename", array(), "any", true, true)) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "general"), "sitename"), "html", null, true);
        }
        echo "</span>
            </a>

            ";
        // line 15
        $this->env->loadTemplate("_sub_mainmenu.twig")->display($context);
        // line 16
        echo "
        </div>
    </div>
</div>

<div class=\"container-fluid\">

";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "info"), "method")) {
            // line 24
            echo "    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 27
                echo "            ";
                echo (isset($context["msg"]) ? $context["msg"] : null);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "    </div>
";
        }
        // line 31
        echo "
";
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "error"), "method")) {
            // line 33
            echo "    <div class=\"alert alert-error\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 36
                echo "            ";
                echo (isset($context["msg"]) ? $context["msg"] : null);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "    </div>
";
        }
        // line 40
        echo "
";
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "warning"), "method")) {
            // line 42
            echo "    <div class=\"alert alert-warning\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 45
                echo "            ";
                echo (isset($context["msg"]) ? $context["msg"] : null);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 47
            echo "    </div>
";
        }
        // line 49
        echo "
";
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "success"), "method")) {
            // line 51
            echo "    <div class=\"alert alert-success\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 54
                echo "            ";
                echo (isset($context["msg"]) ? $context["msg"] : null);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 56
            echo "    </div>
";
        }
        // line 58
        echo "
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 58,  158 => 56,  149 => 54,  145 => 53,  141 => 51,  139 => 50,  136 => 49,  132 => 47,  119 => 44,  115 => 42,  113 => 41,  110 => 40,  97 => 36,  93 => 35,  89 => 33,  87 => 32,  84 => 31,  80 => 29,  63 => 24,  61 => 23,  52 => 16,  41 => 12,  37 => 11,  28 => 4,  24 => 3,  270 => 93,  259 => 85,  253 => 82,  248 => 80,  240 => 74,  225 => 72,  220 => 69,  205 => 67,  203 => 66,  200 => 65,  183 => 64,  174 => 58,  170 => 57,  165 => 55,  161 => 54,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  131 => 48,  127 => 46,  123 => 45,  117 => 43,  111 => 40,  106 => 38,  103 => 38,  99 => 37,  96 => 36,  91 => 33,  85 => 32,  79 => 29,  74 => 28,  71 => 27,  67 => 26,  60 => 22,  56 => 20,  54 => 19,  50 => 15,  43 => 13,  39 => 12,  34 => 9,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
