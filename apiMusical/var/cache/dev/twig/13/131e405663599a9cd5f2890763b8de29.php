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

/* participante/index.html.twig */
class __TwigTemplate_f0f323dcf569fe362e99c02c205e413f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participante/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "participante/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Participante index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "   <h2 class=\"mb-4\">Participantes</h2>
    <div class=\"container-fluid\"> 
    \t\t<div class=\"row w-100 align-items-center\">
    \t\t\t<div class=\"col text-center\">
    \t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_pdfAction");
        echo "\"><button class=\"btn btn-primary regular-button\"> Imprimir </button></a>
    \t\t\t</div>\t
    \t\t</div>
    
    
    \t</div>
     <button type=\"button\" class=\"btn btn-light\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_new");
        echo "\">+ A??adir Participante</a></button>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participantes"]) || array_key_exists("participantes", $context) ? $context["participantes"] : (function () { throw new RuntimeError('Variable "participantes" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participante"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participante"], "Nombre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participante"], "Apellidos", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participante"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z\"/></svg></a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["participante"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M14.078 7.061l2.861 2.862-10.799 10.798-3.584.723.724-3.585 10.798-10.798zm0-2.829l-12.64 12.64-1.438 7.128 7.127-1.438 12.642-12.64-5.691-5.69zm7.105 4.277l2.817-2.82-5.691-5.689-2.816 2.817 5.69 5.692z\"/></svg></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"4\">No hay resultados disponibles</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

     <button type=\"button\" class=\"btn btn-light\"><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_new");
        echo "\">+ A??adir Participante</a></button>
    </br>
    <div class=\"container-fluid\"> 
    \t\t<div class=\"row w-100 align-items-center\">
    \t\t\t<div class=\"col text-center\">
    \t\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_pdfAction");
        echo "\"><button class=\"btn btn-primary regular-button\"> Imprimir </button></a>
    \t\t\t</div>\t
    \t\t</div>
    
    
    \t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "participante/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  145 => 43,  140 => 40,  131 => 36,  122 => 32,  118 => 31,  113 => 29,  109 => 28,  106 => 27,  101 => 26,  88 => 16,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Participante index{% endblock %}

{% block contenido %}
   <h2 class=\"mb-4\">Participantes</h2>
    <div class=\"container-fluid\"> 
    \t\t<div class=\"row w-100 align-items-center\">
    \t\t\t<div class=\"col text-center\">
    \t\t\t\t<a href=\"{{ path('app_participante_pdfAction') }}\"><button class=\"btn btn-primary regular-button\"> Imprimir </button></a>
    \t\t\t</div>\t
    \t\t</div>
    
    
    \t</div>
     <button type=\"button\" class=\"btn btn-light\"><a href=\"{{ path('app_participante_new') }}\">+ A??adir Participante</a></button>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        {% for participante in participantes %}
            <tr>
                <td>{{ participante.Nombre }}</td>
                <td>{{ participante.Apellidos }}</td>
                <td>
                    <a href=\"{{ path('app_participante_show', {'id': participante.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z\"/></svg></a>
                    <a href=\"{{ path('app_participante_edit', {'id': participante.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M14.078 7.061l2.861 2.862-10.799 10.798-3.584.723.724-3.585 10.798-10.798zm0-2.829l-12.64 12.64-1.438 7.128 7.127-1.438 12.642-12.64-5.691-5.69zm7.105 4.277l2.817-2.82-5.691-5.689-2.816 2.817 5.69 5.692z\"/></svg></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">No hay resultados disponibles</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

     <button type=\"button\" class=\"btn btn-light\"><a href=\"{{ path('app_participante_new') }}\">+ A??adir Participante</a></button>
    </br>
    <div class=\"container-fluid\"> 
    \t\t<div class=\"row w-100 align-items-center\">
    \t\t\t<div class=\"col text-center\">
    \t\t\t\t<a href=\"{{ path('app_participante_pdfAction') }}\"><button class=\"btn btn-primary regular-button\"> Imprimir </button></a>
    \t\t\t</div>\t
    \t\t</div>
    
    
    \t</div>
{% endblock %}
", "participante/index.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/Proyecto-Final-DAW/apiMusical/templates/participante/index.html.twig");
    }
}
