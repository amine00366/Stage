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

/* admin.html.twig */
class __TwigTemplate_115baf5c53efdd37b589f2fa11d5c6b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'Body' => [$this, 'block_Body'],
            'modal_content' => [$this, 'block_modal_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">
  <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.png\">
  <title>
    Stage BIAT
  </title>
  ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "</head>

<body class=\"g-sidenav-show  bg-gray-200\">
  <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
      <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
      <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
       <!-- insérer le logo de biat !--> 
        <img src=\"backend/assets/img/logo-ct.png\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
        <span class=\"ms-1 font-weight-bold text-white\"> Gestion Bandes</span>
      </a>
    </div>
    <hr class=\"horizontal light mt-0 mb-2\">
    <div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-white active bg-gradient-primary\" href=\"../pages/dashboard.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">dashboard</i>
            </div>
            <span class=\"nav-link-text ms-1\">Dashboard</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/tables.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">table_view</i>
            </div>
            ";
        // line 71
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 72
            echo "      <span class=\"nav-link-text ms-1\">Table des Armoires</span>
";
        }
        // line 74
        echo "
          
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableau");
        echo "\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">receipt_long</i>
            </div>
            <span class=\"nav-link-text ms-1\">Tables des Bandes</span>
          </a>
        </li>
        
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/rtl.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
            </div>
            <span class=\"nav-link-text ms-1\">RTL</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/notifications.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">notifications</i>
            </div>
            <span class=\"nav-link-text ms-1\">Notifications</span>
          </a>
        </li>
        <li class=\"nav-item mt-3\">
          <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/profile.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">person</i>
            </div>
            <span class=\"nav-link-text ms-1\">Profile</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/sign-in.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">login</i>
            </div>
            <span class=\"nav-link-text ms-1\">Sign In</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/sign-up.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">assignment</i>
            </div>
            <span class=\"nav-link-text ms-1\">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class=\"sidenav-footer position-absolute w-100 bottom-0 \">
      <div class=\"mx-3\">
      <!-- lezem n7ot feha bouton sign out !--> 
        <a class=\"btn bg-gradient-primary w-100\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" type=\"button\">Sign out </a>
      </div>
    </div>
  </aside>
  <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">
    <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"true\">
      <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
            <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Pages</a></li>
            <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">Dashboard</li>
          </ol>
          <h6 class=\"font-weight-bolder mb-0\">Dashboard</h6>
        </nav>
        <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
          <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
            <div class=\"input-group input-group-outline\">
              <label class=\"form-label\">Type here...</label>
              <input type=\"text\" class=\"form-control\">
            </div>
          </div>
          <ul class=\"navbar-nav  justify-content-end\">
            <li class=\"nav-item d-flex align-items-center\">
            ";
        // line 160
        echo "            </li>
            <li class=\"mt-2\">
              ";
        // line 163
        echo "            </li>
            <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
              <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
                <div class=\"sidenav-toggler-inner\">
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                </div>
              </a>
            </li>
            <li class=\"nav-item px-3 d-flex align-items-center\">
              <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
                <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
              </a>
            </li>
            <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
              <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fa fa-bell cursor-pointer\"></i>
              </a>
              <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
                <li class=\"mb-2\">
                  <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                    <div class=\"d-flex py-1\">
                      <div class=\"my-auto\">
                        <img src=\"../assets/img/team-2.jpg\" class=\"avatar avatar-sm  me-3 \">
                      </div>
                      <div class=\"d-flex flex-column justify-content-center\">
                        <h6 class=\"text-sm font-weight-normal mb-1\">
                          <span class=\"font-weight-bold\">New message</span> from Laur
                        </h6>
                        <p class=\"text-xs text-secondary mb-0\">
                          <i class=\"fa fa-clock me-1\"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              
                
              </ul>
            </li>
            ";
        // line 211
        echo "          </ul>
        </div>
      </div>
    </nav>
     
    ";
        // line 216
        $this->displayBlock('Body', $context, $blocks);
        // line 714
        echo "

      ";
        // line 716
        $this->displayBlock('footer', $context, $blocks);
        // line 752
        echo "    </div>
   
  </main>
  <div class=\"fixed-plugin\">
    <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
      <i class=\"material-icons py-2\">settings</i>
    </a>
    <div class=\"card shadow-lg\">
      <div class=\"card-header pb-0 pt-3\">
        <div class=\"float-start\">
          <h5 class=\"mt-3 mb-0\">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class=\"float-end mt-4\">
          <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
            <i class=\"material-icons\">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class=\"horizontal dark my-1\">
      <div class=\"card-body pt-sm-3 pt-0\">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class=\"mb-0\">Sidebar Colors</h6>
        </div>
        <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
          <div class=\"badge-colors my-2 text-start\">
            <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class=\"mt-3\">
          <h6 class=\"mb-0\">Sidenav Type</h6>
          <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
        </div>
        <div class=\"d-flex\">
          <button class=\"btn bg-gradient-dark px-3 mb-2 active\" data-class=\"bg-gradient-dark\" onclick=\"sidebarType(this)\">Dark</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-transparent\" onclick=\"sidebarType(this)\">Transparent</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
        </div>
        <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class=\"mt-3 d-flex\">
          <h6 class=\"mb-0\">Navbar Fixed</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-3\">
        <div class=\"mt-2 d-flex\">
          <h6 class=\"mb-0\">Light / Dark</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        <a class=\"btn bg-gradient-info w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro\">Free Download</a>
        <a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard\">View documentation</a>
        <div class=\"w-100 text-center\">
          <a class=\"github-button\" href=\"https://github.com/creativetimofficial/material-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a>
          <h6 class=\"mt-3\">Thank you for sharing!</h6>
          <a href=\"https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
          </a>
          <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->

   ";
        // line 831
        $this->displayBlock('js', $context, $blocks);
        // line 1111
        echo "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "  <!--     Fonts and icons     -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />
  <!-- Nucleo Icons -->
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/nucleo-icons.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" />
  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/nucleo-svg.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Material Icons -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/material-dashboard.css?v=3.1.0"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site=\"YOUR_DOMAIN_HERE\" src=\"https://api.nepcha.com/js/nepcha-analytics.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 216
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 217
        echo "    <!-- End Navbar -->

    ";
        // line 697
        echo "<div class=\"modal fade\" id=\"ajouterModal\" tabindex=\"-1\" aria-labelledby=\"ajouterModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"ajouterModalLabel\">Ajouter une bande</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 707
        $this->displayBlock('modal_content', $context, $blocks);
        // line 708
        echo "                </div>
            </div>
        </div>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 707
    public function block_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 716
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 717
        echo "      <footer class=\"footer py-4  \">
      <center>
        <div class=\"container-fluid\">
          <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
              <div class=\"copyright text-center text-sm text-muted text-lg-start\">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class=\"fa fa-heart\"></i> by
                <a href=\"https://github.com/amine00366\" class=\"font-weight-bold\" target=\"_blank\">Med Amine Sidhom </a>
                for a better web.
              </div>
            </div>
            ";
        // line 747
        echo "          </div>
        </div>
        </center> 
      </footer>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 831
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 832
        echo "  <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/core/popper.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 833
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 834
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 835
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/chartjs.min.js"), "html", null, true);
        echo "></script>
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.body.addEventListener('click', function (event) {
            if (event.target && event.target.id === 'ouvrirModal') {
                \$('#ajouterModal').modal('show');
            }
        });
    });
