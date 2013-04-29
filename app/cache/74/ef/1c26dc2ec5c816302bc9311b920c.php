<?php

/* base.twig */
class __TwigTemplate_74ef1c26dc2ec5c816302bc9311b920c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'layout' => array($this, 'block_layout'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"en\" > <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\" > <!--<![endif]-->

<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "</head>

<body>
<div id=\"top-band\">
    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "</div>



  <div id=\"wrapper-layout\">
  ";
        // line 31
        $this->displayBlock('layout', $context, $blocks);
        // line 33
        echo "  </div>
  <div id=\"footer-wrapper\"> 
    ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "  </div>

<script>
document.write('<script src=' +
('__proto__' in {} ? '";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/vendor/zepto' : '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/vendor/jquery') +
'.js><\\/script>')
</script>


<script src=\"http://maps.googleapis.com/maps/api/js?sensor=false\"></script>
  <script>
    function initialize() {
      var map_canvas = document.getElementById('map-canvas');
      var map_options = {
        center: new google.maps.LatLng(36.51444662193379, -6.280659341123973),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        }
      var map = new google.maps.Map(map_canvas, map_options)
  
      var marcador = new google.maps.Marker({
                          position: new google.maps.LatLng(36.51444662193379, -6.280659341123973),
                          map: map
                      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>


<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation.min.js\"></script>

<!--

<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.js\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.alerts.js\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.clearing.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.cookie.js\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.dropdown.js\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.forms.js\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.joyride.js\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.magellan.js\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.orbit.js\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.placeholder.js\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.reveal.js\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.section.js\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.tooltips.js\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/foundation/foundation.topbar.js\"></script>
-->
<script>
\$(document).foundation();
</script>
<!-- <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/own/nav-menu-caledonian.js\"></script> -->

</body>
</html>

";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<title>
 ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "general"), "sitename"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo " 
</title>
<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/reset.css\" /> -->
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/normalize.css\" /> 
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/foundation.css\" />
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/vendor/custom.modernizr.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/caledonian.css\" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->env->loadTemplate("header.twig")->display($context);
        // line 25
        echo "    ";
    }

    // line 31
    public function block_layout($context, array $blocks = array())
    {
        // line 32
        echo "  ";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        echo "      ";
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 37
        echo "    ";
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
        return array (  229 => 37,  226 => 36,  223 => 35,  219 => 32,  216 => 31,  212 => 25,  209 => 24,  206 => 23,  199 => 16,  195 => 15,  191 => 14,  187 => 13,  183 => 12,  176 => 10,  171 => 7,  168 => 6,  158 => 89,  150 => 84,  146 => 83,  142 => 82,  138 => 81,  134 => 80,  130 => 79,  126 => 78,  122 => 77,  118 => 76,  114 => 75,  110 => 74,  106 => 73,  102 => 72,  98 => 71,  91 => 67,  49 => 33,  47 => 31,  40 => 26,  38 => 23,  32 => 19,  23 => 1,  79 => 20,  76 => 19,  71 => 18,  68 => 17,  64 => 11,  61 => 42,  55 => 38,  53 => 35,  46 => 12,  44 => 10,  36 => 5,  33 => 4,  30 => 6,  43 => 13,  31 => 4,  28 => 3,);
    }
}
