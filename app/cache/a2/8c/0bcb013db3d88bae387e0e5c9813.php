<?php

/* debugbar.twig */
class __TwigTemplate_a28c0bcb013db3d88bae387e0e5c9813 extends Twig_Template
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
        echo "<section id=\"bolt-debugsection\" style=\"display:none; visibility: hidden;\">
<div id='bolt-nipple'></div>

<div id='bolt-debugbar'>
    <ul>
        <li id='pd-bolt'><strong><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
        echo "\">Bolt ";
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
        echo "</a></strong><small>";
        if ((array_key_exists("bolt_name", $context) && ((isset($context["bolt_name"]) ? $context["bolt_name"] : null) != ""))) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["bolt_name"]) ? $context["bolt_name"] : null), "html", null, true);
        }
        echo "</small></li>
        <li id='pd-variables'><a href=\"#\" data-for=\"bolt-varpanel\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["timetaken"]) ? $context["timetaken"] : null), "html", null, true);
        echo " s<span class='narrow'>ec / ";
        echo twig_escape_filter($this->env, (isset($context["maxmemtaken"]) ? $context["maxmemtaken"] : null), "html", null, true);
        echo "</span></a></li>
        ";
        // line 8
        if ((array_key_exists("frontend", $context) && ((isset($context["editlink"]) ? $context["editlink"] : null) != ""))) {
            // line 10
            echo "        <li id='pd-edit'><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["editlink"]) ? $context["editlink"] : null), "html", null, true);
            echo "\" data-for=\"bolt-editpanel\">Edit</a></li>
        ";
        }
        // line 12
        echo "
        <li id='pd-log'><a href=\"#\" data-for=\"bolt-logpanel\">Log<span class='narrow'> entries</span></a>
            <small>(";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["log"]) ? $context["log"] : null)), "html", null, true);
        echo ")</small></li>
        <li id='pd-server'><a href=\"#\" data-for=\"bolt-serverpanel\"><span class='narrow'>bolt.localhost</span><span class='narrowonly'>srv</span></a> <small>(";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servervars"]) ? $context["servervars"] : null), "statuscode"), "html", null, true);
        echo ")</small></li>
        <li id='pd-queries'>
            ";
        // line 17
        if (((isset($context["querycount"]) ? $context["querycount"] : null) == 0)) {
            // line 18
            echo "                No Q<span class='narrow'>ueries</span>
                ";
        } elseif (((isset($context["querycount"]) ? $context["querycount"] : null) == 1)) {
            // line 20
            echo "                <a href=\"#\" data-for=\"bolt-queriespanel\">1 Q<span class='narrow'>uery</span></a> <small>(";
            echo twig_escape_filter($this->env, (isset($context["querytime"]) ? $context["querytime"] : null), "html", null, true);
            echo " sec)</small>
            ";
        } else {
            // line 22
            echo "                <a href=\"#\" data-for=\"bolt-queriespanel\">";
            echo twig_escape_filter($this->env, (isset($context["querycount"]) ? $context["querycount"] : null), "html", null, true);
            echo " Q<span class='narrow'>ueries</span></a> <small>(";
            echo twig_escape_filter($this->env, (isset($context["querytime"]) ? $context["querytime"] : null), "html", null, true);
            echo " sec)</small>
            ";
        }
        // line 23
        echo "</li>
    </ul>
</div>

";
        // line 32
        echo "
<div id='bolt-varpanel' class='bolt-debugpanel'>
<pre>
<strong>Time taken:</strong> ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["timetaken"]) ? $context["timetaken"] : null), "html", null, true);
        echo " sec. / <strong>Memory:</strong> ";
        echo twig_escape_filter($this->env, (isset($context["maxmemtaken"]) ? $context["maxmemtaken"] : null), "html", null, true);
        echo " (peak) / ";
        echo twig_escape_filter($this->env, (isset($context["memtaken"]) ? $context["memtaken"] : null), "html", null, true);
        echo " (current).

";
        // line 37
        if ((array_key_exists("frontend", $context) && $this->getAttribute((isset($context["logvalues"]) ? $context["logvalues"] : null), "templatechosen", array(), "any", true, true))) {
            // line 38
            echo "<strong>Primary template: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logvalues"]) ? $context["logvalues"] : null), "templatechosen"), "html", null, true);
            echo "</strong>
";
            // line 39
            if ($this->getAttribute((isset($context["logvalues"]) ? $context["logvalues"] : null), "templateerror", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logvalues"]) ? $context["logvalues"] : null), "templateerror"), "html", null, true);
                echo "
";
            }
        }
        // line 42
        echo "
