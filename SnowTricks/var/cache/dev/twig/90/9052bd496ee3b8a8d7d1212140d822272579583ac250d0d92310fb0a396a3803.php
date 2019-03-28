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

/* base.html.twig */
class __TwigTemplate_58ec710bcb0fc267842ce84322cfd56b5847fafd88428f20b1a52fb3c1678acf extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body id=\"page-top\">

";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 463
        $this->displayBlock('javascripts', $context, $blocks);
        // line 476
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Snow Tricks";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom fonts for this template -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
              type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet'
              type='text/css'>

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/agency.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        // line 91
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 103
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 421
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 34
        echo "        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Snow tricks</a>

                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 40
            echo "                    <div class=\"container\">
                        <div class=\"alert alert-";
            // line 41
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " mt-3\">
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 43
                echo "                                <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_trick");
        echo "\">Tricks</a>
                        </li>
                        ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 65
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Dashboard</a>
                        </li>
                        ";
        }
        // line 69
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [])) {
            // line 70
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">S'inscrire</a>
                        </li>
                        ";
        }
        // line 74
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [])) {
            // line 75
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
                        </li>
                        ";
        }
        // line 79
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [])) {
            // line 80
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Se deconnecter</a>
                        </li>
                        ";
        }
        // line 84
        echo "                    </ul>
                </div>
            </div>
        </nav>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 92
        echo "        <!-- Header -->
        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"intro-text\">
                    <div class=\"intro-lead-in\">Welcome To Our Studio!</div>
                    <div class=\"intro-heading text-uppercase\">It's Nice To Meet You</div>
                    <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
                </div>
            </div>
        </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 104
        echo "        <!-- Services -->
        <section id=\"services\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">Services</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
          </span>
                        <h4 class=\"service-heading\">E-Commerce</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
          </span>
                        <h4 class=\"service-heading\">Responsive Design</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
          </span>
                        <h4 class=\"service-heading\">Web Security</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- About -->
        <section id=\"about\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">About</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/1.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>2009-2011</h4>
                                        <h4 class=\"subheading\">Our Humble Beginnings</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/2.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>March 2011</h4>
                                        <h4 class=\"subheading\">An Agency is Born</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/3.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>December 2012</h4>
                                        <h4 class=\"subheading\">Transition to Full Service</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/4.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>July 2014</h4>
                                        <h4 class=\"subheading\">Phase Two Expansion</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-image\">
                                    <h4>Be Part
                                        <br>Of Our
                                        <br>Story!</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class=\"bg-light\" id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"img/team/1.jpg\" alt=\"\">
                            <h4>Kay Garland</h4>
                            <p class=\"text-muted\">Lead Designer</p>
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"img/team/2.jpg\" alt=\"\">
                            <h4>Larry Parker</h4>
                            <p class=\"text-muted\">Lead Marketer</p>
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"img/team/3.jpg\" alt=\"\">
                            <h4>Diana Pertersen</h4>
                            <p class=\"text-muted\">Lead Developer</p>
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto text-center\">
                        <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                            laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <section class=\"py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/envato.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/designmodo.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/themeforest.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/creative-market.jpg\" alt=\"\">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id=\"contact\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\"
                                               required=\"required\"
                                               data-validation-required-message=\"Please enter your name.\">
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\"
                                               required=\"required\"
                                               data-validation-required-message=\"Please enter your email address.\">
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\"
                                               required=\"required\"
                                               data-validation-required-message=\"Please enter your phone number.\">
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\"
                                              required=\"required\"
                                              data-validation-required-message=\"Please enter a message.\"></textarea>
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                </div>
                                <div class=\"clearfix\"></div>
                                <div class=\"col-lg-12 text-center\">
                                    <div id=\"success\"></div>
                                    <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\"
                                            type=\"submit\">Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 421
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 422
        echo "        <!-- Footer -->
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"list-inline social-buttons\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"fab fa-linkedin-in\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"list-inline quicklinks\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Privacy Policy</a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 463
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 464
        echo "    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Contact form JavaScript -->
    <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/agency.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  769 => 474,  763 => 471,  758 => 469,  752 => 466,  748 => 465,  745 => 464,  736 => 463,  687 => 422,  678 => 421,  352 => 104,  343 => 103,  323 => 92,  314 => 91,  298 => 84,  292 => 81,  289 => 80,  286 => 79,  280 => 76,  277 => 75,  274 => 74,  268 => 71,  265 => 70,  262 => 69,  256 => 66,  253 => 65,  251 => 64,  246 => 62,  240 => 59,  227 => 48,  219 => 45,  210 => 43,  206 => 42,  202 => 41,  199 => 40,  195 => 39,  188 => 34,  179 => 33,  168 => 421,  165 => 103,  162 => 91,  159 => 33,  150 => 32,  138 => 26,  126 => 17,  120 => 14,  117 => 13,  108 => 12,  90 => 11,  77 => 476,  75 => 463,  73 => 32,  67 => 28,  65 => 12,  61 => 11,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Snow Tricks{% endblock %}</title>
    {% block stylesheets %}
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom fonts for this template -->
        <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
              type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet'
              type='text/css'>

        <!-- Custom styles for this template -->
        <link href=\"{{ asset('css/agency.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body id=\"page-top\">

