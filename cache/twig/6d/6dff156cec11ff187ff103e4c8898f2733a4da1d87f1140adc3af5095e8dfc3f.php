<?php

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_dac0da0880ab2d0f9ea050175c7a5f05742af34573c10d2c4c116f7067d5308f extends Twig_Template
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
        echo "<ul class=\"post-header__breadcrumb\">
    <li><a href=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\" title=\"blog homepage\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.HOME");
        echo "</a></li>
    <li>-</li>
    <li>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"post-header__breadcrumb\">
    <li><a href=\"{{base_url}}\" title=\"blog homepage\">{{ 'THEME_MASONRY.HOME'|t }}</a></li>
    <li>-</li>
    <li>{{page.title}}</li>
</ul>
", "partials/breadcrumbs.html.twig", "/Users/janus/Documents/www/Github/freeplay-blog/user/themes/masonry/templates/partials/breadcrumbs.html.twig");
    }
}
