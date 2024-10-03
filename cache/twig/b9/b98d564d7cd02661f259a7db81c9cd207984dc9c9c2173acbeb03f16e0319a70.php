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

/* field-management.html.twig */
class __TwigTemplate_9cfc4d3afa81adb22563b5b5039932952f6b19c47a7205043a37164b15d16aed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content_section' => [$this, 'block_content_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["features"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []);
        // line 4
        $context["blocks"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "blocks", []);
        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "field-management.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content_section($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"prose prose-page lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24\">
    <div class=\"md:flex gap-6 md:gap-12\">
      <article class=\"\">
        ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </article>
    </div>

    <div class=\"flex my-12\">

            <div class=\"md:flex gap-6 md:gap-12\">
                <div class=\"md:w-1/2\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 19
            echo "                    <div>
                        <h3 class=\"!text-secondary-500 !my-0\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "title", []), "html", null, true);
            echo "</h3>
                        ";
            // line 21
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["feature"], "text", []));
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
                <div class=\"md:w-1/2 \">
                    <div class=\"grid grid-cols-2 gap-2 md:gap-4\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 28
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "classes", []), "html", null, true);
            echo " border border-gray-300 rounded-lg p-2 md:p-4\">
                            <h4 class=\"!text-primary-500 !my-0\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", []), "html", null, true);
            echo "</h4>
                            ";
            // line 30
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["block"], "text", []));
            echo "
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </div>
                </div>
            </div>
    </div>

    <div class=\"text-center\">
        <img class=\"max-w-4xl mx-auto\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), "html", null, true);
        echo "\" />
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "field-management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  110 => 33,  101 => 30,  97 => 29,  92 => 28,  88 => 27,  83 => 24,  74 => 21,  70 => 20,  67 => 19,  63 => 18,  52 => 10,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default.html.twig' %}

{% set features = page.header.features %}
{% set blocks = page.header.blocks %}

{% block content_section %}
<div class=\"prose prose-page lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24\">
    <div class=\"md:flex gap-6 md:gap-12\">
      <article class=\"\">
        {{ page.content|raw }}
      </article>
    </div>

    <div class=\"flex my-12\">

            <div class=\"md:flex gap-6 md:gap-12\">
                <div class=\"md:w-1/2\">
                    {% for feature in features %}
                    <div>
                        <h3 class=\"!text-secondary-500 !my-0\">{{ feature.title }}</h3>
                        {{ feature.text|markdown }}
                    </div>
                    {% endfor %}
                </div>
                <div class=\"md:w-1/2 \">
                    <div class=\"grid grid-cols-2 gap-2 md:gap-4\">
                        {% for block in blocks %}
                        <div class=\"{{ block.classes }} border border-gray-300 rounded-lg p-2 md:p-4\">
                            <h4 class=\"!text-primary-500 !my-0\">{{ block.title }}</h4>
                            {{ block.text|markdown }}
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
    </div>

    <div class=\"text-center\">
        <img class=\"max-w-4xl mx-auto\" src=\"{{ page.media[page.header.image].url }}\" alt=\"{{ page.header.image }}\" />
    </div>
</div>

{% endblock %}", "field-management.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/field-management.html.twig");
    }
}
