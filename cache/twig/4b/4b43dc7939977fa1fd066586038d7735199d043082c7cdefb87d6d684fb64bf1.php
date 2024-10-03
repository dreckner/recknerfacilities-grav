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

/* modular/intro.html.twig */
class __TwigTemplate_3c6d0b9b3fc1feca8b7c1cb08e5dbfdde3e226439566e8df6bbb498d8938585e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'render_body' => [$this, 'block_render_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "modular/partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["intro"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "intro", []);
        // line 1
        $this->parent = $this->loadTemplate("modular/partials/base.html.twig", "modular/intro.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_render_body($context, array $blocks = [])
    {
        // line 6
        echo "<section class=\"";
        echo twig_escape_filter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        echo " relative py-12 px-8\">
  <img class=\"absolute inset-0 -top-4 bottom-0 h-full object-cover \" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["intro"] ?? null), "bg", []), [], "array"), "url", []), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "\" />
  <div class=\"\">
    <div class=\"text-center relative\">
      <h1 class=\"absolute top-0 left-1/2 leading-[.9] -translate-x-1/2 text-black/0 text-[100px] sm:text-[120px] md:text-[140px] lg:text-[180px] text-black font-black\">reckner</h1>
      <img class=\"!h-[150px] mx-auto\"
           src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/reckner-header.svg"), "html", null, true);
        echo "\" alt=\"Reckner Facilities\" />
      <div class=\"flex items-center text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl my-12 -mx-8\">
        <div class=\"flex-1 grid items-center\">
          <div class=\"bg-gray-800 p-4 pr-12 w-full text-balance text-right\">
            <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intro"] ?? null), "text_1", []), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"z-[1] reckner-symbol bg-gray-800 rounded-full grid items-center justify-center -mx-4\">
          <img class=\"-mt-2\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/symbol.svg"), "html", null, true);
        echo "\" alt=\"Recker Symbol\" />
        </div>
        <div class=\"flex-1 grid items-center\">
          <div class=\"bg-gray-800 p-4 pl-12 w-full text-balance text-left\">
            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intro"] ?? null), "text_2", []), "html", null, true);
        echo "</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"text-center relative\">
    <h2 class=\"text-2xl md:text-3xl font-medium text-balance max-w-screen-sm mx-auto\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intro"] ?? null), "slide_text", []), "html", null, true);
        echo "</h2>

    <div class=\"max-w-screen-lg mx-auto my-12\">
      <!-- Slider main container -->
      <div class=\"swiper\">
        <!-- Additional required wrapper -->
        <div class=\"swiper-wrapper pb-4\">
          <!-- Slides -->
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["intro"] ?? null), "slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 40
            echo "          <div class=\"swiper-slide relative rounded overflow-hidden\">
            <img class=\"intro-image\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["slide"], "image", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"slide.title\" />
            <div class=\"intro-label\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", []), "html", null, true);
            echo "</div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
        <div class=\"swiper-pagination\"></div>
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
    </div>

  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  113 => 42,  109 => 41,  106 => 40,  102 => 39,  91 => 31,  81 => 24,  74 => 20,  67 => 16,  60 => 12,  50 => 7,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'modular/partials/base.html.twig' %}

{% set intro = page.header.intro %}

{% block render_body %}
<section class=\"{{ container_classes }} relative py-12 px-8\">
  <img class=\"absolute inset-0 -top-4 bottom-0 h-full object-cover \" src=\"{{ page.media[intro.bg].url }}\"  alt=\"{{ page.title }}\" />
  <div class=\"\">
    <div class=\"text-center relative\">
      <h1 class=\"absolute top-0 left-1/2 leading-[.9] -translate-x-1/2 text-black/0 text-[100px] sm:text-[120px] md:text-[140px] lg:text-[180px] text-black font-black\">reckner</h1>
      <img class=\"!h-[150px] mx-auto\"
           src=\"{{ url('theme://images/reckner-header.svg') }}\" alt=\"Reckner Facilities\" />
      <div class=\"flex items-center text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl my-12 -mx-8\">
        <div class=\"flex-1 grid items-center\">
          <div class=\"bg-gray-800 p-4 pr-12 w-full text-balance text-right\">
            <span>{{ intro.text_1 }}</span>
          </div>
        </div>
        <div class=\"z-[1] reckner-symbol bg-gray-800 rounded-full grid items-center justify-center -mx-4\">
          <img class=\"-mt-2\" src=\"{{ url('theme://images/symbol.svg') }}\" alt=\"Recker Symbol\" />
        </div>
        <div class=\"flex-1 grid items-center\">
          <div class=\"bg-gray-800 p-4 pl-12 w-full text-balance text-left\">
            <span>{{ intro.text_2 }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"text-center relative\">
    <h2 class=\"text-2xl md:text-3xl font-medium text-balance max-w-screen-sm mx-auto\">{{ intro.slide_text }}</h2>

    <div class=\"max-w-screen-lg mx-auto my-12\">
      <!-- Slider main container -->
      <div class=\"swiper\">
        <!-- Additional required wrapper -->
        <div class=\"swiper-wrapper pb-4\">
          <!-- Slides -->
          {% for slide in intro.slides %}
          <div class=\"swiper-slide relative rounded overflow-hidden\">
            <img class=\"intro-image\" src=\"{{ page.media[slide.image].url }}\" alt=\"slide.title\" />
            <div class=\"intro-label\">{{ slide.title }}</div>
          </div>
          {% endfor %}
        </div>
        <div class=\"swiper-pagination\"></div>
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
    </div>

  </div>
</section>
{% endblock %}", "modular/intro.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/modular/intro.html.twig");
    }
}
