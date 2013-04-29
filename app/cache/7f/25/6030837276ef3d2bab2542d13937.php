<?php

/* assets/simpleforms_mail.twig */
class __TwigTemplate_7f256030837276ef3d2bab2542d13937 extends Twig_Template
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
        echo "<p>Hi,</p>

<p>Somebody used the form on ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "currenturl"), "html", null, true);
        echo " 
to send you a message. The posted data is as follows:</p>

<hr>

";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 9
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "
-- <br>
Sent by SimpleForms, an Extension for Bolt.
";
    }

    public function getTemplateName()
    {
        return "assets/simpleforms_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  35 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }
}
