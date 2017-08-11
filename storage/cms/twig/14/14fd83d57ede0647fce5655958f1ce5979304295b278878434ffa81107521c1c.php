<?php

/* /var/www/html/teste-october/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_b1f69761d6535bebbe7466703fa0b6ac35d44af58e272fc546549e0b909e2747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_35bad19f6f293dd7bf34617e974ca1f4c645fb0d65c28546405924344b5ee0e0' => array($this, 'block___internal_35bad19f6f293dd7bf34617e974ca1f4c645fb0d65c28546405924344b5ee0e0'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_35bad19f6f293dd7bf34617e974ca1f4c645fb0d65c28546405924344b5ee0e0", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_35bad19f6f293dd7bf34617e974ca1f4c645fb0d65c28546405924344b5ee0e0($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
{% filter escape %}
{{ \"{% component 'demoTodo' %}\" }}
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"{{ 'ajax'|page }}\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>", "/var/www/html/teste-october/themes/demo/partials/explain/plugins.htm", "");
    }
}
