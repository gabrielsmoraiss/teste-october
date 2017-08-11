<?php

/* /var/www/html/teste-october/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_b079dadf817d133179c7e56a5f2fcc1c4139972c60ec98d23a3df1f869df78c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_cce9036e272a13902980a8fa9c1d568b577e7c1df80da8cee4dd8d02399da310' => array($this, 'block___internal_cce9036e272a13902980a8fa9c1d568b577e7c1df80da8cee4dd8d02399da310'),
            '__internal_9856f61ef9f18c83f21b3de70273ffcfe8942da21850a36b3a5d127a09597316' => array($this, 'block___internal_9856f61ef9f18c83f21b3de70273ffcfe8942da21850a36b3a5d127a09597316'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>";
        // line 9
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_cce9036e272a13902980a8fa9c1d568b577e7c1df80da8cee4dd8d02399da310", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>";
        // line 32
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_9856f61ef9f18c83f21b3de70273ffcfe8942da21850a36b3a5d127a09597316", $context, $blocks));
        // line 37
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 9
    public function block___internal_cce9036e272a13902980a8fa9c1d568b577e7c1df80da8cee4dd8d02399da310($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 32
    public function block___internal_9856f61ef9f18c83f21b3de70273ffcfe8942da21850a36b3a5d127a09597316($context, array $blocks = array())
    {
        // line 33
        echo "{% if result %}";
        echo "
    The result is ";
        // line 34
        echo "{{ result }}";
        echo ".
";
        // line 35
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 37
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  95 => 23,  77 => 9,  45 => 37,  43 => 32,  33 => 24,  31 => 9,  21 => 1,);
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

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>{% filter escape %}<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">{{ \"{% partial \\\"calcresult\\\" %}\" }}</div>
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>{% filter escape %}
{{ \"{% if result %}\" }}
    The result is {{ \"{{ result }}\" }}.
{{ \"{% else %}\" }}
    Click the <em>Calculate</em> button to find the answer.
{{ \"{% endif %}\" }}{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>", "/var/www/html/teste-october/themes/demo/partials/explain/ajax.htm", "");
    }
}
