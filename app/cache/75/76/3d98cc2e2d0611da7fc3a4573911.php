<?php

/* courses.twig */
class __TwigTemplate_75763d98cc2e2d0611da7fc3a4573911 extends Twig_Template
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
        $this->displayParentBlock("contenido", $context, $blocks);
        echo "
<article>
\t<header>
\t\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<header class=\"titulo-pagina\">
\t\t\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "</h1>
\t\t\t</header>
\t\t\t<div class=cuerpo-pagina>
\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<hr>
\t\t</div>
\t\t</div>
\t</header>
\t
</article>



";
    }

    public function getTemplateName()
    {
        return "courses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 10,  31 => 4,  28 => 3,);
    }
}
