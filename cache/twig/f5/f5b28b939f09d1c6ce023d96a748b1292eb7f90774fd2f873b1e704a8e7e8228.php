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

/* partials/pagination.html.twig */
class __TwigTemplate_6cd43e4128b1c697ae760259f4bddc4ca0bc12d81ac158ec224838f30f276231 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["pagination"] = ((array_key_exists("pagination", $context)) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", [])));
        // line 2
        $context["base_url"] = ((array_key_exists("base_url", $context)) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", []))) : ($this->getAttribute(($context["page"] ?? null), "url", [])));
        // line 3
        $context["li_class"] = "flex items-center border-r last:border-0 border-gray-300";
        // line 4
        $context["item_class"] = "text-black inline-block px-4 py-2";
        // line 5
        $context["link_class"] = "inline-block px-4 py-2 text-primary-500 hover:bg-gray-50 hover:text-primary-700";
        // line 6
        $context["icon_left"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/chevrons-left.svg", "w-5"]);
        // line 7
        $context["icon_right"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/chevrons-right.svg", "w-5"]);
        // line 8
        echo "
";
        // line 9
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 10
            echo "<ul class=\"flex mx-auto border rounded-md border-gray-300 overflow-hidden\">
    ";
            // line 11
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 12
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 13
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                echo "\">
            <a class=\"";
                // line 14
                echo twig_escape_filter($this->env, ($context["link_class"] ?? null), "html", null, true);
                echo "\" rel=\"prev\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 15
                echo ($context["icon_left"] ?? null);
                echo "
            </a>
        </li>
    ";
            } else {
                // line 19
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                echo "\">
            <span class=\"";
                // line 20
                echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                echo " opacity-30\">
                ";
                // line 21
                echo ($context["icon_left"] ?? null);
                echo "
            </span>
        </li>
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 27
                echo "
        ";
                // line 28
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 29
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                    echo "\"><span class=\"";
                    echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                    echo " font-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</span></li>
        ";
                } elseif ($this->getAttribute(                // line 30
$context["paginate"], "isInDelta", [])) {
                    // line 31
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 32
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                    echo "\"><a class=\"";
                    echo twig_escape_filter($this->env, ($context["link_class"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</a></li>
        ";
                } elseif ($this->getAttribute(                // line 33
$context["paginate"], "isDeltaBorder", [])) {
                    // line 34
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                    echo "\"><span class=\"";
                    echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                    echo "\">&hellip;</span></li>
        ";
                }
                // line 36
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
    ";
            // line 39
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 40
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 41
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                echo "\">
            <a class=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["link_class"] ?? null), "html", null, true);
                echo "\" rel=\"next\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 43
                echo ($context["icon_right"] ?? null);
                echo "
            </a>
        </li>
    ";
            } else {
                // line 47
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, ($context["li_class"] ?? null), "html", null, true);
                echo "\">
            <span class=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                echo " opacity-30\">
                ";
                // line 49
                echo ($context["icon_right"] ?? null);
                echo "
            </span>
        </li>
    ";
            }
            // line 53
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 53,  180 => 49,  176 => 48,  171 => 47,  164 => 43,  158 => 42,  153 => 41,  150 => 40,  148 => 39,  145 => 38,  138 => 36,  130 => 34,  128 => 33,  117 => 32,  114 => 31,  112 => 30,  103 => 29,  101 => 28,  98 => 27,  94 => 26,  91 => 25,  84 => 21,  80 => 20,  75 => 19,  68 => 15,  62 => 14,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  47 => 9,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}
{% set li_class = 'flex items-center border-r last:border-0 border-gray-300' %}
{% set item_class = 'text-black inline-block px-4 py-2' %}
{% set link_class = 'inline-block px-4 py-2 text-primary-500 hover:bg-gray-50 hover:text-primary-700' %}
{% set icon_left = svg_icon('tabler/chevrons-left.svg', 'w-5') %}
{% set icon_right = svg_icon('tabler/chevrons-right.svg', 'w-5') %}

{% if pagination|length > 1 %}
<ul class=\"flex mx-auto border rounded-md border-gray-300 overflow-hidden\">
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <li class=\"{{ li_class }}\">
            <a class=\"{{ link_class }}\" rel=\"prev\" href=\"{{ url }}\">
                {{ icon_left|raw }}
            </a>
        </li>
    {% else %}
        <li class=\"{{ li_class }}\">
            <span class=\"{{ item_class }} opacity-30\">
                {{ icon_left|raw }}
            </span>
        </li>
    {% endif %}

    {% for paginate in pagination %}

        {% if paginate.isCurrent %}
            <li class=\"{{ li_class }}\"><span class=\"{{ item_class }} font-bold\">{{ paginate.number }}</span></li>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <li class=\"{{ li_class }}\"><a class=\"{{ link_class }}\" href=\"{{ url }}\">{{ paginate.number }}</a></li>
        {% elseif paginate.isDeltaBorder %}
            <li class=\"{{ li_class }}\"><span class=\"{{ item_class }}\">&hellip;</span></li>
        {% endif %}

    {% endfor %}

    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <li class=\"{{ li_class }}\">
            <a class=\"{{ link_class }}\" rel=\"next\" href=\"{{ url }}\">
                {{ icon_right|raw }}
            </a>
        </li>
    {% else %}
        <li class=\"{{ li_class }}\">
            <span class=\"{{ item_class }} opacity-30\">
                {{ icon_right|raw }}
            </span>
        </li>
    {% endif %}
</ul>

{% endif %}
", "partials/pagination.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/pagination.html.twig");
    }
}
