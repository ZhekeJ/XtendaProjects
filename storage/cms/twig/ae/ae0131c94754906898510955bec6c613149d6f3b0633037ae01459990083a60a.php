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

/* C:\xampp\htdocs\International/themes/international/pages/countries.htm */
class __TwigTemplate_d94d92d0102db80a808535f5c1bcf516ae71c31c103b63d62ccff89afb3a7e0f extends \Twig\Template
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
        echo "<div id=\"countries-content\">
    <div class=\"jumbotron jumbotron-fluid p-0 m-0 bg-gray-100\">
        <div class=\"\">
            <img class=\"img-fluid hidden sm:block\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Map_Desktop.png");
        echo "\" alt=\"\">
            <img class=\"w-full block sm:hidden\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Header_Map_mobile.png");
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white\" id=\"zambia\">
        <div class=\"container\"> <span class=\"dots\">



                <img class=\"absolute\" style=\"right: 10%;top: 0%;width: 70px;\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 15%;top: 10%;width: 30px;\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 18%;top: 5%;width: 20px;\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\" src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\" src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">



            </span>
            <div class=\"row\">
                <div class=\"col-lg\">
                    <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Zambia_image.png");
        echo "\" alt=\"based\">
                </div>
                <div class=\"col-lg flex align-items-center\">
                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title text-4xl\">Zambia</h3>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda Finance Limited is a microfinance
                                institution offering payroll
                                backed loans to Government and quasi-Government employees. The company
                                was established in 2015 as Onyx Finance Limited and was acquired by the
                                current shareholders in December 2016. It is regulated by the Bank of Zambia
                                under the Banking and Financial Services Act (BFSA), 1994 and the Banking
                                and Financial Services (Microfinance) Regulations, 2006, and operates under
                                a non-Deposit Taking Microfinance license. Xtenda Zambia head office is
                                located in Lusaka.</p>
                            <p class=\"text-left\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"#\" role=\"button\">

                                    Visit site

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-gray-100\" id=\"tanzania\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg flex align-items-center\">
                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                        <div class=\"card-body\">
                            <h2 class=\"card-title text-4xl\">Tanzania</h2>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda Finance Limited (Tanzania) is a
                                microfinance institution offering
                                payroll backed loans to Government and quasi-Government employees. The
                                company was established in 2012 as Wezeshwa Fund Limited and was acquired
                                by the current shareholders in May 2018. It is regulated through an annually
                                renewable Business License issued by the Ministry of Trade and International
                                Trade via the country’s BRELA (Business Regulatory and Licensing Authority)
                                office. A new microfinance Act is currently in parliament for approval
                                which will give the Bank of Tanzania the powers to regulate the industry
                                in the near future. Xtenda Tanzania head office is located in Dar es Salaam.</p>
                            <p class=\"text-left\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"#\" role=\"button\">

                                    Visit site

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg\">
                    <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Tanzania_image.png");
        echo "\" alt=\"based\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white\" id=\"mozambique\">
        <div class=\"container\"> <span class=\"dots\">

                <img class=\"absolute\" style=\"right: 10%;bottom: 0%;width: 70px;\" src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 15%;bottom: 10%;width: 30px;\"
                    src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

            </span>
            <div class=\"row\">
                <div class=\"col-lg\">
                    <img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Mozambique_image.png");
        echo "\" alt=\"based\">
                </div>
                <div class=\"col-lg flex align-items-center\">
                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                        <div class=\"card-body\">
                            <h2 class=\"card-title text-4xl\">Mozambique</h2>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda Finanças Moçambique is a microfinance
                                institution offering payroll
                                backed loans to Government employees. The company commenced operations
                                in March 2019 and is regulated by the Bank of Mozambique under the Microfinance
                                Regulation, Notice 57/2004. It operates under a General Savings and Credit
                                Microfinance license issued by the Bank. Xtenda Mozambique head office
                                is located in downtown Maputo.</p>
                            <p class=\"text-left\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"#\" role=\"button\">

                                    Visit site

                                </a>
                            </p>
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
        return "C:\\xampp\\htdocs\\International/themes/international/pages/countries.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 111,  177 => 106,  170 => 102,  159 => 94,  98 => 36,  87 => 28,  81 => 25,  75 => 22,  69 => 19,  63 => 16,  57 => 13,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"countries-content\">
    <div class=\"jumbotron jumbotron-fluid p-0 m-0 bg-gray-100\">
        <div class=\"\">
            <img class=\"img-fluid hidden sm:block\" src=\"{{'assets/img/Map_Desktop.png'|theme}}\" alt=\"\">
            <img class=\"w-full block sm:hidden\" src=\"{{'assets/img/Header_Map_mobile.png'|theme}}\" alt=\"\">
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white\" id=\"zambia\">
        <div class=\"container\"> <span class=\"dots\">



                <img class=\"absolute\" style=\"right: 10%;top: 0%;width: 70px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 15%;top: 10%;width: 30px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 18%;top: 5%;width: 20px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">



            </span>
            <div class=\"row\">
                <div class=\"col-lg\">
                    <img src=\"{{'assets/img/Zambia_image.png'|theme}}\" alt=\"based\">
                </div>
                <div class=\"col-lg flex align-items-center\">
                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title text-4xl\">Zambia</h3>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda Finance Limited is a microfinance
                                institution offering payroll
                                backed loans to Government and quasi-Government employees. The company
                                was established in 2015 as Onyx Finance Limited and was acquired by the
                                current shareholders in December 2016. It is regulated by the Bank of Zambia
                                under the Banking and Financial Services Act (BFSA), 1994 and the Banking
                                and Financial Services (Microfinance) Regulations, 2006, and operates under
                                a non-Deposit Taking Microfinance license. Xtenda Zambia head office is
                                located in Lusaka.</p>
                            <p class=\"text-left\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"#\" role=\"button\">

                                    Visit site

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-gray-100\" id=\"tanzania\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg flex align-items-center\">
                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                        <div class=\"card-body\">
                            <h2 class=\"card-title text-4xl\">Tanzania</h2>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda Finance Limited (Tanzania) is a
                                microfinance institution offering
                                payroll backed loans to Government and quasi-Government employees. The
                                company was established in 2012 as Wezeshwa Fund Limited and was acquired
                                by the current shareholders in May 2018. It is regulated through an annually
                                renewable Business License issued by the Ministry of Trade and International
                                Trade via the country’s BRELA (Business Regulatory and Licensing Authority)
                                office. A new microfinance Act is currently in parliament for approval
                                which will give the Bank of Tanzania the powers to regulate the industry
                                in the near future. Xtenda Tanzania head office is located in Dar es Salaam.</p>
                            <p class=\"text-left\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"#\" role=\"button\">

                                    Visit site

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg\">
                    <img src=\"{{'assets/img/Tanzania_image.png'|theme}}\" alt=\"based\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid bg-white\" id=\"mozambique\">
        <div class=\"container\"> <span class=\"dots\">

                <img class=\"absolute\" style=\"right: 10%;bottom: 0%;width: 70px;\" src=\"{{'assets/img/CIRCLE.svg'|theme}}\"
                    alt=\"\">

                <img class=\"absolute\" style=\"right: 15%;bottom: 10%;width: 30px;\"
                    src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

            </span>
            <div class=\"row\">
                <div class=\"col-lg\">
                    <img src=\"{{'assets/img/Mozambique_image.png'|theme}}\" alt=\"based\">
                </div>
                <div class=\"col-lg flex align-items-center\">
                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                        <div class=\"card-body\">
                            <h2 class=\"card-title text-4xl\">Mozambique</h2>
                            <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda Finanças Moçambique is a microfinance
                                institution offering payroll
                                backed loans to Government employees. The company commenced operations
                                in March 2019 and is regulated by the Bank of Mozambique under the Microfinance
                                Regulation, Notice 57/2004. It operates under a General Savings and Credit
                                Microfinance license issued by the Bank. Xtenda Mozambique head office
                                is located in downtown Maputo.</p>
                            <p class=\"text-left\"> <a
                                    class=\"transition duration-200 ease-in-out bg-orange-500 hover:bg-orange-600 text-decoration-none text-white text-sm btn-gradient-orange rounded-full font-bold px-5 py-2\"
                                    href=\"#\" role=\"button\">

                                    Visit site

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\International/themes/international/pages/countries.htm", "");
    }
}
