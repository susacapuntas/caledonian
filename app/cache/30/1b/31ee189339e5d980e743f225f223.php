<?php

/* dashboard.twig */
class __TwigTemplate_301b31ee189339e5d980e743f225f223 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span8\">

        <h1>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("Dashboard");
        echo "</h1>

";
        // line 8
        if ((isset($context["suggestloripsum"]) ? $context["suggestloripsum"] : null)) {
            // line 9
            echo "
    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 12
            echo $this->env->getExtension('Bolt')->trans("It seems there's no content in the database.");
            echo "
        ";
            // line 13
            echo $this->env->getExtension('Bolt')->trans("To get started quickly, add some <a href='%url%'>Lorem Ipsum dummy content</a>.", array("%url%" => $this->env->getExtension('routing')->getPath("prefill", array("force" => 1))));
            echo "
    </div>

";
        }
        // line 17
        echo "
    <div class=\"quicklinks\">
    ";
        // line 19
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes")) > 3)) {
            // line 20
            echo "        <div class=\"btn-group\">
          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 22
            echo $this->env->getExtension('Bolt')->trans("Add …");
            echo "
            <span class=\"caret\"></span>
          </a>
        <ul class=\"dropdown-menu\">
            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 27
                echo "            ";
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null)))) {
                    // line 28
                    echo "            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null), "id" => "")), "html", null, true);
                    echo "\">
                <i class=\"icon-plus\"></i> ";
                    // line 29
                    echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
                    echo "
            </a></li>
            ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "        </ul>
    </div>
    ";
        } else {
            // line 36
            echo "        <div class=\"btn-group\">
        ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 38
                echo "            ";
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null)))) {
                    // line 39
                    echo "            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null), "id" => "")), "html", null, true);
                    echo "\">
                <i class=\"icon-plus\"></i> ";
                    // line 40
                    echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
                    echo "
            </a>
            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "        </div>
    ";
        }
        // line 46
        echo "    </div>

    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) ? $context["latest"] : null));
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
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 49
            echo "
        ";
            // line 50
            if ((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null)) {
                // line 51
                echo "
            <h3>";
                // line 52
                echo $this->env->getExtension('Bolt')->trans("Latest %contenttypes%.", array("%contenttypes%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"), (isset($context["contenttype"]) ? $context["contenttype"] : null), array(), "array"), "name")));
                echo "
                <span>
                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => (isset($context["contenttype"]) ? $context["contenttype"] : null))), "html", null, true);
                echo "\" class='morelink'>
                        ";
                // line 55
                echo $this->env->getExtension('Bolt')->trans("More %contenttypes% »", array("%contenttypes%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"), (isset($context["contenttype"]) ? $context["contenttype"] : null), array(), "array"), "name")));
                echo "
                    </a>
                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["contenttype"]) ? $context["contenttype"] : null), "id" => "")), "html", null, true);
                echo "\" class='morelink'>
                        ";
                // line 58
                echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"), (isset($context["contenttype"]) ? $context["contenttype"] : null), array(), "array"), "singular_name")));
                echo "
                    </a>
                </span>
            </h3>

            <table class='dashboardlisting'>
                ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
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
                    // line 65
                    echo "
                    ";
                    // line 66
                    $this->env->loadTemplate("_sub_contentrow.twig")->display(array_merge($context, array("excerptlength" => 280, "thumbsize" => 54, "compact" => true)));
                    // line 67
                    echo "
                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 69
                echo "            </table>

        ";
            }
            // line 72
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "

    </div><!-- /span8 -->

    <aside class=\"span4\">

    ";
        // line 80
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("dashboardnews"));
        echo "

    ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->widget($this->env, "dashboard", "right_first"), "html", null, true);
        echo "

    <div id=\"latestactivity\">
        ";
        // line 85
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
    </div>
    <div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>

    </aside><!-- /span4 -->
</div>


";
        // line 93
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 93,  259 => 85,  253 => 82,  248 => 80,  240 => 74,  225 => 72,  220 => 69,  205 => 67,  203 => 66,  200 => 65,  183 => 64,  174 => 58,  170 => 57,  165 => 55,  161 => 54,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  131 => 48,  127 => 46,  123 => 44,  117 => 43,  111 => 40,  106 => 39,  103 => 38,  99 => 37,  96 => 36,  91 => 33,  85 => 32,  79 => 29,  74 => 28,  71 => 27,  67 => 26,  60 => 22,  56 => 20,  54 => 19,  50 => 17,  43 => 13,  39 => 12,  34 => 9,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
