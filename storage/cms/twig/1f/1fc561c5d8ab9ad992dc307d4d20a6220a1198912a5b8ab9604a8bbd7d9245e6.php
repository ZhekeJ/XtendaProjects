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

/* C:\xampp\htdocs\International/themes/international/pages/products.htm */
class __TwigTemplate_45a5a6bceacfc26cd88b0ab98d541429776f1e0c5463654bf14a61501425d3af extends \Twig\Template
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
        echo "<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fonts/stylesheet.css");
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Xtenda_icon_orange.png");
        echo "\" />
    <title>Xtenda Finance - ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " </title>
    <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/tarkhov/postboot/v1.0.0/dist/css/postboot.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
</head>
<style>
    body {
        position: relative;
        /* required */
    }

    .list-group {
        position: sticky;
        top: 100px;
    }

    .list-group-item {
        border: none;
    }

    .list-group-item.active {
        z-index: 2;
        color: orange;
        font-weight: bold;
        background-color: transparent;
        border-color: transparent;
    }

    .icon-list li {
        position: relative;
        line-height: 1.6;
        margin-left: 8px;
    }

    .icon-list li:before {
        background: transparent url(\"themes/international/assets/img/Icon_tick.png\") 0 0 no-repeat;
        content: \"\";
        width: 14px;
        height: 11px;
        position: absolute;
        left: -20px;
        top: 10px;
    }

    .custom-card-img {

        display: inline-block;
        position: absolute;
        top: -40px;
        right: 10px;

    }
</style>

<body data-spy=\"scroll\" data-offset=\"15\" data-target=\"#myScrollspy\">
    <span class=\"hidden sm:hidden md:hidden lg:block\">



        <nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light border-solid border-red-500\">





            <div class=\"container\">



                <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">

                    <ul class=\"navbar-nav mr-auto\">

                        <li class=\"nav-item text-center px-1 \">

                            <a class=\"nav-link\" href=\"/\">Home<span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/about\">About</a>
                        </li>
                        <li class=\"nav-item text-center px-1 active\"> <a class=\"nav-link\" href=\"/products\">Product</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/board\">Board</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/countries\">Countries</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/investors\">Investors</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/contact\">Contact</a>
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
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_international_orange_desktop.png");
        echo "\" alt=\"\"> <span
                                        class=\"px-1 font-bold\">International</span>
                                </button>

                            </div>
                        </li>
                    </ul>
                </span> <a class=\"navbar-brand px-1 mr-auto md:ml-auto\" href=\"/\">



                    <img src=\"";
        // line 124
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
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Mobile_menu_Xtenda icon_orange.svg");
        echo "\" alt=\"\">



                </div>



                <p class=\"font-bold text-orange-500 absolute text-center w-full top-0 left-0 mt-4\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 158), "title", [], "any", false, false, false, 158), "html", null, true);
        echo "
                </p>



                <input type=\"checkbox\" />



                <span></span>
                <span></span>
                <span></span>
                <ul id=\"menu\">
                    <div class=\"menu-logo absolute right-0 top-0\">
                        <img src=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Mobile_menu_Xtenda icon_white.svg");
        echo "\" alt=\"\">
                    </div>
                    <li class=\"";
        // line 174
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 174), "title", [], "any", false, false, false, 174) == "Home")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div> <a class=\"text-white menu-font my-2 mx-1\" href=\"/\">Home</a>
                    </li>
                    <li class=\"";
        // line 177
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 177), "title", [], "any", false, false, false, 177) == "About")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/about\">About</a>

                    </li>
                    <li class=\"";
        // line 181
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 181), "title", [], "any", false, false, false, 181) == "Products")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/products\">Product</a>

                    <li class=\"";
        // line 184
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 184), "title", [], "any", false, false, false, 184) == "Board")) ? ("active") : (""));
        echo "\">

                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/board\">Board</a>

                    <li class=\"";
        // line 188
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 188), "title", [], "any", false, false, false, 188) == "Countries")) ? ("active") : (""));
        echo "\">

                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"countries\">Countries</a>

                    </li>
                    <li class=\"";
        // line 193
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 193), "title", [], "any", false, false, false, 193) == "Investors")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\"
                            href=\"/investors\">Investors</a>

                    </li>
                    <li class=\"";
        // line 198
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 198), "title", [], "any", false, false, false, 198) == "Contact")) ? ("active") : (""));
        echo "\">
                        <div class=\"line\"></div><a class=\"text-white menu-font my-2 mx-1\" href=\"/contact\">Contact</a>

                    </li>
                </ul>
            </div>
        </nav>
    </span>
    <div id=\"product-content\">
        <div class=\"content\">
            <div class=\"jumbotron jumbotron-fluid pb-0\"
                style=\"background: url('themes/international/assets/img/Image_Desktop_Header_Product.png'); background-position: right; background-size: cover; background-repeat: no-repeat;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"flex align-items-center\" style=\"min-height:500px;\">
                            <div class=\"w-full sm:w-auto px-5\">
                                <h1 class=\"large-font-header-full font-bold text-white\">Enabling people to achieve their
                                    full potential, through simple and clear solutions.</h1>
          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"block md:hidden flex align-items-center pl-5 py-4 base-bg w-full\"> <span
                            class=\"text-base\">Scroll to: </span>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"bg-transparent dropdown-toggle outline-none text-base\"
                                style=\"outline: 0; outline:none\" data-toggle=\"dropdown\"> <span
                                    class=\"px-1 font-bold\">Select
                                    a section</span>
                            </button>
                            <div class=\"dropdown-menu rounded-0 mt-2\"> <a class=\"dropdown-item\" href=\"#loans\">Loans</a>
                                <a class=\"dropdown-item\" href=\"#free-benefits\">Free benefits</a>
                                <a class=\"dropdown-item\" href=\"#general-loan-criteria\">General loan criteria</a>
                                <a class=\"dropdown-item\" href=\"#social-impact\">Social impact</a> <a
                                    class=\"dropdown-item\" href=\"#repayment\">Repayment</a>
                                <a class=\"dropdown-item\" href=\"#processing-time\">Processing time</a> <a
                                    class=\"dropdown-item\" href=\"#in-summary\">In summary</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 hidden md:block\" id=\"myScrollspy\" style=\"margin-top:100px;\">
                        <div style=\"width: 11rem\" class=\"list-group border-r-2 border-orange-500\"> <a
                                class=\"list-group-item list-group-item-action active\" href=\"#loans\">Loans</a>
                            <a class=\"list-group-item list-group-item-action\" href=\"#free-benefits\">Free benefits</a> <a
                                class=\"list-group-item list-group-item-action\" href=\"#general-loan-criteria\">General
                                loan
                                criteria</a>
                            <a class=\"list-group-item list-group-item-action\" href=\"#social-impact\">Social impact</a> <a
                                class=\"list-group-item list-group-item-action\" href=\"#repayment\">Repayment</a>
                            <a class=\"list-group-item list-group-item-action\" href=\"#processing-time\">Processing
                                time</a> <a class=\"list-group-item list-group-item-action\" href=\"#in-summary\">In
                                summary</a>
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <div id=\"loans\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Loans</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda provides
                                                        financial
                                                        assistance that generally ranges between USD100
                                                        and USD10,000, granted in local currency with loan periods of
                                                        between 3
                                                        and 72 months. The loan period is determined by the client and
                                                        the
                                                        cost
                                                        of the loan is subject to current market trends, where Xtenda
                                                        offers
                                                        a
                                                        competitive edge advantage to similar facilities offered by
                                                        other
                                                        recognized
                                                        financial institutions in the market.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 hidden lg:block\">
                                            <img class=\"w-full\" src=\"";
        // line 284
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_1_desktop.png");
        echo "\"
                                                alt=\"based\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"free-benefits\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"right: 10%;top: 0%;width: 70px;\"
                                            src=\"";
        // line 298
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 15%;top: 10%;width: 30px;\"
                                            src=\"";
        // line 301
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 18%;top: 5%;width: 20px;\"
                                            src=\"";
        // line 304
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 order-2 order-lg-1 mt-5\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_2_desktop.png");
        echo "\" alt=\"based\">
                                            <img class=\"w-full block lg:hidden\"
                                                src=\"";
        // line 314
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_2_mobile.png");
        echo "\" alt=\"based\">
                                        </div>
                                        <div class=\"col-lg-8 order-1 order-lg-2 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Free benefits</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda arranges a
                                                        number of
                                                        free benefits across its different operating
                                                        subsidiaries, which include:</p>
                                                    <p> <span class=\"font-bold\">• Credit life insurance</span> which
                                                        expunges the
                                                        outstanding loan balance in the case of death of the client.
                                                        This
                                                        covers
                                                        against Xtenda having a claim against the loan holder’s estate
                                                        or
                                                        employer
                                                        benefits.</p>
                                                    <br>
                                                    <p> <span class=\"font-bold\">• Funeral cover up</span> to USD2,000
                                                        for
                                                        the duration
                                                        of the loan. The amount is paid to the spouse/beneficiary,
                                                        contributing
                                                        to funeral costs.</p>
                                                    <br>
                                                    <p> <span class=\"font-bold\">• Unit trust savings</span> account (T’s
                                                        &
                                                        C’s
                                                        apply)</p>
                                                    <p> <span class=\"font-bold\">• Free smartphone</span> (T’s & C’s
                                                        apply)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"general-loan-criteria\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\">
                                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                                        <div class=\"card-body\">
                                            <h1 class=\"card-title text-4xl\">General loan criteria:</h1>
                                            <p class=\"my-4\">The criteria for granting financial assistance is subject to
                                                a
                                                range of
                                                supporting documentation being made available (only original documents
                                                will be accepted).</p>
                                        </div>
                                    </div>
                                    <div class=\"card shadow  w-100 border-0 mx-auto my-0 p-5\">
                                        <img src=\"";
        // line 369
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Icon_tick bubble.png");
        echo "\" class=\"custom-card-img\"
                                            alt=\"\">
                                        <div class=\"card-body\">
                                            <h5 class=\"text-black mb-4\">

                                                <b>A client must have:</b>

                                            </h5>
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <ul class=\"icon-list\">
                                                        <li>
                                                            <p>Been employed for a minimum of between</p>
                                                        </li>
                                                        <li>
                                                            <p>3 and 6 months with current employer</p>
                                                        </li>
                                                        <li>
                                                            <p>Attained the age of 18</p>
                                                        </li>
                                                        <li>
                                                            <p>A valid ID document</p>
                                                        </li>
                                                        <li>
                                                            <p>A valid employer personalized ID card</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-md\">
                                                    <ul class=\"icon-list\">
                                                        <li>
                                                            <p>Latest payslip</p>
                                                        </li>
                                                        <li>
                                                            <p>Latest bank statement</p>
                                                        </li>
                                                        <li>
                                                            <p>Proof of residence</p>
                                                        </li>
                                                        <li>
                                                            <p>Employer pre-approval forms</p>
                                                        </li>
                                                        <li>
                                                            <p>A Photograph</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"social-impact\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"right: 0%;top: 0%;width: 70px;\"
                                            src=\"";
        // line 429
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 10%;top: 2%;width: 30px;\"
                                            src=\"";
        // line 432
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\"
                                            src=\"";
        // line 435
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\"
                                            src=\"";
        // line 438
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                                            src=\"";
        // line 441
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Social impact</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda as a group is
                                                        very
                                                        conscious of social responsibilities towards
                                                        clients. With this, financial assistance is limited by a monthly
                                                        instalment
                                                        that is expressed as a percentage of the employee’s salary where
                                                        the
                                                        percentage
                                                        is regulated by government. This ensures that an employee’s take
                                                        home salary
                                                        is sufficient to provide for basic necessities. These conditions
                                                        may
                                                        be
                                                        negotiable, however all amendments from the normal terms and
                                                        conditions
                                                        must carry the approval of both Government and Xtenda.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"";
        // line 472
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_3_desktop.png");
        echo "\" alt=\"based\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"repayment\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\"
                                            src=\"";
        // line 485
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                                            src=\"";
        // line 488
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"";
        // line 496
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_4_desktop.png");
        echo "\" alt=\"based\">
                                            <img class=\"w-full block lg:hidden mb-5\"
                                                src=\"";
        // line 498
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_4_mobile.png");
        echo "\" alt=\"based\">
                                        </div>
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Repayment</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">The financial cost of
                                                        the
                                                        loan facility can only be made possible by reducing
                                                        the risk attached to the loan and this requires the cooperation
                                                        of
                                                        the
                                                        employer. All financial assistance granted will be paid in equal
                                                        monthly
                                                        instalments generated from a salary deduction authorization
                                                        granted
                                                        by
                                                        the employer. The employer is not required to stand as a
                                                        guarantor
                                                        for
                                                        the loans advanced to employees, only to deduct the monthly
                                                        instalments
                                                        payable from each employee’s salary prior to the salary being
                                                        paid
                                                        into
                                                        the employee’s bank account. The deductions will then be paid
                                                        directly
                                                        to Xtenda on a monthly basis.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"processing-time\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"right: 10%;bottom: 0%;width: 70px;\"
                                            src=\"";
        // line 540
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 15%;bottom: 15%;width: 30px;\"
                                            src=\"";
        // line 543
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 18%;bottom: 5%;width: 20px;\"
                                            src=\"";
        // line 546
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Processing time</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Depending on the
                                                        country’s
                                                        banking system, the processing of loan applications
                                                        normally takes between 12 and 48 hours for the funds to be
                                                        disbursed
                                                        to
                                                        be credited to the client’s bank account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full\" src=\"";
        // line 567
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_5_desktop.png");
        echo "\"
                                                alt=\"based\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"in-summary\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 80px;\"
                                            src=\"";
        // line 581
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\"
                                            src=\"";
        // line 584
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                                            src=\"";
        // line 587
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"";
        // line 595
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Image_Product_6_desktop.png");
        echo "\" alt=\"based\">
                                        </div>
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">In summary</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">In summary, Xtenda
                                                        strives
                                                        to give all employers comfort that we are long
                                                        term players offering retail financial products and services to
                                                        all
                                                        employees,
                                                        but particularly those that have no access to the formal banking
                                                        sector.
                                                        This is undertaken with the utmost integrity together with fair
                                                        and
                                                        transparent
                                                        pricing with a focus on long term relationships with employers
                                                        who
                                                        seek
                                                        to support an improved lifestyle for all their employees.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class=\"mini-footer bg-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copyright-text text-center\">
                            <p>© <span class=\"text-orange-500\">Xtenda Financial Holdings Limited.</span> All
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
    <script src=\"";
        // line 646
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/all.js");
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\International/themes/international/pages/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  807 => 646,  753 => 595,  742 => 587,  736 => 584,  730 => 581,  713 => 567,  689 => 546,  683 => 543,  677 => 540,  632 => 498,  627 => 496,  616 => 488,  610 => 485,  594 => 472,  560 => 441,  554 => 438,  548 => 435,  542 => 432,  536 => 429,  473 => 369,  415 => 314,  410 => 312,  399 => 304,  393 => 301,  387 => 298,  370 => 284,  281 => 198,  273 => 193,  265 => 188,  258 => 184,  252 => 181,  245 => 177,  239 => 174,  234 => 172,  217 => 158,  206 => 150,  177 => 124,  163 => 113,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <link rel=\"stylesheet\" href=\"{{'assets/css/fonts/stylesheet.css'|theme}}\" />
    <link rel=\"stylesheet\" href=\"{{'assets/css/style.css'|theme}}\" />
    <link rel=\"icon\" href=\"{{'assets/img/Xtenda_icon_orange.png'|theme}}\" />
    <title>Xtenda Finance - {{ this.page.title }} </title>
    <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/tarkhov/postboot/v1.0.0/dist/css/postboot.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
