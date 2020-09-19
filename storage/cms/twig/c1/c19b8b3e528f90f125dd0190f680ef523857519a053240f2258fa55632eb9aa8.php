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

/* C:\xampp\htdocs\International/themes/international/pages/contact.htm */
class __TwigTemplate_32fc11ba78d5277c679db1b4541d50994a77a7ff731f1c9eddad6444b5942a7f extends \Twig\Template
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
        echo "<div id=\"contact-content\">
    <div class=\"jumbotron jumbotron-fluid bg-white\">
        <div class=\"container \"> <span class=\"dots\">



                <img class=\"absolute\" style=\"right: 15%;top: 10%;width: 70px;\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 20%;top: 20%;width: 30px;\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 17%;top: 25%;width: 20px;\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">



            </span>
            <div class=\"row my-4\">
                <div class=\"col-lg\">
                    <h1 class=\"font-bold ml-3\">Contact us</h1>
                </div>
            </div>
            <div class=\"row flex justify-content-center\">
                <div class=\"col-lg\">
                    <div class=\"card mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-2 order-md-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title mt-4 mb-4\">Registered office</h5>
                                    <p class=\"card-text text-sm\">
                                        <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_call_bubble.png");
        echo "\" class=\"inline-block\"
                                            alt=\"\">+230 404 8000</p>
                                    <p class=\"card-text\">
                                        <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_building_bubble.png");
        echo "\"
                                            class=\"inline-block align-top\" alt=\"\"> <span class=\"inline-block text-sm\">

                                            4th Floor Ebene Skies <br>

                                            Rue de L’Institut <br>

                                            Ebene <br>

                                            Mauritius

                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6 order-1 order-md-2\">
                                <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Map_4.png");
        echo "\" style=\"height:100%;object-fit: cover;\"
                                    class=\"card-img\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg\">
                    <div class=\"card mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-2 order-md-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title mt-4 mb-4\">Administration office</h5>
                                    <p class=\"card-text text-sm\">
                                        <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_call_bubble.png");
        echo "\" class=\"inline-block\"
                                            alt=\"\">+27 10 594 7592</p>
                                    <p class=\"card-text\">
                                        <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_building_bubble.png");
        echo "\"
                                            class=\"inline-block align-top\" alt=\"\"> <span class=\"inline-block text-sm\">

                                            Building 4, Parc Nicol Office <br> Park

                                            William Nicol Drive <br>

                                            Bryanston, 2191 <br>

                                            Johannesburg, South Africa

                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6 order-1 order-md-2\">
                                <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Map_3.png");
        echo "\" style=\"height:100%;object-fit: cover;\"
                                    class=\"card-img\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\International/themes/international/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 93,  145 => 77,  139 => 74,  122 => 60,  103 => 44,  97 => 41,  75 => 22,  69 => 19,  63 => 16,  57 => 13,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"contact-content\">
    <div class=\"jumbotron jumbotron-fluid bg-white\">
        <div class=\"container \"> <span class=\"dots\">



                <img class=\"absolute\" style=\"right: 15%;top: 10%;width: 70px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 20%;top: 20%;width: 30px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 17%;top: 25%;width: 20px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">



            </span>
            <div class=\"row my-4\">
                <div class=\"col-lg\">
                    <h1 class=\"font-bold ml-3\">Contact us</h1>
                </div>
            </div>
            <div class=\"row flex justify-content-center\">
                <div class=\"col-lg\">
                    <div class=\"card mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-2 order-md-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title mt-4 mb-4\">Registered office</h5>
                                    <p class=\"card-text text-sm\">
                                        <img src=\"{{'assets/img/Icon_call_bubble.png'|theme}}\" class=\"inline-block\"
                                            alt=\"\">+230 404 8000</p>
                                    <p class=\"card-text\">
                                        <img src=\"{{'assets/img/Icon_building_bubble.png'|theme}}\"
                                            class=\"inline-block align-top\" alt=\"\"> <span class=\"inline-block text-sm\">

                                            4th Floor Ebene Skies <br>

                                            Rue de L’Institut <br>

                                            Ebene <br>

                                            Mauritius

                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6 order-1 order-md-2\">
                                <img src=\"{{'assets/img/Map_4.png'|theme}}\" style=\"height:100%;object-fit: cover;\"
                                    class=\"card-img\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg\">
                    <div class=\"card mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-2 order-md-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title mt-4 mb-4\">Administration office</h5>
                                    <p class=\"card-text text-sm\">
                                        <img src=\"{{'assets/img/Icon_call_bubble.png'|theme}}\" class=\"inline-block\"
                                            alt=\"\">+27 10 594 7592</p>
                                    <p class=\"card-text\">
                                        <img src=\"{{'assets/img/Icon_building_bubble.png'|theme}}\"
                                            class=\"inline-block align-top\" alt=\"\"> <span class=\"inline-block text-sm\">

                                            Building 4, Parc Nicol Office <br> Park

                                            William Nicol Drive <br>

                                            Bryanston, 2191 <br>

                                            Johannesburg, South Africa

                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6 order-1 order-md-2\">
                                <img src=\"{{'assets/img/Map_3.png'|theme}}\" style=\"height:100%;object-fit: cover;\"
                                    class=\"card-img\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\International/themes/international/pages/contact.htm", "");
    }
}
