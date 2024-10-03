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

/* partials/navigation.html.twig */
class __TwigTemplate_c9e512df228741add69b6fea8c6f6827aab6999af1685f98a77526dbcdf587bc extends \Twig\Template
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
        // line 2
        echo "
";
        // line 6
        $context["top_item_colors"] = (("transition-colors  " . ((($context["active_page"] ?? null)) ? ("text-primary-700") : ("text-primary-500"))) . " hover:text-secondary-500");
        // line 7
        echo "
<nav class=\"flex justify-center\">

  <ul class=\"flex flex-wrap items-center text-sm gap-x-4 lg:gap-x-6 gap-y-1 ml-12 mr-6 !leading-6\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "      ";
            $context["active"] = ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []));
            // line 13
            echo "      ";
            $context["children"] = $this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []);
            // line 14
            echo "      ";
            if (($this->getAttribute(($context["children"] ?? null), "count", []) == 0)) {
                // line 15
                echo "        <li class=\"\">
          <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["top_item_colors"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "</a>
        </li>
      ";
            } else {
                // line 19
                echo "        <li
            class=\"px-6 relative flex items-center space-x-1\"
            x-data=\"{ open: false }\"
            @mouseenter=\"open = true\"
            @mouseleave=\"open = false\"
        >

          ";
                // line 26
                if (($this->getAttribute($context["p"], "template", []) != "default")) {
                    // line 27
                    echo "            <a
                class=\"";
                    // line 28
                    echo twig_escape_filter($this->env, ($context["top_item_colors"] ?? null), "html", null, true);
                    echo " cursor-pointer\"
                href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\"
                :aria-expanded=\"open\"
            >";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 33
                    echo "            <span
                class=\"";
                    // line 34
                    echo twig_escape_filter($this->env, ($context["top_item_colors"] ?? null), "html", null, true);
                    echo " cursor-pointer\"
                :aria-expanded=\"open\"
            >";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "</span>
          ";
                }
                // line 38
                echo "          <button
              class=\"shrink-0 p-1\"
              :aria-expanded=\"open\"
              @click.prevent=\"open = !open\"
          >
            <svg class=\"w-3 h-3 fill-secondary-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\">
              <path d=\"M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z\"/>
            </svg>
          </button>
          <!-- 2nd level menu -->
          <ul
              class=\"origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-gray-50 border border-gray-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden\"
              x-show=\"open\"
              x-transition:enter=\"transition ease-out duration-200 transform\"
              x-transition:enter-start=\"opacity-0 -translate-y-2\"
              x-transition:enter-end=\"opacity-100 translate-y-0\"
              x-transition:leave=\"transition ease-out duration-200\"
              x-transition:leave-start=\"opacity-100\"
              x-transition:leave-end=\"opacity-0\"
              x-cloak
              @focusout=\"await \$nextTick();!\$el.contains(\$focus.focused()) && (open = false)\"
          >

            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 62
                    echo "              ";
                    if (($this->getAttribute($context["child"], "template", []) == "section")) {
                        // line 63
                        echo "                <li class=\"section\">
                  <span class=\"font-bold flex border border-gray-200 py-1 px-2 text-gray-700 bg-gray-200/75\">";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                        echo "</span>
                  <ul class=\"font-normal\">
                  ";
                        // line 66
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 67
                            echo "                    <li>
                      <a class=\"transition text-primary-500 hover:text-primary-700 hover:bg-gray-200/50 flex items-center p-2 rounded\" href=\"";
                            // line 68
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                            echo "\">
                        ";
                            // line 69
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "menu", []), "html", null, true);
                            echo "
                      </a>
                    </li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "                  </ul>
                </li>
              ";
                    } else {
                        // line 76
                        echo "                <li>
                  <a class=\"transition text-gray-800 hover:text-gray-900 hover:bg-gray-100/75 flex items-center p-2 rounded\" href=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                        echo "\">
                    ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                        echo "
                  </a>
                </li>
                ";
                    }
                    // line 82
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "          </ul>
        </li>
      ";
            }
            // line 86
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "  </ul>

</nav>


