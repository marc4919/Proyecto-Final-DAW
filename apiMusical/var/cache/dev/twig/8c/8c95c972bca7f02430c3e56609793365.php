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

/* participante/show.html.twig */
class __TwigTemplate_8f31b5d00dc5b2d964652c540b678143 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participante/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "participante/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Participante";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "    <h1>Participante</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participante"]) || array_key_exists("participante", $context) ? $context["participante"] : (function () { throw new RuntimeError('Variable "participante" does not exist.', 12, $this->source); })()), "Nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participante"]) || array_key_exists("participante", $context) ? $context["participante"] : (function () { throw new RuntimeError('Variable "participante" does not exist.', 16, $this->source); })()), "Apellidos", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_index");
        echo "\">Volver a la lista - </a>

    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participante_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["participante"]) || array_key_exists("participante", $context) ? $context["participante"] : (function () { throw new RuntimeError('Variable "participante" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">Editar - </a>
    <a href=\"#lista\" data-toggle=\"collapse\" aria-expanded=\"false\">Musicales Participados</a>
    <table class=\"table collapse\" id=\"lista\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sinopsis</th>
                <th>Año</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["musicals"]) || array_key_exists("musicals", $context) ? $context["musicals"] : (function () { throw new RuntimeError('Variable "musicals" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["musical"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musical"], "Nombre", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musical"], "Sinopsis", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musical"], "Anyo", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musical_show", ["id" => twig_get_attribute($this->env, $this->source, $context["musical"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z\"/></svg></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr>
                <td colspan=\"7\">No hay resultados disponibles</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    ";
        // line 52
        echo twig_include($this->env, $context, "participante/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "participante/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  155 => 49,  146 => 45,  137 => 41,  132 => 39,  128 => 38,  124 => 37,  121 => 36,  116 => 35,  101 => 23,  96 => 21,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Participante{% endblock %}

{% block contenido %}
    <h1>Participante</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{ participante.Nombre }}</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>{{ participante.Apellidos }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_participante_index') }}\">Volver a la lista - </a>

    <a href=\"{{ path('app_participante_edit', {'id': participante.id}) }}\">Editar - </a>
    <a href=\"#lista\" data-toggle=\"collapse\" aria-expanded=\"false\">Musicales Participados</a>
    <table class=\"table collapse\" id=\"lista\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sinopsis</th>
                <th>Año</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        {% for musical in musicals %}
            <tr>
                <td>{{ musical.Nombre }}</td>
                <td>{{ musical.Sinopsis }}</td>
                <td>{{ musical.Anyo }}</td>
                <td>
                    <a href=\"{{ path('app_musical_show', {'id': musical.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z\"/></svg></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">No hay resultados disponibles</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {{ include('participante/_delete_form.html.twig') }}
{% endblock %}
", "participante/show.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/Proyecto-Final-DAW/apiMusical/templates/participante/show.html.twig");
    }
}
