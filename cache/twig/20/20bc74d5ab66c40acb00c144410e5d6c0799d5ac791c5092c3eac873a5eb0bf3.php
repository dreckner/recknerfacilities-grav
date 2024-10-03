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

/* modular/image-block.html.twig */
class __TwigTemplate_8a1705c97a2da0b13001983ffc7ec85634d8e0a0c996dd3b3ab68eab8518704f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("modular/partials/base.html.twig", "modular/image-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_render_body($context, array $blocks = [])
    {
        // line 4
        echo "<section class=\"";
        echo twig_escape_filter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        echo " relative py-12 px-8\">
  <div>

    ";
        // line 7
        if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])) : (true))) {
            // line 8
            echo "    <h2 class=\"text-2xl md:text-3xl lg:text-4xl text-center font-semibold mb-12\">
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("/services"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
    </h2>
    ";
        }
        // line 12
        echo "
    <div class=\"grid items-center justify-center\">
      <img class=\"row-start-1 col-start-1 w-full h-auto rounded\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "url", [])), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "\"  />
      <div class=\"row-start-1 col-start-1 flex justify-center\">
        <div class=\"bg-white/50 backdrop-blur-sm p-4 md:p-8 text-lg md:text-2xl lg:text-3xl rounded !leading-relaxed\">
          ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        </div>
      </div>
    </div>

  </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/image-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  66 => 14,  62 => 12,  54 => 9,  51 => 8,  49 => 7,  42 => 4,  39 => 3,  29 => 1,);
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

{% block render_body %}
<section class=\"{{ container_classes }} relative py-12 px-8\">
  <div>

    {% if page.header.display_title ?? true %}
    <h2 class=\"text-2xl md:text-3xl lg:text-4xl text-center font-semibold mb-12\">
      <a href=\"{{ url('/services') }}\">{{ page.title }}</a>
    </h2>
    {% endif %}

    <div class=\"grid items-center justify-center\">
      <img class=\"row-start-1 col-start-1 w-full h-auto rounded\" src=\"{{ url(page.media[page.header.image].url) }}\" alt=\"{{ page.title }}\"  />
      <div class=\"row-start-1 col-start-1 flex justify-center\">
        <div class=\"bg-white/50 backdrop-blur-sm p-4 md:p-8 text-lg md:text-2xl lg:text-3xl rounded !leading-relaxed\">
          {{ page.content|raw }}
        </div>
      </div>
    </div>

  </div>

</section>
{% endblock %}", "modular/image-block.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/modular/image-block.html.twig");
    }
}
