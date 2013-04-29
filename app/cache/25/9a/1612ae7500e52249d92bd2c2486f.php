<?php

/* cambridge_template.twig */
class __TwigTemplate_259a1612ae7500e52249d92bd2c2486f extends Twig_Template
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
  <div class=\"large-twelve columns\">
  <article>
  <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "title"), "html", null, true);
        echo "</h1>
  <hr>

<table width =\"100%\">
  <thead>
    <tr>
      <th width=\"40%\">Exámen</th>
      <th width=\"5%\">Nivel</th>
      <th width=\"10%\">Precio</th>
      <th width=\"10%\">Fecha</th>
      <th>Notas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "ket_name"), "html", null, true);
        echo "</td>
      <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "ket_level"), "html", null, true);
        echo "</td>
      <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "ket_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "ket_date"), "d/m/Y"), "html", null, true);
        echo "</td>
      <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "ket_annotations"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "pet_name"), "html", null, true);
        echo "</td>
      <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "pet_level"), "html", null, true);
        echo "</td>
      <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "pet_price"), 2, ",", " "), "html", null, true);
        echo "  &#8364;</td>
      <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "pet_date"), "d/m/Y"), "html", null, true);
        echo "</td>
      <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "pet_annotations"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "first_name"), "html", null, true);
        echo "</td>
      <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "first_level"), "html", null, true);
        echo "</td>
      <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "first_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
      <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "first_date"), "d/m/Y"), "html", null, true);
        echo "</td>
      <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "first_annotations"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "advanced_name"), "html", null, true);
        echo "</td>
      <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "advanced_level"), "html", null, true);
        echo "</td>
      <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "advanced_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
      <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "advanced_date"), "d/m/Y"), "html", null, true);
        echo "</td>
      <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "advanced_annotations"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "proficiency_name"), "html", null, true);
        echo "</td>
      <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "proficiency_level"), "html", null, true);
        echo "</td>
      <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "proficiency_price"), 2, ",", " "), "html", null, true);
        echo " &#8364;</td>
      <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "proficiency_date"), "d/m/Y"), "html", null, true);
        echo "</td>
      <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "proficiency_annotations"), "html", null, true);
        echo "</td>
    </tr>

  </tbody>
</table>

";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambridgesession"]) ? $context["cambridgesession"] : null), "body"), "html", null, true);
        echo "
<article>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "cambridge_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  56 => 23,  38 => 8,  31 => 4,  28 => 3,);
    }
}
