<?php

/* @User/Registration/register_content.html.twig */
class __TwigTemplate_28d11ea11da78286800fdc0defb36ab49f3f49e750f8efdde7ca7a30d8e08cf7 extends Twig_Template
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
        $__internal_fa8ce0cd76396a602922e92771f7159c4b170209b8c5ddcee485d9fb2c47b470 = $this->env->getExtension("native_profiler");
        $__internal_fa8ce0cd76396a602922e92771f7159c4b170209b8c5ddcee485d9fb2c47b470->enter($__internal_fa8ce0cd76396a602922e92771f7159c4b170209b8c5ddcee485d9fb2c47b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_fa8ce0cd76396a602922e92771f7159c4b170209b8c5ddcee485d9fb2c47b470->leave($__internal_fa8ce0cd76396a602922e92771f7159c4b170209b8c5ddcee485d9fb2c47b470_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