";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 87,  199 => 86,  194 => 83,  188 => 82,  181 => 78,  177 => 77,  174 => 76,  169 => 73,  159 => 69,  155 => 68,  152 => 67,  148 => 66,  143 => 64,  140 => 63,  137 => 62,  133 => 61,  108 => 38,  103 => 36,  98 => 34,  95 => 33,  90 => 31,  85 => 29,  81 => 28,  78 => 27,  76 => 26,  67 => 19,  57 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  41 => 11,  35 => 7,  33 => 6,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# {% import 'macros/macros.html.twig' as macros %} #}

{# <ul {{ tree ? 'class=\"tree\"' : '' }}> #}
{#    {{ macros.nav_loop(pages) }} #}
{# </ul> #}
{% set top_item_colors = \"transition-colors  \" ~ (active_page ? 'text-primary-700' : 'text-primary-500') ~ \" hover:text-secondary-500\" %}

<nav class=\"flex justify-center\">

  <ul class=\"flex flex-wrap items-center text-sm gap-x-4 lg:gap-x-6 gap-y-1 ml-12 mr-6 !leading-6\">
    {% for p in pages.children.visible %}
      {% set active = (p.active or p.activeChild) %}
      {% set children = p.children.visible %}
      {% if children.count == 0 %}
        <li class=\"\">
          <a href=\"{{ p.url }}\" class=\"{{ top_item_colors }}\">{{ p.menu }}</a>
        </li>
      {% else %}
        <li
            class=\"px-6 relative flex items-center space-x-1\"
            x-data=\"{ open: false }\"
            @mouseenter=\"open = true\"
            @mouseleave=\"open = false\"
        >

          {% if p.template != 'default' %}
            <a
                class=\"{{ top_item_colors }} cursor-pointer\"
                href=\"{{ p.url }}\"
                :aria-expanded=\"open\"
            >{{ p.menu }}</a>
          {% else %}
            <span
                class=\"{{ top_item_colors }} cursor-pointer\"
                :aria-expanded=\"open\"
            >{{ p.menu }}</span>
          {% endif %}
          <button
              class=\"shrink-0 p-1\"
              :aria-expanded=\"open\"
              @click.prevent=\"open = !open\"
          >
            <svg class=\"w-3 h-3 fill-secondary-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\">
              <path d=\"M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z\"/>
            </svg>
          </button>
          <!-- 2nd level menu -->
          <ul
              class=\"origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-gray-50 border border-gray-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden\"
              x-show=\"open\"
              x-transition:enter=\"transition ease-out duration-200 transform\"
              x-transition:enter-start=\"opacity-0 -translate-y-2\"
              x-transition:enter-end=\"opacity-100 translate-y-0\"
              x-transition:leave=\"transition ease-out duration-200\"
              x-transition:leave-start=\"opacity-100\"
              x-transition:leave-end=\"opacity-0\"
              x-cloak
              @focusout=\"await \$nextTick();!\$el.contains(\$focus.focused()) && (open = false)\"
          >

            {% for child in children %}
              {% if child.template == 'section' %}
                <li class=\"section\">
                  <span class=\"font-bold flex border border-gray-200 py-1 px-2 text-gray-700 bg-gray-200/75\">{{ child.menu }}</span>
                  <ul class=\"font-normal\">
                  {% for item in child.children.visible %}
                    <li>
                      <a class=\"transition text-primary-500 hover:text-primary-700 hover:bg-gray-200/50 flex items-center p-2 rounded\" href=\"{{ item.url }}\">
                        {{ item.menu }}
                      </a>
                    </li>
                  {% endfor %}
                  </ul>
                </li>
              {% else %}
                <li>
                  <a class=\"transition text-gray-800 hover:text-gray-900 hover:bg-gray-100/75 flex items-center p-2 rounded\" href=\"{{ child.url }}\">
                    {{ child.menu }}
                  </a>
                </li>
                {% endif %}
            {% endfor %}
          </ul>
        </li>
      {% endif %}
    {% endfor %}
  </ul>

</nav>


", "partials/navigation.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/navigation.html.twig");
    }
}
