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

/* about.html.twig */
class __TwigTemplate_6c9326a59b7e679798a2d393132599f53f575185ce80de5dca054f3ce1f6c104 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_section($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"prose prose-content lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24 prose-h2:mb-0\">
  <article>
    ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
  </article>
  <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-16\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "industries", []));
        foreach ($context['_seq'] as $context["_key"] => $context["industry"]) {
            // line 10
            echo "      <div class=\"transition hover:bg-gray-100 rounded p-2 text-center\">
        <img class=\"mx-auto !my-0\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["industry"], "img", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["industry"], "text", []), "html", null, true);
            echo " image\"/>
        <h4 class=\"text-primary-500 font-bold text-lg md:text-xl lg:text-2xl !mt-0\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["industry"], "text", []), "html", null, true);
            echo "</h4>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['industry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </div>
  ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button", []), "text", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button", []), "link", []))) {
            // line 17
            echo "  <div class=\"section__button my-16 text-center\">
     <a class=\"btn btn__big mx-auto\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button", []), "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button", []), "text", []), "html", null, true);
            echo "</a>
  </div>
  ";
        }
        // line 21
        echo "  <div class=\"section__meet border-t mt-8 \">
    <div class=\"mb-8\">
      <h2 class=\"\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "people", []), "title", []), "html", null, true);
        echo "</h2>
      <h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "people", []), "subtitle", []), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"grid gap-8\">
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "people", []), "staff", []));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 28
            echo "      <div class=\"sm:flex gap-8 md:gap-16 text-center sm:text-left\">
        <div class=\"flex-shrink-0 \">
          <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["person"], "image", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", []), "html", null, true);
            echo "\"
               class=\"shadow-2xl w-32 md:w-40 lg:w-48 !my-0 rounded mx-auto\" />
        </div>
        <div class=\"\">
          <h3 class=\"!mt-0 !mb-0 text-primary-500 font-bold\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", []), "html", null, true);
            echo "</h3>
          <h5 class=\"uppercase text-gray-600\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "title", []), "html", null, true);
            echo "</h5>
          <div class=\"text-left\">
          ";
            // line 37
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["person"], "bio", []));
            echo "
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  130 => 37,  125 => 35,  121 => 34,  112 => 30,  108 => 28,  104 => 27,  98 => 24,  94 => 23,  90 => 21,  82 => 18,  79 => 17,  77 => 16,  74 => 15,  65 => 12,  59 => 11,  56 => 10,  52 => 9,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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

{% block content_section %}
<div class=\"prose prose-content lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24 prose-h2:mb-0\">
  <article>
    {{ page.content|raw }}
  </article>
  <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-16\">
    {% for industry in page.header.industries %}
      <div class=\"transition hover:bg-gray-100 rounded p-2 text-center\">
        <img class=\"mx-auto !my-0\" src=\"{{ page.media[industry.img].url }}\" alt=\"{{ industry.text }} image\"/>
        <h4 class=\"text-primary-500 font-bold text-lg md:text-xl lg:text-2xl !mt-0\">{{ industry.text }}</h4>
      </div>
    {% endfor %}
  </div>
  {% if page.header.button.text and page.header.button.link %}
  <div class=\"section__button my-16 text-center\">
     <a class=\"btn btn__big mx-auto\" href=\"{{ page.header.button.link }}\">{{ page.header.button.text }}</a>
  </div>
  {% endif %}
  <div class=\"section__meet border-t mt-8 \">
    <div class=\"mb-8\">
      <h2 class=\"\">{{ page.header.people.title }}</h2>
      <h3>{{ page.header.people.subtitle }}</h3>
    </div>
    <div class=\"grid gap-8\">
      {% for person in page.header.people.staff %}
      <div class=\"sm:flex gap-8 md:gap-16 text-center sm:text-left\">
        <div class=\"flex-shrink-0 \">
          <img src=\"{{ page.media[person.image].url }}\" alt=\"{{ person.name }}\"
               class=\"shadow-2xl w-32 md:w-40 lg:w-48 !my-0 rounded mx-auto\" />
        </div>
        <div class=\"\">
          <h3 class=\"!mt-0 !mb-0 text-primary-500 font-bold\">{{ person.name }}</h3>
          <h5 class=\"uppercase text-gray-600\">{{ person.title }}</h5>
          <div class=\"text-left\">
          {{ person.bio|markdown }}
          </div>
        </div>
      </div>
      {% endfor %}
    </div>
  </div>
</div>
{% endblock %}", "about.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/about.html.twig");
    }
}
