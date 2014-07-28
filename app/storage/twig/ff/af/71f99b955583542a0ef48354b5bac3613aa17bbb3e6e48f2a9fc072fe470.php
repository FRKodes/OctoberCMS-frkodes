<?php

/* /Applications/MAMP/htdocs/dev.frkodes.ninja/october-cms-frkodes/themes/demo/pages/blog.htm */
class __TwigTemplate_ffaf71f99b955583542a0ef48354b5bac3613aa17bbb3e6e48f2a9fc072fe470 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-8\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
    <div class=\"col-sm-4\">
        ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/dev.frkodes.ninja/october-cms-frkodes/themes/demo/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
