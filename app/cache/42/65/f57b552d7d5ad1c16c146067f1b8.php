<?php

/* contacto.twig */
class __TwigTemplate_4265f57b552d7d5ad1c16c146067f1b8 extends Twig_Template
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

<div class=\"row\">
\t<div class=\"large-12 columns\">
\t\t<article>
\t\t<header class=\"titulo-pagina\">\t
\t\t\t<h1>Este es el formulario de contacto.</h1>
\t\t</header>
\t\t<hr>
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('SimpleForms')->simpleForm("contact"), "html", null, true);
        echo "
\t\t</article>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "contacto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  31 => 4,  28 => 3,);
    }
}
