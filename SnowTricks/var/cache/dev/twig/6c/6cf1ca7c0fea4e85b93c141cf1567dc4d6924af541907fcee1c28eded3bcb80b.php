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

/* home/add.html.twig */
class __TwigTemplate_4056ae87f11b30d9a8cbe52bb1e55b8642880daa0c0a389634dbf8a60f95b99d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/add.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/add.html.twig"));

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
        echo "
    <section class=\"bg-light\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"card\">
                <div class=\"row \">
                    <div class=\"col-md-12 mb-2\">
                        <header class=\"masthead card-img-top\"
                                style=\" background-image: url('https://via.placeholder.com/550');\">
                            <div class=\"intro-text\">
                                <div class=\"intro-lead-in\">Ajouter un trick</div>
                                <span>Fomulaire</span>
                            </div>
                        </header>
                    </div>
                </div>

                <div class=\"media-body \">
                    <div class=\"card-body\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", []), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "content", []), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "trickCategory", []), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "pictureDefault", []), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "pictures", []), 'label');
        echo "
                                <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                    <div class=\"row\">
                                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "pictures", []), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 58
            echo "                                            <div class=\"col-md-3 col-sm-5 mb-3\">
                                                <div class=\"card\">
                                                    <img class=\"card-img-top\"
                                                         src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "name", []))), "html", null, true);
            echo "\"
                                                         alt=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "alt", []), "html", null, true);
            echo "\">
                                                    <div class=\"card-body\">
                                                        <div class=\"form-check\">
                                                            <input class=\"form-check-input\" type=\"checkbox\"
                                                                   id=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo "\"
                                                                   name=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "pictures", []), "vars", []), "full_name", []), "html", null, true);
            echo "[]\"
                                                                   value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["choice"], "value", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "pictures", []), "vars", []), "data", [])), "html", null, true);
            echo ">
                                                            <label class=\"form-check-label\"
                                                                   for=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "alt", []), "html", null, true);
            echo "</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                    </div>
                                </div>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "pictures", []), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 81
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "pictures", []), "setRendered", [], "method");
        // line 82
        echo "                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "videos", []), 'label');
        echo "
                                <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                    <div class=\"row\">
                                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "videos", []), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 88
            echo "                                            <div class=\"col-md-3 col-sm-5 mb-3\">
                                                <div class=\"card\">
                                                    ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "platform", []) == false)) {
                // line 91
                echo "                                                        <iframe width=\"auto\" height=\"auto\"
                                                                src=\"https://www.youtube.com/embed/";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "name", []), "html", null, true);
                echo "\"
                                                                frameborder=\"0\"
                                                                allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                                                allowfullscreen></iframe>
                                                    ";
            } else {
                // line 97
                echo "                                                        <iframe frameborder=\"0\" width=\"auto\" height=\"auto\"
                                                                src=\"https://www.dailymotion.com/embed/video/";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "name", []), "html", null, true);
                echo "\"
                                                                allowfullscreen allow=\"autoplay\"></iframe>
                                                    ";
            }
            // line 101
            echo "                                                    <div class=\"card-body\">
                                                        <div class=\"form-check\">
                                                            <input class=\"form-check-input\" type=\"checkbox\"
                                                                   id=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo "\"
                                                                   name=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "videos", []), "vars", []), "full_name", []), "html", null, true);
            echo "[]\"
                                                                   value=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["choice"], "value", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "videos", []), "vars", []), "data", [])), "html", null, true);
            echo ">
                                                            <label class=\"form-check-label\"
                                                                   for=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "data", []), "name", []), "html", null, true);
            echo "</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                    </div>
                                </div>
                                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "videos", []), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 119
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "videos", []), "setRendered", [], "method");
        // line 120
        echo "                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-outline-success float-right mb-3\">Créer</button>
                        </div>
                        ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        echo "
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
        return "home/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 123,  324 => 120,  322 => 119,  316 => 116,  312 => 114,  296 => 108,  289 => 106,  285 => 105,  281 => 104,  276 => 101,  270 => 98,  267 => 97,  259 => 92,  256 => 91,  254 => 90,  250 => 88,  246 => 87,  240 => 84,  236 => 82,  234 => 81,  228 => 78,  224 => 76,  208 => 70,  201 => 68,  197 => 67,  193 => 66,  186 => 62,  182 => 61,  177 => 58,  173 => 57,  167 => 54,  158 => 48,  150 => 43,  142 => 38,  134 => 33,  130 => 32,  108 => 12,  99 => 11,  85 => 5,  76 => 4,  58 => 3,  27 => 1,);
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
                <div class=\"row \">
                    <div class=\"col-md-12 mb-2\">
                        <header class=\"masthead card-img-top\"
                                style=\" background-image: url('https://via.placeholder.com/550');\">
                            <div class=\"intro-text\">
                                <div class=\"intro-lead-in\">Ajouter un trick</div>
                                <span>Fomulaire</span>
                            </div>
                        </header>
                    </div>
                </div>

                <div class=\"media-body \">
                    <div class=\"card-body\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                {{ form_start(form) }}
                                {{ form_row(form.name) }}
                            </div>
                        </div>
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                {{ form_row(form.content) }}
                            </div>
                        </div>
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                {{ form_row(form.trickCategory) }}
                            </div>
                        </div>
                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.pictureDefault) }}
                            </div>
                        </div>

                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                {{ form_label(form.pictures) }}
                                <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                    <div class=\"row\">
                                        {% for choice in form.pictures.vars.choices %}
                                            <div class=\"col-md-3 col-sm-5 mb-3\">
                                                <div class=\"card\">
                                                    <img class=\"card-img-top\"
                                                         src=\"{{ asset('uploads/pictures/'~choice.data.name) }}\"
                                                         alt=\"{{ choice.data.alt }}\">
                                                    <div class=\"card-body\">
                                                        <div class=\"form-check\">
                                                            <input class=\"form-check-input\" type=\"checkbox\"
                                                                   id=\"{{ choice.value }}\"
                                                                   name=\"{{ form.pictures.vars.full_name }}[]\"
                                                                   value=\"{{ choice.value }}\" {{ choice.value == form.pictures.vars.data }}>
                                                            <label class=\"form-check-label\"
                                                                   for=\"{{ choice.value }}\">{{ choice.value }} : {{ choice.data.alt }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                {{ form_errors(form.pictures) }}
                            </div>
                        </div>
                        {% do form.pictures.setRendered() %}
                        <div class=\"card-text mb-3\">
                            <div class=\"form-group\">
                                {{ form_label(form.videos) }}
                                <div class=\"container mt-3\" style=\"height:400pt;overflow:auto\">
                                    <div class=\"row\">
                                        {% for choice in form.videos.vars.choices %}
                                            <div class=\"col-md-3 col-sm-5 mb-3\">
                                                <div class=\"card\">
                                                    {% if choice.data.platform == false %}
                                                        <iframe width=\"auto\" height=\"auto\"
                                                                src=\"https://www.youtube.com/embed/{{ choice.data.name }}\"
                                                                frameborder=\"0\"
                                                                allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                                                allowfullscreen></iframe>
                                                    {% else %}
                                                        <iframe frameborder=\"0\" width=\"auto\" height=\"auto\"
                                                                src=\"https://www.dailymotion.com/embed/video/{{ choice.data.name }}\"
                                                                allowfullscreen allow=\"autoplay\"></iframe>
                                                    {% endif %}
                                                    <div class=\"card-body\">
                                                        <div class=\"form-check\">
                                                            <input class=\"form-check-input\" type=\"checkbox\"
                                                                   id=\"{{ choice.value }}\"
                                                                   name=\"{{ form.videos.vars.full_name }}[]\"
                                                                   value=\"{{ choice.value }}\" {{ choice.value == form.videos.vars.data }}>
                                                            <label class=\"form-check-label\"
                                                                   for=\"{{ choice.value }}\">{{ choice.value }} : {{ choice.data.name }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                {{ form_errors(form.videos) }}
                            </div>
                        </div>
                        {% do form.videos.setRendered() %}
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-outline-success float-right mb-3\">Créer</button>
                        </div>
                        {{ form_end(form) }}
                    </div>

                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "home/add.html.twig", "/Users/julien/Desktop/symfony/snow_tricks/templates/home/add.html.twig");
    }
}
