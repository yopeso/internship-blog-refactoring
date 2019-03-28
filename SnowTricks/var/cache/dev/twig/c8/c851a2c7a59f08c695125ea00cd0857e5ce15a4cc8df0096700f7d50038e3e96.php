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

/* home/trick_template.html.twig */
class __TwigTemplate_e04118f8de465e2823feffbb64c6730ce7e45197efba46a378364ae0ba669d5b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/trick_template.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/trick_template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/trick_template.html.twig"));

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
        echo "    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"card\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-12 mb-5\">
                        <header class=\"masthead card-img-top\">
                            <div class=\"intro-text\">
                                <div class=\"intro-lead-in\">Nom du trick</div>
                            </div>
                        </header>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-5\">
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-10 ml-auto mr-auto mb-5\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, atque blanditiis,
                                commodi cumque earum eligendi est et illo laudantium libero magni nihil nobis
                                nostrum praesentium quasi ratione, reiciendis repellat voluptas.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto atque
                                commodi, culpa deleniti, error eum ex fugit harum itaque magnam modi natus quas quia
                                quibusdam sequi tempora tempore voluptas!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam, assumenda
                                doloribus dolorum eius eos error et explicabo fugit iure maiores minus necessitatibus
                                nostrum reprehenderit, tempore unde vel volupta</p>
                        </div>

                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Pseudo</h5>
                                                <div class=\"card-text\">
                                                    <div class=\"form-group\">

                                                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\"
                                                                  rows=\"2\"></textarea>
                                                    </div>
                                                    <div class=\"form-group card-text\">
                                                        <button type=\"button\" class=\"btn btn-outline-dark\">Ajouter
                                                            votre
                                                            commentaire
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <h4 class=\"text-center mb-4\">Commentaires</h4>
                            <ul class=\"list-unstyled\">
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Bob</h5>
                                                <p class=\"card-text\">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel
                                                    metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra
                                                    turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Bob</h5>
                                                <p class=\"card-text\">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel
                                                    metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra
                                                    turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Bob</h5>
                                                <p class=\"card-text\">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel
                                                    metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra
                                                    turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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

    public function getTemplateName()
    {
        return "home/trick_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 12,  99 => 11,  85 => 5,  76 => 4,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Snow Tricks {% endblock %}
{% block header %}
    <!-- Header -->



{% endblock %}

{% block content %}
    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"card\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-12 mb-5\">
                        <header class=\"masthead card-img-top\">
                            <div class=\"intro-text\">
                                <div class=\"intro-lead-in\">Nom du trick</div>
                            </div>
                        </header>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-5\">
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-2 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-10 ml-auto mr-auto mb-5\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, atque blanditiis,
                                commodi cumque earum eligendi est et illo laudantium libero magni nihil nobis
                                nostrum praesentium quasi ratione, reiciendis repellat voluptas.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto atque
                                commodi, culpa deleniti, error eum ex fugit harum itaque magnam modi natus quas quia
                                quibusdam sequi tempora tempore voluptas!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam, assumenda
                                doloribus dolorum eius eos error et explicabo fugit iure maiores minus necessitatibus
                                nostrum reprehenderit, tempore unde vel volupta</p>
                        </div>

                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Pseudo</h5>
                                                <div class=\"card-text\">
                                                    <div class=\"form-group\">

                                                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\"
                                                                  rows=\"2\"></textarea>
                                                    </div>
                                                    <div class=\"form-group card-text\">
                                                        <button type=\"button\" class=\"btn btn-outline-dark\">Ajouter
                                                            votre
                                                            commentaire
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row mb-2\">
                        <div class=\"col-md-8 ml-auto mr-auto mb-2\">
                            <h4 class=\"text-center mb-4\">Commentaires</h4>
                            <ul class=\"list-unstyled\">
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Bob</h5>
                                                <p class=\"card-text\">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel
                                                    metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra
                                                    turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Bob</h5>
                                                <p class=\"card-text\">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel
                                                    metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra
                                                    turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media mb-3\">
                                    <img src=\"https://via.placeholder.com/65\" class=\"mr-3 rounded-circle\" alt=\"...\">
                                    <div class=\"media-body \">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"mt-0 mb-1 card-title\">Bob</h5>
                                                <p class=\"card-text\">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel
                                                    metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra
                                                    turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "home/trick_template.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/trick_template.html.twig");
    }
}
