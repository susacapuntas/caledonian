<?php

/* bloques_laterales.twig */
class __TwigTemplate_e3375a636d153c3a5f59f2b35f410326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'barra_lateral' => array($this, 'block_barra_lateral'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('barra_lateral', $context, $blocks);
    }

    public function block_barra_lateral($context, array $blocks = array())
    {
        // line 2
        echo "
<article class=\"bloque-lateral\">\t
";
        // line 4
        $template_storage = new Bolt\Storage($context['app']);
        $context['novedades'] =         $template_storage->getContent("bloquelateral/novedades", array (
) );
        // line 5
        echo "\t<header class=\"titulo-bloque\">
\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedades"]) ? $context["novedades"] : null), "title"), "html", null, true);
        echo "</h1>
\t</header>
<div class=\"cuerpo-bloque\">
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedades"]) ? $context["novedades"] : null), "text"), "html", null, true);
        echo "
</div>
</article>

<article class=\"bloque-lateral\">
";
        // line 14
        $template_storage = new Bolt\Storage($context['app']);
        $context['infogeneral'] =         $template_storage->getContent("bloquelateral/informacion-general", array (
) );
        // line 15
        echo "\t
\t<header class=\"titulo-bloque\">
\t<h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infogeneral"]) ? $context["infogeneral"] : null), "title"), "html", null, true);
        echo "</h1>
\t</header>
\t
\t<div class=\"cuerpo-bloque\">
\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infogeneral"]) ? $context["infogeneral"] : null), "text"), "html", null, true);
        echo "
\t</div>
</article>

<article class=\"bloque-lateral\">
";
        // line 26
        $template_storage = new Bolt\Storage($context['app']);
        $context['direccion'] =         $template_storage->getContent("bloquelateral/direccion", array (
) );
        // line 27
        echo "<header class=\"titulo-bloque\">
<h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccion"]) ? $context["direccion"] : null), "title"), "html", null, true);
        echo "</h1>
</header>
<div class=\"cuerpo-bloque\">
";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccion"]) ? $context["direccion"] : null), "text"), "html", null, true);
        echo "
</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "bloques_laterales.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  78 => 27,  59 => 17,  51 => 14,  20 => 1,  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  587 => 108,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  500 => 88,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  278 => 8,  272 => 6,  269 => 5,  267 => 4,  264 => 3,  260 => 330,  258 => 329,  256 => 328,  254 => 327,  252 => 326,  250 => 325,  248 => 324,  246 => 323,  244 => 322,  241 => 321,  238 => 319,  236 => 313,  233 => 312,  231 => 306,  228 => 305,  220 => 295,  218 => 286,  215 => 285,  213 => 274,  210 => 273,  208 => 268,  205 => 267,  202 => 265,  200 => 262,  197 => 261,  192 => 251,  190 => 242,  184 => 239,  182 => 223,  179 => 222,  174 => 214,  169 => 207,  166 => 206,  164 => 200,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  151 => 185,  149 => 179,  144 => 173,  141 => 172,  139 => 166,  136 => 165,  131 => 157,  129 => 145,  124 => 129,  121 => 128,  119 => 114,  116 => 113,  111 => 107,  109 => 102,  104 => 87,  101 => 86,  99 => 68,  96 => 67,  94 => 57,  89 => 47,  86 => 46,  84 => 41,  74 => 26,  66 => 21,  50 => 13,  45 => 11,  42 => 10,  26 => 2,  24 => 3,  21 => 2,  81 => 28,  73 => 20,  69 => 13,  56 => 16,  52 => 15,  41 => 12,  34 => 5,  37 => 6,  27 => 4,  19 => 1,  229 => 37,  226 => 298,  223 => 297,  219 => 32,  216 => 31,  212 => 25,  209 => 24,  206 => 23,  199 => 16,  195 => 252,  191 => 14,  187 => 241,  183 => 12,  176 => 220,  171 => 213,  168 => 6,  158 => 89,  150 => 84,  146 => 178,  142 => 82,  138 => 81,  134 => 158,  130 => 79,  126 => 144,  122 => 77,  118 => 76,  114 => 108,  110 => 74,  106 => 101,  102 => 72,  98 => 71,  91 => 56,  49 => 14,  47 => 13,  40 => 9,  38 => 23,  32 => 6,  23 => 3,  79 => 32,  76 => 31,  71 => 19,  68 => 17,  64 => 3,  61 => 2,  55 => 15,  53 => 35,  46 => 12,  44 => 10,  36 => 5,  33 => 4,  30 => 4,  43 => 9,  31 => 4,  28 => 3,);
    }
}
