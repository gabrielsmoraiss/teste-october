<?php

/* /var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm */
class __TwigTemplate_f6058a914a7f96b70c4d06a90d42afdd692d5e8e70647ed882a345266e937c20 extends Twig_Template
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
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "jQuery_version", array()), "html", null, true);
        echo "/jquery.min.js\"></script>
";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_octobercms_framework", array())) {
            // line 3
            echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        }
        // line 5
        echo "
<script src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.min.js", 1 => "assets/js/jquery.scrollex.min.js", 2 => "assets/js/jquery.scrolly.min.js", 3 => "assets/js/skel.min.js", 4 => "assets/js/util.js", 5 => "assets/js/main.js"));
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script>
{% if this.theme.load_octobercms_framework %}
{% framework extras %}
{% endif %}

<script src=\"{{ ['assets/js/jquery.min.js','assets/js/jquery.scrollex.min.js', 'assets/js/jquery.scrolly.min.js', 'assets/js/skel.min.js', 'assets/js/util.js', 'assets/js/main.js']|theme }}\"></script>", "/var/www/html/teste-october/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm", "");
    }
}
