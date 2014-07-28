<?php

/* /Applications/MAMP/htdocs/dev.frkodes.ninja/frkodes/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_b2556a0cd89ac62c7544f21106dbd232e2d67006feab770176afcdfc6e41ab63 extends Twig_Template
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
        echo "<ul class=\"post-list\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <li>
            <h3><a href=\"";
            // line 4
            echo $this->env->getExtension('CMS')->pageFilter((isset($context["postPage"]) ? $context["postPage"] : null), array((isset($context["postPageIdParam"]) ? $context["postPageIdParam"] : null) => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a></h3>

            <p class=\"info\">
                Posted
                ";
            // line 8
            if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories"), "count")) {
                echo " in ";
            }
            // line 9
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "                    <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter((isset($context["categoryPage"]) ? $context["categoryPage"] : null), array((isset($context["categoryPageIdParam"]) ? $context["categoryPageIdParam"] : null) => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug")));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 11
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at"), "M d, Y"), "html", null, true);
            echo "
            </p>

            ";
            // line 15
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt")) {
                // line 16
                echo "                <p class=\"excerpt\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt"), "html", null, true);
                echo "</p>
            ";
            } else {
                // line 18
                echo "                <div class=\"content\">";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html");
                echo "</div>
            ";
            }
            // line 20
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</ul>

";
        // line 26
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getLastPage") > 1)) {
            // line 27
            echo "    <ul class=\"pagination\">
        ";
            // line 28
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") > 1)) {
                // line 29
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getLastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") == (isset($context["page"]) ? $context["page"] : null))) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 34
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => (isset($context["page"]) ? $context["page"] : null)));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
        ";
            // line 38
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getLastPage") > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage"))) {
                // line 39
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 41
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/dev.frkodes.ninja/frkodes/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 41,  165 => 39,  163 => 38,  160 => 37,  149 => 34,  144 => 33,  140 => 32,  137 => 31,  131 => 29,  129 => 28,  126 => 27,  124 => 26,  120 => 24,  111 => 22,  105 => 20,  99 => 18,  93 => 16,  91 => 15,  84 => 12,  70 => 11,  61 => 10,  43 => 9,  39 => 8,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
