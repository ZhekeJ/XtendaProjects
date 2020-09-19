<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\International/themes/international/layouts/default.htm */
class __TwigTemplate_34887befe91d12b9622241fa723d8dc4ecfe091fd1e4c0455086990b81d3f8bc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fonts/stylesheet.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">

    <link rel=\"icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Xtenda_icon_orange.png");
        echo "\" />
    <title>Xtenda Finance - ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/tarkhov/postboot/v1.0.0/dist/css/postboot.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
</head>
<style>
    .frame {

        border: 3px solid #ccc;
        background: #ed8936;


    }
</style>

<body>
    <span class=\"hidden sm:hidden md:hidden lg:block\">

        <nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light border-solid border-red-500\">

            <div class=\"container\">

                <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">

                    <ul class=\"navbar-nav mr-auto\">

                        <li class=\"nav-item text-center px-1 ";
        // line 40
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40) == "Home")) ? ("active") : (""));
        echo "\">


                            <a class=\"nav-link\" href=\"/\">Home<span class=\"sr-only\">(current)</span>

                            </a>
                        </li>
                        <li class=\"nav-item text-center px-1 ";
        // line 47
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47) == "About")) ? ("active") : (""));
        echo "\"> <a
                                class=\"nav-link\" href=\"/about\">About</a>
                        </li>
                        <li class=\"nav-item text-center px-1 ";
        // line 50
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50) == "Products")) ? ("active") : (""));
        echo "\"> <a
                                class=\"nav-link \" href=\"/products\">Product</a>
                        </li>
                        <li class=\"nav-item text-center px-1 ";
        // line 53
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 53), "title", [], "any", false, false, false, 53) == "Board")) ? ("active") : (""));
        echo "\"> <a
                                class=\"nav-link \" href=\"/board\">Board</a>
                        </li>
                        <li class=\"nav-item text-center px-1 ";
        // line 56
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56) == "Countries")) ? ("active") : (""));
        echo "\"> <a
                                class=\"nav-link \" href=\"/countries\">Countries</a>
                        </li>
                        <li class=\"nav-item text-center px-1 ";
        // line 59
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59) == "Investors")) ? ("active") : (""));
        echo "\"> <a
                                class=\"nav-link \" href=\"/investors\">Investors</a>
                        </li>
                        <li class=\"nav-item text-center px-1 ";
        // line 62
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 62), "title", [], "any", false, false, false, 62) == "Contact")) ? ("active") : (""));
        echo "\"> <a
                                class=\"nav-link \" href=\"/contact\">Contact</a>
                        </li>
                    </ul>
                </div> <span class=\"hidden md:block\">

                    <ul class=\"navbar-nav sm:ml-auto md:mr-auto\">

                        <li class=\"mr-3\">

                            <div class=\"dropdown mt-2\">

                                <button type=\"button\" class=\"bg-transparent dropdown-toggle outline-none\"
                                    style=\"outline: 0; outline:none\" data-toggle=\"dropdown\">

                                    <img class=\"inline-block px-1\"
                                        src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_international_orange_desktop.png");
        echo "\" alt=\"\"> <span
                                        class=\"px-1 font-bold\">International</span>
                                </button>
                                <!--  <div class=\"dropdown-menu rounded-0 mt-2\"> 
                                    <a class=\"dropdown-item\" href=\"#\"><img style=\"width: 20%; vertical-align: text-top;\" src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Zambia_Option card.png");
        echo "\">Zambia</a> 
                                    <a class=\"dropdown-item\" href=\"#\">Link 2</a>
                                    <a class=\"dropdown-item\" href=\"#\">Link 3</a>
                                </div> -->
                            </div>
                        </li>
                    </ul>
                </span> <a class=\"navbar-brand px-1 mr-auto md:ml-auto\" href=\"/\">



                    <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Xtenda_icon_orange_desktop.png");
        echo "\" alt=\"\">



                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
                    aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span
                        class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
        </nav>
    </span>
    <span class=\"block sm:block md:block lg:hidden\">



        <nav role=\"navigation\" class=\"mobile_nav\">

            <div id=\"menuToggle\">



                <div class=\"menu-logo absolute right-0 top-0\">



                    <img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Mobile_menu_Xtenda icon_orange.svg");
        echo "\" alt=\"\">



                </div>



                <p class=\"font-bold text-orange-500 absolute text-center w-full top-0 left-0 mt-4\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 127), "title", [], "any", false, false, false, 127), "html", null, true);
        echo "
                </p>

                <input type=\"checkbox\" />

                <span></span>
                <span></span>
                <span></span>
                <ul id=\"menu\">
                    <div class=\"menu-logo absolute right-0 top-0\">
                        <img src=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Mobile_menu_Xtenda icon_white.svg");
        echo "\" alt=\"\">
                    </div>
                    <li class=\"";
        // line 139
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 139), "title", [], "any", false, false, false, 139) == "Home")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div> <a class=\"text-white menu-font my-2 mx-1\" href=\"/\">Home</a>
                    </li>
                    <li class=\"";
        // line 142
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 142), "title", [], "any", false, false, false, 142) == "About")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/about\">About</a>

                    </li>
                    <li class=\"";
        // line 146
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 146), "title", [], "any", false, false, false, 146) == "Products")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/products\">Product</a>

                    <li class=\"";
        // line 149
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 149), "title", [], "any", false, false, false, 149) == "Board")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/board\">Board</a>

                    <li class=\"";
        // line 152
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 152), "title", [], "any", false, false, false, 152) == "Countries")) ? ("active") : (""));
        echo "\">
                
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"countries\">Countries</a>

                    </li>
                    <li class=\"";
        // line 157
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 157), "title", [], "any", false, false, false, 157) == "Investors")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\"
                            href=\"/investors\">Investors</a>

                    </li>
                    <li class=\"";
        // line 162
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 162), "title", [], "any", false, false, false, 162) == "Contact")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/contact\">Contact</a>

                    </li>
                    <!-- <li>
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"#\">International</a>

                    </li> -->
                </ul>
            </div>
        </nav>
    </span>

    ";
        // line 175
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 176
        echo "
    <footer class=\"footer-area footer--light bg-white\">
        <div class=\"w-100 h-1 bg-orange-400\"></div>
        <div class=\"footer-big sm:text-center md:text-left lg:text-left\">
            <!-- start .container -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-12\">
                        <div class=\"footer-widget \">
                            <div class=\"widget-about flex justify-content-center\">
                                <img src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Desktop_Footer_Xtenda logo.png");
        echo "\" alt=\"\" class=\"w-1/2\">
                            </div>
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-4 -->
                    <div class=\"col-md-3 col-sm-4\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-menu footer-menu--1\">
                                <ul>
                                    <li class=\"active\"> <a href=\"/\">Home</a>
                                    </li>
                                    <li> <a href=\"/about\">About</a>
                                    </li>
                                    <li> <a href=\"/products\">Product</a>
                                    </li>
                                    <li> <a href=\"/board\">Board</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-4\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-menu\">
                                <ul>
                                    <li> <a href=\"/countries\">Countries</a>
                                    </li>
                                    <li> <a href=\"/investors\">Investors</a>
                                    </li>
                                    <li> <a href=\"/contact\">Contact</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-lg-3 -->
                    <div class=\"col-md-3 col-sm-4\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-menu no-padding\">
                                <ul>
                                    
                                    <li class=\"flex justify-content-center my-4 block sm:hidden\">
                                        <div class=\"w-1/2 h-1 bg-orange-400\"></div>
                                    </li>
                                    <li>
                                        <div class=\"dropdown mt-2\">
                                            <button type=\"button\" class=\"bg-transparent dropdown-toggle outline-none\"
                                                style=\"outline: 0; outline:none\" data-toggle=\"dropdown\">
                                                <img class=\"inline-block px-1\"
                                                    src=\"";
        // line 242
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_international_orange_desktop.png");
        echo "\"
                                                    alt=\"\"> <span class=\"px-1 font-bold\">International</span>
                                            </button>
                                            <!--   <div class=\"dropdown-menu rounded-0 mt-2\"> <a class=\"dropdown-item\"
                                                    href=\"#\">Link 1</a>
                                                <a class=\"dropdown-item\" href=\"#\">Link 2</a>
                                                <a class=\"dropdown-item\" href=\"#\">Link 3</a>
                                            </div> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- Ends: .col-lg-3 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->
        <div class=\"mini-footer bg-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copyright-text text-center\">
                            <p>© 2020 © <span class=\"text-orange-500\">Xtenda Financial Holdings Limited.</span> All
                                right reserved.<span class=\"text-orange-500\">DBF Capital Partners Limited</span> is
                                a major shareholder.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.rawgit.com/tarkhov/postboot/v1.0.0/dist/js/postboot.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
    <script src=\"";
        // line 284
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/all.js");
        echo "\"></script>
    <script>
        \$('.product-holder').scrollspy({
            target: '#navbar-example'
        });

        \$(\"#menuToggle\").click(function () {

            console.log(\"toggle\");
            \$(this).toggleClass('active');

        });

        var \$jq = jQuery.noConflict();
        \$jq(document).ready(function () {
            /*        \$jq('a').click( function(event) {
                        \$jq(this).hide();
                        event.preventDefault();
                    });*/

            \$('.slider-timeline').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                prevArrow: false,
                nextArrow: false,
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [{
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },

                ]

            });

        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\International/themes/international/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 284,  358 => 242,  299 => 186,  287 => 176,  285 => 175,  269 => 162,  261 => 157,  253 => 152,  247 => 149,  241 => 146,  234 => 142,  228 => 139,  223 => 137,  210 => 127,  199 => 119,  170 => 93,  156 => 82,  149 => 78,  130 => 62,  124 => 59,  118 => 56,  112 => 53,  106 => 50,  100 => 47,  90 => 40,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <link href=\"{{ 'assets/css/fonts/stylesheet.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/style.css'| theme }}\" rel=\"stylesheet\">

    <link rel=\"icon\" href=\"{{'assets/img/Xtenda_icon_orange.png' |theme}}\" />
    <title>Xtenda Finance - {{ this.page.title }}</title>
    <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/tarkhov/postboot/v1.0.0/dist/css/postboot.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
