<?php

/* dashboard-activity.twig */
class __TwigTemplate_ed9fb5ccc3c0a1781c6b0cc975b340bb extends Twig_Template
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
<section class=\"news\">
    <h2>";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("Latest activity");
        echo "</h2>
    <ul class='activity'>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) ? $context["activity"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 6
            echo "    ";
            $context["username"] = "unknown";
            // line 7
            echo "    ";
            if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"), array(), "any", true, true)) {
                // line 8
                echo "        ";
                $context["username"] = $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username")), "displayname");
                // line 9
                echo "    ";
            }
            // line 10
            echo "    <li>
        ";
            // line 11
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "save content")) {
                // line 12
                echo "            Saved ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "contenttypes"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype"), array(), "array"), "singular_name"), "html", null, true);
                echo "
            \"<strong>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "</strong>\" by <em>";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
                echo "</em>
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "login")) {
                // line 15
                echo "            <em>";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
                echo "</em> logged in
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "logout")) {
                // line 17
                echo "            <em>";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
                echo "</em> logged out
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "fixme")) {
                // line 19
                echo "            <b>Fixme:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "user")) {
                // line 21
                echo "            <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "</b> by ";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
                echo "
        ";
            } else {
                // line 23
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
            }
            // line 25
            echo "        <small>(<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
            echo "</time>)</small>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "    </ul>

    <p style='text-align: right;'><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitylog"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("more activity");
        echo " »</a></p>

</section>

";
    }

    public function getTemplateName()
    {
        return "dashboard-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  107 => 28,  93 => 25,  87 => 23,  79 => 21,  73 => 19,  67 => 17,  61 => 15,  54 => 13,  49 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
