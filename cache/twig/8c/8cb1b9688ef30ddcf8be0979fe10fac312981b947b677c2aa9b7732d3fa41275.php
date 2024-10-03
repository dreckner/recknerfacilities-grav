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

/* partials/mobile-navigation.html.twig */
class __TwigTemplate_1105dd97cf49d75aa955298f8bb9cdedc64064014beb2871e7624ce3d35a75f7 extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/mobile-navigation.html.twig", 1)->unwrap();
        // line 2
        echo "
<!-- Pop Out Navigation -->
<nav class=\"fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm backdrop-grayscale z-50\" :class=\"mobileMenu ? 'visible' : 'invisible' \" x-cloak>

  <!-- UL Links -->
  <div class=\"absolute bg-gray-50 flex flex-col top-0 right-0 bottom-0 w-full max-w-[400px] drop-shadow-2xl z-10 transition-all\"
       :class=\"mobileMenu ? 'translate-x-0' : 'translate-x-full'\">

    <div class=\"flex w-full justify-between items-center p-4 py-6 border-b border-gray-200/75\">
      <a  href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null));
        echo "\">
        <img class=\"h-12\" loading=\"lazy\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/reckner-facilities-logo.webp"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"h-[50px] sm:h-[75px] w-full\" />
      </a>
      <button class=\"toolbar-btn\" @click=\"mobileMenu = !mobileMenu\" :aria-expanded=\"mobileMenu\"
        aria-controls=\"mobile-navigation\" aria-label=\"Close Navigation Menu\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/x.svg", "w-6 h-6"]);
        echo "
      </button>
    </div>

    <div id=\"mobile-nav\" class=\"flex-grow overflow-y-auto\">
      <ul class=\"level_0\">
      ";
        // line 22
        echo $context["macros"]->getnav_loop($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []), 1);
        echo "
      </ul>
    </div>

  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/mobile-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  54 => 16,  47 => 12,  43 => 11,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<!-- Pop Out Navigation -->
<nav class=\"fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm backdrop-grayscale z-50\" :class=\"mobileMenu ? 'visible' : 'invisible' \" x-cloak>

  <!-- UL Links -->
  <div class=\"absolute bg-gray-50 flex flex-col top-0 right-0 bottom-0 w-full max-w-[400px] drop-shadow-2xl z-10 transition-all\"
       :class=\"mobileMenu ? 'translate-x-0' : 'translate-x-full'\">

    <div class=\"flex w-full justify-between items-center p-4 py-6 border-b border-gray-200/75\">
      <a  href=\"{{ home_url|e }}\">
        <img class=\"h-12\" loading=\"lazy\" src=\"{{ url('theme://images/reckner-facilities-logo.webp') }}\" alt=\"Logo\" class=\"h-[50px] sm:h-[75px] w-full\" />
      </a>
      <button class=\"toolbar-btn\" @click=\"mobileMenu = !mobileMenu\" :aria-expanded=\"mobileMenu\"
        aria-controls=\"mobile-navigation\" aria-label=\"Close Navigation Menu\">
        {{ svg_icon('tabler/x.svg', 'w-6 h-6')|raw }}
      </button>
    </div>

    <div id=\"mobile-nav\" class=\"flex-grow overflow-y-auto\">
      <ul class=\"level_0\">
      {{ macros.nav_loop(pages.children.visible, 1) }}
      </ul>
    </div>

  </div>
</nav>", "partials/mobile-navigation.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/mobile-navigation.html.twig");
    }
}
