<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_31a87e70ebded0f8bc4bc35d0916b99c2440d99fce7511a668fa8605a5f0db1c extends Twig_Template
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
        $__internal_20fa7c49a49752b516960b107eac62fc8204a7748b44a0a5890fe35dbd333739 = $this->env->getExtension("native_profiler");
        $__internal_20fa7c49a49752b516960b107eac62fc8204a7748b44a0a5890fe35dbd333739->enter($__internal_20fa7c49a49752b516960b107eac62fc8204a7748b44a0a5890fe35dbd333739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_20fa7c49a49752b516960b107eac62fc8204a7748b44a0a5890fe35dbd333739->leave($__internal_20fa7c49a49752b516960b107eac62fc8204a7748b44a0a5890fe35dbd333739_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
