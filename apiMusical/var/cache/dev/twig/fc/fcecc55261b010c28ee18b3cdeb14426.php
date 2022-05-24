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

/* musical/_delete_form.html.twig */
class __TwigTemplate_2838e1231e1d81c76c89e2c420b424d1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musical/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musical_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["musical"]) || array_key_exists("musical", $context) ? $context["musical"] : (function () { throw new RuntimeError('Variable "musical" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <br><button type=\"button\" class=\"btn btn-outline-danger\">Eliminar</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "musical/_delete_form.html.twig";
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
        return new Source("<form method=\"post\" action=\"{{ path('app_musical_delete', {'id': musical.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ musical.id) }}\">
    <br><button type=\"button\" class=\"btn btn-outline-danger\">Eliminar</button>
</form>
", "musical/_delete_form.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/proyectoFinal/apiMusical/templates/musical/_delete_form.html.twig");
    }
}
