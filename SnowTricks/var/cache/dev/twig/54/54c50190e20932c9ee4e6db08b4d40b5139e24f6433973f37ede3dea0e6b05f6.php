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

/* home/index.html.twig */
class __TwigTemplate_5b4898134c424189cefcbf73c6498c4fad1497c0c78b6f29b93d9db96a7a5a2c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Snow Tricks ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <!-- Header -->
    <header class=\"masthead \" id=\"up-top\" style=\" background-image: url(/uploads/pictures/snow-3.jpg);\">
        <div class=\"container\">
            <div class=\"intro-text\" style=\"color: #0B132B;\">
                <div class=\"intro-lead-in\">Bienvenue sur le plus gros site communautaire de tricks pour Snowboarder!
                </div>
                <div class=\"intro-heading text-uppercase\">Your trick Your buzz</div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\" style=\"margin-bottom: 100px;\">
                    <a class=\"btn btn-primary text-uppercase js-scroll-trigger float-right\" href=\"#portfolio\">
                        <i class=\"fas fa-angle-double-down fa-2x\"></i></a>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    <!-- Portfolio Grid -->
    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">Vos derniers tricks</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class=\"row\" id=\"trickList\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 35
            echo "                    <div class=\"col-md-3 col-sm-6 portfolio-item\">
                        <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
            echo "\">
                            <div class=\"portfolio-hover\">
                                <div class=\"portfolio-hover-content\">
                                    <i class=\"fas fa-plus fa-3x\"></i>
                                </div>
                            </div>
                            <img class=\"img-fluid\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trick"], "pictureDefault", []), "name", []))), "html", null, true);
            echo "\"
                                 alt=\"\">
                        </a>
                        <div class=\"portfolio-caption\">
                            <h6>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", []), "html", null, true);
            echo "
                                ";
            // line 47
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", $context["trick"])) {
                // line 48
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
                echo "\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                ";
            }
            // line 52
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", $context["trick"])) {
                // line 53
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
                echo "\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
            }
            // line 57
            echo "                            </h6>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>
            <div class=\"row\">
                <a class=\"m-auto\" id=\"loadMoreBTN\">
                    <button class=\"btn btn-primary \">Voir plus</button>
                </a>
            </div>
            <a id=\"btn-up\" href=\"#up-top\" class=\"btn btn-primary float-right js-scroll-trigger mr-4\"><i
                        class=\"fas fa-angle-double-up fa-2x\"></i></a>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        click = 0;
        \$(\"#btn-up\").hide();

        function loadMore(event) {
            event.preventDefault();
            click++;
            let trick = 5 * click;
            const url = \"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("load_more_trick");
        echo "\" + trick;
            axios.get(url).then(function (response) {
                \$(\"#trickList\").append(response.data);
                if (trick === 15) {
                    \$(\"#btn-up\").show();
                }
            }).catch(function (error) {
                if (error.response.status === 404) {
                    window.alert(\"Erreur ! la page demander n'existe pas.\");
                } else {
                    window.alert(\"Alert une erreure c'est produite veuillez contacter le support !\");
                }
            });
        }

        document.getElementById('loadMoreBTN').addEventListener('click', loadMore);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 84,  219 => 74,  210 => 73,  190 => 61,  181 => 57,  173 => 53,  170 => 52,  162 => 48,  160 => 47,  156 => 46,  149 => 42,  140 => 36,  137 => 35,  133 => 34,  121 => 24,  112 => 23,  86 => 5,  77 => 4,  59 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Snow Tricks {% endblock %}
{% block header %}
    <!-- Header -->
    <header class=\"masthead \" id=\"up-top\" style=\" background-image: url(/uploads/pictures/snow-3.jpg);\">
        <div class=\"container\">
            <div class=\"intro-text\" style=\"color: #0B132B;\">
                <div class=\"intro-lead-in\">Bienvenue sur le plus gros site communautaire de tricks pour Snowboarder!
                </div>
                <div class=\"intro-heading text-uppercase\">Your trick Your buzz</div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\" style=\"margin-bottom: 100px;\">
                    <a class=\"btn btn-primary text-uppercase js-scroll-trigger float-right\" href=\"#portfolio\">
                        <i class=\"fas fa-angle-double-down fa-2x\"></i></a>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

{% block content %}
    <!-- Portfolio Grid -->
    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">Vos derniers tricks</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class=\"row\" id=\"trickList\">
                {% for trick in tricks %}
                    <div class=\"col-md-3 col-sm-6 portfolio-item\">
                        <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"{{ path('show', {'id': trick.id}) }}\">
                            <div class=\"portfolio-hover\">
                                <div class=\"portfolio-hover-content\">
                                    <i class=\"fas fa-plus fa-3x\"></i>
                                </div>
                            </div>
                            <img class=\"img-fluid\" src=\"{{ asset('uploads/pictures/'~ trick.pictureDefault.name) }}\"
                                 alt=\"\">
                        </a>
                        <div class=\"portfolio-caption\">
                            <h6>{{ trick.name }}
                                {% if is_granted('EDIT', trick) %}
                                    <a href=\"{{ path('edit_trick', {'id': trick.id}) }}\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                {% endif %}
                                {% if is_granted('DELETE', trick) %}
                                    <a href=\"{{ path('delete_trick', {'id': trick.id}) }}\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                {% endif %}
                            </h6>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"row\">
                <a class=\"m-auto\" id=\"loadMoreBTN\">
                    <button class=\"btn btn-primary \">Voir plus</button>
                </a>
            </div>
            <a id=\"btn-up\" href=\"#up-top\" class=\"btn btn-primary float-right js-scroll-trigger mr-4\"><i
                        class=\"fas fa-angle-double-up fa-2x\"></i></a>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        click = 0;
        \$(\"#btn-up\").hide();

        function loadMore(event) {
            event.preventDefault();
            click++;
            let trick = 5 * click;
            const url = \"{{ path('load_more_trick') }}\" + trick;
            axios.get(url).then(function (response) {
                \$(\"#trickList\").append(response.data);
                if (trick === 15) {
                    \$(\"#btn-up\").show();
                }
            }).catch(function (error) {
                if (error.response.status === 404) {
                    window.alert(\"Erreur ! la page demander n'existe pas.\");
                } else {
                    window.alert(\"Alert une erreure c'est produite veuillez contacter le support !\");
                }
            });
        }

        document.getElementById('loadMoreBTN').addEventListener('click', loadMore);
    </script>
{% endblock %}
", "home/index.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/index.html.twig");
    }
}
