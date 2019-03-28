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

/* /account/_layout_menu.html.twig */
class __TwigTemplate_8d8f121daf52604ad72c19a9ccd94195342db83e93c80febad9f8f1c12de50e3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/account/_layout_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/account/_layout_menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "    <div class=\"col-md-3 col-sm-12 mb-3\">
        <div class=\"list-group\">
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "account")) ? ("active") : (""));
        echo "\">
                Dashboard</a>
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_password");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "rest_password")) ? ("active") : (""));
        echo "\">
                Mot de passe</a>
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", []), "profilePicture", []), "id", [])) {
            // line 11
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_picture_user");
            echo "\"
                   class=\"list-group-item list-group-item-action ";
            // line 12
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "edit_picture_user")) ? ("active") : (""));
            echo "\">
                    Photo profile</a>
            ";
        } else {
            // line 15
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_picture_user");
            echo "\"
                   class=\"list-group-item list-group-item-action ";
            // line 16
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "add_picture_user")) ? ("active") : (""));
            echo "\">
                    Photo profile</a>
            ";
        }
        // line 19
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_picture");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "add_picture")) ? ("active") : (""));
        echo "\">
                Gérer images</a>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_video");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 23
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "add_video")) ? ("active") : (""));
        echo "\">
                Gérer vidéos</a>
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_trick");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 26
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "add_trick")) ? ("active") : (""));
        echo "\">
                Ajouter trick</a>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", []), "email", [])]), "html", null, true);
        echo "\"
               class=\"list-group-item list-group-item-action list-group-item-danger\">
                Supprimer votre compte</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/account/_layout_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  134 => 28,  129 => 26,  125 => 25,  120 => 23,  116 => 22,  111 => 20,  106 => 19,  100 => 16,  95 => 15,  89 => 12,  84 => 11,  82 => 10,  77 => 8,  73 => 7,  68 => 5,  64 => 4,  60 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block menu %}
    <div class=\"col-md-3 col-sm-12 mb-3\">
        <div class=\"list-group\">
            <a href=\"{{ path('account') }}\"
               class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'account' ? 'active' }}\">
                Dashboard</a>
            <a href=\"{{ path('update_password') }}\"
               class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'rest_password' ? 'active' }}\">
                Mot de passe</a>
            {% if app.user.profilePicture.id %}
                <a href=\"{{ path('edit_picture_user' )}}\"
                   class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'edit_picture_user' ? 'active' }}\">
                    Photo profile</a>
            {% else %}
                <a href=\"{{ path('add_picture_user') }}\"
                   class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'add_picture_user' ? 'active' }}\">
                    Photo profile</a>
            {% endif %}
            <a href=\"{{ path('add_picture') }}\"
               class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'add_picture' ? 'active' }}\">
                Gérer images</a>
            <a href=\"{{ path('add_video') }}\"
               class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'add_video' ? 'active' }}\">
                Gérer vidéos</a>
            <a href=\"{{ path('add_trick') }}\"
               class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'add_trick' ? 'active' }}\">
                Ajouter trick</a>
            <a href=\"{{ path('delete_account', {'email': app.user.email}) }}\"
               class=\"list-group-item list-group-item-action list-group-item-danger\">
                Supprimer votre compte</a>
        </div>
    </div>
{% endblock %}", "/account/_layout_menu.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/account/_layout_menu.html.twig");
    }
}
