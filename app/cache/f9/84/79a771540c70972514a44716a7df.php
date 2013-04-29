<?php

/* base.twig */
class __TwigTemplate_f98479a771540c70972514a44716a7df extends Twig_Template
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

<h1>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>

";
        // line 7
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
        // line 9
        echo "
    ";
        // line 10
        if (((array_key_exists("form", $context)) ? (_twig_default_filter((isset($context["form"]) ? $context["form"] : null), null)) : (null))) {
            // line 11
            echo "    <form method=\"post\" id=\"prefill\" class=\"form-horizontal\">
        <div class=\"control-group\">

        <div id=\"form\">
            <div class=\"control-group\">
                <div class=\"info\">";
            // line 16
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "prefill.short_help", 1 => array(), 2 => "infos"), "method");
            echo "</div>
                <div id=\"form_contenttypes\">
                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contenttypes"]) ? $context["contenttypes"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["ctype"]) {
                // line 19
                echo "                    <label><input type=\"checkbox\" id=\"form_contenttypes_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), "html", null, true);
                echo "\" name=\"form[contenttypes][]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, (isset($context["ctype"]) ? $context["ctype"] : null), "html", null, true);
                echo "</label>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ctype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 21
            echo "                </div>
            </div>
        </div>
        ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token"), 'widget');
            echo "

        <button type=\"submit\" class=\"btn btn-primary\" ><i class=\"icon-wrench\"></i> ";
            // line 26
            echo $this->env->getExtension('Bolt')->trans("Prefill database");
            echo "</button>
    </form>
    ";
        }
        // line 29
        echo "

";
        // line 31
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  106 => 29,  100 => 26,  95 => 24,  90 => 21,  69 => 19,  52 => 18,  47 => 16,  40 => 11,  38 => 10,  35 => 9,  30 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
