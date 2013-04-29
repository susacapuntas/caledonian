<?php

/* header.twig */
class __TwigTemplate_ea062afff63ccbef8b7eb1db4f0173ce extends Twig_Template
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
        echo "<div class=\"row hide-for-small\">
\t<div class=\"large-12 columns\">
\t\t<h1 id=\"sitename\"> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "general"), "sitename"), "html", null, true);
        echo "</h1>
\t\t<h2 id=\"payoff\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "general"), "payoff"), "html", null, true);
        echo "</h2>
\t</div>
</div>

<div id=\"barra-menu\">
<div class=\"row\">
\t<div class=\"large-12 columns\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->menu($this->env, "main", "_menu_principal.twig"), "html", null, true);
        echo "
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  27 => 4,  19 => 1,  229 => 37,  226 => 36,  223 => 35,  219 => 32,  216 => 31,  212 => 25,  209 => 24,  206 => 23,  199 => 16,  195 => 15,  191 => 14,  187 => 13,  183 => 12,  176 => 10,  171 => 7,  168 => 6,  158 => 89,  150 => 84,  146 => 83,  142 => 82,  138 => 81,  134 => 80,  130 => 79,  126 => 78,  122 => 77,  118 => 76,  114 => 75,  110 => 74,  106 => 73,  102 => 72,  98 => 71,  91 => 67,  49 => 33,  47 => 31,  40 => 26,  38 => 23,  32 => 19,  23 => 3,  79 => 20,  76 => 19,  71 => 18,  68 => 17,  64 => 11,  61 => 42,  55 => 38,  53 => 35,  46 => 12,  44 => 10,  36 => 5,  33 => 4,  30 => 6,  43 => 13,  31 => 4,  28 => 3,);
    }
}
