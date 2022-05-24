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

/* musical/show.html.twig */
class __TwigTemplate_eaa7846dc9fc8e1f1e02559c98a15df9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musical/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "musical/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Musical";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "    <h1>Musical</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 16, $this->source); })()), "Nombre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sinopsis</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 20, $this->source); })()), "Sinopsis", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cartel</th>
                <td><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 24, $this->source); })()), "Cartel", [], "any", false, false, false, 24), "html", null, true);
        echo "\"></img></td>
            </tr>
            <tr>
                <th>Año</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 28, $this->source); })()), "Anyo", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vídeo</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 32, $this->source); })()), "Video", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musical_index");
        echo "\">Volver a la lista - </a>
    
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musical_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">Editar</a>
    ";
        // line 40
        echo twig_include($this->env, $context, "musical/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "musical/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Musical{% endblock %}

{% block contenido %}
    <h1>Musical</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ musical.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ musical.Nombre }}</td>
            </tr>
            <tr>
                <th>Sinopsis</th>
                <td>{{ musical.Sinopsis }}</td>
            </tr>
            <tr>
                <th>Cartel</th>
                <td><img src=\"{{ musical.Cartel }}\"></img></td>
            </tr>
            <tr>
                <th>Año</th>
                <td>{{ musical.Anyo }}</td>
            </tr>
            <tr>
                <th>Vídeo</th>
                <td>{{ musical.Video }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_musical_index') }}\">Volver a la lista - </a>
    
    <a href=\"{{ path('app_musical_edit', {'id': musical.id}) }}\">Editar</a>
    {{ include('musical/_delete_form.html.twig') }}
{% endblock %}
", "musical/show.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/proyectoFinal/apiMusical/templates/musical/show.html.twig");
    }
}
