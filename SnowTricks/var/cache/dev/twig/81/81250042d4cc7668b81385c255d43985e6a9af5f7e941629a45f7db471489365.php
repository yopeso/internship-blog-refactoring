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

/* home/load_more.html.twig */
class __TwigTemplate_b13a19c00019870e6439b67ff49744181ca5d0f55fb5eaf9a10a745cc3924228 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/load_more.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/load_more.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 2
            echo "    <div class=\"col-md-3 col-sm-6 portfolio-item\">
        <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
            echo "\">
            <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                    <i class=\"fas fa-plus fa-3x\"></i>
                </div>
            </div>
            <img class=\"img-fluid\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trick"], "pictureDefault", []), "name", []))), "html", null, true);
            echo "\" alt=\"\">
        </a>
        <div class=\"portfolio-caption\">
            <h6>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", []), "html", null, true);
            echo "
                ";
            // line 13
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", $context["trick"])) {
                // line 14
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
                echo "\">
                        <i class=\"fas fa-pencil-alt\"></i>
                    </a>
                ";
            }
            // line 18
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", $context["trick"])) {
                // line 19
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [])]), "html", null, true);
                echo "\">
                        <i class=\"fas fa-trash-alt\"></i>
                    </a>
                ";
            }
            // line 23
            echo "            </h6>

        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/load_more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  80 => 19,  77 => 18,  69 => 14,  67 => 13,  63 => 12,  57 => 9,  48 => 3,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for trick in tricks %}
    <div class=\"col-md-3 col-sm-6 portfolio-item\">
        <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"{{ path('show', {'id': trick.id}) }}\">
            <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                    <i class=\"fas fa-plus fa-3x\"></i>
                </div>
            </div>
            <img class=\"img-fluid\" src=\"{{ asset('uploads/pictures/'~ trick.pictureDefault.name) }}\" alt=\"\">
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
", "home/load_more.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/load_more.html.twig");
    }
}
