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

/* C:\xampp\htdocs\International/themes/international/pages/home.htm */
class __TwigTemplate_045129ba6d5cec9b7cd105eaa32ee303075b6a83907cb0c503b3e7430fb12430 extends \Twig\Template
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
        echo "<div id=\"home-content\">
    <div class=\"jumbotron jumbotron-fluid pb-0\"
        style=\"background: url('themes/international/assets/img/H_D_bg.png'); background-size: cover; background-repeat: no-repeat;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm flex align-items-center\">
                    <div>
                        <h1 class=\"large-font-header font-bold text-white\">A simple and trusted lending solution</h1>
                        <p class=\"lead mt-5 btn-mobile\"> <a
                                class=\" shadow-sm transition duration-200 ease-in-out text-orange-500 text-decoration-none bg-white hover:text-black rounded-full font-bold px-max py-3 text-sm md:text-lg\"
                                href=\"/products#general-loan-criteria\" role=\"button\">How to apply</a>
                        </p>
                    </div>
                </div>
                <div class=\"col-sm\">
                    <img class=\"img-fluid\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Desktop_Header_Isolated guy.png");
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white jumbo-large-pt\">
        <div class=\"container\">
            <div class=\"card shadow w-full sm:w-auto md:w-3/4 border-0 mx-auto my-5 p-0 md:p-5\">

                <span class=\"dots xs:z-0 md:z-0 \">



                    <img class=\"absolute\" style=\"right: -50px;top: -50px;width: 120px;\"
                        src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                    <img class=\"absolute\" style=\"right: 20%;top: -90px;width: 40px;\"
                        src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                    <img class=\"absolute\" style=\"left: -130px;top: 45%;width: 200px;\"
                        src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                    <img class=\"absolute\" style=\"left: -42px;top: 85%;width: 40px;\"
                        src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                </span>
                <div class=\"card-body relative bg-white z-1 px-5\">
                    <img class=\"logo-icon-bubble\" style=\"width:230px\"
                        src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_Xtenda logo bubble_desktop.svg");
        echo "\" alt=\"\">
                    <h1 class=\"card-title mt-5 px-3 pt-5 text-4xl\">What we do</h1>
                    <p class=\"card-text pt-3 pb-5 leading-loose px-3\">Xtenda Financial Holdings Limited (XFHL) is a
                        Mauritius-registered retail
                        financial services group offering a range of financial products and services
                        to the retail market, which is often overlooked. The group began operating
                        in late 2015.</p>
                    <p class=\"md:text-right sm:text-center  md:block\"> <a
                            class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                            href=\"/about\" role=\"button\">

                            About

                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-gray-100 relative\">
        <div class=\"container\"> <span class=\"dots\">



                <img class=\"absolute\" style=\"right: 0;top: 0;width: 70px;\" src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 10%;top: -70px;width: 30px;\" src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 0px;bottom: 0;width: 150px;\" src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 0%;bottom: 5%;width: 30px;\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">



            </span>
            <div class=\"row\">
                <div class=\"col-lg-5 flex align-items-center\">
                    <div class=\"card bg-transparent  w-75 border-0 mx-auto p-0\">
                        <div class=\"card-body py-5\">
                            <h1 class=\"card-title text-4xl\">Where we are based</h1>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda has operating subsidiaries in
                                Mozambique, Tanzania and Zambia,
                                each with several local and satellite branches. The group also has a management
                                agreement with DBF Capital Partners Limited to manage the day-to-day operations
                                of Xtenda Finance (Pvt) Limited, Zimbabwe.</p>
                            <p class=\"text-left hidden md:block\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"/countries\" role=\"button\">

                                    See countries

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg p-0\">

                    <div class=\"hidden md:block lg:block text-center\">
                        <a href=\"/countries#zambia\">
                            <img class=\"md:absolute\" style=\"right: -12%;top: 12%;\"
                                src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_map_2.png");
        echo "\" alt=\"\">
                            <!--ZM-->
                        </a>
                        <a href=\"/countries#tanzania\">
                            <img class=\"md:absolute\" style=\"right: 25%;top: 45%;\"
                                src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_map_3.png");
        echo "\" alt=\"\">
                            <!--TZ-->
                        </a>
                        <a href=\"/countries#mozambique\">
                            <img class=\"md:absolute\" style=\"right: 42%;top: 9%;\"
                                src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_map_1.png");
        echo "\" alt=\"\">
                            <!--Moz-->
                        </a>
                    </div>
                    <div class=\"block md:hidden lg:hidden text-center\">
                        <img class=\"mx-auto\" src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_map_1.png");
        echo "\" alt=\"\">
                        <img class=\"mx-auto\" src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_map_2.png");
        echo "\" alt=\"\">
                        <img class=\"mx-auto\" src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_map_3.png");
        echo "\" alt=\"\">
                    </div>
                    <p class=\"text-center block md:hidden pt-5 pb-5 mb-5\"> <a
                            class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                            href=\"/countries\" role=\"button\">

                            See countries

                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg order-2 order-sm-2 order-md-1\">
                    <img class=\"img-fluid\" src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Get in touch_homepage_desktop.png");
        echo "\" alt=\"\">
                    <p class=\"text-center block md:hidden pt-5\"> <a
                            class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                            href=\"/contact\" role=\"button\">

                            Contact

                        </a>
                    </p>
                </div>
                <div class=\"col-lg order-1 order-sm-1 order-md-2 flex align-items-center\">
                    <div class=\"card bg-transparent sm:w-full md:w-75 border-0 mx-auto px-4\">
                        <div class=\"card-body py-5\">
                            <h1 class=\"card-title text-4xl\">Get in touch</h1>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Have a query? Reach out to us and we’ll answer
                                any of your questions about
                                our services.</p>
                            <p class=\"text-left hidden md:block\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"/contact\" role=\"button\">

                                    Contact

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white \">
        <div class=\"container flex justify-content-center my-5\">
            <div class=\"card shadow w-full sm:w-auto md:w-3/4\"> <span class=\"dots hidden md:block z-0 md:z-2\">



                    <img class=\"absolute\" style=\"right: -50px;bottom: 0;width: 100px;\"
                        src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                    <img class=\"absolute\" style=\"right: -10%;bottom: 20%;width: 30px;\"
                        src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                    <img class=\"absolute\" style=\"right: -20%;bottom: 50%;width: 50px;\"
                        src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                    <img class=\"absolute\" style=\"left: -10%;top: -18%;width: 150px;\"
                        src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                    <img class=\"absolute\" style=\"left: -8%;top: 30%;width: 30px;\"
                        src=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                    <img class=\"absolute\" style=\"left: -20%;top: 50%;width: 50px;\"
                        src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\International/themes/international/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 209,  305 => 204,  297 => 199,  289 => 194,  281 => 189,  273 => 184,  232 => 146,  211 => 128,  207 => 127,  203 => 126,  195 => 121,  187 => 116,  179 => 111,  144 => 79,  138 => 76,  132 => 73,  126 => 70,  99 => 46,  89 => 39,  83 => 36,  77 => 33,  71 => 30,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"home-content\">
    <div class=\"jumbotron jumbotron-fluid pb-0\"
        style=\"background: url('themes/international/assets/img/H_D_bg.png'); background-size: cover; background-repeat: no-repeat;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm flex align-items-center\">
                    <div>
                        <h1 class=\"large-font-header font-bold text-white\">A simple and trusted lending solution</h1>
                        <p class=\"lead mt-5 btn-mobile\"> <a
                                class=\" shadow-sm transition duration-200 ease-in-out text-orange-500 text-decoration-none bg-white hover:text-black rounded-full font-bold px-max py-3 text-sm md:text-lg\"
                                href=\"/products#general-loan-criteria\" role=\"button\">How to apply</a>
                        </p>
                    </div>
                </div>
                <div class=\"col-sm\">
                    <img class=\"img-fluid\" src=\"{{'assets/img/Image_Desktop_Header_Isolated guy.png'|theme}}\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white jumbo-large-pt\">
        <div class=\"container\">
            <div class=\"card shadow w-full sm:w-auto md:w-3/4 border-0 mx-auto my-5 p-0 md:p-5\">

                <span class=\"dots xs:z-0 md:z-0 \">



                    <img class=\"absolute\" style=\"right: -50px;top: -50px;width: 120px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                    <img class=\"absolute\" style=\"right: 20%;top: -90px;width: 40px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                    <img class=\"absolute\" style=\"left: -130px;top: 45%;width: 200px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                    <img class=\"absolute\" style=\"left: -42px;top: 85%;width: 40px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                </span>
                <div class=\"card-body relative bg-white z-1 px-5\">
                    <img class=\"logo-icon-bubble\" style=\"width:230px\"
                        src=\"{{'assets/img/Icon_Xtenda logo bubble_desktop.svg'|theme}}\" alt=\"\">
                    <h1 class=\"card-title mt-5 px-3 pt-5 text-4xl\">What we do</h1>
                    <p class=\"card-text pt-3 pb-5 leading-loose px-3\">Xtenda Financial Holdings Limited (XFHL) is a
                        Mauritius-registered retail
                        financial services group offering a range of financial products and services
                        to the retail market, which is often overlooked. The group began operating
                        in late 2015.</p>
                    <p class=\"md:text-right sm:text-center  md:block\"> <a
                            class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                            href=\"/about\" role=\"button\">

                            About

                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-gray-100 relative\">
        <div class=\"container\"> <span class=\"dots\">



                <img class=\"absolute\" style=\"right: 0;top: 0;width: 70px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 10%;top: -70px;width: 30px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 0px;bottom: 0;width: 150px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 0%;bottom: 5%;width: 30px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">



            </span>
            <div class=\"row\">
                <div class=\"col-lg-5 flex align-items-center\">
                    <div class=\"card bg-transparent  w-75 border-0 mx-auto p-0\">
                        <div class=\"card-body py-5\">
                            <h1 class=\"card-title text-4xl\">Where we are based</h1>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda has operating subsidiaries in
                                Mozambique, Tanzania and Zambia,
                                each with several local and satellite branches. The group also has a management
                                agreement with DBF Capital Partners Limited to manage the day-to-day operations
                                of Xtenda Finance (Pvt) Limited, Zimbabwe.</p>
                            <p class=\"text-left hidden md:block\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"/countries\" role=\"button\">

                                    See countries

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg p-0\">

                    <div class=\"hidden md:block lg:block text-center\">
                        <a href=\"/countries#zambia\">
                            <img class=\"md:absolute\" style=\"right: -12%;top: 12%;\"
                                src=\"{{'assets/img/card_map_2.png'|theme}}\" alt=\"\">
                            <!--ZM-->
                        </a>
                        <a href=\"/countries#tanzania\">
                            <img class=\"md:absolute\" style=\"right: 25%;top: 45%;\"
                                src=\"{{'assets/img/card_map_3.png'|theme}}\" alt=\"\">
                            <!--TZ-->
                        </a>
                        <a href=\"/countries#mozambique\">
                            <img class=\"md:absolute\" style=\"right: 42%;top: 9%;\"
                                src=\"{{'assets/img/card_map_1.png'|theme}}\" alt=\"\">
                            <!--Moz-->
                        </a>
                    </div>
                    <div class=\"block md:hidden lg:hidden text-center\">
                        <img class=\"mx-auto\" src=\"{{'assets/img/card_map_1.png'|theme}}\" alt=\"\">
                        <img class=\"mx-auto\" src=\"{{'assets/img/card_map_2.png'|theme}}\" alt=\"\">
                        <img class=\"mx-auto\" src=\"{{'assets/img/card_map_3.png'|theme}}\" alt=\"\">
                    </div>
                    <p class=\"text-center block md:hidden pt-5 pb-5 mb-5\"> <a
                            class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                            href=\"/countries\" role=\"button\">

                            See countries

                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg order-2 order-sm-2 order-md-1\">
                    <img class=\"img-fluid\" src=\"{{'assets/img/Image_Get in touch_homepage_desktop.png'|theme}}\" alt=\"\">
                    <p class=\"text-center block md:hidden pt-5\"> <a
                            class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                            href=\"/contact\" role=\"button\">

                            Contact

                        </a>
                    </p>
                </div>
                <div class=\"col-lg order-1 order-sm-1 order-md-2 flex align-items-center\">
                    <div class=\"card bg-transparent sm:w-full md:w-75 border-0 mx-auto px-4\">
                        <div class=\"card-body py-5\">
                            <h1 class=\"card-title text-4xl\">Get in touch</h1>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Have a query? Reach out to us and we’ll answer
                                any of your questions about
                                our services.</p>
                            <p class=\"text-left hidden md:block\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"/contact\" role=\"button\">

                                    Contact

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white \">
        <div class=\"container flex justify-content-center my-5\">
            <div class=\"card shadow w-full sm:w-auto md:w-3/4\"> <span class=\"dots hidden md:block z-0 md:z-2\">



                    <img class=\"absolute\" style=\"right: -50px;bottom: 0;width: 100px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                    <img class=\"absolute\" style=\"right: -10%;bottom: 20%;width: 30px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                    <img class=\"absolute\" style=\"right: -20%;bottom: 50%;width: 50px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                    <img class=\"absolute\" style=\"left: -10%;top: -18%;width: 150px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                    <img class=\"absolute\" style=\"left: -8%;top: 30%;width: 30px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                    <img class=\"absolute\" style=\"left: -20%;top: 50%;width: 50px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">", "C:\\xampp\\htdocs\\International/themes/international/pages/home.htm", "");
    }
}