</head>
<style>
    body {
        position: relative;
        /* required */
    }

    .list-group {
        position: sticky;
        top: 100px;
    }

    .list-group-item {
        border: none;
    }

    .list-group-item.active {
        z-index: 2;
        color: orange;
        font-weight: bold;
        background-color: transparent;
        border-color: transparent;
    }

    .icon-list li {
        position: relative;
        line-height: 1.6;
        margin-left: 8px;
    }

    .icon-list li:before {
        background: transparent url(\"themes/international/assets/img/Icon_tick.png\") 0 0 no-repeat;
        content: \"\";
        width: 14px;
        height: 11px;
        position: absolute;
        left: -20px;
        top: 10px;
    }

    .custom-card-img {

        display: inline-block;
        position: absolute;
        top: -40px;
        right: 10px;

    }
</style>

<body data-spy=\"scroll\" data-offset=\"15\" data-target=\"#myScrollspy\">
    <span class=\"hidden sm:hidden md:hidden lg:block\">



        <nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light border-solid border-red-500\">





            <div class=\"container\">



                <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">

                    <ul class=\"navbar-nav mr-auto\">

                        <li class=\"nav-item text-center px-1 \">

                            <a class=\"nav-link\" href=\"/\">Home<span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/about\">About</a>
                        </li>
                        <li class=\"nav-item text-center px-1 active\"> <a class=\"nav-link\" href=\"/products\">Product</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/board\">Board</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/countries\">Countries</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/investors\">Investors</a>
                        </li>
                        <li class=\"nav-item text-center px-1\"> <a class=\"nav-link\" href=\"/contact\">Contact</a>
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
                </ul>
            </div>
        </nav>
    </span>
    <div id=\"product-content\">
        <div class=\"content\">
            <div class=\"jumbotron jumbotron-fluid pb-0\"
                style=\"background: url('themes/international/assets/img/Image_Desktop_Header_Product.png'); background-position: right; background-size: cover; background-repeat: no-repeat;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"flex align-items-center\" style=\"min-height:500px;\">
                            <div class=\"w-full sm:w-auto px-5\">
                                <h1 class=\"large-font-header-full font-bold text-white\">Enabling people to achieve their
                                    full potential, through simple and clear solutions.</h1>
          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"block md:hidden flex align-items-center pl-5 py-4 base-bg w-full\"> <span
                            class=\"text-base\">Scroll to: </span>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"bg-transparent dropdown-toggle outline-none text-base\"
                                style=\"outline: 0; outline:none\" data-toggle=\"dropdown\"> <span
                                    class=\"px-1 font-bold\">Select
                                    a section</span>
                            </button>
                            <div class=\"dropdown-menu rounded-0 mt-2\"> <a class=\"dropdown-item\" href=\"#loans\">Loans</a>
                                <a class=\"dropdown-item\" href=\"#free-benefits\">Free benefits</a>
                                <a class=\"dropdown-item\" href=\"#general-loan-criteria\">General loan criteria</a>
                                <a class=\"dropdown-item\" href=\"#social-impact\">Social impact</a> <a
                                    class=\"dropdown-item\" href=\"#repayment\">Repayment</a>
                                <a class=\"dropdown-item\" href=\"#processing-time\">Processing time</a> <a
                                    class=\"dropdown-item\" href=\"#in-summary\">In summary</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 hidden md:block\" id=\"myScrollspy\" style=\"margin-top:100px;\">
                        <div style=\"width: 11rem\" class=\"list-group border-r-2 border-orange-500\"> <a
                                class=\"list-group-item list-group-item-action active\" href=\"#loans\">Loans</a>
                            <a class=\"list-group-item list-group-item-action\" href=\"#free-benefits\">Free benefits</a> <a
                                class=\"list-group-item list-group-item-action\" href=\"#general-loan-criteria\">General
                                loan
                                criteria</a>
                            <a class=\"list-group-item list-group-item-action\" href=\"#social-impact\">Social impact</a> <a
                                class=\"list-group-item list-group-item-action\" href=\"#repayment\">Repayment</a>
                            <a class=\"list-group-item list-group-item-action\" href=\"#processing-time\">Processing
                                time</a> <a class=\"list-group-item list-group-item-action\" href=\"#in-summary\">In
                                summary</a>
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <div id=\"loans\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Loans</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda provides
                                                        financial
                                                        assistance that generally ranges between USD100
                                                        and USD10,000, granted in local currency with loan periods of
                                                        between 3
                                                        and 72 months. The loan period is determined by the client and
                                                        the
                                                        cost
                                                        of the loan is subject to current market trends, where Xtenda
                                                        offers
                                                        a
                                                        competitive edge advantage to similar facilities offered by
                                                        other
                                                        recognized
                                                        financial institutions in the market.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 hidden lg:block\">
                                            <img class=\"w-full\" src=\"{{'assets/img/Image_Product_1_desktop.png'|theme}}\"
                                                alt=\"based\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"free-benefits\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"right: 10%;top: 0%;width: 70px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 15%;top: 10%;width: 30px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 18%;top: 5%;width: 20px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 order-2 order-lg-1 mt-5\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"{{'assets/img/Image_Product_2_desktop.png'|theme}}\" alt=\"based\">
                                            <img class=\"w-full block lg:hidden\"
                                                src=\"{{'assets/img/Image_Product_2_mobile.png'|theme}}\" alt=\"based\">
                                        </div>
                                        <div class=\"col-lg-8 order-1 order-lg-2 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Free benefits</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda arranges a
                                                        number of
                                                        free benefits across its different operating
                                                        subsidiaries, which include:</p>
                                                    <p> <span class=\"font-bold\">• Credit life insurance</span> which
                                                        expunges the
                                                        outstanding loan balance in the case of death of the client.
                                                        This
                                                        covers
                                                        against Xtenda having a claim against the loan holder’s estate
                                                        or
                                                        employer
                                                        benefits.</p>
                                                    <br>
                                                    <p> <span class=\"font-bold\">• Funeral cover up</span> to USD2,000
                                                        for
                                                        the duration
                                                        of the loan. The amount is paid to the spouse/beneficiary,
                                                        contributing
                                                        to funeral costs.</p>
                                                    <br>
                                                    <p> <span class=\"font-bold\">• Unit trust savings</span> account (T’s
                                                        &
                                                        C’s
                                                        apply)</p>
                                                    <p> <span class=\"font-bold\">• Free smartphone</span> (T’s & C’s
                                                        apply)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"general-loan-criteria\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\">
                                    <div class=\"card bg-transparent w-100 border-0 mx-auto p-0\">
                                        <div class=\"card-body\">
                                            <h1 class=\"card-title text-4xl\">General loan criteria:</h1>
                                            <p class=\"my-4\">The criteria for granting financial assistance is subject to
                                                a
                                                range of
                                                supporting documentation being made available (only original documents
                                                will be accepted).</p>
                                        </div>
                                    </div>
                                    <div class=\"card shadow  w-100 border-0 mx-auto my-0 p-5\">
                                        <img src=\"{{'assets/img/Icon_tick bubble.png'|theme}}\" class=\"custom-card-img\"
                                            alt=\"\">
                                        <div class=\"card-body\">
                                            <h5 class=\"text-black mb-4\">

                                                <b>A client must have:</b>

                                            </h5>
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <ul class=\"icon-list\">
                                                        <li>
                                                            <p>Been employed for a minimum of between</p>
                                                        </li>
                                                        <li>
                                                            <p>3 and 6 months with current employer</p>
                                                        </li>
                                                        <li>
                                                            <p>Attained the age of 18</p>
                                                        </li>
                                                        <li>
                                                            <p>A valid ID document</p>
                                                        </li>
                                                        <li>
                                                            <p>A valid employer personalized ID card</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-md\">
                                                    <ul class=\"icon-list\">
                                                        <li>
                                                            <p>Latest payslip</p>
                                                        </li>
                                                        <li>
                                                            <p>Latest bank statement</p>
                                                        </li>
                                                        <li>
                                                            <p>Proof of residence</p>
                                                        </li>
                                                        <li>
                                                            <p>Employer pre-approval forms</p>
                                                        </li>
                                                        <li>
                                                            <p>A Photograph</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"social-impact\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"right: 0%;top: 0%;width: 70px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 10%;top: 2%;width: 30px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Social impact</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Xtenda as a group is
                                                        very
                                                        conscious of social responsibilities towards
                                                        clients. With this, financial assistance is limited by a monthly
                                                        instalment
                                                        that is expressed as a percentage of the employee’s salary where
                                                        the
                                                        percentage
                                                        is regulated by government. This ensures that an employee’s take
                                                        home salary
                                                        is sufficient to provide for basic necessities. These conditions
                                                        may
                                                        be
                                                        negotiable, however all amendments from the normal terms and
                                                        conditions
                                                        must carry the approval of both Government and Xtenda.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"{{'assets/img/Image_Product_3_desktop.png'|theme}}\" alt=\"based\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"repayment\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"{{'assets/img/Image_Product_4_desktop.png'|theme}}\" alt=\"based\">
                                            <img class=\"w-full block lg:hidden mb-5\"
                                                src=\"{{'assets/img/Image_Product_4_mobile.png'|theme}}\" alt=\"based\">
                                        </div>
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Repayment</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">The financial cost of
                                                        the
                                                        loan facility can only be made possible by reducing
                                                        the risk attached to the loan and this requires the cooperation
                                                        of
                                                        the
                                                        employer. All financial assistance granted will be paid in equal
                                                        monthly
                                                        instalments generated from a salary deduction authorization
                                                        granted
                                                        by
                                                        the employer. The employer is not required to stand as a
                                                        guarantor
                                                        for
                                                        the loans advanced to employees, only to deduct the monthly
                                                        instalments
                                                        payable from each employee’s salary prior to the salary being
                                                        paid
                                                        into
                                                        the employee’s bank account. The deductions will then be paid
                                                        directly
                                                        to Xtenda on a monthly basis.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"processing-time\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"right: 10%;bottom: 0%;width: 70px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 15%;bottom: 15%;width: 30px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"right: 18%;bottom: 5%;width: 20px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">Processing time</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">Depending on the
                                                        country’s
                                                        banking system, the processing of loan applications
                                                        normally takes between 12 and 48 hours for the funds to be
                                                        disbursed
                                                        to
                                                        be credited to the client’s bank account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full\" src=\"{{'assets/img/Image_Product_5_desktop.png'|theme}}\"
                                                alt=\"based\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"in-summary\">
                            <div class=\"jumbotron jumbotron-fluid bg-white\">
                                <div class=\"container\"> <span class=\"dots\">



                                        <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 80px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 2%;bottom: 10%;width: 50px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                                        <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                                            src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">



                                    </span>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <img class=\"w-full hidden lg:block\"
                                                src=\"{{'assets/img/Image_Product_6_desktop.png'|theme}}\" alt=\"based\">
                                        </div>
                                        <div class=\"col-lg-8 flex align-items-center\">
                                            <div class=\"card bg-transparent  w-full sm:w-auto  border-0 mx-auto p-0\">
                                                <div class=\"card-body\">
                                                    <h1 class=\"card-title text-4xl\">In summary</h1>
                                                    <p class=\"card-text pt-3 pb-5 leading-loose\">In summary, Xtenda
                                                        strives
                                                        to give all employers comfort that we are long
                                                        term players offering retail financial products and services to
                                                        all
                                                        employees,
                                                        but particularly those that have no access to the formal banking
                                                        sector.
                                                        This is undertaken with the utmost integrity together with fair
                                                        and
                                                        transparent
                                                        pricing with a focus on long term relationships with employers
                                                        who
                                                        seek
                                                        to support an improved lifestyle for all their employees.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class=\"mini-footer bg-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copyright-text text-center\">
                            <p>© <span class=\"text-orange-500\">Xtenda Financial Holdings Limited.</span> All
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
    <script src=\"{{'assets/js/all.js'|theme}}\"></script>
</body>

</html>", "C:\\xampp\\htdocs\\International/themes/international/pages/products.htm", "");
    }
}
