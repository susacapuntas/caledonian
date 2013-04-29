<?php

/* _sub_editfields.twig */
class __TwigTemplate_71c2d471b38bff3d2d8882f5b32dc6e6 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "fields"));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 2
            echo "
";
            // line 4
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix"))))) {
                // line 5
                echo "<div class='clearfix'>
    ";
                // line 6
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix");
                echo "
</div>
";
            }
            // line 9
            echo "

";
            // line 12
            echo "
";
            // line 13
            if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "text") && ((!$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant", array(), "any", true, true)) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "")))) {
                // line 14
                echo "<label><b>
    ";
                // line 15
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 16
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
    value='";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
    class='";
                // line 19
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 21
            echo "
";
            // line 22
            if (((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "text") && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant", array(), "any", true, true)) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline"))) {
                // line 23
                echo "<label><b><span class='left'>
    ";
                // line 24
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 25
                echo "</span></b></label>
<input type=\"text\" name=\"";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
    value='";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
    class='";
                // line 28
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " narrow'>
";
            }
            // line 30
            echo "

";
            // line 33
            echo "
";
            // line 34
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "number")) {
                // line 35
                echo "    <label><b><span class='left'>
        ";
                // line 36
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                // line 37
                echo "    </span></b></label>
    <input type=\"number\" name=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"0.000000001\"
           value='";
                // line 39
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
           class='narrow ";
                // line 40
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 42
            echo "
";
            // line 44
            echo "
";
            // line 45
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "float")) {
                // line 46
                echo "    <label><b><span class='left'>
    ";
                // line 47
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 48
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"0.00000001\"
           value='";
                // line 50
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
           class='narrow ";
                // line 51
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 53
            echo "
";
            // line 55
            echo "
";
            // line 56
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "integer")) {
                // line 57
                echo "    <label><b><span class='left'>
    ";
                // line 58
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 59
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"1\"
           value='";
                // line 61
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
           class='narrow ";
                // line 62
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 64
            echo "

    ";
            // line 67
            echo "
";
            // line 68
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "slug")) {
                // line 69
                echo "<label class='permalink'>";
                echo $this->env->getExtension('Bolt')->trans("Permalink");
                echo ":
    <code>/";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_slug"), "html", null, true);
                echo "/<span id='show-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "</span></code>
    <input type=\"text\" name=\"";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"  id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "' class='editslug'>
    <span class='sluglocker'><i class='icon-lock'></i></span>
</label>


";
                // line 76
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) {
                    // line 77
                    echo "<script type=\"text/javascript\">
    \$('.sluglocker').bind('click', function() {
       if (\$('.sluglocker i').hasClass('icon-lock')) {
           \$('.sluglocker i').removeClass('icon-lock').addClass('icon-unlock');
           makeUri('";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', false);
       } else {
           \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
           stopMakeUri('";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"), "html", null, true);
                    echo "');
       }
    });
";
                    // line 87
                    if (twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                        // line 88
                        echo "    \$('.sluglocker').trigger('click');
";
                    }
                    // line 90
                    echo "</script>
";
                }
                // line 92
                echo "
";
            }
            // line 94
            echo "
";
            // line 96
            echo "
";
            // line 97
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "select")) {
                // line 98
                echo "    <label><b><span class='left'>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</span></b></label>
    ";
                // line 99
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple"))) {
                    // line 100
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "[]\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" multiple>
            ";
                    // line 101
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 102
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\" ";
                        if (twig_in_filter((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 104
                    echo "        </select>
    ";
                } else {
                    // line 106
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
            ";
                    // line 107
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 108
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == (isset($context["value"]) ? $context["value"] : null))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 110
                    echo "        </select>
    ";
                }
            }
            // line 113
            echo "
";
            // line 115
            echo "
";
            // line 116
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "templateselect")) {
                // line 117
                echo "<label><b><span class='left'>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</span></b></label>
    <select name=\"";
                // line 118
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
        <option value=\"\">(default template)</option>
        <option value=\"\" disabled>-----------</option>
        ";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listtemplates($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter")));
                foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
                    // line 122
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == (isset($context["filename"]) ? $context["filename"] : null))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 124
                echo "    </select>
