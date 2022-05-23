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

/* security/login.html.twig */
class __TwigTemplate_b1989c1c683938016cab36b60759a28c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!doctype html>
<html lang=\"es\">
  <head>
  \t<title>Login 01</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t<link rel=\"stylesheet\" href=\"css/style.css\">

\t</head>
\t<body>
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 text-center mb-5\">
\t\t\t\t\t<h2 class=\"heading-section\">Musical IES L'OM Admin-Panel</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-7 col-lg-5\">
\t\t\t\t\t<div class=\"login-wrap p-4 p-md-5\" style=\"box-shadow:0px 10px 34px -15px rgba(0, 0, 0, 0.24)\">
\t\t      \t<div class=\"icon d-flex align-items-center justify-content-center\" style=\"width: 80px;
color: white;
height: 80px;
background: #866ec7;
border-radius: 50%;
font-size: 30px;
margin: 0 auto;
margin-bottom: 10px;\">
\t\t      \t\t<span class=\"fa fa-user-o\"></span>
\t\t      \t</div>
\t\t      \t<h3 class=\"text-center mb-4\">Iniciar Sesión</h3>
\t\t\t\t\t\t<form method=\"post\" class=\"login-form\">
                        ";
        // line 44
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 47
        echo "\t\t      \t\t<div class=\"form-group\">
\t\t      \t\t\t<input type=\"text\" class=\"form-control rounded-left\" placeholder=\"Username\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" requautocomplete=\"username\" autocomplete=\"username\" required autofocus>
\t\t      \t\t</div>
\t            <div class=\"form-group d-flex\">
\t              <input type=\"password\" class=\"form-control rounded-left\" placeholder=\"Password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required>
\t            </div>
                <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
\t            <div class=\"form-group\">
\t            \t<button type=\"submit\" style=\"color:white\" class=\"form-control btn btn-primary rounded submit px-3\">Login</button>
\t            </div>
                
\t            <div class=\"form-group d-md-flex\">
\t            \t<div class=\"w-50\">
\t            \t\t<label class=\"checkbox-wrap checkbox-primary\">Remember Me
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t  <span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t            </div>
\t          </form>
\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<script src=\"js/jquery.min.js\"></script>
  <script src=\"js/popper.js\"></script>
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/main.js\"></script>

\t</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  124 => 48,  121 => 47,  115 => 45,  113 => 44,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}

<!doctype html>
<html lang=\"es\">
  <head>
  \t<title>Login 01</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t<link rel=\"stylesheet\" href=\"css/style.css\">

\t</head>
\t<body>
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 text-center mb-5\">
\t\t\t\t\t<h2 class=\"heading-section\">Musical IES L'OM Admin-Panel</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-7 col-lg-5\">
\t\t\t\t\t<div class=\"login-wrap p-4 p-md-5\" style=\"box-shadow:0px 10px 34px -15px rgba(0, 0, 0, 0.24)\">
\t\t      \t<div class=\"icon d-flex align-items-center justify-content-center\" style=\"width: 80px;
color: white;
height: 80px;
background: #866ec7;
border-radius: 50%;
font-size: 30px;
margin: 0 auto;
margin-bottom: 10px;\">
\t\t      \t\t<span class=\"fa fa-user-o\"></span>
\t\t      \t</div>
\t\t      \t<h3 class=\"text-center mb-4\">Iniciar Sesión</h3>
\t\t\t\t\t\t<form method=\"post\" class=\"login-form\">
                        {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
\t\t      \t\t<div class=\"form-group\">
\t\t      \t\t\t<input type=\"text\" class=\"form-control rounded-left\" placeholder=\"Username\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" requautocomplete=\"username\" autocomplete=\"username\" required autofocus>
\t\t      \t\t</div>
\t            <div class=\"form-group d-flex\">
\t              <input type=\"password\" class=\"form-control rounded-left\" placeholder=\"Password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required>
\t            </div>
                <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
\t            <div class=\"form-group\">
\t            \t<button type=\"submit\" style=\"color:white\" class=\"form-control btn btn-primary rounded submit px-3\">Login</button>
\t            </div>
                
\t            <div class=\"form-group d-md-flex\">
\t            \t<div class=\"w-50\">
\t            \t\t<label class=\"checkbox-wrap checkbox-primary\">Remember Me
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t  <span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t            </div>
\t          </form>
\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<script src=\"js/jquery.min.js\"></script>
  <script src=\"js/popper.js\"></script>
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/main.js\"></script>

\t</body>
</html>

{% endblock %}
", "security/login.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/proyectoFinal/apiMusical/templates/security/login.html.twig");
    }
}
