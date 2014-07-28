<?php

/* /Applications/MAMP/htdocs/dev.frkodes.ninja/frkodes/themes/demo/pages/blog/post.htm */
class __TwigTemplate_4a74c4e34cd0a3203d1fe8844056dbe4c212c74e3f8c34171ea7fae509156b1c extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/dev.frkodes.ninja/frkodes/themes/demo/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
