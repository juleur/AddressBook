<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1ec6a15e59fc85679356fc3c29fc94addabc5636db4fcde91b3b02d5bcd8d6d0 extends Twig_Template
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
        $__internal_50b0b1d8b4a456af6ef305636de5ebe621fa6371289c4b57628e15f40b2c8222 = $this->env->getExtension("native_profiler");
        $__internal_50b0b1d8b4a456af6ef305636de5ebe621fa6371289c4b57628e15f40b2c8222->enter($__internal_50b0b1d8b4a456af6ef305636de5ebe621fa6371289c4b57628e15f40b2c8222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_50b0b1d8b4a456af6ef305636de5ebe621fa6371289c4b57628e15f40b2c8222->leave($__internal_50b0b1d8b4a456af6ef305636de5ebe621fa6371289c4b57628e15f40b2c8222_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
