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

/* main/index.html.twig */
class __TwigTemplate_2eb195e2e108fb307e5b12f1cf215a25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>Sidebar 02</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">
\t\t
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
  </head>
  <body>
\t\t
\t\t<div class=\"wrapper d-flex align-items-stretch\">
\t\t\t<nav id=\"sidebar\">
\t\t\t\t<div class=\"custom-menu\">
\t\t\t\t\t<button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-primary\">
\t          <i class=\"fa fa-bars\"></i>
\t          <span class=\"sr-only\">Toggle Menu</span>
\t        </button>
        </div>
\t\t\t\t<div class=\"p-4 pt-5\">
\t\t  \t\t<h1><a href=\"index.html\" class=\"logo\">Splash</a></h1>
\t        <ul class=\"list-unstyled components mb-5\">
\t          <li class=\"active\">
\t            <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Home</a>
\t            <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                <li>
                    <a href=\"#\">Home 1</a>
                </li>
                <li>
                    <a href=\"#\">Home 2</a>
                </li>
                <li>
                    <a href=\"#\">Home 3</a>
                </li>
\t            </ul>
\t          </li>
\t          <li>
\t              <a href=\"#\">About</a>
\t          </li>
\t          <li>
              <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Pages</a>
              <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                <li>
                    <a href=\"#\">Page 1</a>
                </li>
                <li>
                    <a href=\"#\">Page 2</a>
                </li>
                <li>
                    <a href=\"#\">Page 3</a>
                </li>
              </ul>
\t          </li>
\t          <li>
              <a href=\"#\">Portfolio</a>
\t          </li>
\t          <li>
              <a href=\"#\">Contact</a>
\t          </li>
\t        </ul>

\t        <div class=\"mb-5\">
\t\t\t\t\t\t<h3 class=\"h6\">Subscribe for newsletter</h3>
\t\t\t\t\t\t<form action=\"#\" class=\"colorlib-subscribe-form\">
\t            <div class=\"form-group d-flex\">
\t            \t<div class=\"icon\"><span class=\"icon-paper-plane\"></span></div>
\t              <input type=\"text\" class=\"form-control\" placeholder=\"Enter Email Address\">
\t            </div>
\t          </form>
\t\t\t\t\t</div>

\t        <div class=\"footer\">
\t        \t<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib.com</a>
\t\t\t\t\t\t  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
\t        </div>

\t      </div>
    \t</nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5 pt-5\">

        <h2 class=\"mb-4\">Sidebar #02</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
\t\t</div>

    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/popper.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/main.js\"></script>
  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>Sidebar 02</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">
\t\t
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
  </head>
  <body>
\t\t
\t\t<div class=\"wrapper d-flex align-items-stretch\">
\t\t\t<nav id=\"sidebar\">
\t\t\t\t<div class=\"custom-menu\">
\t\t\t\t\t<button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-primary\">
\t          <i class=\"fa fa-bars\"></i>
\t          <span class=\"sr-only\">Toggle Menu</span>
\t        </button>
        </div>
\t\t\t\t<div class=\"p-4 pt-5\">
\t\t  \t\t<h1><a href=\"index.html\" class=\"logo\">Splash</a></h1>
\t        <ul class=\"list-unstyled components mb-5\">
\t          <li class=\"active\">
\t            <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Home</a>
\t            <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                <li>
                    <a href=\"#\">Home 1</a>
                </li>
                <li>
                    <a href=\"#\">Home 2</a>
                </li>
                <li>
                    <a href=\"#\">Home 3</a>
                </li>
\t            </ul>
\t          </li>
\t          <li>
\t              <a href=\"#\">About</a>
\t          </li>
\t          <li>
              <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Pages</a>
              <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                <li>
                    <a href=\"#\">Page 1</a>
                </li>
                <li>
                    <a href=\"#\">Page 2</a>
                </li>
                <li>
                    <a href=\"#\">Page 3</a>
                </li>
              </ul>
\t          </li>
\t          <li>
              <a href=\"#\">Portfolio</a>
\t          </li>
\t          <li>
              <a href=\"#\">Contact</a>
\t          </li>
\t        </ul>

\t        <div class=\"mb-5\">
\t\t\t\t\t\t<h3 class=\"h6\">Subscribe for newsletter</h3>
\t\t\t\t\t\t<form action=\"#\" class=\"colorlib-subscribe-form\">
\t            <div class=\"form-group d-flex\">
\t            \t<div class=\"icon\"><span class=\"icon-paper-plane\"></span></div>
\t              <input type=\"text\" class=\"form-control\" placeholder=\"Enter Email Address\">
\t            </div>
\t          </form>
\t\t\t\t\t</div>

\t        <div class=\"footer\">
\t        \t<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib.com</a>
\t\t\t\t\t\t  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
\t        </div>

\t      </div>
    \t</nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5 pt-5\">

        <h2 class=\"mb-4\">Sidebar #02</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
\t\t</div>

    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/popper.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/main.js\"></script>
  </body>
</html>
{% endblock %}
", "main/index.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/proyectoFinal/apiMusical/templates/main/index.html.twig");
    }
}
