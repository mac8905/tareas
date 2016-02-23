<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8dfd624be10d2b1cea118df863dca84277c57beb493a2a9c820be501c9411c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bfbb25ae45d6a148612a14473cf3ab32b04f475168513703ae54d53d1faf18a = $this->env->getExtension("native_profiler");
        $__internal_2bfbb25ae45d6a148612a14473cf3ab32b04f475168513703ae54d53d1faf18a->enter($__internal_2bfbb25ae45d6a148612a14473cf3ab32b04f475168513703ae54d53d1faf18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfbb25ae45d6a148612a14473cf3ab32b04f475168513703ae54d53d1faf18a->leave($__internal_2bfbb25ae45d6a148612a14473cf3ab32b04f475168513703ae54d53d1faf18a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef76ccbd146e83aed5b51947b1f998abca34428fded1200bc9b300b43927b515 = $this->env->getExtension("native_profiler");
        $__internal_ef76ccbd146e83aed5b51947b1f998abca34428fded1200bc9b300b43927b515->enter($__internal_ef76ccbd146e83aed5b51947b1f998abca34428fded1200bc9b300b43927b515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ef76ccbd146e83aed5b51947b1f998abca34428fded1200bc9b300b43927b515->leave($__internal_ef76ccbd146e83aed5b51947b1f998abca34428fded1200bc9b300b43927b515_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54c50dd3accc324c7fd948d2acb5171ff36dc13d8b88416902c28cc9094cade6 = $this->env->getExtension("native_profiler");
        $__internal_54c50dd3accc324c7fd948d2acb5171ff36dc13d8b88416902c28cc9094cade6->enter($__internal_54c50dd3accc324c7fd948d2acb5171ff36dc13d8b88416902c28cc9094cade6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_54c50dd3accc324c7fd948d2acb5171ff36dc13d8b88416902c28cc9094cade6->leave($__internal_54c50dd3accc324c7fd948d2acb5171ff36dc13d8b88416902c28cc9094cade6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f948d3f6d32bb73fd1abddecbf2f93fcb3c53e26fc6470e51db684e658cd214 = $this->env->getExtension("native_profiler");
        $__internal_3f948d3f6d32bb73fd1abddecbf2f93fcb3c53e26fc6470e51db684e658cd214->enter($__internal_3f948d3f6d32bb73fd1abddecbf2f93fcb3c53e26fc6470e51db684e658cd214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_3f948d3f6d32bb73fd1abddecbf2f93fcb3c53e26fc6470e51db684e658cd214->leave($__internal_3f948d3f6d32bb73fd1abddecbf2f93fcb3c53e26fc6470e51db684e658cd214_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_321a501937c50bbae5ab1859950ed39bf49529bb4f116701dbe4799d9ff32afb = $this->env->getExtension("native_profiler");
        $__internal_321a501937c50bbae5ab1859950ed39bf49529bb4f116701dbe4799d9ff32afb->enter($__internal_321a501937c50bbae5ab1859950ed39bf49529bb4f116701dbe4799d9ff32afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_321a501937c50bbae5ab1859950ed39bf49529bb4f116701dbe4799d9ff32afb->leave($__internal_321a501937c50bbae5ab1859950ed39bf49529bb4f116701dbe4799d9ff32afb_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
