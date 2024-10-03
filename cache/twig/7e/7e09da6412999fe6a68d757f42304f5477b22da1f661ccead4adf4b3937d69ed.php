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

/* partials/footer.html.twig */
class __TwigTemplate_b5fc64b88686f087614d716e26294bd7469d12bf7b77fcdf209a953607855f72 extends \Twig\Template
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
        echo "<div class=\"max-w-[800px] text-gray-600 mx-auto px-4 text-center\">
  <div class=\"flex justify-center last:[&_>_span]:hidden font-medium\">

  </div>
  <div class=\"mt-3 prose prose-sm max-w-none\">
    <p><a href=\"https://reckner.com/privacy\" target=\"_blank\">Privacy Policy</a> | <a href=\"https://www.linkedin.com/showcase/reckner-facilities/\" target=\"_blank\">LinkedIn</a></p>
    <p>";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, twig_replace_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "footer", []), ["%%YEAR%%" => twig_date_format_filter($this->env, "now", "Y")]));
        echo "</p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"max-w-[800px] text-gray-600 mx-auto px-4 text-center\">
  <div class=\"flex justify-center last:[&_>_span]:hidden font-medium\">

  </div>
  <div class=\"mt-3 prose prose-sm max-w-none\">
    <p><a href=\"https://reckner.com/privacy\" target=\"_blank\">Privacy Policy</a> | <a href=\"https://www.linkedin.com/showcase/reckner-facilities/\" target=\"_blank\">LinkedIn</a></p>
    <p>{{ config.site.footer|replace({'%%YEAR%%': 'now'|date('Y')})|markdown }}</p>
  </div>
</div>", "partials/footer.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/footer.html.twig");
    }
}
