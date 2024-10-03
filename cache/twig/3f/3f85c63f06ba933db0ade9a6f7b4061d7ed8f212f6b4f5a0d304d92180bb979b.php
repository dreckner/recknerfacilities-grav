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

/* home.html.twig */
class __TwigTemplate_7b9b6022f690ec8ac508a64e6344f7e4716075a648f596bf6794d889f326b226 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"], "method");
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", 1 => ["group" => "bottom"]], "method");
        // line 6
        ob_start();
        // line 7
        echo "    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      slidesPerView: 1,
      draggable: true,
      centeredSlides: true,
      spaceBetween: 20,
";
        // line 18
        echo "      breakpoints : {
        768: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40
        },
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
";
        $context["swiper_init"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["swiper_init"] ?? null), 1 => ["group" => "bottom"]], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        // line 39
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 40
            echo "      ";
            echo $this->getAttribute($context["module"], "content", []);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 40,  81 => 39,  78 => 38,  73 => 1,  71 => 36,  51 => 18,  41 => 7,  39 => 6,  37 => 4,  35 => 3,  29 => 1,);
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

{% do assets.addCss('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css') %}
{% do assets.addJs('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', {group: 'bottom'}) %}

{% set swiper_init %}
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      slidesPerView: 1,
      draggable: true,
      centeredSlides: true,
      spaceBetween: 20,
{#      autoplay: {#}
{#        delay: 4000,#}
{#      },#}
      breakpoints : {
        768: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40
        },
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
{% endset %}
{% do assets.addInlineJs(swiper_init, {group: 'bottom'}) %}

{% block body %}
  {% for module in page.collection() %}
      {{ module.content|raw }}
  {% endfor %}
{% endblock %}
", "home.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/home.html.twig");
    }
}