";
            }
            // line 126
            echo "
";
            // line 128
            echo "
";
            // line 129
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "image")) {
                // line 130
                echo "<div class=\"dropzone\" id=\"dropzone-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">

    <div class=\"image-right\">
        <div class='imageholder' id=\"thumbnail-";
                // line 133
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            ";
                // line 134
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") != "")) {
                    // line 135
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), 120, 120, "c"), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
            ";
                }
                // line 137
                echo "        </div>
    </div>
    <div class=\"image-container\">

        <label>
            <b>";
                // line 142
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 143
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
                data-content=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.image", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        <input type=\"text\" name=\"";
                // line 147
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
            value='";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
            class='";
                // line 149
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " imageinput wide'>

<!-- The fileinput-button span is used to style the file input field as button -->
        <span class=\"btn btn-info fileinput-button\">
            <i class=\"icon-upload\"></i>
            <span>";
                // line 154
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
            <input id=\"fileupload-";
                // line 155
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 157
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

";
                // line 161
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 162
                    echo "
<script type=\"text/javascript\">

bindFileUpload('";
                    // line 165
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "');

\$(\"#field-";
                    // line 167
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\").autocomplete({
    source: \"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                    echo "filesautocomplete\",
    minLength: 2,
    close: function(){ \$('#thumbnail-";
                    // line 170
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').html(\"<img src='/thumbs/120x120c/\"+encodeURI( \$('#field-";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').val() )+\"' width='120' height='120'>\"); }
});

</script>
";
                }
                // line 175
                echo "
    </div>
</div>
";
            }
            // line 179
            echo "


";
            // line 183
            echo "
";
            // line 184
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "file")) {
                // line 185
                echo "<div class=\"dropzone\" id=\"dropzone-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">

    <div class=\"image-container\">

        <label>
            <b>";
                // line 190
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 191
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.file", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        <input type=\"text\" name=\"";
                // line 195
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
            value='";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
            class='";
                // line 197
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " imageinput'>

<!-- The fileinput-button span is used to style the file input field as button -->
        <span class=\"btn btn-info fileinput-button\">
            <i class=\"icon-upload\"></i>
            <span>";
                // line 202
                echo $this->env->getExtension('Bolt')->trans("Upload File");
                echo "</span>
            <input id=\"fileupload-";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 205
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

    ";
                // line 209
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 210
                    echo "        <div style=\"clear: left;\" class=\"hide-tablet\"><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.filesmall", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                    echo "</small></div>
        <script type=\"text/javascript\">
            bindFileUpload('";
                    // line 212
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "');

            \$(\"#field-";
                    // line 214
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\").autocomplete({
                source: \"";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                    echo "filesautocomplete?ext=";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), ","), "html", null, true);
                    echo "\",
                minLength: 2
            });

        </script>
    ";
                }
                // line 221
                echo "
    </div>
</div>
";
            }
            // line 225
            echo "

";
            // line 228
            echo "
