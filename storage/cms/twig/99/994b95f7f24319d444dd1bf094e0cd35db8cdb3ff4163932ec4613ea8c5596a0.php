<?php

/* /var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm */
class __TwigTemplate_f679b3857980b7d520f10464500864749ab47ccb5f597e9ac42e08d2f8d4b683 extends Twig_Template
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
        echo "<section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Fourth Section</h2>
        <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p>
    </header>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Fourth Section</h2>
        <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p>
    </header>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"{{'elements'|page}}\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"{{'blog'|page}}\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer>
</section>", "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm", "");
    }
}
