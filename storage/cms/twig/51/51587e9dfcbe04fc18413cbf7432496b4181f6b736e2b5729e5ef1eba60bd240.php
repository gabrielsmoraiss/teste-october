<?php

/* /var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/pages/404.htm */
class __TwigTemplate_dc66f0885de0b9a0fde588883a233faecd1aa8e0b682bd564446ddb4f5e98659 extends Twig_Template
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
        echo "<header class=\"major\">
    <h2>Sorry, the requested page was not found.</h2>
    <p><a class=\"button\" href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Back to Home</a></p>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"major\">
    <h2>Sorry, the requested page was not found.</h2>
    <p><a class=\"button\" href=\"{{'home'|page}}\">Back to Home</a></p>
</header>", "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/pages/404.htm", "");
    }
}
