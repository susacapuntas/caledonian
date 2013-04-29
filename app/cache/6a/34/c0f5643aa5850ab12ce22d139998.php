<?php

/* _header_basic.twig */
class __TwigTemplate_6a34c0f5643aa5850ab12ce22d139998 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>bolt ";
        // line 7
        if (array_key_exists("title", $context)) {
            echo "- ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        echo "</title>

    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery-1.9.1.min.js\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/underscore-min.js\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/backbone-min.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery-ui-1.10.1.custom.min.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/smoothness/jquery-ui-1.10.1.custom.min.css\">

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery.plugins.js\"></script>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/font-awesome.min.css\">

    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/select2/select2.css\">
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/select2/select2.js\"></script>

    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/ckeditor/ckeditor.js\"></script>

    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload-ui.css\">

    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/moment.min.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/moment-langs.min.js\"></script>
    <script type=\"text/javascript\">
        moment.lang('";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "');
    </script>

    <script>var ckeditor_lang=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "\";</script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bolt.js\"></script>

    ";
        // line 45
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bolt.css\">

    <link rel=\"shortcut icon\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/favicon-bolt.ico\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-144x144.png\">

</head>
<body>";
    }

    public function getTemplateName()
    {
        return "_header_basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  134 => 42,  130 => 41,  124 => 38,  102 => 31,  92 => 27,  88 => 26,  83 => 24,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  47 => 12,  35 => 9,  162 => 58,  158 => 56,  149 => 48,  145 => 47,  141 => 51,  139 => 45,  136 => 49,  132 => 47,  119 => 36,  115 => 35,  113 => 41,  110 => 33,  97 => 29,  93 => 35,  89 => 33,  87 => 32,  84 => 31,  80 => 29,  63 => 24,  61 => 23,  52 => 14,  41 => 12,  37 => 11,  28 => 4,  24 => 3,  270 => 93,  259 => 85,  253 => 82,  248 => 80,  240 => 74,  225 => 72,  220 => 69,  205 => 67,  203 => 66,  200 => 65,  183 => 64,  174 => 58,  170 => 57,  165 => 55,  161 => 51,  156 => 52,  153 => 49,  151 => 50,  148 => 49,  131 => 48,  127 => 46,  123 => 45,  117 => 43,  111 => 40,  106 => 32,  103 => 38,  99 => 37,  96 => 36,  91 => 33,  85 => 32,  79 => 23,  74 => 21,  71 => 27,  67 => 26,  60 => 22,  56 => 20,  54 => 19,  50 => 15,  43 => 11,  39 => 10,  34 => 9,  32 => 8,  27 => 7,  21 => 2,  19 => 1,);
    }
}
