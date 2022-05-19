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

/* @Dropzone/form_theme.html.twig */
class __TwigTemplate_cbf4d80a11da076e6d240e5f20710293 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dropzone_widget' => [$this, 'block_dropzone_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Dropzone/form_theme.html.twig"));

        // line 1
        $this->displayBlock('dropzone_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_dropzone_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropzone_widget"));

        // line 2
        $context["dataController"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-controller", [], "array", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-controller", [], "array", false, false, false, 2), "")) : ("")) . " symfony--ux-dropzone--dropzone"));
        // line 3
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 3, $this->source); })()), ["data-controller" => "", "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 3), "")) : ("")) . " dropzone-input"))]);
        // line 5
        echo "<div class=\"dropzone-container\" data-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["dataController"]) || array_key_exists("dataController", $context) ? $context["dataController"] : (function () { throw new RuntimeError('Variable "dataController" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
        <input type=\"file\" ";
        // line 6
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " data-symfony--ux-dropzone--dropzone-target=\"input\" />

        <div class=\"dropzone-placeholder\" data-symfony--ux-dropzone--dropzone-target=\"placeholder\">";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 9, $this->source); })()), "placeholder", [], "any", false, false, false, 9)))) {
            // line 10
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })()) === false)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), "placeholder", [], "any", false, false, false, 10)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), "placeholder", [], "any", false, false, false, 10), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })())))), "html", null, true);
        }
        // line 12
        echo "</div>

        <div class=\"dropzone-preview\" data-symfony--ux-dropzone--dropzone-target=\"preview\" style=\"display: none\">
            <button class=\"dropzone-preview-button\" type=\"button\"
                    data-symfony--ux-dropzone--dropzone-target=\"previewClearButton\"></button>

            <div class=\"dropzone-preview-image\" style=\"display: none\"
                 data-symfony--ux-dropzone--dropzone-target=\"previewImage\"></div>

            <div data-symfony--ux-dropzone--dropzone-target=\"previewFilename\" class=\"dropzone-preview-filename\"></div>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Dropzone/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  70 => 10,  68 => 9,  63 => 6,  58 => 5,  56 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block dropzone_widget -%}
    {%- set dataController = (attr['data-controller']|default('') ~ ' symfony--ux-dropzone--dropzone')|trim -%}
    {%- set attr = attr|merge({ 'data-controller': '', class: (attr.class|default('') ~ ' dropzone-input')|trim}) -%}

    <div class=\"dropzone-container\" data-controller=\"{{ dataController }}\">
        <input type=\"file\" {{ block('widget_attributes') }} data-symfony--ux-dropzone--dropzone-target=\"input\" />

        <div class=\"dropzone-placeholder\" data-symfony--ux-dropzone--dropzone-target=\"placeholder\">
            {%- if attr.placeholder is defined and attr.placeholder is not none -%}
                {{- translation_domain is same as(false) ? attr.placeholder : attr.placeholder|trans({}, translation_domain) -}}
            {%- endif -%}
        </div>

        <div class=\"dropzone-preview\" data-symfony--ux-dropzone--dropzone-target=\"preview\" style=\"display: none\">
            <button class=\"dropzone-preview-button\" type=\"button\"
                    data-symfony--ux-dropzone--dropzone-target=\"previewClearButton\"></button>

            <div class=\"dropzone-preview-image\" style=\"display: none\"
                 data-symfony--ux-dropzone--dropzone-target=\"previewImage\"></div>

            <div data-symfony--ux-dropzone--dropzone-target=\"previewFilename\" class=\"dropzone-preview-filename\"></div>
        </div>
    </div>
{%- endblock %}
", "@Dropzone/form_theme.html.twig", "/Users/marc/MEGA/MEGAsync/upside down/proyectoFinal/apiMusical/vendor/symfony/ux-dropzone/Resources/views/form_theme.html.twig");
    }
}
