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
        $__internal_ff83d30e23682b69e2cfc5dbcef373ab7b63eeaa15999c3c299d09671e20415a = $this->env->getExtension("native_profiler");
        $__internal_ff83d30e23682b69e2cfc5dbcef373ab7b63eeaa15999c3c299d09671e20415a->enter($__internal_ff83d30e23682b69e2cfc5dbcef373ab7b63eeaa15999c3c299d09671e20415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff83d30e23682b69e2cfc5dbcef373ab7b63eeaa15999c3c299d09671e20415a->leave($__internal_ff83d30e23682b69e2cfc5dbcef373ab7b63eeaa15999c3c299d09671e20415a_prof);

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