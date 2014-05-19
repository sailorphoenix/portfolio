<?php

/* PortfolioPortfolioBundle:Pages:index.html.twig */
class __TwigTemplate_9e3438602b7dad72f8144343ef095625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PortfolioPortfolioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PortfolioPortfolioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "index";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t<div id=\"homepage\">
\t  Bienvenue!
\t</div> 
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 5,);
    }
}
