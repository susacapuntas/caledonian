<?php

/* home.twig */
class __TwigTemplate_ca24f3c39f3c5789607e2b5851145a9e extends Twig_Template
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
<article class=\"pagina\">

<header class=\"titulo-pagina\">\t
\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "</h1>
</header>

<div class=\"cuerpo-pagina\">
\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body"), "html", null, true);
        echo "
</div>

</article>

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  38 => 8,  31 => 4,  28 => 3,);
    }
}
