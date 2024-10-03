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

/* events.html.twig */
class __TwigTemplate_b580bf9ed54293cfcbd9ca980cb4d701db9a18d035b43f395b3db8c0ac621747 extends \Twig\Template
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
        $context["events"] = call_user_func_array($this->env->getFunction('sort_events')->getCallable(), [$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "events", [])]);
        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "events.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content_section($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"prose prose-blog lg:prose-lg max-w-none my-12\">
        ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
    <div class=\"events pb-12\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["label"] => $context["month"]) {
            // line 12
            echo "            <div class=\"border-b border-gray-200 my-6\"><span class=\"inline-flex rounded-lg py-1 px-3 bg-gray-200 text-black translate-y-1/2 font-bold\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</span></div>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["month"]);
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 14
                echo "                <div class=\"flex gap-4 mb-8\">
                    <div class=\"w-20 flex flex-col justify-center items-center\">
                        <span class=\"inline-flex uppercase text-gray-700\">";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "start_date", []), "D"), "html", null, true);
                echo "</span>
                        <span class=\"inline-flex text-3xl md:text-4xl text-gray-900 font-black\">";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "start_date", []), "d"), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"flex-1\">
                        ";
                // line 20
                $context["start_date"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "start_date", []), "F d");
                // line 21
                echo "                        ";
                $context["start_time"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "start_date", []), "H:i");
                // line 22
                echo "                        ";
                $context["end_date"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "end_date", []), "F d");
                // line 23
                echo "                        ";
                $context["end_time"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "end_date", []), "H:i");
                // line 24
                echo "                        <time class=\"text-secondary-500\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, ($context["start_date"] ?? null), "html", null, true);
                echo "
                            ";
                // line 26
                if ((($context["start_time"] ?? null) != "00:00")) {
                    echo "<span>@";
                    echo twig_escape_filter($this->env, ($context["start_time"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 27
                echo "                            ";
                if ((($context["end_date"] ?? null) != ($context["start_date"] ?? null))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, ($context["end_date"] ?? null), "html", null, true);
                    echo "
                                ";
                    // line 28
                    if ((($context["end_time"] ?? null) != "00:00")) {
                        echo "<span>@";
                        echo twig_escape_filter($this->env, ($context["end_time"] ?? null), "html", null, true);
                        echo "</span>";
                    }
                    // line 29
                    echo "                            ";
                }
                // line 30
                echo "
                        </time>
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? null), "url", []), "html", null, true);
                echo "\">
                            <h3 class=\"font-bold text-lg md:text-xl text-primary-500 hover:text-primary-700 transition leading-tight\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", []), "html", null, true);
                echo "</h3>
                        </a>
                        <div class=\"text-gray-600 my-1\">";
                // line 35
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["event"], "location", []));
                echo "</div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  145 => 39,  135 => 35,  130 => 33,  126 => 32,  122 => 30,  119 => 29,  113 => 28,  106 => 27,  100 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  82 => 20,  76 => 17,  72 => 16,  68 => 14,  64 => 13,  59 => 12,  55 => 11,  49 => 8,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
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

{% set events = sort_events(page.header.events) %}

{% block content_section %}

    <div class=\"prose prose-blog lg:prose-lg max-w-none my-12\">
        {{ page.content|raw }}
    </div>
    <div class=\"events pb-12\">
        {% for label, month in events %}
            <div class=\"border-b border-gray-200 my-6\"><span class=\"inline-flex rounded-lg py-1 px-3 bg-gray-200 text-black translate-y-1/2 font-bold\">{{ label }}</span></div>
            {% for event in month %}
                <div class=\"flex gap-4 mb-8\">
                    <div class=\"w-20 flex flex-col justify-center items-center\">
                        <span class=\"inline-flex uppercase text-gray-700\">{{ event.start_date|date('D') }}</span>
                        <span class=\"inline-flex text-3xl md:text-4xl text-gray-900 font-black\">{{ event.start_date|date('d') }}</span>
                    </div>
                    <div class=\"flex-1\">
                        {% set start_date = event.start_date|date('F d') %}
                        {% set start_time = event.start_date|date('H:i') %}
                        {% set end_date = event.end_date|date('F d') %}
                        {% set end_time = event.end_date|date('H:i') %}
                        <time class=\"text-secondary-500\">
                            {{ start_date }}
                            {% if start_time != '00:00' %}<span>@{{ start_time }}</span>{% endif %}
                            {% if end_date != start_date %} - {{ end_date }}
                                {% if end_time != '00:00' %}<span>@{{ end_time }}</span>{% endif %}
                            {% endif %}

                        </time>
                        <a href=\"{{ events.url }}\">
                            <h3 class=\"font-bold text-lg md:text-xl text-primary-500 hover:text-primary-700 transition leading-tight\">{{ event.title }}</h3>
                        </a>
                        <div class=\"text-gray-600 my-1\">{{ event.location|markdown }}</div>
                    </div>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

{% endblock %}
", "events.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/events.html.twig");
    }
}
