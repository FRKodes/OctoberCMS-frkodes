<?php

/* /Applications/MAMP/htdocs/dev.frkodes.ninja/october-cms-frkodes/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_7027c03f9c7cd915a1de2203a51747c3401b19febf1c0614fc3e5d1329976526 extends Twig_Template
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
        echo "<ul class=\"category-list\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        ";
            $context["postCount"] = $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "postCount");
            // line 4
            echo "        <li ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug") == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 5
            echo $this->env->getExtension('CMS')->pageFilter((isset($context["categoryPage"]) ? $context["categoryPage"] : null), array((isset($context["categoryPageIdParam"]) ? $context["categoryPageIdParam"] : null) => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</a> 
            ";
            // line 6
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 7
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
            ";
            }
            // line 9
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/dev.frkodes.ninja/october-cms-frkodes/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  50 => 9,  44 => 7,  42 => 6,  36 => 5,  29 => 4,  26 => 3,  171 => 41,  165 => 39,  163 => 38,  160 => 37,  149 => 34,  144 => 33,  140 => 32,  137 => 31,  131 => 29,  129 => 28,  126 => 27,  124 => 26,  120 => 24,  111 => 22,  105 => 20,  99 => 18,  93 => 16,  91 => 15,  84 => 12,  70 => 11,  61 => 10,  43 => 9,  39 => 8,  30 => 4,  22 => 2,  35 => 7,  31 => 6,  27 => 3,  23 => 3,  19 => 1,);
    }
}
