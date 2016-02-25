<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f219883a74433165ba781ad6d60d9f4c3b5230b2aef6c9f232d86b187de0b416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a1d546907160fae5f3d240685be49c55c5f22a7730254a6cc26b4211229a861 = $this->env->getExtension("native_profiler");
        $__internal_4a1d546907160fae5f3d240685be49c55c5f22a7730254a6cc26b4211229a861->enter($__internal_4a1d546907160fae5f3d240685be49c55c5f22a7730254a6cc26b4211229a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1d546907160fae5f3d240685be49c55c5f22a7730254a6cc26b4211229a861->leave($__internal_4a1d546907160fae5f3d240685be49c55c5f22a7730254a6cc26b4211229a861_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9d90283f50c151a5a53a55d9d08ac68a873f957c1872aa822ab9b9f5083acce = $this->env->getExtension("native_profiler");
        $__internal_e9d90283f50c151a5a53a55d9d08ac68a873f957c1872aa822ab9b9f5083acce->enter($__internal_e9d90283f50c151a5a53a55d9d08ac68a873f957c1872aa822ab9b9f5083acce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9d90283f50c151a5a53a55d9d08ac68a873f957c1872aa822ab9b9f5083acce->leave($__internal_e9d90283f50c151a5a53a55d9d08ac68a873f957c1872aa822ab9b9f5083acce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab76cd255cacea217df5d452ff4624f2e222204f277e5607f0b0290e33c9b1f = $this->env->getExtension("native_profiler");
        $__internal_cab76cd255cacea217df5d452ff4624f2e222204f277e5607f0b0290e33c9b1f->enter($__internal_cab76cd255cacea217df5d452ff4624f2e222204f277e5607f0b0290e33c9b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cab76cd255cacea217df5d452ff4624f2e222204f277e5607f0b0290e33c9b1f->leave($__internal_cab76cd255cacea217df5d452ff4624f2e222204f277e5607f0b0290e33c9b1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df190370644e35c6ccf58e1cccb1f98f37b259e6f3e20a71505ce3525df7f8df = $this->env->getExtension("native_profiler");
        $__internal_df190370644e35c6ccf58e1cccb1f98f37b259e6f3e20a71505ce3525df7f8df->enter($__internal_df190370644e35c6ccf58e1cccb1f98f37b259e6f3e20a71505ce3525df7f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_df190370644e35c6ccf58e1cccb1f98f37b259e6f3e20a71505ce3525df7f8df->leave($__internal_df190370644e35c6ccf58e1cccb1f98f37b259e6f3e20a71505ce3525df7f8df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
