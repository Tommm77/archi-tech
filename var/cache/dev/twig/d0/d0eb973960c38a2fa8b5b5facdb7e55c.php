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

/* invoice.html.twig */
class __TwigTemplate_020c3eabe73cc5d698f7ce31fd8cc470 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
</style>

<div class=\"invoice-box\">
    <table cellpadding=\"0\" cellspacing=\"0\">
        <tr class=\"top\">
            <td colspan=\"2\">
                <table>
                    <tr>
                        <td class=\"title\">
                            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "schemeAndHttpHost", [], "any", false, false, false, 77) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png")), "html", null, true);
        echo "\" style=\"width:100%; max-width:300px;\">
                        </td>

                        <td>
                            Invoice #: 123<br>
                            Date: ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class=\"information\">
            <td colspan=\"2\">
                <table>
                    <tr>
                        <td>
                            Architech, Inc.<br>
                            12345 Peace Street<br>
                            Paris, 75002
                        </td>

                        <td>
                            ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), "html", null, true);
        echo "<br>
                            First Name Last Name<br>
                            User Address
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class=\"heading\">
            <td>
                Payment Method
            </td>

            <td>
                Visa Card
            </td>
        </tr>

        <tr class=\"details\">
            <td>
                Card Name
            </td>

            <td>
                1234**********
            </td>
        </tr>

        <tr class=\"heading\">
            <td>
                Item
            </td>

            <td>
                Price
            </td>
        </tr>

        <tr class=\"item\">
            <td>
                Purchased Storage Space: 20 GB
            </td>

            <td>
                16.66\$
            </td>
        </tr>

        <tr class=\"item last\">
            <td>
                VAT 20%
            </td>

            <td>
                3.33\$
            </td>
        </tr>

        <tr class=\"total\">
            <td></td>

            <td>
               Total: 20\$
            </td>
        </tr>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "invoice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 100,  149 => 82,  141 => 77,  66 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

{% block body %}
<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
</style>

<div class=\"invoice-box\">
    <table cellpadding=\"0\" cellspacing=\"0\">
        <tr class=\"top\">
            <td colspan=\"2\">
                <table>
                    <tr>
                        <td class=\"title\">
                            <img src=\"{{ app.request.schemeAndHttpHost ~ asset('logo.png') }}\" style=\"width:100%; max-width:300px;\">
                        </td>

                        <td>
                            Invoice #: 123<br>
                            Date: {{ \"now\"|date(\"d-m-Y\") }}<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class=\"information\">
            <td colspan=\"2\">
                <table>
                    <tr>
                        <td>
                            Architech, Inc.<br>
                            12345 Peace Street<br>
                            Paris, 75002
                        </td>

                        <td>
                            {{ user.email }}<br>
                            First Name Last Name<br>
                            User Address
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class=\"heading\">
            <td>
                Payment Method
            </td>

            <td>
                Visa Card
            </td>
        </tr>

        <tr class=\"details\">
            <td>
                Card Name
            </td>

            <td>
                1234**********
            </td>
        </tr>

        <tr class=\"heading\">
            <td>
                Item
            </td>

            <td>
                Price
            </td>
        </tr>

        <tr class=\"item\">
            <td>
                Purchased Storage Space: 20 GB
            </td>

            <td>
                16.66\$
            </td>
        </tr>

        <tr class=\"item last\">
            <td>
                VAT 20%
            </td>

            <td>
                3.33\$
            </td>
        </tr>

        <tr class=\"total\">
            <td></td>

            <td>
               Total: 20\$
            </td>
        </tr>
    </table>
</div>
{% endblock %}
", "invoice.html.twig", "/Users/tompicout/code/school/archi-tech/templates/invoice.html.twig");
    }
}
