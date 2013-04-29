<?php

/* overview.twig */
class __TwigTemplate_5ff4d85d9844f8550f040949b271f579 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "content")));
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

        <h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " <span>";
        if ((array_key_exists("pages", $context) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") > 1))) {
            echo $this->env->getExtension('Bolt')->trans("Page:");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
        }
        echo "</span></h1>

        ";
        // line 8
        $context["lastgroup"] = "----";
        // line 9
        echo "
    <table class='dashboardlisting'>

        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 13
            echo "
            ";
            // line 15
            echo "            ";
            if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", true, true) && (!($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group") === false))) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) {
                // line 16
                echo "                <tr class=\"grouping\"><th colspan=\"5\"><h3>";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "html", null, true);
                } else {
                    echo $this->env->getExtension('Bolt')->trans("(no group)");
                }
                echo "</h3></th></tr>
            ";
            }
            // line 18
            echo "
            ";
            // line 20
            echo "            ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", true, true) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))))) {
                // line 21
                echo "                ";
                $context["lastgroup"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group");
                // line 22
                echo "                ";
                if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
                    // line 23
                    echo "                    ";
                    $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
                    // line 24
                    echo "                ";
                } else {
                    // line 25
                    echo "                    ";
                    $context["filter"] = "";
                    // line 26
                    echo "                ";
                }
                // line 27
                echo "
                ";
                // line 28
                $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
                // line 29
                echo "                <tr>
                    <th class=\"hide-phone\"><a href='";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "id ";
                if (($this->env->getExtension('Bolt')->request("order") == "id ASC")) {
                    echo "DESC";
                } else {
                    echo "ASC";
                }
                echo "'>#</a></th>

                    <th style=\"width:80%\"><a href='";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "title ";
                if (($this->env->getExtension('Bolt')->request("order") == "title ASC")) {
                    echo "DESC";
                } else {
                    echo "ASC";
                }
                echo "'>
                            ";
                // line 33
                echo $this->env->getExtension('Bolt')->trans("Title");
                echo " / ";
                echo $this->env->getExtension('Bolt')->trans("Excerpt");
                echo "</a></th>
                    <th>&nbsp;</th>
                    <th class='username hide-phone'><a href='";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "datecreated ";
                if (($this->env->getExtension('Bolt')->request("order") == "datecreated ASC")) {
                    echo "DESC";
                } else {
                    echo "ASC";
                }
                echo "'>";
                echo $this->env->getExtension('Bolt')->trans("Meta");
                echo "</a></th>
                    <th><a href='?'>";
                // line 36
                echo $this->env->getExtension('Bolt')->trans("Actions");
                echo "</a></th>
                </tr>
            ";
            }
            // line 39
            echo "
            ";
            // line 40
            $this->env->loadTemplate("_sub_contentrow.twig")->display(array_merge($context, array("excerptlength" => 380, "thumbsize" => 80, "compact" => false)));
            // line 41
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("No %contenttypes% available.", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "    </table>

    ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "

    </div><!-- /span9 -->
    <aside class=\"span3\">

    <section>
    <h2>";
        // line 53
        echo $this->env->getExtension('Bolt')->trans("Actions for %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
        echo ":</h2>

    <a class=\"btn\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "id" => "")), "html", null, true);
        echo "\">
        <i class=\"icon-plus\"></i> ";
        // line 56
        echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "
    </a>
    ";
        // line 58
        if (($this->env->getExtension('Bolt')->request("filter") || $this->env->getExtension('Bolt')->request("order"))) {
            // line 59
            echo "    <a class=\"btn\" href=\"?\">";
            echo $this->env->getExtension('Bolt')->trans("Clear sort/filter");
            echo "</a>
    ";
        }
        // line 61
        echo "
    <h2>";
        // line 62
        echo $this->env->getExtension('Bolt')->trans("Filtering:");
        echo "</h2>

<form class=\"form-inline\">
  <input type=\"text\" class=\"input-small\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\">
  <button type=\"submit\" class=\"btn\">";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("Filter");
        echo "</button>
      ";
        // line 67
        if ($this->env->getExtension('Bolt')->request("filter")) {
            echo "<p><a href=\"?\">";
            echo $this->env->getExtension('Bolt')->trans("Clear filter");
            echo "</a></p>";
        }
        // line 68
        echo "</form>


    </section>

";
        // line 73
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"))));
        echo "




    </aside>
</div>


";
        // line 82
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 82,  252 => 73,  245 => 68,  239 => 67,  235 => 66,  231 => 65,  225 => 62,  222 => 61,  216 => 59,  214 => 58,  209 => 56,  205 => 55,  200 => 53,  191 => 47,  187 => 45,  178 => 43,  164 => 41,  162 => 40,  159 => 39,  153 => 36,  141 => 35,  134 => 33,  124 => 32,  113 => 30,  110 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 18,  71 => 16,  68 => 15,  65 => 13,  47 => 12,  42 => 9,  40 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
