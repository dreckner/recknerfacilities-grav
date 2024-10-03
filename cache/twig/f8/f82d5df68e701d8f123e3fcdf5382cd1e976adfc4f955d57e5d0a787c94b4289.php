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

/* macros/macros.html.twig */
class __TwigTemplate_c973bc07c5b2e5488087168f3e6db1e782604712c5f0196c5841477cfac0ef19 extends \Twig\Template
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
    }

    // line 1
    public function getnav_loop($__pages__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "pages" => $__pages__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "
    ";
                // line 5
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 6
                echo "    ";
                $context["children"] = $this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []);
                // line 7
                echo "    ";
                $context["has_children"] = ($this->getAttribute(($context["children"] ?? null), "count", []) > 0);
                // line 8
                echo "
    <li x-data=\"{expanded: false}\"
        class=\"menu__section\">
      <div class=\"flex justify-between\">
        ";
                // line 12
                $context["menu_text"] = (("<span>" . twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []))) . "</span>");
                // line 13
                echo "        ";
                if ($this->getAttribute($context["p"], "routable", [])) {
                    // line 14
                    echo "          <a class=\"flex items-center flex-grow hover:text-primary px-4 py-1\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\">";
                    echo ($context["menu_text"] ?? null);
                    echo "</a>
        ";
                } else {
                    // line 16
                    echo "          <span class=\"flex items-center cursor-pointer px-4 py-1\">";
                    echo ($context["menu_text"] ?? null);
                    echo "</span>
        ";
                }
                // line 18
                if (($context["has_children"] ?? null)) {
                    // line 19
                    echo "<div class=\"flex items-center pr-3\">
            <button @click=\"expanded = !expanded\"
                    :class=\"{'toolbar-btn__active': expanded}\"
                    class=\"toolbar-btn__subtle flex-shrink-0\" aria-label=\"Expand / collapse menu\">
                ";
                    // line 23
                    echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/chevron-down.svg", "w-6 h-6 transition duration-200"]);
                    echo "
            </button>
          </div>
        ";
                }
                // line 27
                echo "      </div>";
                // line 28
                if (($context["has_children"] ?? null)) {
                    // line 29
                    echo "<ul x-show=\"expanded\" x-collapse
            class=\"level ";
                    // line 30
                    echo twig_escape_filter($this->env, ("level_" . ($context["level"] ?? null)), "html", null, true);
                    echo "\">
          ";
                    // line 31
                    echo $context["macros"]->getnav_loop(($context["children"] ?? null), (($context["level"] ?? null) + 1));
                    echo "
        </ul>
      ";
                }
                // line 34
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  115 => 31,  111 => 30,  108 => 29,  106 => 28,  104 => 27,  97 => 23,  91 => 19,  89 => 18,  83 => 16,  75 => 14,  72 => 13,  70 => 12,  64 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  48 => 3,  45 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(pages, level) %}
  {% import _self as macros %}
  {% for p in pages %}

    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
    {% set children = p.children.visible %}
    {% set has_children = children.count > 0 %}

    <li x-data=\"{expanded: false}\"
        class=\"menu__section\">
      <div class=\"flex justify-between\">
        {% set menu_text = '<span>' ~ p.menu|e ~ '</span>' %}
        {% if p.routable %}
          <a class=\"flex items-center flex-grow hover:text-primary px-4 py-1\" href=\"{{ p.url }}\">{{ menu_text|raw }}</a>
        {% else %}
          <span class=\"flex items-center cursor-pointer px-4 py-1\">{{ menu_text|raw }}</span>
        {% endif %}
        {%- if has_children -%}
          <div class=\"flex items-center pr-3\">
            <button @click=\"expanded = !expanded\"
                    :class=\"{'toolbar-btn__active': expanded}\"
                    class=\"toolbar-btn__subtle flex-shrink-0\" aria-label=\"Expand / collapse menu\">
                {{ svg_icon('tabler/chevron-down.svg', 'w-6 h-6 transition duration-200')|raw }}
            </button>
          </div>
        {% endif %}
      </div>
      {%- if has_children -%}
        <ul x-show=\"expanded\" x-collapse
            class=\"level {{ 'level_' ~ level }}\">
          {{ macros.nav_loop(children, level + 1) }}
        </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}", "macros/macros.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/macros/macros.html.twig");
    }
}
