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

/* modular/icon-blocks.html.twig */
class __TwigTemplate_926db1f093fd2a01ddd4f256bd6ee4819abe42039b613f46f3a94e4d7a7238f5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("modular/partials/base.html.twig", "modular/icon-blocks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_render_body($context, array $blocks = [])
    {
        // line 6
        echo "    <section class=\"";
        echo twig_escape_filter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        echo " relative py-12 px-8\">
        <div>

            ";
        // line 9
        if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_title", [])) : (true))) {
            // line 10
            echo "                <h2 class=\"text-2xl md:text-3xl lg:text-4xl text-center font-semibold mb-12\">
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
            <div class=\"grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-gray-900\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 17
            echo "                    ";
            if ($this->getAttribute($context["block"], "link", [])) {
                // line 18
                echo "                        <a class=\"p-4 rounded bg-gray-100 flex flex-col items-center\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["block"], "url", [])), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 20
                echo "                        <span class=\"p-4 rounded bg-gray-100 flex flex-col items-center\">
                    ";
            }
            // line 22
            echo "                            <span class=\"flex bg-white h-20 w-20 rounded-full items-center justify-center\">
                ";
            // line 23
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), [$this->getAttribute($context["block"], "icon", []), "w-12 h-12 text-primary-500"]);
            echo "
                </span>
                            <h3 class=\"text-sm md:text-base lg:text-lg text-center mt-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", []), "html", null, true);
            echo "</h3>
                    ";
            // line 26
            if ($this->getAttribute($context["block"], "link", [])) {
                // line 27
                echo "                        </a>
                    ";
            } else {
                // line 29
                echo "                        </span>
                    ";
            }
            // line 31
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>

        </div>

    </section>
";
    }

    public function getTemplateName()
    {
        return "modular/icon-blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  108 => 31,  104 => 29,  100 => 27,  98 => 26,  94 => 25,  89 => 23,  86 => 22,  82 => 20,  76 => 18,  73 => 17,  69 => 16,  65 => 14,  57 => 11,  54 => 10,  52 => 9,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
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

            <div class=\"grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-gray-900\">
                {% for block in blocks %}
                    {% if block.link %}
                        <a class=\"p-4 rounded bg-gray-100 flex flex-col items-center\" href=\"{{ url(block.url) }}\">
                    {% else %}
                        <span class=\"p-4 rounded bg-gray-100 flex flex-col items-center\">
                    {% endif %}
                            <span class=\"flex bg-white h-20 w-20 rounded-full items-center justify-center\">
                {{ svg_icon(block.icon, 'w-12 h-12 text-primary-500')|raw }}
                </span>
                            <h3 class=\"text-sm md:text-base lg:text-lg text-center mt-2\">{{ block.title }}</h3>
                    {% if block.link %}
                        </a>
                    {% else %}
                        </span>
                    {% endif %}

                {% endfor %}
            </div>

        </div>

    </section>
{% endblock %}", "modular/icon-blocks.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/modular/icon-blocks.html.twig");
    }
}
