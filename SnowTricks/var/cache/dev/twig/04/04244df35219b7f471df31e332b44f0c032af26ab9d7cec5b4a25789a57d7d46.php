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

/* home/add_picture.html.twig */
class __TwigTemplate_524189f68bd56d06527f3ab93a57b7ade803dce705fd4f939baa981ed941d249 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/add_picture.html.twig", 1);
        $_trait_0 = $this->loadTemplate("/account/_layout_menu.html.twig", "home/add_picture.html.twig", 2);
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
                'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/add_picture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/add_picture.html.twig"));

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

        echo "Snow Tricks ";
        
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
        echo "    <!-- Header -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "                <div class=\"col-md-9  col-sm-12 mb-5\" style=\"margin: auto;\">
                    <div class=\"card\">
                        <div class=\"media-body \">
                            <div class=\"card-body\">
                                <div class=\"card-text\">
                                    <h3 class=\"mb-4 mt-2\">Bibliothèque de photos</h3>
                                    <div class=\"form-group\">
                                        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "alt", []), 'row');
        echo "
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "file", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-success float-right mb-3\">Sauvegarder
                                    </button>
                                </div>
                                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"card\">
                <div class=\"media-body \">
                    <div class=\"card-body\">
                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                <h4>Vos Images</h4>
                                <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                    <div class=\"row\">
                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 52
            echo "                                            <div class=\"col-md-3 col-sm-5 mb-3 pictureparent\"
                                                 data-idpicture=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "id", []), "html", null, true);
            echo "\"
                                                 data-link=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_picture", ["id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [])]), "html", null, true);
            echo "\">
                                                <div class=\"card\">
                                                    <img class=\"card-img-top\"
                                                         src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "name", []))), "html", null, true);
            echo "\"
                                                         alt=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "alt", []), "html", null, true);
            echo "\">
                                                    <div class=\"card-body\">
                                                        <p>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "alt", []), "html", null, true);
            echo "</p>

                                                        <button class=\"btn btn-danger suppr-picture float-right\">
                                                            <i class=\"fas fa-trash-alt\"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                        <div class=\"modal\" tabindex=\"-1\" role=\"dialog\">
                                            <div class=\"modal-dialog\" style=\"margin-top: 100px; display: none;\"
                                                 role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">Comfirmer votre action</h5>
                                                        <button type=\"button\" class=\"close close-spe\"
                                                                data-dismiss=\"modal\"
                                                                aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <p>Voulez-vous supprimer votre image id:
                                                            <spam class=\"info-data\"></spam>
                                                        </p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <a class=\"link-delete\" href=\"\">
                                                            <button type=\"button\" class=\"btn btn-primary\">
                                                                supprimer
                                                            </button>
                                                        </a>
                                                        <button type=\"button\" class=\"btn btn-secondary close-spe\"
                                                                data-dismiss=\"modal\">Annuler
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

    // line 14
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo "                    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            //Comfirmation de supprétion(Boutton 'OUI' ou 'NON' )
            \$('.suppr-picture').click(function () {

                var idData = \$(this).parents('.pictureparent').data('idpicture');
                \$('.info-data').text(idData);

                var idLink = \$(this).parents('.pictureparent').data('link');

                \$('.link-delete').attr('href', idLink);

                \$('.modal').fadeIn(500, function () {

                    \$('.modal-dialog').slideDown(300);

                });
                // Fermeture
                \$('.close-spe').click(function () {

                    \$('.modal').fadeOut(500);
                    \$('.modal-dialog').hide();

                });
            })
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/add_picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 113,  290 => 112,  277 => 15,  268 => 14,  218 => 70,  202 => 60,  197 => 58,  193 => 57,  187 => 54,  183 => 53,  180 => 52,  176 => 51,  155 => 33,  145 => 26,  141 => 25,  137 => 24,  128 => 17,  126 => 14,  120 => 10,  111 => 9,  100 => 6,  91 => 5,  73 => 4,  52 => 1,  30 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% use '/account/_layout_menu.html.twig' %}

{% block title %}Snow Tricks {% endblock %}
{% block header %}
    <!-- Header -->
{% endblock %}

{% block content %}

    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                {% block menu %}
                    {{ parent() }}
                {% endblock %}
                <div class=\"col-md-9  col-sm-12 mb-5\" style=\"margin: auto;\">
                    <div class=\"card\">
                        <div class=\"media-body \">
                            <div class=\"card-body\">
                                <div class=\"card-text\">
                                    <h3 class=\"mb-4 mt-2\">Bibliothèque de photos</h3>
                                    <div class=\"form-group\">
                                        {{ form_start(form) }}
                                        {{ form_row(form.alt) }}
                                        {{ form_row(form.file) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-success float-right mb-3\">Sauvegarder
                                    </button>
                                </div>
                                {{ form_end(form) }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"card\">
                <div class=\"media-body \">
                    <div class=\"card-body\">
                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                <h4>Vos Images</h4>
                                <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                    <div class=\"row\">
                                        {% for picture in pictures %}
                                            <div class=\"col-md-3 col-sm-5 mb-3 pictureparent\"
                                                 data-idpicture=\"{{ picture.id }}\"
                                                 data-link=\"{{ path('delete_picture', {'id': picture.id}) }}\">
                                                <div class=\"card\">
                                                    <img class=\"card-img-top\"
                                                         src=\"{{ asset('uploads/pictures/'~picture.name) }}\"
                                                         alt=\"{{ picture.alt }}\">
                                                    <div class=\"card-body\">
                                                        <p>{{ picture.alt }}</p>

                                                        <button class=\"btn btn-danger suppr-picture float-right\">
                                                            <i class=\"fas fa-trash-alt\"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        {% endfor %}
                                        <div class=\"modal\" tabindex=\"-1\" role=\"dialog\">
                                            <div class=\"modal-dialog\" style=\"margin-top: 100px; display: none;\"
                                                 role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">Comfirmer votre action</h5>
                                                        <button type=\"button\" class=\"close close-spe\"
                                                                data-dismiss=\"modal\"
                                                                aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <p>Voulez-vous supprimer votre image id:
                                                            <spam class=\"info-data\"></spam>
                                                        </p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <a class=\"link-delete\" href=\"\">
                                                            <button type=\"button\" class=\"btn btn-primary\">
                                                                supprimer
                                                            </button>
                                                        </a>
                                                        <button type=\"button\" class=\"btn btn-secondary close-spe\"
                                                                data-dismiss=\"modal\">Annuler
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            //Comfirmation de supprétion(Boutton 'OUI' ou 'NON' )
            \$('.suppr-picture').click(function () {

                var idData = \$(this).parents('.pictureparent').data('idpicture');
                \$('.info-data').text(idData);

                var idLink = \$(this).parents('.pictureparent').data('link');

                \$('.link-delete').attr('href', idLink);

                \$('.modal').fadeIn(500, function () {

                    \$('.modal-dialog').slideDown(300);

                });
                // Fermeture
                \$('.close-spe').click(function () {

                    \$('.modal').fadeOut(500);
                    \$('.modal-dialog').hide();

                });
            })
        });
    </script>
{% endblock %}", "home/add_picture.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/add_picture.html.twig");
    }
}
