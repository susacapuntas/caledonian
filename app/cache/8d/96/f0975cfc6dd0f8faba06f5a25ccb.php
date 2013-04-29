<?php

/* layout.twig */
class __TwigTemplate_8d96f0975cfc6dd0f8faba06f5a25ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
            'contenido' => array($this, 'block_contenido'),
            'barra_lateral' => array($this, 'block_barra_lateral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
";
        // line 5
        $this->displayParentBlock("layout", $context, $blocks);
        echo "

<div class=\"large-8 columns\">
\t<div class=\"row\">
\t\t
\t";
        // line 10
        $this->displayBlock('contenido', $context, $blocks);
        // line 12
        echo "\t\t
</div>
</div>

<div class=\"large-4 columns hide-for-small\">
\t";
        // line 17
        $this->displayBlock('barra_lateral', $context, $blocks);
        // line 21
        echo "</div>
</div>
";
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "\t";
    }

    // line 17
    public function block_barra_lateral($context, array $blocks = array())
    {
        // line 18
        echo "\t\t";
        $template_storage = new Bolt\Storage($context['app']);
        $context['bloques_laterales'] =         $template_storage->getContent("bloqueslaterales", array (
) );
        // line 19
        echo "\t\t";
        $this->env->loadTemplate("bloques_laterales.twig")->display(array_merge($context, (isset($context["bloques_laterales"]) ? $context["bloques_laterales"] : null)));
        // line 20
        echo "\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  76 => 19,  71 => 18,  68 => 17,  64 => 11,  61 => 10,  55 => 21,  53 => 17,  46 => 12,  44 => 10,  36 => 5,  33 => 4,  30 => 3,  43 => 13,  31 => 4,  28 => 3,);
    }
}
