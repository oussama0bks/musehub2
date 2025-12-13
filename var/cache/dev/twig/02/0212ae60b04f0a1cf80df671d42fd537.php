<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* front/artwork_show.html.twig */
class __TwigTemplate_1c6a69c70cf92f47c6c6245175088f37 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/artwork_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/artwork_show.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " - MuseHub";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 9, $this->source); })()), "imageUrl", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 10, $this->source); })()), "imageUrl", [], "any", false, false, false, 10), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\" style=\"max-height: 600px; width: 100%; object-fit: contain;\">
            ";
        } else {
            // line 12
            yield "                <div class=\"bg-light d-flex align-items-center justify-content-center rounded shadow\" style=\"height: 400px;\">
                    <i class=\"fas fa-image fa-5x text-muted\"></i>
                </div>
            ";
        }
        // line 16
        yield "        </div>
        <div class=\"col-md-6\">
            <h1 class=\"display-4 mb-3\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "</h1>
            
            ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 20, $this->source); })()), "category", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                <span class=\"badge mb-3\" style=\"background: linear-gradient(135deg, #7f00ff 0%, #FFD0E6 100%); color: white; padding: 8px 15px; border-radius: 20px; font-size: 1rem;\">
                    ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 25
        yield "            
            ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                <div class=\"mb-4\">
                    <h3>Description</h3>
                    <p class=\"lead\">";
            // line 29
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true));
            yield "</p>
                </div>
            ";
        }
        // line 32
        yield "            
            <div class=\"mb-4\">
                ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                    <h2 class=\"text-primary mb-3\" style=\"color: #7f00ff !important;\">
                        <i class=\"fas fa-euro-sign me-2\"></i>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 2, ",", " "), "html", null, true);
            yield " €
                    </h2>
                ";
        } else {
            // line 39
            yield "                    <p class=\"text-muted\">Prix sur demande</p>
                ";
        }
        // line 41
        yield "            </div>
            
            <div class=\"d-flex gap-3 mb-4\">
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace");
        yield "\" class=\"btn btn-primary btn-lg\" style=\"background: linear-gradient(135deg, #7f00ff 0%, #FF9CB6 100%); border: none;\">
                    <i class=\"fas fa-shopping-cart me-2\"></i>Acheter maintenant
                </a>
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artworks");
        yield "\" class=\"btn btn-outline-secondary btn-lg\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour
                </a>
            </div>
            
            <div class=\"card mt-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Informations</h5>
                    <p class=\"card-text\">
                        <strong>Statut:</strong> 
                        <span class=\"badge bg-success\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57), "html", null, true);
        yield "</span>
                    </p>
                    ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 59, $this->source); })()), "artistUuid", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                        <p class=\"card-text\">
                            <strong>Artiste:</strong> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 61, $this->source); })()), "artistUuid", [], "any", false, false, false, 61), "html", null, true);
            yield "
                        </p>
                    ";
        }
        // line 64
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/artwork_show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  216 => 64,  210 => 61,  207 => 60,  205 => 59,  200 => 57,  187 => 47,  181 => 44,  176 => 41,  172 => 39,  166 => 36,  163 => 35,  161 => 34,  157 => 32,  151 => 29,  147 => 27,  145 => 26,  142 => 25,  136 => 22,  133 => 21,  131 => 20,  126 => 18,  122 => 16,  116 => 12,  108 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}{{ artwork.title }} - MuseHub{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            {% if artwork.imageUrl %}
                <img src=\"{{ artwork.imageUrl }}\" alt=\"{{ artwork.title }}\" class=\"img-fluid rounded shadow\" style=\"max-height: 600px; width: 100%; object-fit: contain;\">
            {% else %}
                <div class=\"bg-light d-flex align-items-center justify-content-center rounded shadow\" style=\"height: 400px;\">
                    <i class=\"fas fa-image fa-5x text-muted\"></i>
                </div>
            {% endif %}
        </div>
        <div class=\"col-md-6\">
            <h1 class=\"display-4 mb-3\">{{ artwork.title }}</h1>
            
            {% if artwork.category %}
                <span class=\"badge mb-3\" style=\"background: linear-gradient(135deg, #7f00ff 0%, #FFD0E6 100%); color: white; padding: 8px 15px; border-radius: 20px; font-size: 1rem;\">
                    {{ artwork.category.name }}
                </span>
            {% endif %}
            
            {% if artwork.description %}
                <div class=\"mb-4\">
                    <h3>Description</h3>
                    <p class=\"lead\">{{ artwork.description|nl2br }}</p>
                </div>
            {% endif %}
            
            <div class=\"mb-4\">
                {% if artwork.price %}
                    <h2 class=\"text-primary mb-3\" style=\"color: #7f00ff !important;\">
                        <i class=\"fas fa-euro-sign me-2\"></i>{{ artwork.price|number_format(2, ',', ' ') }} €
                    </h2>
                {% else %}
                    <p class=\"text-muted\">Prix sur demande</p>
                {% endif %}
            </div>
            
            <div class=\"d-flex gap-3 mb-4\">
                <a href=\"{{ path('marketplace') }}\" class=\"btn btn-primary btn-lg\" style=\"background: linear-gradient(135deg, #7f00ff 0%, #FF9CB6 100%); border: none;\">
                    <i class=\"fas fa-shopping-cart me-2\"></i>Acheter maintenant
                </a>
                <a href=\"{{ path('artworks') }}\" class=\"btn btn-outline-secondary btn-lg\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour
                </a>
            </div>
            
            <div class=\"card mt-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Informations</h5>
                    <p class=\"card-text\">
                        <strong>Statut:</strong> 
                        <span class=\"badge bg-success\">{{ artwork.status }}</span>
                    </p>
                    {% if artwork.artistUuid %}
                        <p class=\"card-text\">
                            <strong>Artiste:</strong> {{ artwork.artistUuid }}
                        </p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "front/artwork_show.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\front\\artwork_show.html.twig");
    }
}
