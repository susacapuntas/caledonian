<?php

/* assets/simpleforms_form.twig */
class __TwigTemplate_d6ece46338efdb976a56210a25a7955f extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "SimpleForms/assets/simpleforms_fields.twig"));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <p class=\"simpleformserror\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
";
        }
        // line 6
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 7
            echo "    <p class=\"simpleformsmessage\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</p>
";
        }
        // line 9
        if ((!(isset($context["sent"]) ? $context["sent"] : null))) {
            // line 10
            echo "<form action=\"#\" method=\"post\">
    ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "

    <input type=\"submit\" name=\"submit\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["button_text"]) ? $context["button_text"] : null), "html", null, true);
            echo "\" />
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "assets/simpleforms_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 11,  42 => 10,  26 => 4,  24 => 3,  21 => 2,  81 => 23,  73 => 20,  69 => 18,  56 => 16,  52 => 15,  41 => 12,  34 => 7,  37 => 11,  27 => 4,  19 => 1,  229 => 37,  226 => 36,  223 => 35,  219 => 32,  216 => 31,  212 => 25,  209 => 24,  206 => 23,  199 => 16,  195 => 15,  191 => 14,  187 => 13,  183 => 12,  176 => 10,  171 => 7,  168 => 6,  158 => 89,  150 => 84,  146 => 83,  142 => 82,  138 => 81,  134 => 80,  130 => 79,  126 => 78,  122 => 77,  118 => 76,  114 => 75,  110 => 74,  106 => 73,  102 => 72,  98 => 71,  91 => 67,  49 => 14,  47 => 13,  40 => 9,  38 => 23,  32 => 6,  23 => 3,  79 => 20,  76 => 19,  71 => 18,  68 => 17,  64 => 11,  61 => 42,  55 => 38,  53 => 35,  46 => 12,  44 => 10,  36 => 5,  33 => 4,  30 => 10,  43 => 13,  31 => 4,  28 => 3,);
    }
}
