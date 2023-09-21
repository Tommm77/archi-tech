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

/* emails/admin_notification.html.twig */
class __TwigTemplate_593426703446303888ec98f68da11c65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/admin_notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/admin_notification.html.twig"));

        $this->parent = $this->loadTemplate("base_email.html.twig", "emails/admin_notification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Notification de suppression de compte utilisateur</h1>
<p>Bonjour Administrateur,</p>
<p>L'utilisateur ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " a supprimé son compte de notre plateforme. Voici quelques détails :</p>
<ul>
    <li>Nom d'utilisateur : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</li>
    <li>Nombre de fichiers supprimés : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["fileCount"]) || array_key_exists("fileCount", $context) ? $context["fileCount"] : (function () { throw new RuntimeError('Variable "fileCount" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</li>
</ul>
<p>Si des actions supplémentaires sont nécessaires, veuillez les effectuer.</p>
<p>Cordialement,</p>
<p>L'équipe [ArchiTech]</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "emails/admin_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 9,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_email.html.twig' %}

{% block content %}
<h1>Notification de suppression de compte utilisateur</h1>
<p>Bonjour Administrateur,</p>
<p>L'utilisateur {{ email }} a supprimé son compte de notre plateforme. Voici quelques détails :</p>
<ul>
    <li>Nom d'utilisateur : {{ email }}</li>
    <li>Nombre de fichiers supprimés : {{ fileCount }}</li>
</ul>
<p>Si des actions supplémentaires sont nécessaires, veuillez les effectuer.</p>
<p>Cordialement,</p>
<p>L'équipe [ArchiTech]</p>
{% endblock %}
", "emails/admin_notification.html.twig", "/Users/tompicout/code/school/archi-tech/templates/emails/admin_notification.html.twig");
    }
}
