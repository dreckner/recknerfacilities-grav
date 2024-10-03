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

/* blog.html.twig */
class __TwigTemplate_826f3c64da08104c4d84c8b15773735ff0320a31ba26309dd2c7675717a39486 extends \Twig\Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["page_number"] = (($this->getAttribute(($context["uri"] ?? null), "param", [0 => "page"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uri"] ?? null), "param", [0 => "page"], "method"), 1)) : (1));
        // line 5
        $context["default_image"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/default.webp");
        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content_section($context, array $blocks = [])
    {
        // line 8
        echo "    <div class=\"px-4 md:px-8 lg:px-16 py-12 \">
        ";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 10
            echo "        <div class=\"prose prose-blog lg:prose-lg max-w-none mb-12\">
            ";
            // line 11
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        </div>
        ";
        }
        // line 14
        echo "
        <div class=\"grid gap-3 md:gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 \">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                ";
            $context["image"] = ((($this->getAttribute($this->getAttribute($context["post"], "media", [], "any", false, true), $this->getAttribute($this->getAttribute($context["post"], "header", []), "image", []), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["post"], "media", [], "any", false, true), $this->getAttribute($this->getAttribute($context["post"], "header", []), "image", []), [], "array")))) ? ($this->getAttribute($this->getAttribute($context["post"], "media", [], "any", false, true), $this->getAttribute($this->getAttribute($context["post"], "header", []), "image", []), [], "array")) : (($context["default_image"] ?? null)));
            // line 18
            echo "                ";
            if (($this->getAttribute($context["loop"], "first", []) && (($context["page_number"] ?? null) == 1))) {
                // line 19
                echo "                <a class=\"md:col-span-2 md:row-span-2 flex justify-end min-h-96 relative\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
                echo "\">
                    <img class=\"absolute inset-0 rounded-2xl object-cover h-full w-full\"
                         src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1024, 1 => 1024], "method"), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
                echo "\"  />
                    ";
                // line 22
                $this->loadTemplate("partials/post-details.html.twig", "blog.html.twig", 22)->display($context);
                // line 23
                echo "                    <div class=\"w-3/4 text-right\" >
                        <h2 class=\"goo font-bold text-3xl md:text-4xl !leading-snug text-primary-500 -mr-1 \">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
                echo "</h2>
                    </div>
                </a>
                ";
            } else {
                // line 28
                echo "                <div class=\"min-h-60\">
                    <a class=\"flex flex-col h-full\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
                echo "\">
                        <div class=\"relative flex-grow\">
                            <img class=\"absolute inset-0 rounded-2xl object-cover h-full w-full\"
                                 src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 600, 1 => 400], "method"), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
                echo "\"  />
                            ";
                // line 33
                $this->loadTemplate("partials/post-details.html.twig", "blog.html.twig", 33)->display($context);
                // line 34
                echo "                        </div>
                        <div class=\"flex-shrink pt-1\">
                            <h2 class=\"font-bold text-lg !leading-tight text-primary-500\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
                echo "</h2>
                        </div>
                    </a>
                </div>
                ";
            }
            // line 41
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
        <div class=\"flex justify-around mt-12\">
            ";
        // line 44
        $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 44)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", [])]));
        // line 45
        echo "        </div>
    </div>

    ";
        // line 48
        $this->loadTemplate("partials/goo.html.twig", "blog.html.twig", 48)->display($context);
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  168 => 48,  163 => 45,  161 => 44,  157 => 42,  143 => 41,  135 => 36,  131 => 34,  129 => 33,  123 => 32,  117 => 29,  114 => 28,  107 => 24,  104 => 23,  102 => 22,  96 => 21,  90 => 19,  87 => 18,  84 => 17,  67 => 16,  63 => 14,  57 => 11,  54 => 10,  52 => 9,  49 => 8,  46 => 7,  41 => 1,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
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

{% set collection = page.collection() %}
{% set page_number = uri.param('page')|default(1) %}
{% set default_image = url('theme://images/default.webp') %}

{% block content_section %}
    <div class=\"px-4 md:px-8 lg:px-16 py-12 \">
        {% if page.content %}
        <div class=\"prose prose-blog lg:prose-lg max-w-none mb-12\">
            {{ page.content|raw }}
        </div>
        {% endif %}

        <div class=\"grid gap-3 md:gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 \">
            {% for post in page.collection() %}
                {% set image = post.media[post.header.image] ?? default_image %}
                {% if loop.first and page_number == 1 %}
                <a class=\"md:col-span-2 md:row-span-2 flex justify-end min-h-96 relative\" href=\"{{ post.url }}\">
                    <img class=\"absolute inset-0 rounded-2xl object-cover h-full w-full\"
                         src=\"{{ image.cropZoom(1024,1024).url }}\" alt=\"{{ post.title }}\"  />
                    {% include 'partials/post-details.html.twig' %}
                    <div class=\"w-3/4 text-right\" >
                        <h2 class=\"goo font-bold text-3xl md:text-4xl !leading-snug text-primary-500 -mr-1 \">{{ post.title }}</h2>
                    </div>
                </a>
                {% else %}
                <div class=\"min-h-60\">
                    <a class=\"flex flex-col h-full\" href=\"{{ post.url }}\">
                        <div class=\"relative flex-grow\">
                            <img class=\"absolute inset-0 rounded-2xl object-cover h-full w-full\"
                                 src=\"{{ image.cropZoom(600,400).url }}\" alt=\"{{ post.title }}\"  />
                            {% include 'partials/post-details.html.twig' %}
                        </div>
                        <div class=\"flex-shrink pt-1\">
                            <h2 class=\"font-bold text-lg !leading-tight text-primary-500\">{{ post.title }}</h2>
                        </div>
                    </a>
                </div>
                {% endif %}
            {% endfor %}
        </div>
        <div class=\"flex justify-around mt-12\">
            {% include 'partials/pagination.html.twig' with {base_url: page.url} %}
        </div>
    </div>

    {% include 'partials/goo.html.twig' %}

{% endblock %}", "blog.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/blog.html.twig");
    }
}
