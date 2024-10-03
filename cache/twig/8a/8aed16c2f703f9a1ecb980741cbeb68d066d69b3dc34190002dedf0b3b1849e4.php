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

/* error.html.twig */
class __TwigTemplate_5d339fef8e0cd5b7e18a28e281b8af0549853de3c3169c47f2d7539579796c15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"wrapper grid items-center h-[calc(100vh_-_19rem)]\">
    <div class=\"text-center\">
        <h1 class=\"text-4xl font-bold md:text-6xl text-white\"><span class=\"text-primary-200 text-7xl md:text-9xl font-black\">404</span><br/>Page Not Found</h1>
        ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"wrapper grid items-center h-[calc(100vh_-_19rem)]\">
    <div class=\"text-center\">
        <h1 class=\"text-4xl font-bold md:text-6xl text-white\"><span class=\"text-primary-200 text-7xl md:text-9xl font-black\">404</span><br/>Page Not Found</h1>
        {{ page.content|raw }}
    </div>
</div>
{% endblock %}
", "error.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/error.html.twig");
    }
}
