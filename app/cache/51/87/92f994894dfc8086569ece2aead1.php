<?php

/* _sub_editrelations.twig */
class __TwigTemplate_518792f994894dfc8086569ece2aead1 extends Twig_Template
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
        // line 2
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 3
            echo "
    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "\"
            data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.relationships", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
        }
        // line 11
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true)) {
            // line 14
            echo "
    ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations"));
            foreach ($context['_seq'] as $context["relcontenttype"] => $context["relation"]) {
                // line 16
                echo "
        <label for='relation-";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["relcontenttype"]) ? $context["relcontenttype"] : null)), "html", null, true);
                echo "'><b><span class='left'>
            ";
                // line 18
                if ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["relcontenttype"]) ? $context["relcontenttype"] : null))), "html", null, true);
                }
                echo ":
        </span></b></label>

        ";
                // line 21
                if (($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "multiple") == 1))) {
                    // line 22
                    echo "        <select name='relation[";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "][]' id='relation-";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "' class='wide' multiple  style=\"width: 70%;\" data-placeholder=\"(none)\">
        ";
                } else {
                    // line 24
                    echo "        <select name='relation[";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "][]' id='relation-";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "' class='wide' style=\"width: 70%;\" data-placeholder=\"(none)\">
            <option value=\"\">(none)</option>
        ";
                }
                // line 27
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listcontent((isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), (isset($context["relation"]) ? $context["relation"] : null), (isset($context["content"]) ? $context["content"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "selected")) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " <span>(№ ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                    echo ")</span></option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "
        </select>

        <script>
            \$('#relation-";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                echo "').select2({
                placeholder: \"(none)\",
                allowClear: true
            });
        </script>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['relcontenttype'], $context['relation'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 41
            echo "
";
        }
        // line 43
        echo "
";
        // line 45
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 46
            echo "
    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"));
            foreach ($context['_seq'] as $context["reltype"] => $context["ids"]) {
                // line 48
                echo "        ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", false, true), (isset($context["reltype"]) ? $context["reltype"] : null), array(), "array", true, true))) {
                    // line 49
                    echo "            <p>
            ";
                    // line 50
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 51
                        echo "                ";
                        $template_storage = new Bolt\Storage($context['app']);
                        $context['record'] =                         $template_storage->getContent((((isset($context["reltype"]) ? $context["reltype"] : null) . "/") . (isset($context["id"]) ? $context["id"] : null)), array (
) );
                        // line 52
                        echo "                ";
                        if ((isset($context["record"]) ? $context["record"] : null)) {
                            // line 53
                            echo "                    ";
                            echo $this->env->getExtension('Bolt')->trans("This record is related to %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype"), "singular_name")));
                            echo " № ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id"), "html", null, true);
                            echo " -
                    <strong>";
                            // line 54
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
                            echo "</strong> (<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id"))), "html", null, true);
                            echo "\">edit</a>)<br>
                ";
                        }
                        // line 56
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 57
                    echo "            </p>
        ";
                }
                // line 59
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reltype'], $context['ids'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 60
            echo "
";
        }
        // line 62
        echo "
";
        // line 63
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 64
            echo "
    <hr>

