<?php

/* MissionBundle::layout.html.twig */
class __TwigTemplate_f72ae46a55c1619de556d48bdc26c76d27b4dc2ed55b73519849b97dddaa8de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/css/font-awesome.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/css/style.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<div id=\"wrapper\">
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
            <!-- a href=\"#\" class=\"btn btn-danger square-btn-adjust\">Login</a -->
        </div>
    </nav>
        <!-- /. NAV TOP  -->
    <nav class=\"navbar-default navbar-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav\" id=\"main-menu\">
                <li class=\"text-center\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/img/logo-ldv.png"), "html", null, true);
        echo "\" class=\"logo-image img-responsive\" /></li>
                <li><a class=\"active-menu\" href=\"#\" onclick=\"insertContentPage('intro.php');return false;\">
                    <i class=\"fa fa-dashboard fa-3x\"></i> Index</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_partionneur");
        echo "\">
                    <i class=\"fa fa-group fa-3x\"></i> Générateur de groupes</a></li>
                <li><a href=\"#\" onclick=\"insertContentPage('vide.php');return false;\">
                    <i class=\"fa fa-edit fa-3x\"></i> [...] </a></li>
            </ul>
        </div>
    </nav>
        <!-- /. NAV SIDE  -->
    <div id=\"page-wrapper\">
        <div id=\"page-inner\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "                </div> <!-- col -->
            </div> <!-- row -->
        </div> <!-- /. PAGE INNER  -->
    </div> <!-- /. PAGE WRAPPER  -->
</div> <!-- /. WRAPPER  -->
        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "                    ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- METISMENU SCRIPTS -->
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemission/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
            <!-- CUSTOM SCRIPTS -->
            <script src=\"assets/js/custom.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "MissionBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  147 => 60,  141 => 58,  138 => 57,  134 => 50,  131 => 49,  122 => 51,  120 => 49,  105 => 37,  99 => 34,  77 => 14,  74 => 13,  68 => 9,  64 => 8,  59 => 7,  56 => 6,  50 => 5,  45 => 66,  42 => 57,  40 => 13,  36 => 11,  34 => 6,  30 => 5,  24 => 1,);
    }
}
