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

/* partials/post-details.html.twig */
class __TwigTemplate_3fa4c9ea97f79ddf2cfbf57af11b51a355be24bc09bbdf4fa59ed18d3bc17a71 extends \Twig\Template
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
        echo "<div class=\"absolute top-3 ";
        echo (((($context["side"] ?? null) == ($context["right"] ?? null))) ? ("right-3") : ("left-3"));
        echo " text-sm\">
    <div>
        <time class=\"inline-flex bg-white rounded-lg py-0.5 px-2\">";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", [])), "html", null, true);
        echo "</time>
    </div>
</div>
<div class=\"absolute bottom-3 ";
        // line 6
        echo (((($context["side"] ?? null) == ($context["right"] ?? null))) ? ("right-3") : ("left-3"));
        echo " text-sm\">
    <div class=\"inline-flex gap-1 text-xs uppercase mt-2\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["post"] ?? null), "taxonomy", []), "tags", []));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 9
            echo "        <span class=\"bg-black/20 border border-white text-white rounded-lg py-[2px] px-2\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/post-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  51 => 9,  47 => 8,  42 => 6,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"absolute top-3 {{ side == right ? 'right-3' : 'left-3' }} text-sm\">
    <div>
        <time class=\"inline-flex bg-white rounded-lg py-0.5 px-2\">{{ post.date|date(system.pages.dateformat.short) }}</time>
    </div>
</div>
<div class=\"absolute bottom-3 {{ side == right ? 'right-3' : 'left-3' }} text-sm\">
    <div class=\"inline-flex gap-1 text-xs uppercase mt-2\">
        {% for tag in post.taxonomy.tags %}
        <span class=\"bg-black/20 border border-white text-white rounded-lg py-[2px] px-2\">{{ tag }}</span>
        {% endfor %}
    </div>
</div>
", "partials/post-details.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/post-details.html.twig");
    }
}
