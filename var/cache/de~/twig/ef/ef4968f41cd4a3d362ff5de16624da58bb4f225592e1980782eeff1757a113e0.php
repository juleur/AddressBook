<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5a9c5dfbf7dea962a3c14aa5760f76e837b5fe9375d7e202ac2240f0112f4626 extends Twig_Template
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
        $__internal_85a6384d6e2c780082e358932b5a89894dedf9339de46327e4867f48560ba15d = $this->env->getExtension("native_profiler");
        $__internal_85a6384d6e2c780082e358932b5a89894dedf9339de46327e4867f48560ba15d->enter($__internal_85a6384d6e2c780082e358932b5a89894dedf9339de46327e4867f48560ba15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_85a6384d6e2c780082e358932b5a89894dedf9339de46327e4867f48560ba15d->leave($__internal_85a6384d6e2c780082e358932b5a89894dedf9339de46327e4867f48560ba15d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
