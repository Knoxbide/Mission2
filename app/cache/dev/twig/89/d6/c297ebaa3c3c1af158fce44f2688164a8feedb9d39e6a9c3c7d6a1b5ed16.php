<?php

/* MissionBundle:Default:index.html.twig */
class __TwigTemplate_89d6c297ebaa3c3c1af158fce44f2688164a8feedb9d39e6a9c3c7d6a1b5ed16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MissionBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MissionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mission Symfony";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"wrapper\">
  <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
   <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
     data-target=\".sidebar-collapse\">
     <span class=\"sr-only\">Toggle navigation</span> <span
      class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
      class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"index.html\">BTS SIO</a>
   </div>
   <div style=\"background-color: black; color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;\">
    Une production SIO du lycée Léonard de Vinci - Melun (77) &nbsp;
    <!-- a href=\"#\" class=\"btn btn-danger square-btn-adjust\">Login</a -->
   </div>
  </nav>
  <!-- /. NAV TOP  -->
  <nav class=\"navbar-default navbar-side\" role=\"navigation\">
   <div class=\"sidebar-collapse\">
    <ul class=\"nav\" id=\"main-menu\">
     <li class=\"text-center\"><img src=\"assets/img/logo-ldv.png\"
      class=\"logo-image img-responsive\" /></li>
     <li><a class=\"active-menu\" href=\"#\"
      onclick=\"insertContentPage('intro.php');return false;\"><i
       class=\"fa fa-dashboard fa-3x\"></i> Index</a></li>
     <li><a href=\"#\"
      onclick=\"insertContentPage('partionneur.php');return false;\"><i
       class=\"fa fa-group fa-3x\"></i> Générateur de groupes</a></li>
     <li><a href=\"#\" onclick=\"insertContentPage('vide.php');return false;\"><i
       class=\"fa fa-edit fa-3x\"></i> [...] </a></li>
    </ul>
   </div>
  </nav>
  <!-- /. NAV SIDE  -->
  <div id=\"page-wrapper\">
    <div id=\"page-inner\">
      <div class=\"row\">
        <div class=\"col-md-12\">
           <h2>Une production interne de la section BTS SIO du lycée
           Léonard de Vinci de Melun</h2>
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- /. PAGE INNER  -->
  </div> <!-- /. PAGE WRAPPER  -->
</div> <!-- /. WRAPPER  -->
    ";
    }

    public function getTemplateName()
    {
        return "MissionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