";
            // line 229
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "imagelist")) {
                // line 230
                echo "<label>
    <b>
        ";
                // line 232
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 233
                echo "    </b>
    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 234
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
      data-content=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.imagelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
</label>
<div class=\"imagelistholder dropzone\" id=\"imagelist-";
                // line 237
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
    <div class=\"list\"></div>
    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\" style=\"margin-bottom: 8px;\">
            <i class=\"icon-upload\"></i>
            <span>";
                // line 242
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
            <input id=\"fileupload-";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
        <input type=\"button\" data-action=\"imagelist.addExisting()\" value=\"";
                // line 245
                echo $this->env->getExtension('Bolt')->trans("Add existing image");
                echo "\" class=\"btn\">
    </div>
    <textarea name=\"";
                // line 247
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>
    <div class='clearfix'></div>
</div>


<script>
jQuery(function(\$) {
    imagelist = new ImagelistHolder({id: '";
                // line 254
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'});
});
</script>

";
            }
            // line 259
            echo "
";
            // line 261
            echo "
";
            // line 262
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "video")) {
                // line 263
                echo "
";
                // line 264
                $context["video"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                // line 265
                echo "<div class=\"dropzone\">

    <div class=\"video-right hide-phone\">
        <div class='imageholder' id=\"thumbnail-";
                // line 268
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" style=\"width: 160px;\">
            ";
                // line 269
                if ((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : (""))) {
                    // line 270
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "html", null, true);
                    echo "\" width=\"160\" height=\"120\">
            ";
                }
                // line 272
                echo "        </div>
    </div>

    <div class=\"video-container\">
        <label>
            <b>";
                // line 277
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            (<span id=\"video-";
                // line 278
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-text\">";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title")) {
                    echo "\"";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), 18);
                    echo "\" by ";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), 18);
                }
                echo "</span>)
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 279
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 280
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.video", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>
        <label>";
                // line 282
                echo $this->env->getExtension('Bolt')->trans("URL:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[url]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
               value='";
                // line 283
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "html", null, true);
                echo "' style='width: 60%;'>
        </label>

        <label>";
                // line 286
                echo $this->env->getExtension('Bolt')->trans("Size:");
                echo " <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[width]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-width\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width"), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
        x <input type=\"number\" name=\"";
                // line 287
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[height]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-height\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height"), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
            pixels.
            <span class=\"hide-tablet\"><a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\" style='float: right;'>";
                // line 289
                echo $this->env->getExtension('Bolt')->trans("Preview video");
                echo "</a></span>
        </label>

        <input type=\"hidden\" name=\"";
                // line 292
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[ratio]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-ratio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio"), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 293
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[title]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-title\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 294
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[authorname]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-author_name\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 295
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[authorurl]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-author_url\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl"), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 296
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[html]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-html\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html"));
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 297
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[thumbnail]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-thumbnail\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "html", null, true);
                echo "\">

        <script type=\"text/javascript\">
            bindVideoEmbed('";
                // line 300
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "');
        </script>
    </div>
</div>

<!-- Modal video preview -->
<div class=\"modal hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div class=\"modal-body\">
        ";
                // line 309
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html")) {
                    // line 310
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 312
                    echo "        <p>";
                    echo $this->env->getExtension('Bolt')->trans("No video url is set, no video to show.");
                    echo "</p>
        ";
                }
                // line 314
                echo "    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 316
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
    </div>
</div>


";
            }
            // line 322
            echo "




";
            // line 328
            echo "
    ";
            // line 329
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "geolocation")) {
                // line 330
                echo "
        ";
                // line 331
                $context["geolocation"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                // line 332
                echo "        <div class=\"dropzone geolocation\">

            <div class=\"map-right hide-phone\">
                <div class='mapholder' id=\"map-";
                // line 335
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" style=\"width: 200px;\">
                    ";
                // line 336
                if (($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map") != "")) {
                    // line 337
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map"), "html", null, true);
                    echo "\" width=\"200\" height=\"200\">
                    ";
                }
                // line 339
                echo "                </div>
            </div>

            <div class=\"map-container\">
                <label>
                    <b>";
                // line 344
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
                    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 345
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
                          data-content=\"";
                // line 346
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.geolocation", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
                </label>
                <label>";
                // line 348
                echo $this->env->getExtension('Bolt')->trans("Address lookup:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-address\"
                    value='";
                // line 349
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address"), "html", null, true);
                echo "' style='width: 60%;'>
                </label>
                <label>";
                // line 351
                echo $this->env->getExtension('Bolt')->trans("Latitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[latitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-latitude\"
                    value='";
                // line 352
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "html", null, true);
                echo "' style='width: 30%;'>
                 - ";
                // line 353
                echo $this->env->getExtension('Bolt')->trans("Longitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[longitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-longitude\"
                    value='";
                // line 354
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "html", null, true);
                echo "' style='width: 30%;'>
                </label>
                <p>";
                // line 356
                echo $this->env->getExtension('Bolt')->trans("Matched address:");
                echo "
                <span id=\"";
                // line 357
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-reversegeo\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "html", null, true);
                echo "</span></p>
                <input type=\"hidden\" name=\"";
                // line 358
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[formatted_address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-formatted_address\"
                       value='";
                // line 359
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "html", null, true);
                echo "' style='width: 30%;'>
                <script type=\"text/javascript\">
                    \$(function() {
                        bindGeolocation('";
                // line 362
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "html", null, true);
                echo "');
                    });
                </script>
            </div>
        </div>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\" src=\"";
                // line 368
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/js/jquery.gomap-1.3.2.min.js\"></script>

    ";
            }
            // line 371
            echo "





";
            // line 378
            echo "
";
            // line 379
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "html")) {
                // line 380
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 381
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " ckeditor'
    style='";
                // line 382
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                }
                echo "'>
    ";
                // line 383
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                // line 384
                echo "</textarea>
