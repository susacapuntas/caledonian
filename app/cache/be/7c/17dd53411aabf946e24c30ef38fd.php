<?php

/* _sub_lastmodified.twig */
class __TwigTemplate_be7c17dd53411aabf946e24c30ef38fd extends Twig_Template
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
        echo "<section>
    <h2>";
        // line 2
        echo $this->env->getExtension('Bolt')->trans("Last modified %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
        echo "</h2>
    <ul>
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) ? $context["latest"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 5
            echo "        <li>
           № ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
            echo ". <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\">
            ";
            // line 7
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true)) {
                // line 8
                echo "                ";
                echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title"), 70);
                echo "
            ";
            } else {
                // line 10
                echo "                ";
                echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name"), 70);
                echo "
            ";
            }
            // line 12
            echo "            </a><small>(<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "html", null, true);
            echo "</time>)</small>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "        <li><em>";
            echo $this->env->getExtension('Bolt')->trans("No latest %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
            echo ".</em></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "    </ul>
</section>
";
    }

    public function getTemplateName()
    {
        return "_sub_lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 8,  150 => 52,  143 => 50,  132 => 47,  130 => 46,  127 => 44,  123 => 42,  121 => 41,  118 => 39,  98 => 36,  95 => 35,  91 => 33,  89 => 32,  86 => 30,  79 => 28,  77 => 17,  70 => 25,  62 => 21,  55 => 12,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  41 => 7,  37 => 9,  35 => 6,  32 => 5,  28 => 5,  24 => 3,  22 => 2,  264 => 82,  252 => 73,  245 => 68,  239 => 67,  235 => 66,  231 => 65,  225 => 62,  222 => 61,  216 => 59,  214 => 58,  209 => 56,  205 => 55,  200 => 53,  191 => 47,  187 => 45,  178 => 43,  164 => 41,  162 => 40,  159 => 39,  153 => 36,  141 => 49,  134 => 33,  124 => 32,  113 => 30,  110 => 29,  108 => 28,  105 => 27,  102 => 37,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 18,  71 => 16,  68 => 15,  65 => 13,  47 => 12,  42 => 9,  40 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }
}
