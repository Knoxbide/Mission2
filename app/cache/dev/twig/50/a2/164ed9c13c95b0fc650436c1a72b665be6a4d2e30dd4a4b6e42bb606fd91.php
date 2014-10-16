<?php

/* MissionBundle:Index:index.html.twig */
class __TwigTemplate_50a2164ed9c13c95b0fc650436c1a72b665be6a4d2e30dd4a4b6e42bb606fd91 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<title>Applications du BTS SIO - LDV</title>
<!-- BOOTSTRAP STYLES-->
<link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
<!-- FONTAWESOME STYLES-->
<link href=\"assets/css/font-awesome.css\" rel=\"stylesheet\" />
<!-- CUSTOM STYLES-->
<link href=\"assets/css/custom.css\" rel=\"stylesheet\" />
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans'
 rel='stylesheet' type='text/css' />
<script type=\"text/javascript\">
\tfunction insertContentPage(\$page) {
\t\t\$.ajax({
\t\t\turl : \$page,
\t\t\ttype : 'GET',
\t\t\tcache : false,
\t\t\tdataType : 'html',
\t\t\tsuccess : function(code_html, statut) { 
\t\t\t\tconsole.log(\"Insertion page : \" + \$page);
\t\t\t\t\$(\"#page-inner\").html(code_html);
\t\t\t}
\t\t});
\t}
</script>
</head>
<body>
 <div id=\"wrapper\">
  <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\"
   style=\"margin-bottom: 0\">
   <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
     data-target=\".sidebar-collapse\">
     <span class=\"sr-only\">Toggle navigation</span> <span
      class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
      class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"index.html\">BTS SIO</a>
   </div>
   <div
    style=\"color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;\">
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

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src=\"assets/js/jquery-1.11.1.min.js\"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src=\"assets/js/bootstrap.min.js\"></script>
<!-- METISMENU SCRIPTS -->
<script src=\"assets/js/jquery.metisMenu.js\"></script>
<!-- CUSTOM SCRIPTS -->
<script src=\"assets/js/custom.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
      console.log(\"injection de la page par défaut\");
    \tinsertContentPage(\"intro.php\");
    });
   
 </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MissionBundle:Index:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
