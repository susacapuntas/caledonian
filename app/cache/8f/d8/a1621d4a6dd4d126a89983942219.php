<?php

/* _sub_contentrow.twig */
class __TwigTemplate_8fd8a1621d4a6dd4d126a89983942219 extends Twig_Template
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
        $context["editable"] = (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username") == $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username")) || $this->env->getExtension('Bolt')->isAllowed("editcontent:all"));
        // line 4
        echo "
<tr ";
        // line 5
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") != "published")) {
            echo "class=\"dim\"";
        }
        echo ">
    <td class='id hide-phone'>№ ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo "</td>
    <td class='excerpt ";
        // line 7
        if ((!(isset($context["compact"]) ? $context["compact"] : null))) {
            echo "large";
        }
        echo "'><span>
        <strong class=\"show-phone\">№ ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo ". </strong>
        <strong>
            ";
        // line 10
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 11
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), "html", null, true);
            echo "\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "
            </a>
            ";
        } else {
            // line 15
            echo "            <strong>
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "
            </strong>
            ";
        }
        // line 19
        echo "        </strong>
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => (isset($context["excerptlength"]) ? $context["excerptlength"] : null)), "method"), "html", null, true);
        echo "
                    </span></td>
    <td class='listthumb'>
        ";
        // line 23
        if ((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage")))) {
            // line 24
            echo "            ";
            echo $this->env->getExtension('Bolt')->fancybox($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage"), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), ((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75), "c");
            echo "
        ";
        }
        // line 26
        echo "    </td>
    ";
        // line 27
        if ((!(isset($context["compact"]) ? $context["compact"] : null))) {
            // line 28
            echo "    <td class='username hide-phone'>
        <i class=\"icon-user\"></i> ";
            // line 29
            if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username"), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username"), array(), "array"), "displayname"), "html", null, true);
            } else {
                echo "<s>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username"), "html", null, true);
                echo "</s>";
            }
            echo "<br>
        ";
            // line 30
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "timed")) {
                // line 31
                echo "            <i class=\"icon-time\"></i> <time class=\"moment\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
                echo "</time><br>
        ";
            } else {
                // line 33
                echo "            <i class=\"icon-calendar\"></i> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "d/m/Y"), "html", null, true);
                echo "<br>
        ";
            }
            // line 35
            echo "
        ";
            // line 36
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) && (!($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder") === false)))) {
                // line 37
                echo "            <i class=\"icon-sort\"></i> ";
                echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder")));
                echo " <br>
        ";
            }
            // line 39
            echo "    </td>
    ";
        }
        // line 41
        echo "    <td class='actions'>
        <div class=\"btn-group\">
            ";
        // line 43
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 44
            echo "            <button class=\"btn btn-mini uselink\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\">
                <i class=\"icon-edit\"></i> ";
            // line 46
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "</a>
            </button>
            ";
        }
        // line 49
        echo "            <button class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                <i class=\"icon-info-sign\"></i>
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu pull-right\">
            ";
        // line 54
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "published")) {
            // line 55
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link"), "html", null, true);
            echo "\" target=\"_blank\">
                    <i class=\"icon-external-link\"></i> ";
            // line 56
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "</a></li>
            ";
        }
        // line 58
        echo "            ";
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 59
            echo "                ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") != "published")) {
                // line 60
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "publish", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
                echo "\">
                        <i class=\"icon-star-empty\"></i> ";
                // line 61
                echo $this->env->getExtension('Bolt')->trans("Publish %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
                echo "</a></li>
                ";
            } else {
                // line 63
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "held", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
                echo "\">
                        <i class=\"icon-star\"></i> ";
                // line 64
                echo $this->env->getExtension('Bolt')->trans("Change status to 'held'");
                echo "</a></li>
                    <li><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "draft", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
                echo "\">
                        <i class=\"icon-pencil\"></i> ";
                // line 66
                echo $this->env->getExtension('Bolt')->trans("Change status to 'draft'");
                echo "</a></li>
                ";
            }
            // line 68
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "duplicate" => 1)), "html", null, true);
            echo "\">
                    <i class=\"icon-copy\"></i> ";
            // line 69
            echo $this->env->getExtension('Bolt')->trans("Duplicate %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
            echo "</a></li>
                <li><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "delete", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "token" => $this->env->getExtension('Bolt')->token())), "html", null, true);
            echo "\"
                       data-confirm=\"Are you sure you want to delete '";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "'?\" class=\"confirm\">
                    <i class=\"icon-trash\"></i> ";
            // line 72
            echo $this->env->getExtension('Bolt')->trans("Delete %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
            echo "</a></li>
                <li class=\"divider\"></li>
            ";
        }
        // line 75
        echo "                <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"icon-user\"></i>
                    ";
        // line 76
        if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username"), array(), "array", true, true)) {
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username"), array(), "array"), "displayname"), 20);
        } else {
            // line 77
            echo "                        <s>";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "username"), 20);
            echo "</s>";
        }
        echo "</strong></a></li>
                <li><a class=\"nolink\">";
        // line 78
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                    <strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status"), "html", null, true);
        echo "</strong></a></li>
                <li><a class=\"nolink\">";
        // line 80
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                    <code title=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), 24);
        echo "</code></a></li>
                <li><a class=\"nolink\">";
        // line 82
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                    <i class=\"icon-asterisk\"></i> ";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                <li><a class=\"nolink\">";
        // line 84
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                    <i class=\"icon-calendar\"></i> ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                <li><a class=\"nolink\">";
        // line 86
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                    <i class=\"icon-refresh\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 89
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["values"]) ? $context["values"] : null)) > 1)) {
                // line 90
                echo "                        <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "taxonomy"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array"), "name"), "html", null, true);
                echo ":
                            <i class=\"icon-tag\"></i> ";
                // line 91
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter((isset($context["values"]) ? $context["values"] : null), ", "), 24);
                echo "</a></li>
                    ";
            } else {
                // line 93
                echo "                        <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "taxonomy"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array"), "singular_name"), "html", null, true);
                echo ":
                            <i class=\"icon-tag\"></i> ";
                // line 94
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first((isset($context["values"]) ? $context["values"] : null)), 24);
                echo "</a></li>
                    ";
            }
            // line 96
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 97
        echo "            </ul>
        </div>

    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "_sub_contentrow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 97,  320 => 96,  315 => 94,  305 => 91,  300 => 90,  297 => 89,  293 => 88,  285 => 86,  281 => 85,  277 => 84,  273 => 83,  269 => 82,  263 => 81,  255 => 79,  251 => 78,  244 => 77,  221 => 70,  217 => 69,  212 => 68,  199 => 64,  194 => 63,  189 => 61,  184 => 60,  181 => 59,  173 => 56,  166 => 54,  159 => 49,  146 => 44,  140 => 41,  128 => 36,  125 => 35,  107 => 30,  94 => 28,  81 => 23,  75 => 20,  72 => 19,  48 => 10,  33 => 6,  22 => 3,  329 => 91,  321 => 88,  313 => 85,  310 => 93,  302 => 81,  294 => 78,  289 => 87,  283 => 71,  276 => 69,  264 => 67,  260 => 66,  257 => 65,  254 => 64,  246 => 62,  243 => 61,  235 => 75,  233 => 58,  229 => 72,  226 => 56,  218 => 54,  215 => 53,  207 => 66,  204 => 50,  196 => 48,  193 => 47,  185 => 45,  178 => 58,  172 => 40,  168 => 55,  164 => 38,  160 => 37,  152 => 35,  144 => 43,  138 => 32,  133 => 31,  109 => 31,  95 => 19,  76 => 14,  68 => 12,  51 => 11,  45 => 8,  38 => 6,  25 => 4,  23 => 3,  157 => 50,  134 => 42,  130 => 37,  124 => 26,  102 => 31,  92 => 27,  88 => 17,  83 => 24,  70 => 20,  66 => 16,  62 => 18,  57 => 12,  47 => 12,  35 => 9,  162 => 58,  158 => 56,  149 => 45,  145 => 47,  141 => 51,  139 => 45,  136 => 39,  132 => 47,  119 => 33,  115 => 24,  113 => 41,  110 => 33,  97 => 29,  93 => 35,  89 => 26,  87 => 32,  84 => 16,  80 => 15,  63 => 15,  61 => 23,  52 => 14,  41 => 12,  37 => 7,  28 => 4,  24 => 4,  270 => 68,  259 => 80,  253 => 82,  248 => 80,  240 => 76,  225 => 71,  220 => 69,  205 => 67,  203 => 65,  200 => 65,  183 => 44,  174 => 58,  170 => 57,  165 => 55,  161 => 51,  156 => 36,  153 => 46,  151 => 50,  148 => 34,  131 => 30,  127 => 46,  123 => 45,  117 => 25,  111 => 40,  106 => 32,  103 => 38,  99 => 37,  96 => 36,  91 => 33,  85 => 32,  79 => 23,  74 => 21,  71 => 13,  67 => 26,  60 => 22,  56 => 20,  54 => 19,  50 => 11,  43 => 8,  39 => 10,  34 => 5,  32 => 8,  27 => 5,  21 => 2,  19 => 1,);
    }
}
