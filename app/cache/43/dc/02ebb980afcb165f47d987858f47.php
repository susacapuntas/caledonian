<?php

/* texto_examenes.twig */
class __TwigTemplate_43dc02ebb980afcb165f47d987858f47 extends Twig_Template
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
\t
\t\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<header class=\"titulo-pagina\">
\t\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "</h1>
\t\t\t</header>
\t\t\t<div class=\"cuerpo-pagina\">
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body"), "html", null, true);
        echo "
\t\t\t
\t
\t\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"sub-apartado\">
\t\t\t<header class=\"titulo-apartado\">
\t\t\t";
        // line 20
        $template_storage = new Bolt\Storage($context['app']);
        $context['examen_cambridge'] =         $template_storage->getContent("page/examenes-de-cambridge", array (
) );
        // line 21
        echo "\t\t\t<h2><a href=\"";
        echo "/cambridgesessions";
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["examen_cambridge"]) ? $context["examen_cambridge"] : null), "title"), "html", null, true);
        echo "</a></h2>
\t\t\t</header>
\t\t\t<div class=\"cuerpo-sub-apartado\">
\t\t\t
\t\t\t<img src=\"/theme/caledonian/assets/imagenes/cambridge-crest.svg\" class=\"th radius escudo-universidad hide-for-small\"></img>
\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["examen_cambridge"]) ? $context["examen_cambridge"] : null), "body"), "html", null, true);
        echo "
\t\t\t</div>\t\t\t
\t\t\t</section>
\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"sub-apartado\">
\t\t\t<header class=\"titulo-apartado\">\t
\t\t\t";
        // line 36
        $template_storage = new Bolt\Storage($context['app']);
        $context['examen_trinity'] =         $template_storage->getContent("page/examenes-de-trinity", array (
) );
        // line 37
        echo "\t\t\t<h2><a href=\"";
        echo "/trinitysession/trinity-college-examinations";
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["examen_trinity"]) ? $context["examen_trinity"] : null), "title"), "html", null, true);
        echo "</a></h2>
\t\t\t</header>
\t\t\t
\t\t\t<div class=\"cuerpo-sub-apartado\">
\t\t\t\t<img src=\"/theme/caledonian/assets/imagenes/logo_trinity_college_london.gif\" class=\"th radius escudo-universidad hide-for-small\"></img>
\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["examen_trinity"]) ? $context["examen_trinity"] : null), "body"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t</div>
\t\t</div>
\t</div> 
\t</div>
\t</section>
<article>
";
    }

    public function getTemplateName()
    {
        return "texto_examenes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  88 => 37,  84 => 36,  71 => 26,  60 => 21,  56 => 20,  46 => 13,  40 => 10,  31 => 4,  28 => 3,);
    }
}
