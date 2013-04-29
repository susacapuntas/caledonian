<?php

/* _sub_edittaxonomies.twig */
class __TwigTemplate_b370ac2d81c482d85427494d0e789503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy", array(), "any", true, true)) {
            // line 4
            $context["taxonomies"] = $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy");
            // line 5
            echo "
    <h3>
        ";
            // line 7
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 8
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "\"
                  data-content=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxonomies"]) ? $context["taxonomies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
                // line 13
                echo "
    ";
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "taxonomy", array(), "any", false, true), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array", true, true)) {
                    // line 15
                    echo "
        ";
                    // line 16
                    $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "taxonomy"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array");
                    // line 17
                    echo "

        ";
                    // line 20
                    echo "
        ";
                    // line 21
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "tags")) {
                        // line 22
                        echo "
            <label for='taxonomy-";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo ":</span></b></label>

            ";
                        // line 25
                        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true)) {
                            // line 26
                            echo "                ";
                            $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array"), ",");
                            // line 27
                            echo "            ";
                        } else {
                            // line 28
                            echo "                ";
                            $context["tags"] = "";
                            // line 29
                            echo "            ";
                        }
                        // line 30
                        echo "
            <input type='text' name='taxonomy[";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "' value=\"";
                        echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null), "html", null, true);
                        echo "\" style=\"width: 70%;\" />

            <script>
            \$('#taxonomy-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "').select2({
                tags:[], // Todo: automatically supply most often-used tags.
                tokenSeparators: [\",\", \" \"]
            });
            </script>

        ";
                    }
                    // line 41
                    echo "
        ";
                    // line 43
                    echo "
        ";
                    // line 44
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "categories")) {
                        // line 45
                        echo "
            <label for='taxonomy-";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo ":</span></b></label>

            ";
                        // line 48
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple") == 1))) {
                            // line 49
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "' multiple>
            ";
                        } else {
                            // line 51
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "'>
                <option value=\"\">(no category)</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        }
                        // line 55
                        echo "
            ";
                        // line 56
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
                        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                            // line 57
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : null), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["cat"]) ? $context["cat"] : null), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : null), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 59
                        echo "
            </select>

        ";
                    }
                    // line 63
                    echo "
        ";
                    // line 65
                    echo "
        ";
                    // line 66
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "grouping")) {
                        // line 67
                        echo "
            <label for='taxonomy-";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo ":</span></b></label>

            <select name='taxonomy[";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "][]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'>
                <option value=\"\">(no group)</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        // line 73
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
                        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                            // line 74
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["group"]) ? $context["group"] : null), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 76
                        echo "            </select>

            ";
                        // line 78
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder") == true))) {
                            // line 79
                            echo "                <label for=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\" style='display: inline;'>- Order:</label>
                <input type=\"number\" name=\"taxonomy-order[";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "]\" id=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\" step=\"1\"
                       value='";
                            // line 81
                            echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomyorder"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")), "html", null, true);
                            echo "' class='verynarrow'>
            ";
                        }
                        // line 83
                        echo "
        ";
                    }
                    // line 85
                    echo "
    ";
                }
                // line 87
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 89
            echo "<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_edittaxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 89,  253 => 85,  249 => 83,  244 => 81,  238 => 80,  233 => 79,  231 => 78,  227 => 76,  212 => 74,  208 => 73,  200 => 70,  193 => 68,  185 => 65,  176 => 59,  161 => 57,  157 => 56,  154 => 55,  144 => 51,  124 => 45,  119 => 43,  106 => 34,  96 => 31,  90 => 29,  81 => 26,  79 => 25,  72 => 23,  67 => 21,  38 => 9,  30 => 7,  207 => 64,  205 => 63,  202 => 62,  198 => 60,  188 => 66,  182 => 63,  175 => 54,  168 => 53,  165 => 52,  160 => 51,  156 => 50,  146 => 47,  143 => 46,  141 => 45,  138 => 43,  115 => 30,  93 => 30,  84 => 27,  76 => 22,  74 => 21,  60 => 17,  57 => 16,  53 => 14,  50 => 13,  45 => 11,  32 => 6,  24 => 4,  22 => 3,  1434 => 469,  1426 => 466,  1422 => 464,  1420 => 463,  1417 => 462,  1411 => 459,  1408 => 458,  1406 => 457,  1403 => 456,  1399 => 453,  1392 => 449,  1388 => 448,  1384 => 447,  1378 => 446,  1369 => 444,  1363 => 443,  1357 => 442,  1351 => 441,  1345 => 440,  1339 => 439,  1333 => 438,  1324 => 437,  1322 => 436,  1319 => 435,  1315 => 432,  1308 => 428,  1304 => 427,  1300 => 426,  1291 => 424,  1285 => 423,  1279 => 422,  1273 => 421,  1264 => 420,  1262 => 419,  1259 => 418,  1255 => 415,  1248 => 411,  1232 => 406,  1222 => 405,  1214 => 402,  1206 => 401,  1198 => 400,  1195 => 399,  1193 => 398,  1190 => 397,  1186 => 394,  1174 => 392,  1166 => 391,  1157 => 390,  1155 => 389,  1152 => 388,  1149 => 386,  1145 => 384,  1141 => 383,  1134 => 382,  1126 => 381,  1117 => 380,  1115 => 379,  1112 => 378,  1104 => 371,  1098 => 368,  1085 => 362,  1079 => 359,  1073 => 358,  1067 => 357,  1063 => 356,  1058 => 354,  1050 => 353,  1046 => 352,  1038 => 351,  1033 => 349,  1025 => 348,  1018 => 346,  1010 => 345,  1002 => 344,  995 => 339,  989 => 337,  987 => 336,  983 => 335,  978 => 332,  976 => 331,  973 => 330,  971 => 329,  968 => 328,  961 => 322,  952 => 316,  948 => 314,  942 => 312,  936 => 310,  934 => 309,  922 => 300,  912 => 297,  904 => 296,  896 => 295,  888 => 294,  880 => 293,  872 => 292,  866 => 289,  857 => 287,  847 => 286,  841 => 283,  833 => 282,  826 => 280,  818 => 279,  807 => 278,  799 => 277,  792 => 272,  786 => 270,  784 => 269,  780 => 268,  775 => 265,  773 => 264,  770 => 263,  768 => 262,  765 => 261,  762 => 259,  754 => 254,  738 => 247,  733 => 245,  724 => 243,  720 => 242,  712 => 237,  705 => 235,  697 => 234,  694 => 233,  688 => 232,  684 => 230,  682 => 229,  679 => 228,  675 => 225,  669 => 221,  658 => 215,  654 => 214,  649 => 212,  643 => 210,  641 => 209,  634 => 205,  625 => 203,  621 => 202,  611 => 197,  607 => 196,  601 => 195,  593 => 192,  585 => 191,  577 => 190,  568 => 185,  566 => 184,  563 => 183,  558 => 179,  552 => 175,  542 => 170,  537 => 168,  533 => 167,  528 => 165,  523 => 162,  521 => 161,  514 => 157,  505 => 155,  501 => 154,  491 => 149,  487 => 148,  481 => 147,  473 => 144,  465 => 143,  457 => 142,  450 => 137,  444 => 135,  442 => 134,  438 => 133,  431 => 130,  429 => 129,  426 => 128,  423 => 126,  419 => 124,  404 => 122,  400 => 121,  392 => 118,  383 => 117,  381 => 116,  378 => 115,  375 => 113,  370 => 110,  355 => 108,  351 => 107,  344 => 106,  340 => 104,  325 => 102,  321 => 101,  314 => 100,  312 => 99,  303 => 98,  301 => 97,  298 => 96,  295 => 94,  291 => 92,  287 => 90,  283 => 88,  281 => 87,  275 => 84,  263 => 81,  257 => 87,  255 => 76,  243 => 71,  235 => 70,  230 => 69,  228 => 68,  225 => 67,  221 => 64,  214 => 62,  210 => 61,  204 => 60,  195 => 58,  192 => 59,  190 => 67,  184 => 53,  177 => 51,  173 => 50,  167 => 49,  164 => 48,  158 => 47,  153 => 49,  147 => 42,  136 => 49,  130 => 38,  127 => 46,  121 => 34,  118 => 35,  116 => 41,  109 => 30,  102 => 28,  98 => 28,  89 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  68 => 19,  55 => 15,  49 => 15,  44 => 13,  37 => 9,  31 => 6,  28 => 5,  26 => 5,  23 => 2,  248 => 109,  239 => 103,  226 => 95,  211 => 83,  206 => 81,  201 => 59,  187 => 55,  180 => 64,  174 => 60,  159 => 58,  155 => 46,  150 => 48,  140 => 40,  134 => 48,  128 => 48,  122 => 44,  117 => 45,  113 => 33,  104 => 41,  100 => 40,  92 => 26,  87 => 28,  85 => 37,  73 => 28,  69 => 22,  64 => 20,  58 => 16,  52 => 19,  48 => 13,  46 => 12,  43 => 15,  41 => 12,  36 => 7,  34 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
