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

/* audio/show.html.twig */
class __TwigTemplate_f7e9b3fb248b3417ffe7245ffa512018 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audio/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "audio/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Audio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "    <h1>Audio</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Descripción</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 12, $this->source); })()), "Descripcion", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Musical</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 16, $this->source); })()), "Nombre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 20, $this->source); })()), "Tipo", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enlace</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 24, $this->source); })()), "Enlace", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reproducción</th>
                <td><audio src=\"/uploads/audios/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 28, $this->source); })()), "Enlace", [], "any", false, false, false, 28), "html", null, true);
        echo "\" preload=\"none\" controls></audio></td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audio_index");
        echo "\">Volver a la lista - </a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audio_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "audio/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "audio/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  122 => 35,  117 => 33,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Audio{% endblock %}

{% block contenido %}
    <h1>Audio</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Descripción</th>
                <td>{{ audio.Descripcion }}</td>
            </tr>
            <tr>
                <th>Musical</th>
                <td>{{ musical.Nombre }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ audio.Tipo }}</td>
            </tr>
            <tr>
                <th>Enlace</th>
                <td>{{ audio.Enlace }}</td>
            </tr>
            <tr>
                <th>Reproducción</th>
                <td><audio src=\"/uploads/audios/{{ audio.Enlace }}\" preload=\"none\" controls></audio></td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_audio_index') }}\">Volver a la lista - </a>

    <a href=\"{{ path('app_audio_edit', {'id': audio.id}) }}\">Editar</a>

    {{ include('audio/_delete_form.html.twig') }}
{% endblock %}
", "audio/show.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/Proyecto-Final-DAW/apiMusical/templates/audio/show.html.twig");
    }
}
