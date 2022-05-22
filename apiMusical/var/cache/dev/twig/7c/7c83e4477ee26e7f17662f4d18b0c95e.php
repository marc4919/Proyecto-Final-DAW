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

/* layout.html.twig */
class __TwigTemplate_d937c03f13bacb2b6d9cf0098a05e642 extends Template
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
            'contenido' => [$this, 'block_contenido'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
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
\t\t<link rel=\"stylesheet\" href=\"../../css/style.css\">
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
\t\t  \t\t<h1><a href=\"index.html\" class=\"logo\">Menú</a></h1>
\t        <ul class=\"list-unstyled components mb-5\">
\t          <li class=\"active\">
\t            <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\">Administrar</a>
\t            <ul class=\"list-unstyled collapse show\" id=\"homeSubmenu\">
                <li>
                    <a href=\"/musical\">Musicales</a>
                </li>
                <li>
                    <a href=\"/audio\">Audios</a>
                </li>
                <li>
                    <a href=\"/imagen\">Imágenes</a>
                </li>
\t\t\t\t<li>
                    <a href=\"/participante\">Participantes</a>
                </li>
\t            </ul>
\t          </li>
\t          <li>
\t              <a href=\"#\">Sobre la App</a>
\t          </li>
\t          <li>
              <a href=\"#\">Desarrollo</a>
\t          </li>
\t\t\t  <li>
              <a href=\"#\">Contacto</a>
\t          </li>
\t        </ul>

\t      </div>
    \t</nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5 pt-5\">

        
        ";
        // line 66
        $this->displayBlock('contenido', $context, $blocks);
        // line 67
        echo "      </div>
\t\t</div>

    <script src=\"../../js/jquery.min.js\"></script>
    <script src=\"../../js/popper.js\"></script>
    <script src=\"../../js/bootstrap.min.js\"></script>
    <script src=\"../../js/main.js\"></script>
  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 66
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 66,  138 => 67,  136 => 66,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"../../css/style.css\">
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
\t\t  \t\t<h1><a href=\"index.html\" class=\"logo\">Menú</a></h1>
\t        <ul class=\"list-unstyled components mb-5\">
\t          <li class=\"active\">
\t            <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\">Administrar</a>
\t            <ul class=\"list-unstyled collapse show\" id=\"homeSubmenu\">
                <li>
                    <a href=\"/musical\">Musicales</a>
                </li>
                <li>
                    <a href=\"/audio\">Audios</a>
                </li>
                <li>
                    <a href=\"/imagen\">Imágenes</a>
                </li>
\t\t\t\t<li>
                    <a href=\"/participante\">Participantes</a>
                </li>
\t            </ul>
\t          </li>
\t          <li>
\t              <a href=\"#\">Sobre la App</a>
\t          </li>
\t          <li>
              <a href=\"#\">Desarrollo</a>
\t          </li>
\t\t\t  <li>
              <a href=\"#\">Contacto</a>
\t          </li>
\t        </ul>

\t      </div>
    \t</nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5 pt-5\">

        
        {% block contenido %} {% endblock %}
      </div>
\t\t</div>

    <script src=\"../../js/jquery.min.js\"></script>
    <script src=\"../../js/popper.js\"></script>
    <script src=\"../../js/bootstrap.min.js\"></script>
    <script src=\"../../js/main.js\"></script>
  </body>
</html>
{% endblock %}
", "layout.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/proyectoFinal/apiMusical/templates/layout.html.twig");
    }
}
