<?php

/* _sub_mainmenu.twig */
class __TwigTemplate_a5f02c626f9049b74069e0a25d3a93c8 extends Twig_Template
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
        echo "<div class=\"nav-collapse\">
    <ul class=\"nav pull-right\">
        ";
        // line 3
        if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user"), "method")))) {
            // line 4
            echo "            <li class=\"";
            if (twig_in_filter((isset($context["active"]) ? $context["active"] : null), array(0 => "", 1 => "dashboard"))) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
            echo "\">
                <i class=\"icon-home\"></i> ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Dashboard");
            echo "</a></li>
            <li class=\"";
            // line 6
            if (((isset($context["active"]) ? $context["active"] : null) == "content")) {
                echo "active ";
            }
            echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-sitemap\"></i> ";
            // line 8
            echo $this->env->getExtension('Bolt')->trans("Content");
            echo " <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
                // line 12
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . (isset($context["slug"]) ? $context["slug"] : null)))) {
                    // line 13
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => (isset($context["slug"]) ? $context["slug"] : null))), "html", null, true);
                    echo "\">
                                <i class=\"icon-tasks\"></i> ";
                    // line 14
                    echo $this->env->getExtension('Bolt')->trans("View %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
                    echo "</a></li>
                            <li><a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["slug"]) ? $context["slug"] : null), "id" => "")), "html", null, true);
                    echo "\">
                                <i class=\"icon-plus\"></i> ";
                    // line 16
                    echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
                    echo "</a></li>
                            ";
                    // line 17
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo "<li class=\"divider\"></li>";
                    }
                    // line 18
                    echo "                        ";
                }
                // line 19
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "
                </ul>
            </li>

            ";
            // line 24
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 25
                echo "            <li class=\"";
                if (((isset($context["active"]) ? $context["active"] : null) == "settings")) {
                    echo "active ";
                }
                echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cogs\"></i> ";
                // line 26
                echo $this->env->getExtension('Bolt')->trans("Settings");
                echo "
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                // line 30
                if ($this->env->getExtension('Bolt')->isAllowed("files:config")) {
                    // line 31
                    echo "                        <li class=\"nav-header\">";
                    echo $this->env->getExtension('Bolt')->trans("Configuration");
                    echo "</li>
                        <li><a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users"), "html", null, true);
                    echo "\"><i class=\"icon-group\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Users");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/config.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-cog\"></i> ";
                    // line 34
                    echo $this->env->getExtension('Bolt')->trans("Configuration");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/contenttypes.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-cog\"></i> ";
                    // line 36
                    echo $this->env->getExtension('Bolt')->trans("Contenttypes");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/menu.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-cog\"></i> ";
                    // line 38
                    echo $this->env->getExtension('Bolt')->trans("Menu setup");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/taxonomy.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-tags\"></i> ";
                    // line 40
                    echo $this->env->getExtension('Bolt')->trans("Taxonomy");
                    echo "</a></li>
                        <li class=\"divider\"></li>
                    ";
                }
                // line 43
                echo "                    <li class=\"nav-header\">";
                echo $this->env->getExtension('Bolt')->trans("Maintenance");
                echo "</li>
                    ";
                // line 44
                if ($this->env->getExtension('Bolt')->isAllowed("extensions")) {
                    // line 45
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extensions"), "html", null, true);
                    echo "\"><i class=\"icon-briefcase\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Extensions");
                    echo "</a></li>
                    ";
                }
                // line 47
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("dbupdate")) {
                    // line 48
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbcheck"), "html", null, true);
                    echo "\"><i class=\"icon-wrench\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Check database");
                    echo "</a></li>
                    ";
                }
                // line 50
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("clearcache")) {
                    // line 51
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clearcache"), "html", null, true);
                    echo "\"><i class=\"icon-magic\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Clear the cache");
                    echo "</a></li>
                    ";
                }
                // line 53
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("activitylog")) {
                    // line 54
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitylog"), "html", null, true);
                    echo "\"><i class=\"icon-file\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Activity log");
                    echo "</a></li>
                    ";
                }
                // line 56
                echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">";
                // line 57
                echo $this->env->getExtension('Bolt')->trans("File Management");
                echo "</li>
                    ";
                // line 58
                if ($this->env->getExtension('Bolt')->isAllowed("files:theme")) {
                    // line 59
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => "theme")), "html", null, true);
                    echo "\"><i class=\"icon-hdd\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("View / edit Templates");
                    echo "</a></li>
                    ";
                }
                // line 61
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("files:uploads")) {
                    // line 62
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => "files")), "html", null, true);
                    echo "\"><i class=\"icon-hdd\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Uploaded files");
                    echo "</a></li>
                    ";
                }
                // line 64
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("translation")) {
                    // line 65
                    echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">";
                    // line 66
                    echo $this->env->getExtension('Bolt')->trans("Translations");
                    echo "</li>
                        <li><a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("translation", array("domain" => "messages")), "html", null, true);
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Messages");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("translation", array("domain" => "infos")), "html", null, true);
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Long messages");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("translation", array("domain" => "contenttypes")), "html", null, true);
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Contenttypes");
                    echo "</a></li>
                    ";
                }
                // line 71
                echo "
                </ul>
            </li>
            ";
            }
            // line 75
            echo "
            <li class=\"divider-vertical\"></li>

            <li><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a></li>
            <li class=\"divider-vertical\"></li>
            <li>
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\"><i class=\"icon-signout\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Logout %name%", array("%name%" => $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), 16)));
            echo "</a>
            </li>
        ";
        } else {
            // line 84
            echo "            <li class=\"divider-vertical\"></li>
            <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a></li>
            <li class=\"divider-vertical\"></li>
            <li>
                <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\"><i class=\"icon-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Login");
            echo "</a>
            </li>
        ";
        }
        // line 91
        echo "    </ul>
