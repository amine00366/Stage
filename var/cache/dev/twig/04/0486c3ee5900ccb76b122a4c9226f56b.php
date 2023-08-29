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

/* pages/newArmoire.html.twig */
class __TwigTemplate_70a97fa6dbcbe4cfe44cf0796bbc98c5 extends Template
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
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/newArmoire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/newArmoire.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "pages/newArmoire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 4
        echo "<style>
    label {
        font-weight: bold;
        color: blue; /* 'blue' ne sera pas reconnu, utilisez une couleur CSS valide */
        text-transform: uppercase;
    }
</style>

<div class=\"page-wrapper\">
    <div class=\"container-fluid\">

        <div class=\"row justify-content-center\"> <!-- Alignement au centre -->

            <div class=\"col-lg-6\"> <!-- Utilisez une classe de grille pour le dimensionnement -->
                <div class=\"card\"> <!-- Ajoutez la classe 'card' pour le style de carte -->
                    <div class=\"card-body\">

                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                        <div class=\"mb-3\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        echo "
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom "]]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'errors');
        echo "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'errors');
        echo "
                        </div>

                        <div class=\"d-grid\">
                            <button class=\"btn btn-primary mt-3\" type=\"submit\">";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("button_success", $context)) ? (_twig_default_filter((isset($context["button_success"]) || array_key_exists("button_success", $context) ? $context["button_success"] : (function () { throw new RuntimeError('Variable "button_success" does not exist.', 36, $this->source); })()), "sauvegarder")) : ("sauvegarder")), "html", null, true);
        echo "</button>
                        </div>

                        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/newArmoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  123 => 36,  116 => 32,  112 => 31,  108 => 30,  101 => 26,  97 => 25,  93 => 24,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block Body %}
<style>
    label {
        font-weight: bold;
        color: blue; /* 'blue' ne sera pas reconnu, utilisez une couleur CSS valide */
        text-transform: uppercase;
    }
</style>

<div class=\"page-wrapper\">
    <div class=\"container-fluid\">

        <div class=\"row justify-content-center\"> <!-- Alignement au centre -->

            <div class=\"col-lg-6\"> <!-- Utilisez une classe de grille pour le dimensionnement -->
                <div class=\"card\"> <!-- Ajoutez la classe 'card' pour le style de carte -->
                    <div class=\"card-body\">

                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                        <div class=\"mb-3\">
                            {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom '}}) }}
                            {{ form_errors(form.nom) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.description, \"Description\", {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
                            {{ form_errors(form.description) }}
                        </div>

                        <div class=\"d-grid\">
                            <button class=\"btn btn-primary mt-3\" type=\"submit\">{{ button_success|default('sauvegarder') }}</button>
                        </div>

                        {{ form_end(form) }}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "pages/newArmoire.html.twig", "C:\\Users\\amine\\Bureau\\StageProject\\templates\\pages\\newArmoire.html.twig");
    }
}
