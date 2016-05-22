<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4d9fc155346a3f04b1dbf41baec5e45d21ea5f88c8f836bd7d7859c484b429a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_881eb3e884e76624256837c07968527179b93f16395d6639fb8bd39c02a455c1 = $this->env->getExtension("native_profiler");
        $__internal_881eb3e884e76624256837c07968527179b93f16395d6639fb8bd39c02a455c1->enter($__internal_881eb3e884e76624256837c07968527179b93f16395d6639fb8bd39c02a455c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_881eb3e884e76624256837c07968527179b93f16395d6639fb8bd39c02a455c1->leave($__internal_881eb3e884e76624256837c07968527179b93f16395d6639fb8bd39c02a455c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0463e8cb762455579fe77752e050e01a5a6daca987d1288ca5d53feab6e1cbd4 = $this->env->getExtension("native_profiler");
        $__internal_0463e8cb762455579fe77752e050e01a5a6daca987d1288ca5d53feab6e1cbd4->enter($__internal_0463e8cb762455579fe77752e050e01a5a6daca987d1288ca5d53feab6e1cbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0463e8cb762455579fe77752e050e01a5a6daca987d1288ca5d53feab6e1cbd4->leave($__internal_0463e8cb762455579fe77752e050e01a5a6daca987d1288ca5d53feab6e1cbd4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14905c702df9e28a93f5acc76ea6f8e051d77b5e1936e6874569c2ff943306d8 = $this->env->getExtension("native_profiler");
        $__internal_14905c702df9e28a93f5acc76ea6f8e051d77b5e1936e6874569c2ff943306d8->enter($__internal_14905c702df9e28a93f5acc76ea6f8e051d77b5e1936e6874569c2ff943306d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14905c702df9e28a93f5acc76ea6f8e051d77b5e1936e6874569c2ff943306d8->leave($__internal_14905c702df9e28a93f5acc76ea6f8e051d77b5e1936e6874569c2ff943306d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_043380f52ebd3c212ca78e6980b7dbc057eb413c1cabac8e72bdc0a6d092783e = $this->env->getExtension("native_profiler");
        $__internal_043380f52ebd3c212ca78e6980b7dbc057eb413c1cabac8e72bdc0a6d092783e->enter($__internal_043380f52ebd3c212ca78e6980b7dbc057eb413c1cabac8e72bdc0a6d092783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_043380f52ebd3c212ca78e6980b7dbc057eb413c1cabac8e72bdc0a6d092783e->leave($__internal_043380f52ebd3c212ca78e6980b7dbc057eb413c1cabac8e72bdc0a6d092783e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */