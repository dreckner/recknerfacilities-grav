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

/* location.html.twig */
class __TwigTemplate_d5f6a384d327da076327e34f06dae409ae2b45e5516c588ffdc86c3b64818b32 extends \Twig\Template
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
        $context["location"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "location", []);
        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "location.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content_section($context, array $blocks = [])
    {
        // line 6
        echo "  <div class=\"prose prose-page lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24\">
    <div class=\"md:flex gap-6 md:gap-12\">
      <article class=\"md:w-2/3\">
        ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

        <div class=\"w-full bg-gray-700 rounded mt-12 p-4 md:p-8 prose prose-invert prose-h3:mt-0 max-w-none\">
          <h3 class=\"!text-white\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["location"] ?? null), "name", []), "html", null, true);
        echo "</h3>
          <div class=\"flex gap-4\">
            <div class=\"spec-details w-2/3\">
                ";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, call_user_func_array($this->env->getFilter('shortcodes')->getCallable(), [$this->getAttribute(($context["location"] ?? null), "address", [])]));
        echo "
            </div>
            <div class=\"w-1/3\">
                <a class=\"btn btn__spec\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["location"] ?? null), "spec_sheet", []), [], "array"), "url", []), "html", null, true);
        echo "\" target=\"_blank\">Spec Sheets</a>
                <a class=\"btn btn__spec\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["location"] ?? null), "floor_plan", []), [], "array"), "url", []), "html", null, true);
        echo "\" target=\"_blank\">Floor Plan</a>
                <a class=\"btn btn__spec\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["location"] ?? null), "accommodations", []), [], "array"), "url", []), "html", null, true);
        echo "\" target=\"_blank\">Accommodations</a>
                <a class=\"btn btn__spec\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["location"] ?? null), "directions", []), [], "array"), "url", []), "html", null, true);
        echo "\" target=\"_blank\">Directions</a>
                <a class=\"btn btn__spec\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["location"] ?? null), "zip_codes", []), [], "array"), "url", []), "html", null, true);
        echo "\" target=\"_blank\">Zip Codes</a>
                <a class=\"btn btn__spec\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["location"] ?? null), "demographics", []), [], "array"), "url", []), "html", null, true);
        echo "\" target=\"_blank\">Demographics</a>
                <a class=\"btn btn__spec\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute(($context["location"] ?? null), "join_panel", [])), "html", null, true);
        echo "\" target=\"_blank\">Join Panel</a>
            </div>
          </div>
        </div>
      </article>
      <aside class=\"md:w-1/3 not-prose pt-16\">
        <div class=\"grid gap-6\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["location"] ?? null), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 32
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $context["image"], [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" class=\"rounded mx-auto\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
      </aside>
    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  106 => 32,  102 => 31,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  62 => 15,  56 => 12,  50 => 9,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
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

{% set location = page.header.location %}

{% block content_section %}
  <div class=\"prose prose-page lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24\">
    <div class=\"md:flex gap-6 md:gap-12\">
      <article class=\"md:w-2/3\">
        {{ page.content|raw }}

        <div class=\"w-full bg-gray-700 rounded mt-12 p-4 md:p-8 prose prose-invert prose-h3:mt-0 max-w-none\">
          <h3 class=\"!text-white\">{{ location.name }}</h3>
          <div class=\"flex gap-4\">
            <div class=\"spec-details w-2/3\">
                {{ location.address|shortcodes|markdown }}
            </div>
            <div class=\"w-1/3\">
                <a class=\"btn btn__spec\" href=\"{{ page.media[location.spec_sheet].url }}\" target=\"_blank\">Spec Sheets</a>
                <a class=\"btn btn__spec\" href=\"{{ page.media[location.floor_plan].url }}\" target=\"_blank\">Floor Plan</a>
                <a class=\"btn btn__spec\" href=\"{{ page.media[location.accommodations].url }}\" target=\"_blank\">Accommodations</a>
                <a class=\"btn btn__spec\" href=\"{{ page.media[location.directions].url }}\" target=\"_blank\">Directions</a>
                <a class=\"btn btn__spec\" href=\"{{ page.media[location.zip_codes].url }}\" target=\"_blank\">Zip Codes</a>
                <a class=\"btn btn__spec\" href=\"{{ page.media[location.demographics].url }}\" target=\"_blank\">Demographics</a>
                <a class=\"btn btn__spec\" href=\"{{ url(location.join_panel) }}\" target=\"_blank\">Join Panel</a>
            </div>
          </div>
        </div>
      </article>
      <aside class=\"md:w-1/3 not-prose pt-16\">
        <div class=\"grid gap-6\">
        {% for image in location.images %}
        <img src=\"{{ page.media[image].url }}\" alt=\"{{ image }}\" class=\"rounded mx-auto\" />
        {% endfor %}
        </div>
      </aside>
    </div>

</div>

{% endblock %}", "location.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/location.html.twig");
    }
}
