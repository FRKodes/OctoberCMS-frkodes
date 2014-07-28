<?php

/* /Applications/MAMP/htdocs/dev.frkodes.ninja/october-cms-frkodes/themes/demo/layouts/default.htm */
class __TwigTemplate_de797720339139cd207dc58a8b5a4f4bd1df509a0bb9ea6cc680068dd4701ea1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>October CMS - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title"), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 11
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">FRKodes</a>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->pageFilter("blog");
        echo "\">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">
                <div class=\"jumbotron\">
                    <h1>Navbar example</h1>
                    <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                    <p>To see the difference between static and fixed top navbars, just scroll.</p>
                    <p> <a class=\"btn btn-lg btn-primary\" href=\"../../components/#navbar\" role=\"button\">View navbar docs &raquo;</a> </p>
              </div>
            </div>
            <div class=\"container\">
                ";
        // line 51
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 52
        echo "            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 61
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/app.js"));
        // line 64
        echo "\"></script>
        ";
        // line 65
        echo '<script src="'. Request::getBasePath() .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath() .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath() .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 66
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 67
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/dev.frkodes.ninja/october-cms-frkodes/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 67,  115 => 66,  108 => 64,  106 => 61,  101 => 58,  97 => 57,  90 => 52,  88 => 51,  66 => 32,  59 => 28,  40 => 11,  37 => 9,  34 => 8,  24 => 4,  57 => 11,  50 => 9,  44 => 7,  42 => 6,  36 => 5,  29 => 4,  26 => 3,  171 => 41,  165 => 39,  163 => 38,  160 => 37,  149 => 34,  144 => 33,  140 => 32,  137 => 31,  131 => 29,  129 => 28,  126 => 27,  124 => 26,  120 => 24,  111 => 65,  105 => 20,  99 => 18,  93 => 16,  91 => 15,  84 => 12,  70 => 11,  61 => 10,  43 => 9,  39 => 8,  30 => 7,  22 => 2,  35 => 7,  31 => 6,  27 => 3,  23 => 3,  19 => 1,);
    }
}
