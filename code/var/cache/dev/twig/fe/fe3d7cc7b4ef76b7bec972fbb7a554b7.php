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

/* _partials/article-card.html.twig */
class __TwigTemplate_d95623ceb17f9b339ee8aa9781ce55d2 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/article-card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/article-card.html.twig"));

        // line 1
        echo "
<div class=\"card shadow-sm\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"card-img-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h5>
        <p class=\"card-text\">
            ";
        // line 7
        $context["cutoff"] = 80;
        // line 8
        echo "            ";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8)) > (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 8, $this->source); })()))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8), 0, (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 8, $this->source); })())) . "...")) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8))), "html", null, true);
        echo "
        </p>

        <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"btn-group\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">View</a>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
            </div>
            
            <small class=\"text-muted\">
                ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "timeToRead", [], "any", false, false, false, 18), "html", null, true);
        echo " min
            </small>
        </div>
        <div class=\"pt-2\">
            <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "updatedAt", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/article-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  79 => 18,  72 => 14,  68 => 13,  59 => 8,  57 => 7,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card shadow-sm\">
    <img src=\"{{ article.image }}\" class=\"card-img-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">{{ article.title }}</h5>
        <p class=\"card-text\">
            {% set cutoff = 80 %}
            {{ article.text|length > cutoff ? article.text|slice(0, cutoff) ~ '...' : article.text  }}
        </p>

        <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"btn-group\">
                <a href=\"{{ path('article_view', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">View</a>
                <a href=\"{{ path('article_update', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
            </div>
            
            <small class=\"text-muted\">
                {{ article.timeToRead }} min
            </small>
        </div>
        <div class=\"pt-2\">
            <p>{{ article.updatedAt }}</p>
        </div>
    </div>
</div>
", "_partials/article-card.html.twig", "/code/templates/_partials/article-card.html.twig");
    }
}
