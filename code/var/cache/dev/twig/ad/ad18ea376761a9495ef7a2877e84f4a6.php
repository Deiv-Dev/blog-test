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

/* pages/article-update.html.twig */
class __TwigTemplate_df1172edfd94d3ce61a4512836cb5aa7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article-update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article-update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/article-update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "  <main>
    <div class=\"container py-5\">
    <img class=\"img-fluid\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "image", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
          <h1 class=\"text-center mb-4\">Update Article</h1>


";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "session", [], "any", false, false, false, 12), "flashbag", [], "any", false, false, false, 12), "get", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "flashbag", [], "any", false, false, false, 16), "get", [0 => "error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "


          ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
          <div class=\"form-group p-1\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'label', ["label" => "Title"]);
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "id" => "title"]]);
        echo "          
            <div class=\"invalid-feedback d-block\">
              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), 'errors');
        echo "
            </div>
          </div>
          <div class=\"form-group p-1\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31), 'label', ["label" => "Image URL"]);
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "id" => "image"]]);
        echo "
            <div class=\"invalid-feedback d-block\">
                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), 'errors');
        echo "
            </div>
          </div>
          <div class=\"form-group p-1\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "text", [], "any", false, false, false, 38), 'label', ["label" => "Text"]);
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "text", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "id" => "text"]]);
        echo "
            <div class=\"invalid-feedback d-block\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "text", [], "any", false, false, false, 41), 'errors');
        echo "
            </div>
          </div>
          <button type=\"submit\" class=\"btn btn-primary\" onclick=\"showPopup()\">Update</button>  
          <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Back</a>
          ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/article-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  168 => 45,  161 => 41,  156 => 39,  152 => 38,  145 => 34,  140 => 32,  136 => 31,  129 => 27,  124 => 25,  120 => 24,  115 => 22,  110 => 19,  101 => 17,  97 => 16,  94 => 15,  85 => 13,  81 => 12,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
  <main>
    <div class=\"container py-5\">
    <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\">
      <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
          <h1 class=\"text-center mb-4\">Update Article</h1>


{% for message in app.session.flashbag.get('success') %}
    <div class=\"alert alert-success\">{{ message }}</div>
{% endfor %}

{% for message in app.session.flashbag.get('error') %}
    <div class=\"alert alert-danger\">{{ message }}</div>
{% endfor %}



          {{ form_start(form) }}
          <div class=\"form-group p-1\">
            {{ form_label(form.title, 'Title') }}
            {{ form_widget(form.title, {'attr': {'class': 'form-control', 'id': 'title'}}) }}          
            <div class=\"invalid-feedback d-block\">
              {{ form_errors(form.title) }}
            </div>
          </div>
          <div class=\"form-group p-1\">
            {{ form_label(form.image, 'Image URL') }}
            {{ form_widget(form.image, {'attr': {'class': 'form-control', 'id': 'image'}}) }}
            <div class=\"invalid-feedback d-block\">
                  {{ form_errors(form.title) }}
            </div>
          </div>
          <div class=\"form-group p-1\">
            {{ form_label(form.text, 'Text') }}
            {{ form_widget(form.text, {'attr': {'class': 'form-control', 'id': 'text'}}) }}
            <div class=\"invalid-feedback d-block\">
              {{ form_errors(form.text) }}
            </div>
          </div>
          <button type=\"submit\" class=\"btn btn-primary\" onclick=\"showPopup()\">Update</button>  
          <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary\">Back</a>
          {{ form_end(form) }}
        </div>
      </div>
    </div>
  </main>
{% endblock %}
", "pages/article-update.html.twig", "/code/templates/pages/article-update.html.twig");
    }
}
