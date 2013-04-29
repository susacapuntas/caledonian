<?php

/* login.twig */
class __TwigTemplate_dfdbe331d705131f2cd9e3fdecbbe7aa extends Twig_Template
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
        echo $this->env->getExtension('Bolt')->trans("Login");
        echo "</h1>

<div class=\"row-fluid\">
    <div class=\"span6\">
        <form class=\"well\" method=\"post\">
            <label>";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</label>
            <input type=\"text\" name=\"username\" placeholder=\"";
        // line 10
        echo $this->env->getExtension('Bolt')->trans("Your username");
        echo " …\" ";
        if (array_key_exists("username", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
            <label>";
        // line 11
        echo $this->env->getExtension('Bolt')->trans("Password");
        echo "</label>
            <input type=\"password\" name=\"password\" placeholder=\"";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("Your password");
        echo " …\">

            <label><button type=\"submit\" class=\"btn\">";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("Log on");
        echo "</button></label>
        </form>
    </div>

    <div class=\"span6\">

        <blockquote class='quote'>";
        // line 20
        echo $this->env->getExtension('Bolt')->randomquote();
        echo "</blockquote>

    </div>

</div>

";
        // line 26
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  65 => 20,  56 => 14,  51 => 12,  47 => 11,  37 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
