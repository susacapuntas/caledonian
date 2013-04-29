<?php

/* cambridge_list_template.twig */
class __TwigTemplate_06236ff3b91f8bcd317605c84886c148 extends Twig_Template
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

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
    <div class=\"large-12 columns\">
    ";
        // line 5
        $this->displayParentBlock("contenido", $context, $blocks);
        echo "
        <article class=\"pagina\">
            <header class=\"titulo-pagina\">  
            <h1>Convocatorias exámenes Cambridge</h1>
            </header>
            <div class=\"cuerpo-pagina\">
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cambridgesessions"]) ? $context["cambridgesessions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["convocatoria"]) {
            // line 12
            echo "            <table width=\"100%\">
                <thead>
                    <tr>
                        <th width=\"75%\">Convocatoria</th>
                        <th width=\"25%\">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : null), "title"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : null), "fechaconvocatoria"), "m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                <tbody>
            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['convocatoria'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "            </div>
            <section>
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "cambridge_list_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  76 => 27,  65 => 22,  59 => 21,  48 => 12,  44 => 11,  35 => 5,  31 => 3,  28 => 2,);
    }
}
