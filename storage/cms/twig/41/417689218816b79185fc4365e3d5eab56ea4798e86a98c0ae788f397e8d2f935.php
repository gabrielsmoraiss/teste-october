<?php

/* /var/www/html/teste-october/themes/responsiv-clean/partials/site/sidebar.htm */
class __TwigTemplate_2783ad744ad90d9bdbedb11fa9837e40dd6b9bb787e436aef995fda58170da74 extends Twig_Template
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
        echo "<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>

<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h1 class=\"site-name\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
    </h1>
    <p class=\"site-motto\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_motto", array()), "html", null, true);
        echo "
    </p>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Recent posts</h2>
    <ul class=\"segment-list\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blogPosts"] ?? null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Follow me</h2>
    <ul class=\"segment-list\">
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "twitter_url", array())) {
            // line 27
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "twitter_url", array()), "html", null, true);
            echo "\" target=\"_blank\">Twitter</a></li>
        ";
        }
        // line 29
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "facebook_url", array())) {
            // line 30
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "facebook_url", array()), "html", null, true);
            echo "\" target=\"_blank\">Facebook</a></li>
        ";
        }
        // line 32
        echo "        <li><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/rss");
        echo "\">RSS Feed</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/teste-october/themes/responsiv-clean/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  79 => 30,  76 => 29,  70 => 27,  68 => 26,  60 => 20,  49 => 18,  45 => 17,  35 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>

<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h1 class=\"site-name\">
        <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
    </h1>
    <p class=\"site-motto\">
        {{ this.theme.site_motto }}
    </p>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Recent posts</h2>
    <ul class=\"segment-list\">
        {% for post in blogPosts.posts %}
            <li><a href=\"{{ post.url }}\">{{ post.title }}</a></li>
        {% endfor %}
    </ul>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Follow me</h2>
    <ul class=\"segment-list\">
        {% if this.theme.twitter_url %}
            <li><a href=\"{{ this.theme.twitter_url }}\" target=\"_blank\">Twitter</a></li>
        {% endif %}
        {% if this.theme.facebook_url %}
            <li><a href=\"{{ this.theme.facebook_url }}\" target=\"_blank\">Facebook</a></li>
        {% endif %}
        <li><a href=\"{{ 'blog/rss'|page }}\">RSS Feed</a></li>
    </ul>
</div>", "/var/www/html/teste-october/themes/responsiv-clean/partials/site/sidebar.htm", "");
    }
}