</head>
<style>
    .frame {

        border: 3px solid #ccc;
        background: #ed8936;


    }
</style>

<body>
    <span class=\"hidden sm:hidden md:hidden lg:block\">

        <nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light border-solid border-red-500\">

            <div class=\"container\">

                <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">

                    <ul class=\"navbar-nav mr-auto\">

                        <li class=\"nav-item text-center px-1 {{this.page.title == 'Home' ? 'active' : ''  }}\">


                            <a class=\"nav-link\" href=\"/\">Home<span class=\"sr-only\">(current)</span>

                            </a>
                        </li>
                        <li class=\"nav-item text-center px-1 {{this.page.title == 'About' ? 'active' : ''  }}\"> <a
                                class=\"nav-link\" href=\"/about\">About</a>
                        </li>
                        <li class=\"nav-item text-center px-1 {{this.page.title == 'Products' ? 'active' : ''  }}\"> <a
                                class=\"nav-link \" href=\"/products\">Product</a>
                        </li>
                        <li class=\"nav-item text-center px-1 {{this.page.title == 'Board' ? 'active' : ''  }}\"> <a
                                class=\"nav-link \" href=\"/board\">Board</a>
                        </li>
                        <li class=\"nav-item text-center px-1 {{this.page.title == 'Countries' ? 'active' : ''  }}\"> <a
                                class=\"nav-link \" href=\"/countries\">Countries</a>
                        </li>
                        <li class=\"nav-item text-center px-1 {{this.page.title == 'Investors' ? 'active' : ''  }}\"> <a
                                class=\"nav-link \" href=\"/investors\">Investors</a>
                        </li>
                        <li class=\"nav-item text-center px-1 {{this.page.title == 'Contact' ? 'active' : ''  }}\"> <a
                                class=\"nav-link \" href=\"/contact\">Contact</a>
                        </li>
                    </ul>
                </div> <span class=\"hidden md:block\">

                    <ul class=\"navbar-nav sm:ml-auto md:mr-auto\">

                        <li class=\"mr-3\">

                            <div class=\"dropdown mt-2\">

                                <button type=\"button\" class=\"bg-transparent dropdown-toggle outline-none\"
                                    style=\"outline: 0; outline:none\" data-toggle=\"dropdown\">

                                    <img class=\"inline-block px-1\"
                                        src=\"{{'assets/img/Icon_international_orange_desktop.png'|theme}}\" alt=\"\"> <span
                                        class=\"px-1 font-bold\">International</span>
                                </button>
                                <!--  <div class=\"dropdown-menu rounded-0 mt-2\"> 
                                    <a class=\"dropdown-item\" href=\"#\"><img style=\"width: 20%; vertical-align: text-top;\" src=\"{{'assets/img/Image_Zambia_Option card.png'|theme}}\">Zambia</a> 
                                    <a class=\"dropdown-item\" href=\"#\">Link 2</a>
                                    <a class=\"dropdown-item\" href=\"#\">Link 3</a>
                                </div> -->
                            </div>
                        </li>
                    </ul>
                </span> <a class=\"navbar-brand px-1 mr-auto md:ml-auto\" href=\"/\">



                    <img src=\"{{'assets/img/Xtenda_icon_orange_desktop.png'|theme}}\" alt=\"\">



                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
                    aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span
                        class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
        </nav>
    </span>
    <span class=\"block sm:block md:block lg:hidden\">



        <nav role=\"navigation\" class=\"mobile_nav\">

            <div id=\"menuToggle\">



                <div class=\"menu-logo absolute right-0 top-0\">



                    <img src=\"{{'assets/img/Mobile_menu_Xtenda icon_orange.svg'|theme}}\" alt=\"\">



                </div>



                <p class=\"font-bold text-orange-500 absolute text-center w-full top-0 left-0 mt-4\">{{ this.page.title }}
                </p>

                <input type=\"checkbox\" />

                <span></span>
                <span></span>
                <span></span>
                <ul id=\"menu\">
                    <div class=\"menu-logo absolute right-0 top-0\">
                        <img src=\"{{'assets/img/Mobile_menu_Xtenda icon_white.svg'|theme}}\" alt=\"\">
                    </div>
                    <li class=\"{{this.page.title == 'Home' ? 'active' : ''  }}\">
                        <div class=\"line\"></div> <a class=\"text-white menu-font my-2 mx-1\" href=\"/\">Home</a>
                    </li>
                    <li class=\"{{this.page.title == 'About' ? 'active' : ''  }}\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/about\">About</a>

                    </li>
                    <li class=\"{{this.page.title == 'Products' ? 'active' : ''  }}\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/products\">Product</a>

                    <li class=\"{{this.page.title == 'Board' ? 'active' : ''  }}\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/board\">Board</a>

                    <li class=\"{{this.page.title == 'Countries' ? 'active' : ''  }}\">
                
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"countries\">Countries</a>

                    </li>
                    <li class=\"{{this.page.title == 'Investors' ? 'active' : ''  }}\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\"
                            href=\"/investors\">Investors</a>

                    </li>
                    <li class=\"{{this.page.title == 'Contact' ? 'active' : ''  }}\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/contact\">Contact</a>

                    </li>
                    <!-- <li>
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"#\">International</a>

                    </li> -->
                </ul>
            </div>
        </nav>
    </span>

    {% page %}

    <footer class=\"footer-area footer--light bg-white\">
        <div class=\"w-100 h-1 bg-orange-400\"></div>
        <div class=\"footer-big sm:text-center md:text-left lg:text-left\">
            <!-- start .container -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-12\">
                        <div class=\"footer-widget \">
                            <div class=\"widget-about flex justify-content-center\">
                                <img src=\"{{'assets/img/Desktop_Footer_Xtenda logo.png'|theme}}\" alt=\"\" class=\"w-1/2\">
                            </div>
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-4 -->
                    <div class=\"col-md-3 col-sm-4\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-menu footer-menu--1\">
                                <ul>
                                    <li class=\"active\"> <a href=\"/\">Home</a>
                                    </li>
                                    <li> <a href=\"/about\">About</a>
                                    </li>
                                    <li> <a href=\"/products\">Product</a>
                                    </li>
                                    <li> <a href=\"/board\">Board</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-4\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-menu\">
                                <ul>
                                    <li> <a href=\"/countries\">Countries</a>
                                    </li>
                                    <li> <a href=\"/investors\">Investors</a>
                                    </li>
                                    <li> <a href=\"/contact\">Contact</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-lg-3 -->
                    <div class=\"col-md-3 col-sm-4\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-menu no-padding\">
                                <ul>
                                    
                                    <li class=\"flex justify-content-center my-4 block sm:hidden\">
                                        <div class=\"w-1/2 h-1 bg-orange-400\"></div>
                                    </li>
                                    <li>
                                        <div class=\"dropdown mt-2\">
                                            <button type=\"button\" class=\"bg-transparent dropdown-toggle outline-none\"
                                                style=\"outline: 0; outline:none\" data-toggle=\"dropdown\">
                                                <img class=\"inline-block px-1\"
                                                    src=\"{{'assets/img/Icon_international_orange_desktop.png'|theme}}\"
                                                    alt=\"\"> <span class=\"px-1 font-bold\">International</span>
                                            </button>
                                            <!--   <div class=\"dropdown-menu rounded-0 mt-2\"> <a class=\"dropdown-item\"
                                                    href=\"#\">Link 1</a>
                                                <a class=\"dropdown-item\" href=\"#\">Link 2</a>
                                                <a class=\"dropdown-item\" href=\"#\">Link 3</a>
                                            </div> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- Ends: .col-lg-3 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->
        <div class=\"mini-footer bg-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copyright-text text-center\">
                            <p>© 2020 © <span class=\"text-orange-500\">Xtenda Financial Holdings Limited.</span> All
                                right reserved.<span class=\"text-orange-500\">DBF Capital Partners Limited</span> is
                                a major shareholder.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.rawgit.com/tarkhov/postboot/v1.0.0/dist/js/postboot.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
    <script src=\"{{'assets/js/all.js'|theme}}\"></script>
    <script>
        \$('.product-holder').scrollspy({
            target: '#navbar-example'
        });

        \$(\"#menuToggle\").click(function () {

            console.log(\"toggle\");
            \$(this).toggleClass('active');

        });

        var \$jq = jQuery.noConflict();
        \$jq(document).ready(function () {
            /*        \$jq('a').click( function(event) {
                        \$jq(this).hide();
                        event.preventDefault();
                    });*/

            \$('.slider-timeline').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                prevArrow: false,
                nextArrow: false,
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [{
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },

                ]

            });

        });
    </script>
</body>

</html>", "C:\\xampp\\htdocs\\International/themes/international/layouts/default.htm", "");
    }
}
