<?php

/* editcontent.twig */
class __TwigTemplate_0eec8821f40f8abee524be2cc2c783de extends Twig_Template
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

    <h2>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>

    <form method=\"post\" id=\"editcontent\" enctype=\"multipart/form-data\">

        ";
        // line 10
        $this->env->loadTemplate("_sub_editfields.twig")->display($context);
        // line 11
        echo "
        <hr>

        ";
        // line 14
        $this->env->loadTemplate("_sub_editrelations.twig")->display($context);
        // line 15
        echo "
        ";
        // line 16
        $this->env->loadTemplate("_sub_edittaxonomies.twig")->display($context);
        // line 17
        echo "
        <label><b><span class='left'>Id:</span></b>
        <input type='text' readonly=readonly name='id' value='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo "' class=\"narrow\">
        </label>

        <label><b><span class='left'>";
        // line 22
        echo $this->env->getExtension('Bolt')->trans("Publication date:");
        echo "</span></b>
        </label>
            <input type=\"text\" name=\"datepublish-dateformatted\" id=\"datepublish-date\"
                   value='";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "l, d F Y"), "html", null, true);
        echo "' class='datepicker'>
            <input type=\"text\" name=\"datepublish-timeformatted\" id=\"datepublish-time\"
                   value='";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "H:i"), "html", null, true);
        echo "' class='timepicker'>
            <input type=\"hidden\" name=\"datepublish\" id=\"datepublish\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
        echo "\">
            <script>
                \$('#datepublish-date, #datepublish-time').on('change', function(){
                    var date = \$('#datepublish-date').datepicker(\"getDate\");
                    var time = \$('#datepublish-time').val() + \":00\";
                    \$('#datepublish').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
                });
            </script>

        ";
        // line 37
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated") > "1970-01-01 01:01:01")) {
            // line 38
            echo "        <br>";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% was created", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
            echo "
        <time class=\"moment\" datetime=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "html", null, true);
            echo "</time>
        ";
            // line 40
            echo $this->env->getExtension('Bolt')->trans("and edited");
            echo "
        <time class=\"moment\" datetime=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "html", null, true);
            echo "</time>.
        ";
        }
        // line 43
        echo "

        <label><b><span class='left'>";
        // line 45
        echo $this->env->getExtension('Bolt')->trans("Status:");
        echo "</span></b>
        <select name=\"status\">
            <option value=\"published\" ";
        // line 47
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "published")) {
            echo "selected";
        }
        echo ">Published</option>
            <option value=\"held\" ";
        // line 48
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "held")) {
            echo "selected";
        }
        echo ">Not published</option>
            <option value=\"timed\" ";
        // line 49
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "timed")) {
            echo "selected";
        }
        echo ">Timed publish</option>
            <option value=\"draft\" ";
        // line 50
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "draft")) {
            echo "selected";
        }
        echo ">Draft</option>

        </select>
        </label>

        <label><b><span class='left'>";
        // line 55
        echo $this->env->getExtension('Bolt')->trans("Owner:");
        echo "</span></b>
        <select name=\"username\">
            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 58
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username") == (isset($context["contentowner"]) ? $context["contentowner"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "        </select>
        </label>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"savebutton\" style=\"margin-right: 8px;\">
            <i class=\"icon-flag\"></i> ";
        // line 64
        echo $this->env->getExtension('Bolt')->trans("Save %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "
        </button>

        <button type=\"button\" class=\"btn btn-info\" id=\"previewbutton\">
            <i class=\"icon-external-link\"></i> ";
        // line 68
        echo $this->env->getExtension('Bolt')->trans("Preview %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "
        </button>


    </form>


    </div><!-- /span9 -->
    <aside class=\"span3\">

    <section>
    <h2>";
        // line 79
        echo $this->env->getExtension('Bolt')->trans("Actions for this %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "</h2>

    <button type=\"submit\" class=\"btn btn-primary\" id=\"sidebarsavebutton\" style=\"margin-right: 8px;\"><i class=\"icon-flag\"></i> ";
        // line 81
        echo $this->env->getExtension('Bolt')->trans("Save %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "</button>

    <button type=\"button\" class=\"btn btn-info\" id=\"sidebarpreviewbutton\"><i class=\"icon-external-link\"></i> ";
        // line 83
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo " </button>

    <script>
        // Save the page..
        \$('#savebutton, #sidebarsavebutton').bind('click', function(e){
            e.preventDefault();
            \$('#editcontent').attr('action', '').attr('target', \"_self\").submit();
        });

        // To preview the page, we set the target of the form to a new URL, and open it in a new window.
        \$('#previewbutton, #sidebarpreviewbutton').bind('click', function(e){
            e.preventDefault();
            var link = \"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\" + \"preview\" + \"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_slug"), "html", null, true);
        echo "\";
            \$('#editcontent').attr('action', link).attr('target', \"_blank\").submit();

        });
    </script>

    </section>

";
        // line 103
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"))));
        echo "

    </aside>
</div>


";
        // line 109
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 109,  239 => 103,  226 => 95,  211 => 83,  206 => 81,  201 => 79,  187 => 68,  180 => 64,  174 => 60,  159 => 58,  155 => 57,  150 => 55,  140 => 50,  134 => 49,  128 => 48,  122 => 47,  117 => 45,  113 => 43,  104 => 41,  100 => 40,  92 => 39,  87 => 38,  85 => 37,  73 => 28,  69 => 27,  64 => 25,  58 => 22,  52 => 19,  48 => 17,  46 => 16,  43 => 15,  41 => 14,  36 => 11,  34 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }
}
