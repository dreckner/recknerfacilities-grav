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

/* partials/goo.html.twig */
class __TwigTemplate_c063a5171040d15a6945a5b8f84a183391475c0cdce029d5e0496d6424db80e0 extends \Twig\Template
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
        echo "<!-- Filter: https://css-tricks.com/gooey-effect/ -->
<svg style=\"visibility: hidden; position: absolute;\" width=\"0\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
    <defs>
        <filter id=\"goo\"><feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"10\" result=\"blur\" />
            <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9\" result=\"goo\" />
            <feComposite in=\"SourceGraphic\" in2=\"goo\" operator=\"atop\"/>
        </filter>
    </defs>
</svg>";
    }

    public function getTemplateName()
    {
        return "partials/goo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Filter: https://css-tricks.com/gooey-effect/ -->
<svg style=\"visibility: hidden; position: absolute;\" width=\"0\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
    <defs>
        <filter id=\"goo\"><feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"10\" result=\"blur\" />
            <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9\" result=\"goo\" />
            <feComposite in=\"SourceGraphic\" in2=\"goo\" operator=\"atop\"/>
        </filter>
    </defs>
</svg>", "partials/goo.html.twig", "/home/davidreckner/source/grav-reckner/user/themes/reckner-facilities/templates/partials/goo.html.twig");
    }
}
