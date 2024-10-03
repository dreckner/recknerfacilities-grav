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

/* default.html.twig */
class __TwigTemplate_ab32c49d48e5200039403247c7a3e61c0e185ec88fb5a64757371829ff812a7c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'header_hero' => [$this, 'block_header_hero'],
            'content_section' => [$this, 'block_content_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<section class=\"";
        echo twig_escape_filter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["x_padding_classes"] ?? null), "html", null, true);
        echo " relative\">
  ";
        // line 5
        $this->displayBlock('header_hero', $context, $blocks);
        // line 14
        echo "  ";
        $this->displayBlock('content_section', $context, $blocks);
        // line 19
        echo "</section>
";
    }

    // line 5
    public function block_header_hero($context, array $blocks = [])
    {
        // line 6
        echo "  <div class=\"h-[350px] relative\">
    <img class=\"absolute inset-0 object-cover object-center w-full h-full\"
         src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bg", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"Hero Background\" />
    <img class=\"absolute bottom-0 -mb-[3.5%] w-full object-cover object-right \"
         src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/header-graphic-w-logo.svg"), "html", null, true);
        echo "\" alt=\"Overlay Graphic\" />
    <h1 class=\"absolute tracking-tight  left-4 md:left-8 lg:left-16 bottom-0 text-white font-bold drop-shadow-lg text-5xl md:text-6xl lg:text-7xl\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
  </div>
  ";
    }

    // line 14
    public function block_content_section($context, array $blocks = [])
    {
        // line 15
        echo "  <div class=\"prose prose-content lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 py-12 md:py-24 prose-h2:mb-0\">
    ";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  87 => 15,  84 => 14,  77 => 11,  73 => 10,  68 => 8,  64 => 6,  61 => 5,  56 => 19,  53 => 14,  51 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
<section class=\"{{ container_classes }} {{ x_padding_classes }} relative\">
  {% block header_hero %}
  <div class=\"h-[350px] relative\">
    <img class=\"absolute inset-0 object-cover object-center w-full h-full\"
         src=\"{{ page.media[page.header.bg].url }}\" alt=\"Hero Background\" />
    <img class=\"absolute bottom-0 -mb-[3.5%] w-full object-cover object-right \"
         src=\"{{ url('theme://images/header-graphic-w-logo.svg') }}\" alt=\"Overlay Graphic\" />
    <h1 class=\"absolute tracking-tight  left-4 md:left-8 lg:left-16 bottom-0 text-white font-bold drop-shadow-lg text-5xl md:text-6xl lg:text-7xl\">{{ page.title }}</h1>
  </div>
  {% endblock %}
  {% block content_section %}
  <div class=\"prose prose-content lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 py-12 md:py-24 prose-h2:mb-0\">
    {{ page.content|raw }}
  </div>
  {% endblock %}
</section>
{% endblock %}
", "default.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/default.html.twig");
    }
}
