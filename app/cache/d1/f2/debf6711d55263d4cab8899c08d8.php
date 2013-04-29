<?php

/* trinity_template.twig */
class __TwigTemplate_d1f2debf6711d55263d4cab8899c08d8 extends Twig_Template
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
        echo "<div class=\"row\">
<div class=\"large-12 columns\">
";
        // line 6
        $this->displayParentBlock("contenido", $context, $blocks);
        echo "
<article class=\"pagina\">
  <header class=\"titulo-pagina\"> 
  <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "title"), "html", null, true);
        echo "</h1>
  </header>
  <div class=\"cuerpo-pagina\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "body"), "html", null, true);
        echo "

  <table width=\"100%\">
    <thead>
      <tr>
        <th width=\"20%\">Nivel</th>
        <th width=\"20%\">Matrícula</th>
        <th width=\"20%\">Fecha examen</th>
        <th >Notas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel1_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel1_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel1_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel1_annotations"), "html", null, true);
        echo "</td>
      </tr>
      
      <tr>
        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel2_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel2_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel2_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel2_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel3_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel3_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel3_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel3_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel4_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel4_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel41_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel4_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel5_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel5_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel5_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel5_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel6_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel6_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel6_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel6_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel7_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel7_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel7_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel7_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel8_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel8_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel8_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel8_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel9_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel9_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel9_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel9_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel10_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel10_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel10_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel10_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel11_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel11_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel11_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel11_annotations"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel12_name"), "html", null, true);
        echo "</td>
        <td>";
        // line 103
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel12_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
        <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel12_date"), "d/m/Y"), "html", null, true);
        echo "</td>
        <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trinitysession"]) ? $context["trinitysession"] : null), "nivel12_annotations"), "html", null, true);
        echo "</td>
      </tr>

    </tbody>
  </table>
</div>
</article>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "trinity_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 105,  280 => 104,  276 => 103,  272 => 102,  265 => 98,  261 => 97,  257 => 96,  253 => 95,  246 => 91,  242 => 90,  238 => 89,  234 => 88,  227 => 84,  223 => 83,  219 => 82,  215 => 81,  208 => 77,  204 => 76,  200 => 75,  196 => 74,  189 => 70,  185 => 69,  181 => 68,  177 => 67,  170 => 63,  166 => 62,  162 => 61,  158 => 60,  151 => 56,  147 => 55,  143 => 54,  139 => 53,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  47 => 12,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
