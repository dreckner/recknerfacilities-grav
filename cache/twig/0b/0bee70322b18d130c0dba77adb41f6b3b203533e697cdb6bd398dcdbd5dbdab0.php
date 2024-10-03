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

/* modular/image-blocks.html.twig */
class __TwigTemplate_6693c03f16c9f9b2dc8fe62a4600cc62b2b19cd0440f1bafed4565c8b8005a17 extends \Twig\Template
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
        $context["blocks"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "blocks", []);
        // line 1
        $this->parent = $this->loadTemplate("modular/partials/base.html.twig", "modular/image-blocks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_render_body($context, array $blocks = [])
    {
        // line 6
        echo "<section class=\"";
        echo twig_escape_filter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        echo " relative py-12 px-8\">
  <div>

    ";
        // line 9
        if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])) : (true))) {
            // line 10
            echo "    <h2 class=\"text-2xl md:text-3xl lg:text-4xl text-center font-semibold mb-12\">
      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("/services"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
    </h2>
    ";
        }
        // line 14
        echo "
    <div class=\"bg-gray-900 relative rounded overflow-hidden p-4 md:p-10 lg:p-16\">
      <img class=\"absolute h-full w-full inset-0 object-cover object-center opacity-20\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "url", [])), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "\"  />
      <div class=\"flex justify-center items-center gap-4\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 19
            echo "          <a class=\"relative group block  overflow-hidden\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["block"], "url", [])), "html", null, true);
            echo "\">
            <img class=\"rounded w-full h-auto transition group-hover:brightness-110\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["block"], "image", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", []), "html", null, true);
            echo "\" />
            <div class=\"text-gray-200 group-hover:text-white transition-colors p-4 md:p-6 text-lg md:text-xl lg:text-2xl text-center\">
              ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", []), "html", null, true);
            echo "
            </div>
          </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </div>
    </div>

  </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/image-blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  92 => 22,  85 => 20,  80 => 19,  76 => 18,  69 => 16,  65 => 14,  57 => 11,  54 => 10,  52 => 9,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
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

{% set blocks = page.header.blocks %}

{% block render_body %}
<section class=\"{{ container_classes }} relative py-12 px-8\">
  <div>

    {% if page.header.display_title ?? true %}
    <h2 class=\"text-2xl md:text-3xl lg:text-4xl text-center font-semibold mb-12\">
      <a href=\"{{ url('/services') }}\">{{ page.title }}</a>
    </h2>
    {% endif %}

    <div class=\"bg-gray-900 relative rounded overflow-hidden p-4 md:p-10 lg:p-16\">
      <img class=\"absolute h-full w-full inset-0 object-cover object-center opacity-20\" src=\"{{ url(page.media[page.header.background].url) }}\" alt=\"{{ page.title }}\"  />
      <div class=\"flex justify-center items-center gap-4\">
        {% for block in blocks %}
          <a class=\"relative group block  overflow-hidden\" href=\"{{ url(block.url) }}\">
            <img class=\"rounded w-full h-auto transition group-hover:brightness-110\" src=\"{{ page.media[block.image].url }}\" alt=\"{{ block.title }}\" />
            <div class=\"text-gray-200 group-hover:text-white transition-colors p-4 md:p-6 text-lg md:text-xl lg:text-2xl text-center\">
              {{ block.title }}
            </div>
          </a>
        {% endfor %}
      </div>
    </div>

  </div>

</section>
{% endblock %}", "modular/image-blocks.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/modular/image-blocks.html.twig");
    }
}
