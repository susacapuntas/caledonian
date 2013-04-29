<?php

/* _sub_pager.twig */
class __TwigTemplate_bd42cb49f1d496f8b28c6bb2722db779 extends Twig_Template
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
";
        // line 2
        if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 3
            echo "    ";
            $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
        } else {
            // line 5
            echo "    ";
            $context["filter"] = "";
        }
        // line 7
        echo "
";
        // line 8
        if (twig_in_filter("order", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 9
            echo "    ";
            $context["order"] = (("order=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "order")) . "&");
        } else {
            // line 11
            echo "    ";
            $context["order"] = "";
        }
        // line 13
        echo "
";
        // line 14
        $context["link"] = ((("?" . (isset($context["filter"]) ? $context["filter"] : null)) . (isset($context["order"]) ? $context["order"] : null)) . "page=");
        // line 15
        echo "
";
        // line 16
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") > 1)) {
            // line 17
            echo "<div class=\"pagination pagination-centered ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
  <ul>
";
            // line 20
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 21
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - 1), "html", null, true);
                echo "\">&lsaquo; </a></li>
";
            }
            // line 23
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 24
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 26
            echo "
";
            // line 28
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 29
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 31
            echo "
";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - (isset($context["surr"]) ? $context["surr"] : null))), $this->env->getExtension('Bolt')->min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 33
                echo "    <li ";
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current"))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "
";
            // line 37
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 38
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 40
            echo "
";
            // line 42
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 43
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 45
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages")) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 46
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + 1), "html", null, true);
                echo "\">&rsaquo;</a></li>
";
            }
            // line 48
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  136 => 46,  134 => 45,  125 => 43,  123 => 42,  120 => 40,  116 => 38,  114 => 37,  111 => 35,  95 => 33,  91 => 32,  88 => 31,  84 => 29,  82 => 28,  79 => 26,  72 => 24,  70 => 23,  61 => 20,  55 => 17,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  41 => 11,  37 => 9,  32 => 7,  24 => 3,  22 => 2,  19 => 1,  77 => 26,  74 => 25,  63 => 21,  57 => 19,  46 => 10,  42 => 9,  35 => 8,  31 => 3,  28 => 5,);
    }
}