<strong>Used templates:</strong>
<pre>";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "
<strong>Route:</strong> ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : null), "html", null, true);
        echo "
<strong>Request URI:</strong> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["servervars"]) ? $context["servervars"] : null), "server <small>(\$_SERVER)</small>", array(), "array"), "REQUEST_URI", array(), "array"), "html", null, true);
        echo "
<strong>Parameters:</strong> ";
        // line 50
        echo $this->env->getExtension('Bolt')->printDump((isset($context["route_params"]) ? $context["route_params"] : null));
        echo "
</pre>
</div>


<div id='bolt-queriespanel' class='bolt-debugpanel'>
<pre>";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["queries"]) ? $context["queries"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
            // line 57
            echo twig_escape_filter($this->env, sprintf("%03d", $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
            echo ". <small ";
            if (($this->getAttribute((isset($context["query"]) ? $context["query"] : null), "duration") > 0.1)) {
                echo "class='longquery'";
            } elseif (($this->getAttribute((isset($context["query"]) ? $context["query"] : null), "duration") < 0.03)) {
                echo "class='fastquery'";
            }
            echo ">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : null), "duration"), "html", null, true);
            echo " sec.)</small> - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : null), "query"), "html", null, true);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "</pre>
</div>

<div id='bolt-logpanel' class='bolt-debugpanel'>
<pre>";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["log"]) ? $context["log"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "<span class='level-";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"), "html", null, true);
            } else {
                echo "unknown";
            }
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ". <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "message"), "html", null, true);
            echo "</b></span>
in: ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "file"), "html", null, true);
            echo "::";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "line"), "html", null, true);
            echo " <small>(";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "username", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "username"), "html", null, true);
                echo " -";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date"), "H:i:s"), "html", null, true);
            echo ")</small>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 67
        echo "</pre>
</div>


<div id='bolt-serverpanel' class='bolt-debugpanel'>
<pre>";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servervars"]) ? $context["servervars"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["var"]) {
            // line 73
            echo "<strong>";
            echo (isset($context["key"]) ? $context["key"] : null);
            echo ":</strong>
";
            // line 74
            echo $this->env->getExtension('Bolt')->printDump((isset($context["var"]) ? $context["var"] : null));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "</pre>
</div>

";
        // line 79
        if (array_key_exists("frontend", $context)) {
            // line 80
            echo "<script type=\"text/javascript\">!window.jQuery && document.write('<script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/js/jquery-1.9.1.min.js\"><\\/script>')</script>
";
        }
        // line 82
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/debugbar.js\"></script>
<link rel='stylesheet' href='";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/debugbar.css' />
</section>
";
    }

    public function getTemplateName()
    {
        return "debugbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 83,  318 => 82,  312 => 80,  310 => 79,  305 => 76,  297 => 74,  292 => 73,  288 => 72,  281 => 67,  256 => 65,  243 => 64,  226 => 63,  220 => 59,  194 => 57,  177 => 56,  168 => 50,  164 => 49,  160 => 48,  139 => 45,  122 => 44,  118 => 42,  111 => 39,  106 => 38,  104 => 37,  95 => 35,  90 => 32,  84 => 23,  76 => 22,  70 => 20,  66 => 18,  43 => 8,  37 => 7,  68 => 18,  63 => 16,  59 => 15,  53 => 12,  48 => 10,  29 => 3,  26 => 6,  20 => 1,  81 => 23,  73 => 20,  69 => 18,  56 => 16,  47 => 13,  41 => 12,  27 => 4,  19 => 1,  227 => 61,  224 => 60,  221 => 59,  217 => 57,  214 => 56,  210 => 51,  207 => 50,  204 => 49,  197 => 42,  193 => 41,  189 => 40,  185 => 39,  181 => 38,  174 => 36,  169 => 33,  166 => 32,  157 => 47,  149 => 105,  145 => 104,  141 => 103,  137 => 102,  133 => 101,  129 => 100,  125 => 99,  121 => 98,  117 => 97,  113 => 96,  109 => 95,  105 => 94,  101 => 93,  97 => 92,  91 => 89,  62 => 65,  55 => 14,  52 => 15,  50 => 56,  34 => 11,  23 => 3,  75 => 16,  72 => 15,  67 => 14,  64 => 17,  60 => 9,  57 => 62,  51 => 12,  49 => 14,  44 => 9,  42 => 49,  36 => 10,  33 => 4,  30 => 10,  45 => 10,  38 => 6,  31 => 4,  28 => 3,);
    }
}
