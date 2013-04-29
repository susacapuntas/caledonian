<?php

/* _sub_pager.twig */
class __TwigTemplate_017021c57c3146446a4963cbc3d1f479 extends Twig_Template
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
        <li><span>
    ";
            // line 21
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("Showing %pager_for% %from% - %to% of %count%", array("%pager_for%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "for"), "%from%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "showing_from"), "%to%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "showing_to"), "%count%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "count")));
            echo "
        </span></li>
";
            // line 24
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 25
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - 1), "html", null, true);
                echo "\"><i class=\"icon-angle-left\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 27
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 28
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\"><i class=\"icon-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
";
            }
            // line 30
            echo "
";
            // line 32
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 33
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 35
            echo "
";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - (isset($context["surr"]) ? $context["surr"] : null))), $this->env->getExtension('Bolt')->min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
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
            // line 39
            echo "
";
            // line 41
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 42
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 44
            echo "
";
            // line 46
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 47
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo " <i class=\"icon-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 49
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages")) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 50
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + 1), "html", null, true);
                echo "\"><i class=\"icon-angle-right\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 52
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
        return array (  150 => 52,  143 => 50,  132 => 47,  130 => 46,  127 => 44,  123 => 42,  121 => 41,  118 => 39,  98 => 36,  95 => 35,  91 => 33,  89 => 32,  86 => 30,  79 => 28,  77 => 27,  70 => 25,  62 => 21,  55 => 17,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  41 => 11,  37 => 9,  35 => 8,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  264 => 82,  252 => 73,  245 => 68,  239 => 67,  235 => 66,  231 => 65,  225 => 62,  222 => 61,  216 => 59,  214 => 58,  209 => 56,  205 => 55,  200 => 53,  191 => 47,  187 => 45,  178 => 43,  164 => 41,  162 => 40,  159 => 39,  153 => 36,  141 => 49,  134 => 33,  124 => 32,  113 => 30,  110 => 29,  108 => 28,  105 => 27,  102 => 37,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 18,  71 => 16,  68 => 24,  65 => 13,  47 => 12,  42 => 9,  40 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
