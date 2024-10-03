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

/* contacts.html.twig */
class __TwigTemplate_9d677db7b339c1ca2e0bc884628e7980bc6118ad86c9263929be1e232e2dc62f extends \Twig\Template
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
        $context["contacts"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contacts", []);
        // line 4
        $context["buttons"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []);
        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "contacts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content_section($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 8
            echo "    <div class=\"prose prose-blog lg:prose-lg max-w-none my-12\">
        ";
            // line 9
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
    </div>
    ";
        }
        // line 12
        echo "    <div class=\"grid md:gird-cols-2 gap-8 pb-12 prose max-w-none\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 14
            echo "            <div class=\"";
            echo (($this->getAttribute($context["loop"], "first", [])) ? ("md:col-span-2") : (""));
            echo "\">
                <div class=\"grid gap-2 max-w-sm mx-auto bg-gray-50 ";
            // line 15
            echo twig_escape_filter($this->env, ($context["roundedness"] ?? null), "html", null, true);
            echo " p-6\">
                    <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "title", []), "html", null, true);
            echo "</h3>
                    <div class=\"flex gap-4\">
                        ";
            // line 18
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/map-pin.svg", "h-6 w-6"]);
            echo "
                        <div class=\"prose-p:-mt-0.5 prose-p:mb-0\">
                            ";
            // line 20
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["contact"], "address", []));
            echo "
                        </div>
                    </div>
                    <div class=\"flex gap-4 items-center\">
                        ";
            // line 24
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/phone.svg", "h-6 w-6"]);
            echo "
                        <a href=\"tel:";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", []), "html", null, true);
            echo "</a>
                    </div>
                    ";
            // line 27
            if ($this->getAttribute($context["contact"], "person", [])) {
                // line 28
                echo "                    <div class=\"flex gap-4 items-center\">
                        ";
                // line 29
                echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/user.svg", "h-6 w-6"]);
                echo "
                        <span class=\"font-bold\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "person", []), "html", null, true);
                echo "</span>
                    </div>
                    ";
            }
            // line 33
            echo "                    <div class=\"flex gap-4 items-center\">
                        ";
            // line 34
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/mail-forward.svg", "h-6 w-6"]);
            echo "
                        <a href=\"mailto:";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", []), "html", null, true);
            echo "</a>
                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        ";
        // line 41
        if (($context["buttons"] ?? null)) {
            // line 42
            echo "            <div class=\"flex md:col-span-2 justify-center gap-4 w-full py-8\">
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 44
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["button"], "link", [])), "html", null, true);
                echo "\"
                       class=\"btn btn__big\"
                       ";
                // line 46
                if ($this->getAttribute($context["button"], "external", [])) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </div>
        ";
        }
        // line 50
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 50,  189 => 48,  177 => 46,  171 => 44,  167 => 43,  164 => 42,  162 => 41,  159 => 40,  138 => 35,  134 => 34,  131 => 33,  125 => 30,  121 => 29,  118 => 28,  116 => 27,  109 => 25,  105 => 24,  98 => 20,  93 => 18,  88 => 16,  84 => 15,  79 => 14,  62 => 13,  59 => 12,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
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

{% set contacts = page.header.contacts %}
{% set buttons = page.header.buttons %}

{% block content_section %}
    {% if page.content %}
    <div class=\"prose prose-blog lg:prose-lg max-w-none my-12\">
        {{ page.content|raw }}
    </div>
    {% endif %}
    <div class=\"grid md:gird-cols-2 gap-8 pb-12 prose max-w-none\">
        {% for contact in contacts %}
            <div class=\"{{ loop.first ? 'md:col-span-2' }}\">
                <div class=\"grid gap-2 max-w-sm mx-auto bg-gray-50 {{ roundedness }} p-6\">
                    <h3>{{ contact.title }}</h3>
                    <div class=\"flex gap-4\">
                        {{ svg_icon('tabler/map-pin.svg', 'h-6 w-6')|raw }}
                        <div class=\"prose-p:-mt-0.5 prose-p:mb-0\">
                            {{ contact.address|markdown }}
                        </div>
                    </div>
                    <div class=\"flex gap-4 items-center\">
                        {{ svg_icon('tabler/phone.svg', 'h-6 w-6')|raw }}
                        <a href=\"tel:{{ contact.phone }}\">{{ contact.phone }}</a>
                    </div>
                    {% if contact.person %}
                    <div class=\"flex gap-4 items-center\">
                        {{ svg_icon('tabler/user.svg', 'h-6 w-6')|raw }}
                        <span class=\"font-bold\">{{ contact.person }}</span>
                    </div>
                    {% endif %}
                    <div class=\"flex gap-4 items-center\">
                        {{ svg_icon('tabler/mail-forward.svg', 'h-6 w-6')|raw }}
                        <a href=\"mailto:{{ contact.email }}\">{{ contact.email }}</a>
                    </div>
                </div>
            </div>
        {% endfor %}

        {% if buttons %}
            <div class=\"flex md:col-span-2 justify-center gap-4 w-full py-8\">
                {% for button in buttons %}
                    <a href=\"{{ url(button.link) }}\"
                       class=\"btn btn__big\"
                       {% if button.external %}target=\"_blank\"{% endif %}>{{ button.text }}</a>
                {% endfor %}
            </div>
        {% endif %}
    </div>

{% endblock %}
", "contacts.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/contacts.html.twig");
    }
}
