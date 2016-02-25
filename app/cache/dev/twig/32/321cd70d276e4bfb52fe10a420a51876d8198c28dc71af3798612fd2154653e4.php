<?php

/* MACUserBundle:Default:index.html.twig */
class __TwigTemplate_a29de8855a861f79f3c1f279a59da90d96d50125356219f49a6880e9f7fe34fd extends Twig_Template
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
        $__internal_dfa922a1f2abaf26047ce24ca4d47f122ba3b23b76a122fe720e09172d910797 = $this->env->getExtension("native_profiler");
        $__internal_dfa922a1f2abaf26047ce24ca4d47f122ba3b23b76a122fe720e09172d910797->enter($__internal_dfa922a1f2abaf26047ce24ca4d47f122ba3b23b76a122fe720e09172d910797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MACUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_dfa922a1f2abaf26047ce24ca4d47f122ba3b23b76a122fe720e09172d910797->leave($__internal_dfa922a1f2abaf26047ce24ca4d47f122ba3b23b76a122fe720e09172d910797_prof);

    }

    public function getTemplateName()
    {
        return "MACUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
