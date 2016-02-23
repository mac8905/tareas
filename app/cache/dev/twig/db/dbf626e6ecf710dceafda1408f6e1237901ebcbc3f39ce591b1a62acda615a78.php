<?php

/* base.html.twig */
class __TwigTemplate_65f1d69c8d9c9c71a02e4fd4b2ddafbac6b5998617d1d07c33960aef2cd57e0e extends Twig_Template
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
        $__internal_6f2ddaf0030ba07bd261b589c245e16ad3281cf20290d028bc144b57db0c0c18 = $this->env->getExtension("native_profiler");
        $__internal_6f2ddaf0030ba07bd261b589c245e16ad3281cf20290d028bc144b57db0c0c18->enter($__internal_6f2ddaf0030ba07bd261b589c245e16ad3281cf20290d028bc144b57db0c0c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6f2ddaf0030ba07bd261b589c245e16ad3281cf20290d028bc144b57db0c0c18->leave($__internal_6f2ddaf0030ba07bd261b589c245e16ad3281cf20290d028bc144b57db0c0c18_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce5ab4687e06861cc70f254ff3787b8116c16fe5dc646d99bca7f66d8ac6ee1f = $this->env->getExtension("native_profiler");
        $__internal_ce5ab4687e06861cc70f254ff3787b8116c16fe5dc646d99bca7f66d8ac6ee1f->enter($__internal_ce5ab4687e06861cc70f254ff3787b8116c16fe5dc646d99bca7f66d8ac6ee1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ce5ab4687e06861cc70f254ff3787b8116c16fe5dc646d99bca7f66d8ac6ee1f->leave($__internal_ce5ab4687e06861cc70f254ff3787b8116c16fe5dc646d99bca7f66d8ac6ee1f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d05028aedd511a75da82d3a08aa5ebe468c9d8288819136a0424f736c7d7b2e8 = $this->env->getExtension("native_profiler");
        $__internal_d05028aedd511a75da82d3a08aa5ebe468c9d8288819136a0424f736c7d7b2e8->enter($__internal_d05028aedd511a75da82d3a08aa5ebe468c9d8288819136a0424f736c7d7b2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d05028aedd511a75da82d3a08aa5ebe468c9d8288819136a0424f736c7d7b2e8->leave($__internal_d05028aedd511a75da82d3a08aa5ebe468c9d8288819136a0424f736c7d7b2e8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b2f110bfd3e9cd500716cc3ba743584a26870232d5d25d50bbc1605a85f705e = $this->env->getExtension("native_profiler");
        $__internal_4b2f110bfd3e9cd500716cc3ba743584a26870232d5d25d50bbc1605a85f705e->enter($__internal_4b2f110bfd3e9cd500716cc3ba743584a26870232d5d25d50bbc1605a85f705e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b2f110bfd3e9cd500716cc3ba743584a26870232d5d25d50bbc1605a85f705e->leave($__internal_4b2f110bfd3e9cd500716cc3ba743584a26870232d5d25d50bbc1605a85f705e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cd30f8ec84c18be9381143e41a21f888bf86624e7cd163ccddf794e6b26c6a6 = $this->env->getExtension("native_profiler");
        $__internal_4cd30f8ec84c18be9381143e41a21f888bf86624e7cd163ccddf794e6b26c6a6->enter($__internal_4cd30f8ec84c18be9381143e41a21f888bf86624e7cd163ccddf794e6b26c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4cd30f8ec84c18be9381143e41a21f888bf86624e7cd163ccddf794e6b26c6a6->leave($__internal_4cd30f8ec84c18be9381143e41a21f888bf86624e7cd163ccddf794e6b26c6a6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
