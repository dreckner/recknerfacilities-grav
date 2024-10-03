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

/* partials/base.html.twig */
class __TwigTemplate_1069054799adac8a96a81b15675e4ec23b27d58f642014a8a7014c7e47821f9c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'render_body' => [$this, 'block_render_body'],
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'notices' => [$this, 'block_notices'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/theme-variables.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/theme-variables.html.twig", "partials/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 2
    public function block_render_body($context, array $blocks = [])
    {
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["site"] ?? null), "default_lang", []))));
        echo "\" class=\"scroll-smooth\">
<head>
  ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
  ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
  ";
        // line 26
        $this->displayBlock('assets', $context, $blocks);
        // line 30
        echo "</head>
<body x-data=\"{ mobileMenu: false}\"
      :class=\"mobileMenu ? 'overflow-hidden' : ''\"
      class=\"flex flex-col min-h-screen ";
        // line 33
        if (($context["debugger_enabled"] ?? null)) {
            echo "debug-screens";
        }
        echo "\">

";
        // line 35
        $this->displayBlock('notices', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->loadTemplate("partials/mobile-navigation.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('bottom', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        if ($this->getAttribute(($context["site"] ?? null), "tracking_scripts", [])) {
            // line 64
            echo "  ";
            echo $this->getAttribute(($context["site"] ?? null), "tracking_scripts", []);
            echo "
";
        }
        // line 66
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "    <meta charset=\"utf-8\"/>
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"));
        echo "\"/>
    <link rel=\"canonical\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"));
        echo "\"/>
  ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://build/css/site.css", 1 => 98], "method");
        // line 20
        echo "  ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://build/js/main.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        // line 24
        echo "  ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 26
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 27
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
  ";
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
  ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 35
    public function block_notices($context, array $blocks = [])
    {
        // line 36
        echo "  ";
        $this->loadTemplate("partials/notices.html.twig", "partials/base.html.twig", 36)->display($context);
    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        // line 40
        echo "  ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 40)->display($context);
    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        // line 44
        echo "  <main>
    <article>
      ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "    </article>
  </main>
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        // line 52
        echo "  <footer class=\"bg-gray-200 py-6\">
    ";
        // line 53
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "  </footer>
";
    }

    // line 59
    public function block_bottom($context, array $blocks = [])
    {
        // line 60
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 60,  256 => 59,  251 => 54,  249 => 53,  246 => 52,  243 => 51,  238 => 46,  232 => 47,  230 => 46,  226 => 44,  223 => 43,  218 => 40,  215 => 39,  210 => 36,  207 => 35,  200 => 28,  195 => 27,  192 => 26,  183 => 24,  180 => 23,  177 => 22,  173 => 20,  170 => 19,  167 => 18,  161 => 15,  157 => 14,  154 => 13,  152 => 12,  141 => 8,  138 => 7,  135 => 6,  129 => 66,  123 => 64,  121 => 63,  118 => 62,  116 => 59,  113 => 58,  111 => 57,  108 => 56,  106 => 51,  103 => 50,  101 => 43,  98 => 42,  96 => 39,  93 => 38,  91 => 35,  84 => 33,  79 => 30,  77 => 26,  74 => 25,  72 => 22,  69 => 21,  67 => 18,  64 => 17,  62 => 6,  57 => 4,  54 => 3,  51 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/theme-variables.html.twig' %}
{% block render_body %}
<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: site.default_lang)|e }}\" class=\"scroll-smooth\">
<head>
  {% block head %}
    <meta charset=\"utf-8\"/>
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png')|e }}\"/>
    <link rel=\"canonical\" href=\"{{ page.url(true, true)|e }}\"/>
  {% endblock head %}

  {% block stylesheets %}
    {% do assets.addCss('theme://build/css/site.css', 98) %}
  {% endblock %}

  {% block javascripts %}
    {% do assets.addJs('theme://build/js/main.js', {group: 'bottom', loading: 'defer'}) %}
  {% endblock %}

  {% block assets deferred %}
  {{ assets.css()|raw }}
  {{ assets.js()|raw }}
  {% endblock %}
</head>
<body x-data=\"{ mobileMenu: false}\"
      :class=\"mobileMenu ? 'overflow-hidden' : ''\"
      class=\"flex flex-col min-h-screen {% if debugger_enabled %}debug-screens{% endif %}\">

{% block notices %}
  {% include 'partials/notices.html.twig' %}
{% endblock %}

{% block header %}
  {% include 'partials/header.html.twig' %}
{% endblock %}

{% block body %}
  <main>
    <article>
      {% block content %}{% endblock %}
    </article>
  </main>
{% endblock %}

{% block footer %}
  <footer class=\"bg-gray-200 py-6\">
    {% include 'partials/footer.html.twig' %}
  </footer>
{% endblock %}

{% include 'partials/mobile-navigation.html.twig' %}

{% block bottom %}
  {{ assets.js('bottom')|raw }}
{% endblock %}

{% if site.tracking_scripts %}
  {{ site.tracking_scripts|raw }}
{% endif %}
</body>
</html>
{% endblock %}", "partials/base.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/base.html.twig");
    }
    private $deferred;
}
