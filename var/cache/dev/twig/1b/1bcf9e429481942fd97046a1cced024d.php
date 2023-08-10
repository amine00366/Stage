<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/edit.html.twig */
class __TwigTemplate_69d787d8d8882c1a032d8c60984867f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "pages/edit.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 6
        echo "<style>
label {
  font-weight: bold;
  color:Blue sky;
  text-transform: uppercase;
}

</style>

<div class=\"page-wrapper\">
<div class=\"container-fluid\">

<div class=\"row\">

<div class=\"container\">

    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <center>
        <style>
            table {
                margin-top: 50px;
                margin-right: -40px;
            }
        </style>
        <div>
            <table>
                 <div class=\"form-floating mb-3\">
              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du type"]]);
        echo "
              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'errors');
        echo "
              ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "small mb-1"], "label" => "Nom du categories"]);
        echo "
            </div>

            <div class=\"form-floating mb-3\">
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du type"]]);
        echo "
              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'errors');
        echo "
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "small mb-1"], "label" => "Nom du categories"]);
        echo "
            </div>

            
            </table>
        </div>
    </center>
    
    
         <div class=\"d-grid\" ><button  class=\"btn btn-primary mt-3\" type=\"submit\">";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("button_success", $context)) ? (_twig_default_filter((isset($context["button_success"]) || array_key_exists("button_success", $context) ? $context["button_success"] : (function () { throw new RuntimeError('Variable "button_success" does not exist.', 50, $this->source); })()), "sauvegarder")) : ("sauvegarder")), "html", null, true);
        echo "</button></div>
    </div>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
    </div>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  135 => 50,  123 => 41,  119 => 40,  115 => 39,  108 => 35,  104 => 34,  100 => 33,  86 => 22,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'admin.html.twig' %}


 {% block Body %}
<style>
label {
  font-weight: bold;
  color:Blue sky;
  text-transform: uppercase;
}

</style>

<div class=\"page-wrapper\">
<div class=\"container-fluid\">

<div class=\"row\">

<div class=\"container\">

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <center>
        <style>
            table {
                margin-top: 50px;
                margin-right: -40px;
            }
        </style>
        <div>
            <table>
                 <div class=\"form-floating mb-3\">
              {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom du type'}}) }}
              {{ form_errors(form.nom) }}
              {{ form_label(form.nom, \"Nom du categories\", {'label_attr': {'class': 'small mb-1'}}) }}
            </div>

            <div class=\"form-floating mb-3\">
              {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Nom du type'}}) }}
              {{ form_errors(form.description) }}
              {{ form_label(form.description, \"Nom du categories\", {'label_attr': {'class': 'small mb-1'}}) }}
            </div>

            
            </table>
        </div>
    </center>
    
    
         <div class=\"d-grid\" ><button  class=\"btn btn-primary mt-3\" type=\"submit\">{{ button_success|default('sauvegarder') }}</button></div>
    </div>
    {{ form_end(form) }}
    </div>
    </div>
    </div>
{% endblock %}
 ", "pages/edit.html.twig", "C:\\Users\\amine\\Bureau\\StageProject\\templates\\pages\\edit.html.twig");
    }
}
