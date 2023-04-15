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

/* pages/update-view.html.twig */
class __TwigTemplate_1a2a24cfab15b82da4f6d37ecf6f710e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/update-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/update-view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "  <main>
    <div class=\"container py-5\">
      <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
          <h1 class=\"text-center mb-4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
          <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"form-group p-1\">
              <label for=\"title\">Title</label>
              <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group p-1\">
              <label for=\"image\">Image URL</label>
              <input type=\"text\" class=\"form-control\" id=\"image\" name=\"image\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
            </div>
                <div class=\"form-group p-1\">
                <label for=\"text\">Text</label>
                <textarea class=\"form-control\" id=\"text\" name=\"text\" rows=\"10\" cols=\"50\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20), "html", null, true);
        echo "</textarea>
                </div>
            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
          </form>
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/update-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  82 => 16,  75 => 12,  69 => 9,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
  <main>
    <div class=\"container py-5\">
      <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
          <h1 class=\"text-center mb-4\">{{ article.title }}</h1>
          <form action=\"{{ path('article_update', {'id': article.id}) }}\" method=\"POST\">
            <div class=\"form-group p-1\">
              <label for=\"title\">Title</label>
              <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"{{ article.title }}\">
            </div>
            <div class=\"form-group p-1\">
              <label for=\"image\">Image URL</label>
              <input type=\"text\" class=\"form-control\" id=\"image\" name=\"image\" value=\"{{ article.image }}\">
            </div>
                <div class=\"form-group p-1\">
                <label for=\"text\">Text</label>
                <textarea class=\"form-control\" id=\"text\" name=\"text\" rows=\"10\" cols=\"50\">{{ article.text }}</textarea>
                </div>
            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
          </form>
        </div>
      </div>
    </div>
  </main>
{% endblock %}
", "pages/update-view.html.twig", "/code/templates/pages/update-view.html.twig");
    }
}
