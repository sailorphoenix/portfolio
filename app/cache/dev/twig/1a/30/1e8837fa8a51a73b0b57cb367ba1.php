<?php

/* ::base.html.twig */
class __TwigTemplate_1a301e8837fa8a51a73b0b57cb367ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" />\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component_icon.css"), "html", null, true);
        echo "\" />\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" />
\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
    <header>
      <a href=\"#\"></a>
    </header>
    <div id=\"main-container\">
\t\t\t<!-- Push Wrapper -->
\t\t\t<div class=\"mp-pusher\" id=\"mp-pusher\">
\t\t\t\t<!-- mp-menu -->
\t\t\t\t<nav id=\"mp-menu\" class=\"mp-menu\">
\t\t\t\t\t<div class=\"mp-level\">
\t\t\t\t\t\t<h2 class=\"icon icon-world\">Menu principal</h2>
\t\t\t\t\t\t<ul>\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a class=\"icon icon-photo\" href=\"#\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"icon icon-arrow-left\">
\t\t\t\t\t\t\t\t<a class=\"icon icon-display\" href=\"#\">Présentation</a>
\t\t\t\t\t\t\t\t<div class=\"mp-level\">
\t\t\t\t\t\t\t\t\t<h2 class=\"icon icon-display\">Présentation</h2>
\t\t\t\t\t\t\t\t\t<a class=\"mp-back\" href=\"#\">Retour</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-phone\" href=\"#\">Histoire</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-tv\" href=\"#\">Expériences</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-camera\" href=\"#\">Compétences</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"icon icon-arrow-left\">
\t\t\t\t\t\t\t\t<a class=\"icon icon-news\" href=\"#\">Projets</a>
\t\t\t\t\t\t\t\t<div class=\"mp-level\">
\t\t\t\t\t\t\t\t\t<h2 class=\"icon icon-news\">Projets</h2>
\t\t\t\t\t\t\t\t\t<a class=\"mp-back\" href=\"#\">Retour</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Projets réalisés</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Projets envisagés</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"icon icon-arrow-left\">
\t\t\t\t\t\t\t\t<a class=\"icon icon-shop\" href=\"#\">Réseaux sociaux</a>
\t\t\t\t\t\t\t\t<div class=\"mp-level\">
\t\t\t\t\t\t\t\t\t<h2 class=\"icon icon-shop\">Réseaux sociaux</h2>
\t\t\t\t\t\t\t\t\t<a class=\"mp-back\" href=\"#\">Retour</a>
                                    <ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-phone\" href=\"#\">Linkdlin</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-tv\" href=\"#\">Viadéo</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-camera\" href=\"#\">Twitter</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon icon-camera\" href=\"#\">Facebook</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a class=\"icon icon-photo\" href=\"#\">Contact</a></li>
\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</nav>\t\t\t\t
        \t\t<p><a href=\"#\" id=\"trigger\" class=\"menu-trigger\"><span>Accès Menu</span></a></p>
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "    <footer>
      <div>
      A propos
      </div>
      <div>
      <div class=\"hi-icon-wrap hi-icon-effect-8\">
\t\t\t\t\t<a href=\"#\" class=\"hi-icon hi-icon-message\">Contact</a>
\t\t\t\t\t<a href=\"#\" class=\"hi-icon hi-icon-facebook\">Facebook</a>
\t\t\t\t\t<a href=\"#\" class=\"hi-icon hi-icon-twitter\">Twitter</a>
\t\t\t\t\t<a href=\"#\" class=\"hi-icon hi-icon-viadeo\">Viadéo</a>
\t\t\t\t\t<a href=\"#\" class=\"hi-icon hi-icon-linkedin\">Linkdlin</a>
\t  </div>
    </footer>
            </div><!-- /pusher -->
    </div>
      <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
\t  <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mlpushmenu.js"), "html", null, true);
        echo "\"></script>
\t  <script>
\t    new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
      </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 86,  189 => 85,  184 => 6,  178 => 5,  167 => 103,  163 => 102,  146 => 87,  143 => 86,  141 => 85,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  33 => 6,  23 => 1,  32 => 6,  35 => 7,  29 => 5,);
    }
}
