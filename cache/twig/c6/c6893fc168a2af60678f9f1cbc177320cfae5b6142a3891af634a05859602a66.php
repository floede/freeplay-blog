<?php

/* sidebar/widget.html.twig */
class __TwigTemplate_2eb3845370b8656eb061527f7d57293898bae59e16b1009dd1ee3c86c632b9ad extends Twig_Template
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
        echo "<div class=\"widget ";
        if ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "css_suffix", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "css_suffix", array());
        } else {
            echo "HTML";
        }
        echo "\">
  <h2 class=\"widget-title\">";
        // line 2
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "title", array());
        echo "</h2>
  ";
        // line 3
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget {% if module.header.css_suffix %}{{ module.header.css_suffix }}{% else %}HTML{% endif %}\">
  <h2 class=\"widget-title\">{{ module.title }}</h2>
  {{ module.content }}
</div>
", "sidebar/widget.html.twig", "/Users/janus/Documents/www/Github/freeplay-blog/user/themes/receptar/templates/sidebar/widget.html.twig");
    }
}
