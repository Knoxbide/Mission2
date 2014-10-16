<?php

/* MissionBundle:Default:partionneur.html.twig */
class __TwigTemplate_af7c980d788244ac0533d5c19bd1765ddf838dd78ed2e4e91506eeb5a9869879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MissionBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    
<div class=\"row\">
 <div class=\"col-md-12\">

  <h2>Générateur de groupes</h2>
  <p>
   Cette application vous permet de générer aléatoirement des groupes de
   travail (pour des devoirs par exemple)<br /> Optionnellement, vous
   pouvez demander la génération de correspondance de groupes pour la
   correction par ses pairs (évaluateur/évalué)
  </p>
 </div>
</div>
<hr />
<div class=\"row\">
 <div class=\"col-md-12\">
 
  <div class=\"panel panel-default\">
   <div class=\"panel-heading\">Données pour la génération des groupes</div>
   <div class=\"panel-body\">
    <div class=\"row\">
     <form>
      <div class=\"col-md-4\">
       <div class=\"form-group\">
        <label>Intitulé du devoir</label> <input class=\"form-control\" />
       </div>
       <div class=\"form-group\">
        <div class=\"checkbox\">
         <label> <input type=\"checkbox\" value=\"\" />Correction pas ses
          pairs
         </label>
        </div>
        <div class=\"form-group\">
        <div class=\"checkbox\">
         <label> <input type=\"text\" id='cardgroupes' value=\"3\"/>Card max des groupes
         </label>
        </div>
       </div>
      </div>
      <div class=\"col-md-8\">
       <div class=\"form-group\">
        <label>Fichier des élèves (csv = prénom;nom)</label> <input
         type=\"file\" />
       </div>
       <div class=\"form-group\">
         <label class=\"col-sm-12 control-label no-padding-right\" for=\"listeeleves\">Liste élèves</label>
          <div class=\"col-lg-8 col-md-8 col-sm-8\">
          <textarea class=\"form-control\" id=\"listeeleves\" name=\"listeeleves\">a
b 
c
d
e
f
g
h
i
j</textarea>
          </div>
       </div>
          
       <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-default\">Soumettre</button>
        <button type=\"button\" class=\"btn\" onClick=\"test()\">test ajax</button>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
  <!-- Panel -->

  <div class=\"panel panel-default\">
   <div class=\"panel-heading\">Données pour la génération des groupes</div>
   <div class=\"panel-body\">
    <div class=\"row\">
     <h3>[Choix d'une partition]</h3>
     <div id=\"choixGroupe\"></div>
    </div>
   </div>
  </div>
  <div class=\"panel panel-default\">
   <div class=\"panel-heading\">Voici les groupes</div>
   <div class=\"panel-body\">
    <div class=\"row\" id=\"res\">
     <h3>res...</h3>

    </div>
   </div>
   <form>
    <button type=\"submit\" class=\"btn btn-primary\">Export PDF</button>
   </form>
  </div>
 </div>
</div>          
            
            
        </div> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "MissionBundle:Default:partionneur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
