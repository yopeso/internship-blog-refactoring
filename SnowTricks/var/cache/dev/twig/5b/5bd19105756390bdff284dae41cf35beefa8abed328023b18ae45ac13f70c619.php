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

/* account/dashboard.html.twig */
class __TwigTemplate_8343bd4fa20a29b4d8f0eb44ea722a7e961696b7cdff6663122750f0953b12d2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/dashboard.html.twig", 1);
        $_trait_0 = $this->loadTemplate("/account/_layout_menu.html.twig", "account/dashboard.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."/account/_layout_menu.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'header' => [$this, 'block_header'],
                'content' => [$this, 'block_content'],
                'menu' => [$this, 'block_menu'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Snow Trick / Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <section class=\"bg-light \" id=\"portfolio\">

        <div class=\"container\">
            <h2 class=\"text-center mb-5\">Bonjour ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", []), "pseudo", []), "html", null, true);
        echo "</h2>

            <div class=\"row\">
                <!-- <h3>Bienvenue sur le site Snow Trick, vous pouvez des a present publier votre 1er Trick</h3> -->
                ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "                <div class=\"col-md-9 col-sm-12\">

                    <div class=\"card\">
                        <div class=\"media-body \">
                            <div class=\"card-body\">
                                <div class=\"card-text mb-3\">


                                    <h3 class=\"mb-5\">Vos Figures en lignes :</h3>
                                    <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                        <div class=\"row\">

                                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 32
            echo "                                                <div class=\"col-md-4 col-sm-5 mb-3\">
                                                    <div class=\"card\">
                                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
            echo "\">
                                                            <img class=\"card-img-top\"
                                                                 src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trick"], "pictureDefault", []), "name", []))), "html", null, true);
            echo "\">
                                                        </a>
                                                        <div class=\"card-body\">
                                                            <p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", []), "html", null, true);
            echo "</p>
                                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
            echo "\">
                                                                <button class=\"btn btn-danger float-right ml-2\">
                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                </button>
                                                            </a>
                                                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
            echo "\">
                                                                <button class=\"btn btn-warning float-right \">
                                                                    <i class=\"fas fa-pencil-alt  \"></i>
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 mt-5\">
                    <div class=\"card\">
                        <div class=\"media-body \">
                            <div class=\"card-body\">
                                <div class=\"card-text mb-3\">
                                    <h3 class=\"mb-5\">Vos commentaires :</h3>
                                    <table class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">lien vers le trick</th>
                                            <th scope=\"col\">date de création</th>
                                            <th scope=\"col\">contenu</th>
                                            <th scope=\"col\"><i class=\"fas fa-trash-alt\"></i></th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 83
            echo "                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "trick", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "trick", []), "id", []), "html", null, true);
            echo "</a>
                                                </th>
                                                <th>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dateCreation", []), "d-m-Y"), "html", null, true);
            echo "</th>
                                                <th>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", []), "html", null, true);
            echo "</th>
                                                <th>
                                                    <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [])]), "html", null, true);
            echo "\">
                                                        <i class=\"fas fa-trash-alt\"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "                    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 17,  281 => 16,  261 => 96,  249 => 90,  244 => 88,  240 => 87,  233 => 85,  229 => 83,  225 => 82,  196 => 55,  180 => 45,  172 => 40,  166 => 39,  160 => 36,  155 => 34,  151 => 32,  147 => 31,  133 => 19,  131 => 16,  124 => 12,  119 => 9,  110 => 8,  99 => 6,  90 => 5,  72 => 4,  51 => 1,  30 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% use '/account/_layout_menu.html.twig' %}

{% block title %}Snow Trick / Dashboard{% endblock %}
{% block header %}

{% endblock %}
{% block content %}
    <section class=\"bg-light \" id=\"portfolio\">

        <div class=\"container\">
            <h2 class=\"text-center mb-5\">Bonjour {{ app.user.pseudo }}</h2>

            <div class=\"row\">
                <!-- <h3>Bienvenue sur le site Snow Trick, vous pouvez des a present publier votre 1er Trick</h3> -->
                {% block menu %}
                    {{ parent() }}
                {% endblock %}
                <div class=\"col-md-9 col-sm-12\">

                    <div class=\"card\">
                        <div class=\"media-body \">
                            <div class=\"card-body\">
                                <div class=\"card-text mb-3\">


                                    <h3 class=\"mb-5\">Vos Figures en lignes :</h3>
                                    <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                        <div class=\"row\">

                                            {% for trick in tricks %}
                                                <div class=\"col-md-4 col-sm-5 mb-3\">
                                                    <div class=\"card\">
                                                        <a href=\"{{ path('show', {'id': trick.id}) }}\">
                                                            <img class=\"card-img-top\"
                                                                 src=\"{{ asset('uploads/pictures/'~ trick.pictureDefault.name) }}\">
                                                        </a>
                                                        <div class=\"card-body\">
                                                            <p>{{ trick.id }} : {{ trick.name }}</p>
                                                            <a href=\"{{ path('delete_trick', {'id': trick.id}) }}\">
                                                                <button class=\"btn btn-danger float-right ml-2\">
                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                </button>
                                                            </a>
                                                            <a href=\"{{ path('edit_trick', {'id': trick.id}) }}\">
                                                                <button class=\"btn btn-warning float-right \">
                                                                    <i class=\"fas fa-pencil-alt  \"></i>
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            {% endfor %}

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 mt-5\">
                    <div class=\"card\">
                        <div class=\"media-body \">
                            <div class=\"card-body\">
                                <div class=\"card-text mb-3\">
                                    <h3 class=\"mb-5\">Vos commentaires :</h3>
                                    <table class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">lien vers le trick</th>
                                            <th scope=\"col\">date de création</th>
                                            <th scope=\"col\">contenu</th>
                                            <th scope=\"col\"><i class=\"fas fa-trash-alt\"></i></th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for comment in comments %}
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"{{ path('show', {'id': comment.trick.id}) }}\">{{ comment.trick.id }}</a>
                                                </th>
                                                <th>{{ comment.dateCreation | date('d-m-Y') }}</th>
                                                <th>{{ comment.content }}</th>
                                                <th>
                                                    <a href=\"{{ path('delete_comment', {'id': comment.id}) }}\">
                                                        <i class=\"fas fa-trash-alt\"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "account/dashboard.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/account/dashboard.html.twig");
    }
}
