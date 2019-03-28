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

/* home/trick.html.twig */
class __TwigTemplate_fd853762fff8839c09518c1753ca67a95abc1c90f6cca70d71680d4e41a48ad0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/trick.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/trick.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/trick.html.twig"));

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



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section class=\"bg-light \" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-12 mb-5\">
                        <header class=\"masthead card-img-top\"
                                style=\" background-image: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 18, $this->source); })()), "pictureDefault", []), "name", []))), "html", null, true);
        echo ");\">
                            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_trick", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 20, $this->source); })()), "id", [])]), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-danger float-right m-2\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </a>
                            ";
        }
        // line 26
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_trick", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 27, $this->source); })()), "id", [])]), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-warning float-right m-2 \">
                                        <i class=\"fas fa-pencil-alt  \"></i>
                                    </button>
                                </a>
                            ";
        }
        // line 33
        echo "                            <div class=\"intro-text\">
                                <div class=\"intro-lead-in\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 34, $this->source); })()), "name", []), "html", null, true);
        echo "</div>
                            </div>
                        </header>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-5\">
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 41, $this->source); })()), "pictures", []));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 42
            echo "                            <div class=\"col-md-3 col-sm-5 portfolio-item\">
                                <a class=\"portfolio-link\" data-toggle=\"modal\"
                                   href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "name", []))), "html", null, true);
            echo "\">
                                    <div class=\"portfolio-hover\">
                                        <div class=\"portfolio-hover-content\">
                                            <i class=\"fas fa-plus fa-3x\"></i>
                                        </div>
                                    </div>
                                    <img class=\"img-fluid\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "name", []))), "html", null, true);
            echo "\"
                                         alt=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "alt", []), "html", null, true);
            echo "\">
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 55, $this->source); })()), "videos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 56
            echo "                            <div class=\"col-md-3 col-sm-5\">
                                ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["video"], "platform", []) == false)) {
                // line 58
                echo "                                    <iframe width=\"auto\" height=\"auto\"
                                            src=\"https://www.youtube.com/embed/";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", []), "html", null, true);
                echo "\"
                                            frameborder=\"0\"
                                            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                            allowfullscreen></iframe>
                                ";
            } else {
                // line 64
                echo "                                    <iframe frameborder=\"0\" width=\"auto\" height=\"auto\"
                                            src=\"https://www.dailymotion.com/embed/video/";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", []), "html", null, true);
                echo "\"
                                            allowfullscreen allow=\"autoplay\"></iframe>
                                ";
            }
            // line 68
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-10 ml-auto mr-auto mb-5 \">
                            ";
        // line 76
        echo "                                ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 76, $this->source); })()), "content", []);
        echo "
                            ";
        // line 78
        echo "                        </div>

                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-10 ml-auto mr-auto mb-5 text-center \">
                            <h5>
                                <span class=\"btn btn-outline-dark\">Groupe de figure : ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 85, $this->source); })()), "trickCategory", []), "html", null, true);
        echo "</span>
                            </h5>

                            <span class=\"btn btn-outline-primary btn-sm\">Publié le : ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 88, $this->source); })()), "dateCreation", []), "d-m-Y"), "html", null, true);
        echo "</span>
                            ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 89, $this->source); })()), "dateMaj", [])) {
            // line 90
            echo "                                <span class=\"btn btn-outline-success btn-sm\">Mis à jour : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 90, $this->source); })()), "dateMaj", []), "d-m-Y"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 92
        echo "                        </div>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"media mb-3\">
                                    ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [])) {
            // line 101
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", []), "profilePicture", []), "pathPicture", [])) {
                // line 102
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", []), "profilePicture", []), "pathPicture", []))), "html", null, true);
                echo "\"
                                             class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                                             alt=\"...\">
                                    ";
            } else {
                // line 106
                echo "                                        <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\"
                                             alt=\"...\">
                                    ";
            }
            // line 109
            echo "                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", []), "pseudo", []), "html", null, true);
            echo "</h5>
                                                <div class=\"card-text\">
                                                    <div class=\"form-group\">
                                                        ";
            // line 115
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_start');
            echo "
                                                        ";
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'widget');
            echo "
                                                        <div class=\"form-group card-text\">
                                                            <button type=\"submit\" class=\"btn btn-outline-dark\">Ajouter
                                                                votre
                                                                commentaire
                                                            </button>
                                                            ";
            // line 122
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        } else {
            // line 129
            echo "                                            <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\"
                                                 alt=\"...\">
                                            <div class=\"media-body \">
                                                <div class=\"card\">
                                                    <div class=\"card-body\">
                                                        <h5 class=\"mt-0 mb-1 card-title\">Pseudo</h5>
                                                        <div class=\"card-text\">
                                                            <p>Veuillez vous connecter pour laisser un commentaire
                                                                <a href=\"";
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a> ou
                                                                <a href=\"";
            // line 138
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">S'inscrire</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 144
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <h4 class=\"text-center mb-4\">Commentaires</h4>
                            <ul class=\"list-unstyled\" id=\"block-comment\">
                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 153
            echo "                                    <li class=\"media mb-3\">
                                        ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", []), "profilePicture", []), "pathPicture", [])) {
                // line 155
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", []), "profilePicture", []), "pathPicture", []))), "html", null, true);
                echo "\"
                                                 class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                                                 alt=\"photo de profile\">
                                        ";
            } else {
                // line 159
                echo "                                            <img src=\"http://placehold.it/65X65\"
                                                 class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                                                 alt=\"photo de profile default\">
                                        ";
            }
            // line 163
            echo "                                        <div class=\"media-body \">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    ";
            // line 166
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE_COMMENT", $context["comment"])) {
                // line 167
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [])]), "html", null, true);
                echo "\"
                                                           class=\"float-right m-1 mb-2\"><i class=\"fas fa-trash-alt\"></i></a>
                                                    ";
            }
            // line 170
            echo "                                                    <h5 class=\"mt-0 mb-1 card-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", []), "pseudo", []), "html", null, true);
            echo "</h5>

                                                    <p class=\"card-text\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", []), "html", null, true);
            echo "</p>

                                                    <span class=\"badge badge-secondary float-right\">le ";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dateCreation", []), "d-m-Y"), "html", null, true);
            echo "</span>
                                                    ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "dateMaj", [])) {
                // line 176
                echo "                                                        <span class=\"badge badge-success float-right\">Editier le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dateMaj", []), "d-m-Y"), "html", null, true);
                echo "</span>
                                                    ";
            }
            // line 178
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "
                            </ul>
                            <div class=\"row\">
                                <a class=\"m-auto\" id=\"loadMoreBTN\">
                                    <button class=\"btn btn-primary \">Voir plus</button>
                                </a>
                            </div>
                            <a id=\"btn-up\" href=\"#portfolio\" class=\"btn btn-primary float-right js-scroll-trigger mr-4\"><i
                                        class=\"fas fa-angle-double-up fa-2x\"></i></a>
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

    // line 201
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 202
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
            let comment = 15 * click;
            const url = \"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("load_more_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 212, $this->source); })()), "id", [])]), "html", null, true);
        echo "/\" + comment;
            axios.get(url).then(function (response) {
                \$(\"#block-comment\").append(response.data);
                if (comment === 15) {
                    \$(\"#btn-up\").show();
                }
            }).catch(function (error) {
                console.log(error);
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
        return "home/trick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 212,  467 => 202,  458 => 201,  431 => 183,  421 => 178,  415 => 176,  413 => 175,  409 => 174,  404 => 172,  398 => 170,  391 => 167,  389 => 166,  384 => 163,  378 => 159,  370 => 155,  368 => 154,  365 => 153,  361 => 152,  351 => 144,  342 => 138,  338 => 137,  328 => 129,  318 => 122,  309 => 116,  305 => 115,  299 => 112,  294 => 109,  289 => 106,  281 => 102,  278 => 101,  276 => 100,  266 => 92,  260 => 90,  258 => 89,  254 => 88,  248 => 85,  239 => 78,  234 => 76,  227 => 70,  220 => 68,  214 => 65,  211 => 64,  203 => 59,  200 => 58,  198 => 57,  195 => 56,  190 => 55,  180 => 51,  176 => 50,  167 => 44,  163 => 42,  159 => 41,  149 => 34,  146 => 33,  136 => 27,  133 => 26,  123 => 20,  121 => 19,  117 => 18,  109 => 12,  100 => 11,  86 => 5,  77 => 4,  59 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Snow Tricks {% endblock %}
{% block header %}
    <!-- Header -->



{% endblock %}

{% block content %}
    <section class=\"bg-light \" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-12 mb-5\">
                        <header class=\"masthead card-img-top\"
                                style=\" background-image: url({{ asset('uploads/pictures/'~ trick.pictureDefault.name) }});\">
                            {% if is_granted('DELETE', trick) %}
                                <a href=\"{{ path('delete_trick', {'id': trick.id}) }}\">
                                    <button class=\"btn btn-danger float-right m-2\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </a>
                            {% endif %}
                            {% if is_granted('EDIT', trick) %}
                                <a href=\"{{ path('edit_trick', {'id': trick.id}) }}\">
                                    <button class=\"btn btn-warning float-right m-2 \">
                                        <i class=\"fas fa-pencil-alt  \"></i>
                                    </button>
                                </a>
                            {% endif %}
                            <div class=\"intro-text\">
                                <div class=\"intro-lead-in\">{{ trick.name }}</div>
                            </div>
                        </header>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-5\">
                        {% for picture in trick.pictures %}
                            <div class=\"col-md-3 col-sm-5 portfolio-item\">
                                <a class=\"portfolio-link\" data-toggle=\"modal\"
                                   href=\"{{ asset('uploads/pictures/'~ picture.name) }}\">
                                    <div class=\"portfolio-hover\">
                                        <div class=\"portfolio-hover-content\">
                                            <i class=\"fas fa-plus fa-3x\"></i>
                                        </div>
                                    </div>
                                    <img class=\"img-fluid\" src=\"{{ asset('uploads/pictures/'~ picture.name) }}\"
                                         alt=\"{{ picture.alt }}\">
                                </a>
                            </div>
                        {% endfor %}
                        {% for video in trick.videos %}
                            <div class=\"col-md-3 col-sm-5\">
                                {% if video.platform == false %}
                                    <iframe width=\"auto\" height=\"auto\"
                                            src=\"https://www.youtube.com/embed/{{ video.name }}\"
                                            frameborder=\"0\"
                                            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                            allowfullscreen></iframe>
                                {% else %}
                                    <iframe frameborder=\"0\" width=\"auto\" height=\"auto\"
                                            src=\"https://www.dailymotion.com/embed/video/{{ video.name }}\"
                                            allowfullscreen allow=\"autoplay\"></iframe>
                                {% endif %}
                            </div>
                        {% endfor %}

                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-10 ml-auto mr-auto mb-5 \">
                            {% autoescape false %}
                                {{ trick.content }}
                            {% endautoescape %}
                        </div>

                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-10 ml-auto mr-auto mb-5 text-center \">
                            <h5>
                                <span class=\"btn btn-outline-dark\">Groupe de figure : {{ trick.trickCategory }}</span>
                            </h5>

                            <span class=\"btn btn-outline-primary btn-sm\">Publié le : {{ trick.dateCreation | date('d-m-Y') }}</span>
                            {% if trick.dateMaj %}
                                <span class=\"btn btn-outline-success btn-sm\">Mis à jour : {{ trick.dateMaj | date('d-m-Y') }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"media mb-3\">
                                    {% if app.user %}
                                    {% if app.user.profilePicture.pathPicture %}
                                        <img src=\"{{ asset('uploads/pictures/'~app.user.profilePicture.pathPicture) }}\"
                                             class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                                             alt=\"...\">
                                    {% else %}
                                        <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\"
                                             alt=\"...\">
                                    {% endif %}
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">{{ app.user.pseudo }}</h5>
                                                <div class=\"card-text\">
                                                    <div class=\"form-group\">
                                                        {{ form_start(form) }}
                                                        {{ form_widget(form) }}
                                                        <div class=\"form-group card-text\">
                                                            <button type=\"submit\" class=\"btn btn-outline-dark\">Ajouter
                                                                votre
                                                                commentaire
                                                            </button>
                                                            {{ form_end(form) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {% else %}
                                            <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\"
                                                 alt=\"...\">
                                            <div class=\"media-body \">
                                                <div class=\"card\">
                                                    <div class=\"card-body\">
                                                        <h5 class=\"mt-0 mb-1 card-title\">Pseudo</h5>
                                                        <div class=\"card-text\">
                                                            <p>Veuillez vous connecter pour laisser un commentaire
                                                                <a href=\"{{ path('app_login') }}\">Se connecter</a> ou
                                                                <a href=\"{{ path('registration') }}\">S'inscrire</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <h4 class=\"text-center mb-4\">Commentaires</h4>
                            <ul class=\"list-unstyled\" id=\"block-comment\">
                                {% for comment in comments %}
                                    <li class=\"media mb-3\">
                                        {% if comment.user.profilePicture.pathPicture %}
                                            <img src=\"{{ asset('uploads/pictures/'~comment.user.profilePicture.pathPicture) }}\"
                                                 class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                                                 alt=\"photo de profile\">
                                        {% else %}
                                            <img src=\"http://placehold.it/65X65\"
                                                 class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                                                 alt=\"photo de profile default\">
                                        {% endif %}
                                        <div class=\"media-body \">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    {% if is_granted('DELETE_COMMENT', comment) %}
                                                        <a href=\"{{ path('delete_comment', {'id': comment.id}) }}\"
                                                           class=\"float-right m-1 mb-2\"><i class=\"fas fa-trash-alt\"></i></a>
                                                    {% endif %}
                                                    <h5 class=\"mt-0 mb-1 card-title\">{{ comment.user.pseudo }}</h5>

                                                    <p class=\"card-text\">{{ comment.content }}</p>

                                                    <span class=\"badge badge-secondary float-right\">le {{ comment.dateCreation | date('d-m-Y') }}</span>
                                                    {% if comment.dateMaj %}
                                                        <span class=\"badge badge-success float-right\">Editier le {{ comment.dateMaj | date('d-m-Y') }}</span>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                {% endfor %}

                            </ul>
                            <div class=\"row\">
                                <a class=\"m-auto\" id=\"loadMoreBTN\">
                                    <button class=\"btn btn-primary \">Voir plus</button>
                                </a>
                            </div>
                            <a id=\"btn-up\" href=\"#portfolio\" class=\"btn btn-primary float-right js-scroll-trigger mr-4\"><i
                                        class=\"fas fa-angle-double-up fa-2x\"></i></a>
                        </div>

                    </div>
                </div>
            </div>
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
            let comment = 15 * click;
            const url = \"{{ path('load_more_comment', {'id':trick.id}) }}/\" + comment;
            axios.get(url).then(function (response) {
                \$(\"#block-comment\").append(response.data);
                if (comment === 15) {
                    \$(\"#btn-up\").show();
                }
            }).catch(function (error) {
                console.log(error);
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
", "home/trick.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/trick.html.twig");
    }
}
