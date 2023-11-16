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

/* file/index.html.twig */
class __TwigTemplate_3e78c796e749571d3ddfd1e7d916ff6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "file/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "file/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "file/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My Files";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mt-5\">
    <h2>My Files</h2>

    <div class=\"mb-3\">
    <p>Storage used: ";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "usestorage", [], "any", false, false, false, 10), 2, ".", " "), "html", null, true);
        echo " GB / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "storage", [], "any", false, false, false, 10), "html", null, true);
        echo " GB</p>
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "usestorage", [], "any", false, false, false, 11) >= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "storage", [], "any", false, false, false, 11))) {
            // line 12
            echo "        <div class=\"alert alert-warning\">
            You have reached or exceeded your storage limit. Please purchase an additional 20 GB to continue.
        </div>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "usestorage", [], "any", false, false, false, 15) >= (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "storage", [], "any", false, false, false, 15) * 0.9))) {
            // line 16
            echo "        <div class=\"alert alert-info\">
            You are approaching your storage limit. Consider purchasing more storage if needed.
        </div>
    ";
        }
        // line 20
        echo "</div>

    ";
        // line 22
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "    <div class=\"alert alert-info\">
        You are logged in as an admin.
    </div>
    ";
        }
        // line 27
        echo "
    <div class=\"mb-3\">
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_upload");
        echo "\" class=\"btn btn-success\">Upload New File</a>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_invoice", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Download Invoice</a>
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
        echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer votre compte? Tous vos fichiers seront également supprimés.');\">Delete Account</a>
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-warning\">Log Out</a>
    </div>

    ";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 35, $this->source); })())) > 0)) {
            // line 36
            echo "
    <div class=\"mb-3\">
        <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search for files...\">
    </div>

    <table class=\"table table-striped mt-3\">
        <thead>
            <tr>
                <th class=\"sortable\" data-sort=\"id\"># <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"filename\">Filename <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"filepath\">Filepath <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"size\">Size <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"type\">Type <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"description\">Description <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"upload-date\">Upload Date <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"create-date\">Create Date <i class=\"fas fa-sort\"></i></th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 58
                echo "            <tr>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getId", [], "method", false, false, false, 59), "html", null, true);
                echo "</td>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getFilename", [], "method", false, false, false, 60), "html", null, true);
                echo "</td>
                <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getFilepath", [], "method", false, false, false, 61), "html", null, true);
                echo "</td>
                <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getFilesize", [], "method", false, false, false, 62), "html", null, true);
                echo " bytes</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getFiletype", [], "method", false, false, false, 63), "html", null, true);
                echo "</td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getDescription", [], "method", false, false, false, 64), "html", null, true);
                echo "</td>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getUploadDate", [], "method", false, false, false, 65), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "getCreateDate", [], "method", false, false, false, 66), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serve_file", ["filename" => twig_get_attribute($this->env, $this->source, $context["file"], "getFilename", [], "method", false, false, false, 68)]), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info btn-sm\">View</a>
                </td>
                <td>
                    <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["file"], "getId", [], "method", false, false, false, 71)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this file?');\">Delete</a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 78
            echo "    <p class=\"mt-3\">You don't have any files yet.</p>
    ";
        }
        // line 80
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 84
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script>

    \$(document).ready(function() {
            setTimeout(function() {
                \$(\".alert\").fadeOut(\"slow\");
            }, 5000);
        });

        \$(document).ready(function() {
            \$('#searchInput').on('keyup', function() {
                var value = \$(this).val().toLowerCase();
                \$(\"table tbody tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
            \$('.sortable').click(function() {
                var table = \$(this).parents('table').eq(0);
                var rows = table.find('tr:gt(0)').toArray().sort(comparer(\$(this).index()));

                if(\$(this).hasClass('asc')) {
                    \$(this).removeClass('asc');
                    \$(this).addClass('desc');
                    \$(this).find('.fas').removeClass('fa-sort-up').addClass('fa-sort-down');
                    rows = rows.reverse();
                } else {
                    \$(this).addClass('asc');
                    \$(this).removeClass('desc');
                    \$(this).find('.fas').removeClass('fa-sort-down').addClass('fa-sort-up');
                }

                for (var i = 0; i < rows.length; i++) {
                    table.append(rows[i]);
                }
            });
        });

        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index);
                return \$.isNumeric(valA) && \$.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
            }
        }

        function getCellValue(row, index) {
            return \$(row).children('td').eq(index).text();
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "file/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 89,  274 => 88,  262 => 84,  252 => 83,  241 => 80,  237 => 78,  232 => 75,  222 => 71,  216 => 68,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  195 => 62,  191 => 61,  187 => 60,  183 => 59,  180 => 58,  176 => 57,  153 => 36,  151 => 35,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 27,  123 => 23,  121 => 22,  117 => 20,  111 => 16,  109 => 15,  104 => 12,  102 => 11,  96 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Files{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2>My Files</h2>

    <div class=\"mb-3\">
    <p>Storage used: {{ app.user.usestorage |number_format(2, '.', ' ')}} GB / {{ app.user.storage }} GB</p>
    {% if app.user.usestorage >= app.user.storage %}
        <div class=\"alert alert-warning\">
            You have reached or exceeded your storage limit. Please purchase an additional 20 GB to continue.
        </div>
    {% elseif app.user.usestorage >= (app.user.storage * 0.9) %}
        <div class=\"alert alert-info\">
            You are approaching your storage limit. Consider purchasing more storage if needed.
        </div>
    {% endif %}
</div>

    {% if isAdmin %}
    <div class=\"alert alert-info\">
        You are logged in as an admin.
    </div>
    {% endif %}

    <div class=\"mb-3\">
        <a href=\"{{ path('file_upload') }}\" class=\"btn btn-success\">Upload New File</a>
        <a href=\"{{ path('generate_invoice', {'userId': app.user.id}) }}\" class=\"btn btn-primary\">Download Invoice</a>
        <a href=\"{{ path('delete_account') }}\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer votre compte? Tous vos fichiers seront également supprimés.');\">Delete Account</a>
        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-warning\">Log Out</a>
    </div>

    {% if files|length > 0 %}

    <div class=\"mb-3\">
        <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search for files...\">
    </div>

    <table class=\"table table-striped mt-3\">
        <thead>
            <tr>
                <th class=\"sortable\" data-sort=\"id\"># <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"filename\">Filename <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"filepath\">Filepath <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"size\">Size <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"type\">Type <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"description\">Description <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"upload-date\">Upload Date <i class=\"fas fa-sort\"></i></th>
                <th class=\"sortable\" data-sort=\"create-date\">Create Date <i class=\"fas fa-sort\"></i></th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            {% for file in files %}
            <tr>
                <td>{{ file.getId() }}</td>
                <td>{{ file.getFilename() }}</td>
                <td>{{ file.getFilepath() }}</td>
                <td>{{ file.getFilesize() }} bytes</td>
                <td>{{ file.getFiletype() }}</td>
                <td>{{ file.getDescription() }}</td>
                <td>{{ file.getUploadDate()|date('d-m-Y H:i') }}</td>
                <td>{{ file.getCreateDate()|date('d-m-Y H:i') }}</td>
                <td>
                    <a href=\"{{ path('serve_file', {'filename': file.getFilename()}) }}\" target=\"_blank\" class=\"btn btn-info btn-sm\">View</a>
                </td>
                <td>
                    <a href=\"{{ path('file_delete', {'id': file.getId()}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this file?');\">Delete</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    {% else %}
    <p class=\"mt-3\">You don't have any files yet.</p>
    {% endif %}
</div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
{% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script>

    \$(document).ready(function() {
            setTimeout(function() {
                \$(\".alert\").fadeOut(\"slow\");
            }, 5000);
        });

        \$(document).ready(function() {
            \$('#searchInput').on('keyup', function() {
                var value = \$(this).val().toLowerCase();
                \$(\"table tbody tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
            \$('.sortable').click(function() {
                var table = \$(this).parents('table').eq(0);
                var rows = table.find('tr:gt(0)').toArray().sort(comparer(\$(this).index()));

                if(\$(this).hasClass('asc')) {
                    \$(this).removeClass('asc');
                    \$(this).addClass('desc');
                    \$(this).find('.fas').removeClass('fa-sort-up').addClass('fa-sort-down');
                    rows = rows.reverse();
                } else {
                    \$(this).addClass('asc');
                    \$(this).removeClass('desc');
                    \$(this).find('.fas').removeClass('fa-sort-down').addClass('fa-sort-up');
                }

                for (var i = 0; i < rows.length; i++) {
                    table.append(rows[i]);
                }
            });
        });

        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index);
                return \$.isNumeric(valA) && \$.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
            }
        }

        function getCellValue(row, index) {
            return \$(row).children('td').eq(index).text();
        }
    </script>
{% endblock %}
", "file/index.html.twig", "/Users/tompicout/code/school/archi-tech/templates/file/index.html.twig");
    }
}
