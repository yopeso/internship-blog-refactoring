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

/* home/load_Comment.html.twig */
class __TwigTemplate_5d9874862a86fc299fe83f0b3581b38b0bc7b05e244c75f0bbc9dc84f850f715 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/load_Comment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/load_Comment.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    <li class=\"media mb-3\">
        ";
            // line 3
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", []), "profilePicture", []), "pathPicture", [])) {
                // line 4
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", []), "profilePicture", []), "pathPicture", []))), "html", null, true);
                echo "\"
                 class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                 alt=\"photo de profile\">
        ";
            } else {
                // line 8
                echo "            <img src=\"http://placehold.it/65X65\"
                 class=\"mr-3 rounded-circle embed-responsive\" style=\"max-width: 65px;\"
                 alt=\"photo de profile default\">
        ";
            }
            // line 12
            echo "        <div class=\"media-body \">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
            // line 15
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE_COMMENT", $context["comment"])) {
                // line 16
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [])]), "html", null, true);
                echo "\"
                           class=\"float-right m-1 mb-2\"><i class=\"fas fa-trash-alt\"></i></a>
                    ";
            }
            // line 19
            echo "                    <h5 class=\"mt-0 mb-1 card-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", []), "pseudo", []), "html", null, true);
            echo "</h5>

                    <p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", []), "html", null, true);
            echo "</p>

                    <span class=\"badge badge-secondary float-right\">le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dateCreation", []), "d-m-Y"), "html", null, true);
            echo "</span>
                    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "dateMaj", [])) {
                // line 25
                echo "                        <span class=\"badge badge-success float-right\">Editier le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dateMaj", []), "d-m-Y"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 27
            echo "                </div>
            </div>
        </div>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/load_Comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  95 => 25,  93 => 24,  89 => 23,  84 => 21,  78 => 19,  71 => 16,  69 => 15,  64 => 12,  58 => 8,  50 => 4,  48 => 3,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for comment in comments %}
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
{% endfor %}", "home/load_Comment.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/load_Comment.html.twig");
    }
}
