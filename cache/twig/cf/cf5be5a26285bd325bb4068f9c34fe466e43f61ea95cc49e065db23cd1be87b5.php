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

/* modular/text.html.twig */
class __TwigTemplate_8d4daebb2fe258ccd9057c9fd7e5de5bef9d2988d764a67e627f00d85964748f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("modular/partials/base.html.twig", "modular/text.html.twig", 1);
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
        // line 6
        if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])) : (true))) {
            // line 7
            echo "    <h2 class=\"text-2xl md:text-3xl lg:text-4xl text-center font-semibold mb-12\">
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("/services"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
    </h2>
    ";
        }
        // line 11
        echo "
    <div class=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "text_classes", []), "html", null, true);
        echo "\">
      ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>

  </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  64 => 12,  61 => 11,  53 => 8,  50 => 7,  48 => 6,  42 => 4,  39 => 3,  29 => 1,);
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

    <div class=\"{{ page.header.text_classes }}\">
      {{ page.content|raw }}
    </div>

  </div>

</section>
{% endblock %}", "modular/text.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/modular/text.html.twig");
    }
}