</script>

  <script>
    var ctx = document.getElementById(\"chart-bars\").getContext(\"2d\");

    new Chart(ctx, {
      type: \"bar\",
      data: {
        labels: [\"M\", \"T\", \"W\", \"T\", \"F\", \"S\", \"S\"],
        datasets: [{
          label: \"Sales\",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: \"rgba(255, 255, 255, .8)\",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
              color: \"#fff\"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById(\"chart-line\").getContext(\"2d\");

    new Chart(ctx2, {
      type: \"line\",
      data: {
        labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
        datasets: [{
          label: \"Mobile apps\",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: \"rgba(255, 255, 255, .8)\",
          pointBorderColor: \"transparent\",
          borderColor: \"rgba(255, 255, 255, .8)\",
          borderColor: \"rgba(255, 255, 255, .8)\",
          borderWidth: 4,
          backgroundColor: \"transparent\",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById(\"chart-line-tasks\").getContext(\"2d\");

    new Chart(ctx3, {
      type: \"line\",
      data: {
        labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
        datasets: [{
          label: \"Mobile apps\",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: \"rgba(255, 255, 255, .8)\",
          pointBorderColor: \"transparent\",
          borderColor: \"rgba(255, 255, 255, .8)\",
          borderWidth: 4,
          backgroundColor: \"transparent\",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=\"../assets/js/material-dashboard.min.js?v=3.1.0\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 836,  533 => 835,  529 => 834,  525 => 833,  520 => 832,  510 => 831,  496 => 747,  480 => 717,  470 => 716,  452 => 707,  437 => 708,  435 => 707,  423 => 697,  419 => 217,  409 => 216,  393 => 37,  384 => 31,  380 => 30,  375 => 27,  365 => 26,  352 => 1111,  350 => 831,  269 => 752,  267 => 716,  263 => 714,  261 => 216,  254 => 211,  210 => 163,  206 => 160,  179 => 135,  120 => 79,  113 => 74,  109 => 72,  107 => 71,  77 => 43,  75 => 26,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">
  <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.png\">
  <title>
    Stage BIAT
  </title>
  {% block stylesheets %}
  <!--     Fonts and icons     -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />
  <!-- Nucleo Icons -->
  <link href=\"{{asset('backend/assets/css/nucleo-icons.css\" rel=\"stylesheet')}}\" />
  <link href=\"{{asset('backend/assets/css/nucleo-svg.css\" rel=\"stylesheet')}}\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Material Icons -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"{{asset('backend/assets/css/material-dashboard.css?v=3.1.0')}}\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site=\"YOUR_DOMAIN_HERE\" src=\"https://api.nepcha.com/js/nepcha-analytics.js\"></script>
{% endblock %}
</head>

<body class=\"g-sidenav-show  bg-gray-200\">
  <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
      <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
      <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
       <!-- insérer le logo de biat !--> 
        <img src=\"backend/assets/img/logo-ct.png\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
        <span class=\"ms-1 font-weight-bold text-white\"> Gestion Bandes</span>
      </a>
    </div>
    <hr class=\"horizontal light mt-0 mb-2\">
    <div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-white active bg-gradient-primary\" href=\"../pages/dashboard.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">dashboard</i>
            </div>
            <span class=\"nav-link-text ms-1\">Dashboard</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/tables.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">table_view</i>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
      <span class=\"nav-link-text ms-1\">Table des Armoires</span>
{% endif %}

          
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"{{ path('tableau') }}\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">receipt_long</i>
            </div>
            <span class=\"nav-link-text ms-1\">Tables des Bandes</span>
          </a>
        </li>
        
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/rtl.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
            </div>
            <span class=\"nav-link-text ms-1\">RTL</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/notifications.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">notifications</i>
            </div>
            <span class=\"nav-link-text ms-1\">Notifications</span>
          </a>
        </li>
        <li class=\"nav-item mt-3\">
          <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/profile.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">person</i>
            </div>
            <span class=\"nav-link-text ms-1\">Profile</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/sign-in.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">login</i>
            </div>
            <span class=\"nav-link-text ms-1\">Sign In</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"../pages/sign-up.html\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">assignment</i>
            </div>
            <span class=\"nav-link-text ms-1\">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class=\"sidenav-footer position-absolute w-100 bottom-0 \">
      <div class=\"mx-3\">
      <!-- lezem n7ot feha bouton sign out !--> 
        <a class=\"btn bg-gradient-primary w-100\" href=\"{{path('app_logout')}}\" type=\"button\">Sign out </a>
      </div>
    </div>
  </aside>
  <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">
    <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"true\">
      <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
            <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Pages</a></li>
            <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">Dashboard</li>
          </ol>
          <h6 class=\"font-weight-bolder mb-0\">Dashboard</h6>
        </nav>
        <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
          <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
            <div class=\"input-group input-group-outline\">
              <label class=\"form-label\">Type here...</label>
              <input type=\"text\" class=\"form-control\">
            </div>
          </div>
          <ul class=\"navbar-nav  justify-content-end\">
            <li class=\"nav-item d-flex align-items-center\">
            {# <a class=\"btn btn-outline-primary btn-sm mb-0 me-3\" target=\"_blank\" href=\"https://www.creative-tim.com/builder?ref=navbar-material-dashboard\">Online Builder</a> #}
            </li>
            <li class=\"mt-2\">
              {# <a class=\"github-button\" href=\"https://github.com/creativetimofficial/material-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a> #}
            </li>
            <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
              <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
                <div class=\"sidenav-toggler-inner\">
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                </div>
              </a>
            </li>
            <li class=\"nav-item px-3 d-flex align-items-center\">
              <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
                <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
              </a>
            </li>
            <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
              <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fa fa-bell cursor-pointer\"></i>
              </a>
              <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
                <li class=\"mb-2\">
                  <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                    <div class=\"d-flex py-1\">
                      <div class=\"my-auto\">
                        <img src=\"../assets/img/team-2.jpg\" class=\"avatar avatar-sm  me-3 \">
                      </div>
                      <div class=\"d-flex flex-column justify-content-center\">
                        <h6 class=\"text-sm font-weight-normal mb-1\">
                          <span class=\"font-weight-bold\">New message</span> from Laur
                        </h6>
                        <p class=\"text-xs text-secondary mb-0\">
                          <i class=\"fa fa-clock me-1\"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              
                
              </ul>
            </li>
            {# <li class=\"nav-item d-flex align-items-center\">
              <a href=\"../pages/sign-in.html\" class=\"nav-link text-body font-weight-bold px-0\">
                <i class=\"fa fa-user me-sm-1\"></i>
                <span class=\"d-sm-inline d-none\">Sign In</span>
              </a>
            </li> #}
          </ul>
        </div>
      </div>
    </nav>
     
    {% block Body %}
    <!-- End Navbar -->

    {# <div class=\"container-fluid py-4\"> 
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">weekend</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Today's Money</p>
                <h4 class=\"mb-0\">\$53k</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">person</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Today's Users</p>
                <h4 class=\"mb-0\">2,300</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">person</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">New Clients</p>
                <h4 class=\"mb-0\">3,462</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-danger text-sm font-weight-bolder\">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">weekend</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Sales</p>
                <h4 class=\"mb-0\">\$103,430</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mt-4\">
        <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
          <div class=\"card z-index-2 \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-bars\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \">Website Views</h6>
              <p class=\"text-sm \">Last Campaign Performance</p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
          <div class=\"card z-index-2  \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-success shadow-success border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-line\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \"> Daily Sales </h6>
              <p class=\"text-sm \"> (<span class=\"font-weight-bolder\">+15%</span>) increase in today sales. </p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mt-4 mb-3\">
          <div class=\"card z-index-2 \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-line-tasks\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \">Completed Tasks</h6>
              <p class=\"text-sm \">Last Campaign Performance</p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mb-4\">
        <div class=\"col-lg-8 col-md-6 mb-md-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header pb-0\">
              <div class=\"row\">
                <div class=\"col-lg-6 col-7\">
                  <h6>Projects</h6>
                  <p class=\"text-sm mb-0\">
                    <i class=\"fa fa-check text-info\" aria-hidden=\"true\"></i>
                    <span class=\"font-weight-bold ms-1\">30 done</span> this month
                  </p>
                </div>
                <div class=\"col-lg-6 col-5 my-auto text-end\">
                  <div class=\"dropdown float-lg-end pe-4\">
                    <a class=\"cursor-pointer\" id=\"dropdownTable\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fa fa-ellipsis-v text-secondary\"></i>
                    </a>
                    <ul class=\"dropdown-menu px-2 py-3 ms-sm-n4 ms-n5\" aria-labelledby=\"dropdownTable\">
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Action</a></li>
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Another action</a></li>
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Companies</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Members</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Budget</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Completion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-xd.svg\" class=\"avatar avatar-sm me-3\" alt=\"xd\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Material XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"team1\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-2.jpg\" alt=\"team2\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Alexander Smith\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"team3\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"team4\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$14,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">60%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-atlassian.svg\" class=\"avatar avatar-sm me-3\" alt=\"atlassian\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-2.jpg\" alt=\"team5\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"team6\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$3,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">10%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-10\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-slack.svg\" class=\"avatar avatar-sm me-3\" alt=\"team7\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"team8\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"team9\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> Not set </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">100%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-success w-100\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm me-3\" alt=\"spotify\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user1\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"user2\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Alexander Smith\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user3\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"user4\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$20,500 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">100%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-success w-100\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-jira.svg\" class=\"avatar avatar-sm me-3\" alt=\"jira\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user5\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$500 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">25%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-25\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"25\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-invision.svg\" class=\"avatar avatar-sm me-3\" alt=\"invision\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"user6\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user7\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$2,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">40%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-40\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"40\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"card h-100\">
            <div class=\"card-header pb-0\">
              <h6>Orders overview</h6>
              <p class=\"text-sm\">
                <i class=\"fa fa-arrow-up text-success\" aria-hidden=\"true\"></i>
                <span class=\"font-weight-bold\">24%</span> this month
              </p>
            </div>
            <div class=\"card-body p-3\">
              <div class=\"timeline timeline-one-side\">
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-success text-gradient\">notifications</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">\$2400, Design changes</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-danger text-gradient\">code</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New order #1832412</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-info text-gradient\">shopping_cart</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">Server payments for April</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-warning text-gradient\">credit_card</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New card added for order #4395133</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-primary text-gradient\">key</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">Unlock packages for development</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class=\"timeline-block\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-dark text-gradient\">payments</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New order #9583120</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
#}<div class=\"modal fade\" id=\"ajouterModal\" tabindex=\"-1\" aria-labelledby=\"ajouterModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"ajouterModalLabel\">Ajouter une bande</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {% block modal_content %}{% endblock %}
                </div>
            </div>
        </div>
    </div>

    {% endblock %}


      {% block footer %}
      <footer class=\"footer py-4  \">
      <center>
        <div class=\"container-fluid\">
          <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
              <div class=\"copyright text-center text-sm text-muted text-lg-start\">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class=\"fa fa-heart\"></i> by
                <a href=\"https://github.com/amine00366\" class=\"font-weight-bold\" target=\"_blank\">Med Amine Sidhom </a>
                for a better web.
              </div>
            </div>
            {# <div class=\"col-lg-6\">
              <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/license\" class=\"nav-link pe-0 text-muted\" target=\"_blank\">License</a>
                </li>
              </ul> 
            </div> #}
          </div>
        </div>
        </center> 
      </footer>
      {% endblock %}
    </div>
   
  </main>
  <div class=\"fixed-plugin\">
    <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
      <i class=\"material-icons py-2\">settings</i>
    </a>
    <div class=\"card shadow-lg\">
      <div class=\"card-header pb-0 pt-3\">
        <div class=\"float-start\">
          <h5 class=\"mt-3 mb-0\">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class=\"float-end mt-4\">
          <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
            <i class=\"material-icons\">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class=\"horizontal dark my-1\">
      <div class=\"card-body pt-sm-3 pt-0\">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class=\"mb-0\">Sidebar Colors</h6>
        </div>
        <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
          <div class=\"badge-colors my-2 text-start\">
            <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class=\"mt-3\">
          <h6 class=\"mb-0\">Sidenav Type</h6>
          <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
        </div>
        <div class=\"d-flex\">
          <button class=\"btn bg-gradient-dark px-3 mb-2 active\" data-class=\"bg-gradient-dark\" onclick=\"sidebarType(this)\">Dark</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-transparent\" onclick=\"sidebarType(this)\">Transparent</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
        </div>
        <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class=\"mt-3 d-flex\">
          <h6 class=\"mb-0\">Navbar Fixed</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-3\">
        <div class=\"mt-2 d-flex\">
          <h6 class=\"mb-0\">Light / Dark</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        <a class=\"btn bg-gradient-info w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro\">Free Download</a>
        <a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard\">View documentation</a>
        <div class=\"w-100 text-center\">
          <a class=\"github-button\" href=\"https://github.com/creativetimofficial/material-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a>
          <h6 class=\"mt-3\">Thank you for sharing!</h6>
          <a href=\"https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
          </a>
          <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->

   {% block js  %}
  <script src={{asset(\"backend/assets/js/core/popper.min.js\")}}></script>
  <script src={{asset(\"backend/assets/js/core/bootstrap.min.js\")}}></script>
  <script src={{asset(\"backend/assets/js/plugins/perfect-scrollbar.min.js\")}}></script>
  <script src={{asset(\"backend/assets/js/plugins/smooth-scrollbar.min.js\")}}></script>
  <script src={{asset(\"backend/assets/js/plugins/chartjs.min.js\")}}></script>
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.body.addEventListener('click', function (event) {
            if (event.target && event.target.id === 'ouvrirModal') {
                \$('#ajouterModal').modal('show');
            }
        });
    });
</script>

  <script>
    var ctx = document.getElementById(\"chart-bars\").getContext(\"2d\");

    new Chart(ctx, {
      type: \"bar\",
      data: {
        labels: [\"M\", \"T\", \"W\", \"T\", \"F\", \"S\", \"S\"],
        datasets: [{
          label: \"Sales\",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: \"rgba(255, 255, 255, .8)\",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
              color: \"#fff\"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById(\"chart-line\").getContext(\"2d\");

    new Chart(ctx2, {
      type: \"line\",
      data: {
        labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
        datasets: [{
          label: \"Mobile apps\",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: \"rgba(255, 255, 255, .8)\",
          pointBorderColor: \"transparent\",
          borderColor: \"rgba(255, 255, 255, .8)\",
          borderColor: \"rgba(255, 255, 255, .8)\",
          borderWidth: 4,
          backgroundColor: \"transparent\",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById(\"chart-line-tasks\").getContext(\"2d\");

    new Chart(ctx3, {
      type: \"line\",
      data: {
        labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
        datasets: [{
          label: \"Mobile apps\",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: \"rgba(255, 255, 255, .8)\",
          pointBorderColor: \"transparent\",
          borderColor: \"rgba(255, 255, 255, .8)\",
          borderWidth: 4,
          backgroundColor: \"transparent\",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: \"Roboto\",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=\"../assets/js/material-dashboard.min.js?v=3.1.0\"></script>
  {% endblock %}

</body>

</html>", "admin.html.twig", "C:\\Users\\amine\\Bureau\\StageProject\\templates\\admin.html.twig");
    }
}
