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

/* partials/logo.html.twig */
class __TwigTemplate_005b5037fea3f1436ead9daab9a17968afd256cb43a9be6bfa76028e3e7f17f7 extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" aria-label=\"Home\">
  <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/reckner-facilities-logo.webp"), "html", null, true);
        echo "\" alt=\"Reckner Facilities\" class=\"w-[12rem] min-w-[12rem] h-full transition hover:brightness-90\" />
</a>";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ home_url }}\" aria-label=\"Home\">
  <img src=\"{{ url('theme://images/reckner-facilities-logo.webp') }}\" alt=\"Reckner Facilities\" class=\"w-[12rem] min-w-[12rem] h-full transition hover:brightness-90\" />
</a>", "partials/logo.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/logo.html.twig");
    }
}
