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

/* development_info/index.html.twig */
class __TwigTemplate_c8d92b7e1b31378f02720551ee7372e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "development_info/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "development_info/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Desarrollo de la App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Desarrollo del Portal de Admin</h1>
    <div style=\"border: solid 1px black; padding: 30px\">
    Esta aplicación ha sido desarrollada mediante Symfony versión 5.4.8
    <br>
    <br>
    <p>Algunos de los principales paquetes que se han utilizado son:</p>
    
    <ul>
        <li>Drag and drop para añadir ficheros<code>Symfony UX Dropzone</code></li>
        <li>Exportación de plantillas en pdf <code>SnappyBundle - (wkhtmltopdf)</code></li>
         <li>Webpack para empaquetación de módulos UX<code>WebpackEncore</code></li>
        <li>Api Musical - Swagger de la Api<code>Api Platform</code></li>
        <li>Subida de ficheros a BBDD<code>Symfony Upload</code></li>
        <li>Sistema de seguridad login<code>Symfony Security</code></li>
    </ul>
    
    <p>Enlace al repositorio con el proyecto</p>
     <code><a href=\"https://github.com/marc4919/Proyecto-Final-DAW\"> https://github.com/marc4919/Proyecto-Final-DAW</a></code>
     </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "development_info/index.html.twig";
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
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Desarrollo de la App{% endblock %}

{% block contenido %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Desarrollo del Portal de Admin</h1>
    <div style=\"border: solid 1px black; padding: 30px\">
    Esta aplicación ha sido desarrollada mediante Symfony versión 5.4.8
    <br>
    <br>
    <p>Algunos de los principales paquetes que se han utilizado son:</p>
    
    <ul>
        <li>Drag and drop para añadir ficheros<code>Symfony UX Dropzone</code></li>
        <li>Exportación de plantillas en pdf <code>SnappyBundle - (wkhtmltopdf)</code></li>
         <li>Webpack para empaquetación de módulos UX<code>WebpackEncore</code></li>
        <li>Api Musical - Swagger de la Api<code>Api Platform</code></li>
        <li>Subida de ficheros a BBDD<code>Symfony Upload</code></li>
        <li>Sistema de seguridad login<code>Symfony Security</code></li>
    </ul>
    
    <p>Enlace al repositorio con el proyecto</p>
     <code><a href=\"https://github.com/marc4919/Proyecto-Final-DAW\"> https://github.com/marc4919/Proyecto-Final-DAW</a></code>
     </div>
</div>
{% endblock %}
", "development_info/index.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/Proyecto-Final-DAW/apiMusical/templates/development_info/index.html.twig");
    }
}
