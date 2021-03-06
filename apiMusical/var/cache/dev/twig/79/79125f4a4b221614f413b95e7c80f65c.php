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

/* audio/_delete_form.html.twig */
class __TwigTemplate_e1c6ed4e8654eefba91c58be79bbc70d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audio/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audio_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Seguro que deseas eliminar?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
     <br><button type=\"btn\" class=\"btn btn-outline-danger\">Eliminar</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "audio/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_audio_delete', {'id': audio.id}) }}\" onsubmit=\"return confirm('Seguro que deseas eliminar?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ audio.id) }}\">
     <br><button type=\"btn\" class=\"btn btn-outline-danger\">Eliminar</button>
</form>
", "audio/_delete_form.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/Proyecto-Final-DAW/apiMusical/templates/audio/_delete_form.html.twig");
    }
}