</div><!--/.nav-collapse -->
";
    }

    public function getTemplateName()
    {
        return "_sub_mainmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 91,  321 => 88,  313 => 85,  310 => 84,  302 => 81,  294 => 78,  289 => 75,  283 => 71,  276 => 69,  264 => 67,  260 => 66,  257 => 65,  254 => 64,  246 => 62,  243 => 61,  235 => 59,  233 => 58,  229 => 57,  226 => 56,  218 => 54,  215 => 53,  207 => 51,  204 => 50,  196 => 48,  193 => 47,  185 => 45,  178 => 43,  172 => 40,  168 => 39,  164 => 38,  160 => 37,  152 => 35,  144 => 33,  138 => 32,  133 => 31,  109 => 20,  95 => 19,  76 => 14,  68 => 12,  51 => 11,  45 => 8,  38 => 6,  25 => 4,  23 => 3,  157 => 50,  134 => 42,  130 => 41,  124 => 26,  102 => 31,  92 => 18,  88 => 17,  83 => 24,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  47 => 12,  35 => 9,  162 => 58,  158 => 56,  149 => 48,  145 => 47,  141 => 51,  139 => 45,  136 => 49,  132 => 47,  119 => 36,  115 => 24,  113 => 41,  110 => 33,  97 => 29,  93 => 35,  89 => 33,  87 => 32,  84 => 16,  80 => 15,  63 => 24,  61 => 23,  52 => 14,  41 => 12,  37 => 11,  28 => 4,  24 => 3,  270 => 68,  259 => 85,  253 => 82,  248 => 80,  240 => 74,  225 => 72,  220 => 69,  205 => 67,  203 => 66,  200 => 65,  183 => 44,  174 => 58,  170 => 57,  165 => 55,  161 => 51,  156 => 36,  153 => 49,  151 => 50,  148 => 34,  131 => 30,  127 => 46,  123 => 45,  117 => 25,  111 => 40,  106 => 32,  103 => 38,  99 => 37,  96 => 36,  91 => 33,  85 => 32,  79 => 23,  74 => 21,  71 => 13,  67 => 26,  60 => 22,  56 => 20,  54 => 19,  50 => 15,  43 => 11,  39 => 10,  34 => 5,  32 => 8,  27 => 7,  21 => 2,  19 => 1,);
    }
}
