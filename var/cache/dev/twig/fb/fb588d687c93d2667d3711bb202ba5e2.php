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

/* pages/profile.html.twig */
class __TwigTemplate_4f62b9444949eb414b3516b6931344c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/profile.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "pages/profile.html.twig", 1);
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
        echo "<div class=\"container-fluid py-4\">
<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutArmoire");
        echo "\"><button type=\"button\" class=\"btn btn-gd btn-outline-info\">ajouter une Armoire</button></a>      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
           <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"custom-bg-blue shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Tableau des Armoires</h6>
            </div>
        </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                     
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Nom Armoire</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Description</th>
                       <th class=\"text-secondary opacity-7 text-right\">Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["armoire"]) || array_key_exists("armoire", $context) ? $context["armoire"] : (function () { throw new RuntimeError('Variable "armoire" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 27
            echo "                    <tr>
                      <td>
                       
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    
                       
                      </td>
                      <td class=\"text-right\"> <!-- Alignement à droite pour les icônes -->
        <div class=\"d-flex justify-content-end\"> <!-- Alignement à droite pour les icônes -->
          <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArmoire", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-danger me-2\">
            <i class=\"fas fa-trash-alt\"></i>
          </a>
          <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editArmoire", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-info\">
            <i class=\"fas fa-pencil-alt\"></i>
          </a>
    </div>
      </td>
                        </tr>
                     
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo " 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <style>
    /* Dans votre fichier CSS */
.custom-bg-blue {
    background-color: royalblue; /* Utilisez la couleur bleu roi de votre choix */
}
</style>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  128 => 45,  122 => 42,  113 => 36,  105 => 31,  99 => 27,  95 => 26,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block Body %}
<div class=\"container-fluid py-4\">
<a href=\"{{ path('ajoutArmoire') }}\"><button type=\"button\" class=\"btn btn-gd btn-outline-info\">ajouter une Armoire</button></a>      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
           <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"custom-bg-blue shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Tableau des Armoires</h6>
            </div>
        </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                     
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Nom Armoire</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Description</th>
                       <th class=\"text-secondary opacity-7 text-right\">Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  {% for a in armoire %}
                    <tr>
                      <td>
                       
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">{{a.nom}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">{{a.description}}</p>
                    
                       
                      </td>
                      <td class=\"text-right\"> <!-- Alignement à droite pour les icônes -->
        <div class=\"d-flex justify-content-end\"> <!-- Alignement à droite pour les icônes -->
          <a href=\"{{ path('deleteArmoire', {'id': a.id}) }}\" class=\"btn btn-sm btn-outline-danger me-2\">
            <i class=\"fas fa-trash-alt\"></i>
          </a>
          <a href=\"{{ path('editArmoire', {'id': a.id}) }}\" class=\"btn btn-sm btn-outline-info\">
            <i class=\"fas fa-pencil-alt\"></i>
          </a>
    </div>
      </td>
                        </tr>
                     
                      {% endfor %} 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <style>
    /* Dans votre fichier CSS */
.custom-bg-blue {
    background-color: royalblue; /* Utilisez la couleur bleu roi de votre choix */
}
</style>
    </div>
{% endblock %}
", "pages/profile.html.twig", "C:\\Users\\amine\\Bureau\\StageProject\\templates\\pages\\profile.html.twig");
    }
}
