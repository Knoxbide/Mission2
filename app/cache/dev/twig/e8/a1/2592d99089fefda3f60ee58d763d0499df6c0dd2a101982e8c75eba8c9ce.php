<?php

/* MissionBundle:Default:index.html.twig */
class __TwigTemplate_e8a12592d99089fefda3f60ee58d763d0499df6c0dd2a101982e8c75eba8c9ce extends Twig_Template
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
                <h2>Bienvenue dans cet espace des applications de la section SIO !</h2>
            </div> <!-- col -- >
        </div> <!-- /. ROW  -->
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