";
            }
            // line 386
            echo "
";
            // line 388
            echo "
";
            // line 389
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "textarea")) {
                // line 390
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 391
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
    style='";
                // line 392
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                }
                echo "'>";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>
";
            }
            // line 394
            echo "

";
            // line 397
            echo "
";
            // line 398
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "markdown")) {
                // line 399
                echo "    <label>
        <b>";
                // line 400
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 401
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
              data-content=\"";
                // line 402
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.markdown", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>

    </label>
    <textarea id=\"";
                // line 405
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
              style='";
                // line 406
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                    echo " !important;";
                }
                echo "'>";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>

    <textarea id=\"jquery-catchpaste-textarea\" style=\"position: absolute; width: 0 !important; height: 0; left: -10000px;\"></textarea>

<script type=\"text/javascript\">
    bindMarkdown('";
                // line 411
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "');
</script>

";
            }
            // line 415
            echo "

";
            // line 418
            echo "
";
            // line 419
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "date")) {
                // line 420
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 421
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date\"
    value='";
                // line 422
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 423
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"hidden\" name=\"";
                // line 424
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "\">
<script>
    \$('#";
                // line 426
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').on('change', function(){
        var date = \$('#";
                // line 427
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').datepicker( \"getDate\" );
        \$('#";
                // line 428
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date));
    });
</script>
";
            }
            // line 432
            echo "

";
            // line 435
            echo "
";
            // line 436
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "datetime")) {
                // line 437
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 438
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date\"
    value='";
                // line 439
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 440
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"text\" name=\"";
                // line 441
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-timeformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time\"
    value='";
                // line 442
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "H:i"), "html", null, true);
                }
                echo "'
    class='";
                // line 443
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " timepicker'>
<input type=\"hidden\" name=\"";
                // line 444
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "\">
<script>
    \$('#";
                // line 446
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date, #";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time').on('change', function(){
        var date = \$('#";
                // line 447
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').datepicker(\"getDate\");
        var time = \$('#";
                // line 448
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time').val() + \":00\";
        \$('#";
                // line 449
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
    });
</script>
";
            }
            // line 453
            echo "

";
            // line 456
            echo "
";
            // line 457
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix"))))) {
                // line 458
                echo "    <div class='clearfix'>
        ";
                // line 459
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix");
                echo "
    </div>
";
            }
            // line 462
            echo "
";
            // line 463
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array(), "any", true, true) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator") == true))) {
                // line 464
                echo "    <hr>
";
            }
            // line 466
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 469
        echo "
