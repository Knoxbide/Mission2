<?php

/* MissionBundle:Default:partionneur.html.twig */
class __TwigTemplate_af7c980d788244ac0533d5c19bd1765ddf838dd78ed2e4e91506eeb5a9869879 extends Twig_Template
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
        echo "Portail SIO";
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
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <h2>!</h2>
            </div> <!-- col -- >
        </div> <!-- /. ROW  -->
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
        return array (  50 => 8,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
