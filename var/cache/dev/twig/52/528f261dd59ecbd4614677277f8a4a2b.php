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

/* community/index.html.twig */
class __TwigTemplate_81a72594407f494e7fa63aba2c380bff extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Communities - MuseHub";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h2><i class=\"fas fa-users me-2 text-primary\"></i> Communities</h2>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community_new");
        yield "\" class=\"btn btn-primary px-4 py-2 fw-semibold shadow-sm\" style=\"border-radius: 25px;\">
            <i class=\"fas fa-plus me-2\"></i> Create Community
        </a>
    </div>

    ";
        // line 14
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["communities"]) || array_key_exists("communities", $context) ? $context["communities"] : (function () { throw new RuntimeError('Variable "communities" does not exist.', 14, $this->source); })())) > 0)) {
            // line 15
            yield "        <div class=\"row g-4\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["communities"]) || array_key_exists("communities", $context) ? $context["communities"] : (function () { throw new RuntimeError('Variable "communities" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["community"]) {
                // line 17
                yield "                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card shadow-sm rounded-4 overflow-hidden community-card\" style=\"cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease;\">
                        <div class=\"position-relative overflow-hidden\" style=\"height: 220px;\">
                            ";
                // line 20
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["community"], "imageUrl", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["community"], "imageUrl", [], "any", false, false, false, 21), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["community"], "name", [], "any", false, false, false, 21), "html", null, true);
                    yield "\" class=\"w-100 h-100 object-fit-cover\">
                            ";
                } else {
                    // line 23
                    yield "                                <div class=\"bg-secondary d-flex align-items-center justify-content-center h-100 text-white fs-1\">
                                    <i class=\"fas fa-users\"></i>
                                </div>
                            ";
                }
                // line 27
                yield "                            <div class=\"overlay-gradient position-absolute bottom-0 start-0 w-100 p-3 text-white\" style=\"background: linear-gradient(180deg, transparent, rgba(44, 62, 80, 0.8));\">
                                <h5 class=\"mb-0 fw-bold\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["community"], "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</h5>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"text-muted small mb-3\" style=\"min-height: 3.6em;\">
                                ";
                // line 33
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["community"], "description", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "                                    ";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["community"], "description", [], "any", false, false, false, 34)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["community"], "description", [], "any", false, false, false, 34), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["community"], "description", [], "any", false, false, false, 34), "html", null, true)));
                    yield "
                                ";
                } else {
                    // line 36
                    yield "                                    <em>No description available</em>
                                ";
                }
                // line 38
                yield "                            </p>
                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <span class=\"badge bg-primary rounded-pill px-3 py-2 text-uppercase fw-semibold\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["community"], "category", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["community"], "category", [], "any", false, false, false, 40), "Uncategorized")) : ("Uncategorized")), "html", null, true);
                yield "</span>
                                <small class=\"text-muted d-flex align-items-center\">
                                    <i class=\"fas fa-users me-1\"></i> ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["community"], "memberCount", [], "any", false, false, false, 42), "html", null, true);
                yield " members
                                </small>
                            </div>
                            <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["community"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary w-100 rounded-pill fw-semibold\">
                                <i class=\"fas fa-eye me-2\"></i> View Community
                            </a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['community'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "        </div>
    ";
        } else {
            // line 54
            yield "        <div class=\"alert alert-info text-center fs-5\" role=\"alert\">
            <i class=\"fas fa-info-circle me-2\"></i> No communities found yet.
            <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community_new");
            yield "\" class=\"alert-link ms-1\">Create the first one!</a>
        </div>
    ";
        }
        // line 59
        yield "</div>

<style>
    .community-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(44, 62, 80, 0.3);
        z-index: 10;
    }
    .object-fit-cover {
        object-fit: cover;
        object-position: center;
    }
    .overlay-gradient h5 {
        text-shadow: 0 2px 6px rgba(0,0,0,0.7);
        font-size: 1.25rem;
    }
</style>
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
        return "community/index.html.twig";
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
        return array (  208 => 59,  202 => 56,  198 => 54,  194 => 52,  181 => 45,  175 => 42,  170 => 40,  166 => 38,  162 => 36,  156 => 34,  154 => 33,  146 => 28,  143 => 27,  137 => 23,  129 => 21,  127 => 20,  122 => 17,  118 => 16,  115 => 15,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Communities - MuseHub{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h2><i class=\"fas fa-users me-2 text-primary\"></i> Communities</h2>
        <a href=\"{{ path('app_community_new') }}\" class=\"btn btn-primary px-4 py-2 fw-semibold shadow-sm\" style=\"border-radius: 25px;\">
            <i class=\"fas fa-plus me-2\"></i> Create Community
        </a>
    </div>

    {% if communities|length > 0 %}
        <div class=\"row g-4\">
            {% for community in communities %}
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card shadow-sm rounded-4 overflow-hidden community-card\" style=\"cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease;\">
                        <div class=\"position-relative overflow-hidden\" style=\"height: 220px;\">
                            {% if community.imageUrl %}
                                <img src=\"{{ community.imageUrl }}\" alt=\"{{ community.name }}\" class=\"w-100 h-100 object-fit-cover\">
                            {% else %}
                                <div class=\"bg-secondary d-flex align-items-center justify-content-center h-100 text-white fs-1\">
                                    <i class=\"fas fa-users\"></i>
                                </div>
                            {% endif %}
                            <div class=\"overlay-gradient position-absolute bottom-0 start-0 w-100 p-3 text-white\" style=\"background: linear-gradient(180deg, transparent, rgba(44, 62, 80, 0.8));\">
                                <h5 class=\"mb-0 fw-bold\">{{ community.name }}</h5>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"text-muted small mb-3\" style=\"min-height: 3.6em;\">
                                {% if community.description %}
                                    {{ community.description|length > 120 ? community.description|slice(0, 120) ~ '...' : community.description }}
                                {% else %}
                                    <em>No description available</em>
                                {% endif %}
                            </p>
                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <span class=\"badge bg-primary rounded-pill px-3 py-2 text-uppercase fw-semibold\">{{ community.category|default('Uncategorized') }}</span>
                                <small class=\"text-muted d-flex align-items-center\">
                                    <i class=\"fas fa-users me-1\"></i> {{ community.memberCount }} members
                                </small>
                            </div>
                            <a href=\"{{ path('app_community_show', {'id': community.id}) }}\" class=\"btn btn-outline-primary w-100 rounded-pill fw-semibold\">
                                <i class=\"fas fa-eye me-2\"></i> View Community
                            </a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"alert alert-info text-center fs-5\" role=\"alert\">
            <i class=\"fas fa-info-circle me-2\"></i> No communities found yet.
            <a href=\"{{ path('app_community_new') }}\" class=\"alert-link ms-1\">Create the first one!</a>
        </div>
    {% endif %}
</div>

<style>
    .community-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(44, 62, 80, 0.3);
        z-index: 10;
    }
    .object-fit-cover {
        object-fit: cover;
        object-position: center;
    }
    .overlay-gradient h5 {
        text-shadow: 0 2px 6px rgba(0,0,0,0.7);
        font-size: 1.25rem;
    }
</style>
{% endblock %}
", "community/index.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\community\\index.html.twig");
    }
}
