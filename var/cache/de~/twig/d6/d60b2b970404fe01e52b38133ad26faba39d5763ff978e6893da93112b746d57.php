<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_238a91c948e3963992cf19bce9fe02318d4421422315d6b1263767cf63da1553 extends Twig_Template
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
        $__internal_6c6c7cce13142e4f3971eae4fc97862ac9f7c84ac3b866d36dec825923eead95 = $this->env->getExtension("native_profiler");
        $__internal_6c6c7cce13142e4f3971eae4fc97862ac9f7c84ac3b866d36dec825923eead95->enter($__internal_6c6c7cce13142e4f3971eae4fc97862ac9f7c84ac3b866d36dec825923eead95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6c6c7cce13142e4f3971eae4fc97862ac9f7c84ac3b866d36dec825923eead95->leave($__internal_6c6c7cce13142e4f3971eae4fc97862ac9f7c84ac3b866d36dec825923eead95_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
