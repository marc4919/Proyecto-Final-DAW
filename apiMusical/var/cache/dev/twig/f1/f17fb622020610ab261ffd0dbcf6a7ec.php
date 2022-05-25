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
                <th>Nombre</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 12, $this->source); })()), "Nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sinopsis</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 16, $this->source); })()), "Sinopsis", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cartel</th>
                <td><img style=\"width:300px\" src=\"/uploads/carteles/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 20, $this->source); })()), "Cartel", [], "any", false, false, false, 20), "html", null, true);
        echo "\"></img></td>
            </tr>
            <tr>
                <th>Año</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 24, $this->source); })()), "Anyo", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vídeo</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 28, $this->source); })()), "Video", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musical_index");
        echo "\">Volver a la lista - </a>
    
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musical_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">Editar - </a>
<a href=\"#lista\" data-toggle=\"collapse\" aria-expanded=\"false\">Mostrar Participantes</a>
<br>
    <table class=\"table collapse\" id=\"lista\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participantes"]) || array_key_exists("participantes", $context) ? $context["participantes"] : (function () { throw new RuntimeError('Variable "participantes" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participante"]) {
            // line 47
            echo "            <tr>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participante"], "Nombre", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participante"], "Apellidos", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participante"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z\"/></svg></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
    ";
        // line 61
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
        return array (  175 => 61,  171 => 59,  162 => 55,  153 => 51,  148 => 49,  144 => 48,  141 => 47,  136 => 46,  121 => 34,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                <th>Nombre</th>
                <td>{{ musical.Nombre }}</td>
            </tr>
            <tr>
                <th>Sinopsis</th>
                <td>{{ musical.Sinopsis }}</td>
            </tr>
            <tr>
                <th>Cartel</th>
                <td><img style=\"width:300px\" src=\"/uploads/carteles/{{ musical.Cartel }}\"></img></td>
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
    
    <a href=\"{{ path('app_musical_edit', {'id': musical.id}) }}\">Editar - </a>
<a href=\"#lista\" data-toggle=\"collapse\" aria-expanded=\"false\">Mostrar Participantes</a>
<br>
    <table class=\"table collapse\" id=\"lista\">
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
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {{ include('musical/_delete_form.html.twig') }}
{% endblock %}
", "musical/show.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/Proyecto-Final-DAW/apiMusical/templates/musical/show.html.twig");
    }
}
