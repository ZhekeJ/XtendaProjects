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

/* C:\xampp\htdocs\International/themes/international/pages/board.htm */
class __TwigTemplate_3a8ee39e83c0f079bb5773da7c80eab8c9d97d4a4f172d42a522d10df82d1740 extends \Twig\Template
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
        echo "<div id=\"board-content\">
    <div class=\"jumbotron jumbotron-fluid bg-white\">
        <div class=\"container\">
            <div class=\"row my-4\">
                <div class=\"col-lg\">
                    <h1 class=\"font-bold ml-3\">Directors of Xtenda Finance </h1>
                </div>
            </div>
            <div class=\"row justify-content-center\"> <span class=\"dots\">



                    <img class=\"absolute\" style=\"right: 10%;top: 10%;width: 70px;\"
                        src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                    <img class=\"absolute\" style=\"right: 15%;top: 15%;width: 30px;\"
                        src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                    <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\"
                        src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">

                    <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                        src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/CIRCLE.svg");
        echo "\" alt=\"\">
                </span>

";
        // line 26
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 26);
        // line 27
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 27);
        // line 28
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 28);
        // line 29
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 29);
        // line 30
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 30);
        // line 31
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 31);
        // line 32
        echo "

    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 35
            echo "    <div class=\"col-sm-6 col-lg-4 card-col\">
                <div class=\"custom-card\">
                    <div class=\"card-top\">
                        <img class=\"card-img-top\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "director_photo", [], "any", false, false, false, 38), "thumb", [0 => 350, 1 => 500, 2 => ["mode" => "crop"]], "method", false, false, false, 38), "html", null, true);
            echo "\"
                            alt=\"Card image cap\">
                    </div>
                    <div class=\"card-bototm text-center\">
                        <h5 class=\"card-title\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "surname", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
                        <div class=\"desig\"><span class=\"\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "role", [], "any", false, false, false, 43), "html", null, true);
            echo "</span></div>


                        <div> ";
            // line 46
            ob_start();
            // line 47
            echo "                            ";
            if (($context["detailsPage"] ?? null)) {
                // line 48
                echo "                            <a class=\"text-primary\"
                                href=\"";
                // line 49
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 49)]);
                echo "\">
                                ";
            }
            // line 51
            echo "
                                View Profile

                                ";
            // line 54
            if (($context["detailsPage"] ?? null)) {
                // line 55
                echo "                            </a>
                            ";
            }
            // line 57
            echo "                            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 58
            echo "                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\International/themes/international/pages/board.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  144 => 57,  140 => 55,  138 => 54,  133 => 51,  128 => 49,  125 => 48,  122 => 47,  120 => 46,  114 => 43,  108 => 42,  101 => 38,  96 => 35,  92 => 34,  88 => 32,  86 => 31,  84 => 30,  82 => 29,  80 => 28,  78 => 27,  76 => 26,  70 => 23,  64 => 20,  58 => 17,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"board-content\">
    <div class=\"jumbotron jumbotron-fluid bg-white\">
        <div class=\"container\">
            <div class=\"row my-4\">
                <div class=\"col-lg\">
                    <h1 class=\"font-bold ml-3\">Directors of Xtenda Finance </h1>
                </div>
            </div>
            <div class=\"row justify-content-center\"> <span class=\"dots\">



                    <img class=\"absolute\" style=\"right: 10%;top: 10%;width: 70px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                    <img class=\"absolute\" style=\"right: 15%;top: 15%;width: 30px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                    <img class=\"absolute\" style=\"left: 8%;bottom: 0;width: 150px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">

                    <img class=\"absolute\" style=\"left: 5%;bottom: 5%;width: 30px;\"
                        src=\"{{'assets/img/CIRCLE.svg'|theme}}\" alt=\"\">
                </span>

{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


    {% for record in records %}
    <div class=\"col-sm-6 col-lg-4 card-col\">
                <div class=\"custom-card\">
                    <div class=\"card-top\">
                        <img class=\"card-img-top\" src=\"{{record.director_photo.thumb(350,500,{'mode' : 'crop'})}}\"
                            alt=\"Card image cap\">
                    </div>
                    <div class=\"card-bototm text-center\">
                        <h5 class=\"card-title\">{{record.name}} {{record.surname}}</h5>
                        <div class=\"desig\"><span class=\"\">{{record.role}}</span></div>


                        <div> {% spaceless %}
                            {% if detailsPage %}
                            <a class=\"text-primary\"
                                href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                                {% endif %}

                                View Profile

                                {% if detailsPage %}
                            </a>
                            {% endif %}
                            {% endspaceless %}
                        </div>
                    </div>
                </div>
            </div>
    {% endfor %}", "C:\\xampp\\htdocs\\International/themes/international/pages/board.htm", "");
    }
}
