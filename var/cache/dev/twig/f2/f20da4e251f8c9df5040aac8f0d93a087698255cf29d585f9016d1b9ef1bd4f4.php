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

/* main/index.html.twig */
class __TwigTemplate_9a0c2aa7a5938e206c2f13ffbb34991c990c260dc85233a1dc9570077cf11864 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <h1>Hello ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_index");
        echo "\" class=\"waves-effect waves-light btn\">Avis</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_index");
        echo "\" class=\"waves-effect waves-light btn\">Matière</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_index");
        echo "\" class=\"waves-effect waves-light btn\">Cours</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeur_index");
        echo "\" class=\"waves-effect waves-light btn\">Professeurs</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\" class=\"waves-effect waves-light btn disabled\">Salle</a>

</div>
<br>
    <table class=\"table\" width=100%>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 27
        $context["heure"] = 0;
        // line 28
        echo "            ";
        $context["minutes"] = 0;
        // line 29
        echo "            ";
        $context["trueMin"] = true;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "            <tr>
                <td width=5% style=\"border-right: 1px solid black\">";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["heure"]) || array_key_exists("heure", $context) ? $context["heure"] : (function () { throw new RuntimeError('Variable "heure" does not exist.', 32, $this->source); })()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, (isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "</td>
                <td></td>
                ";
            // line 34
            $context["heure"] = (1 + (isset($context["heure"]) || array_key_exists("heure", $context) ? $context["heure"] : (function () { throw new RuntimeError('Variable "heure" does not exist.', 34, $this->source); })()));
            // line 35
            echo "                ";
            if ((isset($context["trueMin"]) || array_key_exists("trueMin", $context) ? $context["trueMin"] : (function () { throw new RuntimeError('Variable "trueMin" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "                    ";
                $context["minutes"] = 30;
                // line 37
                echo "                        ";
                $context["trueMin"] = false;
                // line 38
                echo "                    ";
            } else {
                // line 39
                echo "                        ";
                $context["minutes"] = 0;
                // line 40
                echo "                        ";
                $context["trueMin"] = true;
                // line 41
                echo "                ";
            }
            // line 42
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 44,  175 => 42,  172 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  157 => 36,  154 => 35,  152 => 34,  145 => 32,  142 => 31,  137 => 30,  134 => 29,  131 => 28,  129 => 27,  113 => 14,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}

<div class=\"container\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    <a href=\"{{ path('avis_index') }}\" class=\"waves-effect waves-light btn\">Avis</a>
    <a href=\"{{ path('matiere_index') }}\" class=\"waves-effect waves-light btn\">Matière</a>
    <a href=\"{{ path('cours_index') }}\" class=\"waves-effect waves-light btn\">Cours</a>
    <a href=\"{{ path('professeur_index') }}\" class=\"waves-effect waves-light btn\">Professeurs</a>
    <a href=\"{{ path('main') }}\" class=\"waves-effect waves-light btn disabled\">Salle</a>

</div>
<br>
    <table class=\"table\" width=100%>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% set heure = 00 %}
            {% set minutes = 00 %}
            {% set trueMin = true %}
        {% for i in 1..68 %}
            <tr>
                <td width=5% style=\"border-right: 1px solid black\">{{ heure }}:{{ minutes }}</td>
                <td></td>
                {% set heure = 1 + heure %}
                {% if trueMin %}
                    {% set minutes = 30 %}
                        {% set trueMin = false %}
                    {% else %}
                        {% set minutes = 00 %}
                        {% set trueMin = true %}
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "main/index.html.twig", "C:\\Users\\xogaribal\\Desktop\\Symfony\\Projet_AgendaWeb\\templates\\main\\index.html.twig");
    }
}
