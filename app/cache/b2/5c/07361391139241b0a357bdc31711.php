<?php

/* _footer.twig */
class __TwigTemplate_b25c07361391139241b0a357bdc31711 extends Twig_Template
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
        echo "
    </div><!-- /container-fluid -->
</div> <!-- /container -->

<br><br>

<footer id=\"bolt-footer\" class=\"hidden-phone\">
    <i class=\"icon-cog\"></i> <b>Bolt ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
        echo "</b>: ";
        echo $this->env->getExtension('Bolt')->trans("Sophisticated, lightweight & simple CMS");
        echo " -
    <i class=\"icon-heart\"></i > <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("About");
        echo "</a> &ndash;
    <i class=\"icon-external-link\"> </i><a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
</footer>

</body>

<script>
    var path = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "bolt"), "html", null, true);
        echo "\"; var asyncpath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
        echo "\"; var apppath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "\";
    var wysiwyg = { 
       images: ";
        // line 18
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "images")), "html", null, true);
        echo ", 
       tables: ";
        // line 19
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "tables")), "html", null, true);
        echo ", 
       anchor: ";
        // line 20
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "anchor")), "html", null, true);
        echo ", 
       fontcolor: ";
        // line 21
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "fontcolor")), "html", null, true);
        echo ", 
       align: ";
        // line 22
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "align")), "html", null, true);
        echo ", 
       subsuper: ";
        // line 23
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "subsuper")), "html", null, true);
        echo ", 
       embed: ";
        // line 24
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "embed")), "html", null, true);
        echo ", 
       ";
        // line 25
        if (twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "ck"))) {
            echo "ck: ";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "ck"));
            echo ",";
        }
        // line 26
        echo "       ";
        if (twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "filebrowser"))) {
            echo "filebrowser: ";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "general"), "wysiwyg"), "filebrowser"));
        } else {
            echo "filebrowser: false";
        }
        // line 27
        echo "       };
</script>

</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  55 => 18,  46 => 16,  326 => 97,  320 => 96,  315 => 94,  305 => 91,  300 => 90,  297 => 89,  293 => 88,  285 => 86,  281 => 85,  277 => 84,  273 => 83,  269 => 82,  263 => 81,  255 => 79,  251 => 78,  244 => 77,  221 => 70,  217 => 69,  212 => 68,  199 => 64,  194 => 63,  189 => 61,  184 => 60,  181 => 59,  173 => 56,  166 => 54,  159 => 49,  146 => 44,  140 => 41,  128 => 36,  125 => 35,  107 => 30,  94 => 28,  81 => 23,  75 => 23,  72 => 19,  48 => 10,  33 => 6,  22 => 3,  329 => 91,  321 => 88,  313 => 85,  310 => 93,  302 => 81,  294 => 78,  289 => 87,  283 => 71,  276 => 69,  264 => 67,  260 => 66,  257 => 65,  254 => 64,  246 => 62,  243 => 61,  235 => 75,  233 => 58,  229 => 72,  226 => 56,  218 => 54,  215 => 53,  207 => 66,  204 => 50,  196 => 48,  193 => 47,  185 => 45,  178 => 58,  172 => 40,  168 => 55,  164 => 38,  160 => 37,  152 => 35,  144 => 43,  138 => 32,  133 => 31,  109 => 31,  95 => 19,  76 => 14,  68 => 12,  51 => 11,  45 => 8,  38 => 6,  25 => 4,  23 => 3,  157 => 50,  134 => 42,  130 => 37,  124 => 26,  102 => 31,  92 => 27,  88 => 17,  83 => 25,  70 => 20,  66 => 16,  62 => 18,  57 => 12,  47 => 12,  35 => 9,  162 => 58,  158 => 56,  149 => 45,  145 => 47,  141 => 51,  139 => 45,  136 => 39,  132 => 47,  119 => 33,  115 => 24,  113 => 41,  110 => 33,  97 => 27,  93 => 35,  89 => 26,  87 => 32,  84 => 16,  80 => 15,  63 => 20,  61 => 23,  52 => 14,  41 => 12,  37 => 7,  28 => 8,  24 => 3,  270 => 68,  259 => 80,  253 => 82,  248 => 80,  240 => 76,  225 => 71,  220 => 69,  205 => 67,  203 => 65,  200 => 65,  183 => 44,  174 => 58,  170 => 57,  165 => 55,  161 => 51,  156 => 36,  153 => 46,  151 => 50,  148 => 34,  131 => 30,  127 => 46,  123 => 45,  117 => 25,  111 => 40,  106 => 32,  103 => 38,  99 => 37,  96 => 36,  91 => 33,  85 => 32,  79 => 24,  74 => 21,  71 => 22,  67 => 21,  60 => 22,  56 => 20,  54 => 19,  50 => 11,  43 => 8,  39 => 10,  34 => 9,  32 => 8,  27 => 5,  21 => 2,  19 => 1,);
    }
}
