<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_643614773d3a9b8099a8009bfbe84fe91f49d81dfb09a18d02b6989459f5b7e4 extends Twig_Template
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
        $__internal_b8458c5a9fbf82cb3cbbc0c8c703893d45fb5f40fd3a17305849b1d8a7e556ad = $this->env->getExtension("native_profiler");
        $__internal_b8458c5a9fbf82cb3cbbc0c8c703893d45fb5f40fd3a17305849b1d8a7e556ad->enter($__internal_b8458c5a9fbf82cb3cbbc0c8c703893d45fb5f40fd3a17305849b1d8a7e556ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b8458c5a9fbf82cb3cbbc0c8c703893d45fb5f40fd3a17305849b1d8a7e556ad->leave($__internal_b8458c5a9fbf82cb3cbbc0c8c703893d45fb5f40fd3a17305849b1d8a7e556ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
