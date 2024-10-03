<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/theme-variables.html.twig */
class __TwigTemplate_b5513d1cd4f0449c4958c2e4b324be4e7a32b35c657a9705f2b880a183b9188d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'render_body' => [$this, 'block_render_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["debugger_enabled"] = twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "debugger", []), "enabled", []));
        // line 2
        $context["prose_style"] = "prose prose-lg";
        // line 3
        $context["container_classes"] = "container max-w-screen-xl mx-auto";
        // line 4
        $context["x_padding_classes"] = "px-4 md:px-8";
        // line 5
        $context["roundedness"] = "rounded-xl";
        // line 6
        $context["gapness"] = "gap-6";
        // line 7
        $this->displayBlock('render_body', $context, $blocks);
    }

    public function block_render_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/theme-variables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set debugger_enabled = config.system.debugger.enabled|e %}
{% set prose_style = 'prose prose-lg' %}
{% set container_classes = 'container max-w-screen-xl mx-auto' %}
{% set x_padding_classes = 'px-4 md:px-8' %}
{% set roundedness = 'rounded-xl' %}
{% set gapness = 'gap-6' %}
{% block render_body %}{% endblock %}", "partials/theme-variables.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/theme-variables.html.twig");
    }
}
