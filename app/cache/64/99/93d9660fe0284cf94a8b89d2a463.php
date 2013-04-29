<?php

/* _menu_principal.twig */
class __TwigTemplate_649993d9660fe0284cf94a8b89d2a463 extends Twig_Template
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
        echo "<nav class=\"top-bar\">
    <ul class=\"title-area\">
        <li class=\"name\"><h1><a href=\"#\">Caledonian</a></h1></li>
        <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
    </ul>

    <section class=\"top-bar-section\">
        <ul class=\"right\">
           
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <li  ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                echo " class=\"has-dropdown\" ";
            }
            echo " >
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
            echo "</a>
                    ";
            // line 13
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                // line 14
                echo "                        <ul class=\"dropdown\">
                            ";
                // line 15
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 16
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
                    echo "\">";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
                    }
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 18
                echo "                        </ul>
                    ";
            }
            // line 20
            echo "                </li>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "        </ul>
    </section>
</nav>";
    }

    public function getTemplateName()
    {
        return "_menu_principal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  73 => 20,  69 => 18,  56 => 16,  52 => 15,  41 => 12,  34 => 11,  37 => 11,  27 => 4,  19 => 1,  229 => 37,  226 => 36,  223 => 35,  219 => 32,  216 => 31,  212 => 25,  209 => 24,  206 => 23,  199 => 16,  195 => 15,  191 => 14,  187 => 13,  183 => 12,  176 => 10,  171 => 7,  168 => 6,  158 => 89,  150 => 84,  146 => 83,  142 => 82,  138 => 81,  134 => 80,  130 => 79,  126 => 78,  122 => 77,  118 => 76,  114 => 75,  110 => 74,  106 => 73,  102 => 72,  98 => 71,  91 => 67,  49 => 14,  47 => 13,  40 => 26,  38 => 23,  32 => 19,  23 => 3,  79 => 20,  76 => 19,  71 => 18,  68 => 17,  64 => 11,  61 => 42,  55 => 38,  53 => 35,  46 => 12,  44 => 10,  36 => 5,  33 => 4,  30 => 10,  43 => 13,  31 => 4,  28 => 3,);
    }
}
