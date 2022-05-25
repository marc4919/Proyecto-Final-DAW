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
class __TwigTemplate_2db04752c1009b2a7829363a49aec512 extends Template
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
\t\t<style>
\t\t.form-control{
\t\t\tborder: 1px solid rgba(0, 0, 0, 0.1)
\t\t}
\t\t#musical_participantes{height:300px;}
\t\t#participante_musicals{height:100px;}
\t\t</style>
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
\t            <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M8.071 21.586l-7.071 1.414 1.414-7.071 14.929-14.929 5.657 5.657-14.929 14.929zm-.493-.921l-4.243-4.243-1.06 5.303 5.303-1.06zm9.765-18.251l-13.3 13.301 4.242 4.242 13.301-13.3-4.243-4.243z\"/></svg> Administrar</a>
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
\t\t\t  <li>
\t              <a href=\"/user\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M11 10v-4c0-2.76-2.24-5-5-5s-5 2.24-5 5v2h-1v-2c0-3.312 2.689-6 6-6s6 2.689 6 6v4h10v14h-18v-14h7zm10 1h-16v12h16v-12z\"/></svg> Acceso</a>
\t          </li>
\t          <li>
\t              <a href=\"#\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm.5 17h-1v-9h1v9zm-.5-12c.466 0 .845.378.845.845 0 .466-.379.844-.845.844-.466 0-.845-.378-.845-.844 0-.467.379-.845.845-.845z\"/></svg> Sobre la App</a>
\t          </li>
\t          <li>
              <a href=\"#\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M16 3.383l-.924-.383-7.297 17.617.924.383 7.297-17.617zm.287 3.617l6.153 4.825-6.173 5.175.678.737 7.055-5.912-7.048-5.578-.665.753zm-8.478 0l-6.249 4.825 6.003 5.175-.679.737-6.884-5.912 7.144-5.578.665.753z\"/></svg> Desarrollo</a>
\t          </li>
\t\t\t  <li>
              <a href=\"#\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M24 21h-24v-18h24v18zm-23-16.477v15.477h22v-15.477l-10.999 10-11.001-10zm21.089-.523h-20.176l10.088 9.171 10.088-9.171z\"/></svg> Contacto</a>
\t          </li>
\t        </ul>
\t             <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><button style=\"width: 100%\" type=\"button\" class=\"btn btn-secondary\">Salir</button></a> 
\t\t\t

\t      </div>
    \t</nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5 pt-5\">

        
        ";
        // line 78
        $this->displayBlock('contenido', $context, $blocks);
        // line 79
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

    // line 78
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
        return array (  169 => 78,  153 => 79,  151 => 78,  138 => 68,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
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
\t\t<style>
\t\t.form-control{
\t\t\tborder: 1px solid rgba(0, 0, 0, 0.1)
\t\t}
\t\t#musical_participantes{height:300px;}
\t\t#participante_musicals{height:100px;}
\t\t</style>
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
\t            <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M8.071 21.586l-7.071 1.414 1.414-7.071 14.929-14.929 5.657 5.657-14.929 14.929zm-.493-.921l-4.243-4.243-1.06 5.303 5.303-1.06zm9.765-18.251l-13.3 13.301 4.242 4.242 13.301-13.3-4.243-4.243z\"/></svg> Administrar</a>
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
\t\t\t  <li>
\t              <a href=\"/user\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M11 10v-4c0-2.76-2.24-5-5-5s-5 2.24-5 5v2h-1v-2c0-3.312 2.689-6 6-6s6 2.689 6 6v4h10v14h-18v-14h7zm10 1h-16v12h16v-12z\"/></svg> Acceso</a>
\t          </li>
\t          <li>
\t              <a href=\"#\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm.5 17h-1v-9h1v9zm-.5-12c.466 0 .845.378.845.845 0 .466-.379.844-.845.844-.466 0-.845-.378-.845-.844 0-.467.379-.845.845-.845z\"/></svg> Sobre la App</a>
\t          </li>
\t          <li>
              <a href=\"#\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M16 3.383l-.924-.383-7.297 17.617.924.383 7.297-17.617zm.287 3.617l6.153 4.825-6.173 5.175.678.737 7.055-5.912-7.048-5.578-.665.753zm-8.478 0l-6.249 4.825 6.003 5.175-.679.737-6.884-5.912 7.144-5.578.665.753z\"/></svg> Desarrollo</a>
\t          </li>
\t\t\t  <li>
              <a href=\"#\"> <svg style=\"fill:white\" width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M24 21h-24v-18h24v18zm-23-16.477v15.477h22v-15.477l-10.999 10-11.001-10zm21.089-.523h-20.176l10.088 9.171 10.088-9.171z\"/></svg> Contacto</a>
\t          </li>
\t        </ul>
\t             <a href=\"{{ path('app_logout') }}\"><button style=\"width: 100%\" type=\"button\" class=\"btn btn-secondary\">Salir</button></a> 
\t\t\t

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
