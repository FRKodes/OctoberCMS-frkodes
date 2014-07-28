<?php

/* /Applications/MAMP/htdocs/dev.frkodes.ninja/frkodes/themes/demo/layouts/fallback */
class __TwigTemplate_ef1bc0d5dfc0281a73d9be440a5f0cb63f1890e1fd3e34d6c21202e0b2013d36 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/dev.frkodes.ninja/frkodes/themes/demo/layouts/fallback";
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