";
        }
    }

    public function getTemplateName()
    {
        return "_sub_editrelations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 64,  205 => 63,  202 => 62,  198 => 60,  188 => 57,  182 => 56,  175 => 54,  168 => 53,  165 => 52,  160 => 51,  156 => 50,  146 => 47,  143 => 46,  141 => 45,  138 => 43,  115 => 30,  93 => 27,  84 => 24,  76 => 22,  74 => 21,  60 => 17,  57 => 16,  53 => 15,  50 => 14,  45 => 11,  32 => 6,  24 => 3,  22 => 2,  1434 => 469,  1426 => 466,  1422 => 464,  1420 => 463,  1417 => 462,  1411 => 459,  1408 => 458,  1406 => 457,  1403 => 456,  1399 => 453,  1392 => 449,  1388 => 448,  1384 => 447,  1378 => 446,  1369 => 444,  1363 => 443,  1357 => 442,  1351 => 441,  1345 => 440,  1339 => 439,  1333 => 438,  1324 => 437,  1322 => 436,  1319 => 435,  1315 => 432,  1308 => 428,  1304 => 427,  1300 => 426,  1291 => 424,  1285 => 423,  1279 => 422,  1273 => 421,  1264 => 420,  1262 => 419,  1259 => 418,  1255 => 415,  1248 => 411,  1232 => 406,  1222 => 405,  1214 => 402,  1206 => 401,  1198 => 400,  1195 => 399,  1193 => 398,  1190 => 397,  1186 => 394,  1174 => 392,  1166 => 391,  1157 => 390,  1155 => 389,  1152 => 388,  1149 => 386,  1145 => 384,  1141 => 383,  1134 => 382,  1126 => 381,  1117 => 380,  1115 => 379,  1112 => 378,  1104 => 371,  1098 => 368,  1085 => 362,  1079 => 359,  1073 => 358,  1067 => 357,  1063 => 356,  1058 => 354,  1050 => 353,  1046 => 352,  1038 => 351,  1033 => 349,  1025 => 348,  1018 => 346,  1010 => 345,  1002 => 344,  995 => 339,  989 => 337,  987 => 336,  983 => 335,  978 => 332,  976 => 331,  973 => 330,  971 => 329,  968 => 328,  961 => 322,  952 => 316,  948 => 314,  942 => 312,  936 => 310,  934 => 309,  922 => 300,  912 => 297,  904 => 296,  896 => 295,  888 => 294,  880 => 293,  872 => 292,  866 => 289,  857 => 287,  847 => 286,  841 => 283,  833 => 282,  826 => 280,  818 => 279,  807 => 278,  799 => 277,  792 => 272,  786 => 270,  784 => 269,  780 => 268,  775 => 265,  773 => 264,  770 => 263,  768 => 262,  765 => 261,  762 => 259,  754 => 254,  738 => 247,  733 => 245,  724 => 243,  720 => 242,  712 => 237,  705 => 235,  697 => 234,  694 => 233,  688 => 232,  684 => 230,  682 => 229,  679 => 228,  675 => 225,  669 => 221,  658 => 215,  654 => 214,  649 => 212,  643 => 210,  641 => 209,  634 => 205,  625 => 203,  621 => 202,  611 => 197,  607 => 196,  601 => 195,  593 => 192,  585 => 191,  577 => 190,  568 => 185,  566 => 184,  563 => 183,  558 => 179,  552 => 175,  542 => 170,  537 => 168,  533 => 167,  528 => 165,  523 => 162,  521 => 161,  514 => 157,  505 => 155,  501 => 154,  491 => 149,  487 => 148,  481 => 147,  473 => 144,  465 => 143,  457 => 142,  450 => 137,  444 => 135,  442 => 134,  438 => 133,  431 => 130,  429 => 129,  426 => 128,  423 => 126,  419 => 124,  404 => 122,  400 => 121,  392 => 118,  383 => 117,  381 => 116,  378 => 115,  375 => 113,  370 => 110,  355 => 108,  351 => 107,  344 => 106,  340 => 104,  325 => 102,  321 => 101,  314 => 100,  312 => 99,  303 => 98,  301 => 97,  298 => 96,  295 => 94,  291 => 92,  287 => 90,  283 => 88,  281 => 87,  275 => 84,  263 => 81,  257 => 77,  255 => 76,  243 => 71,  235 => 70,  230 => 69,  228 => 68,  225 => 67,  221 => 64,  214 => 62,  210 => 61,  204 => 60,  195 => 58,  192 => 59,  190 => 56,  184 => 53,  177 => 51,  173 => 50,  167 => 49,  164 => 48,  158 => 47,  153 => 49,  147 => 42,  136 => 39,  130 => 38,  127 => 37,  121 => 34,  118 => 35,  116 => 34,  109 => 30,  102 => 28,  98 => 28,  89 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  68 => 19,  55 => 16,  49 => 15,  44 => 13,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  23 => 2,  248 => 109,  239 => 103,  226 => 95,  211 => 83,  206 => 81,  201 => 59,  187 => 55,  180 => 64,  174 => 60,  159 => 58,  155 => 46,  150 => 48,  140 => 40,  134 => 41,  128 => 48,  122 => 47,  117 => 45,  113 => 33,  104 => 41,  100 => 40,  92 => 26,  87 => 38,  85 => 37,  73 => 28,  69 => 27,  64 => 18,  58 => 17,  52 => 19,  48 => 13,  46 => 14,  43 => 15,  41 => 12,  36 => 7,  34 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }
}
