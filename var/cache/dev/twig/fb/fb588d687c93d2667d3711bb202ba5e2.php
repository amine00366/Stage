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
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">tableau des Bandes</h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                     
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nom Armoire</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Description</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                      <th class=\"text-secondary opacity-7\"></th>
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
                        
                     
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Projects table</h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center justify-content-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Project</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Budget</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Status</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-asana.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"spotify\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Asana</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$2,500</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">working</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">60%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/github.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"invision\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Github</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$5,000</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">done</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">100%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-atlassian.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"jira\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Atlassian</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$3,400</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">canceled</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">30%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-danger\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"30\" style=\"width: 30%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/bootstrap.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"webdev\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Bootstrap</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$14,000</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">working</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">80%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"80\" style=\"width: 80%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-slack.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"slack\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$1,000</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">canceled</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">0%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"0\" style=\"width: 0%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/devto.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"xd\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Devto</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$2,300</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">done</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">100%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class=\"footer py-4  \">
        
      </footer>
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
        return array (  123 => 42,  110 => 36,  102 => 31,  96 => 27,  92 => 26,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block Body %}
<div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">tableau des Bandes</h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                     
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nom Armoire</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Description</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                      <th class=\"text-secondary opacity-7\"></th>
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
                        
                     
                      {% endfor %} 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Projects table</h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center justify-content-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Project</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Budget</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Status</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-asana.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"spotify\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Asana</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$2,500</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">working</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">60%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/github.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"invision\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Github</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$5,000</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">done</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">100%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-atlassian.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"jira\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Atlassian</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$3,400</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">canceled</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">30%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-danger\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"30\" style=\"width: 30%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/bootstrap.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"webdev\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Bootstrap</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$14,000</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">working</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">80%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"80\" style=\"width: 80%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-slack.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"slack\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$1,000</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">canceled</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">0%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"0\" style=\"width: 0%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2\">
                          <div>
                            <img src=\"../assets/img/small-logos/devto.svg\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"xd\">
                          </div>
                          <div class=\"my-auto\">
                            <h6 class=\"mb-0 text-sm\">Devto</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-sm font-weight-bold mb-0\">\$2,300</p>
                      </td>
                      <td>
                        <span class=\"text-xs font-weight-bold\">done</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                          <span class=\"me-2 text-xs font-weight-bold\">100%</span>
                          <div>
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-gradient-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class=\"align-middle\">
                        <button class=\"btn btn-link text-secondary mb-0\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <i class=\"fa fa-ellipsis-v text-xs\"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class=\"footer py-4  \">
        
      </footer>
    </div>
{% endblock %}
", "pages/profile.html.twig", "C:\\Users\\amine\\Bureau\\StageProject\\templates\\pages\\profile.html.twig");
    }
}
