<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1ddd9f8d3ba2462f8ff14e8b29271b56b587a2417f942fe5b69f726bf45ca57c extends Twig_Template
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
        $__internal_4444eafcd2ea8a8037c97fcbb1dab13d136fa1e925c9d88299fa57ae11f2a0b0 = $this->env->getExtension("native_profiler");
        $__internal_4444eafcd2ea8a8037c97fcbb1dab13d136fa1e925c9d88299fa57ae11f2a0b0->enter($__internal_4444eafcd2ea8a8037c97fcbb1dab13d136fa1e925c9d88299fa57ae11f2a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4444eafcd2ea8a8037c97fcbb1dab13d136fa1e925c9d88299fa57ae11f2a0b0->leave($__internal_4444eafcd2ea8a8037c97fcbb1dab13d136fa1e925c9d88299fa57ae11f2a0b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */