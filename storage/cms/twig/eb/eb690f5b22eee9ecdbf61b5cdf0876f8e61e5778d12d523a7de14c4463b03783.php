<?php

/* /var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_970e3b3880aea57ba2aadb97a1e1800c98a98ca6b5a79fefafba25119550fded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">One</a></li>
        <li><a href=\"#two\">Two</a></li>
        <li><a href=\"#three\">Three</a></li>
        <li><a href=\"#four\">Four</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">One</a></li>
        <li><a href=\"#two\">Two</a></li>
        <li><a href=\"#three\">Three</a></li>
        <li><a href=\"#four\">Four</a></li>
    </ul>
</nav>", "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
