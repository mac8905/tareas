<?php

/* default/index.html.twig */
class __TwigTemplate_14b13bdb594945033690852bd08afb14df680207822deb9adac45ded5e84305b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9431457b2f38bc45e2fb099a40b4f09f7b66e59ddffe1e26f10704eb7a2c343d = $this->env->getExtension("native_profiler");
        $__internal_9431457b2f38bc45e2fb099a40b4f09f7b66e59ddffe1e26f10704eb7a2c343d->enter($__internal_9431457b2f38bc45e2fb099a40b4f09f7b66e59ddffe1e26f10704eb7a2c343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9431457b2f38bc45e2fb099a40b4f09f7b66e59ddffe1e26f10704eb7a2c343d->leave($__internal_9431457b2f38bc45e2fb099a40b4f09f7b66e59ddffe1e26f10704eb7a2c343d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81203b57d38b4825f017c5f609ab1b3c36ef895292afa5cb27a6f67ffe4ddaa0 = $this->env->getExtension("native_profiler");
        $__internal_81203b57d38b4825f017c5f609ab1b3c36ef895292afa5cb27a6f67ffe4ddaa0->enter($__internal_81203b57d38b4825f017c5f609ab1b3c36ef895292afa5cb27a6f67ffe4ddaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81203b57d38b4825f017c5f609ab1b3c36ef895292afa5cb27a6f67ffe4ddaa0->leave($__internal_81203b57d38b4825f017c5f609ab1b3c36ef895292afa5cb27a6f67ffe4ddaa0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_45d033268947427be80235bd4749fefc9c97be00fd52e5c38a92ad144110785b = $this->env->getExtension("native_profiler");
        $__internal_45d033268947427be80235bd4749fefc9c97be00fd52e5c38a92ad144110785b->enter($__internal_45d033268947427be80235bd4749fefc9c97be00fd52e5c38a92ad144110785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    Buenas a todos desde el curso de Symfony 2
";
        
        $__internal_45d033268947427be80235bd4749fefc9c97be00fd52e5c38a92ad144110785b->leave($__internal_45d033268947427be80235bd4749fefc9c97be00fd52e5c38a92ad144110785b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     Buenas a todos desde el curso de Symfony 2*/
/* {% endblock %}*/
/* */
