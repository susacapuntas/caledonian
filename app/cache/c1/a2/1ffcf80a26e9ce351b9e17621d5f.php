<?php

/* work.twig */
class __TwigTemplate_c1a21ffcf80a26e9ce351b9e17621d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("contenido", $context, $blocks);
        echo "

";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "
<hr>
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body"), "html", null, true);
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('SimpleForms')->simpleForm("work"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "work.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
