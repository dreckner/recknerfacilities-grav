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

/* partials/header.html.twig */
class __TwigTemplate_f0e685685cf4ccddebe6ae2aab1dc1e4ac45c9cbffa62ec770fb30bf04a10f3f extends \Twig\Template
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
        echo "<header class=\"";
        echo twig_escape_filter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["x_padding_classes"] ?? null), "html", null, true);
        echo " z-10 sticky top-0 bg-white sticky:shadow-2xl\">
  <section class=\"flex space-between my-2\">
    <div class=\"py-1 mr-auto\">
      ";
        // line 4
        $this->loadTemplate("partials/logo.html.twig", "partials/header.html.twig", 4)->display($context);
        // line 5
        echo "    </div>
    <div class=\"hidden md:flex space-x-4 items-center\">
      ";
        // line 7
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 7)->display($context);
        // line 8
        echo "      <a class=\"btn\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("/quick-quote"), "html", null, true);
        echo "\">Quick Quote</a>
    </div>
    <button @click=\"mobileMenu = !mobileMenu\" class=\"md:hidden mr-2\" aria-label=\"Mobile Menu\">
      ";
        // line 11
        echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/menu-2.svg", "w-6 h-6"]);
        echo "
    </button>
  </section>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  47 => 8,  45 => 7,  41 => 5,  39 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"{{ container_classes }} {{ x_padding_classes }} z-10 sticky top-0 bg-white sticky:shadow-2xl\">
  <section class=\"flex space-between my-2\">
    <div class=\"py-1 mr-auto\">
      {% include 'partials/logo.html.twig' %}
    </div>
    <div class=\"hidden md:flex space-x-4 items-center\">
      {% include 'partials/navigation.html.twig' %}
      <a class=\"btn\" href=\"{{ url('/quick-quote') }}\">Quick Quote</a>
    </div>
    <button @click=\"mobileMenu = !mobileMenu\" class=\"md:hidden mr-2\" aria-label=\"Mobile Menu\">
      {{ svg_icon('tabler/menu-2.svg', 'w-6 h-6')|raw }}
    </button>
  </section>
</header>", "partials/header.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/header.html.twig");
    }
}