";
    }

    public function getTemplateName()
    {
        return "_sub_editfields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1434 => 469,  1426 => 466,  1422 => 464,  1420 => 463,  1417 => 462,  1411 => 459,  1408 => 458,  1406 => 457,  1403 => 456,  1399 => 453,  1392 => 449,  1388 => 448,  1384 => 447,  1378 => 446,  1369 => 444,  1363 => 443,  1357 => 442,  1351 => 441,  1345 => 440,  1339 => 439,  1333 => 438,  1324 => 437,  1322 => 436,  1319 => 435,  1315 => 432,  1308 => 428,  1304 => 427,  1300 => 426,  1291 => 424,  1285 => 423,  1279 => 422,  1273 => 421,  1264 => 420,  1262 => 419,  1259 => 418,  1255 => 415,  1248 => 411,  1232 => 406,  1222 => 405,  1214 => 402,  1206 => 401,  1198 => 400,  1195 => 399,  1193 => 398,  1190 => 397,  1186 => 394,  1174 => 392,  1166 => 391,  1157 => 390,  1155 => 389,  1152 => 388,  1149 => 386,  1145 => 384,  1141 => 383,  1134 => 382,  1126 => 381,  1117 => 380,  1115 => 379,  1112 => 378,  1104 => 371,  1098 => 368,  1085 => 362,  1079 => 359,  1073 => 358,  1067 => 357,  1063 => 356,  1058 => 354,  1050 => 353,  1046 => 352,  1038 => 351,  1033 => 349,  1025 => 348,  1018 => 346,  1010 => 345,  1002 => 344,  995 => 339,  989 => 337,  987 => 336,  983 => 335,  978 => 332,  976 => 331,  973 => 330,  971 => 329,  968 => 328,  961 => 322,  952 => 316,  948 => 314,  942 => 312,  936 => 310,  934 => 309,  922 => 300,  912 => 297,  904 => 296,  896 => 295,  888 => 294,  880 => 293,  872 => 292,  866 => 289,  857 => 287,  847 => 286,  841 => 283,  833 => 282,  826 => 280,  818 => 279,  807 => 278,  799 => 277,  792 => 272,  786 => 270,  784 => 269,  780 => 268,  775 => 265,  773 => 264,  770 => 263,  768 => 262,  765 => 261,  762 => 259,  754 => 254,  738 => 247,  733 => 245,  724 => 243,  720 => 242,  712 => 237,  705 => 235,  697 => 234,  694 => 233,  688 => 232,  684 => 230,  682 => 229,  679 => 228,  675 => 225,  669 => 221,  658 => 215,  654 => 214,  649 => 212,  643 => 210,  641 => 209,  634 => 205,  625 => 203,  621 => 202,  611 => 197,  607 => 196,  601 => 195,  593 => 192,  585 => 191,  577 => 190,  568 => 185,  566 => 184,  563 => 183,  558 => 179,  552 => 175,  542 => 170,  537 => 168,  533 => 167,  528 => 165,  523 => 162,  521 => 161,  514 => 157,  505 => 155,  501 => 154,  491 => 149,  487 => 148,  481 => 147,  473 => 144,  465 => 143,  457 => 142,  450 => 137,  444 => 135,  442 => 134,  438 => 133,  431 => 130,  429 => 129,  426 => 128,  423 => 126,  419 => 124,  404 => 122,  400 => 121,  392 => 118,  383 => 117,  381 => 116,  378 => 115,  375 => 113,  370 => 110,  355 => 108,  351 => 107,  344 => 106,  340 => 104,  325 => 102,  321 => 101,  314 => 100,  312 => 99,  303 => 98,  301 => 97,  298 => 96,  295 => 94,  291 => 92,  287 => 90,  283 => 88,  281 => 87,  275 => 84,  263 => 81,  257 => 77,  255 => 76,  243 => 71,  235 => 70,  230 => 69,  228 => 68,  225 => 67,  221 => 64,  214 => 62,  210 => 61,  204 => 60,  195 => 58,  192 => 57,  190 => 56,  184 => 53,  177 => 51,  173 => 50,  167 => 49,  164 => 48,  158 => 47,  153 => 45,  147 => 42,  136 => 39,  130 => 38,  127 => 37,  121 => 36,  118 => 35,  116 => 34,  109 => 30,  102 => 28,  98 => 27,  89 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  68 => 19,  55 => 16,  49 => 15,  44 => 13,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  23 => 2,  248 => 109,  239 => 103,  226 => 95,  211 => 83,  206 => 81,  201 => 59,  187 => 55,  180 => 64,  174 => 60,  159 => 58,  155 => 46,  150 => 44,  140 => 40,  134 => 49,  128 => 48,  122 => 47,  117 => 45,  113 => 33,  104 => 41,  100 => 40,  92 => 26,  87 => 38,  85 => 37,  73 => 28,  69 => 27,  64 => 18,  58 => 17,  52 => 19,  48 => 17,  46 => 14,  43 => 15,  41 => 12,  36 => 11,  34 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }
}