{% block body %}
    {% block nav %}
        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Snow tricks</a>

                {% for label, messages in app.flashes %}
                    <div class=\"container\">
                        <div class=\"alert alert-{{ label }} mt-3\">
                            {% for message in messages %}
                                <p>{{ message }}</p>
                            {% endfor %}
                        </div>
                    </div>
                {% endfor %}

                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('home') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('add_trick') }}\">Tricks</a>
                        </li>
                        {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('account') }}\">Dashboard</a>
                        </li>
                        {% endif %}
                        {% if not app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('registration') }}\">S'inscrire</a>
                        </li>
                        {% endif %}
                        {% if not app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('app_login') }}\">Se connecter</a>
                        </li>
                        {% endif %}
                        {% if app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('logout') }}\">Se deconnecter</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>


    {% endblock %}
    {% block header %}
        <!-- Header -->
        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"intro-text\">
                    <div class=\"intro-lead-in\">Welcome To Our Studio!</div>
                    <div class=\"intro-heading text-uppercase\">It's Nice To Meet You</div>
                    <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
                </div>
            </div>
        </header>
    {% endblock %}
    {% block content %}
        <!-- Services -->
        <section id=\"services\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">Services</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
          </span>
                        <h4 class=\"service-heading\">E-Commerce</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
          </span>
                        <h4 class=\"service-heading\">Responsive Design</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
          </span>
                        <h4 class=\"service-heading\">Web Security</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- About -->
        <section id=\"about\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">About</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/1.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>2009-2011</h4>
                                        <h4 class=\"subheading\">Our Humble Beginnings</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/2.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>March 2011</h4>
                                        <h4 class=\"subheading\">An Agency is Born</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/3.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>December 2012</h4>
                                        <h4 class=\"subheading\">Transition to Full Service</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-image\">
                                    <img class=\"rounded-circle img-fluid\" src=\"img/about/4.jpg\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>July 2014</h4>
                                        <h4 class=\"subheading\">Phase Two Expansion</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Sunt
                                            ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                            consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-image\">
                                    <h4>Be Part
                                        <br>Of Our
                                        <br>Story!</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class=\"bg-light\" id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"img/team/1.jpg\" alt=\"\">
                            <h4>Kay Garland</h4>
                            <p class=\"text-muted\">Lead Designer</p>
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"img/team/2.jpg\" alt=\"\">
                            <h4>Larry Parker</h4>
                            <p class=\"text-muted\">Lead Marketer</p>
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"img/team/3.jpg\" alt=\"\">
                            <h4>Diana Pertersen</h4>
                            <p class=\"text-muted\">Lead Developer</p>
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto text-center\">
                        <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                            laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <section class=\"py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/envato.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/designmodo.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/themeforest.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/creative-market.jpg\" alt=\"\">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id=\"contact\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                        <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\"
                                               required=\"required\"
                                               data-validation-required-message=\"Please enter your name.\">
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\"
                                               required=\"required\"
                                               data-validation-required-message=\"Please enter your email address.\">
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\"
                                               required=\"required\"
                                               data-validation-required-message=\"Please enter your phone number.\">
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\"
                                              required=\"required\"
                                              data-validation-required-message=\"Please enter a message.\"></textarea>
                                        <p class=\"help-block text-danger\"></p>
                                    </div>
                                </div>
                                <div class=\"clearfix\"></div>
                                <div class=\"col-lg-12 text-center\">
                                    <div id=\"success\"></div>
                                    <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\"
                                            type=\"submit\">Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    {% endblock %}
    {% block footer %}
        <!-- Footer -->
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"list-inline social-buttons\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"fab fa-linkedin-in\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"list-inline quicklinks\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Privacy Policy</a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    {% endblock %}
{% endblock %}
{% block javascripts %}
    <!-- Bootstrap core JavaScript -->
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
    <!-- Contact form JavaScript -->
    <script src=\"{{ asset('js/jqBootstrapValidation.js') }}\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"{{ asset('js/agency.min.js') }}\"></script>
{% endblock %}
</body>

</html>
", "base.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/base.html.twig");
    }
}
