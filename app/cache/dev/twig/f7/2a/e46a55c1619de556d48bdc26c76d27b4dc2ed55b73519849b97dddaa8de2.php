<?php

/* MissionBundle::layout.html.twig */
class __TwigTemplate_f72ae46a55c1619de556d48bdc26c76d27b4dc2ed55b73519849b97dddaa8de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/css/font-awesome.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/css/style.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0;\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">BTS SIO</a>
            </div>
            <div style=\"color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;\">
                Une production SIO du lycée Léonard de Vinci - Melun (77) &nbsp;
            </div>
        </nav>
        <nav class=\"navbar-default navbar-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">
                    <li class=\"text-center\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/img/logo-ldv.png"), "html", null, true);
        echo "\" class=\"logo-image img-responsive\" /></li>
                    <li><a class=\"active-menu\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\"\">
                        <i class=\"fa fa-dashboard fa-3x\"></i> Index</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("_partionneur");
        echo "\">
                        <i class=\"fa fa-group fa-3x\"></i> Générateur de groupes</a></li>
                    <li><a href=\"#\" onclick=\"insertContentPage('vide.php');return false;\">
                        <i class=\"fa fa-edit fa-3x\"></i> [...] </a></li>
                </ul>
            </div>
        </nav>
        <div id=\"page-wrapper\">
            <div id=\"page-inner\">
                ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    </div>
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "                ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"assets/js/custom.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "MissionBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  133 => 52,  128 => 51,  125 => 50,  121 => 44,  118 => 43,  111 => 45,  109 => 43,  97 => 34,  92 => 32,  88 => 31,  68 => 13,  65 => 12,  59 => 8,  55 => 7,  50 => 6,  47 => 5,  42 => 56,  40 => 50,  37 => 49,  35 => 12,  31 => 10,  29 => 5,  23 => 1,);
    }
}
