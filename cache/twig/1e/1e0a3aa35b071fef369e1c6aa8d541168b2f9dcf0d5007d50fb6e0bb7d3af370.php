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

/* services.html.twig */
class __TwigTemplate_c8a2878b16aedd8240c3486d9dcdaad4a3c6659d95c5846b61005ef59f4279d4 extends \Twig\Template
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
        $context["services"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []);
        // line 4
        $context["cta"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cta", []);
        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "services.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content_section($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"prose prose-page lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24\">
    <div class=\"md:flex gap-6 md:gap-12\">
      <article class=\"\">
        ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </article>
    </div>

    <div class=\"flex flex-col my-12\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 16
            echo "            <div class=\"md:flex gap-6 md:gap-12 pt-6 md:pt-0\">
                <div class=\"md:w-1/3 text-balance flex items-center justify-center md:justify-end md:text-right\">
                    <h3 class=\"!text-secondary-500 !my-0\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"md:w-2/3 ";
            // line 20
            echo (($this->getAttribute($context["loop"], "first", [])) ? ("md:border-t") : (""));
            echo " border-b border-gray-300\">
                    ";
            // line 21
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["service"], "text", []));
            echo "
                </div>
            </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>

    <div class=\"bg-primary-50/50 prose max-w-none rounded-xl text-center p-1\">
        ";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, ($context["cta"] ?? null));
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  108 => 25,  90 => 21,  86 => 20,  81 => 18,  77 => 16,  60 => 15,  52 => 10,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
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

{% set services = page.header.services %}
{% set cta = page.header.cta %}

{% block content_section %}
<div class=\"prose prose-page lg:prose-lg max-w-none px-4 md:px-8 lg:px-16 pb-12 md:pb-24\">
    <div class=\"md:flex gap-6 md:gap-12\">
      <article class=\"\">
        {{ page.content|raw }}
      </article>
    </div>

    <div class=\"flex flex-col my-12\">
        {% for service in services %}
            <div class=\"md:flex gap-6 md:gap-12 pt-6 md:pt-0\">
                <div class=\"md:w-1/3 text-balance flex items-center justify-center md:justify-end md:text-right\">
                    <h3 class=\"!text-secondary-500 !my-0\">{{ service.title }}</h3>
                </div>
                <div class=\"md:w-2/3 {{ loop.first ? 'md:border-t' }} border-b border-gray-300\">
                    {{ service.text|markdown }}
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"bg-primary-50/50 prose max-w-none rounded-xl text-center p-1\">
        {{ cta|markdown }}
    </div>
</div>

{% endblock %}", "services.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/services.html.twig");
    }
}
